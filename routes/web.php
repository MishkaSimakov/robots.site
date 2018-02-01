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
Route::post('/robots', 'RobotsController@store')->name('robots.store');
Route::get('/robots/create', 'RobotsController@create')->name('robots.create');
Route::get('/robots/{id}', 'RobotsController@show')->name('robots.show');


Route::get('/users', 'UsersController@index')->name('users.index');
Route::get('/users/{id}', 'UsersController@show')->name('users.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
