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
    return view('students.studentHome', compact('quiz','history'));
  }

	public function studentprofile()
	{
		$studentID = Auth::user()->student_id;
		$classID = DB::table('student')->where('student_id', $studentID)->value('class_id');
		$profID = DB::table('class_tbl')->where('class_id', $classID)->value('prof_id');
    $downloads = DB::table('files_tbl')->where('prof_id', $profID)->get();

		$history = DB::table('history_tbl')->select('query_text', 'created_at')->where('student_id', '=', $studentID)->get();
		return view('students.studentProfile',compact('downloads', 'history'));
	}

	public function studentQuiz()
	{
		return view('studentprofile.studentQuiz');
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

		DB::table('history_tbl')->insertGetId(
				['query_text' => $qtext,
				'created_at' => \Carbon\Carbon::now(),
				'student_id' => $studentID]
		);
		return $this->studentSimulator();
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

	public function database_concepts(){
		return view('studentlessons.chapter1.database_concepts');
	}

	public function relational_db(){
		return view('studentlessons.chapter1.relational_db');
	}

	public function entities_attributes_relationships(){
		return view('studentlessons.chapter1.entities_attributes_relationships');
	}

	public function functional_dependence(){
		return view('studentlessons.chapter1.functional_dependence');
	}

	public function primary_key(){
		return view('studentlessons.chapter1.primary_key');
	}

	public function diagrams_dbDesign(){
		return view('studentlessons.chapter1.diagrams_dbDesign');
	}

	public function chap2_intro(){
		return view('studentlessons.chapter2.chap2_intro');
	}

	public function create_table(){
		return view('studentlessons.chapter2.create_table');
	}

	public function using_nulls(){
		return view('studentlessons.chapter2.using_nulls');
	}

	public function describing_table(){
		return view('studentlessons.chapter2.describing_table');
	}

	public function adding_rows(){
		return view('studentlessons.chapter2.adding_rows');
	}

	public function insert_command(){
		return view('studentlessons.chapter2.insert_command');
	}

	public function insert_null(){
		return view('studentlessons.chapter2.insert_null');
	}

	public function view_delete(){
		return view('studentlessons.chapter2.view_delete');
	}

	public function single_table_query(){
		return view('studentlessons.chapter3.single_table_query');
	}

	public function retrieve_all(){
		return view('studentlessons.chapter3.retrieve_all');
	}

	public function retrieve_certaincolumn(){
		return view('studentlessons.chapter3.retrieve_certaincolumn');
	}

	public function where_clause(){
		return view('studentlessons.chapter3.where_clause');
	}

	public function compound_condition(){
		return view('studentlessons.chapter3.compound_condition');
	}

	public function between(){
		return view('studentlessons.chapter3.between');
	}

	public function computed_column(){
		return view('studentlessons.chapter3.computed_column');
	}

	public function like(){
		return view('studentlessons.chapter3.like');
	}

	public function in(){
		return view('studentlessons.chapter3.in');
	}

	public function sorting(){
		return view('studentlessons.chapter3.sorting');
	}

	public function order_by(){
		return view('studentlessons.chapter3.order_by');
	}

	public function additional_sorting(){
		return view('studentlessons.chapter3.additional_sorting');
	}

	public function using_function(){
		return view('studentlessons.chapter3.using_function');
	}

	public function using_count(){
		return view('studentlessons.chapter3.using_count');
	}

	public function using_sum(){
		return view('studentlessons.chapter3.using_sum');
	}

	public function avg_max_min(){
		return view('studentlessons.chapter3.avg_max_min');
	}

	public function using_distinct(){
		return view('studentlessons.chapter3.using_distinct');
	}

	public function nesting_queries(){
		return view('studentlessons.chapter3.nesting_queries');
	}

	public function subqueries(){
		return view('studentlessons.chapter3.subqueries');
	}

	public function grouping(){
		return view('studentlessons.chapter3.grouping');
	}

	public function group_by(){
		return view('studentlessons.chapter3.group_by');
	}

	public function having(){
		return view('studentlessons.chapter3.having');
	}

	public function having_where(){
		return view('studentlessons.chapter3.having_where');
	}

	public function nulls(){
		return view('studentlessons.chapter3.nulls');
	}

	public function updating_data(){
		return view('studentlessons.chapter4.updating_data');
	}

	public function new_from_existing(){
		return view('studentlessons.chapter4.new_from_existing');
	}

	public function existing_data(){
		return view('studentlessons.chapter4.existing_data');
	}

	public function add_rows_existing(){
		return view('studentlessons.chapter4.add_rows_existing');
	}

	public function commit_and_rollback(){
		return view('studentlessons.chapter4.commit_and_rollback');
	}

	public function transactions(){
		return view('studentlessons.chapter4.transactions');
	}

	public function changing_deleting_existing(){
		return view('studentlessons.chapter4.changing_deleting_existing');
	}

	public function rollback(){
		return view('studentlessons.chapter4.rollback');
	}

	public function value_to_null(){
		return view('studentlessons.chapter4.value_to_null');
	}

	public function tables_structure(){
		return view('studentlessons.chapter4.tables_structure');
	}

	public function complex_changes(){
		return view('studentlessons.chapter4.complex_changes');
	}

	public function dropping_table(){
		return view('studentlessons.chapter4.dropping_table');
	}
	/*------------------------QUIZZES------------------------*/

	public function studentsTakeQuiz(){
		return view('students.studentsTakeQuiz');
	}

	public function studentsTakeQuiz2(){
		return view('students.studentsTakeQuiz2');
	}

	public function studentsResultQuiz(){
		return view('students.studentsResultQuiz');
	}

	public function studentsRankings(){
		return view('students.studentsRankings');
	}
}
