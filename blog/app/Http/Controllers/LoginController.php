<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){
        $data = $request->input('user');
        $request->session()->put('user', $data);
        echo session('user');
    }
}
