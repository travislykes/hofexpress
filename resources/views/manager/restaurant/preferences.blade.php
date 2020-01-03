@extends('layouts.admin.dashboard')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/vendor_components/datatable/datatables.min.css') }}" />
@endsection
@section('content')

<section class="content">

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">My Restaurant Settings</h4>
                        <h6 class="box-subtitle"><a class="text-warning" href="#">Hof Express </a></h6>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form novalidate method="POST" action="{{ route('res.pref.complete') }}" >
                                    @csrf
                                  <input value="{{ $rid }}" name="rid" type="hidden" required/>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <h5>Weekdays<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="weekdays" class="form-control" required data-validation-required-message="This field is required" placeholder="eg. 08:00 - 21:00 "> </div>

                                            </div>
                                            <div class="form-group">
                                                <h5>Weekends<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="weekends" class="form-control" required data-validation-required-message="This field is required" placeholder="eg. 09:00 - 20:00 "> </div>

                                            </div>
                                            <div class="form-group">
                                                <h5>Holidays<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="holidays" class="form-control" required data-validation-required-message="This field is required" placeholder="eg. 10:00 - 19:00 "> </div>

                                            </div>
                                            <div class="form-group">
                                                <h5>Delivery Fee</h5>
                                                <div class="controls">
                                                    <input type="number" name="delivery" class="form-control" placeholder="Delivery" required  step="0.01" min="0" value="0.00">
                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <h5>Reservations Allowed</h5>
                                                <div class="controls">
                                                    <select name="reservationsAllowed" class="form-control" required>
                                                        
                                                        <option value="no">No</option>
                                                        <option value="yes">Yes </option>
                                                    </select>
                                                </div>

                                            </div>
                                          
                                        </div>

                                    </div>

                                    <div class="text-xs-right">
                                        <button type="submit" class="btn btn-md btn-success">Submit</button>
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
        <div class="col-md-2"></div>

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
{{-- <script src="{{ asset('admin/js/pages/app-ticket.js') }}"></script> --}}
@endsection