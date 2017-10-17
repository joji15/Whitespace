@extends('layouts.adminapp')

@section('title', 'Uploads')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="upContent">
  <div class="container-fluid contentMargin">
    <hr />
    <p class="h2" style="font-family:Segoe UI Light;">
      Upload Properties
    </p>
    <hr />
    <div class="row">
      <div class="col-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="adminUpload">Upload</a></li>
          <li class="breadcrumb-item active">Properties</li>
        </ol>
      </div>
    </div>
  </div>
</div>

@endsection
