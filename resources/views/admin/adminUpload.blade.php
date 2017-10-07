@extends('layouts.adminapp')

@section('title', 'Uploads')

@section('content')

<div class="col-sm-8 col-md-10 col-lg-10 justify-content-start content" id="upContent">
  <div class="container-fluid contentMargin">
    <hr />
    <p class="h1" style="font-family:Segoe UI Light;">
      Upload Files for Students
    </p>
    <hr />
    <div class="row">
      <div class="col-sm col-md-7 col-lg-7 mt-4">
        <div class="card border-blue" style="height:450px;">
          <div class="card-header bg-blue text-white h5">
            <span class="oi oi-star" title="Rank" aria-hidden="true"></span> Uploaded Files
          </div>
          <div class="card-body" style="overflow:auto;">
            <table class="table table-hover">
              <thead class="thead-inverse text-center">
                <tr>
                  <th>File Name</th>
                  <th>Date Uploaded</th>
                  <th>Download</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">SQL Lesson #1.docx</th>
                  <td>09/24/2017</td>
                  <td class="text-center"><a href="#" class=""><span class="oi oi-data-transfer-download" title="Download this file" aria-hidden="true"></span></a></td>
                </tr>
                <tr>
                  <th scope="row">SQL Lesson #2.docx</th>
                  <td>09/26/2017</td>
                  <td class="text-center"><a href="#"><span class="oi oi-data-transfer-download" title="Download this file" aria-hidden="true"></span></a></td>
                </tr>
                <tr>
                  <th scope="row">Query Reviewer.pdf</th>
                  <td>09/27/2017</td>
                  <td class="text-center"><a href="#"><span class="oi oi-data-transfer-download" title="Download this file" aria-hidden="true"></span></a></td>
                </tr>
                <tr>
                  <th scope="row">SQL Lesson #3.docx</th>
                  <td>09/29/2017</td>
                  <td class="text-center"><a href="#"><span class="oi oi-data-transfer-download" title="Download this file" aria-hidden="true"></span></a></td>
                </tr>
                <tr>
                  <th scope="row">SQL Lesson #4.docx</th>
                  <td>09/29/2017</td>
                  <td class="text-center"><a href="#"><span class="oi oi-data-transfer-download" title="Download this file" aria-hidden="true"></span></a></td>
                </tr>
                <tr>
                  <th scope="row">SQL Reviewer.pdf</th>
                  <td>09/30/2017</td>
                  <td class="text-center"><a href="#"><span class="oi oi-data-transfer-download" title="Download this file" aria-hidden="true"></span></a></td>
                </tr>
                <tr>
                  <th scope="row">Database Management.pptx</th>
                  <td>10/01/2017</td>
                  <td class="text-center"><a href="#"><span class="oi oi-data-transfer-download" title="Download this file" aria-hidden="true"></span></a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-sm col-md-5 col-lg-5 mt-4">
        <div class="card border-grey">
          <div class="card-body">
            <form>
              <div class="form-group">
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                <br />
                <button class="btn btn-outline-primary">Upload</button>
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
    </div>
  </div>
</div>

@endsection
