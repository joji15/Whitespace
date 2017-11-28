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
              <a class="nav-item nav-link" id="nav-settings-tab" data-toggle="tab" href="#nav-settings" role="tab" aria-controls="nav-settings"><span class="oi oi-cog" title="Settings" aria-hidden="true"></span> Database Settings</a>
            </nav>
          </div>
          <div class="card-body" style="overflow-y: auto;">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-view" role="tabpanel" aria-labelledby="nav-view-tab">
                <div class="row">
                  <div class="col-12">
                    <label for="dbselect">Databases:</label>
                    <small id="passwordHelpBlock" class="form-text text-muted">
                      Click one to see more information.
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
              <div class="tab-pane fade" id="nav-settings" role="tabpanel" aria-labelledby="nav-settings-tab">
                <div class="row">
                  <div class="col-12">
                    <nav class="nav nav-tabs" id="myTab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-users-tab" data-toggle="tab" href="#nav-users" role="tab" aria-controls="nav-users" aria-selected="true">Users and Privileges</a>
                      <a class="nav-item nav-link" id="nav-import-export-tab" data-toggle="tab" href="#nav-import-export" role="tab" aria-controls="nav-import-export" aria-selected="false">Import/Export</a>
                    </nav>
                  </div>
                  <div class="col-12">
                    <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="nav-users" role="tabpanel" aria-labelledby="nav-users-tab">
                        <form method="post" action="#">
                          <div class="row">
                            <div class="col-2">
                              <br />
                              <div class="col-12 pl-2">
                                <label class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" value="DATA">
                                  <span class="custom-control-indicator"></span>
                                  <span class="custom-control-description">DATA</span>
                                </label>
                                <br />
                                <div class="form-check custom-controls-stacked pl-2">
                                  <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"  value="SELECT">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">SELECT</span>
                                  </label>
                                  <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"  value="INSERT">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">INSERT</span>
                                  </label>
                                  <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"  value="UPDATE">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">UPDATE</span>
                                  </label>
                                  <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"  value="DELETE">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">DELETE</span>
                                  </label>
                                  <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"  value="FILE">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">FILE</span>
                                  </label>
                                </div>
                              </div>
                            </div>
                            <div class="col-2">
                              <br />
                              <div class="col-12 pl-2">
                                <label class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" value="STRUCTURE">
                                  <span class="custom-control-indicator"></span>
                                  <span class="custom-control-description">STRUCTURE</span>
                                </label>
                                <br />
                                <div class="form-check custom-controls-stacked pl-2">
                                  <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"  value="CREATE">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">CREATE</span>
                                  </label>
                                  <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"  value="ALTER">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">ALTER</span>
                                  </label>
                                  <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"  value="DROP">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">DROP</span>
                                  </label>
                                  <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"  value="TRIGGER">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">TRIGGER</span>
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="tab-pane fade" id="nav-import-export" role="tabpanel" aria-labelledby="nav-import-export-tab">...</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
