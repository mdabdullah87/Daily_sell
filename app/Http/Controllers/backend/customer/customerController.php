<?php

namespace App\Http\Controllers\backend\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function customers(){

        return view('backend.customer.customer');
    }
}
