<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;
use Validator;
use App\files_tbl;
use Auth;

class UploadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:prof');
    }


    public function getView()
    {
        return view('adminUpload');
    }

    public function insertFile()
    {
        $profID = Auth::user()->prof_id;

        $file=Input::file('file');

        //echo $file;

        $rules = array('file' => 'required|max:25000000|mimes:doc,docx,jpeg,png,jpg,svg,xls,xlsx,pdf,ppt,pptx,txt,sql');

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            $messages=$validator->messages();
            return Redirect::to('adminUpload')->withInput()->withErrors($validator);
        }

        else if ($validator->passes()){
            //echo "success validator";

            if (Input::file('file')->isValid()) {
                //$extension = Input::file('file') -> getClientOriginalExtension();
                $name = Input::file('file') -> getClientOriginalName();
                //$filename = $name.'.'.$extension;
                $destinationPath = 'up_file';
                $file ->move($destinationPath,$name);
                $data = array('file_name' => $name, 'prof_id' => $profID);
                files_tbl::insert($data);
                $notification = array('message' => 'File uploaded successfully!',
                'alert-type' => 'success');

                return Redirect::to('prof.upload') -> with($notification);

            } else {
                $notification = array('message' => 'File is not valid!',
                'alert-type' => 'error');
                return Redirect::to('prof.upload') -> with($notification);
            }

        }

    }
}
