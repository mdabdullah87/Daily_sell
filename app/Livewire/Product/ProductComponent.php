<?php

namespace App\Livewire\Product;

use App\Models\category;
use App\Models\product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductComponent extends Component
{

         
    public $visa = '';
    public $travelling_id = '';



    public function updated($field)
    {
        $this->validateOnly($field,[

            'visa' => 'required',
            'travelling_id' => 'required',
           
        ]);
    }


    public function store(){


        $this->validate([
            'visa' => 'required',
            'travelling_id' => 'required',
            
        ],[
            'required' => 'Please fillup this field',
        ]);

            product::create([
                'user_id' => Auth::user()->id,
                'category_id' => $this->travelling_id,
                'product_name' => $this->visa,
            ]);
            

            session()->flash('origin', 'Product successfully Added!.');
            $this->reset();
            $this->dispatch('closeModal'); 
  } 

public function render()
{

    $visas = product::with('category')->get();
    $c = count($visas);

    $category = category::all();

    return view('livewire.product.product-component',compact('category','visas','c'));
}


}
