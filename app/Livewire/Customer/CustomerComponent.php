<?php

namespace App\Livewire\Customer;

use App\Models\customer;
use Livewire\Component;

class CustomerComponent extends Component
{
    public function render()

    {



        $customers = customer::all();

        $c = count($customers);

        return view('livewire.customer.customer-component',compact('customers','c'));
    }
}
