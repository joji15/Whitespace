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
    return view('home');
})->name('homepage');

Auth::routes();

Route::get('/Studentlogin', 'Auth\studentLoginController@showLoginForm')->name('student.login');

Route::post('/Studentlogin', 'Auth\studentLoginController@login')->name('student.login.submit');

Route::prefix('student')->group(function(){

    Route::prefix('Home')->group(function(){

        Route::get('/','studentController@index')->name('student.Home');

        Route::get('/studentsClassList', 'studentController@studentsClassList')->name('student.Home.studentsClassList');

        Route::get('/studentsScheduledQuizzes', 'studentController@studentsScheduledQuizzes')->name('student.Home.studentsScheduledQuizzes');

        Route::get('/studentsTakeQuiz', 'studentController@studentsTakeQuiz')->name('student.Home.studentsTakeQuiz');

        Route::get('/studentsTakeQuiz2', 'studentController@studentsTakeQuiz2')->name('student.Home.studentsTakeQuiz2');

        Route::get('/studentsResultQuiz', 'studentController@studentsResultQuiz')->name('student.Home.studentsResultQuiz');

        Route::get('/studentsRankings', 'studentController@studentsRankings')->name('student.Home.studentsRankings');

        Route::get('/studentsLesson', 'studentController@studentsLesson');

    });

    Route::prefix('SQLLesson')->group(function(){

        Route::get('/', 'studentController@studentsLessonList')->name('student.SQLLesson');

        Route::prefix('chapter1')->group(function(){

            Route::get('/', 'studentController@sql_intro')->name('chapter1');

            Route::get('/database_concepts', 'studentController@database_concepts')->name('chapter1.database_concepts');

            Route::get('/relational_db', 'studentController@relational_db')->name('chapter1.relational_db');

            Route::get('/entities_attributes_relationships', 'studentController@entities_attributes_relationships')->name('chapter1.entities_attributes_relationships');

            Route::get('/functional_dependence', 'studentController@functional_dependence')->name('chapter1.functional_dependence');

            Route::get('/primary_key', 'studentController@primary_key')->name('chapter1.primary_key');

            Route::get('/diagrams_dbDesign', 'studentController@diagrams_dbDesign')->name('chapter1.diagrams_dbDesign');

        });

        Route::prefix('chapter2')->group(function(){

            Route::get('/', 'studentController@chap2_intro')->name('chapter2');

            Route::get('/create_table', 'studentController@create_table')->name('chapter2.create_table');

            Route::get('/using_nulls', 'studentController@using_nulls')->name('chapter2.using_nulls');

            Route::get('/describing_table', 'studentController@describing_table')->name('chapter2.describing_table');

            Route::get('/adding_rows', 'studentController@adding_rows')->name('chapter2.adding_rows');

            Route::get('/insert_command', 'studentController@insert_command')->name('chapter2.insert_command');

            Route::get('/insert_null', 'studentController@insert_null')->name('chapter2.insert_null');

            Route::get('/view_delete', 'studentController@view_delete')->name('chapter2.view_delete');

        });

        Route::prefix('chapter3')->group(function(){

            Route::get('/', 'studentController@single_table_query')->name('chapter3');

            Route::get('/retrieve_all', 'studentController@retrieve_all')->name('chapter3.retrieve_all');

            Route::get('/retrieve_certaincolumn', 'studentController@retrieve_certaincolumn')->name('chapter3.retrieve_certaincolumn');

            Route::get('/where_clause', 'studentController@where_clause')->name('chapter3.where_clause');

            Route::get('/compound_condition', 'studentController@compound_condition')->name('chapter3.compound_condition');

            Route::get('/between', 'studentController@between')->name('chapter3.between');

            Route::get('/computed_column', 'studentController@computed_column')->name('chapter3.computed_column');

            Route::get('/like', 'studentController@like')->name('chapter3.like');

            Route::get('/in', 'studentController@in')->name('chapter3.in');

            Route::get('/sorting', 'studentController@sorting')->name('chapter3.sorting');

            Route::get('/order_by', 'studentController@order_by')->name('chapter3.order_by');

            Route::get('/additional_sorting', 'studentController@additional_sorting')->name('chapter3.additional_sorting');

            Route::get('/using_function', 'studentController@using_function')->name('chapter3.using_function');

            Route::get('/using_count', 'studentController@using_count')->name('chapter3.using_count');

            Route::get('/using_sum', 'studentController@using_sum')->name('chapter3.using_sum');

            Route::get('/avg_max_min', 'studentController@avg_max_min')->name('chapter3.avg_max_min');

            Route::get('/using_distinct', 'studentController@using_distinct')->name('chapter3.using_distinct');

            Route::get('/nesting_queries', 'studentController@nesting_queries')->name('chapter3.nesting_queries');

            Route::get('/subqueries', 'studentController@subqueries')->name('chapter3.subqueries');

            Route::get('/grouping', 'studentController@grouping')->name('chapter3.grouping');

            Route::get('/group_by', 'studentController@group_by')->name('chapter3.group_by');

            Route::get('/having', 'studentController@having')->name('chapter3.having');

            Route::get('/having_where', 'studentController@having_where')->name('chapter3.having_where');

            Route::get('/nulls', 'studentController@nulls')->name('chapter3.nulls');

        });

        Route::prefix('chapter4')->group(function(){

            Route::get('/', 'studentController@multiple_table')->name('chapter4');

            Route::get('/joining_two_tables', 'studentController@joining_two_tables')->name('chapter4.joining_two_tables');

            Route::get('/in_operator', 'studentController@in_operator')->name('chapter4.in_operator');

            Route::get('/exists_operator', 'studentController@exists_operator')->name('chapter4.exists_operator');

            Route::get('/subquery_within_subquery', 'studentController@subquery_within_subquery')->name('chapter4.subquery_within_subquery');

            Route::get('/alias', 'studentController@alias')->name('chapter4.alias');

            Route::get('/joining_table_itself', 'studentController@joining_table_itself')->name('chapter4.joining_table_itself');

            Route::get('/self_join_primary_key', 'studentController@self_join_primary_key')->name('chapter4.self_join_primary_key');

            Route::get('/joining_several_tables', 'studentController@joining_several_tables')->name('chapter4.joining_several_tables');

            Route::get('/set_operations', 'studentController@set_operations')->name('chapter4.set_operations');

            Route::get('/all_and_any', 'studentController@all_and_any')->name('chapter4.all_and_any');

            Route::get('/inner_join', 'studentController@inner_join')->name('chapter4.inner_join');

            Route::get('/outer_join', 'studentController@outer_join')->name('chapter4.outer_join');

            Route::get('/product', 'studentController@product')->name('chapter4.product');

        });

        Route::prefix('chapter5')->group(function(){

            Route::get('/', 'studentController@updating_data')->name('chapter5');

            Route::get('/new_from_existing', 'studentController@new_from_existing')->name('chapter5.new_from_existing');

            Route::get('/existing_data', 'studentController@existing_data')->name('chapter5.existing_data');

            Route::get('/add_rows_existing', 'studentController@add_rows_existing')->name('chapter5.add_rows_existing');

            Route::get('/commit_and_rollback', 'studentController@commit_and_rollback')->name('chapter5.commit_and_rollback');

            Route::get('/transactions', 'studentController@transactions')->name('chapter5.transactions');

            Route::get('/changing_deleting_existing', 'studentController@changing_deleting_existing')->name('chapter5.changing_deleting_existing');

            Route::get('/rollback', 'studentController@rollback')->name('chapter5.rollback');

            Route::get('/value_to_null', 'studentController@value_to_null')->name('chapter5.value_to_null');

            Route::get('/tables_structure', 'studentController@tables_structure')->name('chapter5.tables_structure');

            Route::get('/complex_changes', 'studentController@complex_changes')->name('chapter5.complex_changes');

            Route::get('/dropping_table', 'studentController@dropping_table')->name('chapter5.dropping_table');

        });
    });

    Route::get('studentsDownload', 'studentController@studentsDownload')->name('student.studentsDownload');

    Route::get('studentsSimulator', 'studentController@studentsSimulator')->name('student.studentsSimulator');

});

