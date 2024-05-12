<?php

namespace App\Livewire\Product;

use App\Models\buy;
use App\Models\cart;
use App\Models\order;
use App\Models\product;
use App\Models\visa;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;

class SellproductComponent extends Component
{

    public $id;
    public $price;
    public $cus_id;
    public $count_cartlist = '';
    
    public $amount;
    public $decriamount;
    public $dueamount;
    public $searchTerm = '';

    public $cus_due_amount = '';

    public $cus_redue_amount = '';

    public $total_due_amount = '';

    public $total_joma_amount = '';


   

    
    public function save($id){

         $id = $id;

         $sdata = buy::Where('id',$id)->first();

         $data = new cart();

         $data->user_id = Auth::user()->id;
         $data->productname = $sdata->productname;
         $data->price = $sdata->price;
         $data->old_price = $sdata->price;
         $data->save();
        
    }


    public function updatePrice($id){

            
        $cart = cart::whereId($id)->first();

        $this->id = $id;
        $this->price = $cart->price;

        $this->dispatch('success'); 

    }


    public function updatepricefromModel(){

            
           $data = cart::find($this->id);

           $data->price = $this->price;
           $data->save();

        $this->dispatch('closeModel');

    }



    public function updateqty($id){

        $cart = cart::whereId($id)->first();
        $cart->quantity += 1;
        $cart->save();

    }

    public function updateqtydecri($id){

            $cart = cart::whereId($id)->first();

            if($cart->quantity > 1){
                $cart->quantity -= 1;
                $cart->save();
            }else{


            }
    }

    public function deleteBTN($id){


            $cart = cart::whereId($id)->first();

            $cart->delete();
           
    }




    public function updated($field)
    {
        $this->validateOnly($field,[

            'cus_id' => 'required',
           
        ]);
    }

    



public function order(){


        $this->validate([
            'cus_id' => 'required',
        ],[
            'required' => 'Please Select a customer or add new',
        ]);


        $cartdata = cart::where('user_id',Auth::user()->id)->get();
        foreach($cartdata as $data){
            $order = new order();
            $cus_id = $this->cus_id;
            $order->user_id = Auth::user()->id;
            $order->customer_id = $cus_id;
            $order->product_name = $data->productname;
            $order->buy_price = $data->old_price;
            $order->sell_price = $data->price;
            $order->save();
        }

        $orderamount = new order();
        $orderamount->user_id = Auth::user()->id;
        $orderamount->customer_id = $cus_id;
        $orderamount->paid_amount = $this->decriamount;
        $orderamount->due_amount = $this->dueamount;

        if($this->amount == $this->decriamount){

        $orderamount->paid_amount = $this->decriamount;
        }

        $orderamount->save();

        // $pdf = Pdf::loadView('backend.product.pdf');

        // return $pdf->download();

        // dd("ok");

        $deletedata = cart::where('user_id',Auth::user()->id)->get();
        
        foreach($deletedata as $cartdelete){

            $cart_delete_sdata = cart::whereId($cartdelete->id)->first()->delete();
           
        }



        $this->dispatch('refresh'); 

        return redirect(route('product.invice',compact($this->cus_id)));
        

            // session()->flash('origin', 'Product successfully Added!.');
           // $this->reset();
            // $this->dispatch('closeModal'); 
  } 




  
  public function render()
  {

      $cart = cart::all();
      $amount = 0;
      foreach($cart as $productprice){

          $amount +=  $productprice->price;
      }

      $this->amount = $amount;

      if($this->decriamount != null){

         $this->dueamount = $this->amount - $this->decriamount;

      }


      if($this->amount == $this->decriamount){

            $this->amount = 0;
      }


      $baki_amount = order::where('customer_id',$this->cus_id)->get();

      $this->cus_due_amount = $baki_amount;

      $cus_re_amount = 0;

      foreach($baki_amount as $cus_repaidamount){

            $cus_re_amount += $cus_repaidamount->due_amount;

      }

      $this->cus_redue_amount = $cus_re_amount;

      $this->total_due_amount = $this->dueamount + $this->cus_redue_amount;


      if (isset($this->total_due_amount)){
        if (substr(strval($this->total_due_amount), 0, 1) == "-"){

        $this->total_joma_amount = abs($this->total_due_amount);

        

    } else {
       
    }
        }



      $products = buy::where('productname','like','%'.$this->searchTerm.'%')->where('user_id',Auth::user()->id)->get();
      $cartlist = cart::all();
      $this->count_cartlist = count($cartlist);

      return view('livewire.product.sellproduct-component',compact('products','cartlist','amount'));

  }



}
