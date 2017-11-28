<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class studentLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:stud');
    }

    public function showLoginForm()
    {
        return view('auth.studentLogin');
    }

    public function login(Request $request)
    {
        $this->validate($request,[
            'student_email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('stud')->attempt(['student_email' => $request->student_email, 'password' => $request->password], $request->remember)) {
            return redirect()->intended(route('student.Home'));
        }

        return redirect()->back()->withInput($request->only('student_email','remember'));
    }
}
