<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;




// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/",[FrontPageController::class, 'index'])->name("front.home");

Route::get('/new', function () {
    return view('front');
});

Route::get("/example",function (){
    return "Hello from route laravel , This is first route ";
});
Route::get("/number/{id?}",function ($id = null){
    return "This number from uri {$id} and this is my name ";
});
Route::get("/sum/{num1}/{num2}",function ($num1,$num2){
    $sum = $num1 + $num2;
    return "This is Result : {$sum}";
});
Route::get("/name/{name}",function ($name){
    return "My name is : $name";
});
// Query Data from Array
Route::get("/book/{title?}",function ($title = null){
    $books = ["asp","laravel","javascript","csharp"];
    if($title == null){
        return $books;
    }
    $book = array_filter($books,fn($item) => $item == $title);
    return $book;
});

// Query Name in Array with array filter

Route::get("/fnName/{name?}",function ($name = null) {
    $names = ["chaly","leuy","long","senghun","chantha","Salun"];

    if($name == null){
        return $names;
    }
    $n = array_filter($names,fn($item) => $item == $name);
    return $n;
});

// Create Route name




//condition key role
// Route::get("/{id}",function ($id){
//     return $id;
// })-> where('id', '[0-5]+');
// Route::get("/{name}",function ($name){
//     return $name;
// })-> where('id','[a-zA-Z]+');

// How to create Controller
// Type in Terminal => php artisan make:controller NameController -> Enter


Route::prefix('post')->group(function () {
    Route::get('/index',[PostController::class,'index'])-> name('post.index');
    Route::get('/example1',[PostController::class,'Example1']);
    Route::get('/example2/{name}/{age}',[PostController::class,'Example2']) -> where(['name'=>'[a-zA-Z]+','age'=>'[0-9]+']);
});




