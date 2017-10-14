@extends('layouts.adminapp')

@section('title', 'Uploads')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="upContent">
  <div class="container-fluid contentMargin">
    <hr />
    <p class="h2" style="font-family:Segoe UI Light;">
      Upload Files for Students
    </p>
    <hr />
    <div class="row">
      <div class="col-sm col-md-7 col-lg-7 mt-4">
        <div class="card border-blue-grey">
          <div class="card-header bg-blue text-white h6">
            <span class="oi oi-star" title="Rank" aria-hidden="true"></span> Uploaded Files
          </div>
          <div class="card-body" style="overflow:auto;">
            <table class="table table-hover table-sm">
              <thead class="thead-inverse text-center">
                <tr>
                  <th>File Name</th>
                  <th>Date Uploaded</th>
                  <th class="text-center">Download</th>
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
        <div class="card border-blue-grey">
          <div class="card-body">
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
            <br />
            <form>
              <div class="form-group">
                <label class="custom-file">
                  <input type="file" id="file2" class="custom-file-input">
                  <span class="custom-file-control"></span>
                </label>
              </div>
              <button class="btn btn-outline-primary">Upload</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
