<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentQuizController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth:stud');
  }
  
  public function viewScheduledQuizzes()
  {
    $studentID = Auth::user()->student_id;
		$classID = DB::table('student')->where('student_id', $studentID)->value('class_id');
		$profID = DB::table('class_tbl')->where('class_id', $classID)->value('prof_id');

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
