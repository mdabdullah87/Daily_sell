<?php

namespace App\Http\Controllers\suplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class suplierController extends Controller
{
     public function suplier(){

        return view('backend.suplier.suplier');
     }
}
