<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ServiceController;

Route::any('/', [HomeController::class, 'home'])->name('home');
Route::any('/service', [ServiceController::class, 'service'])->name('service');
Route::any('/about', action: [HomeController::class, 'about'])->name('about');
Route::any('/contact', action: [HomeController::class, 'contact'])->name('contact');



