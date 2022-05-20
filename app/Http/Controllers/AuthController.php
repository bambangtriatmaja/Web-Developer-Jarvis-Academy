<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Method register mengembalikan tampilan register.blade.php
    function register(){
        return view('register');
    }

    // Method welcome mengembalikan tampilan welcome.blade.php dan request dari form register
    function welcome(Request $request){
        $firstname= $request->input('firstname');
        $lastname = $request->input('lastname');

        $fullname = $firstname." ".$lastname;

        return view('welcome', ['fullname' => $fullname]);
    }
}
