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
}
