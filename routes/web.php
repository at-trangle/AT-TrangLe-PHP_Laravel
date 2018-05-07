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

// Route::get('/', 'NewsController@index');
// Route::prefix('news')->group(function () {
//     Route::get('index', 'NewsController@index')->name('index');
//     Route::get('add', 'NewsController@add')->name('add');
//     Route::get('edit/{id}', 'NewsController@edit')->name('edit');
// });

Route::resource('/news', 'NewsController')->parameters(['news' => 'id']);