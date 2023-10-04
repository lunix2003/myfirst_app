@extends("front_master")
@section("content")

    @include("partials.navbar")
    
    <!-- Service Start -->
    @include('partials.services')
    <!-- Service End -->

      <!-- Destination Start -->
      @include('partials.destination')
    <!-- Destination Start -->

@endsection('content')