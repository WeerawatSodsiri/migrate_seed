<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function myshop()
    {
        $address = "IT CP KKU";
        $mobliephone = "0888888888";
        $location = "Kohn Kean";

        return view('myshop',[
            'address'=>$address,
            'mobliephone'=>$mobliephone,
            'location'=>$location
        ]);    
    }
}
