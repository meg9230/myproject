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

Route::get('/user/profile/', 'User\ProfileController@index');
Route::get('/user/reservation/', 'User\ReservationController@index');
Route::get('/user/reservation/create', 'User\ReservationController@create');

Route::get('/teacher/profile/', 'Teacher\ProfileController@index');