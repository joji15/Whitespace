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
        <div class="card border-silver">
          <div class="card-body text-white bg-primary">
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
          <div class="card-body text-white bg-primary">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Database Concepts</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="database_concepts">
            <div class="card-footer border-info">
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
          <a href="relational_db">
            <div class="card-footer border-info">
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
          <a href="entities_attributes_relationships">
            <div class="card-footer border-info">
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
          <a href="functional_dependence">
            <div class="card-footer border-info">
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
          <a href="primary_key">
            <div class="card-footer border-info">
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
          <a href="diagrams_dbDesign">
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
        <div class="card border-silver">
          <div class="card-body text-white bg-danger">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Chapter 2: Creating Tables</h4>
            <h6><span class="card-text oi oi-graph"></span> Status</h6>
          </div>
          <a href="chap2_intro">
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
          <a href="create_table">
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
          <a href="data_type">
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
          <a href="using_nulls">
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
          <a href="describing_table">
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
          <a href="adding_rows">
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
          <a href="insert_command">
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
          <a href="insert_null">
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
          <a href="view_delete">
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
          <a href="single_table_query">
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
          <a href="retrieve_all">
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
          <a href="retrieve_certaincolumn">
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
          <a href="where_clause">
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
          <a href="compound_condition">
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
          <a href="between">
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
          <a href="computed_column">
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
          <a href="like">
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
          <a href="in">
            <div class="card-footer border-info">
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
          <a href="order_by">
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
          <a href="additional_sorting">
            <div class="card-footer border-info">
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
            <div class="card-footer border-info">
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
            <div class="card-footer border-info">
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
            <div class="card-footer border-info">
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
            <div class="card-footer border-info">
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
            <div class="card-footer border-info">
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
            <div class="card-footer border-info">
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
            <div class="card-footer border-info">
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
            <div class="card-footer border-info">
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
            <div class="card-footer border-info">
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
            <div class="card-footer border-info">
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
            <div class="card-footer border-info">
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
            <div class="card-footer border-info">
            Start Lesson <span class="oi oi-arrow-circle-right" title="viewLessonList" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
    </div>

    <!---MULTIPLE TABLE QUERIES--->
    <div class="row mt-5">
      <div class="col-sm-6">
        <div class="card border-warning">
          <div class="card-body text-white bg-warning">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span>
              : Multiple Table Queries</h4>
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
          <div class="card-body text-white bg-warning">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Joining Two Tables</h4>
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
          <div class="card-body text-white bg-warning">
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
          <div class="card-body text-white bg-warning">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Using the EXISTS Operator</h4>
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
          <div class="card-body text-white bg-warning">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Using a Subquery Within a Subquery</h4>
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
          <div class="card-body text-white bg-warning">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Using an Alias</h4>
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
          <div class="card-body text-white bg-warning">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Joining a Table to Itself</h4>
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
          <div class="card-body text-white bg-warning">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Using a Self-Join on a Primary Key Column</h4>
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
          <div class="card-body text-white bg-warning">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Joining Several Tables</h4>
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
          <div class="card-body text-white bg-warning">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Set Operations</h4>
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
          <div class="card-body text-white bg-warning">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> ALL and ANY</h4>
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
          <div class="card-body text-white bg-warning">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Inner Join</h4>
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
          <div class="card-body text-white bg-warning">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Outer Join</h4>
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
          <div class="card-body text-white bg-warning">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Product</h4>
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

    <!---UPDATING DATA--->
    <div class="row mt-5">
      <div class="col-sm-6">
        <div class="card border-silver">
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Chapter 5: Updating Data</h4>
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
          <div class="card-body text-white bg-lightpurple">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Creating a New Table from an Existing Table</h4>
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
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Changing Existing Data in a Table</h4>
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
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Adding New Rows to an Existing Table</h4>
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
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Commit and Rollback</h4>
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
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Transactions</h4>
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
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Changing and Deleting Existing Rows</h4>
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
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Executing a Rollback</h4>
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
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Changing a Value in a Column to Null</h4>
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
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Changing a Table’s Structure</h4>
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
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Making Complex Changes</h4>
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
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Dropping a Table</h4>
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
