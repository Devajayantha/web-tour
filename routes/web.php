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

// Route::get('/home', 'HomeController@index')->name('home');
Route::view('/test','test')->name('test');
Route::view('/paket', 'paket')->name('paket-tour');
Route::view('/contact', 'contact')->name('contact');
Route::view('/gallery', 'gallery')->name('gallery');

//login silahkan ketik /admin/login dan register ketik /admin/register
Route::group(['prefix' => 'admin'], function() {

// Login Routes...
    Route::get('login', ['as' => 'admin.login', 'uses' => 'AdminAuth\LoginController@showLoginForm']);
    Route::post('login', ['as' => 'admin.login.post', 'uses' => 'AdminAuth\LoginController@login']);
    Route::post('logout', ['as' => 'admin.logout', 'uses' => 'AdminAuth\LoginController@logout']);

// Registration Routes...
    Route::get('register', ['as' => 'admin.register', 'uses' => 'AdminAuth\RegisterController@showRegistrationForm']);
    Route::post('register', ['as' => 'admin.register.post', 'uses' => 'AdminAuth\RegisterController@register']);

// Password Reset Routes...
    Route::get('password/reset', ['as' => 'admin.password.request', 'uses' => 'AdminAuth\ForgotPasswordController@showLinkRequestForm']);
    Route::post('password/email', ['as' => 'admin.password.email', 'uses' => 'AdminAuth\ForgotPasswordController@sendResetLinkEmail']);
    Route::get('password/reset/{token}', ['as' => 'admin.password.reset.token', 'uses' => 'AdminAuth\ResetPasswordController@showResetForm']);
    Route::post('password/reset', ['as' => 'admin.password.reset.post', 'uses' => 'AdminAuth\ResetPasswordController@reset']);
});



Route::view('/nusa-penida', 'nusapenida')->name('nusapenida');
Route::view('/nusa-lembongan', 'nusalembongan')->name('nusalembongan');

// route booking pembelian 
Route::get('/booking','BookingController@create')->middleware('auth');
Route::post('/booking','BookingController@store')->middleware('auth');


//route untuk booking setiap paket
Route::post('/booking/nusa-penida/halfday','BookingController@store')->middleware('auth');
Route::post('/booking/nusa-penida/2d1n','BookingController@store')->middleware('auth');
Route::post('/booking/nusa-penida/3d2n','BookingController@store')->middleware('auth');
Route::post('/booking/nusa-lembongan/halfday','BookingController@store')->middleware('auth');
Route::post('/booking/nusa-lembongan/2d1n','BookingController@store')->middleware('auth');
Route::post('/booking/nusa-lembongan/3d2n','BookingController@store')->middleware('auth');


//route paket untuk view dan rating 
Route::get('/nusa-penida/halfday','PaketController@nphalfday')->name('nusapenida-hd');
Route::get('/nusa-penida/2d1n','PaketController@np2d1n')->name('nusapenida-2d1n');
Route::get('/nusa-penida/3d2n','PaketController@np3d2n')->name('nusapenida-3d2n');
Route::get('/nusa-lembongan/halfday','PaketController@nlhalfday')->name('lembongan-hd');
Route::get('/nusa-lembongan/2d1n','PaketController@nl2d1n')->name('lembongan-2d1n');
Route::get('/nusa-lembongan/3d2n','PaketController@nl3d2n')->name('lembongan-3d2n');


// adminnn //////////////////////////////////////////////////////////
Route::view('/admin/broadcast', 'dashboard-admin.broadcast-admin')->name('admin-broadcast');
Route::get('/admin/reminder', 'JadwalController@index');
Route::get('/admin/rating', 'ShowratingController@index');
Route::post('sendmail','SendemailController@send')->name('sendmail');
Route::resource('/admin/dashboard','PesanadminController');//->middleware('admin');
Route::put('/admin/updatepayment/{admin}','PesanadminController@confirmationPayment');
Route::put('/admin/update/valid','ShowratingController@updateValid');
Route::put('/admin/update/cancel','ShowratingController@updateCancel');     

// route user dashboard /////////////////////////////////////////////////////////
Route::get('/user/home','UserDashboardController@index')->middleware('auth')->name('user-home');
Route::resource('uploadbayar','UploadbayarController');
Route::get('/user/rating','RatingUserController@index')->middleware('auth')->name('user-rating');
Route::put('/user/input/rating/','RatingUserController@update')->name('user-input-rating');
Route::get('user/dashboard','UserDashboardController@main')->name('user/dashboard')->middleware('auth');
Route::get('user/{user}/edit',  ['as' => 'user.edit', 'uses' => 'UserDashboardController@edit']);
Route::put('user/{user}',  ['as' => 'user.update', 'uses' => 'UserDashboardController@update']);


Route::get('admin', function(){
    return view('dashboard-admin.main-admin');
})->name('admin')->middleware('auth:admin');
