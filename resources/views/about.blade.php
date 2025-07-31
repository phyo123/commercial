@extends('layouts.app')

@section('title', 'About')

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
               <li class="nav-item"><a class="nav-link" href="#">Icecream</a></li>
               <li class="nav-item"><a class="nav-link" href="{{ url('/services') }}">Services</a></li>
               <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
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

<!-- about section start -->
<div class="about_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="about_img">
               <img src="{{ asset('theme/images/about-img.png') }}" alt="About Image">
            </div>
         </div>
         <div class="col-md-6">
            <h1 class="about_taital">About Icecream</h1>
            <p class="about_text">
               Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
               Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
               Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore euconsectetur adipiscing esequat.
               Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.
            </p>
            <div class="read_bt_1"><a href="#">Read More</a></div>
         </div>
      </div>
   </div>
</div>
<!-- about section end -->

<!-- copyright section start -->
<div class="copyright_section margin_top90">
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
