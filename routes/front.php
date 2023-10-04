<?php

use App\Http\Controllers\FrontPageController;
use Illuminate\Support\Facades\Route;


Route::get("front",function (){
    return view("front");
});
// Route::get('/home',function (){
//     return view('app');
// });

Route::get("/",[FrontPageController::class, 'index'])->name("front_home");
Route::get("/about",[FrontPageController::class, 'about'])->name("front_about");
Route::get("/services",[FrontPageController::class, 'services'])->name("front_services");
Route::get("/packages",[FrontPageController::class, 'packages'])->name("front_packages");
Route::get("/contact",[FrontPageController::class, 'contact'])->name("front_contact");
Route::get("/booking",[FrontPageController::class, 'booking'])->name("front_booking");
Route::get("/destination",[FrontPageController::class, 'destination'])->name("front_destination");
Route::get("/testimonial",[FrontPageController::class, 'testimonial'])->name("front_testimonial");
Route::get("/travel_guide",[FrontPageController::class, 'travel_guide'])->name("front_travel_guide");
Route::get("/error", [FrontPageController::class, 'error_page']);


Route::get("master", function (){
    return view("front_master");
});
