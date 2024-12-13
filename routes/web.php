<?php

use Illuminate\Support\Facades\Route;
use App\Mail\newLaravelTips;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('envio-email', function(){

    $user = new stdClass();
    $user->name = 'Bruno Silva';
    $user->email = 'bruno@email.com';

    //return new \App\Mail\newLaravelTips($user);
    //\Illuminate\Support\Facades\Mail::send(new \App\Mail\newLaravelTips($user));
    Mail::send(new newLaravelTips($user));
});