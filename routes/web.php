<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});


Route::get('/blog', function() {
    return view('blog', ['title' => 'Blog Page']);
});


Route::get('/about', function() {
    return view('about');
});

Route::get('/achievment', function() {
    return view('achievment');
});


Route::get('/contact', function() {
    return view('contact');
});

Route::get('/login', function() {
    return view('login');
});

Route::get('/register', function() {
    return view('register');
});
