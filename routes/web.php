<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StaticPageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Static  Pages

Route::get('/', [StaticPageController::class, 'index'])->name('site-root');
Route::get('about-us', [StaticPageController::class, 'aboutUs'])->name('about-us');
Route::get('services', [StaticPageController::class, 'services'])->name('services');
Route::resource('feedback', FeedbackController::class);
Route::post('redirect-order', [StaticPageController::class, 'order'])->name('redirect-order');

//Order routes
// Route::get('order-now', [OrderController::class, 'create'])->name('order.create');
Route::resource('order', OrderController::class);


//utility routes
Route::get('get-paper-type', [OrderController::class, 'getPaperType'])->name('get-paper-type');
Route::post('get-price', [OrderController::class, 'getPrice'])->name('get-price');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Testing routes
// Route::get('/get-order-number', [OrderController::class, 'getOrderNumber']);
// Route::get('/get-deadline-timestamp', [OrderController::class, 'getDeadlineTimestamp']);

