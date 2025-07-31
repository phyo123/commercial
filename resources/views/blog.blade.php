@extends('layouts.app')

@section('title', 'Blog')

@section('content')
<!-- header section start -->
<div class="header_section header_bg">
   <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('theme/images/logo.png') }}" alt="Logo">
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item active"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
               <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
               <li class="nav-item"><a class="nav-link" href="{{ url('/nail') }}">Icecream</a></li>
               <li class="nav-item"><a class="nav-link" href="{{ url('/services') }}">Services</a></li>
               <li class="nav-item"><a class="nav-link" href="{{ url('/blog') }}">Blog</a></li>
               <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact Us</a></li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
               <div class="login_bt"><a href="#">Login <i class="fa fa-user" aria-hidden="true"></i></a></div>
               <div class="fa fa-search form-control-feedback"></div>
            </form>
         </div>
      </nav>
   </div>
</div>
<!-- header section end -->

<!-- testimonial section start -->
<div class="testimonial_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="testimonial_taital">Testimonial</h1>
         </div>
      </div>
      <div class="testimonial_section_2">
         <div class="row">
            <div class="col-md-12">
               <div class="testimonial_box">
                  <div id="main_slider" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner">
                        @for ($i = 0; $i < 3; $i++)
                        <div class="carousel-item @if($i === 0) active @endif">
                           <p class="testimonial_text">
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco...
                           </p>
                           <h4 class="client_name">Marri Fen</h4>
                           <div class="client_img">
                              <img src="{{ asset('theme/images/client-img.png') }}" alt="Client Image">
                           </div>
                        </div>
                        @endfor
                     </div>
                     <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                     </a>
                     <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- testimonial section end -->

<!-- copyright section start -->
<div class="copyright_section">
   <div class="container">
      <p class="copyright_text">
         2020 All Rights Reserved. Design by 
         <a href="https://html.design">Free Html Templates</a> 
         Distribution by 
         <a href="https://themewagon.com">ThemeWagon</a>
      </p>
   </div>
</div>
<!-- copyright section end -->
@endsection
