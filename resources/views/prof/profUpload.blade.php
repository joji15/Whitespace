@extends('layouts.profApp')

@section('title', 'Uploads')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="upContent">
  <div class="container-fluid contentMargin">
    <br />
    <p class="h2" style="font-family:Segoe UI Light; font-weight:lighter;">
      <span class="oi oi-data-transfer-upload text-blue" title="File" aria-hidden="true"></span><span class="oi oi-data-transfer-download text-green" title="File" aria-hidden="true"></span> Manage Files for your Students
    </p>
    <div class="row">
      <div class="col-sm col-md-7 col-lg-7 mt-4">
        <table class="table table-hover">
          <thead class="thead-inverse table-sm text-center">
            <tr>
              <th>File Name</th>
              <th>Date Uploaded</th>
              <th class="text-center">Download</th>
            </tr>
          </thead>
          <tbody>
            @foreach($downloads as $down)
            <tr>
              <th scope="row">{{$down->file_name}}</th>
              <td>{{$down->uploaded_at}}</td>
              <td class="text-center"><a href="up_file/{{$down->file_name}}" download="{{$down->file_name}}"><span class="oi oi-data-transfer-download" title="Download this file" aria-hidden="true"></span></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="col-sm col-md-5 col-lg-5 mt-4">
        <div class="card border-blue-grey">
          <div class="card-body">
            <p class="card-text">
              List of files types that can be uploaded. 25MB is the max file size
              <ul>
                <li>Word Document (.doc/.docx)</li>
                <li>Portable Document Format (.pdf)</li>
                <li>PowerPoint Presentation (.ppt/.pptx)</li>
                <li>Excel File (.xls/.xlsx)</li>
                <li>Text file (.txt)</li>
                <li>SQL File (.sql)</li>
                <li>Images (.jpeg/.jpg/.png/.svg)</li>
              </ul>
            </p>
            <br />
            <form action="/prof/Upload/insertfile" method="post" enctype="multipart/form-data">
              <input type="hidden" value="{{ csrf_token() }}" name="_token" />
              <div class="form-group ">
                <label class="custom-file">
                  <input type="file" name="file" id="file" class="form-control-file">
                </label>

                @if($errors->has('file'))
                <p class="help-block">{{$errors->first('file')}}</p>
                @endif
              </div>
              <button class="btn btn-outline-primary">Upload</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  @if(Session::has('notification'))
  alert("{{ Session::get('notification.alert-type') }}");
    var type = "{{ Session::get('alert-type','info') }}";
    switch (type) {
      case success:
        toastr.success("{{ Session::get('notification.message') }}");
        break;
      case error:
        toastr.error("{{ Session::get('notification.message') }}");
        break;
      }
    @endif
</script>

@endsection
