@extends('layouts.studentapp')

@section('title','Download Files')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="upContent">
  <div class="container-fluid contentMargin">
    <hr>
    <p class="h2" style="font-family:Segoe UI Light;">
      Download Files
    </p>
    <hr>
    <div class="row">
      <div class="col-12 mt-4">
        <div class="card border-blue" style="height:450px'">
          <div class="card-header bg-blue text-white h5">
            <span class="oi oi-document" title="Files" aria-hidden="true"></span> Uploaded Files
          </div>
          <div class="card-body" style="overflow:auto;">
            <table class="table table-hover">
              <thead class="thead-inverse">
                <tr>
                  <th class="text-center">File Name</th>
                  <th class="text-center">Date Uploaded</th>
                  <th class="text-center">Download</th>
                </tr>
              </thead>
              <tbody>
                @foreach($download as $dl)
                <tr>
                  <th>{{$dl->filename}}</th>
                  <td>{{$dl->created_at}}</td>
                  <td class="text-center"><a href="up_file/{{$dl->filename}}" download="{{$dl->filename}}"><span class="oi oi-data-transfer-download" title="Download this file" aria-hidden="true"></span></a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
