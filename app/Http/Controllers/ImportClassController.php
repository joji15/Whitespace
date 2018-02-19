<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use class_tbl;
use student;
use Excel;
use Auth;
use DB;

class ImportClassController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:prof');
    }

    public function ImportClass(Request $request)
    {
        $profID = Auth::user()->prof_id;

        $file = Input::file('file');
        $file_name = $file->getClientOriginalName();
        $file->move('files', $file_name);

        $fnameArray = [];

        $fnameArray = Excel::load('files/'.$file_name, function($reader){
            $reader->noHeading();
            $reader->limitColumns(1)->skipRows(1)->toArray();
        })->get();

        $mnameArray = [];

        $mnameArray = Excel::load('files/'.$file_name, function($reader){
            $reader->noHeading();
            $reader->limitColumns(2)->skipColumns(1)->skipRows(1)->toArray();
        })->get();

        $lnameArray = [];

        $lnameArray = Excel::load('files/'.$file_name, function($reader){
            $reader->noHeading();
            $reader->limitColumns(3)->skipColumns(2)->skipRows(1)->toArray();
        })->get();

        $emailArray = [];

        $emailArray = Excel::load('files/'.$file_name, function($reader){
            $reader->noHeading();
            $reader->limitColumns(4)->skipColumns(3)->skipRows(1)->toArray();
        })->get();

        // dd($fnameArray, $mnameArray, $lnameArray, $emailArray);

        $course = $request->input('course');
        $section = $request->input('section');
        $year = $request->input('year');

        $tempPassStr = "password";

        $tempPassHash = "";

        $tempPassHash = Hash::make($tempPassStr);

        // $str1 = "THE PASSWORD IS 'password'";
        // $str2 = "THE PASSWORD IS NOT 'password'";

        // if (Hash::check('password', $tempPassHash)) {
        //     echo $str1;
        //     dd($tempPassHash);
        // }
        // else {
        //     echo $str2;
        //     dd($tempPassStr);
        // }

        DB::table('class_tbl')->insertGetId(
            ['course' => $course,
            'section' => $section,
            'school_year' => $year,
            'prof_id' => $profID]
        );
        
        $classID = DB::table('class_tbl')->max('class_id');
        
        foreach ($fnameArray as $index => $fname) {
            $current_time = Carbon::now()->toDateTimeString();
            $tempPassHash = Hash::make($tempPassStr);
            $fnameStart = str_replace_first('["', '', $fname);
            $fnameEnd = str_replace_last('"]', '', $fnameStart);
            $mnameStart = str_replace_first('["', '', $mnameArray[$index]);
            $mnameEnd = str_replace_last('"]', '', $mnameStart);
            $lnameStart = str_replace_first('["', '', $lnameArray[$index]);
            $lnameEnd = str_replace_last('"]', '', $lnameStart);
            $emailStart = str_replace_first('["', '', $emailArray[$index]);
            $emailEnd = str_replace_last('"]', '', $emailStart);
            DB::table('student')->insertGetId(
                ['student_fname' => $fnameEnd,
                'student_mname' => $mnameEnd,
                'student_lname' => $lnameEnd,
                'student_email' => $emailEnd,
                'password' => $tempPassHash,
                'class_id' => $classID,
                'created_at' => $current_time]
            );
        }
        DB::table('audit_trail_tbl')->insert(
            ['audit_transaction' => 'Added Class',
             'audit_description' => $course+'-'+$section+': '+$year+' has been added as a Class by You',
             'created_at' => Carbon::now()
             'student_id' => NULL,
             'prof_id' => $profID]
        );
        $show = 1;
        return redirect()->intended(route('prof.student', compact('show')));
    }
}
