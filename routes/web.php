<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('envio-email', function(){
    return new \App\Mail\newLaravelTips();
});