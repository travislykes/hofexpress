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
                        <h4 class="box-title">Create User Type</h4>
                        <h6 class="box-subtitle">Roles Assigned On Site <a class="text-warning" href="#">Hof Express </a></h6>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form novalidate method="POST" action="{{ route('admin.user.types.store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <h5>Name<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="name" class="form-control" required data-validation-required-message="This field is required" placeholder="Name"> </div>
                                                
                                            </div>
                                             <div class="form-group">
                                                <h5>Description</h5>
                                                <div class="controls">
                                                    <textarea type="text" name="description" class="form-control"  data-validation-required-message="This field is required" minlength="6" placeholder="Description"></textarea>
                                                </div>
                                                
                                            </div>
                                           
                                        </div>
                                        
                                    </div>
                                   
                                    <div class="text-xs-right">
                                        <button type="submit" class="btn btn-sm btn-info">Submit</button>
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
                    <h4 class="box-title">Supported User Types</h4>
                    <h6 class="box-subtitle">List of all created user types</h6>
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
                                @forelse($usertypes as $usertype)
                                <tr>
                                    <td>{{ $usertype->name ?? '' }}</td>
                                    <td>{{ $usertype->description ?? '' }}</td>
                                    <td>
                                        <a href="javascript:void(0)" class="text-primary" data-toggle="tooltip" data-original-title="Edit"><i class="ti-pencil" aria-hidden="true"></i></a>
                                        <form action="{{ route('admin.user.type.delete',[$usertype->id])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick=" return confirm('Delete User Type {{ $usertype->name }} ?')" class="text-danger" data-toggle="tooltip" data-original-title="Delete"  class="btn btn-sm btn-danger ml-2"><i class="ti-trash" aria-hidden="true"></i></button>
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
