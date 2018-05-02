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
    Route::get('password/reset', ['as' => 'admin.password.reset', 'uses' => 'AdminAuth\ForgotPasswordController@showLinkRequestForm']);
    Route::post('password/email', ['as' => 'admin.password.email', 'uses' => 'AdminAuth\ForgotPasswordController@sendResetLinkEmail']);
    Route::get('password/reset/{token}', ['as' => 'admin.password.reset.token', 'uses' => 'AdminAuth\ResetPasswordController@showResetForm']);
    Route::post('password/reset', ['as' => 'admin.password.reset.post', 'uses' => 'AdminAuth\ResetPasswordController@reset']);
});
//////

// for search get //////////////////////////////////////////////////////////////////////
Route::get('nusapenida', function(){
    return view('nusapenida');
})->name('nusapenida');
Route::get('nusalembongan', function(){
    return view('nusalembongan');
})->name('nusalembongan');
Route::get('nusa-penida/halfday', function(){
    return view('paket-penida.nusapenida-hd');
})->name('nusapenida-hd');
Route::get('nusa-penida/2d1n', function(){
    return view('paket-penida.nusapenida-2d1n');
})->name('nusapenida-2d1n');
Route::get('nusa-penida/3d2n', function(){
    return view('paket-penida.nusapenida-3d2n');
})->name('nusapenida-3d2n');
//////////////////////////////////////////////////////

Route::get('nusa-lembongan/halfday', function(){
    return view('paket-lembongan.lembongan-hd');
})->name('lembongan-hd');
Route::get('nusa-lembongan/2d1n', function(){
    return view('paket-lembongan.lembongan-2d1n');
})->name('lembongan-2d1n');
Route::get('nusa-lembongan/3d2n', function(){
    return view('paket-lembongan.lembongan-3d2n');
})->name('lembongan-3d2n');
/////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////
Route::view('/nusa-penida', 'nusapenida')->name('nusapenida');
Route::view('/nusa-lembongan', 'nusalembongan')->name('nusalembongan');

// sub paket nusa penida //////////////////////////////////////////////////////////
Route::view('/nusa-penida/halfday', 'paket-penida.nusapenida-hd')->name('nusapenida-hd');
Route::post('/nusa-penida/halfday','BookingController@store')->name('nusapenida-hd')->middleware('auth');
Route::view('/nusa-penida/2d1n', 'paket-penida.nusapenida-2d1n')->name('nusapenida-2d1n');
Route::post('/nusa-penida/2d1n','BookingController@store')->name('nusapenida-2d1n')->middleware('auth');
Route::view('/nusa-penida/3d2n', 'paket-penida.nusapenida-3d2n')->name('nusapenida-3d2n');
Route::post('/nusa-penida/3d2n','BookingController@store')->name('nusapenida-3d2n')->middleware('auth');
// sub paket nusa lembongan /////////////////////////////////////////////////////////////
Route::view('/nusa-lembongan/halfday', 'paket-lembongan.lembongan-hd')->name('lembongan-hd');
Route::view('/nusa-lembongan/2d1n', 'paket-lembongan.lembongan-2d1n')->name('lembongan-2d1n');
Route::view('/nusa-lembongan/3d2n', 'paket-lembongan.lembongan-3d2n')->name('lembongan-3d2n');

// adminnn //////////////////////////////////////////////////////////
Route::view('/admin/broadcast', 'dashboard-admin.broadcast-admin')->name('admin-broadcast');
Route::get('/admin/reminder', 'JadwalController@index');
Route::get('/admin/rating', 'ShowratingController@index');
Route::resource('/admin/dashboard','PesanadminController')->middleware('admin');
Route::resource('/user/addrating','InputRatingController');
///////////////////
Route::put('/admin/updatepayment/{admin}','PesanadminController@confirmationPayment');

// route user dashboard /////////////////////////////////////////////////////////
Route::get('/user/home','UserDashboardController@index')->middleware('auth')->name('user-home');
Route::view('/user/addrating', 'dashboard-user.home-user-rating')->name('user-addrating');
Route::resource('uploadbayar','UploadbayarController');


// bookingg
Route::get('/booking','BookingController@create')->middleware('auth');
Route::post('/booking','BookingController@store')->middleware('auth');


Route::get('user/dashboard', function(){
    return view('dashboard-user.home-user-main');
})->name('user/dashboard')->middleware('auth');
Route::get('admin', function(){
    return view('dashboard-admin.main-admin');
})->name('admin')->middleware('admin');


Route::post('sendmail', function (\Illuminate\Http\Request $request,
\Illuminate\Mail\Mailer $mailer){
    $mailer
        ->to($request->input('mail'))
        ->send(new \App\Mail\MyMail($request->input('message')));
    return redirect()->back();
})->name('sendmail');
