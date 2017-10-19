@extends('layouts.profApp')

@section('title', 'Edit Quizzes')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="editQuizContent">
  <div class="container-fluid contentMargin">
    <hr />
    <p class="h2" style="font-family:Segoe UI Light;">
      Edit Quizzes...
    </p>
    <hr />
    <div class="row">
      <div class="col-sm-12 mt-4">
        <div class="card border-blue-grey">
          <div class="card-header bg-orange text-white h6">
            <span class="oi oi-list" title="Quizzes" aria-hidden="true"></span> List of Quizzes
          </div>
          <div class="card-body" style="overflow:auto;">
            <table class="table table-hover table-sm">
              <thead class="thead-inverse text-center">
                <tr>
                  <th>Quiz Name</th>
                  <th>Last Edited</th>
                  <th class="text-center">Edit</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">SQL Introduction</th>
                  <td>09/04/2017</td>
                  <td class="text-center"><a href="profEditQuizContent" class=""><span class="oi oi-pencil" title="Edit quiz" aria-hidden="true"></span></a></td>
                </tr>
                <tr>
                  <th scope="row">SQL Fundamentals</th>
                  <td>09/24/2017</td>
                  <td class="text-center"><a href="profEditQuizContent"><span class="oi oi-pencil" title="Edit quiz" aria-hidden="true"></span></a></td>
                </tr>
                <tr>
                  <th scope="row">SQL Data Manipulation Language</th>
                  <td>09/29/2017</td>
                  <td class="text-center"><a href="profEditQuizContent"><span class="oi oi-pencil" title="Edit quiz" aria-hidden="true"></span></a></td>
                </tr>
                <tr>
                  <th scope="row">SQL Data Definition Language</th>
                  <td>10/01/2017</td>
                  <td class="text-center"><a href="profEditQuizContent"><span class="oi oi-pencil" title="Edit quiz" aria-hidden="true"></span></a></td>
                </tr>
                <tr>
                  <th scope="row">SQL Single Table Query</th>
                  <td>10/05/2017</td>
                  <td class="text-center"><a href="profEditQuizContent"><span class="oi oi-pencil" title="Edit quiz" aria-hidden="true"></span></a></td>
                </tr>
                <tr>
                  <th scope="row">Creating Tables</th>
                  <td>10/05/2017</td>
                  <td class="text-center"><a href="profEditQuizContent"><span class="oi oi-pencil" title="Edit quiz" aria-hidden="true"></span></a></td>
                </tr>
                <tr>
                  <th scope="row">SQL Multiple Table Query</th>
                  <td>10/08/2017</td>
                  <td class="text-center"><a href="profEditQuizContent"><span class="oi oi-pencil" title="Edit quiz" aria-hidden="true"></span></a></td>
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
