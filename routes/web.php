<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return view('home');
    });

Route::get('/about', function () {
return view('about');
    });

Route::get('/skills', function () {
return view('skils');
    });

Route::get('/contact', function () {
return view('contact');
    });
