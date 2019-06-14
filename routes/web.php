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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

/**
* Documentations Routes
*/
Route::group(['prefix' => 'documentations'], function(){
  Route::get('', 'DocumentationController@index')->name('doc.index');
  Route::get('/{documentation}', 'DocumentationController@show')->name('doc.show');
});
