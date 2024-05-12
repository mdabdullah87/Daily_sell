<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\citizen;
use App\Models\travelling;
use App\Models\visa;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function frontend(){
        
        return view('frontend.index');
    }





    public function visainformation($id){

        $id = $id;


        return view('frontend.singlevisa',compact('id'));
    }




    public function travelling(Request $request){

        $travelling_id = $request->data;

        $visas = visa::where('travelling_id', $travelling_id)->get();


        $html = '<option value="">Select one</option>';
        foreach ($visas as $visa) {

            $html .= '<option value="' . $visa->id . '">' . $visa->visa . '</option>';
        }

        echo $html;
    }

}
