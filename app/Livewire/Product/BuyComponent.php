<?php

namespace App\Livewire\Product;

use App\Models\buy;
use App\Models\citizen;
use App\Models\suplier;
use App\Models\travelling;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BuyComponent extends Component
{

    


    
    public $seller_id = '';
    public $productname = '';
    public $price = '';


    public function updated($field)
    {
        $this->validateOnly($field,[

            'seller_id' => 'required',
            'productname' => 'required',
            'price' => 'required',

        ]);
    }

    public function store(){

        $this->validate([
            'seller_id' => 'required',
            'productname' => 'required',
            'price' => 'required',

        ],[
            'required' => 'Please select a seller',
            'required' => 'Please type productname',
            'required' => 'Please type price',
        ]);


                buy::create([
                'user_id' => Auth::user()->id,
                'sellername' => $this->seller_id,
                'productname' => $this->productname,
                'price' => $this->price,

            ]);

            session()->flash('origin', 'Product successfully Added!.');
            $this->reset();
            
            $this->dispatch('closeModal'); 
    }

    public function render()
    {

        $bought = buy::all();

        $c = count($bought);

        $sellers = suplier::all();

        return view('livewire.product.buy-component',compact('bought','c','sellers'));
    }

   
}
