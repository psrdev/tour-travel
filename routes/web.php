<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;
use App\Http\Controllers\FrontController;

Route::get('/', [FrontController::class, 'home'])->name('front.home');
Route::get('/about', [FrontController::class, 'about'])->name('front.about');
Route::get('/destination', [FrontController::class, 'destination'])->name('front.destination');
Route::get('/contact', [FrontController::class, 'contact'])->name('front.contact');
Route::get('/privacy-policy', [FrontController::class, 'privacyPolicy'])->name('front.privacy');
Route::get('/destination/{dest?}', [FrontController::class, 'destinationFilter'])->name('front.destination.filter');
Route::get('/destination/{dest?}/{pack?}', [FrontController::class, 'destinationPackageFilter'])->name('front.destination.package.filter');
Route::get('/tours', [FrontController::class, 'tours'])->name('front.tours');
// Route::get('/thank-you', [FrontController::class, 'thankYou'])->name('front.thankyou');
// Route::get('/refund-policy', [FrontController::class, 'refund-policy'])->name('refund-policy');
Route::post('/booking', [BackController::class, 'booking'])->name('back.booking');
