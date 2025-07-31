<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/health', function () {
    return response()->json(['status' => 'OK']);
});



Route::get('/', function () {
    return view('index');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/nail', function () {
    return view('nail');
});

Route::get('/blog', function () {
    return view('blog');
});