Route::get('/Proflogin', 'Auth\profLoginController@showLoginForm')->name('prof.login');

Route::post('/Proflogin', 'Auth\profLoginController@login')->name('prof.login.submit');

Route::prefix('prof')->group(function(){

    Route::get('/Home', 'profController@index')->name('prof.profHome');

    Route::prefix('Student')->group(function(){

        Route::get('/', 'profController@StudentView')->name('prof.student');

        Route::get('/CreateClass', 'profController@CreateClassView')->name('prof.student.CreateClass');

        Route::get('/ViewDatabase', 'profController@ViewDatabaseView')->name('prof.student.ViewDatabase');

        Route::get('/ViewProgress', 'profController@ViewProgressView')->name('prof.student.ViewProgress');

        Route::get('/StudentInfo', 'profController@StudentInfoView')->name('prof.student.StudentInfo');

    });

    Route::prefix('Quiz')->group(function(){

        Route::get('/', 'profController@QuizView');

        Route::get('/ViewQuiz', 'profController@ViewQuizView');

        Route::get('/CreateQuiz', 'profController@CreateQuizView');

        Route::get('/EditQuiz', 'profController@EditQuizView');

        Route::get('/EditQuizContent', 'profController@EditQuizContentView');

    });

    Route::get('/Upload', 'profController@UploadView');

    Route::get('/UploadProp', 'profController@UploadPropView');

});
