<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    //
    public function index(){
        return view('front_home');
    }
    public function about()
     {
        $data['title'] = "About Us";
        $data['path'] = "About";
        return view('front_about',$data);
    }
    public function services(){
        $data["title"] = "Services";
        $data['path'] = "Services";
        return view("front_services",$data);
    }
    public function packages(){
        $data["title"] = "Packages";
        $data['path'] = "Packages";
        return view("front_packages",$data);
    }
    public function contact(){
        $data["title"] = "Contact Us";
        $data['path'] = "Contact";
        return view("front_contact",$data);
    }
    public function booking(){
        $data["title"] = "Booking";
        $data['path'] = "Book";
        return view("front_booking",$data);
    }
    public function destination(){
        $data["title"] = "Destination";
        $data['path'] = "Destination";
        return view("front_destination",$data);
    }
    public function travel_guide(){
        $data["title"] = "Travel Guide";
        $data['path'] = "Travel";
        return view("front_travel_guide",$data);
    }
    public function testimonial(){
        $data["title"] = "Testimonial";
        $data['path'] = "Testimonial";
        return view("front_testimonial",$data);
    }
    public function error_page(){
        $data['title'] = "Not Found";
        $data['path'] = "404";
        return view("front_error",$data);
    }
}
