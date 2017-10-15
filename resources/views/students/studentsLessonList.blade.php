@extends('layouts.studentapp')

@section('title', 'List of Lessons')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="">
  <div class="container-fluid contentMargin">
    <hr />
    <p class="h2" style="font-family:Segoe UI Light;">
      List of Lessons
    </p>
    <hr />

    <!---SQL INTRODUCTION--->
    <div class="row">
      <div class="col-sm-6">
        <div class="card border-customblue">
          <div class="card-body bg-customblue">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Chapter 1: SQL Introduction</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="studentsLesson">
            <div class="card-footer border-info">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body bg-customlightblue">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Relational Database</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="studentsLesson">
            <div class="card-footer border-info">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body bg-customlightblue">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Entities, Attributes, and Relationships</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="studentsLesson">
            <div class="card-footer border-info">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body bg-customlightblue">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Functional Dependence</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="studentsLesson">
            <div class="card-footer border-info">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-primary">
          <div class="card-body bg-whitesmoke">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Primary Key</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="studentsLesson">
            <div class="card-footer border-info">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-primary">
          <div class="card-body bg-whitesmoke">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Diagrams for Database Design (ERD)</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="studentsLesson">
            <div class="card-footer border-info">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
    </div>

    <!---CREATING TABLES--->
    <div class="row mt-5">
      <div class="col-sm-6">
        <div class="card border-danger">
          <div class="card-body text-white bg-danger">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Chapter 2: Creating Tables</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="studentsLesson">
            <div class="card-footer border-info">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-danger">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Creating a Table [CREATE table_name (data type)]</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="studentsLesson">
            <div class="card-footer border-info">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-danger">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Using Data Types</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="studentsLesson">
            <div class="card-footer border-info">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-danger">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Using NULLs</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="studentsLesson">
            <div class="card-footer border-info">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-danger">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Describing a Table</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="studentsLesson">
            <div class="card-footer border-info">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-danger">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Adding rows to a tables (INSERT)</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="studentsLesson">
            <div class="card-footer border-info">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-danger">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> The INSERT Command</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="studentsLesson">
            <div class="card-footer border-info">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-danger">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Inserting a Row that Contains Nulls</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="studentsLesson">
            <div class="card-footer border-info">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-danger">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Viewing and deleting data (SELECT, DELETE)</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="studentsLesson">
            <div class="card-footer border-info">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
    </div>

    <!---SINGLE TABLE QUERIES--->
    <div class="row mt-5">
      <div class="col-sm-6">
        <div class="card border-success">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Chapter 3: Single Table Queries</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="studentsLesson">
            <div class="card-footer border-info">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span>  Retrieving All Columns and All Rows (SELECT * FROM table_name)</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="studentsLesson">
            <div class="card-footer border-info">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Retrieving Certain Columns and All Rows (SELECT column_name FROM table_name)</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="studentsLesson">
            <div class="card-footer border-info">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Using a WHERE Clause (=,>,<,<=,>=,<>,!=)</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="studentsLesson">
            <div class="card-footer border-info">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Using Compound Conditions (AND, OR, NOT)</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="studentsLesson">
            <div class="card-footer border-info">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Using the BETWEEN Operator </h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="studentsLesson">
            <div class="card-footer border-info">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Using Computed Columns(+,-,*,/)</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="studentsLesson">
            <div class="card-footer border-info">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Using the LIKE Operator</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="studentsLesson">
            <div class="card-footer border-info">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Using the IN Operator</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="studentsLesson">
            <div class="card-footer border-info">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Using the ORDER BY Clause</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="studentsLesson">
            <div class="card-footer border-info">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Additional Sorting Options</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="studentsLesson">
            <div class="card-footer border-info">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
    </div>







  </div>
</div>
@endsection
