@extends('layouts.profApp')

@section('title', 'Manage Users')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="usersContent">
  <div class="container-fluid contentMargin">
    <br />
    <p class="h2 mb-4" style="font-family:Segoe UI Light; font-weight:lighter;">
      <span class="oi oi-person text-yellow" title="Report/Audit Trait" aria-hidden="true"></span> Manage Users
    </p>
    <div class="row">
      <div class="col-12">
        <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist" style="width: 100%">
          <li class="nav-item">
            <a class="nav-link active" id="pills-add-account-tab" data-toggle="pill" href="#pills-add-account" role="tab" aria-controls="pills-add-account" aria-selected="true"><span class="oi oi-plus text-green" title="Profile Quiz" aria-hidden="true"></span> Add Account</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-manage-tab" data-toggle="pill" href="#pills-manage" role="tab" aria-controls="pills-manage" aria-selected="false"><span class="oi oi-people text-red" title="Profile Quiz" aria-hidden="true"></span> Manage Accounts</a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-add-account" role="tabpanel" aria-labelledby="pills-add-account-tab">
            <div class="row justify-content-center">
              <div class="col-12 col-md-10 col-lg-10 mt-2">
                <p class="h4" style="font-family:Segoe UI; font-weight:lighter;">
                  <span class="oi oi-plus text-green" title="Create Class" aria-hidden="true"></span> Add Account
                </p>
                <small class="form-text text-muted">Here, you can add an account for your co-teachers</small>
                <br>
              </div>
              <div class="col-12 col-md-10 col-lg-10 mt-2">
                <form action="{{ route('prof.users.add') }}" method="POST" enctype="multipart/form-data">
                  <input type="hidden" value="{{ csrf_token() }}" name="_token" />
                  <div class="form-group row">
                    <label for="fName" class="col-sm-3 col-form-label">First Name: </label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="fName" aria-label="fName" aria-describedby="fName" name="fName" placeholder="First Name" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Middle Name" class="col-sm-3 col-form-label">Middle Name: </label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="Middle Name" aria-label="Middle Name" aria-describedby="Middle Name" name="Middle Name" placeholder="Middle Name" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="lName" class="col-sm-3 col-form-label">Last Name: </label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="lName" aria-label="lName" aria-describedby="lName" name="lName" placeholder="Last Name" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">E-Mail: </label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control form-control-sm" id="email" aria-label="email" aria-describedby="email" name="email" placeholder="E-Mail" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-sm-3 col-form-label">Password: </label>
                    <div class="col-sm-9">
                      <input type="password" class="form-control form-control-sm" id="password" aria-label="password" aria-describedby="password" name="password" placeholder="Password" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="conpassword" class="col-sm-3 col-form-label">Confirm Password: </label>
                    <div class="col-sm-9">
                      <input type="password" class="form-control form-control-sm" id="conpassword" aria-label="conpassword" aria-describedby="conpassword" name="conpassword" placeholder="Confirm Password" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary"><span class="oi oi-plus" title="CreateClass" aria-hidden="true"></span> Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-manage" role="tabpanel" aria-labelledby="pills-manage-tab">
            <div class="row justify-content-center">
              <div class="col-12 col-md-10 col-lg-10 mt-2">
                <p class="h4" style="font-family:Segoe UI; font-weight:lighter;">
                  <span class="oi oi-people text-red" title="Manage Accounts" aria-hidden="true"></span> Manage Accounts
                </p>
                <small class="form-text text-muted">Here, you can manage accounts by updating info or deleting an account.</small>
                <br>
              </div>
              <div class="col-12 col-md-6 col-lg-6 mt-2">
                <p class="h5" style="font-family:Segoe UI; font-weight:lighter;">Professor Accounts</p>
                <br>
                <div class="table-responsive">
                  <table id="profTbl" cellspacing="0" style="width:100%" class="table table-bordered table-hover display">
                    <thead class="thead-inverse">
                      <tr>
                        <th class="table-sort" style="font-weight: 5px; width: 5%">No.</th>
                        <th class="table-sort" style="width: 45%">Name</th>
                        <th class="table-sort" style="width: 35%">Email</th>
                        <th class="table-sort" style="width: 15%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $i = 1 @endphp
                      @foreach ($prof as $pr)
                      <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $pr->prof_fName }} {{ $pr->prof_mName }} {{ $pr->prof_lName }}</td>
                        <td>{{ $pr->prof_email }}</td>
                        <td style="text-align: center; display: inline-flex; width: 100%;">
                          <form action="" method="POST" style="width: 30%">
                            <button type="submit" class="btn btn-sm bg-transparent p-0 pl-1 pr-1">
                              <span class="oi oi-pencil text-blue" title="Update" aria-hidden="true">
                              </span>
                            </button>
                          </form>
                          <div style="width: 30%"></div>
                          <form action="" method="POST" style="width: 30%">
                            <button type="submit" class="btn btn-sm bg-transparent p-0 pl-1 pr-1">
                              <span class="oi oi-trash text-red" title="Delete" aria-hidden="true">
                              </span>
                            </button>
                          </form>
                          <div style="width: 30%"></div>
                          <form action="" method="POST" style="width: 30%">
                            <button type="submit" class="btn btn-sm bg-transparent p-0 pl-1 pr-1">
                              <span class="oi oi-key text-orange" title="Change Password" aria-hidden="true">
                              </span>
                            </button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6 mt-2">
                <p class="h5" style="font-family:Segoe UI; font-weight:lighter;">Student Accounts</p>
                <br>
                <div class="">
                  <table id="profTbl" cellspacing="0" style="width:100%" class="table table-bordered table-hover display">
                    <thead class="thead-inverse">
                      <tr>
                        <th class="table-sort" style="font-weight: 5px; width: 5%">No.</th>
                        <th class="table-sort" style="width: 45%">Name</th>
                        <th class="table-sort" style="width: 35%">Email</th>
                        <th class="table-sort" style="width: 15%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $i = 1 @endphp
                      @foreach ($prof as $pr)
                      <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $pr->prof_fName }} {{ $pr->prof_mName }} {{ $pr->prof_lName }}</td>
                        <td>{{ $pr->prof_email }}</td>
                        <td style="text-align: center; display: inline-flex; width: 100%;">
                          <form action="" method="POST" style="width: 30%">
                            <button type="submit" class="btn btn-sm bg-transparent p-0 pl-1 pr-1">
                              <span class="oi oi-pencil text-blue" title="Update" aria-hidden="true">
                              </span>
                            </button>
                          </form>
                          <div style="width: 30%"></div>
                          <form action="" method="POST" style="width: 30%">
                            <button type="submit" class="btn btn-sm bg-transparent p-0 pl-1 pr-1">
                              <span class="oi oi-trash text-red" title="Delete" aria-hidden="true">
                              </span>
                            </button>
                          </form>
                          <div style="width: 30%"></div>
                          <form action="" method="POST" style="width: 30%">
                            <button type="submit" class="btn btn-sm bg-transparent p-0 pl-1 pr-1">
                              <span class="oi oi-key text-orange" title="Change Password" aria-hidden="true">
                              </span>
                            </button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" >
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#profTbl').DataTable();
    $('#studentTbl').DataTable();
  });
</script>


@endsection
