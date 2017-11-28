<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Auth\Guard;
use Excel;
use class_tbl;
use student;
use DB;
use Auth;

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

        $course = $request->input('course');
        $section = $request->input('section');
        $year = $request->input('year');

        DB::table('class_tbl')->insertGetId(
            ['course' => $course,
            'section' => $section,
            'school_year' => $year,
            'prof_id' => $profID]
        );

        $classID = DB::table('class_tbl')->max('class_id');

        foreach ($nameArray as $name) {
          $nameStart = str_replace_first('["', '', $name);
          $nameEnd = str_replace_last('"]', '', $nameStart);
            DB::table('student')->insertGetId(
                ['student_name' => $nameEnd,
                'class_id' => $classID]
            );
        }


        $show = 1;
        return view('profstudent.profCreateClass', compact('show'));

        // DB::table('class')->insert(
        //     ['email' => 'john@example.com', 'votes' => 0]
        // );
    }
}
