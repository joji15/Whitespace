<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Auth;
use DB;

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

  public function showNewPassForm()
  {
    return view('auth.newpassword');
  }

  public function NewPassForm(Request $request)
  {
    $email = $request->input('student_email');
    $oldpass = $request->input('oldpassword');
    $newpass = $request->input('newpassword');
    $newpasscon = $request->input('confnewpassword');


    $users = DB::table('student')->select('password')->where('student_email', $request->student_email)->get();
    $pass = $users->implode('password', '');
    
    if ($newpass == $oldpass) {
      return redirect()->back()->withInput($request->only('student_email','remember'))->withErrors([
        'passerr' => 'Your New password cannot be the same as your old password.',
      ]);
    } 
    else if ($newpass != $newpasscon) {
      return redirect()->back()->withInput($request->only('student_email','remember'))->withErrors([
        'passerr' => 'Your new password does not match the confirm password.',
      ]);
    }
    else{
      $PassHash = Hash::make($newpass);
      DB::table('student')->where('student_email', $email)->update(['password' => $PassHash]);
      return redirect()->route('student.login');
    }
    
  }

  public function login(Request $request)
  {
    $this->validate($request,[
      'student_email' => 'required|email',
      'password' => 'required|min:6'
    ]);

    $users = DB::table('student')->select('password')->where('student_email', $request->student_email)->get();
    $pass = $users->implode('password', '');
    if (Hash::check('password', $pass)) {
      return redirect()->route('student.newpass');
    }
    else {
      if (Auth::guard('stud')->attempt(['student_email' => $request->student_email, 'password' => $request->password], $request->remember)) {
        return redirect()->intended(route('student.Home'));
      }
    }


    return redirect()->back()->withInput($request->only('student_email','remember'))->withErrors([
      'loginerr' => 'Either the email or the password is incorrect.',
    ]);
  }
}
