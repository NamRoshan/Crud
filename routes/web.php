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
Route::get('create','MainController@create');
Route::get('show','MainController@show');
Route::get('main','MainController@main');

Route::get('/', function () {

    return view('welcome');
});
