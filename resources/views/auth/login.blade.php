@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="col-md-6 align-self-center">
  <form method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    <br />
    <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
      <span class="input-group-addon"><span class="oi oi-person" title="Email" aria-hidden="true"></span></span>
      <input type="email" class="form-control" placeholder="Email" aria-label="email" aria-describedby="email" id="email" name="email" required>
      @if ($errors->has('email'))
        <span class="help-block">
          <strong>{{ $errors->first('email') }}</strong>
        </span>
      @endif
    </div>
    <br />
    <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
      <span class="input-group-addon"><span class="oi oi-key" title="Password" aria-hidden="true"></span></span>
      <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password" id="password" name="password" required>
      @if ($errors->has('password'))
        <span class="help-block">
          <strong>{{ $errors->first('password') }}</strong>
        </span>
      @endif
    </div>
    <br />
    <div class="form-group">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
        </label>
      </div>
    </div>
    <div class="form-group row text-center">
      <div class="col-md-12">
        <button type="submit" class="btn btn-primary align-middle p-2"><span class="oi oi-account-login" title="Login" aria-hidden="true"></span> Login</a>
        </div>
      </div>
    </form>
  <!-- <p class="text-center"><a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a></p> -->
  <p class="text-center">No account? <a href="{{ route('register') }}">Sign-Up Here</a></p>
</div>
@endsection
