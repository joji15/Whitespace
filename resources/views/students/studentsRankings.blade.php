@extends('layouts.studentapp')

@section('title', 'Student Rankings')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="">
  <div class="container-fluid contentMargin">
    <hr />
    <p class="h2" style="font-family:Segoe UI Light;">
      Student Rankings
    </p>
    <hr />
    <div class="row">
      <div class="col-12">
        <h5>As of last quiz, <code>Quiz 3</code></h5>
        <table class="table table-bordered">
          <thead class="table-inverse">
            <tr>
              <th>Rank No.</th>
              <th>Name</th>
              <th>Score</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>1</th>
              <th>John Doe</th>
              <th>120</th>
            </tr>
            <tr>
              <th>2</th>
              <th>Jane Doe</th>
              <th>110</th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
