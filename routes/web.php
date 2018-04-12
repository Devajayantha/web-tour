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
Route::post('/','SubscribeController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/paket', 'paket')->name('paket-tour');
Route::view('/contact', 'contact')->name('contact');
Route::view('/gallery', 'gallery')->name('gallery');
Route::view('/nusa-penida', 'nusapenida')->name('nusapenida');
Route::view('/nusa-lembongan', 'nusalembongan')->name('nusalembongan');

// sub paket nusa penida
Route::view('/nusa-penida/halfday', 'paket-penida.nusapenida-hd')->name('nusapenida-hd');
Route::view('/nusa-penida/2d1n', 'paket-penida.nusapenida-2d1n')->name('nusapenida-2d1n');
Route::view('/nusa-penida/3d2n', 'paket-penida.nusapenida-3d2n')->name('nusapenida-3d2n');

// sub paket nusa lembongan
Route::view('/nusa-lembongan/halfday', 'paket-lembongan.lembongan-hd')->name('lembongan-hd');
Route::view('/nusa-lembongan/2d1n', 'paket-lembongan.lembongan-2d1n')->name('lembongan-2d1n');
Route::view('/nusa-lembongan/3d2n', 'paket-lembongan.lembongan-3d2n')->name('lembongan-3d2n');

Route::view('/admin/home', 'dashboard-admin.home-admin')->name('admin-home');
Route::view('/admin/broadcast', 'dashboard-admin.broadcast-admin')->name('admin-broadcast');

/*Route::get('/booking', function () {
    return view('bookingnow');
})->middleware('auth');*/

//Route::get('/booking','BookingController@index')->middleware('auth');
Route::get('/booking','BookingController@create')->middleware('auth');
Route::post('/booking','BookingController@store')->middleware('auth');
