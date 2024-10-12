<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('en.home');
});

Route::get('/about', function () {
    return view('en.pages.about_us');
});

Route::get('/services', function () {
    return view('en.pages.services');
});