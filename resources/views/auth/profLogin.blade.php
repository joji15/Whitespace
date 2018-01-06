@extends('layouts.app')

@section('title', 'Professor Login')

@section('content')

<div class="col-md-6 align-self-center">
  <p class="h3 text-center"><em>Professor Login</em></p>
  <form method="POST" action="{{ route('prof.login.submit') }}">
    {{ csrf_field() }}
    <br />
    <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
      <span class="input-group-addon"><span class="oi oi-person" title="Email" aria-hidden="true"></span></span>
      <input type="email" class="form-control" placeholder="Email" aria-label="email" aria-describedby="email" id="prof_email" name="prof_email" required>
    </div>
    <br />
    <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
      <span class="input-group-addon"><span class="oi oi-key" title="Password" aria-hidden="true"></span></span>
      <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password" id="password" name="password" required>
    </div>
    <br />
    <div class="form-group row text-center">
      <div class="col-md-12">
        <button type="submit" class="btn btn-primary align-middle p-2"><span class="oi oi-account-login" title="Login" aria-hidden="true"></span> Login</a>
        </div>
      </div>
    </form>
  @if ($errors->has('loginerr'))
  <div class="alert bg-whitesmoke text-black alert-dismissible fade show logintoast" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <p class="h4 alert-heading text-red">Error!</p>
    <p>{{ $errors->first('loginerr') }}</p>
  </div>
  @endif

  @if ($errors->has('password'))
  <div class="alert bg-whitesmoke text-black alert-dismissible fade show logintoast" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <p class="h4 alert-heading text-red">Error!</p>
    <p>{{ $errors->first('password') }}</p>
  </div>
  @endif
</div>
@endsection
