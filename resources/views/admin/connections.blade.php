@extends('layouts.adminapp')

@section('title', 'Connections')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content">
  <div class="container-fluid contentMargin">
    <hr />
    <p class="h2" style="font-family:Segoe UI Light;">
      Connections
    </p>
    <hr />
    <div class="row">
      <div style="flex-basis: 50%; background-color: rgb(253, 253, 253); overflow-y: auto; padding: 10px;">
        <label class="control-label">Connections</label>
        <div class="list-group">
          <li class="list-group-item ListRow">
            <h4><a href="#connection">MyFirstConnection</a></h4>
            <h5>mysql 127.0.0.1 / try</h5>
            <a href="#delete"><span class="oi oi-trash"></span></a>
          </li>
        </div>
        <!--<button type="button" class="btn btn-default">New Connection</button>-->
        <div style="flex-basis: 50%; background-color: rgb(253, 253, 253); overflow-y: auto; padding: 10px;">
          <div class="panel panel-default">
            <div class="panel-body">
              
              {!! Form::open(['url' => 'connections/submit']) !!}
                <div class="form-group">
                  {{Form::label('name', 'Connection Name')}}
                  {{Form::text('name','',['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                  {{Form::label('driver','Database Driver')}}
                  {{Form::text('driver','MySQL',['class'=>'form-control','disabled'])}}
                </div>
                <div class="form-group">
                  {{Form::label('host','Host/Server/IP Address')}}
                  {{Form::text('host','127.0.0.1',['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                  {{Form::label('port','Port (optional)')}}
                  {{Form::text('port','3306',['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                  {{Form::label('database','Database')}}
                  {{Form::text('database','',['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                  {{Form::label('username','Database Username')}}
                  {{Form::text('username','root',['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                  {{Form::label('password','Database Password')}}
                  {{Form::password('password',['class'=>'form-control','awesome'])}}
                </div>
                <div>
                  {{Form::submit('Save',['class'=> 'btn btn-default'])}}
                </div>
              {!! Form::close() !!}

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
