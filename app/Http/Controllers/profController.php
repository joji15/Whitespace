<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\class_tbl;
use App\student;
use App\quiz;

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
  public function index()
  {
    return view('prof.profHome')->with('students', Student::all())->with('quizzes', Quiz::all())->with('classes', class_tbl::all());
  }

  public function StudentView()
  {
    return view('prof.profStudent');
  }

  public function CreateClassView()
  {
    $show = 0;
    return view('profstudent.profCreateClass', ['status' => $show]);
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
    return view('prof.profQuiz');
  }

  public function ViewQuizView()
  {
    return view('profquiz.viewQuiz');
  }

  public function CreateQuizView()
  {
    return view('profquiz.createQuiz');
  }

  public function EditQuizView()
  {
    return view('profquiz.editQuiz');
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
