@extends('layouts.studentapp')

@section('title', 'Student Lessons')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="studentLessonContent">
  <div class="container-fluid contentMargin">
    <br />
    <p class="h2" style="font-family:Segoe UI Light; font-weight:lighter;">
      <span class="oi oi-justify-left text-orange" title="Simulator" aria-hidden="true"></span> SQL Lessons
    </p>

    <div class="row mt-4">
      <div class="col-12 col-md-8">
        <div class="card border-primary">
          <div class="card-body text-white bg-primary">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Chapter 1: SQL</h4>
          </div>
          <div class="card-footer border-primary">
            <a href="{{ route('student.SQLLesson.chapter1') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Introduction of this chapter</div>
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
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> SQL and its Capabilities</h4>
          </div>
          <div class="card-footer border-primary">
            <a href="{{ route('student.SQLLesson.chapter1.sql_capabilities') }}" style="text-decoration:none;">
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
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> SQL Data Types</h4>
          </div>
          <div class="card-footer border-primary">
            <a href="{{ route('student.SQLLesson.chapter1.data_types') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Lesson</div>
                <div class="col-4 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-12 col-md-8">
        <div class="card border-warning">
          <div class="card-body text-white bg-yellow">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Chapter 2: Data Manipulation Language</h4>
          </div>
          <div class="card-footer border-warning">
            <a href="{{ route('student.SQLLesson.chapter2') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Introduction of this chapter</div>
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
          <div class="card-body text-white bg-yellow">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Select Clause</h4>
          </div>
          <div class="card-footer border-warning">
            <a href="{{ route('student.SQLLesson.chapter2.select_clause') }}" style="text-decoration:none;">
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
          <div class="card-body text-white bg-yellow">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Sorting and Restricting Data</h4>
          </div>
          <div class="card-footer border-warning">
            <a href="{{ route('student.SQLLesson.chapter2.sorting') }}" style="text-decoration:none;">
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
          <div class="card-body text-white bg-yellow">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Subquery</h4>
          </div>
          <div class="card-footer border-warning">
            <a href="{{ route('student.SQLLesson.chapter2.subquery') }}" style="text-decoration:none;">
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
          <div class="card-body text-white bg-yellow">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Functions</h4>
          </div>
          <div class="card-footer border-warning">
            <a href="{{ route('student.SQLLesson.chapter2.functions') }}" style="text-decoration:none;">
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
          <div class="card-body text-white bg-yellow">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Join</h4>
          </div>
          <div class="card-footer border-warning">
            <a href="{{ route('student.SQLLesson.chapter2.join') }}" style="text-decoration:none;">
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
          <div class="card-body text-white bg-yellow">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Union</h4>
          </div>
          <div class="card-footer border-warning">
            <a href="{{ route('student.SQLLesson.chapter2.union') }}" style="text-decoration:none;">
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
          <div class="card-body text-white bg-yellow">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Insert Statement</h4>
          </div>
          <div class="card-footer border-warning">
            <a href="{{ route('student.SQLLesson.chapter2.insert_statement') }}" style="text-decoration:none;">
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
          <div class="card-body text-white bg-yellow">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Update Statement</h4>
          </div>
          <div class="card-footer border-warning">
            <a href="{{ route('student.SQLLesson.chapter2.update_statement') }}" style="text-decoration:none;">
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
          <div class="card-body text-white bg-yellow">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Delete Statement</h4>
          </div>
          <div class="card-footer border-warning">
            <a href="{{ route('student.SQLLesson.chapter2.delete_statement') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Lesson</div>
                <div class="col-4 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-12 col-md-8">
        <div class="card border-purple">
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-book" title="lessonList" aria-hidden="true"></span> Chapter 3: Data Definition Language</h4>
          </div>
          <div class="card-footer border-purple">
            <a href="{{ route('student.SQLLesson.chapter3_intro') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Introduction of this chapter</div>
                <div class="col-4 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3 mb-5">
      <div class="col-12 col-md-6 col-lg-4 mt-3">
        <div class="card border-silver">
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span>  Create</h4>
          </div>
          <div class="card-footer border-purple">
            <a href="{{ route('student.SQLLesson.chapter3.create') }}" style="text-decoration:none;">
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
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Alter</h4>
          </div>
          <div class="card-footer border-purple">
            <a href="{{ route('student.SQLLesson.chapter3.alter') }}" style="text-decoration:none;">
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
            <h4 class="card-title"><span class="oi oi-bookmark" title="lessonList" aria-hidden="true"></span> Drop</h4>
          </div>
          <div class="card-footer border-purple">
            <a href="{{ route('student.SQLLesson.chapter3.drop') }}" style="text-decoration:none;">
              <div class="row">
                <div class="col-8">Go to Lesson</div>
                <div class="col-4 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
