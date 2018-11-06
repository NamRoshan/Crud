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
// Route::resource('MainController','MainController');
Route::get('all.edit.{id}','StudentController@edit')->name('all.edit');
Route::put('all.update.{id}', 'StudentController@update')->name('students.update');
Route::delete('students.delete.{id}', 'StudentController@destroy')->name('students.destroy');
// multiple record delete
Route::post('del', 'StudentController@del')->name('/del');

Route::get('/','MainController@show')->name('student.show');
Route::post('StudentController','StudentController@store');


Route::get('all.create','StudentController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
