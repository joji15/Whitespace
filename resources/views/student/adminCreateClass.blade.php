@extends('layouts.adminapp')

@section('title', 'Create Class')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="createClassContent">
  <div class="container-fluid contentMargin">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 mt-4">
        <div class="card border-red">
          <div class="card-header bg-red text-white h6">
            <span class="oi oi-plus" title="create" aria-hidden="true"></span> Create Class
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <div class="input-group">
                  <span class="input-group-addon" id="inputRoom">Room No.</span>
                  <select class="form-control custom-select" id="inputRoom">
                    <?php
                    for($i=1; $i<=3; $i++){
                      echo "<option value=".$i.">Lab ".$i."</option>";
                    }
                    ?>
                  </select>
                </div>
              </div>
            </div>
            <br />
            <div class="row">
              <div class="col-12 col-sm-6 col-md-4 mt-2">
                <p class="h5">
                  Date:
                </p>
                <hr />
                <div class="form-check custom-controls-stacked">
                  <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input"  value="Monday">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Monday</span>
                  </label>
                  <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input"  value="Tuesday">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Tuesday</span>
                  </label>
                  <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input"  value="Wednesday">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Wednesday</span>
                  </label>
                  <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input"  value="Thursday">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Thursday</span>
                  </label>
                  <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input"  value="Friday">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Friday</span>
                  </label>
                  <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input"  value="Saturday">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Saturday</span>
                  </label>
                  <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input"  value="Sunday">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Sunday</span>
                  </label>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4 mt-2">
                <p class="h5">
                  Time Start:
                </p>
                <hr />
                <div class="input-group">
                  <select class="form-control custom-select">
                    <?php
                    for($i=1; $i<=12; $i++){
                      if(strlen($i) == 1){
                        echo "<option value=".$i.">0".$i."</option>";
                      }
                      else
                        echo "<option value=".$i.">".$i."</option>";
                    }
                    ?>
                  </select>
                </div>
                <br />
                <div class="input-group">
                  <select class="form-control custom-select">
                    <?php
                    $temp = 1;
                    for($i=0; $i<=60; $i+=5){
                      if(strlen($i) == 1){
                        echo "<option value=".$temp.">0".$i."</option>";
                      }
                      else
                        echo "<option value=".$temp.">".$i."</option>";
                      $temp++;
                    }
                    ?>
                  </select>
                </div>
                <br />
                <div class="input-group">
                  <select class="form-control custom-select">
                    <option value="1">AM</option>
                    <option value="2">PM</option>
                  </select>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4 mt-2">
                <p class="h5">
                  Time End:
                </p>
                <hr />
                <div class="input-group">
                  <select class="form-control custom-select">
                    <?php
                    for($i=1; $i<=12; $i++){
                      if(strlen($i) == 1){
                        echo "<option value=".$i.">0".$i."</option>";
                      }
                      else
                        echo "<option value=".$i.">".$i."</option>";
                    }
                    ?>
                  </select>
                </div>
                <br />
                <div class="input-group">
                  <select class="form-control custom-select">
                    <?php
                    $temp = 1;
                    for($i=0; $i<=60; $i+=5){
                      if(strlen($i) == 1){
                        echo "<option value=".$temp.">0".$i."</option>";
                      }
                      else
                        echo "<option value=".$temp.">".$i."</option>";
                      $temp++;
                    }
                    ?>
                  </select>
                </div>
                <br />
                <div class="input-group">
                  <select class="form-control custom-select">
                    <option value="1">AM</option>
                    <option value="2">PM</option>
                  </select>
                </div>
              </div>
            </div>
            <br />
            <div class="row">
              <div class="col-4 align-self-end">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-4">
        <div class="card border-red">
          <div class="card-header bg-red text-white h6">
            <span class="oi oi-list" title="create" aria-hidden="true"></span> Existing Classes
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
