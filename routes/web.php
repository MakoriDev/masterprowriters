<?php

use App\Http\Controllers\StaticPageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Static  Pages

Route::get('/', [StaticPageController::class, 'index'])->name('site-root');


//utility routes
Route::get('get-paper-type', [StaticPageController::class, 'getPaperType'])->name('get-paper-type');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


