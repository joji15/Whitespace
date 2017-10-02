@extends('layouts.adminapp')

@section('content')

<div class="col-sm-8 col-md-10 col-lg-10" id="upContent">
  <div class="container">
    <hr />
    <p class="h1" style="font-family:Segoe UI Light;">
      Upload Files for Students
    </p>
    <hr />
    <div class="row">
      <div class="col-sm col-md-6 col-lg-6">
        <div class="card bg-light">
          <div class="card-body">
            <form>
              <div class="form-group">
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>
            </form>
            <p class="card-text">
              List of files types that can be uploaded. 25MB is the max file size
              <ul>
                <li>Word Document (.doc/.docx)</li>
                <li>Portable Document Format (.pdf)</li>
                <li>PowerPoint Presentation (.ppt/.pptx)</li>
                <li>Audio file (.mp3)</li>
                <li>Text file (.txt)</li>
                <li>Images (.jpeg/.jpg/.png)</li>
              </ul>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm col-md-6 col-lg-6">
        <div class="card bg-light" style="height:450px;">
          <div class="card-header">
            Uploaded Files
          </div>
          <div class="card-body" style="overflow:auto;">
            <table class="table table-hover">
              <thead class="thead-inverse text-center">
                <tr>
                  <th>File Name</th>
                  <th>Sections</th>
                  <th>Date Uploaded</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>BSIT-4A</td>
                  <td>09/24/2017</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>BSIT-4A</td>
                  <td>09/26/2017</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>BSIT-4A</td>
                  <td>09/27/2017</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>BSIT-4A</td>
                  <td>09/29/2017</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>BSIT-4A</td>
                  <td>09/29/2017</td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td>BSIT-4A</td>
                  <td>09/30/2017</td>
                </tr>
                <tr>
                  <th scope="row">7</th>
                  <td>BSIT-4A</td>
                  <td>10/01/2017</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
