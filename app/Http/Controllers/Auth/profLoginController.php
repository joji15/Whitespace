<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class profLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:prof');
    }

    public function showLoginForm()
    {
        return view('auth.profLogin');
    }

    public function login(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('prof')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->intended(route('prof.profHome'));
        }

        return redirect()->back()->withInput($request->only('email','remember'));
    }
}
