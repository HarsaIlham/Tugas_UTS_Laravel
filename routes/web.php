<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function() {
    return view('home.index');
});

Route::get('/contact',[Contactcontroller::class, 'contact'])->name('contact');
Route::get('/create',[Contactcontroller::class, 'create'])->name('create');
Route::post('/create',[Contactcontroller::class, 'store'])->name('store-user');
Route::get('/edit-user/{user}',[Contactcontroller::class, 'edit'])->name('edit-user');
Route::put('/update-user/{user}',[Contactcontroller::class, 'update'])->name('update-user');
Route::delete('/delete-user/{user}',[Contactcontroller::class, 'destroy'])->name('delete-user');



Route::get('/login', function(){ 
    return view('auth.login');
});
Route::get('/register', function(){ 
    return view('auth.register');
});