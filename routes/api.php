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

Route::post('/categories/upsert', 'Admin\Categories\CategoriesController@upsert');

// Using route model binding by passing category which automatically looks up that category and pass it to the controller method
Route::delete('/categories/{category}', 'Admin\Categories\CategoriesController@destroy');

Route::post('/menu-items/add', 'Admin\MenuItems\MenuItemsController@store');

Route::post('/add-image', function (Request $request) {
    $file = $request->file('file');
    $dir = 'public/images/MenuItems';
    $path = $file->store($dir);
    return str_replace("$dir/", '', $path);
});
