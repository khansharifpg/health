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



Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('admin', function () {
    return view ('admin');
});

Route::get('patient', function () {
    return view ('patient');
});

Route::get('doctor', function () {
    return view ('doctor');
});


Route::get('hospital', function () {
    return view ('hospital');
});

Route::get('auth/signup', function () {
    return view('auth/signup');
});

Route::get('auth/signin', function () {
    return view('auth/signin');
});

Route::get('auth/forgot_password', function () {
    return view('auth/forgot_password');
});

Route::get('auth/recover_password', function () {
    return view('auth/recover_password');
});

