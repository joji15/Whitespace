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

Route::get('/', 'mainController@index');

Route::get('register', 'mainController@register');

Route::get('student', 'mainController@student');

Route::get('admin', 'mainController@admin');

Route::get('adminStud', 'mainController@adminStud');

Route::get('adminCreateClass', 'mainController@adminCreateClass');

Route::get('adminViewDB', 'mainController@adminViewDB');

Route::get('adminViewProgress', 'mainController@adminViewProgress');

Route::get('adminQuiz', 'mainController@adminQuiz');

Route::get('adminViewQuiz', 'mainController@adminViewQuiz');

Route::get('adminCreateQuiz', 'mainController@adminCreateQuiz');

Route::get('adminEditQuiz', 'mainController@adminEditQuiz');

Route::get('adminUpload', 'mainController@adminUpload');

Route::get('dashboard', 'mainController@studentHome');

Route::get('home', 'mainController@index');
