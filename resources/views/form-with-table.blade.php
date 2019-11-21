@extends('layouts.admin.dashboard')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/vendor_components/datatable/datatables.min.css') }}"/>
@endsection
@section('content')

<section class="content">

        <div class="row">
                <div class="col-xl-4 col-lg-4 col-12">
                        <div class="col-12">
                                <div class="box">
                                        <div class="box-header with-border">
                                          <h4 class="box-title">Form Validation</h4>
                                          <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                          <div class="row">
                                            <div class="col">
                                                <form novalidate>
                                                  <div class="row">
                                                    <div class="col-12">						
                                                        <div class="form-group">
                                                            <h5>Basic Text Input <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required"> </div>
                                                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <h5>Email Field <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="email" name="email" class="form-control" required data-validation-required-message="This field is required"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <h5>Password Input Field <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="password" name="password" class="form-control" required data-validation-required-message="This field is required"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <h5>Repeat Password Input Field <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="password" name="password2" data-validation-match-match="password" class="form-control" required> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <h5>File Input Field <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="file" name="file" class="form-control" required> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <h5>Input with Icon <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" placeholder="Addon To Right" data-validation-required-message="This field is required"> <span class="input-group-addon" id="basic-addon1"><i class="fa fa-dollar"></i></span> </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <h5>Maximum Character Length <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="maxChar" class="form-control" required data-validation-required-message="This field is required" maxlength="10">
                                                            </div>
                                                            <div class="form-control-feedback"><small>Add <code>maxlength='10'</code> attribute for maximum number of characters to accept. </small></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <h5>Minimum Character Length <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="minChar" class="form-control" required data-validation-required-message="This field is required" minlength="6">
                                                            </div>
                                                            <div class="form-control-feedback"><small>Add <code>minlength="6"</code> attribute for minimum number of characters to accept.</small></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <h5>Only Numbers <span class="text-danger">*</span></h5>
                                                            <div class="input-group"> <span class="input-group-addon">$</span>
                                                                <input type="number" name="onlyNum" class="form-control" required data-validation-required-message="This field is required"> <span class="input-group-addon">.00</span> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <h5>Maximum Number <span class="text-danger">*</span></h5>
                                                            <input type="number" name="maxNum" class="form-control" required data-validation-required-message="This field is required" max="25">
                                                            <div class="form-control-feedback"> <small><i>Must be lower than 25</i></small> - <small>Add <code>max</code> attribute for maximum number to accept. Also use <code>data-validation-max-message</code> attribute for max failure message</small> </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <h5>Minimum Number <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="number" name="minNum" class="form-control" required data-validation-required-message="This field is required" min="10">
                                                            </div>
                                                            <div class="form-control-feedback"><small><i>Must be higher than 10</i></small> - <small>Add <code>min</code> attribute for minimum number to accept. Also use <code>data-validation-min-message</code> attribute for min failure message</small></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <h5>Text Input Range <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required" minlength="10" maxlength="20" placeholder="Enter number between 10 &amp; 20"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <h5>Input with Button <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" placeholder="Search" required> 
                                                                    <span class="input-group-append">
                                                                      <button class="btn btn-info btn-sm" type="button">Go!</button>
                                                                    </span> </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <h5>No Characters, Only Numbers <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="noChar" class="form-control" required data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="No Characters Allowed, Only Numbers"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <h5>Pattern <span class="text-danger">*</span> <small><i>Must start with 'a' and end with 'z'</i></small></h5>
                                                            <div class="controls">
                                                                <input type="text" name="pattern" pattern="a.*z" data-validation-pattern-message="Must start with 'a' and end with 'z'" class="form-control" required>
                                                                <div class="form-control-feedback"><small>Add <code>pattern</code> attribute to set input pattern. Also use <code>data-validation-pattern-message</code> attribute for pattern failure message</small></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <h5>Enter URL <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" class="form-control" placeholder="Add URL" data-validation-regex-regex="((http[s]?|ftp[s]?):\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*" data-validation-regex-message="Only Valid URL's">
                                                                <div class="form-control-feedback"><small>Add <code>data-validation-regex-regex</code> attribute for regular expression. Also use <code>data-validation-regex-message</code> attribute for regex failure message</small></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <h5>Enter Email Address <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" class="form-control" placeholder="Email Address" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" data-validation-regex-message="Enter Valid Email"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <h5>Enter Date <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="date" name="date" class="form-control" required data-validation-required-message="This field is required"> </div>
                                                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                            
                                                        </div>
                                                        <div class="form-group">
                                                            <h5>Basic Select <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <select name="select" id="select" required class="form-control">
                                                                    <option value="">Select Your City</option>
                                                                    <option value="1">India</option>
                                                                    <option value="2">USA</option>
                                                                    <option value="3">UK</option>
                                                                    <option value="4">Canada</option>
                                                                    <option value="5">Dubai</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <h5>Textarea <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <textarea name="textarea" id="textarea" class="form-control" required placeholder="Textarea text"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <h5>Checkbox <span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <input type="checkbox" id="checkbox_1" required value="single">
                                                                    <label for="checkbox_1">Check this custom checkbox</label>
                                                                </div>								
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <h5>Checkbox Group <span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <fieldset>
                                                                        <input type="checkbox" id="checkbox_2" required value="x">
                                                                        <label for="checkbox_2">I am unchecked Checkbox</label>
                                                                    </fieldset>
                                                                    <fieldset>
                                                                        <input type="checkbox" id="checkbox_3" value="y">
                                                                        <label for="checkbox_3">I am unchecked too</label>
                                                                    </fieldset>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <h5>Select Max 2 Checkbox<span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <fieldset>
                                                                        <input type="checkbox" id="checkbox_4" data-validation-maxchecked-maxchecked="2" data-validation-maxchecked-message="Don't be greedy!" required>
                                                                        <label for="checkbox_4">I am unchecked Checkbox</label>
                                                                    </fieldset>
                                                                    <fieldset>
                                                                        <input type="checkbox" id="checkbox_5">
                                                                        <label for="checkbox_5">I am unchecked too</label>
                                                                    </fieldset>
                                                                    <fieldset>
                                                                        <input type="checkbox" id="checkbox_6">
                                                                        <label for="checkbox_6">You can check me</label>
                                                                    </fieldset>
                                                                </div> <small>Select any 2 options</small> </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <h5>Minimum 2 Checkbox selection<span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <fieldset>
                                                                        <input type="checkbox" id="checkbox_7" value="1" data-validation-minchecked-minchecked="2" data-validation-minchecked-message="Choose at least two" name="styled_min_checkbox" required>
                                                                        <label for="checkbox_7">I am unchecked Checkbox</label>
                                                                    </fieldset>
                                                                    <fieldset>
                                                                        <input type="checkbox" id="checkbox_8" value="2">
                                                                        <label for="checkbox_8">I am unchecked too</label>
                                                                    </fieldset>
                                                                    <fieldset>
                                                                        <input type="checkbox" id="checkbox_9" value="3">
                                                                        <label for="checkbox_9">You can check me</label>
                                                                    </fieldset>
                                                                </div> <small>Select any 2 options</small> </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <h5>Radio Buttons <span class="text-danger">*</span></h5>
                                                                <fieldset class="controls">
                                                                    <input name="group1" type="radio" id="radio_1" value="1" required>
                                                                    <label for="radio_1">Check Me</label>
                                                                </fieldset>
                                                                <fieldset>
                                                                    <input name="group1" type="radio" id="radio_2" value="2">
                                                                    <label for="radio_2">Or Me</label>									
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <h5>Inline Radio Buttons <span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <fieldset>
                                                                        <input name="group2" type="radio" id="radio_3" value="Yes" required>
                                                                        <label for="radio_3">Check Me</label>
                                                                    </fieldset>
                                                                    <fieldset>
                                                                        <input name="group2" type="radio" id="radio_4" value="No">
                                                                        <label for="radio_4">Or Me</label>
                                                                    </fieldset>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-xs-right">
                                                        <button type="submit" class="btn btn-rounded btn-info">Submit</button>
                                                    </div>
                                                </form>
                            
                                            </div>
                                            <!-- /.col -->
                                          </div>
                                          <!-- /.row -->
                                        </div>
                                        <!-- /.box-body -->
                                      </div>
                        </div>
                        								  
                      </div>
            <div class="col-xl-8 col-lg-8 col-12">
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
            
          </div>
        <!-- /.row -->

      </section>

@endsection

@section('scripts')


<script src="{{ asset('admin/assets/vendor_components/popper/dist/popper.min.js') }}"></script>


<script src="{{ asset('admin/js/pages/validation.js') }}"></script>
<script src="{{ asset('admin/js/pages/form-validation.js') }}"></script>
	
<!-- Bootstrap 4.0-->
<script src="{{ asset('admin/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- This is data table -->
<script src="{{ asset('admin/assets/vendor_components/datatable/datatables.min.js') }}"></script>
<!-- VoiceX Admin for Data Table -->
<script src="{{ asset('admin/js/pages/data-table.js') }}"></script>
	
<!-- demo only -->
<script src="{{ asset('admin/js/pages/app-ticket.js') }}"></script>
@endsection