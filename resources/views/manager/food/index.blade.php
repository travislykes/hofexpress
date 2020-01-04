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
                        <h4 class="box-title">Add New Food</h4>
                        {{-- <h6 class="box-subtitle">New menu to <a class="text-warning" href="#">Restaurant {{ $my_restaurant->name ?? ''}} </a></h6> --}}
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form novalidate method="POST" action="{{ route('food.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <input value="{{ $rid }}" name="rid" type="hidden" required/>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <h5>Name<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="name" class="form-control" required data-validation-required-message="This field is required" placeholder="Name"> </div>

                                            </div>
                                            <div class="form-group">
                                                <h5>Food Image</h5>
                                                <div class="controls">
                                                    <input type="file" name="image" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5> Price</h5>
                                                <div class="controls">
                                                    <input type="number" name="price" class="form-control" placeholder="Price" required  step="0.01" min="1">
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <h5> Menu </h5>
                                                <div class="controls">
                                                    <select name="menu_id" class="form-control" required>
                                                        @forelse ($menu as $item)
                                                        <option value="{{ $item->id}}">{{ $item->name}}</option>
                                                        @empty
                                                        <option value="">No record found</option>
                                                        @endforelse
        
                                                    </select>
                                                </div>
        
                                            </div>
                                            <div class="form-group">
                                                <h5>Description</h5>
                                                <div class="controls">
                                                    <textarea type="text" name="description" class="form-control" data-validation-required-message="This field is required" minlength="3" placeholder="Description"></textarea>
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
                    <h4 class="box-title">All Our Foods</h4>
                    <h6 class="box-subtitle">List of all created foods</h6>
                </div>
                <div class="box-body p-15">
                    <div class="table-responsive">
                            <table id="tickets" class="table mt-0 table-hover no-wrap table-borderless" data-page-size="10">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($foods as $food)
                                        <tr>
                                            <td>{{ $food->name ?? '' }}</td>
                                            <td><div class="thumbnail"><img src="{{ asset('restaurant/food') }}/{{ $food->image }}" width="120"/></div></td>
                                            <td>{{ number_format($food->price,2) }}</td>
                                            <td>{{ $food->description ?? '' }}</td>
                                            <td>
                                                
                                                {{-- <a href="{{ route('restaurant.show',[$menu->id]) }}" class="text-success" data-toggle="tooltip" data-original-title="View"><i class="ti-eye" aria-hidden="true"></i></a> --}}
                                                <a href="#" class="text-primary" data-toggle="tooltip" data-original-title="Edit"><i class="ti-pencil" aria-hidden="true"></i></a>
                                                <form action="#" method="POST">
                                                {{-- @csrf
                                                @method('DELETE') --}}
                                                <button onclick=" return confirm('Delete Food {{ $food->name }} ?')" class="text-danger" data-toggle="tooltip" data-original-title="Delete"  class="btn btn-sm btn-danger ml-2"><i class="ti-trash" aria-hidden="true"></i></button>
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