<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front_home');
    }
    public function about(){
        return view('front_about');
    }
}
