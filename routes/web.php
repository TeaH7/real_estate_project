<?php

use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\AgentController;
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




Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.adminIndex');
    })->name('admin');

    Route::get('/properties', [PropertyController::class, 'index'])->name('properties.index');

<<<<<<< Updated upstream
    Route::get('/agents',[AgentController::class,'show'])->name('agents.index');
    Route::get('/agents/create',[AgentController::class,'create'])->name('agents.create');
    Route::post('/agents/create',[AgentController::class,'store'])->name('agents.store');
    Route::get('/agents/edit/{id}',[AgentController::class,'update'])->name('agents.edit');
=======
    Route::get('/agents', [AgentController::class, 'index'])->name('agents.index');
    Route::get('/agents/create', [AgentController::class, 'create'])->name('agents.create');
    Route::post('/agents/create', [AgentController::class, 'store'])->name('agents.store');
    Route::get('/agents/edit/{id}', [AgentController::class, 'edit'])->name('agents.edit');
    Route::put('/agents/update/{id}', [AgentController::class, 'update'])->name('agents.update');
    Route::delete('/agents/{id}', [AgentController::class, 'destroy'])->name('agents.destroy');
    Route::get('/agents/show/{id}',[AgentController::class,'show'])->name('agents.show');
>>>>>>> Stashed changes
    // Route::put('/update-agent',[AgentController::class,'update'])->name('agents.update');
});


Auth::routes(['register' => false]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.adminIndex');
    })->name('admin');

    Route::get('/properties', [PropertyController::class, 'index'])->name('properties.index');
    Route::get('/properties/create', [PropertyController::class, 'create'])->name('properties.create');
    Route::post('/properties', [PropertyController::class, 'store'])->name('properties.store');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
