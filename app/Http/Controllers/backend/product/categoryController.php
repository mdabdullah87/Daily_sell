<?php

namespace App\Http\Controllers\backend\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function category(){

       return view('backend.product.category');
    }
}
