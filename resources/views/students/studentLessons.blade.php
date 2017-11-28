@extends('layouts.studentapp')

@section('title', 'Student Lessons')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="studentLessonContent">
  <div class="container-fluid contentMargin">
    <br />
    <p class="h2" style="font-family:Segoe UI Light; font-weight:lighter;">
      <span class="oi oi-justify-left text-orange" title="Simulator" aria-hidden="true"></span> SQL Lessons
    </p>

    <!---SQL INTRODUCTION--->
    <div class="row mt-4">
      <div class="col-sm-6">
        <div class="card border-primary">
          <div class="card-body text-white bg-primary">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Chapter 1: SQL Introduction</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="{{ route('student.SQLLesson.chapter1') }}">
            <div class="card-footer border-primary">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-primary">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Database Concepts</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="{{ route('student.SQLLesson.chapter1.database_concepts') }}">
            <div class="card-footer border-primary">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-primary">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Relational Database</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="{{ route('student.SQLLesson.chapter1.relational_db') }}">
            <div class="card-footer border-primary">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-primary">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Entities, Attributes, and Relationships</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="{{ route('student.SQLLesson.chapter1.ent_attr_relationships') }}">
            <div class="card-footer border-primary">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-primary">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Functional Dependence</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="{{ route('student.SQLLesson.chapter1.functional_dependence') }}">
            <div class="card-footer border-primary">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-primary">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Primary Key</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="{{ route('student.SQLLesson.chapter1.primary_key') }}">
            <div class="card-footer border-primary">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-primary">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Diagrams for Database Design (ERD)</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="{{ route('student.SQLLesson.chapter1.diagrams_dbDesign') }}">
            <div class="card-footer border-primary">
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
          <a href="{{ route('student.SQLLesson.chapter2') }}">
            <div class="card-footer border-danger">
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
          <a href="create_table">
            <div class="card-footer border-danger">
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
          <a href="data_type">
            <div class="card-footer border-danger">
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
          <a href="using_nulls">
            <div class="card-footer border-danger">
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
          <a href="describing_table">
            <div class="card-footer border-danger">
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
          <a href="adding_rows">
            <div class="card-footer border-danger">
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
          <a href="insert_command">
            <div class="card-footer border-danger">
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
          <a href="insert_null">
            <div class="card-footer border-danger">
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
          <a href="view_delete">
            <div class="card-footer border-danger">
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
          <a href="single_table_query">
            <div class="card-footer border-success">
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
          <a href="retrieve_all">
            <div class="card-footer border-success">
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
          <a href="retrieve_certaincolumn">
            <div class="card-footer border-success">
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
          <a href="where_clause">
            <div class="card-footer border-success">
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
          <a href="compound_condition">
            <div class="card-footer border-success">
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
          <a href="between">
            <div class="card-footer border-success">
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
          <a href="computed_column">
            <div class="card-footer border-success">
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
          <a href="like">
            <div class="card-footer border-success">
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
          <a href="in">
            <div class="card-footer border-success">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Sorting</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="sorting">
            <div class="card-footer border-success">
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
          <a href="order_by">
            <div class="card-footer border-success">
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
          <a href="additional_sorting">
            <div class="card-footer border-success">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Using Functions</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="using_function">
            <div class="card-footer border-success">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Using the COUNT Function</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="using_count">
            <div class="card-footer border-success">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Using the SUM Function</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="using_sum">
            <div class="card-footer border-success">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Using the AVG, MAX, and MIN Functions</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="avg_max_min">
            <div class="card-footer border-success">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Using the DISTINCT Operator</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="using_distinct">
            <div class="card-footer border-success">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Nesting Queries</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="nesting_queries">
            <div class="card-footer border-success">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Subqueries</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="subqueries">
            <div class="card-footer border-success">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Grouping</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="grouping">
            <div class="card-footer border-success">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Using the GROUP BY Clause</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="group_by">
            <div class="card-footer border-success">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Using a HAVING Clause</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="having">
            <div class="card-footer border-success">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> HAVING vs. WHERE</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="having_where">
            <div class="card-footer border-success">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Nulls</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="nulls">
            <div class="card-footer border-success">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
    </div>

    <!---UPDATING DATA--->
    <div class="row mt-5">
      <div class="col-sm-6">
        <div class="card border-purple">
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Chapter 5: Updating Data</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="updating_data">
            <div class="card-footer border-purple">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div
        >
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Creating a New Table from an Existing Table</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="new_from_existing">
            <div class="card-footer border-purple">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Changing Existing Data in a Table</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="existing_data">
            <div class="card-footer border-purple">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Adding New Rows to an Existing Table</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="add_rows_existing">
            <div class="card-footer border-purple">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Commit and Rollback</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="commit_and_rollback">
            <div class="card-footer border-purple">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Transactions</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="transactions">
            <div class="card-footer border-purple">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Changing and Deleting Existing Rows</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="changing_deleting_existing">
            <div class="card-footer border-purple">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Executing a Rollback</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="rollback">
            <div class="card-footer border-purple">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Changing a Value in a Column to Null</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="value_to_null">
            <div class="card-footer border-purple">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Changing a Table’s Structure</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="tables_structure">
            <div class="card-footer border-purple">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Making Complex Changes</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="complex_changes">
            <div class="card-footer border-purple">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Dropping a Table</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="dropping_table">
            <div class="card-footer border-purple">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
    </div>




  </div>
</div>
@endsection
