
@extends("front_master")
@section("content")
    <!-- Navbar & Hero Start -->
    @include("search_home")
    <!-- Navbar & Hero End -->


    <!-- About Start -->
        @include('partials.about')
    <!-- About End -->


    <!-- Service Start -->
        @include('partials.services')
    <!-- Service End -->


    <!-- Destination Start -->
        @include('partials.destination')
    <!-- Destination Start -->


    <!-- Package Start -->
        @include('partials.packages')
    <!-- Package End -->


    <!-- Booking Start -->
        @include('partials.booking')
    <!-- Booking Start -->


    <!-- Process Start -->
        @include('partials.proccess')
    <!-- Process Start -->


    <!-- Team Start -->
        @include('partials.travel_guide')
    <!-- Team End -->


    <!-- Testimonial Start -->
        @include('partials.testimonial')
    <!-- Testimonial End -->
        
@endsection("content")