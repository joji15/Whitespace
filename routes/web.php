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

Route::get('/aboutus', function(){
    return view('aboutus');
})->name('homepage.aboutus');

Auth::routes();

Route::get('/Studentlogin', 'Auth\studentLoginController@showLoginForm')->name('student.login');

Route::post('/Studentlogin', 'Auth\studentLoginController@login')->name('student.login.submit');

Route::get('/StudentNewPassword', 'Auth\studentLoginController@showNewPassForm')->name('student.newpass');

Route::post('/StudentNewPassword', 'Auth\studentLoginController@NewPassForm')->name('student.newpass.submit');

Route::prefix('student')->group(function(){

    Route::prefix('Home')->group(function(){

        Route::get('/', 'studentController@index')->name('student.Home');

        Route::get('studentsClassList', 'studentController@studentsClassList')->name('student.Home.studentsClassList');

        Route::get('studentsScheduledQuizzes', 'studentController@studentsScheduledQuizzes')->name('student.Home.studentsScheduledQuizzes');

        Route::get('studentsRankings', 'studentController@studentsRankings')->name('student.Home.studentsRankings');

        Route::get('studentsLesson', 'studentController@studentsLesson');
        

    });

    Route::prefix('Profile')->group(function(){

        Route::get('/', 'studentController@studentprofile')->name('student.Profile');

        Route::prefix('Quiz')->group(function(){

            Route::get('studentViewQuiz','studentController@studentTakeQuiz')->name('student.Profile.Quiz.ViewQuiz');
            
            Route::get('studentTakeQuiz', 'studentController@checkSched')->name('students.studentTakeQuiz');

            Route::get('viewQuestion','studentController@viewTakeQuizGet')->name('student.Profile.Quiz.Get');

            Route::post('viewQuestion','studentController@viewTakeQuiz')->name('student.Profile.Quiz');

            Route::get('studentReviewResult', 'studentController@reviewResult')->name('student.Profile.Quiz.ReviewResult');

            Route::post('studentSubmitAnswer','studentController@submitAnswer')->name('student.Profile.Quiz.SubmitAnswer');
        });

        Route::get('/Download', 'studentController@studentDownload')->name('student.Profile.Download');

    });

    Route::prefix('SQLLesson')->group(function(){

        Route::get('/', 'studentController@studentLesson')->name('student.SQLLesson');

        Route::prefix('chapter1')->group(function(){

            Route::get('/', 'studentController@sql_intro')->name('student.SQLLesson.chapter1');

            Route::get('sql_capabilities', 'studentController@sql_capabilities')->name('student.SQLLesson.chapter1.sql_capabilities');

            Route::get('database_concepts', 'studentController@database_concepts')->name('student.SQLLesson.chapter1.database_concepts');

            Route::get('data_types', 'studentController@data_types')->name('student.SQLLesson.chapter1.data_types');

        });

        Route::prefix('chapter2')->group(function(){

            Route::get('/', 'studentController@chap2_intro')->name('student.SQLLesson.chapter2');

            Route::get('select_clause', 'studentController@select_clause')->name('student.SQLLesson.chapter2.select_clause');

            Route::get('sorting', 'studentController@sorting')->name('student.SQLLesson.chapter2.sorting');

            Route::get('subquery', 'studentController@subquery')->name('student.SQLLesson.chapter2.subquery');

            Route::get('functions', 'studentController@functions')->name('student.SQLLesson.chapter2.functions');

            Route::get('join', 'studentController@join')->name('student.SQLLesson.chapter2.join');

            Route::get('union', 'studentController@view_delete')->name('student.SQLLesson.chapter2.union');

            Route::get('insert_statement', 'studentController@insert_statement')->name('student.SQLLesson.chapter2.insert_statement');

            Route::get('update_statement', 'studentController@update_statement')->name('student.SQLLesson.chapter2.update_statement');

            Route::get('delete_statement', 'studentController@delete_statement')->name('student.SQLLesson.chapter2.delete_statement');

        });

        Route::prefix('chapter3')->group(function(){

            Route::get('', 'studentController@chapter3_intro')->name('student.SQLLesson.chapter3_intro');

            Route::get('create', 'studentController@create')->name('student.SQLLesson.chapter3.create');

            Route::get('alter', 'studentController@alter')->name('student.SQLLesson.chapter3.alter');

            Route::get('drop', 'studentController@drop')->name('student.SQLLesson.chapter3.drop');
        });
        
    });

    Route::get('Simulator', 'studentController@studentSimulator')->name('student.Simulator');

    Route::post('Simulator', 'studentController@submitSimulator')->name('student.Simulator.post');

    Route::get('Designer', 'studentController@studentDesigner')->name('student.Designer');

});

