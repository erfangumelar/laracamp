<?php

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

Route::view('/', 'welcome')->name('welcome');
Route::view('login', 'login')->name('login');
Route::view('checkout', 'checkout')->name('checkout');
Route::view('success-checkout', 'success_checkout')->name('success-checkout');


