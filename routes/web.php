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


/*STUDENTS*/

Route::get('dashboard', 'mainController@studentHome');

Route::get('studentsClassList', 'mainController@studentsClassList');

Route::get('studentsLesson', 'mainController@studentsLesson');

Route::get('studentsScheduledQuizzes', 'mainController@studentsScheduledQuizzes');

Route::get('studentsTakeQuiz', 'mainController@studentsTakeQuiz');

Route::get('studentsTakeQuiz2', 'mainController@studentsTakeQuiz2');

Route::get('studentsResultQuiz', 'mainController@studentsResultQuiz');

Route::get('studentsRankings', 'mainController@studentsRankings');

Route::get('studentsDownload', 'mainController@studentsDownload');

Route::get('studentsSimulator', 'mainController@studentsSimulator');

Route::get('home', 'mainController@index');
