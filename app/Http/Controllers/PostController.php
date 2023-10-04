<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        //return view('post.index');
        return "<center><h2>Index function</h2></center>";
    }

    public function Example1()
    {
        return "This is an Example 1 of Controller post!";
    }
    public function Example2($name,$age)
    {
        return "Hello , My name is $name , i'm $age years old!";
    }

    // Extends : បន្ថែមធាតុ Controller​ មកកាន់ PostController
    public $name = "Salun";
    public function sum($num1, $num2)  
    {
        return ($num1 + $num2);
    }
}
