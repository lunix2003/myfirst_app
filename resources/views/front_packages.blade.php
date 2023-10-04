@extends("front_master")
@section("content")
    @include("partials.navbar")
    <!-- Package Start -->
        @include('partials.packages')
    <!-- Package End -->


    <!-- Booking Start -->
        @include('partials.booking')
    <!-- Booking Start -->


    <!-- Process Start -->
        @include('partials.proccess')
    <!-- Process Start -->
        
@endsection("content")