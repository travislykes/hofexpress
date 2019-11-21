@extends('layouts.admin.dashboard')

@section('content')

<section class="content">
    <div class="callout callout-info">
      <h4>Tip!</h4>

      <p>Add the fixed class to the body tag to get this layout. The fixed layout is your best option if your sidebar is bigger than your content because it prevents extra unwanted scrolling.</p>
    </div>
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h4 class="box-title">Title</h4>
      </div>
      <div class="box-body">
        Start creating your amazing application!
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        Footer
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->
  </section>

@endsection