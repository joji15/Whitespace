<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DownloadController extends Controller
{
    public function dlProf()
    {
      $downloads=DB::table('files')->get();
      return view('admin.adminUpload',compact('downloads'));
    }

    public function dlStud()
    {
      $download=DB::table('files')->get();
      return view('students.studentsDownload',compact('download'));
    }
}
