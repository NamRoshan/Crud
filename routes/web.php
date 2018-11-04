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
Route::get('/','MainController@show')->name('student.show');
Route::resource('StudentController','StudentController');//automatic go to create method call


