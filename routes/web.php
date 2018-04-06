<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/paket', 'paket')->name('paket-tour');
Route::view('/contact', 'contact')->name('contact');
Route::view('/gallery', 'gallery')->name('gallery');
Route::view('/nusa-penida', 'nusapenida')->name('nusapenida');
Route::view('/nusa-lembongan', 'nusalembongan')->name('nusalembongan');
Route::view('/paket-half-day', 'paket-half-day')->name('paket-half-day');
Route::view('/paket-2-days-1-night', 'paket-2-days-1-night')->name('paket-2-days-1-night');
Route::view('/paket-3-days-2-nights', 'paket-3-days-2-nights')->name('paket-3-days-2-nights');
Route::view('/home-user', 'dashboard-user.homeuser')->name('homeuser');

Route::get('/booking', function () {
    return view('bookingnow');
})->middleware('auth');