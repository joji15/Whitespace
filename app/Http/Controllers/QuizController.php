<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Redirect;

class QuizController extends Controller
{
    //$data['data'] = DB::table('quiz')->get();
    public function viewQuizzes()
    {
        $profID = 11071998;
      //  $quiz = DB::table('quiz')->select('quiz_title','quiz_desc')->get();
        $quiz = DB::table('quiz')
                  ->selectRaw('quiz_id, quiz_title, quiz_desc, created_at')
                  ->whereRaw('prof_id = ?', $profID)
                  ->get();

        return view('admin.adminQuiz', ['quiz' => $quiz]);
    }

    public function viewQuestionsRandom()
    {
      $question= DB::table('question')->inRandomOrder()->get();
      return view('students.studentsTakeQuiz', ['question' => $question]);
    }

    public function viewQuestions()
    {
      $quiz_id = 1;
      $questions = DB::table('question')
                    ->join('quiz','question.quiz_id','=','quiz.quiz_id')
                    //->whereRaw('quiz.quiz_id = ?', $quiz_id)
                    ->get();
      return view('quiz.viewQuiz',['questions' => $questions]);
    }

    public function viewScheduledQuizzes()
    {
      $profID = '11071998'; //prof_id of the student's prof
      $classID = '2'; // class_id of class he/she belongs to

      $scheduled_quiz = DB::table('quiz_sched_tbl')
                        ->join('quiz','quiz_sched_tbl.quiz_id','=','quiz.quiz_id')
                        ->whereRaw('status = 0 AND prof_id = ? AND class_id = 2',$profID)
                        ->get();
      $finished_quiz = DB::table('quiz_sched_tbl')
                      ->join('quiz','quiz_sched_tbl.quiz_id','=','quiz.quiz_id')
                      //join with results table
                      ->whereRaw('status=1')
                      ->get();

      return view('students.studentsScheduledQuizzes',['scheduled_quiz' => $scheduled_quiz, 'finished_quiz' => $finished_quiz]);
    }

}
