<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\ClassModel;
use App\ScheduleModel;
use Redirect;

class ScheduleController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:prof');
  }

  public function viewSchedule()
  {

    //$school_year = ClassModel::all();
    $class = DB::table('class_tbl')->orderBy('school_year','desc')->get();

    //$schedule = DB::table('quiz_sched_tbl')->orderBy('quiz_date','desc')->get();
    $schedule = DB::table('quiz_sched_tbl')
    ->join('class_tbl', 'quiz_sched_tbl.class_id','=','class_tbl.class_id')
    ->orderBy('school_year','desc')
    ->get();

    //$schedule = ScheduleModel::all();
    return view('profquiz/scheduleQuiz', ['class'=>$class, 'schedule'=>$schedule]);

  }


  public function addSchedule(Request $req)
  {
    $classID = $req->input('class_id');
    $quiz_date = $req->input('quiz_date');
    $time_start = $req->input('time_start');
    $time_end = $req->input('time_end');

    $data = array('class_id' => $classID, 'quiz_date' => $quiz_date, 'time_start' => $time_start, 'time_end' => $time_end);

    DB::table('quiz_sched_tbl')->insert($data);

    return Redirect::to(route('prof.quiz.ScheduleQuiz'));
  }
}
