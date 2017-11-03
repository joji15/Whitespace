@extends('layouts.profApp')

@section('title', 'Student\'s Progress Monitoring Module')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="progressContent">
  <div class="container-fluid contentMargin">
    <div class="row">
      <div class="col-12 mb-2 mt-4">
        <div class="card border-blue-grey">
          <div class="card-header bg-purple text-white h6">
            <span class="oi oi-graph" title="progress" aria-hidden="true"></span> Student's Progress Monitoring Module
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-3 mt-4">
                <h5>Course and Section</h5>
                <small>Click a section</small>
                <div class="tree">
                  <ul style="padding-left:inherit;">
                    <li class="parent_li">
                      <span class="oi oi-plus" title="Database" aria-hidden="true">
                      </span>&nbsp;&nbsp;&nbsp;
                      <a href="#"><i class="oi oi-layers" title="Course" aria-hidden="true"></i> BSIT</a>
                      <ul>
                        <li class="parent_li" style="display: none;">
                          <a href="#"><i class="oi oi-fork" title="table" aria-hidden="true"></i> 1A</a>
                        </li>
                        <li class="parent_li" style="display: none;">
                          <a href="#"><i class="oi oi-fork" title="table" aria-hidden="true"></i> 1B</a>
                        </li>
                      </ul>
                    </li>
                    <li class="parent_li">
                      <span class="oi oi-plus" title="Database" aria-hidden="true">
                      </span>&nbsp;&nbsp;&nbsp;
                      <a href="#"><i class="oi oi-layers" title="Course" aria-hidden="true"></i> BSCS</a>
                      <ul>
                        <li class="parent_li" style="display: none;">
                          <a href="#"><i class="oi oi-fork" title="table" aria-hidden="true"></i> 1A</a>
                        </li>
                        <li class="parent_li" style="display: none;">
                          <a href="#"><i class="oi oi-fork" title="table" aria-hidden="true"></i> 1B</a>
                        </li>
                      </ul>
                    </li>
                    <li class="parent_li">
                      <span class="oi oi-plus" title="Database" aria-hidden="true">
                      </span>&nbsp;&nbsp;&nbsp;
                      <a href="#"><i class="oi oi-layers" title="Course" aria-hidden="true"></i> BSIS</a>
                      <ul>
                        <li class="parent_li" style="display: none;">
                          <a href="#"><i class="oi oi-fork" title="table" aria-hidden="true"></i> 1A</a>
                        </li>
                        <li class="parent_li" style="display: none;">
                          <a href="#"><i class="oi oi-fork" title="table" aria-hidden="true"></i> 1B</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <script>
                $(function () {
                  $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse this branch');
                  $('.tree li.parent_li > span').click(function (e) {
                    if($(this).hasClass("oi-plus").toString() == 'true'){
                      $(this).removeClass("oi-plus");
                      $(this).addClass("oi-minus");
                    }
                    else{
                      $(this).removeClass("oi oi-minus");
                      $(this).addClass("oi oi-plus");
                    }
                    var children = $(this).parent('li.parent_li').find(' > ul > li');
                    if (children.is(":visible")) {
                      children.hide('fast');

                    } else {
                      children.show('fast');
                    }
                    e.stopPropagation();
                  });
                });

                </script>
              </div>
              <div class="col-9">
                <div class="row">
                  <div class="col-12 mt-2">
                    <div class="row">
                      <div class="col-9">
                        <h3><code>Sort by: </code></h3>
                      </div>
                      <div class="col-3">
                        <div class="btn-group">
                          <button type="button" class="btn">Chapter</button>
                          <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Chapter 1</a>
                            <a class="dropdown-item" href="#">Chapter 2</a>
                            <a class="dropdown-item" href="#">Chapter 3</a>
                            <a class="dropdown-item" href="#">Chapter 4</a>
                            <a class="dropdown-item" href="#">Chapter 5</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 mt-2">
                    <table class="table table-bordered table-hover" id="progressTbl">
                      <thead class="thead-inverse text-center">
                        <tr>
                          <th>Full Name</th>
                          <th>No. of Completed Lessons</th>
                          <th>
                            <div class="btn-group">
                              <button class="btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Lesson
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Lesson 1</a>
                                <a class="dropdown-item" href="#">Lesson 2</a>
                                <a class="dropdown-item" href="#">Lesson 3</a>
                                <a class="dropdown-item" href="#">Lesson 4</a>
                                <a class="dropdown-item" href="#">Lesson 5</a>
                              </div>
                            </div>
                          </th>
                          <th>Percentage</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="profStudentInfo">Aimee Lou D. Cruz</a></td>
                          <td>5</td>
                          <td>
                            <div class="btn-group">
                              <button class="btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Lesson
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Lesson 1</a>
                                <a class="dropdown-item" href="#">Lesson 2</a>
                                <a class="dropdown-item" href="#">Lesson 3</a>
                                <a class="dropdown-item" href="#">Lesson 4</a>
                                <a class="dropdown-item" href="#">Lesson 5</a>
                              </div>
                            </div>
                          </td>
                          <td>85%</td>
                        </tr>
                        <tr>
                          <td><a href="profStudentInfo">Jazelene Mae M. de Vera</a></td>
                          <td>4</td>
                          <td>
                            <div class="btn-group">
                              <button class="btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Lesson
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Lesson 1</a>
                                <a class="dropdown-item" href="#">Lesson 2</a>
                                <a class="dropdown-item" href="#">Lesson 3</a>
                                <a class="dropdown-item" href="#">Lesson 4</a>
                                <a class="dropdown-item" href="#">Lesson 5</a>
                              </div>
                            </div>
                          </td>
                          <td>83%</td>
                        </tr>
                        <tr>
                          <td><a href="profStudentInfo">Donald Patrick C. George</a></td>
                          <td>4</td>
                          <td>
                            <div class="btn-group">
                              <button class="btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Lesson
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Lesson 1</a>
                                <a class="dropdown-item" href="#">Lesson 2</a>
                                <a class="dropdown-item" href="#">Lesson 3</a>
                                <a class="dropdown-item" href="#">Lesson 4</a>
                                <a class="dropdown-item" href="#">Lesson 5</a>
                              </div>
                            </div>
                          </td>
                          <td>80%</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
