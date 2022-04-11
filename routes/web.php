<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;

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
Route::get('/','HomeController@home' )->name('home');
Route::get('/aboutus','HomeController@about' )->name('about');
Route::get('/contact','HomeController@contact' )->name('contact');
Route::get('/checkout','HomeController@checkout' )->name('checkout');
Route::get('/category','CategoryController@category')->name('category');
Route::get('/cart','CartController@cartsummary')->name('cartsummary');
Route::get('/wishlist','WishlistController@wishlist')->name('wishlist');

