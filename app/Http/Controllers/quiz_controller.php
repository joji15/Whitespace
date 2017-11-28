<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use DB;

class quiz_controller extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:prof');
  }

  function insert(Request $req)
   {
     $profID = Auth::user()->prof_id;

     $quiz_title=$req->input('quiz_title');
     $quiz_desc=$req->input('quiz_desc');
     $question=$req->input('question');
     $choice_A=$req->input('choice_A');
     $choice_B=$req->input('choice_B');
     $choice_C=$req->input('choice_C');
     $choice_D=$req->input('choice_D');
     $question=$req->input('question');
     $correct=$req->input('correct_ans');
     $current_time = Carbon::now()->toDateTimeString();

     DB::table('quiz_tbl')->insertGetId(
        ['quiz_title'=>$quiz_title,
         'quiz_desc'=>$quiz_desc,
         'created_at'=>$current_time,
         'prof_id'=>$profID]
      );

     $quizID = DB::table('quiz_tbl')->max('quiz_id');

     $count=count($question);
     for ($i=0; $i < $count; $i++)
     {
      DB::table('question_tbl')->insertGetId(
         ['question'=>$question[$i],
          'choice_A'=>$choice_A[$i],
          'choice_B'=>$choice_B[$i],
          'choice_C'=>$choice_C[$i],
          'choice_D'=>$choice_D[$i],
          'quiz_id'=>$quizID,
          'correct_ans'=>$correct[$i]]
       );
     }

     $message="1";

     return view('profquiz.createQuiz', ['messages'=>$message]);
   }
}
