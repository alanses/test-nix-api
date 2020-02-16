<?php

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
    Route::post('category', 'CategoryController@store');
    Route::get('category/{id}', 'CategoryController@show');
    Route::get('categories', 'CategoryController@listCategories');
    Route::get('categories-select', 'CategoryController@listCategoriesForSelect');
    Route::delete('category/{id}', 'CategoryController@delete');
    Route::put('category/{id}', 'CategoryController@update');
});