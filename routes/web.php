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

        Route::get('/', 'studentController@index')->name('student.Home');

        Route::get('/studentsClassList', 'studentController@studentsClassList')->name('student.Home.studentsClassList');

        Route::get('/studentsScheduledQuizzes', 'studentController@studentsScheduledQuizzes')->name('student.Home.studentsScheduledQuizzes');

        Route::get('/studentsRankings', 'studentController@studentsRankings')->name('student.Home.studentsRankings');

        Route::get('/studentsLesson', 'studentController@studentsLesson');

    });

    Route::prefix('Profile')->group(function(){

        Route::get('/', 'studentController@studentprofile')->name('student.Profile');

        Route::prefix('Quiz')->group(function(){

          Route::get('/', 'studentController@studentQuiz')->name('student.Profile.Quiz');

          Route::get('/studentsResultQuiz', 'studentController@studentsResultQuiz')->name('student.Profile.Quiz.studentsResultQuiz');

          Route::get('/studentTakeQuiz', 'studentController@studentsTakeQuiz')->name('student.Profile.Quiz.studentsTakeQuiz');

        });

        Route::get('/Download', 'studentController@studentDownload')->name('student.Profile.Download');

    });

    Route::prefix('SQLLesson')->group(function(){

        Route::get('/', 'studentController@studentLesson')->name('student.SQLLesson');

        Route::prefix('chapter1')->group(function(){

            Route::get('/', 'studentController@sql_intro')->name('student.SQLLesson.chapter1');

            Route::get('/database_concepts', 'studentController@database_concepts')->name('student.SQLLesson.chapter1.database_concepts');

            Route::get('/relational_db', 'studentController@relational_db')->name('student.SQLLesson.chapter1.relational_db');

            Route::get('/entities_attributes_relationships', 'studentController@entities_attributes_relationships')->name('student.SQLLesson.chapter1.ent_attr_relationships');

            Route::get('/functional_dependence', 'studentController@functional_dependence')->name('student.SQLLesson.chapter1.functional_dependence');

            Route::get('/primary_key', 'studentController@primary_key')->name('student.SQLLesson.chapter1.primary_key');

            Route::get('/diagrams_dbDesign', 'studentController@diagrams_dbDesign')->name('student.SQLLesson.chapter1.diagrams_dbDesign');

        });

        Route::prefix('chapter2')->group(function(){

            Route::get('/', 'studentController@chap2_intro')->name('student.SQLLesson.chapter2');

            Route::get('/create_table', 'studentController@create_table')->name('student.SQLLesson.chapter2.create_table');

            Route::get('/using_nulls', 'studentController@using_nulls')->name('student.SQLLesson.chapter2.using_nulls');

            Route::get('/describing_table', 'studentController@describing_table')->name('student.SQLLesson.chapter2.describing_table');

            Route::get('/adding_rows', 'studentController@adding_rows')->name('student.SQLLesson.chapter2.adding_rows');

            Route::get('/insert_command', 'studentController@insert_command')->name('student.SQLLesson.chapter2.insert_command');

            Route::get('/insert_null', 'studentController@insert_null')->name('student.SQLLesson.chapter2.insert_null');

            Route::get('/view_delete', 'studentController@view_delete')->name('student.SQLLesson.chapter2.view_delete');

        });

        Route::prefix('chapter3')->group(function(){

            Route::get('/', 'studentController@single_table_query')->name('student.SQLLesson.chapter3');

            Route::get('/retrieve_all', 'studentController@retrieve_all')->name('student.SQLLesson.chapter3.retrieve_all');

            Route::get('/retrieve_certaincolumn', 'studentController@retrieve_certaincolumn')->name('student.SQLLesson.chapter3.retrieve_certaincolumn');

            Route::get('/where_clause', 'studentController@where_clause')->name('student.SQLLesson.chapter3.where_clause');

            Route::get('/compound_condition', 'studentController@compound_condition')->name('student.SQLLesson.chapter3.compound_condition');

            Route::get('/between', 'studentController@between')->name('student.SQLLesson.chapter3.between');

            Route::get('/computed_column', 'studentController@computed_column')->name('student.SQLLesson.chapter3.computed_column');

            Route::get('/like', 'studentController@like')->name('student.SQLLesson.chapter3.like');

            Route::get('/in', 'studentController@in')->name('student.SQLLesson.chapter3.in');

            Route::get('/sorting', 'studentController@sorting')->name('student.SQLLesson.chapter3.sorting');

            Route::get('/order_by', 'studentController@order_by')->name('student.SQLLesson.chapter3.order_by');

            Route::get('/additional_sorting', 'studentController@additional_sorting')->name('student.SQLLesson.chapter3.additional_sorting');

            Route::get('/using_function', 'studentController@using_function')->name('student.SQLLesson.chapter3.using_function');

            Route::get('/using_count', 'studentController@using_count')->name('student.SQLLesson.chapter3.using_count');

            Route::get('/using_sum', 'studentController@using_sum')->name('student.SQLLesson.chapter3.using_sum');

            Route::get('/avg_max_min', 'studentController@avg_max_min')->name('student.SQLLesson.chapter3.avg_max_min');

            Route::get('/using_distinct', 'studentController@using_distinct')->name('student.SQLLesson.chapter3.using_distinct');

            Route::get('/nesting_queries', 'studentController@nesting_queries')->name('student.SQLLesson.chapter3.nesting_queries');

            Route::get('/subqueries', 'studentController@subqueries')->name('student.SQLLesson.chapter3.subqueries');

            Route::get('/grouping', 'studentController@grouping')->name('student.SQLLesson.chapter3.grouping');

            Route::get('/group_by', 'studentController@group_by')->name('student.SQLLesson.chapter3.group_by');

            Route::get('/having', 'studentController@having')->name('student.SQLLesson.chapter3.having');

            Route::get('/having_where', 'studentController@having_where')->name('student.SQLLesson.chapter3.having_where');

            Route::get('/nulls', 'studentController@nulls')->name('student.SQLLesson.chapter3.nulls');

        });

        Route::prefix('chapter4')->group(function(){

            Route::get('/', 'studentController@updating_data')->name('student.SQLLesson.chapter4');

            Route::get('/new_from_existing', 'studentController@new_from_existing')->name('student.SQLLesson.chapter4.new_from_existing');

            Route::get('/existing_data', 'studentController@existing_data')->name('student.SQLLesson.chapter4.existing_data');

            Route::get('/add_rows_existing', 'studentController@add_rows_existing')->name('student.SQLLesson.chapter4.add_rows_existing');

            Route::get('/commit_and_rollback', 'studentController@commit_and_rollback')->name('student.SQLLesson.chapter4.commit_and_rollback');

            Route::get('/transactions', 'studentController@transactions')->name('student.SQLLesson.chapter4.transactions');

            Route::get('/changing_deleting_existing', 'studentController@changing_deleting_existing')->name('student.SQLLesson.chapter4.changing_deleting_existing');

            Route::get('/rollback', 'studentController@rollback')->name('student.SQLLesson.chapter4.rollback');

            Route::get('/value_to_null', 'studentController@value_to_null')->name('student.SQLLesson.chapter4.value_to_null');

            Route::get('/tables_structure', 'studentController@tables_structure')->name('student.SQLLesson.chapter4.tables_structure');

            Route::get('/complex_changes', 'studentController@complex_changes')->name('student.SQLLesson.chapter4.complex_changes');

            Route::get('/dropping_table', 'studentController@dropping_table')->name('student.SQLLesson.chapter4.dropping_table');

        });
    });

    Route::get('Simulator', 'studentController@studentSimulator')->name('student.Simulator');

    Route::post('Simulator', 'studentController@submitSimulator')->name('student.Simulator.post');

    Route::get('Designer', 'studentController@studentDesigner')->name('student.Designer');

});

