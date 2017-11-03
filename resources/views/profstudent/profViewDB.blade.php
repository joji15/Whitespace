@extends('layouts.profApp')

@section('title', 'Class Database')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="viewdbContent">
  <div class="container-fluid contentMargin">
    <div class="row">
      <div class="col-12 mt-4 mb-4">
        <div class="card border-blue-grey" style="min-height:450px; max-height:700px;">
          <div class="card-header text-white bg-blue h6">
            <span class="oi oi-folder" title="Database" aria-hidden="true"></span> Class Database
          </div>
          <div class="card-header bg-dark-grey">
            <nav class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
              <a class="nav-item nav-link active" id="nav-QandA-tab" data-toggle="tab" href="#nav-view" role="tab" aria-controls="nav-QandA" aria-expanded="true"><span class="oi oi-eye" title="View" aria-hidden="true"></span> View Database</a>
              <!-- <a class="nav-item nav-link" id="nav-results-tab" data-toggle="tab" href="#nav-edit" role="tab" aria-controls="nav-results"><span class="oi oi-pencil" title="Edit" aria-hidden="true"></span> Edit Database</a>
              <a class="nav-item nav-link" id="nav-other-tab" data-toggle="tab" href="#nav-delete" role="tab" aria-controls="nav-other"><span class="oi oi-trash" title="Delete" aria-hidden="true"></span> Delete Database</a> -->
            </nav>
          </div>
          <div class="card-body" style="overflow-y: auto;">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-view" role="tabpanel" aria-labelledby="nav-view-tab">
                <div class="row">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <label for="dbselect">Databases:</label>
                    <small id="passwordHelpBlock" class="form-text text-muted">
                      Click one to see more information.
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-5">
                    </small>
                    <div class="tree">
                      <ul style="padding-left:inherit;">
                        <li class="parent_li">
                          <span class="oi oi-plus" title="Database" aria-hidden="true">
                          </span>&nbsp;&nbsp;&nbsp;
                          <a href="#"><i class="oi oi-hard-drive" title="Database" aria-hidden="true"></i> BSIT - practicedb</a>
                          <ul>
                            <li class="parent_li" style="display: none;">
                              <span class="oi oi-plus" title="Database" aria-hidden="true">
                              </span>&nbsp;&nbsp;&nbsp;
                              <a href="#"><i class="oi oi-grid-three-up" title="table" aria-hidden="true"></i> Table1</a>
                              <ul>
                                <li style="display: none;">
                                  &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field1</a>
                                </li>
                                <li style="display: none;">
                                  &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field2</a>
                                </li>
                                <li style="display: none;">
                                  &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field3</a>
                                </li>
                              </ul>
                            </li>
                            <li class="parent_li" style="display: none;">
                              <span class="oi oi-plus" title="Database" aria-hidden="true">
                              </span>&nbsp;&nbsp;&nbsp;
                              <a href="#"><i class="oi oi-grid-three-up" title="table" aria-hidden="true"></i> Table2</a>
                              <ul>
                                <li style="display: none;">
                                  &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field1</a>
                                </li>
                                <li style="display: none;">
                                  &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field2</a>
                                </li>
                                <li style="display: none;">
                                  &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field3</a>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li class="parent_li">
                          <span class="oi oi-plus" title="Database" aria-hidden="true">
                          </span>&nbsp;&nbsp;&nbsp;
                          <a href="#"><i class="oi oi-hard-drive" title="Database" aria-hidden="true"></i> BSCS - practicedb</a>
                          <ul>
                            <li class="parent_li" style="display: none;">
                              <span class="oi oi-plus" title="Database" aria-hidden="true">
                              </span>&nbsp;&nbsp;&nbsp;
                              <a href="#"><i class="oi oi-grid-three-up" title="table" aria-hidden="true"></i> Table1</a>
                              <ul>
                                <li style="display: none;">
                                  &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field1</a>
                                </li>
                                <li style="display: none;">
                                  &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field2</a>
                                </li>
                                <li style="display: none;">
                                  &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field3</a>
                                </li>
                              </ul>
                            </li>
                            <li class="parent_li" style="display: none;">
                              <span class="oi oi-plus" title="Database" aria-hidden="true">
                              </span>&nbsp;&nbsp;&nbsp;
                              <a href="#"><i class="oi oi-grid-three-up" title="table" aria-hidden="true"></i> Table2</a>
                              <ul>
                                <li style="display: none;">
                                  &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field1</a>
                                </li>
                                <li style="display: none;">
                                  &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field2</a>
                                </li>
                                <li style="display: none;">
                                  &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field3</a>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li class="parent_li">
                          <span class="oi oi-plus" title="Database" aria-hidden="true">
                          </span>&nbsp;&nbsp;&nbsp;
                          <a href="#"><i class="oi oi-hard-drive" title="Database" aria-hidden="true"></i> BSIS - practicedb</a>
                          <ul>
                            <li class="parent_li" style="display: none;">
                              <span class="oi oi-plus" title="Database" aria-hidden="true">
                              </span>&nbsp;&nbsp;&nbsp;
                              <a href="#"><i class="oi oi-grid-three-up" title="table" aria-hidden="true"></i> Table1</a>
                              <ul>
                                <li style="display: none;">
                                  &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field1</a>
                                </li>
                                <li style="display: none;">
                                  &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field2</a>
                                </li>
                                <li style="display: none;">
                                  &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field3</a>
                                </li>
                              </ul>
                            </li>
                            <li class="parent_li" style="display: none;">
                              <span class="oi oi-plus" title="Database" aria-hidden="true">
                              </span>&nbsp;&nbsp;&nbsp;
                              <a href="#"><i class="oi oi-grid-three-up" title="table" aria-hidden="true"></i> Table2</a>
                              <ul>
                                <li style="display: none;">
                                  &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field1</a>
                                </li>
                                <li style="display: none;">
                                  &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field2</a>
                                </li>
                                <li style="display: none;">
                                  &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field3</a>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <script>
                    $(function () {
                      $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse this branch');
                      $('.tree li.parent_li > span').click(function (e) {
                        if($(this).hasClass("oi-plus").toString() == 'true'){
                          $(this).removeClass("oi-plus");
                          $(this).addClass("oi-minus");
                        }
                        else{
                          $(this).removeClass("oi oi-minus");
                          $(this).addClass("oi oi-plus");
                        }
                        var children = $(this).parent('li.parent_li').find(' > ul > li');
                        if (children.is(":visible")) {
                          children.hide('fast');

                        } else {
                          children.show('fast');
                        }
                        e.stopPropagation();
                      });
                    });

                    </script>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-7">
                    <table class="table table-bordered table-hover" id="databaseTbl">
                      <thead class="thead-inverse text-center">
                        <tr>
                          <th>Table Name</th>
                          <th>No. of Columns</th>
                          <th>Size</th>
                          <th class="text-center">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>Table1</th>
                          <td>3</td>
                          <td>213 Kib</td>
                          <td class="text-center">
                            <a href="#"><span class="oi oi-browser" title="View Table Rows" aria-hidden="true"> &nbsp;</span></a>
                            <a href="#"><span class="oi oi-list" title="View Table Structure" aria-hidden="true"> &nbsp;</span></a>
                            <a href="#"><span class="oi oi-circle-x text-red" title="Drop Table" aria-hidden="true"></span></a>
                          </td>
                        </tr>
                        <tr>
                          <th>Table2</th>
                          <td>3</td>
                          <td>213 Kib</td>
                          <td class="text-center">
                            <a href="#"><span class="oi oi-browser" title="View Table Rows" aria-hidden="true"> &nbsp;</span></a>
                            <a href="#"><span class="oi oi-list" title="View Table Structure" aria-hidden="true"> &nbsp;</span></a>
                            <a href="#"><span class="oi oi-circle-x text-red" title="Drop Table" aria-hidden="true"></span></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <table class="table table-bordered table-hover" id="tableTbl">
                      <thead class="thead-inverse text-center">
                        <tr>
                          <th>Column Name</th>
                          <th>Type</th>
                          <th>Null</th>
                          <th title="Auto Increment">A_I</th>
                          <th class="text-center">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>Field1</th>
                          <td>int(10)</td>
                          <td>No</td>
                          <td>Yes</td>
                          <td class="text-center">
                            <a href="#"><span class="oi oi-pencil" title="Edit Column" aria-hidden="true"> &nbsp;</span></a>
                            <a href="#"><span class="oi oi-list" title="View Table Structure" aria-hidden="true"> &nbsp;</span></a>
                            <a href="#"><span class="oi oi-circle-x text-red" title="Drop Table" aria-hidden="true"></span></a>
                          </td>
                        </tr>
                        <tr>
                          <th>Field2</th>
                          <td>varchar(150)</td>
                          <td>No</td>
                          <td>No</td>
                          <td class="text-center">
                            <a href="#"><span class="oi oi-pencil" title="Edit Column" aria-hidden="true"> &nbsp;</span></a>
                            <a href="#"><span class="oi oi-list" title="View Table Structure" aria-hidden="true"> &nbsp;</span></a>
                            <a href="#"><span class="oi oi-circle-x text-red" title="Drop Table" aria-hidden="true"></span></a>
                          </td>
                        </tr>
                        <tr>
                          <th>Field3</th>
                          <td>ENUM('0','1')</td>
                          <td>No</td>
                          <td>No</td>
                          <td class="text-center">
                            <a href="#"><span class="oi oi-pencil" title="Edit Column" aria-hidden="true"> &nbsp;</span></a>
                            <a href="#"><span class="oi oi-list" title="View Table Structure" aria-hidden="true"> &nbsp;</span></a>
                            <a href="#"><span class="oi oi-circle-x text-red" title="Drop Table" aria-hidden="true"></span></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <table class="table table-bordered table-hover" id="rowTbl">
                      <thead class="thead-inverse text-center">
                        <tr>
                          <th>Column Name</th>
                          <th>Type</th>
                          <th>Null</th>
                          <th class="text-center">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>Field1</th>
                          <td>int(10)</td>
                          <td>No</td>
                          <td class="text-center">
                            <a href="#"><span class="oi oi-browser" title="View Table Rows" aria-hidden="true"> &nbsp;</span></a>
                            <a href="#"><span class="oi oi-list" title="View Table Structure" aria-hidden="true"> &nbsp;</span></a>
                            <a href="#"><span class="oi oi-circle-x text-red" title="Drop Table" aria-hidden="true"></span></a>
                          </td>
                        </tr>
                        <tr>
                          <th>Field2</th>
                          <td>varchar(150)</td>
                          <td>No</td>
                          <td class="text-center">
                            <a href="#"><span class="oi oi-browser" title="View Table Rows" aria-hidden="true"> &nbsp;</span></a>
                            <a href="#"><span class="oi oi-list" title="View Table Structure" aria-hidden="true"> &nbsp;</span></a>
                            <a href="#"><span class="oi oi-circle-x text-red" title="Drop Table" aria-hidden="true"></span></a>
                          </td>
                        </tr>
                        <tr>
                          <th>Field3</th>
                          <td>ENUM('0','1')</td>
                          <td>No</td>
                          <td class="text-center">
                            <a href="#"><span class="oi oi-browser" title="View Table Rows" aria-hidden="true"> &nbsp;</span></a>
                            <a href="#"><span class="oi oi-list" title="View Table Structure" aria-hidden="true"> &nbsp;</span></a>
                            <a href="#"><span class="oi oi-circle-x text-red" title="Drop Table" aria-hidden="true"></span></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-edit" role="tabpanel" aria-labelledby="nav-edit-tab">

              </div>
              <div class="tab-pane fade" id="nav-delete" role="tabpanel" aria-labelledby="nav-delete-tab">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
