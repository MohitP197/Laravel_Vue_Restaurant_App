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



Auth::routes(['verify' => true]);

Route::get('/', 'FrontEnd\HomeController@index')->name('home');

Route::get('/categories', 'Admin\Categories\CategoriesController@index')->name('categories');

Route::get('/menu-editor/{any?}', 'Admin\Menu\MenuController@index')
    ->where('any', '.*')
    ->middleware('can:edit-menu');

Route::get('/menu', 'FrontEnd\MenuController@index');
