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
Route::get('/', 'CharacterController@index')->name('index');
Route::get('/create', 'CharacterController@create')->name('create');
Route::post('/store', 'CharacterController@store')->name('store');
// post methodams nereikia kurti blade`o
Route::get('/destroy/{id}', 'CharacterController@destroy')->name('destroy');
Route::get('/edit/{id}', 'CharacterController@edit')->name('edit');
Route::post('/update/{id}', 'CharacterController@update')->name('update');
Route::get('/create-photo/{character_id}', 'PhotosController@create')->name('create-photo');
Route::post('/store-photo/{character_id}', 'PhotosController@store')->name('store-photo');
Route::get('/show/{id}', 'CharactersController@show')->name('show');
Route::get('/delete-photo/{id}', 'PhotosController@destroy')->name('destroy-photo');
