<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index()
    {
      return view('login');
    }

    public function register()
    {
      return view('register');
    }

    public function student()
    {
      return view('studentDash');
    }

    public function admin()
    {
      return view('admin.adminHome');
    }

    public function adminStud(){
        return view('admin.adminStudent');
    }

    public function adminCreateClass()
    {
        return view('student.adminCreateClass');
    }

    public function adminViewDB()
    {
        return view('student.adminViewDB');
    }

    public function adminViewProgress()
    {
        return view('student.adminViewProgress');
    }

    public function adminQuiz(){
        return view('admin.adminQuiz');
    }

    public function adminViewQuiz()
    {
        return view('quiz.viewQuiz');
    }

    public function adminCreateQuiz()
    {
        return view('quiz.createQuiz');
    }

    public function adminScheduleQuiz()
    {
        return view('quiz.scheduleQuiz');
    }

    public function adminUpload(){
        return view('admin.adminUpload');
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

    /*------------------------QUIZZES------------------------*/
    public function studentsScheduledQuizzes(){
        return view('students.studentsScheduledQuizzes');
    }

    public function studentsTakeQuiz(){
        return view('students.studentsTakeQuiz');
    }

    public function studentsViewResult(){
        return view('students.studentsViewResult');
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

    public function adminUploadProp(){
        return view('upload.UploadProps');
    }
}