Route::get('/Proflogin', 'Auth\profLoginController@showLoginForm')->name('prof.login');

Route::post('/Proflogin', 'Auth\profLoginController@login')->name('prof.login.submit');

Route::prefix('prof')->group(function(){

    Route::get('/', 'profController@home')->name('prof');

    Route::get('/Home', 'profController@index')->name('prof.profHome');

    Route::prefix('Student')->group(function(){

        Route::get('/', 'profController@StudentView')->name('prof.student');

        Route::get('CreateClass', 'profController@CreateClassView')->name('prof.student.CreateClass');

        Route::post('CreateClass', 'ImportClassController@ImportClass')->name('prof.student.CreateClass.import');

        Route::get('ViewDatabase', 'profController@ViewDatabaseView')->name('prof.student.ViewDatabase');

        Route::get('ViewProgress', 'profController@ViewProgressView')->name('prof.student.ViewProgress');

        Route::get('StudentInfo', 'profController@StudentInfoView')->name('prof.student.StudentInfo');

        Route::post('StudentHistory', 'profController@StudHistory')->name('prof.student.StudentHistory');

        Route::get('StudentHistory', 'profController@StudHistoryGet')->name('prof.student.StudentHistoryGet');

    });

    Route::prefix('Quiz')->group(function(){

        Route::get('/', 'profController@QuizView')->name('prof.quiz');

        Route::get('ViewQuiz', 'profController@ViewQuizView')->name('prof.quiz.ViewQuiz');

        Route::get('CreateQuiz', 'profController@CreateQuizView')->name('prof.quiz.CreateQuiz');

        Route::post('CreateQuiz', 'quiz_controller@insert')->name('prof.quiz.CreateQuiz.submit');

        Route::get('EditQuiz', 'profController@EditQuizView')->name('prof.quiz.EditQuiz');

        Route::post('EditQuiz', 'quiz_controller@update')->name('prof.quiz.EditQuiz.submit');

        Route::get('ScheduleQuiz', 'profController@ScheduleQuiz')->name('prof.quiz.ScheduleQuiz');

        Route::post('ScheduleQuiz', 'profController@addSchedule')->name('prof.quiz.ScheduleQuiz.add');

        Route::get('EditSchedule', 'profController@EditSchedule')->name('profquiz.EditSchedule');

        Route::post('EditSchedule', 'profController@updateSchedule')->name('profquiz.updateSchedule.submit');

        //Route::post('ScheduleQuiz', 'profController@addSchedule')->name('profquiz.addSchedule.submit');


    });

    Route::prefix('Upload')->group(function(){

        Route::get('/', 'DownloadController@dlProf')->name('prof.upload');

        Route::get('uploadfile','UploadController@getView')->name('prof.upload.uploadfile');

        Route::post('insertfile',array('as'=>'insertfile','uses'=>'UploadController@insertFile'))->name('prof.upload.insertfile');

    });

    Route::prefix('Audit')->group(function(){

        Route::get('/', 'profController@AuditView')->name('prof.audit');

    });

    Route::prefix('Users')->group(function(){

        Route::get('/', 'profController@UsersView')->name('prof.users');

        Route::post('/', 'profController@UsersAddAccount')->name('prof.users.add');

    });

});
