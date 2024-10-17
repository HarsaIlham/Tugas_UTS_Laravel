<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as Faker;


class Contactcontroller extends Controller
{
    public function contact(){
        $contacts = [];
        $faker = Faker::create();
        for ($i = 1; $i <= 10; $i++) {
            $contacts[] = [
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber
            ];
        }
        return view('contact.index',['contacts'=>$contacts]);
    }    
}

