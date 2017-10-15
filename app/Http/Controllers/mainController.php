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

    public function adminEditQuiz()
    {
        return view('quiz.editQuiz');
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

    public function studentsLessonList(){
        return view('students.studentsLessonList');
    }

    public function studentsLesson(){
        return view('students.studentsLesson');
    }

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
