@extends('layouts.app')

@section('title', 'PONYNAIL')

@section('content')
<div class="header_section">
   <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('theme/images/nail/jj.jpg') }}" alt="Logo" width="100" height="50">
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

   <!-- banner section start -->
   <div class="banner_section layout_padding">
      <div class="container">
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
               <li data-target="#carouselExampleIndicators" data-slide-to="3">04</li>
            </ol>
            <div class="carousel-inner">
               @for ($i = 0; $i < 4; $i++)
               <div class="carousel-item @if($i === 0) active @endif">
                  <div class="row">
                     <div class="col-sm-6">
                        <h1 class="banner_taital">Ice Cream</h1>
                        <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                        <div class="started_text"><a href="#">Order Now</a></div>
                     </div>
                     <div class="col-sm-6">
                        <div class="banner_img">
                           <img src="{{ asset('theme/images/nail/aa.jpg') }}" alt="Banner" width="80%" height="100%">
                        </div>
                     </div>
                  </div>
               </div>
               @endfor
            </div>
         </div>
      </div>
   </div>
   <!-- banner section end -->
</div>

<!-- about section start -->
<div class="about_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="about_img">
               <img src="{{ asset('theme/images/nail/ee.jpg') }}" alt="About">
            </div>
         </div>
         <div class="col-md-6">
            <h1 class="about_taital">About Icecream</h1>
            <p class="about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            <div class="read_bt_1"><a href="#">Read More</a></div>
         </div>
      </div>
   </div>
</div>
<!-- about section end -->
<!-- cream section start -->
<div class="cream_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="cream_taital">Our Featured Ice Cream</h1>
            <p class="cream_text">tempor incididunt ut labore et dolore magna aliqua</p>
         </div>
      </div>

      {{-- First row of products --}}
      <div class="cream_section_2">
         <div class="row">
            <div class="col-md-4">
               <div class="cream_box">
                  <div class="cream_img">
                     <img src="{{ asset('theme/images/nail/kk.jpg') }}" alt="Strawberry Ice Cream" height="100">
                  </div>
                  <div class="price_text">$10</div>
                  <h6 class="strawberry_text">Strawberry Ice Cream</h6>
                  <div class="cart_bt"><a href="#">Add To Cart</a></div>
               </div>
            </div>

            <div class="col-md-4">
               <div class="cream_box">
                  <div class="cream_img">
                     <img src="{{ asset('theme/images/nail/dd.jpg') }}" alt="Strawberry Ice Cream" height="100">
                  </div>
                  <div class="price_text">$10</div>
                  <h6 class="strawberry_text">Strawberry Ice Cream</h6>
                  <div class="cart_bt"><a href="#">Add To Cart</a></div>
               </div>
            </div>

            <div class="col-md-4">
               <div class="cream_box">
                  <div class="cream_img">
                     <img src="{{ asset('theme/images/nail/ff.jpg') }}" alt="Strawberry Ice Cream" height="100">
                  </div>
                  <div class="price_text">$10</div>
                  <h6 class="strawberry_text">Strawberry Ice Cream</h6>
                  <div class="cart_bt"><a href="#">Add To Cart</a></div>
               </div>
            </div>
         </div>
      </div>

      {{-- Second row of products --}}
      <div class="cream_section_2">
         <div class="row">
            <div class="col-md-4">
               <div class="cream_box">
                  <div class="cream_img">
                     <img src="{{ asset('theme/images/nail/cc.jpg') }}" alt="Strawberry Ice Cream" height="100">
                  </div>
                  <div class="price_text">$10</div>
                  <h6 class="strawberry_text">Strawberry Ice Cream</h6>
                  <div class="cart_bt"><a href="#">Add To Cart</a></div>
               </div>
            </div>

            <div class="col-md-4">
               <div class="cream_box">
                  <div class="cream_img">
                     <img src="{{ asset('theme/images/nail/hh.jpg') }}" alt="Strawberry Ice Cream" height="100">
                  </div>
                  <div class="price_text">$10</div>
                  <h6 class="strawberry_text">Strawberry Ice Cream</h6>
                  <div class="cart_bt"><a href="#">Add To Cart</a></div>
               </div>
            </div>

            <div class="col-md-4">
               <div class="cream_box">
                  <div class="cream_img">
                     <img src="{{ asset('theme/images/nail/ii.jpg') }}" alt="Strawberry Ice Cream" height="100">
                  </div>
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
            @foreach (range(1,3) as $i)
            <div class="col-md-4">
               <div class="services_box">
                  <h5 class="tasty_text">
                     <span class="icon_img">
                        <img src="{{ asset('theme/images/icon-' . ($i % 2 == 0 ? '2' : '1') . '.png') }}" alt="Service Icon">
                     </span> Cookies Ice Cream
                  </h5>
                  <p class="lorem_text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
               </div>
            </div>
            @endforeach
         </div>
      </div>
      <div class="seemore_bt"><a href="#">Read More</a></div>
   </div>
</div>
<!-- services section end -->
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
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...
                           </p>
                           <h4 class="client_name">Marri Fen</h4>
                           <div class="client_img">
                              <img src="{{ asset('theme/images/nail/about.jpg') }}" alt="Client" width="100" height="100">
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

<!-- contact section start -->
<div class="contact_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-4">
            <div class="contact_main">
               <h1 class="contact_taital">Contact Us</h1>
               <form action="#" method="POST">
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Name" name="name">
                  </div>
                  <div class="form-group">
                     <input type="email" class="email-bt" placeholder="Email" name="email">
                  </div>
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Phone Number" name="phone">
                  </div>
                  <div class="form-group">
                     <textarea class="massage-bt" placeholder="Message" rows="5" name="message"></textarea>
                  </div>
                  <div class="main_bt"><a href="#">SEND</a></div>
               </form>
            </div>
         </div>
         <div class="col-md-8">
            <div class="location_text">
               <ul>
                  <li><a href="#"><span class="padding_left_10 active"><i class="fa fa-map-marker"></i></span>Making this the first true</a></li>
                  <li><a href="#"><span class="padding_left_10"><i class="fa fa-phone"></i></span>Call : +01 1234567890</a></li>
                  <li><a href="#"><span class="padding_left_10"><i class="fa fa-envelope"></i></span>Email : demo@gmail.com</a></li>
               </ul>
            </div>
            <div class="mail_main">
               <h3 class="newsletter_text">Newsletter</h3>
               <div class="form-group">
                  <textarea class="update_mail" placeholder="Enter Your Email" rows="1" name="newsletter"></textarea>
                  <div class="subscribe_bt"><a href="#">Subscribe</a></div>
               </div>
            </div>
            <div class="footer_social_icon">
               <ul>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- contact section end -->

<!-- copyright section start -->
<div class="copyright_section">
   <div class="container">
      <p class="copyright_text">
         2020 All Rights Reserved. Design by 
         <a href="https://html.design">Free Html Templates</a> Distribution by 
         <a href="https://themewagon.com">ThemeWagon</a>
      </p>
   </div>
</div>
<!-- copyright section end -->

@endsection
