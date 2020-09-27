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

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function() {
  Route::get('profile', 'User\ProfileController@index');
  Route::get('reservation', 'User\ReservationController@index');
  Route::get('reservation/create', 'User\ReservationController@create');
});

Route::group(['prefix' => 'teacher', 'middleware' => 'teacherauth'], function() {
  Route::get('profile', 'Teacher\ProfileController@index');
});
// ユーザー用のログイン・新規登録
Auth::routes();

// 先生用のログイン・新規登録
Route::get('teacher/register', 'Auth\Teacher\RegisterController@showRegistrationForm');
Route::post('teacher/register', 'Auth\Teacher\RegisterController@register');
Route::get('teacher/login', 'Auth\Teacher\LoginController@showLoginForm')->name('teacher/login');
Route::post('teacher/login', 'Auth\Teacher\LoginController@login');
Route::post('teacher/logout', 'Auth\Teacher\LoginController@logout');


Route::get('/', 'IndexController@index')->name('/');