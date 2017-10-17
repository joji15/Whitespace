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


/*------------------------LESSONS------------------------*/

Route::get('studentsLessonList', 'mainController@studentsLessonList');

Route::get('studentsLesson', 'mainController@studentsLesson');

Route::get('sql_intro', 'mainController@sql_intro');

Route::get('database_concepts', 'mainController@database_concepts');

Route::get('relational_db', 'mainController@relational_db');

Route::get('entities_attributes_relationships', 'mainController@entities_attributes_relationships');

Route::get('functional_dependence', 'mainController@functional_dependence');

Route::get('primary_key', 'mainController@primary_key');

Route::get('diagrams_dbDesign', 'mainController@diagrams_dbDesign');

Route::get('chap2_intro', 'mainController@chap2_intro');

Route::get('create_table', 'mainController@create_table');

Route::get('using_nulls', 'mainController@using_nulls');

Route::get('describing_table', 'mainController@describing_table');

Route::get('adding_rows', 'mainController@adding_rows');

Route::get('insert_command', 'mainController@insert_command');

Route::get('insert_null', 'mainController@insert_null');

Route::get('view_delete', 'mainController@view_delete');

Route::get('single_table_query', 'mainController@single_table_query');

Route::get('retrieve_all', 'mainController@retrieve_all');

Route::get('retrieve_certaincolumn', 'mainController@retrieve_certaincolumn');

Route::get('where_clause', 'mainController@where_clause');

Route::get('compound_condition', 'mainController@compound_condition');

Route::get('between', 'mainController@between');

Route::get('computed_column', 'mainController@computed_column');

Route::get('like', 'mainController@like');

Route::get('in', 'mainController@in');

Route::get('sorting', 'mainController@sorting');

Route::get('order_by', 'mainController@order_by');

Route::get('additional_sorting', 'mainController@additional_sorting');

Route::get('using_function', 'mainController@using_function');

Route::get('using_count', 'mainController@using_count');

Route::get('using_sum', 'mainController@using_sum');

Route::get('avg_max_min', 'mainController@avg_max_min');

Route::get('using_distinct', 'mainController@using_distinct');

Route::get('nesting_queries', 'mainController@nesting_queries');

Route::get('subqueries', 'mainController@subqueries');

Route::get('grouping', 'mainController@grouping');

Route::get('group_by', 'mainController@group_by');

Route::get('having', 'mainController@having');

Route::get('having_where', 'mainController@having_where');

Route::get('nulls', 'mainController@nulls');

Route::get('multiple_table', 'mainController@multiple_table');

Route::get('joining_two_tables', 'mainController@joining_two_tables');

Route::get('in_operator', 'mainController@in_operator');

Route::get('exists_operator', 'mainController@exists_operator');

Route::get('subquery_within_subquery', 'mainController@subquery_within_subquery');

Route::get('alias', 'mainController@alias');

Route::get('joining_table_itself', 'mainController@joining_table_itself');

Route::get('self_join_primary_key', 'mainController@self_join_primary_key');

Route::get('joining_several_tables', 'mainController@joining_several_tables');

Route::get('set_operations', 'mainController@set_operations');

Route::get('all_and_any', 'mainController@all_and_any');

Route::get('inner_join', 'mainController@inner_join');

Route::get('outer_join', 'mainController@outer_join');

Route::get('product', 'mainController@product');

Route::get('updating_data', 'mainController@updating_data');

Route::get('new_from_existing', 'mainController@new_from_existing');

Route::get('existing_data', 'mainController@existing_data');

Route::get('add_rows_existing', 'mainController@add_rows_existing');

Route::get('commit_and_rollback', 'mainController@commit_and_rollback');

Route::get('transactions', 'mainController@transactions');

Route::get('changing_deleting_existing', 'mainController@changing_deleting_existing');

Route::get('rollback', 'mainController@rollback');

Route::get('value_to_null', 'mainController@value_to_null');

Route::get('tables_structure', 'mainController@tables_structure');

Route::get('complex_changes', 'mainController@complex_changes');

Route::get('dropping_table', 'mainController@dropping_table');
/*------------------------QUIZZES------------------------*/

Route::get('studentsScheduledQuizzes', 'mainController@studentsScheduledQuizzes');

Route::get('studentsTakeQuiz', 'mainController@studentsTakeQuiz');

Route::get('studentsTakeQuiz2', 'mainController@studentsTakeQuiz2');

Route::get('studentsResultQuiz', 'mainController@studentsResultQuiz');

Route::get('studentsRankings', 'mainController@studentsRankings');

Route::get('studentsDownload', 'mainController@studentsDownload');

Route::get('studentsSimulator', 'mainController@studentsSimulator');

Route::get('adminUploadProp', 'mainController@adminUploadProp');

Route::get('home', 'mainController@index');

// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');
