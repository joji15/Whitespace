<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QuizController extends Controller
{
    $data['data'] = DB::table('quiz')->get();
}
