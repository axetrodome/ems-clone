@extends('layouts.app')
{{-- jan 18 --}}
{{-- day 2--}}
<!-- goals tomorrow 
-post requests
-->

@section('content')
   <div class="parallax-container">
       <div class="parallax">
           <img src="https://c1.staticflickr.com/6/5239/5812976078_c3e160a40e_b.jpg" alt="school-parallax">
       </div>
   </div>

    <div class="container">
        <div class="row">
          <div class="col s6">

            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <span class="card-title">Enroll </span>
                <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
              </div>
              <div class="card-action">
                <a href="{{ route('student.register') }}">Register</a>
              </div>
            </div>

          </div>
          <div class="col s6">
              <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                  <span class="card-title">Info</span>
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                  <a href="#">Learn more</a>
                </div>
              </div>

          </div>
        </div>
        <div class="section white">
          <div class="row container">
            <h2 class="header">Heading</h2>
            <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
          </div>
        </div>
    </div>
@endsection
