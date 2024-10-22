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

Route::get('/work', function () {
    return view('en.pages.our-work');
});

Route::get('/contact-us', function () {
    return view('en.pages.contact-us');
});

// arabic rout 

Route::get('/ar', function () {
    return view('ar.home');
});

Route::get('/ar.about', function () {
    return view('ar.pages.about_us');
});

Route::get('/ar.services', function () {
    return view('ar.pages.services');
});

Route::get('/ar.work', function () {
    return view('ar.pages.our-work');
});

Route::get('/ar.contact-us', function () {
    return view('ar.pages.contact-us');
});