<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->group(function () {
    Route::post('products', 'ProductController@store');
    Route::get('product/{id}', 'ProductController@show');
    Route::get('products', 'ProductController@getListProducts');
    Route::get('search-products', 'SearchProductsController@searchProductsByCategory');
    Route::delete('product/{id}', 'ProductController@delete');
    Route::put('product/{id}', 'ProductController@update');
});