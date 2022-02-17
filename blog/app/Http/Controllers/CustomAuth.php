<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use Session;
use Hash;
class CustomAuth extends Controller
{
    public function register(){
        return view("registration");
    }
    public function login(){
        return view("login");
    }
    public function register_user(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:teachers',
            'password' => 'required|min:5|max:8'
        ]);
        
        $user = new Teacher();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $res= $user->save();
        if($res){
            return back()->with("success", "Your Registration Done");
        }else{
            return back()->with("fail", "Your Registration Failed");
        }
        
       
    }


    public function login_user(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = Teacher::where('email', '=', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            }else{
                return back()->with('fail', 'Pasowrd dont match');
            }
            return back()->with("success", "Your Login Done");
        }else{
            return back()->with("fail", "This email is not registered");
        }
    }

    public function dashboard(){
        $data = array();
        if(Session::has('loginId')){
            $data = Teacher::where('email', '=', Session::get('loginId'))->first();
        }
        return view('dashboard', compact('data'));
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }
}
