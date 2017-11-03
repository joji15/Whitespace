<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    return view('prof.profHome');
  }

  public function StudentView()
  {
    return view('prof.profStudent');
  }

  public function CreateClassView()
  {
    return view('profstudent.profCreateClass');
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
