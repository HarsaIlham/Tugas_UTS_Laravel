<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function() {
    return view('home.index');
});

Route::get('/contact',[Contactcontroller::class, 'contact'])->name('contact');


Route::get('/login', function(){ 
    return view('auth.login');
});
Route::get('/register', function(){ 
    return view('auth.register');
});