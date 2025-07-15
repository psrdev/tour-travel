<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controller\Front;

Route::get('/', [FrontController::class, 'home'])->name('front.home');
Route::get('/about', [FrontController::class, 'about'])->name('front.about');
Route::get('/destination', [FrontController::class, 'destination'])->name('front.destination');
Route::get('/contact', [FrontController::class, 'contact'])->name('front.contact');
Route::get('/privacy-policy', [FrontController::class, 'privacyPolicy'])->name('front.privacy');
// Route::get('/refund-policy', [FrontController::class, 'refund-policy'])->name('refund-policy');
