@extends('layouts.app')

@section('title', 'Register')

@section('content')

<div class="col-md-6 align-self-center">
	<form method="POST" action="{{ route('register') }}">
		{{ csrf_field() }}
		<div class="input-group{{ $errors->has('firstname') ? ' has-error' : '' }} mb-3">
			<span class="input-group-addon"><span class="oi oi-person" title="First Name" aria-hidden="true"></span></span>
			<input type="text" class="form-control form-control-sm" placeholder="Enter First Name" aria-label="firstName" aria-describedby="firstname" id="first_Name" name="first_Name" required>
			@if ($errors->has('firstname'))
					<span class="help-block">
							<strong>&nbsp;{{ $errors->first('firstname') }}</strong>
					</span>
			@endif
		</div>
		<div class="input-group{{ $errors->has('middleName') ? ' has-error' : '' }} mb-3">
			<span class="input-group-addon"><span class="oi oi-person" title="Middle Name" aria-hidden="true"></span></span>
			<input type="text" class="form-control form-control-sm" placeholder="Enter Middle Name" aria-label="middleName" aria-describedby="middleName" id="middle_Name" name="middle_Name" required>
			@if ($errors->has('middleName'))
					<span class="help-block">
							<strong>&nbsp;{{ $errors->first('middleName') }}</strong>
					</span>
			@endif
		</div>
		<div class="input-group{{ $errors->has('lastName') ? ' has-error' : '' }} mb-3">
			<span class="input-group-addon"><span class="oi oi-person" title="Last Name" aria-hidden="true"></span></span>
			<input type="text" class="form-control form-control-sm" placeholder="Enter Last Name" aria-label="LastName" aria-describedby="lastName" id="last_Name" name="last_Name" required>
			@if ($errors->has('lastName'))
					<span class="help-block">
							<strong>&nbsp;{{ $errors->first('lastName') }}</strong>
					</span>
			@endif
		</div>
		<div class="input-group{{ $errors->has('email') ? ' has-error' : '' }} mb-3">
			<span class="input-group-addon"><span class="oi oi-person" title="Email" aria-hidden="true"></span></span>
			<input type="email" class="form-control form-control-sm" placeholder="Enter Email" aria-label="email" aria-describedby="email" id="email" name="email" required>
			@if ($errors->has('email'))
					<span class="help-block">
							<strong>&nbsp;{{ $errors->first('email') }}</strong>
					</span>
			@endif
		</div>
		<div class="input-group mb-3">
			<span class="input-group-addon"><span class="oi oi-people" title="Degree" aria-hidden="true"></span></span>
			<select class="form-control custom-select" id="degree_Program" name="degree_Program">
				<option value="0" selected disabled style="display:none;">Select Degree Program</option>
				<option value="BSIT">BSIT</option>
				<option value="BSIS">BSIS</option>
				<option value="BSCS">BSCS</option>
			</select>
		</div>
		<div class="input-group mb-3">
			<span class="input-group-addon"><span class="oi oi-people" title="Section" aria-hidden="true"></span></span>
			<select class="form-control custom-select" id="section" name="section">
				<option value="0" selected disabled style="display:none;">Select Section</option>
				<option value="3A">3A</option>
				<option value="3B">3B</option>
				<option value="3C">3C</option>
			</select>
		</div>
		<div class="input-group{{ $errors->has('address') ? ' has-error' : '' }} mb-3">
			<span class="input-group-addon"><span class="oi oi-home" title="Address" aria-hidden="true"></span></span>
			<input type="text" class="form-control form-control-sm" placeholder="Enter Address" aria-label="address" aria-describedby="address" id="address" name="address" required>
			@if ($errors->has('address'))
					<span class="help-block">
							<strong>&nbsp;{{ $errors->first('address') }}</strong>
					</span>
			@endif
		</div>
		<div class="input-group{{ $errors->has('contact_no') ? ' has-error' : '' }} mb-3">
			<span class="input-group-addon">&nbsp;<span class="oi oi-phone" title="Contact Number" aria-hidden="true"></span></span>
			<input type="text" class="form-control form-control-sm" placeholder="Enter Contact Number" aria-label="contact_no" aria-describedby="contact_no" id="contact_no" name="contact_no" required>
			@if ($errors->has('contact_no'))
					<span class="help-block">
							<strong>&nbsp;{{ $errors->first('contact_no') }}</strong>
					</span>
			@endif
		</div>
		<div class="input-group{{ $errors->has('password') ? ' has-error' : '' }} mb-3">
			<span class="input-group-addon"><span class="oi oi-key" title="Password" aria-hidden="true"></span></span>
			<input type="password" class="form-control form-control-sm" placeholder="Enter Password" aria-label="Password" aria-describedby="password" id="password" name="password" required>
			@if ($errors->has('password'))
					<span class="help-block">
							<strong>&nbsp;{{ $errors->first('password') }}</strong>
					</span>
			@endif
		</div>
		<div class="input-group mb-3">
			<span class="input-group-addon"><span class="oi oi-key" title="Confirm Password" aria-hidden="true"></span></span>
			<input type="password" class="form-control form-control-sm" placeholder="Confirm Password" aria-label="password_confirmation" aria-describedby="password_confirmation" id="password_confirmation" name="password_confirmation" required>
		</div>
		<div class="form-group row text-center">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary align-middle p-2"><span class="oi oi-pencil" title="Register" aria-hidden="true"></span> Register</button>
			</div>
		</div>
	</form>
	<p class="text-center">Have an account? <a href="{{route('login')}}">Login Here</a></p>
</div>
@endsection
