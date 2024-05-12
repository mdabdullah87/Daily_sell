<?php

namespace App\Http\Controllers\backend\product;

use App\Http\Controllers\Controller;
use App\Models\cart;
use App\Models\travelling;
use App\Models\visa;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\alert;

class productController extends Controller
{
   public function product(){

    return view('backend.product.product');
   }


   public function buy(){

      return view('backend.product.buy');
      
   }




   public function quantity_update(Request $request){

         $data = $request->data;

         return response($data);
   }


   public function price_update(Request $request){

         $data = $request->data;
      
         return response($data);
   }

   public function deleteId(Request $request){

         $data = $request->data;

         cart::find($data)->delete();

         return response()->json(['success' => 'Product Deleted Successfully!']);


   }

   public function sellproduct(){

         return view('backend.product.sellproduct');
   }


   public function invice(){


      $pdf = Pdf::loadView('backend.product.pdf');

      
 
      return  $pdf->download('mypdf');


   }


}
