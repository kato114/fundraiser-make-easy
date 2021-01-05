<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routesp
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@index')->name('home');
Route::get('/login', 'IndexController@login')->name('login');
Route::get('/register', 'IndexController@register')->name('register');

Route::get('/about', 'IndexController@about')->name('about');
Route::get('/program', 'IndexController@program')->name('program');
Route::get('/contact', 'IndexController@contact')->name('contact');

Route::get('/bedsheet', 'ShopController@bedsheet')->name('bedsheet');
Route::get('/pillow', 'ShopController@pillow')->name('pillow');

Route::get('/cart', 'ShopController@cart')->name('cart');
Route::get('/wishlist', 'ShopController@wishlist')->name('wishlist');
Route::get('/checkout', 'ShopController@checkout')->name('checkout');