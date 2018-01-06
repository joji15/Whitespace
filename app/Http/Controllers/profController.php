<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\class_tbl;
use App\student;
use App\quiz;
use Auth;
use DB;

class profController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('auth:prof');
  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */

  public function home()
  {
    return redirect()->route('prof.profHome');
  }

  public function index()
  {
    return view('prof.profHome')->with('students', Student::all())->with('quizzes', Quiz::all())->with('classes', class_tbl::all());
  }

  public function StudentView()
  {
    $show = 0;
    return view('prof.profStudent', compact('show'));
  }

  public function CreateClassView()
  {
    $show = 0;
    return view('profstudent.profCreateClass', compact('show'));
  }

  public function ViewDatabaseView()
  {
    return view('profstudent.profViewDB');
  }

  public function ViewProgressView()
  {
    return view('profstudent.profViewProgress');
  }

  public function StudentInfoView()
  {
    return view('profstudent.profStudentInfo');
  }

  public function QuizView()
  {
    $profID = Auth::user()->prof_id;
    $quiz = DB::table('quiz_tbl')
      ->selectRaw('quiz_id, quiz_title, quiz_desc, created_at')
      ->whereRaw('prof_id = ?', $profID)
      ->get();
    return view('prof.profQuiz', compact('quiz'));
  }

  public function ViewQuizView()
  {
    return view('profquiz.viewQuiz');
  }

  public function CreateQuizView()
  {
    $message = "0";
    return view('profquiz.createQuiz', ['messages'=>$message]);
  }

  public function EditQuizView(Request $request)
  {
    $quizID = $request->input('quiz_id');
    $question = DB::table('question_tbl')
      ->selectRaw('question_id, question, choice_A, choice_B, choice_C, choice_D, correct_ans')
      ->whereRaw('quiz_id = ?',$quizID)
      ->get();
    $question_info = DB::table('quiz_tbl')
      ->selectRaw('quiz_title, quiz_desc')
      ->whereRaw('quiz_id = ?',$quizID)
      ->get();
    return view('profquiz.editQuiz', compact('quizID','question','question_info'));
  }

  public function EditQuizContentView()
  {
    return view('profquiz.editQuizContent');
  }

  public function UploadView()
  {
    return view('prof.profUpload');
  }

  public function UploadPropView()
  {
    return view('profUpload.UploadProps');
  }

}
