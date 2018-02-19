@extends('layouts.profApp')

@section('title', 'Audit Trail')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="auditContent">
  <div class="container-fluid contentMargin">
    <br />
    <p class="h2 mb-4" style="font-family:Segoe UI Light; font-weight:lighter;">
      <span class="oi oi-script text-blue-grey" title="Report/Audit Trait" aria-hidden="true"></span> Audit Trail
    </p>
    <div class="d-none">{{ $i = 1 }}</div>
    <div class="row">
      <div class="col-12">
        <table id="example" class="display" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>No.</th>
              <th>Action Taken</th>
              <th>Description</th>
              <th>Date &amp; Time</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No.</th>
              <th>Action Taken</th>
              <th>Description</th>
              <th>Date &amp; Time</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($audit as $a)
              <tr>
                <td>{{ $i++ }}</td>
                <td>{{$a->audit_transaction}}</td>
                <td>{{$a->audit_description}}</td>
                <td>{{$a->created_at}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<style type="text/css">
  input[type=search]{
    border-radius: 10px;
  }
</style>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" >
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
  });
</script>

@endsection