Route::get('/Proflogin', 'Auth\profLoginController@showLoginForm')->name('prof.login');

Route::post('/Proflogin', 'Auth\profLoginController@login')->name('prof.login.submit');

Route::prefix('prof')->group(function(){

    Route::get('/Home', 'profController@index')->name('prof.profHome');

    Route::prefix('Student')->group(function(){

        Route::get('/', 'profController@StudentView')->name('prof.student');

        Route::get('CreateClass', 'profController@CreateClassView')->name('prof.student.CreateClass');

        Route::post('CreateClass', 'ImportClassController@ImportClass')->name('prof.student.CreateClass.import');

        Route::get('ViewDatabase', 'profController@ViewDatabaseView')->name('prof.student.ViewDatabase');

        Route::get('ViewProgress', 'profController@ViewProgressView')->name('prof.student.ViewProgress');

        Route::get('StudentInfo', 'profController@StudentInfoView')->name('prof.student.StudentInfo');

    });

    Route::prefix('Quiz')->group(function(){

        Route::get('/', 'profController@QuizView');

        Route::get('ViewQuiz', 'profController@ViewQuizView');

        Route::get('CreateQuiz', 'profController@CreateQuizView');

        Route::post('CreateQuiz', 'quiz_controller@insert');

        Route::get('EditQuiz', 'profController@EditQuizView');

        Route::get('EditQuizContent', 'profController@EditQuizContentView');

    });

    Route::get('/Upload', 'profController@UploadView');

    Route::get('/UploadProp', 'profController@UploadPropView');

});
