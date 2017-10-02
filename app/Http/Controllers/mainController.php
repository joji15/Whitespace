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

    public function adminQuiz(){
        return view('admin.adminQuiz');
    }

    public function adminUpload(){
        return view('admin.adminUpload');
    }
}
