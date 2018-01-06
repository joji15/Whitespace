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
      <div class="col-12 col-md-8">
        <div class="card border-primary">
          <div class="card-body text-white bg-primary">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Chapter 1: SQL Introduction</h4>
          </div>
          <div class="card-footer border-primary">
            <a href="{{ route('student.SQLLesson.chapter1') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Lesson</div>
                <div class="col-4 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-12 col-md-6 col-lg-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-primary">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Database Concepts</h4>
          </div>
          <div class="card-footer border-primary">
            <a href="{{ route('student.SQLLesson.chapter1.database_concepts') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Lesson</div>
                <div class="col-4 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-primary">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Functional Dependence</h4>
          </div>
          <div class="card-footer border-primary">
            <a href="{{ route('student.SQLLesson.chapter1.functional_dependence') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Lesson</div>
                <div class="col-4 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-primary">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Primary Key</h4>
          </div>
          <div class="card-footer border-primary">
            <a href="{{ route('student.SQLLesson.chapter1.primary_key') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Lesson</div>
                <div class="col-4 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-primary">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Diagrams for Database Design (ERD)</h4>
          </div>
          <div class="card-footer border-primary">
            <a href="{{ route('student.SQLLesson.chapter1.diagrams_dbDesign') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Lesson</div>
                <div class="col-4 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!---CREATING TABLES--->
    <div class="row mt-5">
      <div class="col-12 col-md-8">
        <div class="card border-danger">
          <div class="card-body text-white bg-danger">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Chapter 2: Creating Tables</h4>
          </div>
          <div class="card-footer border-danger">
            <a href="{{ route('student.SQLLesson.chapter2') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Lesson</div>
                <div class="col-4 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-12 col-md-6 col-lg-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-danger">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Creating a Table</h4>
          </div>
          <div class="card-footer border-danger">
            <a href="{{ route('student.SQLLesson.chapter2.create_table') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Lesson</div>
                <div class="col-4 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-danger">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Using Data Types</h4>
          </div>
          <div class="card-footer border-danger">
            <a href="{{ route('student.SQLLesson.chapter2.using_data_types') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Lesson</div>
                <div class="col-4 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-danger">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Using NULLs</h4>
          </div>
          <div class="card-footer border-danger">
            <a href="{{ route('student.SQLLesson.chapter2.using_nulls') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Lesson</div>
                <div class="col-4 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-danger">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Describing a Table</h4>
          </div>
          <div class="card-footer border-danger">
            <a href="{{ route('student.SQLLesson.chapter2.describing_table') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Lesson</div>
                <div class="col-4 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-danger">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Adding rows to a tables <code>INSERT</code></h4>
          </div>
          <div class="card-footer border-danger">
            <a href="{{ route('student.SQLLesson.chapter2.adding_rows') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Lesson</div>
                <div class="col-4 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-danger">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Viewing and deleting data <code>SELECT</code>, <code>DELETE</code></h4>
          </div>
          <div class="card-footer border-danger">
            <a href="{{ route('student.SQLLesson.chapter2.view_delete') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Lesson</div>
                <div class="col-4 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!---SINGLE TABLE QUERIES--->
    <div class="row mt-5">
      <div class="col-12 col-md-8">
        <div class="card border-success">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Chapter 3: Single Table Queries</h4>
          </div>
          <div class="card-footer border-success">
            <a href="{{ route('student.SQLLesson.chapter3') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Lesson</div>
                <div class="col-4 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-12 col-md-6 col-lg-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span>  Constructing Simple Queries</h4>
          </div>
          <div class="card-footer border-success">
            <a href="{{ route('student.SQLLesson.chapter3.simple_queries') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Lesson</div>
                <div class="col-4 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Sorting</h4>
          </div>
          <div class="card-footer border-success">
            <a href="{{ route('student.SQLLesson.chapter3.sorting') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Lesson</div>
                <div class="col-4 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Using Functions</h4>
          </div>
          <div class="card-footer border-success">
            <a href="{{ route('student.SQLLesson.chapter3.using_function') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Lesson</div>
                <div class="col-4 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Nesting Queries</h4>
          </div>
          <div class="card-footer border-success">
            <a href="{{ route('student.SQLLesson.chapter3.nesting_queries') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Lesson</div>
                <div class="col-4 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Grouping</h4>
          </div>
          <div class="card-footer border-success">
            <a href="{{ route('student.SQLLesson.chapter3.grouping') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Lesson</div>
                <div class="col-4 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-success">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Nulls</h4>
          </div>
          <div class="card-footer border-success">
            <a href="{{ route('student.SQLLesson.chapter3.nulls') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Lesson</div>
                <div class="col-4 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!---UPDATING DATA--->
    <div class="row mt-5">
      <div class="col-12 col-md-8">
        <div class="card border-purple">
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Chapter 4: Updating Data</h4>
          </div>
          <div class="card-footer border-purple">
            <a href="{{ route('student.SQLLesson.chapter4') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Lesson</div>
                <div class="col-4 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3 mb-4">
      <div class="col-12 col-md-6 col-lg-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Creating a New Table from an Existing Table</h4>
          </div>
          <div class="card-footer border-purple">
            <a href="{{ route('student.SQLLesson.chapter4.new_from_existing') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Lesson</div>
                <div class="col-4 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Changing Existing Data in a Table</h4>
          </div>
          <div class="card-footer border-purple">
            <a href="{{ route('student.SQLLesson.chapter4.new_from_existing') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Lesson</div>
                <div class="col-4 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Adding New Rows to an Existing Table</h4>
          </div>
          <div class="card-footer border-purple">
            <a href="{{ route('student.SQLLesson.chapter4.add_rows_existing') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Lesson</div>
                <div class="col-4 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Changing a Value in a Column to Null</h4>
          </div>
          <div class="card-footer border-purple">
            <a href="{{ route('student.SQLLesson.chapter4.value_to_null') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Lesson</div>
                <div class="col-4 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Dropping a Table</h4>
          </div>
          <div class="card-footer border-purple">
            <a href="{{ route('student.SQLLesson.chapter4.dropping_table') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Lesson</div>
                <div class="col-4 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div></div>
@endsection
