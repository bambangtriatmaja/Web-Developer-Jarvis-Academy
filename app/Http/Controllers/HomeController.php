<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Membuat method index dan mengembalikan view home.blade.php
    function index(){
        return view('home');
    }
}
