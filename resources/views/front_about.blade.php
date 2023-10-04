@extends("front_master")
@section("content")
    @include("partials.navbar")
    <!-- About Start -->
        @include('partials.about')
    <!-- About End -->

    <!-- Team Start -->
        @include('partials.travel_guide')
    <!-- Team End -->

@endsection("content")
   
