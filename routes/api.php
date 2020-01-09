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

Route::post('/categories/upsert', 'Admin\CategoriesController@upsert');

// Using route model binding by passing category which automatically looks up that category and pass it to the controller method
Route::delete('/categories/{category}', 'Admin\CategoriesController@destroy');
