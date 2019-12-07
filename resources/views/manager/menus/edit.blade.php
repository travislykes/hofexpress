@extends('layouts.admin.dashboard')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/vendor_components/datatable/datatables.min.css') }}" />
@endsection
@section('content')

<section class="content">

    <div class="row">
        <div class="col-xl-4 col-lg-4 col-12">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Edit Menu</h4>
                        <h6 class="box-subtitle">Edit menu to <a class="text-warning" href="#">Restaurant {{ $my_restaurant->name ?? ''}} </a></h6>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form novalidate method="POST" action="{{ route('update.menu',[$menu->id]) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <h5>Name<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="name" class="form-control" required data-validation-required-message="This field is required" placeholder="Name" value="{{ $menu->name }}"> </div>

                                            </div>
                                            <div class="form-group">
                                                <h5>Description</h5>
                                                <div class="controls">
                                                    <textarea type="text" name="description" class="form-control" data-validation-required-message="This field is required" minlength="6" placeholder="Description">{{ $menu->description }}</textarea>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="text-xs-right">
                                        <button type="submit" class="btn btn-sm btn-success">Update</button>
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
                    <h4 class="box-title">All Our Menus</h4>
                    <h6 class="box-subtitle">List of all created menus</h6>
                </div>
                <div class="box-body p-15">
                    <div class="table-responsive">
                            <table id="tickets" class="table mt-0 table-hover no-wrap table-borderless" data-page-size="10">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($menus as $menu)
                                        <tr>
                                            <td>{{ $menu->name ?? '' }}</td>
                                            <td>{{ $menu->description ?? '' }}</td>
                                            <td>
                                                
                                                <a href="{{ route('restaurant.show',[$menu->id]) }}" class="text-success" data-toggle="tooltip" data-original-title="View"><i class="ti-eye" aria-hidden="true"></i></a>
                                                <a href="{{ route('admin.restaurant.edit',[$menu->id]) }}" class="text-primary" data-toggle="tooltip" data-original-title="Edit"><i class="ti-pencil" aria-hidden="true"></i></a>
                                                <form action="{{ route('admin.user.type.delete',[$menu->id])}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button onclick=" return confirm('Delete User Type {{ $menu->name }} ?')" class="text-danger" data-toggle="tooltip" data-original-title="Delete"  class="btn btn-sm btn-danger ml-2"><i class="ti-trash" aria-hidden="true"></i></button>
                                                </form>
                                                
                                            </td>
                                        </tr>
                                        @empty 
                                        <tr>
                                            <td>No Records Found</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        @endforelse
                                        
                                    </tbody>
                                </table>
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
{{-- <script src="{{ asset('admin/js/pages/app-ticket.js') }}"></script> --}}
@endsection