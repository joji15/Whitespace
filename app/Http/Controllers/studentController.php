<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use DB;
use Auth;
use App\history_tbl;
use App\student;

class studentController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
  	$this->middleware('auth:stud');
  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */

  public function index()
  {
  	$quiz = 0;
  	$student = Auth::user()->student_id;
  	$history = DB::table('history_tbl')->select('query_text', 'created_at')->where('student_id', '=', $student)->get();
  	$classID = DB::table('student')->where('student_id', $student)->value('class_id');
  	$profID = DB::table('class_tbl')->where('class_id', $classID)->value('prof_id');
  	$download = DB::table('files_tbl')->where('prof_id', $profID)->get();

  	return view('students.studentHome', compact('quiz','history','download'));
  }

  public function studentprofile()
  {
  	$studentID = Auth::user()->student_id;
  	$classID = DB::table('student')->where('student_id', $studentID)->value('class_id');
  	$profID = DB::table('class_tbl')->where('class_id', $classID)->value('prof_id');
  	$downloads = DB::table('files_tbl')->where('prof_id', $profID)->get();

  	$history = DB::table('history_tbl')->select('query_text', 'created_at')->where('student_id', '=', $studentID)->get();

  	$scheduled_quiz = DB::table('quiz_sched_tbl')
  	->join('quiz_tbl','quiz_sched_tbl.quiz_id','=','quiz_tbl.quiz_id')
  	->join('finished_tbl','quiz_sched_tbl.quiz_sched_id','=','finished_tbl.quiz_sched_id')
  	->whereRaw('finished_tbl.status = "no" AND student_id = '.$studentID)
  	->get();

  	$finished_quiz = DB::table('finished_tbl')
  	->join('quiz_sched_tbl','finished_tbl.quiz_sched_id','=','quiz_sched_tbl.quiz_sched_id')
  	->join('quiz_tbl','quiz_sched_tbl.quiz_id','=','quiz_tbl.quiz_id')
  	->join('scores_tbl', 'quiz_sched_tbl.quiz_sched_id', '=', 'scores_tbl.quiz_sched_id')
  	->whereRaw('finished_tbl.status = "yes" AND finished_tbl.student_id = '.$studentID)
  	->get(); 


  	return view('students.studentProfile',compact('downloads', 'history', 'scheduled_quiz', 'finished_quiz'));
  }


 public function studentQuiz()
 {
   return view('studentprofile.studentQuiz');
 }


 public function viewTakeQuiz(Request $req)
 {

    $date = Carbon::now('Asia/Manila')-> toDateString();
    $time = Carbon::now('Asia/Manila')-> toTimeString();

    $quizID = $req->input('quiz_id');
    $quizDate = Carbon::parse($req->input('quiz_date'));

    $timeStart = Carbon::parse($req->input('time_start'));
    $timeEnd = Carbon::parse($req->input('time_end'));

    $date1 = Carbon::parse($date);
    $dateDiff= $quizDate->diffInDays($date1);

    $time1 = Carbon::parse($time);

    if ($dateDiff==0 && $time1>$timeStart && $time1<$timeEnd){

     $questions = DB::table('question_tbl')
      ->join('quiz_tbl','question_tbl.quiz_id','=','quiz_tbl.quiz_id')
      ->whereRaw('quiz_tbl.quiz_id = ?', $quizID)
      ->inRandomOrder()
      ->get();

       $quizTitle = DB::table('quiz_tbl')
      ->select('quiz_title')
      ->where('quiz_id','=', $quizID)
      ->get();

      $quiz_sched_id = $req->input('quizSchedID');

     return view('students.studentTakeQuiz',compact('questions', 'quizTitle', 'quizId','quiz_sched_id'));
   }
   else if ($dateDiff!=0){
     return redirect()->route('student.Profile');
   }
   else {
     return redirect()->route('student.Profile');
   }

}

public function viewTakeQuizGet()
{
  return redirect()->intended(route('student.Profile'));
}

public function reviewResult(Request $req){
 $quiz_id = 2;
 $reviewQuestions = DB::table('question_tbl')                    
 ->join('quiz_tbl','quiz_tbl.quiz_id','=','question_tbl.quiz_id')                            
 ->where('quiz_tbl.quiz_id', '=', $quiz_id)
 ->get();
 $answers = DB::table('answers_tbl')
 ->select('student_ans')
 ->join('question_tbl', 'answers_tbl.question_id','=','question_tbl.question_id')
 ->join('student','answers_tbl.student_id','student.student_id')
 ->where('question_tbl.quiz_id', '=', $quiz_id)
 ->get();

 $correctView = [];

 $qTitle = DB::table('quiz_tbl')->select('quiz_title')->where('quiz_id', '=', $quiz_id)->get(); 

 return view('students.studentReviewResult',compact('qTitle','reviewQuestions','answers'));
}

