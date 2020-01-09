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

Route::get('/menu-editor', 'Admin\Menu\MenuController@index')->middleware('can:edit-menu');
