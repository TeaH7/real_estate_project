<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\PropertyController;


Route::get('/', [FrontendController::class, 'home'])->name('home');


Route::get('/about-us', function () {
    return view('front.about');
})->name('about-us');

//contact page routes
Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contact-us');
Route::post('/contact', [FrontendController::class, 'storeContact'])->name('contact.create');


Route::get('/prone/{slug}', [FrontendController::class, 'showProperty'])->name('single-property');


Route::get('/rezultate', [FrontendController::class, 'searchFunction'])->name('search-listings');

Route::get('/all-listings', [FrontendController::class, 'allListings'])->name('all-listings');



Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.adminIndex');
    })->name('admin');

    //Properties Index for both Manager and Agent
    Route::get('/properties', [PropertyController::class, 'index'])->name('properties.index');
  
    Route::middleware(['manager'])->group(function () {
        Route::get('/properties/for-aproval', [PropertyController::class, 'forAproval'])->name('properties.for.aproval');
        Route::put('/properties/aprove/{id}', [PropertyController::class, 'aproveProperty'])->name('properties.aprove');
        Route::put('/properties/refuse/{id}', [PropertyController::class, 'refuseProperty'])->name('properties.refuse');


        //Agents Routes
        Route::get('/agents', [AgentController::class, 'index'])->name('agents.index');
        Route::get('/agents/create', [AgentController::class, 'create'])->name('agents.create');
        Route::post('/agents/create', [AgentController::class, 'store'])->name('agents.store');
        Route::get('/agents/edit/{id}', [AgentController::class, 'edit'])->name('agents.edit');
        Route::put('/agents/update/{id}', [AgentController::class, 'update'])->name('agents.update');
        Route::delete('/agents/{id}', [AgentController::class, 'destroy'])->name('agents.destroy');
        Route::get('/agents/show/{id}', [AgentController::class, 'show'])->name('agents.show');
        Route::post('/agents/search', [AgentController::class, 'searchAgent'])->name('agents.search');
        //Contact Route
        Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
        Route::get('/contact/{id}', [ContactController::class, 'show'])->name('contact.show');
        Route::delete('/contact/detele/{id},', [ContactController::class, 'destroy'])->name('contact.destroy');
    });

    Route::middleware(['agent'])->group(function () {

        //Properties Routes
     
        Route::get('/properties/create', [PropertyController::class, 'create'])->name('properties.create');
        Route::post('/properties', [PropertyController::class, 'store'])->name('properties.store');
        Route::get('/properties/{slug}', [PropertyController::class, 'show'])->name('properties.show');
        Route::get('/properties/{slug}/edit', [PropertyController::class, 'edit'])->name('properties.edit');
        Route::patch('/properties/{slug}', [PropertyController::class, 'update'])->name('properties.update');
        Route::delete('/properties/{id}', [PropertyController::class, 'destroy'])->name('properties.destroy');
    });
});


Auth::routes(['register' => false]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
