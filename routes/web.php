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

Route::get('/backside', function () {
    return view('admin/dashboard');
});

Route::get('/backside/shirt', function () {
    return view('admin/shirt/index');
});

Route::get('/backside/socks', function () {
    return view('admin/socks/index');
});

Route::get('/backside/phone', function () {
    return view('admin/phone/index');
});

Route::get('/backside/transaction', function () {
    return view('admin/transaction/index');
});
