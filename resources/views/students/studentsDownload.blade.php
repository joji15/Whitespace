@extends('layouts.studentapp')

@section('title', 'Download Files')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="upContent">
  <div class="container-fluid contentMargin">
    <hr />
    <p class="h2" style="font-family:Segoe UI Light;">
      Download Files
    </p>
    <hr />
    <div class="row">
      <div class="col-12 mt-4">
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
                  <td class="text-center"><a href="#"><span class="oi oi-data-transfer-download" title="Download this file" aria-hidden="true"></span></a></td>
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
    </div>
  </div>
</div>

@endsection
