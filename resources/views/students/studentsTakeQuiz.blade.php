@extends('layouts.studentapp')

@section('title', 'Take Quiz')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content">
  <div class="container-fluid contentMargin">
    <div class="row">
      <div class="col-12 mt-3 mb-2">
        <div class="card border-blue-silver">
          <div class="card-header bg-primary text-white h4">
            <p class="card-title"><span class="oi oi-spreadsheet" title="scheduledQuiz" aria-hidden="true"></span> Quiz Title</p>
          </div>
          <div class="card-body bg-light">
            @php $count = 1 @endphp
            @foreach($question as $q)
            <div class="row">
              <div class="col-12 col-lg-7">
                <h3 class="mb-4"><code>Question #{{$count++}}</code></h3>
                <blockquote class="blockquote blockquote-box blockquote-primary clearfix">
                  <p class="ml-3">{{$q->question}}</p>
                </blockquote>
              </div>
              <div class="col-12 col-lg-4 mt-4 ml-3">
                <h4><code>Choices</code></h4>
                <div class="custom-controls-stacked">
                  <label class="custom-control custom-radio">
                    <input id="radioStacked3" name="radio-stacked" type="radio" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                    <div class="choice">{{$q->choice_A}}</div>
                  </label>
                  <label class="custom-control custom-radio">
                    <input id="radioStacked4" name="radio-stacked" type="radio" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                    <div class="choice">{{$q->choice_B}}</div>
                  </label>
                  <label class="custom-control custom-radio">
                    <input id="radioStacked4" name="radio-stacked" type="radio" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                    <div class="choice">{{$q->choice_C}}</div>
                  </label>
                  <label class="custom-control custom-radio">
                    <input id="radioStacked4" name="radio-stacked" type="radio" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                    <div class="choice">{{$q->choice_D}}</div>
                  </label>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="card-footer bg-lightprimary text-right">
            <button type="submit" name="button" class="btn btn-primary"><span class="oi oi-location"></span> Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<style>
.choice{
  border: 1px solid #ABB9CC;
  border-radius: 3px;
  padding: 5px;
  width: 100%;
  background-color: #FFFFFF;
  text-align: justify;
}

blockquote{
  display:block;
  background: #fff;
  padding: 15px;;
  margin: 10px;
  position: relative;
  border-radius: 5px;

  /*Font*/
  font-family: Georgia, serif;
  font-size: 16px;
  line-height: 1.2;
  color: #676F7A;
  text-align: justify;

  /*Borders - (Optional)*/
  border-left: 15px solid #5bc0de;
  border-right: 3px solid #5bc0de;

  /*Box Shadow - (Optional)*/
  -moz-box-shadow: 2px 2px 15px #ccc;
  -webkit-box-shadow: 2px 2px 15px #ccc;
  box-shadow: 2px 2px 15px #ccc;
}

blockquote a:hover{
 color: #676F7A;
}

blockquote em{
  font-style: italic;
}
</style>
@endsection
