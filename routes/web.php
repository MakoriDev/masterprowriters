<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StaticPageController;
use App\Http\Controllers\TestPayPalController;
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

//Checkout Routes
Route::get('show-checkout-form', [CheckoutController::class, 'showCheckoutForm'])->name('show-checkout-form');
Route::post('process-transaction', [CheckoutController::class, 'processTransaction'])->name('process-transaction');
Route::get('success-transaction', [CheckoutController::class, 'successTransaction'])->name('success-transaction');
Route::get('cancel-transaction', [CheckoutController::class, 'cancelTransaction'])->name('cancel-transaction');



//utility routes
Route::get('get-paper-type', [OrderController::class, 'getPaperType'])->name('get-paper-type');
Route::post('get-price', [OrderController::class, 'getPrice'])->name('get-price');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Testing routes
// Route::get('/get-order-number', [OrderController::class, 'getOrderNumber']);
// Route::get('/get-deadline-timestamp', [OrderController::class, 'getDeadlineTimestamp']);


// Route::get('create-transaction', [TestPayPalController::class, 'createTransaction'])->name('createTransaction');
// Route::post('process-transaction', [TestPayPalController::class, 'processTransaction'])->name('processTransaction');
// Route::get('success-transaction', [TestPayPalController::class, 'successTransaction'])->name('successTransaction');
// Route::get('cancel-transaction', [TestPayPalController::class, 'cancelTransaction'])->name('cancelTransaction');


