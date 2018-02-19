@extends('layouts.app')

@section('title', 'Student Login')

@section('content')

<div class="col-md-6 align-self-center animated fadeInRight">
  <p class="h4 text-center" style="font-family:Segoe UI Light; font-weight:lighter;"><span class="oi oi-warning text-yellow border-black"></span> <em>Enter a new password to make your account secure.</em></p>
  <form method="POST" action="{{ route('student.newpass.submit') }}">
    {{ csrf_field() }}
    <br />
    <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
      <span class="input-group-addon"><span class="oi oi-person" title="Email" aria-hidden="true"></span></span>
      <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="Email" id="student_email" name="student_email" required>
    </div>
    <br />
    <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
      <span class="input-group-addon"><span class="oi oi-key" title="Old Password" aria-hidden="true"></span></span>
      <input type="password" class="form-control" placeholder="Old Password" aria-label="oldPassword" aria-describedby="oldpassword" id="oldpassword" name="oldpassword" required>
    </div>
    <br />
    <div class="input-group">
      <span class="input-group-addon"><span class="oi oi-key" title="New Password" aria-hidden="true"></span></span>
      <input type="password" class="form-control" placeholder="New Password" aria-label="newPassword" aria-describedby="newpassword" id="newpassword" name="newpassword" required>
    </div>
    <br />
    <div class="input-group">
      <span class="input-group-addon"><span class="oi oi-key" title="Confirm New Password" aria-hidden="true"></span></span>
      <input type="password" class="form-control" placeholder="Confirm New Password" aria-label="confnewPassword" aria-describedby="confnewpassword" id="confnewpassword" name="confnewpassword" required>
    </div>
    <br />
    <div class="form-group row text-center">
      <div class="col-md-12">
        <button type="submit" class="btn btn-primary align-middle p-2"><span class="oi oi-account-login" title="Change Password" aria-hidden="true"></span> Change Password</a>
        </div>
      </div>
    </form>
  <!-- <p class="text-center"><a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a></p> -->
  @if ($errors->has('passerr'))
  <div class="alert bg-whitesmoke text-black alert-dismissible fade show logintoast" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <p class="h4 alert-heading text-red">Error!</p>
    <p>{{ $errors->first('passerr') }}</p>
  </div>
  @endif

</div>
@endsection
