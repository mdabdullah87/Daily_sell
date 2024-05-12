<?php

namespace App\Livewire\Suplier;

use App\Models\buy;
use App\Models\suplier;
use Livewire\Component;

class SuplierComponent extends Component
{


    public $name = '';
    public $mobaile = '';
    public $email = '';



    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'name' => 'required',
            'mobaile' => 'required',
            'email' => 'required',

        ]);
    }


    
    public function store(){

      
        $this->validate([
            'name' => 'required',
            'mobaile' => 'required',
            'email' => 'required',

        ],[
            'required' => 'Please enter your name',
            'required' => 'Please enter your phone number',
            'required' => 'Please enter your email',
            
        ]);


                suplier::create([
                   
                'name' => $this->name,
                'mobile' => $this->mobaile,
                'email' => $this->email,

            ]);

            session()->flash('origin', 'Suplier successfully Added!.');
            $this->reset();
            $this->dispatch('closeModal'); 

 

}




    public function render()
    {

        $supliers = suplier::all();
        $countdata = suplier::all();

        $c =  count($countdata);

        return view('livewire.suplier.suplier-component',compact('c','supliers'));
    }
}
