<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/all-listings', function () {
    return view('front.all-listings');
})->name('all-listings');
Route::get('/search', function () {
    return view('front.search-page');
})->name('search-listings');



Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
