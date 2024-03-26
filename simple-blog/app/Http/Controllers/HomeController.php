<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home/index");
    }

    public function sign_in(){
        return view("auth/sign-in");
    }
}
