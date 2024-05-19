<?php

use App\Http\Controllers\KullaniciController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GirisController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/htmlregister', function(){
   return view('html5register');
});

Route::get('/htmllogin', function(){
    return view('html5login');
 });
 Route::post('/register', [KullaniciController::class, 'register']);

 Route::post('/login',[GirisController::class, 'login']);

 Route::view('/success', 'success');
 Route::view('/fail', 'fail');
