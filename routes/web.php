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

Route::get('/test-payment', 'ShowProfile@testPayment');

Route::get('test', function () {
    dd(123);
});

Route::get('confirm-test-payment', 'ShowProfile@confirm');
Route::post('confirm-test-payment', 'ShowProfile@confirm');
Route::put('confirm-test-payment', 'ShowProfile@confirm');
