<?php

namespace App\Livewire\Frontend;

use App\Models\visabooking;
use Livewire\Component;

class Visainformation extends Component
{


    public $Searchid = '';
    public $name = '';
    public $mobaile = '';
    public $email = '';

    public function updated($field)
    {
        $this->validateOnly($field,[

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
            'required' => 'Please fillup this field',
        ]);

            $data = new visabooking();
            $data->name = $this->name;
            $data->mobaile = $this->mobaile;
            $data->Searchid = $this->Searchid;
            $data->email = $this->email;
            $data->save();

            session()->flash('message', 'Your Booking Information Send Successfully Done!');
            $this->reset();
            $this->dispatch('closeModal'); 
          
    }
    public function render()
    {
        return view('livewire.frontend.visainformation');
    }
}
