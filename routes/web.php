<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('front.index');
})->name('home');


Route::get('/about-us', function () {
    return view('front.about');
})->name('about-us');

Route::get('/contact-us', function () {
    return view('front.contact');
})->name('contact-us');

Route::get('/prone', function () {
    return view('front.property-page');
})->name('single-property');
