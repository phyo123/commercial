@extends('layouts.app')

@section('title', 'Icecream')

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

<!-- cream section start -->
<div class="cream_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="cream_taital">Our Featured Ice Cream</h1>
            <p class="cream_text">tempor incididunt ut labore et dolore magna aliqua</p>
         </div>
      </div>

      {{-- First Row --}}
      <div class="cream_section_2">
         <div class="row">
            <div class="col-md-4">
               <div class="cream_box">
                  <div class="cream_img"><img src="{{ asset('theme/images/img-1.png') }}" alt="Icecream 1"></div>
                  <div class="price_text">$10</div>
                  <h6 class="strawberry_text">Strawberry Ice Cream</h6>
                  <div class="cart_bt"><a href="#">Add To Cart</a></div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="cream_box">
                  <div class="cream_img"><img src="{{ asset('theme/images/img-2.png') }}" alt="Icecream 2"></div>
                  <div class="price_text">$10</div>
                  <h6 class="strawberry_text">Strawberry Ice Cream</h6>
                  <div class="cart_bt"><a href="#">Add To Cart</a></div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="cream_box">
                  <div class="cream_img"><img src="{{ asset('theme/images/img-1.png') }}" alt="Icecream 3"></div>
                  <div class="price_text">$10</div>
                  <h6 class="strawberry_text">Strawberry Ice Cream</h6>
                  <div class="cart_bt"><a href="#">Add To Cart</a></div>
               </div>
            </div>
         </div>
      </div>

      {{-- Second Row --}}
      <div class="cream_section_2">
         <div class="row">
            <div class="col-md-4">
               <div class="cream_box">
                  <div class="cream_img"><img src="{{ asset('theme/images/img-3.png') }}" alt="Icecream 4"></div>
                  <div class="price_text">$10</div>
                  <h6 class="strawberry_text">Strawberry Ice Cream</h6>
                  <div class="cart_bt"><a href="#">Add To Cart</a></div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="cream_box">
                  <div class="cream_img"><img src="{{ asset('theme/images/img-4.png') }}" alt="Icecream 5"></div>
                  <div class="price_text">$10</div>
                  <h6 class="strawberry_text">Strawberry Ice Cream</h6>
                  <div class="cart_bt"><a href="#">Add To Cart</a></div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="cream_box">
                  <div class="cream_img"><img src="{{ asset('theme/images/img-5.png') }}" alt="Icecream 6"></div>
                  <div class="price_text">$10</div>
                  <h6 class="strawberry_text">Strawberry Ice Cream</h6>
                  <div class="cart_bt"><a href="#">Add To Cart</a></div>
               </div>
            </div>
         </div>
      </div>

      <div class="seemore_bt"><a href="#">See More</a></div>
   </div>
</div>
<!-- cream section end -->

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
