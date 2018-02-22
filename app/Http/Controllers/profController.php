<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\class_tbl;
use App\student;
use App\quiz;
use Auth;
use DB;
use Redirect;
use Carbon\Carbon;

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
		$profID = Auth::user()->prof_id;
		$classStudent = DB::table('class_tbl')->join('student','class_tbl.class_id','=','student.class_id')->whereRaw('prof_id = ?',$profID)->get();
		$quizzes = DB::table('quiz_tbl')->get();
		return view('prof.profHome', compact('classStudent'))->with('quizzes', Quiz::all());
	}

	public function StudentView()
	{
		$profID = Auth::user()->prof_id;
		$show = 0;
		$class = DB::table('class_tbl')->whereRaw('prof_id = ?',$profID)->get();
		return view('prof.profStudent', compact('show','class'));
	}

	public function StudHistory(Request $req)
	{
		$profID = Auth::user()->prof_id;
		$class_ID = $req->input('class_ID');
		$class = DB::table('class_tbl')->whereRaw('prof_id = ?',$profID, 'AND', 'class_id = ?', $class_ID)->get();
		$history = DB::table('history_tbl')->get();
		$student = DB::table('student')->whereRaw('class_id = ?', $class_ID)->get();
		return view('prof.profHistory', compact('class_ID','class','history','student'));
	}

	public function StudHistoryGet()
	{
		return redirect()->intended(route('prof.student'));
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

	public function EditSchedule(Request $req)
	{
		$quizSchedID = $req->input('quiz_sched_id');
		$quizId = $req->input('quiz_id');
		$class_sched = DB::table('quiz_sched_tbl')
		->join('quiz_tbl','quiz_tbl.quiz_id','=','quiz_sched_tbl.quiz_id')
		->join('class_tbl', 'class_tbl.class_id', '=', 'quiz_sched_tbl.class_id')
		->whereRaw('quiz_sched_id = ?', $quizSchedID)
		->get();

		$quiz = DB::table('quiz_sched_tbl')
		->join('quiz_tbl','quiz_tbl.quiz_id','=','quiz_sched_tbl.quiz_id')
		->join('class_tbl', 'class_tbl.class_id', '=', 'quiz_sched_tbl.class_id')
		->whereRaw('quiz_tbl.quiz_id = ?', $quizId )
		->whereRaw('quiz_sched_id != ?', $quizSchedID)
		->get();

		return view('profquiz.editSchedule', compact('quizSchedID','class_sched','quiz'));
	}

	public function updateSchedule(Request $req)
	{
		$course = $req -> input('course');
		$title = $req -> input('title');
		$old_date = $req -> input('old_date');
		$old_start = $req -> input('old_start');
		$old_end = $req -> input('old_end');

		$quizId = $req -> input('quiz_id');
		$quizDate = $req -> input('quiz_date');
		$timeStart = $req -> input('time_start');
		$timeEnd = $req ->  input('time_end');

		DB::table('quiz_sched_tbl')
		->where('quiz_sched_id',$quizId)
		->update(['quiz_date'=>$quizDate,
			'time_start'=>$timeStart,
			'time_end'=>$timeEnd]);

		$profID = Auth::user()->prof_id;

		DB::table('audit_trail_tbl')->insert(
			['audit_transaction' => 'Updated Schedule',
			'audit_description' => $course.' schedule of quiz "'.$title.'" will take place on '.\Carbon\Carbon::parse($quizDate)->format('F j, Y').' ('.\Carbon\Carbon::parse($quizDate)->format('l').') at '.\Carbon\Carbon::parse($timeStart)->format('g:i a') .' to '. \Carbon\Carbon::parse($timeEnd)->format('g:i a').' instead of '.\Carbon\Carbon::parse($old_date)->format('F j, Y').' ('.\Carbon\Carbon::parse($old_date)->format('l').'), '.\Carbon\Carbon::parse($old_start)->format('g:i a').'-'.\Carbon\Carbon::parse($old_end)->format('g:i a').'. These changes has been saved by You',
			'created_at' => Carbon::now(),
			'student_id' => NULL,
			'prof_id' => $profID]
		);


		return Redirect::to('/prof/Quiz');

	}

	public function ScheduleQuiz()
	{
		$class = DB::table('class_tbl')->orderBy('school_year','desc')->get();

    //$schedule = DB::table('quiz_sched_tbl')->orderBy('quiz_date','desc')->get();
		$schedule = DB::table('quiz_sched_tbl')
		->join('class_tbl', 'quiz_sched_tbl.class_id','=','class_tbl.class_id')
		->orderBy('school_year','desc')
		->get();

		$quiz_title = DB::table('quiz_tbl')->get();
		return view('profquiz.scheduleQuiz', compact('class','quiz_title'));
	}

	public function addSchedule(Request $req)
	{
		$quizID = $req->input('quiz_id');
		$classID = $req->input('class_id');
		$quiz_date = $req->input('quiz_date');
		$time_start = \Carbon\Carbon::parse($req->input('time_start'))->format('H:i:s');
		$time_end = \Carbon\Carbon::parse($req->input('time_end'))->format('H:i:s');


		$checkClass = DB::table('quiz_sched_tbl')
		->whereRaw('class_id =' .$classID)
		->get();

		$checkDateTime = DB::table('quiz_sched_tbl')
		->whereRaw('quiz_date = "'.$quiz_date.'" AND time_start = "'.$time_start.'" AND time_end = "'.$time_end.'"')
		->get();

		$checkBetweenTime = DB::table('quiz_sched_tbl')
		->whereRaw('quiz_date = "'.$quiz_date.'" AND "'.$time_start.'" BETWEEN time_start AND time_end');

		$cntCheckClass = count($checkClass);
		$cntCheckDateTime = count($checkDateTime);
		$checkBetweenTime = count($checkBetweenTime);
		
		if ($cntCheckDateTime!=0){
			return Redirect::back()->withErrors(['This schedule has been claimed by the other class.']);
		}
		else if ($cntCheckClass!=0 && $cntCheckDateTime!=0){
			return Redirect::back()->withErrors(['This class is already scheduled for this quiz.']);
		}
		else
		{
			$data = array('quiz_id' =>$quizID , 'class_id' => $classID, 'quiz_date' => $quiz_date, 'time_start' => $time_start, 'time_end' => $time_end);

			DB::table('quiz_sched_tbl')->insert($data);

			$quizSchedID = DB::table('quiz_sched_tbl')->max('quiz_sched_id');

			$class = DB::table('student')->WhereRaw('class_id = '.$classID)->get();


			 foreach ($class as $st_id){

				  DB::table('finished_tbl')
				  ->insertGetId(['quiz_sched_id' => $quizSchedID,'student_id' => $st_id->student_id,'status' => 'no']);

				}

			$profID = Auth::user()->prof_id;

			DB::table('audit_trail_tbl')->insert(
				['audit_transaction' => 'Added Schedule',
				'audit_description' => 'The date '. \Carbon\Carbon::parse($quiz_date)->format('F j, Y').' ('.\Carbon\Carbon::parse($quiz_date)->format('l').') with the schedule from '.\Carbon\Carbon::parse($time_start)->format('g:i a') .' to '. \Carbon\Carbon::parse($time_end)->format('g:i a').' has been added by You',
				'created_at' => Carbon::now(),
				'student_id' => NULL,
				'prof_id' => $profID]
			);
			
			return Redirect::to('/prof/Quiz/ScheduleQuiz');
		}


	    /*$quizTitle = DB::table('quiz_tbl')->selectRaw('quiz_title')->whereRaw('quiz_id = ?', $quizID)->get();
	    $class = DB::table('quiz_tbl')->join('quiz_sched_tbl','quiz_tbl.quiz_id','=','quiz_sched_tbl.quiz_sched_id')->whereRaw('class_id = '.$classID)->get();

	    $data = array('quiz_id' => $quizID , 'class_id' => $classID, 'quiz_date' => $quiz_date, 'time_start' => $time_start, 'time_end' => $time_end);

	    DB::table('quiz_sched_tbl')->insert($data);

	    DB::table('audit_trail_tbl')->insert(
	      ['audit_transaction' => 'Added Schedule',
	      'audit_description' => 'You have scheduled the quiz "'+$quizTitle->quiz_title+'" for the class "'+$class->course+'-'+$class->section+'"',
	      'created_at' => Carbon::now(),
	      'student_id' => NULL,
	      'prof_id' => $profID]
	    );

	    return Redirect::to('/prof/Quiz');*/
	}

	public function QuizView()
	{
		$profID = Auth::user()->prof_id;
		$quiz = DB::table('quiz_tbl')
	    //->selectRaw('quiz_id, quiz_title, quiz_desc, created_at')
		->join('quiz_sched_tbl','quiz_tbl.quiz_id','=','quiz_sched_tbl.quiz_id')
		->join('class_tbl','quiz_sched_tbl.class_id','=','class_tbl.class_id')
		->whereRaw('class_tbl.prof_id = ?', $profID)
		->get();
		return view('prof.profQuiz', compact('quiz'));
	}

	public function ViewQuizView(Request $request)
	{
		$quizID = $request->input('quiz_id');
		$questions = DB::table('question_tbl')->selectRaw('question_id, question, choice_A, choice_B, choice_C, choice_D, correct_ans')->whereRaw('quiz_id = ?',$quizID)->get();
		$question_info = DB::table('quiz_tbl')->selectRaw('quiz_title, quiz_desc')->whereRaw('quiz_id = ?',$quizID)->get();

		return view('profquiz.viewQuiz', compact('quizID','question_info','questions'));
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

	public function AuditView()
	{
		$profID = Auth::user()->prof_id;
		$audit = DB::table('audit_trail_tbl')->whereRaw('prof_id = ?',$profID)->get();
		return view('prof.profAudit', compact('audit'));
	}

	public function UsersView()
	{
		$prof = DB::table('professor')->get();
		return view('prof.profUsers', compact('prof'));
	}

	public function UsersAddAccount(Request $req)
	{
		$prof = DB::table('professor')->get();
		$fName = $req->input('fName');
		$mName = $req->input('mName');
		$lName = $req->input('lName');
		$email = $req->input('email');
		$password = $req->input('password');
		$conpassword = $req->input('conpassword');

		if ($password != $conpassword)
		{
			return redirect()->back()->withInput($request->only('student_email','remember'))->withErrors(['passerr' => 'Your new password does not match the confirm password.',]);
		}
		return view('prof.profUsers', compact('prof'));
	}

}
