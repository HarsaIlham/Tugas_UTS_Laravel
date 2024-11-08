<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class Contactcontroller extends Controller
{
    public function contact(){
        $users = User::all();
        return view('contact.index',['users'=>$users]);
    }    

    public function create(){
        return view('auth.create');
    }

    public function store(Request $request){
        User::create([
            "name" => $request -> name,
            "email" => $request -> email,
            "password" => $request -> password,
            "phone"=> $request -> phone
        ]);

        return redirect()->route('contact'); 
    }

    public function edit(User $user){
        return view('auth.edit', compact("user"));
    }

    public function update(Request $request, User $user){
        $user->update([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>$request->password,
            "phone"=>$request->phone
        ]);

        return redirect()->route('contact');
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->route('contact');
    }
}

