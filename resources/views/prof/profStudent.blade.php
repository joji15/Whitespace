@extends('layouts.profApp')

@section('title', 'Students')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="studContent">
  <div class="container-fluid contentMargin">
    <br />
    <p class="h2 mb-4" style="font-family:Segoe UI; font-weight:lighter;">
      <span class="oi oi-people text-red" title="Student Profile" aria-hidden="true"></span> Manage Students
    </p>

    <div class="row">
      <div class="col-12">
        <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="student-class-tab" data-toggle="pill" href="#student-class" role="tab" aria-controls="student-class" aria-selected="true"><span class="oi oi-people" title="Profile Quiz" aria-hidden="true"></span> Manage Classes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="student-progress-tab" data-toggle="pill" href="#student-progress" role="tab" aria-controls="student-progress" aria-selected="false"><span class="oi oi-graph" title="Profile History" aria-hidden="true"></span> Student Progress</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="student-history-tab" data-toggle="pill" href="#student-history" role="tab" aria-controls="student-history" aria-selected="false"><span class="oi oi-clock" title="Profile Download" aria-hidden="true"></span> Student Query History</a>
          </li>
        </ul>
        <hr />
      </div>
      <div class="col-12">
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="student-class" role="tabpanel" aria-labelledby="student-class-tab">
            <div class="row">
              <div class="col-12 col-md-8 col-lg-7 mt-2">
                <p class="h4" style="font-family:Segoe UI; font-weight:lighter;">
                  <span class="oi oi-plus text-green" title="Create Class" aria-hidden="true"></span> Create Class
                </p>
                <br />
                <form action="{{ route('prof.student.CreateClass.import') }}" method="POST" enctype="multipart/form-data">
                  <input type="hidden" value="{{ csrf_token() }}" name="_token" />
                  <div class="form-group row">
                    <label for="year" class="col-sm-3 col-form-label">School Year: </label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="year" aria-label="year" aria-describedby="year" name="year" placeholder="Example: 201*-201*" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="course" class="col-sm-3 col-form-label">Course: </label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="course" aria-label="course" aria-describedby="course" name="course" placeholder="Example: BS**" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="section" class="col-sm-3 col-form-label">Section: </label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="section" aria-label="section" aria-describedby="section" name="section" placeholder="Example: 3*" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="importxlsx" class="col-sm-3 col-form-label">Import Class List: <b>*</b></label>
                    <div class="col-sm-9">
                      <input type="file" name="file" class="form-control-file" id="importxlsx" accept=".xlsx, .xls" required/>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary"><span class="oi oi-plus" title="CreateClass" aria-hidden="true"></span> Create</button>
                    </div>
                  </div>
                </form>
                <p class="h4" style="font-family:Segoe UI; font-weight:lighter;">
                  <p class="card-text"><b>*</b>Importing a class list requires a template in an Excel Worksheet format, you can download it <a href="/files/Template.xlsx"  download="Template.xlsx">here</a>.</p>
                </p>
                @if($show==1)
                <div class="alert bg-green text-white border-dark-grey alert-dismissible fade show toast" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <p class="h2 alert-heading">Success!</p>
                  <p>You have successfully created a class for your students. They can now register.</p>
                </div>
                @else

                @endif
              </div>
              <div class="col-12 col-md-4 col-lg-5 mt-2">
                <div class="card" style="min-height:40%; height:80%; overflow:auto;">
                  <div class="card-body">
                    <p class="h5 mb-3" style="font-family:Segoe UI; font-weight:lighter;">
                      <span class="oi oi-box text-blue" title="Existing Class" aria-hidden="true"></span> Existing Classes:
                    </p>
                    <ul class="list-group list-group-flush">
                      @foreach ($class as $c)
                      <li class="list-group-item">{{$c->course}}-{{$c->section}}: {{$c->school_year}}</li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="row">
              <div class="col-12 col-md-8 col-lg-7 mt-2">
                <p class="h4" style="font-family:Segoe UI; font-weight:lighter;">
                  <span class="oi oi-minus text-red" title="Delete Class" aria-hidden="true"></span> Delete Class
                </p>
                <br />
              </div>
              <div class="col-12 col-md-4 col-lg-5 mt-2">
                
              </div>
            </div> -->
          </div>
          <div class="tab-pane fade pb-4" id="student-progress" role="tabpanel" aria-labelledby="student-progress-tab">
            <canvas id="myChart" width="600" height="350"></canvas>
            <script>
              var ctx = document.getElementById("myChart");
              var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                  labels: ["Q1", "Q2", "Q3", "Q4", "Q5", "Q6", "Q7", "Q8", "Q9", "Q10"],
                  datasets: [{
                    label: '# of Correct Answers for each question',
                    data: [3, 13, 9, 5, 10, 8, 11, 6, 5, 4],
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    ],
                    borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    ],
                    borderWidth: 1
                  }]
                },
                options: {
                // responsive:false,
                scales: {
                  yAxes: [{
                    ticks: {
                      beginAtZero:true
                    }
                  }]
                }
              }
            });
          </script>
          <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th class="table-sort" style="font-weight: 5px;">Name</th>
                <th class="table-sort">Position</th>
                <th class="table-sort">Office</th>
                <th class="table-sort">Age</th>
                <th class="table-sort">Start date</th>
                <th class="table-sort">Salary</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
              </tr>
              <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
              </tr>
              <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
              </tr>
              <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
              </tr>
              <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
              </tr>
              <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
              </tr>
              <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>$137,500</td>
              </tr>
              <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td>$327,900</td>
              </tr>
              <tr>
                <td>Colleen Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
                <td>$205,500</td>
              </tr>
              <tr>
                <td>Sonya Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>2008/12/13</td>
                <td>$103,600</td>
              </tr>
              <tr>
                <td>Jena Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>30</td>
                <td>2008/12/19</td>
                <td>$90,560</td>
              </tr>
              <tr>
                <td>Quinn Flynn</td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2013/03/03</td>
                <td>$342,000</td>
              </tr>
              <tr>
                <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>36</td>
                <td>2008/10/16</td>
                <td>$470,600</td>
              </tr>
              <tr>
                <td>Haley Kennedy</td>
                <td>Senior Marketing Designer</td>
                <td>London</td>
                <td>43</td>
                <td>2012/12/18</td>
                <td>$313,500</td>
              </tr>
              <tr>
                <td>Tatyana Fitzpatrick</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>19</td>
                <td>2010/03/17</td>
                <td>$385,750</td>
              </tr>
              <tr>
                <td>Michael Silva</td>
                <td>Marketing Designer</td>
                <td>London</td>
                <td>66</td>
                <td>2012/11/27</td>
                <td>$198,500</td>
              </tr>
              <tr>
                <td>Paul Byrd</td>
                <td>Chief Financial Officer (CFO)</td>
                <td>New York</td>
                <td>64</td>
                <td>2010/06/09</td>
                <td>$725,000</td>
              </tr>
              <tr>
                <td>Gloria Little</td>
                <td>Systems Administrator</td>
                <td>New York</td>
                <td>59</td>
                <td>2009/04/10</td>
                <td>$237,500</td>
              </tr>
              <tr>
                <td>Bradley Greer</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>41</td>
                <td>2012/10/13</td>
                <td>$132,000</td>
              </tr>
              <tr>
                <td>Dai Rios</td>
                <td>Personnel Lead</td>
                <td>Edinburgh</td>
                <td>35</td>
                <td>2012/09/26</td>
                <td>$217,500</td>
              </tr>
              <tr>
                <td>Jenette Caldwell</td>
                <td>Development Lead</td>
                <td>New York</td>
                <td>30</td>
                <td>2011/09/03</td>
                <td>$345,000</td>
              </tr>
              <tr>
                <td>Yuri Berry</td>
                <td>Chief Marketing Officer (CMO)</td>
                <td>New York</td>
                <td>40</td>
                <td>2009/06/25</td>
                <td>$675,000</td>
              </tr>
              <tr>
                <td>Caesar Vance</td>
                <td>Pre-Sales Support</td>
                <td>New York</td>
                <td>21</td>
                <td>2011/12/12</td>
                <td>$106,450</td>
              </tr>
              <tr>
                <td>Doris Wilder</td>
                <td>Sales Assistant</td>
                <td>Sidney</td>
                <td>23</td>
                <td>2010/09/20</td>
                <td>$85,600</td>
              </tr>
              <tr>
                <td>Angelica Ramos</td>
                <td>Chief Executive Officer (CEO)</td>
                <td>London</td>
                <td>47</td>
                <td>2009/10/09</td>
                <td>$1,200,000</td>
              </tr>
              <tr>
                <td>Gavin Joyce</td>
                <td>Developer</td>
                <td>Edinburgh</td>
                <td>42</td>
                <td>2010/12/22</td>
                <td>$92,575</td>
              </tr>
              <tr>
                <td>Jennifer Chang</td>
                <td>Regional Director</td>
                <td>Singapore</td>
                <td>28</td>
                <td>2010/11/14</td>
                <td>$357,650</td>
              </tr>
              <tr>
                <td>Brenden Wagner</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>28</td>
                <td>2011/06/07</td>
                <td>$206,850</td>
              </tr>
              <tr>
                <td>Fiona Green</td>
                <td>Chief Operating Officer (COO)</td>
                <td>San Francisco</td>
                <td>48</td>
                <td>2010/03/11</td>
                <td>$850,000</td>
              </tr>
              <tr>
                <td>Shou Itou</td>
                <td>Regional Marketing</td>
                <td>Tokyo</td>
                <td>20</td>
                <td>2011/08/14</td>
                <td>$163,000</td>
              </tr>
              <tr>
                <td>Michelle House</td>
                <td>Integration Specialist</td>
                <td>Sidney</td>
                <td>37</td>
                <td>2011/06/02</td>
                <td>$95,400</td>
              </tr>
              <tr>
                <td>Suki Burks</td>
                <td>Developer</td>
                <td>London</td>
                <td>53</td>
                <td>2009/10/22</td>
                <td>$114,500</td>
              </tr>
              <tr>
                <td>Prescott Bartlett</td>
                <td>Technical Author</td>
                <td>London</td>
                <td>27</td>
                <td>2011/05/07</td>
                <td>$145,000</td>
              </tr>
              <tr>
                <td>Gavin Cortez</td>
                <td>Team Leader</td>
                <td>San Francisco</td>
                <td>22</td>
                <td>2008/10/26</td>
                <td>$235,500</td>
              </tr>
              <tr>
                <td>Martena Mccray</td>
                <td>Post-Sales support</td>
                <td>Edinburgh</td>
                <td>46</td>
                <td>2011/03/09</td>
                <td>$324,050</td>
              </tr>
              <tr>
                <td>Unity Butler</td>
                <td>Marketing Designer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009/12/09</td>
                <td>$85,675</td>
              </tr>
              <tr>
                <td>Howard Hatfield</td>
                <td>Office Manager</td>
                <td>San Francisco</td>
                <td>51</td>
                <td>2008/12/16</td>
                <td>$164,500</td>
              </tr>
              <tr>
                <td>Hope Fuentes</td>
                <td>Secretary</td>
                <td>San Francisco</td>
                <td>41</td>
                <td>2010/02/12</td>
                <td>$109,850</td>
              </tr>
              <tr>
                <td>Vivian Harrell</td>
                <td>Financial Controller</td>
                <td>San Francisco</td>
                <td>62</td>
                <td>2009/02/14</td>
                <td>$452,500</td>
              </tr>
              <tr>
                <td>Timothy Mooney</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>37</td>
                <td>2008/12/11</td>
                <td>$136,200</td>
              </tr>
              <tr>
                <td>Jackson Bradshaw</td>
                <td>Director</td>
                <td>New York</td>
                <td>65</td>
                <td>2008/09/26</td>
                <td>$645,750</td>
              </tr>
              <tr>
                <td>Olivia Liang</td>
                <td>Support Engineer</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2011/02/03</td>
                <td>$234,500</td>
              </tr>
              <tr>
                <td>Bruno Nash</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>38</td>
                <td>2011/05/03</td>
                <td>$163,500</td>
              </tr>
              <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2009/08/19</td>
                <td>$139,575</td>
              </tr>
              <tr>
                <td>Thor Walton</td>
                <td>Developer</td>
                <td>New York</td>
                <td>61</td>
                <td>2013/08/11</td>
                <td>$98,540</td>
              </tr>
              <tr>
                <td>Finn Camacho</td>
                <td>Support Engineer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009/07/07</td>
                <td>$87,500</td>
              </tr>
              <tr>
                <td>Serge Baldwin</td>
                <td>Data Coordinator</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2012/04/09</td>
                <td>$138,575</td>
              </tr>
              <tr>
                <td>Zenaida Frank</td>
                <td>Software Engineer</td>
                <td>New York</td>
                <td>63</td>
                <td>2010/01/04</td>
                <td>$125,250</td>
              </tr>
              <tr>
                <td>Zorita Serrano</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>56</td>
                <td>2012/06/01</td>
                <td>$115,000</td>
              </tr>
              <tr>
                <td>Jennifer Acosta</td>
                <td>Junior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>43</td>
                <td>2013/02/01</td>
                <td>$75,650</td>
              </tr>
              <tr>
                <td>Cara Stevens</td>
                <td>Sales Assistant</td>
                <td>New York</td>
                <td>46</td>
                <td>2011/12/06</td>
                <td>$145,600</td>
              </tr>
              <tr>
                <td>Hermione Butler</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>47</td>
                <td>2011/03/21</td>
                <td>$356,250</td>
              </tr>
              <tr>
                <td>Lael Greer</td>
                <td>Systems Administrator</td>
                <td>London</td>
                <td>21</td>
                <td>2009/02/27</td>
                <td>$103,500</td>
              </tr>
              <tr>
                <td>Jonas Alexander</td>
                <td>Developer</td>
                <td>San Francisco</td>
                <td>30</td>
                <td>2010/07/14</td>
                <td>$86,500</td>
              </tr>
              <tr>
                <td>Shad Decker</td>
                <td>Regional Director</td>
                <td>Edinburgh</td>
                <td>51</td>
                <td>2008/11/13</td>
                <td>$183,000</td>
              </tr>
              <tr>
                <td>Michael Bruce</td>
                <td>Javascript Developer</td>
                <td>Singapore</td>
                <td>29</td>
                <td>2011/06/27</td>
                <td>$183,000</td>
              </tr>
              <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                <td>2011/01/25</td>
                <td>$112,000</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="tab-pane fade" id="student-history" role="tabpanel" aria-labelledby="student-history-tab">
            <p class="h4 mt-2" style="font-family:Segoe UI; font-weight:lighter;">
              <span class="oi oi-clock text-green" title="Create Class" aria-hidden="true"></span> Student History
            </p>
            <br />
          <div class="row">
            @foreach ($class as $cl)
              <div class="col-3">
                <div class="card border-blue-grey">
                  <form method="POST" action="{{route('prof.student.StudentHistory')}}">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    <div class="card-body">
                      <p style="font-size: 14px;" class="card-title mb-0"><span class="oi oi-box text-blue" title="{{$cl->class_id}}-{{$cl->course}}-{{$cl->section}}" aria-hidden="true"></span> C&amp;S: <b>{{$cl->course}}-{{$cl->section}}</b></p>
                      <p style="font-size: 14px;" class="card-text mb-0"><span class="oi oi-calendar text-blue" title="{{$cl->school_year}}" aria-hidden="true"></span> School Year: <b>{{$cl->school_year}}</b></p>
                      <p style="font-size: 14px;" class="card-text mb-0"><span class="oi oi-info text-blue" title="{{$cl->school_year}}" aria-hidden="true"></span> Unique ID: <b>{{$cl->class_id}}</b></p>
                      <input type="hidden" name="class_ID" value="{{$cl->class_id}}">
                      
                    </div>
                    <div class="card-footer bg-blue-grey border-blue p-0">
                      <button class="btn bg-transparent" type="submit">
                        <div class="row">
                          <div class="col-10 text-blue" style="font-size: 12px">View Student's History <span class="oi oi-link-intact"></span></div>
                        </div>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            @endforeach
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
    $('#example').DataTable();
  });
</script>

@endsection