public function submitAnswer(request $req){
 $student_id = Auth::user()->student_id;
 $quiz_id = $req->input('quizID');
 $question_id = DB::table('question_tbl')
 ->select('question_id')
 ->whereRaw('quiz_id = ?',$quiz_id)
 ->get();
 foreach ($question_id as $qID){
  $question_choices = $req->input("qchoices$qID->question_id");

  DB::table('answers_tbl')
  ->insertGetId(['student_ans' => $question_choices,'student_id' => $student_id,'question_id' => $qID->question_id]);
}

$quiz_sched_id = $req->input('quizSchedID');
DB::table('finished_tbl')
    ->update(['quiz_sched_id' => $quiz_sched_id,'student_id' => $student_id,'quiz_sched_id' => $quiz_id,'status' => "yes", 'time_end' =>\Carbon\Carbon::now()])
    ->whereRaw('quiz_sched_id = ?',$quiz_sched_id);


return redirect()->intended(route('student.Profile'));
}

public function studentDownload(){
 return view('studentprofile.studentDownload');
}

public function studentLesson()
{
 return view('students.studentLessons');
}

public function studentSimulator()
{
 $student = Auth::user()->student_id;
 $history = DB::table('history_tbl')->select('query_text', 'created_at')->where('student_id', '=', $student)->get();
 return view('students.studentSimulator', ['history_list' => $history]);
}

public function submitSimulator(Request $request)
{
 $studentID = Auth::user()->student_id;
 $qtext = $request->input('editor');

 $submitQuery = DB::table('history_tbl')->insertGetId(['query_text' => $qtext,'created_at' => \Carbon\Carbon::now(),'student_id' => $studentID]);
}

public function studentDesigner()
{
 return view('students.studentDesigner');
}

public function studentsClassList(){
 return view('students.studentsClassList');
}

/*------------------------LESSONS------------------------*/

public function sql_intro(){
 return view('studentlessons.chapter1.sql_intro');
}

public function sql_capabilities(){
 return view('studentlessons.chapter1.sql_capabilities');
}

public function database_concepts(){
 return view('studentlessons.chapter1.database_concepts');
}
public function data_types(){
 return view('studentlessons.chapter1.data_types');
}

/*-----------------------------------------------------------------*/
public function chap2_intro(){
 return view('studentlessons.chapter2.chap2_intro');
}

public function select_clause(){
 return view('studentlessons.chapter2.select_clause');
}

public function sorting(){
 return view('studentlessons.chapter2.sorting');
}

public function subquery(){
 return view('studentlessons.chapter2.subquery');
}

public function functions(){
 return view('studentlessons.chapter2.functions');
}

public function join(){
 return view('studentlessons.chapter2.join');
}

public function union(){
 return view('studentlessons.chapter2.union');
}

public function insert_statement(){
 return view('studentlessons.chapter2.insert_statement');
}

public function update_statement(){
 return view('studentlessons.chapter2.update_statement');
}

public function delete_statement(){
 return view('studentlessons.chapter2.delete_statement');
}

/*----------------------------------------------------------------*/
public function chapter3_intro(){
 return view('studentlessons.chapter3.chapter3_intro');
}

public function create(){
 return view('studentlessons.chapter3.create');
}

public function alter(){
 return view('studentlessons.chapter3.alter');
}

public function drop(){
 return view('studentlessons.chapter3.drop');
}
/*------------------------QUIZZES------------------------*/


public function studentTakeQuiz()
{
 $quiz_id = 2;
 $questions = DB::table('question_tbl')
 ->join('quiz_tbl','question_tbl.quiz_id','=','quiz_tbl.quiz_id')
 ->whereRaw('quiz_tbl.quiz_id = ?', $quiz_id)
 ->inRandomOrder()
 ->get();
 return view('students.studentTakeQuiz',compact('questions'));
}

public function studentsResultQuiz(){
 return view('students.studentsResultQuiz');
}

public function studentsRankings(){
 return view('students.studentsRankings');
}
}
