<?php

namespace App\Livewire\Category;

use App\Models\category;
use App\Models\citizen;
use App\Models\travelling;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CategoryComponent extends Component
{



    
    
    public $travelling = '';


    public function updated($field)
    {
        $this->validateOnly($field,[

            'travelling' => 'required',

        ]);
    }

    public function store(){

        $this->validate([
            'travelling' => 'required',

        ],[
            'required' => 'Please type origin',
        ]);


                category::create([
                   
                'user_id' => Auth::user()->id,
                'category' => $this->travelling,


            ]);

            session()->flash('origin', 'Category successfully Added!.');
            $this->reset();
            $this->dispatch('closeModal'); 
    }



    public function render()
    {
    
        $category = category::all();
        $councategory = count($category);
        return view('livewire.category.category-component',compact('category','councategory'));
    }

    
}
