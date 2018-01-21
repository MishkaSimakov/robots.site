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

Route::get('/robots', 'RobotsController@index')->name('robots.index');
Route::get('/robots/{id}', 'RobotsController@show')->name('robots.show');

Route::get('/students', 'StudentsController@index')->name('students.index');
Route::get('/students/{id}', 'StudentsController@show')->name('students.show');
