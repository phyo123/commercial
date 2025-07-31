@extends('layouts.app')

@section('title', 'Contact')

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
               <div class="login_bt"><a href="#">Login <i class="fa fa-user" aria-hidden="true"></i></a></div>
               <div class="fa fa-search form-control-feedback"></div>
            </form>
         </div>
      </nav>
   </div>
</div>
<!-- header section end -->

<!-- contact section start -->
<div class="contact_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-4">
            <div class="contact_main">
               <h1 class="contact_taital">Contact Us</h1>
               <form action="#" method="POST">
                  @csrf
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
                  <li>
                     <a href="#"><span class="padding_left_10 active"><i class="fa fa-map-marker"></i></span>Making this the first true</a>
                  </li>
                  <li>
                     <a href="#"><span class="padding_left_10"><i class="fa fa-phone"></i></span>Call : +01 1234567890</a>
                  </li>
                  <li>
                     <a href="#"><span class="padding_left_10"><i class="fa fa-envelope"></i></span>Email : demo@gmail.com</a>
                  </li>
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
         <a href="https://html.design">Free Html Templates</a> 
         Distribution by 
         <a href="https://themewagon.com">ThemeWagon</a>
      </p>
   </div>
</div>
<!-- copyright section end -->
@endsection
