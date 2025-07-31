@extends('layouts.app')

@section('title', 'Services')

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
               <li class="nav-item"><a class="nav-link" href="#">About</a></li>
               <li class="nav-item"><a class="nav-link" href="#">Icecream</a></li>
               <li class="nav-item"><a class="nav-link" href="{{ url('/services') }}">Services</a></li>
               <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
               <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact Us</a></li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
               <div class="login_bt"><a href="#">Login <i class="fa fa-user"></i></a></div>
               <div class="fa fa-search form-control-feedback"></div>
            </form>
         </div>
      </nav>
   </div>
</div>
<!-- header section end -->

<!-- services section start -->
<div class="services_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="services_taital">Our Ice Cream Services</h1>
            <p class="services_text">tempor incididunt ut labore et dolore magna aliqua</p>
         </div>
      </div>
      <div class="services_section_2">
         <div class="row">
            <div class="col-md-4">
               <div class="services_box">
                  <h5 class="tasty_text">
                     <span class="icon_img">
                        <img src="{{ asset('theme/images/icon-1.png') }}" alt="Service Icon 1">
                     </span> Cookies Ice Cream
                  </h5>
                  <p class="lorem_text">commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fat</p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="services_box">
                  <h5 class="tasty_text">
                     <span class="icon_img">
                        <img src="{{ asset('theme/images/icon-2.png') }}" alt="Service Icon 2">
                     </span> Cookies Ice Cream
                  </h5>
                  <p class="lorem_text">commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fat</p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="services_box">
                  <h5 class="tasty_text">
                     <span class="icon_img">
                        <img src="{{ asset('theme/images/icon-1.png') }}" alt="Service Icon 3">
                     </span> Cookies Ice Cream
                  </h5>
                  <p class="lorem_text">commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fat</p>
               </div>
            </div>
         </div>
      </div>
      <div class="seemore_bt"><a href="#">Read More</a></div>
   </div>
</div>
<!-- services section end -->

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
