<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use Illuminate\Support\Facades\Input;
use class_tbl;
use student;

class ImportClassController extends Controller
{
    public function ImportClass()
    {
        $file = Input::file('file');
        $file_name = $file->getClientOriginalName();
        $file->move('files', $file_name);
        $results = Excel::load('files/'.$file_name, function($reader){
            $reader->all();
        })->get();

        $show = 1;
        return view('profstudent.profCreateClass', ['student' => $results], ['status' => $show]);

        // DB::table('class')->insert(
        //     ['email' => 'john@example.com', 'votes' => 0]
        // );
    }
}
