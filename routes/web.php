<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});


Route::get('/artikel', function() {
    return view('artikel');
});


Route::get('/about', function() {
    return view('about');
});

Route::get('/pembina-scout-spendasi', function() {
    return view('pembina-scout-spendasi');
});

Route::get('/dewan-galang', function() {
    return view('dewan-galang');
});

Route::get('/prestasi', function() {
    return view('prestasi');
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
