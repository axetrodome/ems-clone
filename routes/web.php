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

Route::get('/','HomeController@index')->name('home');
Auth::routes();

Route::get('/student/register', 'StudentController@create')->name('student.register');
Route::get('/settings','UserController@profile')->name('settings');
Route::get('/dashboard','DashboardController@index')->name('dashboard');

Route::get('/user/profile','UserController@show')->name('user.profile');
Route::patch('/user/update','UserController@update');
Route::patch('/user/update_password','UserController@change_password');
