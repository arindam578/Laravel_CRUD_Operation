<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Notification;
use App\Notifications\EmailtNotification;

class HomeController extends Controller
{
    public function sendNoti(){
        $user = User::first();
        $details = [
            'greeting'=>'Hi laravel',
            'body'=>'email body',
            'actiontext'=>'Thank you',
            'actionurl'=>'/',
            'lastline'=>'last line',
        ];

       
        for($i=1; $i<=20; $i++){
            $data =Notification::send($user, new EmailtNotification($details));
        }
        if($data){
            dd("send mail");
        }else{
            dd("dont send");
        }
    }
}
