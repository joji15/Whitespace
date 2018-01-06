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

        $nameArray = [];

        $nameArray = Excel::load('files/'.$file_name, function($reader){
            $reader->noHeading();
            $reader->limitColumns(1)->skipRows(1)->toArray();
        })->get();

        $emailArray = [];

        $emailArray = Excel::load('files/'.$file_name, function($reader){
            $reader->noHeading();
            $reader->skipColumns(1)->takeColumns(2)->skipRows(1)->toArray();
        })->get();

        // dd($nameArray, $emailArray);

        $course = $request->input('course');
        $section = $request->input('section');
        $year = $request->input('year');

        $str1 = "THE PASSWORD IS 'password'";
        $str2 = "THE PASSWORD IS NOT 'password'";

        $tempPassStr = "password";

        $tempPassHash = "";

        $tempPassHash = Hash::make($tempPassStr);

        if (Hash::check('password', $tempPassHash)) {
            echo $str1;
            dd($tempPassHash);
        }
        else {
            echo $str2;
            dd($tempPassStr);
        }

        // DB::table('class_tbl')->insertGetId(
        //     ['course' => $course,
        //     'section' => $section,
        //     'school_year' => $year,
        //     'prof_id' => $profID]
        // );
        //
        // $classID = DB::table('class_tbl')->max('class_id');
        //
        // foreach ($nameArray as $index => $name) {
        //     $current_time = Carbon::now()->toDateTimeString();
        //     $tempPassHash = Hash::make($tempPassStr);
        //     $nameStart = str_replace_first('["', '', $name);
        //     $nameEnd = str_replace_last('"]', '', $nameStart);
        //     $emailStart = str_replace_first('["', '', $emailArray[$index]);
        //     $emailEnd = str_replace_last('"]', '', $emailStart);
        //     DB::table('student')->insertGetId(
        //         ['student_name' => $nameEnd,
        //         'student_email' => $emailEnd,
        //         'password' => $tempPassHash,
        //         'class_id' => $classID,
        //         'created_at' => $current_time]
        //     );
        // }


        $show = 1;
        return redirect()->intended(route('prof.student', compact('show')));


        // DB::table('class')->insert(
        //     ['email' => 'john@example.com', 'votes' => 0]
        // );
    }
}
