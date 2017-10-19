<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class mainController extends Controller
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


	public function logincheck()
	{
		if (Auth::check()) {
    	return view('students.dashboard');
		}
		else {
			return view('auth.login');
		}
	}

	public function index()
	{
		return view('prof.profHome');
	}

	public function register()
	{
		return view('register');
	}

	public function profStud(){
		return view('prof.profStudent');
	}

	public function profCreateClass()
	{
		return view('profstudent.profCreateClass');
	}

	public function profViewDB()
	{
		return view('profstudent.profViewDB');
	}

	public function profViewProgress()
	{
		return view('profstudent.profViewProgress');
	}

	public function profQuiz()
	{
		return view('prof.profQuiz');
	}

	public function profViewQuiz()
	{
		return view('profquiz.viewQuiz');
	}

	public function profCreateQuiz()
	{
		return view('profquiz.createQuiz');
	}

	public function profEditQuiz()
	{
		return view('profquiz.editQuiz');
	}

	public function profEditQuizContent()
	{
		return view('profquiz.editQuizContent');
	}

	public function profUpload(){
		return view('profUpload.profUpload');
	}

	public function profUploadProp(){
		return view('profUpload.UploadProps');
	}


    /*STUDENTS*/
    public function studentHome(){
        return view('students.dashboard');
    }

    public function studentsClassList(){
        return view('students.studentsClassList');
    }


    /*------------------------LESSONS------------------------*/
    public function studentsLessonList(){
        return view('students.studentsLessonList');
    }

    public function studentsLesson(){
        return view('students.studentsLesson');
    }

    public function sql_intro(){
        return view('students.lessons.chapter1.sql_intro');
    }

    public function database_concepts(){
        return view('students.lessons.chapter1.database_concepts');
    }

    public function relational_db(){
        return view('students.lessons.chapter1.relational_db');
    }

    public function entities_attributes_relationships(){
        return view('students.lessons.chapter1.entities_attributes_relationships');
    }

    public function functional_dependence(){
        return view('students.lessons.chapter1.functional_dependence');
    }

    public function primary_key(){
        return view('students.lessons.chapter1.primary_key');
    }

    public function diagrams_dbDesign(){
        return view('students.lessons.chapter1.diagrams_dbDesign');
    }

    public function chap2_intro(){
        return view('students.lessons.chapter2.chap2_intro');
    }

    public function create_table(){
        return view('students.lessons.chapter2.create_table');
    }

    public function using_nulls(){
        return view('students.lessons.chapter2.using_nulls');
    }

    public function describing_table(){
        return view('students.lessons.chapter2.describing_table');
    }

    public function adding_rows(){
        return view('students.lessons.chapter2.adding_rows');
    }

    public function insert_command(){
        return view('students.lessons.chapter2.insert_command');
    }

    public function insert_null(){
        return view('students.lessons.chapter2.insert_null');
    }

    public function view_delete(){
        return view('students.lessons.chapter2.view_delete');
    }

    public function single_table_query(){
        return view('students.lessons.chapter3.single_table_query');
    }

    public function retrieve_all(){
        return view('students.lessons.chapter3.retrieve_all');
    }

    public function retrieve_certaincolumn(){
        return view('students.lessons.chapter3.retrieve_certaincolumn');
    }

    public function where_clause(){
        return view('students.lessons.chapter3.where_clause');
    }

    public function compound_condition(){
        return view('students.lessons.chapter3.compound_condition');
    }

    public function between(){
        return view('students.lessons.chapter3.between');
    }

    public function computed_column(){
        return view('students.lessons.chapter3.computed_column');
    }

    public function like(){
        return view('students.lessons.chapter3.like');
    }

    public function in(){
        return view('students.lessons.chapter3.in');
    }

    public function sorting(){
        return view('students.lessons.chapter3.sorting');
    }

    public function order_by(){
        return view('students.lessons.chapter3.order_by');
    }

    public function additional_sorting(){
        return view('students.lessons.chapter3.additional_sorting');
    }

    public function using_function(){
        return view('students.lessons.chapter3.using_function');
    }

    public function using_count(){
        return view('students.lessons.chapter3.using_count');
    }

    public function using_sum(){
        return view('students.lessons.chapter3.using_sum');
    }

    public function avg_max_min(){
        return view('students.lessons.chapter3.avg_max_min');
    }

    public function using_distinct(){
        return view('students.lessons.chapter3.using_distinct');
    }

    public function nesting_queries(){
        return view('students.lessons.chapter3.nesting_queries');
    }

    public function subqueries(){
        return view('students.lessons.chapter3.subqueries');
    }

    public function grouping(){
        return view('students.lessons.chapter3.grouping');
    }

    public function group_by(){
        return view('students.lessons.chapter3.group_by');
    }

    public function having(){
        return view('students.lessons.chapter3.having');
    }

    public function having_where(){
        return view('students.lessons.chapter3.having_where');
    }

    public function nulls(){
        return view('students.lessons.chapter3.nulls');
    }

    public function multiple_table(){
          return view('students.lessons.chapter4.multiple_table');
    }

    public function joining_two_tables(){
          return view('students.lessons.chapter4.joining_two_tables');
    }

    public function in_operator(){
          return view('students.lessons.chapter4.in_operator');
    }

    public function exists_operator(){
          return view('students.lessons.chapter4.exists_operator');
    }

    public function subquery_within_subquery(){
          return view('students.lessons.chapter4.subquery_within_subquery');
    }

    public function alias(){
          return view('students.lessons.chapter4.alias');
    }

    public function joining_table_itself(){
          return view('students.lessons.chapter4.joining_table_itself');
    }

    public function self_join_primary_key(){
          return view('students.lessons.chapter4.self_join_primary_key');
    }

    public function joining_several_tables(){
          return view('students.lessons.chapter4.joining_several_tables');
    }

    public function set_operations(){
          return view('students.lessons.chapter4.set_operations');
    }

    public function all_and_any(){
          return view('students.lessons.chapter4.all_and_any');
    }

    public function inner_join(){
          return view('students.lessons.chapter4.inner_join');
    }

    public function outer_join(){
          return view('students.lessons.chapter4.outer_join');
    }

    public function product(){
          return view('students.lessons.chapter4.product');
    }

    public function updating_data(){
          return view('students.lessons.chapter5.updating_data');
    }

    public function new_from_existing(){
          return view('students.lessons.chapter5.new_from_existing');
    }

    public function existing_data(){
          return view('students.lessons.chapter5.existing_data');
    }

    public function add_rows_existing(){
          return view('students.lessons.chapter5.add_rows_existing');
    }

    public function commit_and_rollback(){
          return view('students.lessons.chapter5.commit_and_rollback');
    }

    public function transactions(){
          return view('students.lessons.chapter5.transactions');
    }

    public function changing_deleting_existing(){
          return view('students.lessons.chapter5.changing_deleting_existing');
    }

    public function rollback(){
          return view('students.lessons.chapter5.rollback');
    }

    public function value_to_null(){
          return view('students.lessons.chapter5.value_to_null');
    }

    public function tables_structure(){
          return view('students.lessons.chapter5.tables_structure');
    }

    public function complex_changes(){
          return view('students.lessons.chapter5.complex_changes');
    }

    public function dropping_table(){
          return view('students.lessons.chapter5.dropping_table');
    }
    /*------------------------QUIZZES------------------------*/
    public function studentsScheduledQuizzes(){
        return view('students.studentsScheduledQuizzes');
    }

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

    public function studentsDownload(){
        return view('students.studentsDownload');
    }

    public function studentsSimulator(){
        return view('students.studentsSimulator');
    }
}
