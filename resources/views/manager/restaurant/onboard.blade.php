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
                        <h4 class="box-title">Complete My Restaurants Profile</h4>
                        <h6 class="box-subtitle"><a class="text-warning" href="#">Hof Express </a></h6>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form novalidate method="POST" action="{{ route('res.complete',[$my_rest->id]) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <h5>Name<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="name" class="form-control" required data-validation-required-message="This field is required" placeholder="Name" value="{{ $my_rest->name }}"> </div>

                                            </div>
                                            <div class="form-group">
                                                <h5>Description</h5>
                                                <div class="controls">
                                                    <textarea type="text" name="description" class="form-control" data-validation-required-message="This field is required" minlength="6" placeholder="Description">{{ $my_rest->description }}</textarea>
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <h5>Location</h5>
                                                <div class="controls">
                                                    <input type="text" name="location" class="form-control" placeholder="Location" required value="{{ $my_rest->location }}">
                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <h5>Select Restaurant Type</h5>
                                                <div class="controls">
                                                    <select name="restaurant_type_id" class="form-control" required>
                                                        @forelse ($restaurantTypes as $item)
                                                        <option value="{{ $item->id}}" @if($my_rest->restaurant_type_id == $item->id ){{ 'selected' }} @endif>{{ $item->name}}</option>
                                                        @empty
                                                        <option value="">No record found</option>
                                                        @endforelse

                                                    </select>
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <h5>Restaurant Logo</h5>
                                                <div class="controls">
                                                    <input type="file" name="logo" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Cover Image</h5>
                                                <div class="controls">
                                                    <input type="file" name="cover_image" class="form-control" required>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="text-xs-right">
                                        <button type="submit" class="btn btn-md btn-success">Complete</button>
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