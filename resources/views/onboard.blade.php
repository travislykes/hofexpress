@extends('layouts.frontend')

@section('styles')
<link href="{{ asset('css/skins/square/grey.css') }}" rel="stylesheet">
@endsection
@section('content')
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/sub_header_cart.jpg" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
        <div id="sub_content">
            <h1>Complete Your Profile</h1>
            <p>This will enable us serve you better</p>
            <p></p>
        </div><!-- End sub_content -->
    </div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

<div id="position">
    <div class="container">
        <ul>
            <li><a href="#0">My Account</a></li>
            <li><a href="#0">My Name</a></li>
            <li>Complete Profile </li>
        </ul>
        <a href="#0" class="search-overlay-menu-btn"><i class="icon-search-6"></i> Search</a>
    </div>
</div>
@if (session()->has('message'))
<div class="container margin_60_35">
    <div class="col-md-6 col-md-offset-3">
        <div class="box_style_2 nomargin">
            <div class="row">
                <div class="col-md-12">

                    <!-- Headings & Paragraph Copy -->
                    <h4 class="nomargin_top">Account Setup Complete</h4>
                    <p><strong>{{ session('message') }}</strong></p>
                    <p>Your account has been created and undergoing a review<br>
                    You will be contacted once your account has been verified</p>
                    <p> For more information write us at <a href="mailto:hofexpress@hof-university.de">hofexpress@hof-university.de</a></p>
                    <br>

                </div>
            </div><!-- Edn row -->
          <hr>

        </div>
    </div>
</div>
@endif
<div class="container margin_60">
    <div class="main_title margin_mobile">
        <h2 class="nomargin_top"></h2>
        <p>
            Please submit the form below
        </p>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="{{ route('onboard.submit') }}" method="POST">
                @csrf
                
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label>Phone number* :</label>
                            <input type="text" id="phone_contact" name="phonenumber" class="form-control" placeholder="01515435435" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label>Occupation:</label>
                            <input type="text" id="occupation" name="occupation" class="form-control " placeholder="Occupation">
                        </div>
                    </div>
                </div>
               
                <h6><em>Where Do you want Us To Deliver Your Food ?</em></h6>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label>Location Description</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="eg. Office/Home etc" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label>Street Name</label>
                            <input type="text" class="form-control" id="street" name="street" placeholder="eg. Vorstdat" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>House Number</label>
                            <input type="text" id="restaurant" name="houseNumber" class="form-control" placeholder="eg Vorstdat 1" required>
                        </div>
                    </div>
                    
                </div><!-- End row  -->
                
                {{-- <div id="pass-info" class="clearfix"></div> --}}
                {{-- <div class="row">
                    <div class="col-md-6">
                        <label><input name="mobile" type="checkbox" value="" class="icheck" checked>Accept <a href="#0">terms and conditions</a>.</label>
                    </div>
                </div><!-- End row  --> --}}
                <hr style="border-color:#ddd;">
                <div class="text-center"><button class="btn_full_outline">Submit</button></div>
            </form>
        </div><!-- End col  -->
    </div><!-- End row  -->
</div>
<!-- End container -->




@endsection
