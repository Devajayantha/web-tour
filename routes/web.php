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

Route::get('/paket', function(){
	return view('paket');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/checking', function () {
    return view('cekboking');
});
Route::get('/booking', function () {
    return view('bookingnow');
})->middleware('auth');

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/nusa-penida', function () {
    return view('nusapenida');
});
Route::get('/nusa-lembongan', function () {
    return view('nusalembongan');
});
Route::get('/paket-half-day', function () {
    return view('pakethalfday');
});
Route::get('/paket-2-days-1-night', function () {
    return view('paket2days1night');
});
Route::get('/paket-3-days-2-nights', function () {
    return view('paket3days2nights');
});
