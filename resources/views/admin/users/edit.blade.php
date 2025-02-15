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
                        <h4 class="box-title">Edit User</h4>
                        <h6 class="box-subtitle">{{ ucfirst($user->firstname) }}<a class="text-warning" href="#">Hof Express </a></h6>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form novalidate method="POST" action="{{ route('admin.update.user',[$user->id]) }}">
                                    @method('PUT')
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <h5>Firstname<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="firstname" class="form-control" required data-validation-required-message="This field is required" placeholder="Firstname" value="{{ $user->firstname }}"> </div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <h5>Lastname<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="lastname" class="form-control" required data-validation-required-message="This field is required" placeholder="Lastname" value="{{ $user->lastname }}"> </div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <h5>Email<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="email" name="email" class="form-control" required data-validation-required-message="This field is required" placeholder="Email" value="{{ $user->email }}"> </div>
                                                
                                            </div>
                                             <div class="form-group">
                                                <h5>User Type</h5>
                                                <div class="controls">
                                                    <select type="text" name="user_type_id" class="form-control">
                                                        <option value="">Select One</option>
                                                        @forelse($usertypes as $ut)
                                                        <option value="{{ $ut->id }}" @if($user->user_type_id == $ut->id ) {{ 'selected'  }} @endif>{{ $ut->name }}</option>
                                                        @empty 
                                                        <option value="">No Record Found</option>
                                                        @endforelse
                                                    </select>
                                                </div>
                                                
                                            </div>
                                            @if($user->userType->name == 'Manager')
                                            <div class="form-group">
                                                <h5>Ownership Verified</h5>
                                                <div class="controls">
                                                    <select type="text" name="ownership_verified" class="form-control">
                                                       
                                                       
                                                        <option value="no" @if($user->ownership_verified == "no" ) {{ 'selected' }} @endif>No</option>
                                                        <option value="yes" @if($user->ownership_verified == "yes" ) {{ 'selected' }} @endif>Yes</option>
                                                       
                                                       
                                                    </select>
                                                </div>
                                                
                                            </div>
                                           @endif
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
                    <h4 class="box-title">{{ $user->firstname ?? '' }} </h4>
                    <h6 class="box-subtitle">List of all user accounts</h6>
                </div>
                <div class="box-body p-15">
                    <div class="table-responsive">
                        <table id="tickets" class="table mt-0 table-hover no-wrap table-borderless" data-page-size="10">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>User Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($users as $user)
                                <tr>
                                    <td>{{ $user->firstname ?? '' }} {{ $user->lastname ?? '' }}</td>
                                    <td>{{ $user->email ?? '' }}</td>
                                    <td>{{ $user->userType->name ?? '' }} <br>@if($user->userType->name == 'Manager') <em>verified:</em> {{ strtoupper($user->ownership_verified) }} @endif</td>
                                    <td>
                                        <a href="{{ route('admin.edit.user',[$user->id]) }}" class="text-primary" data-toggle="tooltip" data-original-title="Edit"><i class="ti-pencil" aria-hidden="true"></i></a>
                                        <form action="{{ route('admin.user.delete',[$user->id])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick=" return confirm('Delete User {{ $user->firstname }} ?')" class="text-danger" data-toggle="tooltip" data-original-title="Delete"  class="btn btn-sm btn-danger ml-2"><i class="ti-trash" aria-hidden="true"></i></button>
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
