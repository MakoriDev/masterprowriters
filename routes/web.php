<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StaticPageController;
use App\Http\Controllers\TestPayPalController;

//Front pages routes
Route::get('/', [StaticPageController::class, 'index'])->name('site-root');
Route::get('about-us', [StaticPageController::class, 'aboutUs'])->name('about-us');
Route::get('services', [StaticPageController::class, 'services'])->name('services');
Route::post('redirect-order', [StaticPageController::class, 'order'])->name('redirect-order');

//Order routes
Route::resource('order', OrderController::class)->except(['update']);
Route::get('active-orders', [OrderController::class, 'active'])->name('order.active');
Route::get('complete-orders', [OrderController::class, 'complete'])->name('order.complete');
Route::get('unpaid-orders', [OrderController::class, 'unpaid'])->name('order.unpaid');


//Feedback Routes
Route::resource('feedback', FeedbackController::class);


//Checkout routes
Route::get('show-checkout-form', [CheckoutController::class, 'showCheckoutForm'])->name('show-checkout-form');
Route::post('process-transaction', [CheckoutController::class, 'processTransaction'])->name('process-transaction');
Route::get('success-transaction', [CheckoutController::class, 'successTransaction'])->name('success-transaction');
Route::get('cancel-transaction', [CheckoutController::class, 'cancelTransaction'])->name('cancel-transaction');


//Utility routes
Route::get('get-paper-type', [OrderController::class, 'getPaperType'])->name('get-paper-type');
Route::post('get-price', [OrderController::class, 'getPrice'])->name('get-price');

//Authentication Routes
Auth::routes(['login' => false]);
Route::get('admin', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('admin', [LoginController::class, 'login']);


Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');


// Testing routes
// Route::get('/get-order-number', [OrderController::class, 'getOrderNumber']);
// Route::get('/get-deadline-timestamp', [OrderController::class, 'getDeadlineTimestamp']);
// Route::get('create-transaction', [TestPayPalController::class, 'createTransaction'])->name('createTransaction');
// Route::post('process-transaction', [TestPayPalController::class, 'processTransaction'])->name('processTransaction');
// Route::get('success-transaction', [TestPayPalController::class, 'successTransaction'])->name('successTransaction');
// Route::get('cancel-transaction', [TestPayPalController::class, 'cancelTransaction'])->name('cancelTransaction');

