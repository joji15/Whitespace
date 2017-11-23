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
            <div class="row">
              <div class="col-12 col-lg-7">
                <h3 class="mb-4"><code>Question #</code></h3>
                <blockquote class="blockquote blockquote-box blockquote-primary clearfix">
                  <p class="ml-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                </blockquote>
              </div>
              <div class="col-12 col-lg-4 mt-4 ml-3">
                <h4><code>Choices</code></h4>
                <div class="custom-controls-stacked">
                  <label class="custom-control custom-radio">
                    <input id="radioStacked3" name="radio-stacked" type="radio" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                    <div class="choice">Choice 1</div>
                  </label>
                  <label class="custom-control custom-radio">
                    <input id="radioStacked4" name="radio-stacked" type="radio" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                    <div class="choice">Choice 2</div>
                  </label>
                  <label class="custom-control custom-radio">
                    <input id="radioStacked4" name="radio-stacked" type="radio" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                    <div class="choice">Choice 3</div>
                  </label>
                  <label class="custom-control custom-radio">
                    <input id="radioStacked4" name="radio-stacked" type="radio" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                    <div class="choice">Choice 4</div>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer bg-primary text-right">
            <button type="submit" name="button" class="btn btn-dark">Submit</button>
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
