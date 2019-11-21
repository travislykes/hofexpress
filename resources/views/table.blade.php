@extends('layouts.admin.dashboard')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/vendor_components/datatable/datatables.min.css') }}"/>
@endsection
@section('content')

<section class="content">

        <div class="row">
            <div class="col-xl-9 col-lg-8 col-12">
              <div class="box">
                  <div class="box-header with-border">						
                      <h4 class="box-title">Support Ticket List</h4>
                      <h6 class="box-subtitle">List of ticket opend by customers</h6>
                  </div>
                  <div class="box-body p-15">						
                      <div class="table-responsive">
                          <table id="tickets" class="table mt-0 table-hover no-wrap table-borderless" data-page-size="10">
                              <thead>
                                  <tr>
                                      <th>ID</th>
                                      <th>Ope. by</th>
                                      <th>Cust. Email</th>
                                      <th>Sbuject</th>
                                      <th>Status</th>
                                      <th>Ass. to</th>
                                      <th>Date</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>1011</td>
                                      <td>
                                          <a href="javascript:void(0)">Sophia</a>
                                      </td>
                                      <td>sophia@gmail.com</td>
                                      <td>How to customize the template?</td>
                                      <td><span class="badge badge-warning">New</span> </td>
                                      <td>Elijah</td>
                                      <td>14-10-2018</td>
                                      <td>
                                          <a href="javascript:void(0)" class="text-danger" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>1224</td>
                                      <td>
                                          <a href="javascript:void(0)">William</a>
                                      </td>
                                      <td>william@gmail.com</td>
                                      <td>How to change colors</td>
                                      <td><span class="badge badge-success">Complete</span> </td>
                                      <td>Benjamin</td>
                                      <td>13-10-2018</td>
                                      <td>
                                          <a href="javascript:void(0)" class="text-danger" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>1024</td>
                                      <td>
                                          <a href="javascript:void(0)">Jayden</a>
                                      </td>
                                      <td>jayden@gmail.com</td>
                                      <td>How to set Horizontal nav</td>
                                      <td><span class="badge badge-success">Complete</span> </td>
                                      <td>Andrew</td>
                                      <td>13-10-2018</td>
                                      <td>
                                          <a href="javascript:void(0)" class="text-danger" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>2124</td>
                                      <td>
                                          <a href="javascript:void(0)">Ethan</a>
                                      </td>
                                      <td>ethan@gmail.com</td>
                                      <td>How this will connect with ethan</td>
                                      <td><span class="badge badge-danger">Pending</span> </td>
                                      <td>Andrew</td>
                                      <td>12-10-2018</td>
                                      <td>
                                          <a href="javascript:void(0)" class="text-danger" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>3124</td>
                                      <td>
                                          <a href="javascript:void(0)">Noah</a>
                                      </td>
                                      <td>noah@gmail.com</td>
                                      <td>How to set navigation</td>
                                      <td><span class="badge badge-success">Complete</span> </td>
                                      <td>Andrew</td>
                                      <td>12-10-2018</td>
                                      <td>
                                          <a href="javascript:void(0)" class="text-danger" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>1611</td>
                                      <td>
                                          <a href="javascript:void(0)">Sophia</a>
                                      </td>
                                      <td>sophia@gmail.com</td>
                                      <td>How to customize the template?</td>
                                      <td><span class="badge badge-warning">New</span> </td>
                                      <td>Elijah</td>
                                      <td>14-10-2018</td>
                                      <td>
                                          <a href="javascript:void(0)" class="text-danger" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>4224</td>
                                      <td>
                                          <a href="javascript:void(0)">William</a>
                                      </td>
                                      <td>william@gmail.com</td>
                                      <td>How to change colors</td>
                                      <td><span class="badge badge-success">Complete</span> </td>
                                      <td>Benjamin</td>
                                      <td>13-10-2018</td>
                                      <td>
                                          <a href="javascript:void(0)" class="text-danger" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>2524</td>
                                      <td>
                                          <a href="javascript:void(0)">Jayden</a>
                                      </td>
                                      <td>jayden@gmail.com</td>
                                      <td>How to set Horizontal nav</td>
                                      <td><span class="badge badge-success">Complete</span> </td>
                                      <td>Andrew</td>
                                      <td>13-10-2018</td>
                                      <td>
                                          <a href="javascript:void(0)" class="text-danger" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>7524</td>
                                      <td>
                                          <a href="javascript:void(0)">Ethan</a>
                                      </td>
                                      <td>ethan@gmail.com</td>
                                      <td>How this will connect with ethan</td>
                                      <td><span class="badge badge-danger">Pending</span> </td>
                                      <td>Andrew</td>
                                      <td>12-10-2018</td>
                                      <td>
                                          <a href="javascript:void(0)" class="text-danger" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>4124</td>
                                      <td>
                                          <a href="javascript:void(0)">Noah</a>
                                      </td>
                                      <td>noah@gmail.com</td>
                                      <td>How to set navigation</td>
                                      <td><span class="badge badge-success">Complete</span> </td>
                                      <td>Andrew</td>
                                      <td>12-10-2018</td>
                                      <td>
                                          <a href="javascript:void(0)" class="text-danger" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>1011</td>
                                      <td>
                                          <a href="javascript:void(0)">Mia</a>
                                      </td>
                                      <td>sophia@gmail.com</td>
                                      <td>How to customize the template?</td>
                                      <td><span class="badge badge-warning">New</span> </td>
                                      <td>Elijah</td>
                                      <td>14-10-2018</td>
                                      <td>
                                          <a href="javascript:void(0)" class="text-danger" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>1224</td>
                                      <td>
                                          <a href="javascript:void(0)">Chloe</a>
                                      </td>
                                      <td>william@gmail.com</td>
                                      <td>How to change colors</td>
                                      <td><span class="badge badge-success">Complete</span> </td>
                                      <td>Benjamin</td>
                                      <td>13-10-2018</td>
                                      <td>
                                          <a href="javascript:void(0)" class="text-danger" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>8024</td>
                                      <td>
                                          <a href="javascript:void(0)">Chloe</a>
                                      </td>
                                      <td>jayden@gmail.com</td>
                                      <td>How to set Horizontal nav</td>
                                      <td><span class="badge badge-success">Complete</span> </td>
                                      <td>Andrew</td>
                                      <td>13-10-2018</td>
                                      <td>
                                          <a href="javascript:void(0)" class="text-danger" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>5124</td>
                                      <td>
                                          <a href="javascript:void(0)">Ethan</a>
                                      </td>
                                      <td>ethan@gmail.com</td>
                                      <td>How this will connect with ethan</td>
                                      <td><span class="badge badge-danger">Pending</span> </td>
                                      <td>Andrew</td>
                                      <td>12-10-2018</td>
                                      <td>
                                          <a href="javascript:void(0)" class="text-danger" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>3144</td>
                                      <td>
                                          <a href="javascript:void(0)">Noah</a>
                                      </td>
                                      <td>noah@gmail.com</td>
                                      <td>How to set navigation</td>
                                      <td><span class="badge badge-success">Complete</span> </td>
                                      <td>Andrew</td>
                                      <td>12-10-2018</td>
                                      <td>
                                          <a href="javascript:void(0)" class="text-danger" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>1621</td>
                                      <td>
                                          <a href="javascript:void(0)">Sophia</a>
                                      </td>
                                      <td>sophia@gmail.com</td>
                                      <td>How to customize the template?</td>
                                      <td><span class="badge badge-warning">New</span> </td>
                                      <td>Elijah</td>
                                      <td>14-10-2018</td>
                                      <td>
                                          <a href="javascript:void(0)" class="text-danger" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>4724</td>
                                      <td>
                                          <a href="javascript:void(0)">William</a>
                                      </td>
                                      <td>william@gmail.com</td>
                                      <td>How to change colors</td>
                                      <td><span class="badge badge-success">Complete</span> </td>
                                      <td>Benjamin</td>
                                      <td>13-10-2018</td>
                                      <td>
                                          <a href="javascript:void(0)" class="text-danger" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>2594</td>
                                      <td>
                                          <a href="javascript:void(0)">Jayden</a>
                                      </td>
                                      <td>jayden@gmail.com</td>
                                      <td>How to set Horizontal nav</td>
                                      <td><span class="badge badge-success">Complete</span> </td>
                                      <td>Andrew</td>
                                      <td>13-10-2018</td>
                                      <td>
                                          <a href="javascript:void(0)" class="text-danger" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>7524</td>
                                      <td>
                                          <a href="javascript:void(0)">Ethan</a>
                                      </td>
                                      <td>ethan@gmail.com</td>
                                      <td>How this will connect with ethan</td>
                                      <td><span class="badge badge-danger">Pending</span> </td>
                                      <td>Andrew</td>
                                      <td>12-10-2018</td>
                                      <td>
                                          <a href="javascript:void(0)" class="text-danger" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>4124</td>
                                      <td>
                                          <a href="javascript:void(0)">Noah</a>
                                      </td>
                                      <td>noah@gmail.com</td>
                                      <td>How to set navigation</td>
                                      <td><span class="badge badge-success">Complete</span> </td>
                                      <td>Andrew</td>
                                      <td>12-10-2018</td>
                                      <td>
                                          <a href="javascript:void(0)" class="text-danger" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-12">				  	
                  <div class="box">
                    <div class="box-header with-border">
                      <h5 class="box-title">Tickets share per category</h5>
                      <div class="box-tools pull-right">
                          <ul class="card-controls">
                            <li class="dropdown">
                              <a data-toggle="dropdown" href="#"><i class="ion-android-more-vertical"></i></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item active" href="#">Today</a>
                                <a class="dropdown-item" href="#">Yesterday</a>
                                <a class="dropdown-item" href="#">Last week</a>
                                <a class="dropdown-item" href="#">Last month</a>
                              </div>
                            </li>
                            <li><a href="" class="link card-btn-reload" data-toggle="tooltip" title="" data-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
                          </ul>
                      </div>
                    </div>

                    <div class="box-body">
                      <div class="text-center pb-25">                  
                        <div class="donut" data-peity='{ "fill": ["#fc4b6c", "#ffb22b", "#398bf7"], "radius": 70, "innerRadius": 28  }' >9,6,5</div>
                      </div>

                      <ul class="list-inline">
                        <li class="flexbox mb-5">
                          <div>
                            <span class="badge badge-dot badge-lg mr-1" style="background-color: #fc4b6c"></span>
                            <span>Technical</span>
                          </div>
                          <div>8952</div>
                        </li>

                        <li class="flexbox mb-5">
                          <div>
                            <span class="badge badge-dot badge-lg mr-1" style="background-color: #ffb22b"></span>
                            <span>Accounts</span>
                          </div>
                          <div>7458</div>
                        </li>

                        <li class="flexbox">
                          <div>
                            <span class="badge badge-dot badge-lg mr-1" style="background-color: #398bf7"></span>
                            <span>Other</span>
                          </div>
                          <div>3254</div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-12">	
                  <div class="box">
                    <div class="box-header with-border">
                      <h5 class="box-title">Tickets share per agent</h5>

                      <div class="box-tools pull-right">
                          <ul class="card-controls">
                            <li class="dropdown">
                              <a data-toggle="dropdown" href="#"><i class="ion-android-more-vertical"></i></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item active" href="#">Today</a>
                                <a class="dropdown-item" href="#">Yesterday</a>
                                <a class="dropdown-item" href="#">Last week</a>
                                <a class="dropdown-item" href="#">Last month</a>
                              </div>
                            </li>
                            <li><a href="" class="link card-btn-reload" data-toggle="tooltip" title="" data-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
                          </ul>
                      </div>
                    </div>

                    <div class="box-body">
                      <div class="flexbox mt-10">
                          <div class="bar" data-peity='{ "fill": ["#666EE8", "#1E9FF2", "#28D094", "#FF4961", "#FF9149"], "height": 236, "width": 120, "padding":0.2 }'>952,558,1254,427,784</div>
                        <ul class="list-inline align-self-end text-muted text-right mb-0">
                          <li>Andrew <span class="badge badge-primary ml-2">154</span></li>
                          <li>Benjamin <span class="badge badge-info ml-2">154</span></li>
                          <li>Elijah <span class="badge badge-success ml-2">254</span></li>
                          <li>Chloe <span class="badge badge-danger ml-2">854</span></li>
                          <li>Daniel <span class="badge badge-warning ml-2">215</span></li>
                        </ul>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-12">
              <div class="col-12">
                <a class="box box-link-shadow text-center" href="javascript:void(0)">
                  <div class="box-body">
                      <div class="font-size-24">+264</div>
                      <span>Total Tickets</span>
                  </div>
                  <div class="box-body bg-info">
                      <p>
                          <span class="mdi mdi-ticket-confirmation font-size-30"></span>
                      </p>
                  </div>
                </a>
              </div>
              <div class="col-12">
                <a class="box box-link-shadow text-center" href="javascript:void(0)">
                  <div class="box-body">
                      <div class="font-size-24">175</div>
                      <span>Responded</span>
                  </div>
                  <div class="box-body bg-warning">
                      <p>
                          <span class="mdi mdi-message-reply-text font-size-30"></span>
                      </p>
                  </div>
                </a>
              </div>
              <div class="col-12">
                <a class="box box-link-shadow text-center" href="javascript:void(0)">
                  <div class="box-body">
                      <div class="font-size-24">110</div>
                      <span>Resolve</span>
                  </div>
                  <div class="box-body bg-success">
                      <p>
                          <span class="mdi mdi-thumb-up-outline font-size-30"></span>
                      </p>
                  </div>
                </a>
              </div>
              <div class="col-12">
                <a class="box box-link-shadow text-center" href="javascript:void(0)">
                  <div class="box-body">
                      <div class="font-size-24">59</div>
                      <span>Pending</span>
                  </div>
                  <div class="box-body bg-danger">
                      <p>
                          <span class="mdi mdi-ticket font-size-30"></span>
                      </p>
                  </div>
                </a>
              </div>								  
            </div>
          </div>
        <!-- /.row -->

      </section>

@endsection

@section('scripts')


<script src="{{ asset('admin/assets/vendor_components/popper/dist/popper.min.js') }}"></script>
	
<!-- Bootstrap 4.0-->
<script src="{{ asset('admin/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- This is data table -->
<script src="{{ asset('admin/assets/vendor_components/datatable/datatables.min.js') }}"></script>
<!-- VoiceX Admin for Data Table -->
<script src="{{ asset('admin/js/pages/data-table.js') }}"></script>
	
<!-- demo only -->
<script src="{{ asset('admin/js/pages/app-ticket.js') }}"></script>
@endsection