<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class DownloadController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth:prof');
  }

  public function dlProf()
  {
    $profID = Auth::user()->prof_id;
    $downloads=DB::table('files_tbl')->where('prof_id',$profID)->get();
    return view('prof.profupload',compact('downloads'));
  }
}
