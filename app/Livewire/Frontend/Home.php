<?php

namespace App\Livewire\Frontend;

use App\Models\citizen;
use App\Models\searchstore;
use App\Models\travelling;
use Livewire\Component;

class Home extends Component
{


    public $citizen = '';
    public $travelling = '';
    public $visa = '';

    public function updated($field)
    {
        $this->validateOnly($field,[

            'citizen' => 'required',
            'travelling' => 'required',
            'visa' => 'required',
        ]);
    }



    public function save(){

        $this->validate([
            'citizen' => 'required',
            'travelling' => 'required',
            'visa' => 'required',

        ],[
            'required' => 'Please fillup this field',
        ]);

            $data = new searchstore();
            $data->citizen = $this->citizen;
            $data->travelling = $this->travelling;
            $data->visa = $this->visa;
            $data->save();

            $this->reset();


            $id = $data->id;

            return redirect()->route('visa.visainformation',["$id"]);
    }


    public function render()
    {
        $citizens = citizen::all();
        $travellings = travelling::all(); 
        return view('livewire.frontend.home',compact('citizens','travellings'));
    }
}
