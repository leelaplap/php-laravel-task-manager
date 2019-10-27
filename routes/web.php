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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('tasks')->group(function () {
    Route::get('index', 'TaskController@index')->name('tasks.list');
    Route::get('create', 'TaskController@create')->name('tasks.formAdd');
    Route::post('store', 'TaskController@store')->name('tasks.add');
    Route::get('{id}/show', function () {
    });
    Route::get('edit/{id}', 'TaskController@edit')->name('tasks.formEdit');
    Route::post('update/{id}', 'TaskController@update')->name('tasks.update');
    Route::get('delete/{id}', 'TaskController@destroy')->name('tasks.destroy');
});

