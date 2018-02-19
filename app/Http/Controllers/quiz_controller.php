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

  public function update(Request $request)
  {
    $quizID = $request->input('quizID');
    $update_title = $request->input('quiz_title');
    $update_desc = $request->input('quiz_desc');
    DB::table('quiz_tbl')
    ->where('quiz_id',$quizID)
    ->update(['quiz_title'=>$update_title,
    'quiz_desc'=>$update_desc]);
    $question_id=$request->input('question_id');
    $update_question = $request->input('update_question');
    $update_choice_A = $request->input('update_choice_A');
    $update_choice_B = $request->input('update_choice_B');
    $update_choice_C = $request->input('update_choice_C');
    $update_choice_D = $request->input('update_choice_D');
    $update_correct_ans = $request->input('update_correct_ans');
    $count=count($update_question);
    for ($i=0; $i < $count; $i++){
      DB::table('question_tbl')
      ->where('question_id',$question_id[$i])
      ->update(['question'=>$update_question[$i],
      'choice_A'=>$update_choice_A[$i],
      'choice_B'=>$update_choice_B[$i],
      'choice_C'=>$update_choice_C[$i],
      'choice_D'=>$update_choice_D[$i],
      'correct_ans'=>$update_correct_ans[$i]]);
    }
    $add_question = $request->input('add_question');
    $add_choice_A = $request->input('add_choice_A');
    $add_choice_B = $request->input('add_choice_B');
    $add_choice_C = $request->input('add_choice_C');
    $add_choice_D = $request->input('add_choice_D');
    $add_correct_ans = $request->input('add_correct_ans');
    $qcount=count($add_question);
    for ($i=0; $i < $qcount; $i++){
      DB::table('question_tbl')
      ->insertGetId(['question'=>$add_question[$i],
      'choice_A'=>$add_choice_A[$i],
      'choice_B'=>$add_choice_B[$i],
      'choice_C'=>$add_choice_C[$i],
      'choice_D'=>$add_choice_D[$i],
      'quiz_id'=>$quizID,
      'correct_ans'=>$add_correct_ans[$i]]);
    }
    return redirect('/prof/Quiz');
  }

}
