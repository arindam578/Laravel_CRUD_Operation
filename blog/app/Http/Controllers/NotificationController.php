<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\WelcomeNotification;
use Illuminate\Support\Facades\Notification;
class NotificationController extends Controller
{
    public function noti(){
        $user =User::first();
        $data = Notification::send($user, new WelcomeNotification);
        // for($i=1; $i<=10; $i++){
           
        // }
        // if($data){
        //     dd("mail send");
        // }else{
        //     dd("failed");
        // }
        // dd("done");
    }
}
