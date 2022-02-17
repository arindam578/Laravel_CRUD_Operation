<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function session_data(Request $request)
    {
    //    $request->session()->put('name', 'Mita Bera');
    //    $request->session()->put('city', 'Uluberia');

    //    $data = $request->session()->all();
    //     // return "This is Session page";

    //     //Retrive data from session//
    //     //$data = $request->session()->get('name');
    //     dd($data);

        // if($request->session()->exists('name')){
        //     dd("Your name is already exist");
        // }else{
        //     dd("PLease put data in session");
        // }
        // $request->session()->put('city', 'Kolkata');
        // // echo($request->session()->get('name'));
        // //$request->session()->forget('city');
        // echo($request->session()->get('city'));
        //$request->session()->flush();
        if($request->session()->exists('name')){
            //
            dd("data not found");
        }else{
            echo "<script>alert('data not found')</script>";
        }
    }
}
