@extends('layouts.frontend')

@section('styles')
<link href="{{ asset('css/skins/square/grey.css') }}" rel="stylesheet">
@endsection
@section('content')
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="{{ asset('img/rider2.jpg') }}" data-natural-width="1400" data-natural-height="">
    <div id="subheader">
        <div id="sub_content">
            <h1>Rider Sign Up</h1>
            <p>become a rider for hofexpress</p>
            <p></p>
        </div><!-- End sub_content -->
    </div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

<div id="position">
    <div class="container">
        <ul>
            <li><a href="#0">Home</a></li>
            <li><a href="#0">Work With Us</a></li>
            <li>Rider Sign Up</li>
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
                    <h4 class="nomargin_top">Rider Form Submitted</h4>
                    <p><strong>{{ session('message') }}</strong></p>
                    <p>Your form has been submitted<br>
                        You will be contacted once your account has been reviewed</p>
                    <p> For more information write us at <a href="mailto:hofexpress@hof-university.de">hofexpress-delivery@hof-university.de</a></p>
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
        <h2 class="nomargin_top">Please submit the form below</h2>
        <p>
            All fields are required
        </p>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form method="POST" action="{{ route('save.rider') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label>First name</label>
                            <input type="text" class="form-control" id="name_contact" name="firstname" placeholder="Jhon" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label>Last name</label>
                            <input type="text" class="form-control" id="lastname_contact" name="lastname" placeholder="Doe" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" id="email_contact" name="email" class="form-control" placeholder="jhon@email.com" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label>Phone number:</label>
                            <input type="text" id="phone_contact" name="phonenumber" class="form-control" placeholder="00 44 5435435" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5>Do you have a motorbike, bicycle or scooter?</h5>
                            <label><input name="motor" type="radio" value="" class="icheck" checked required>Yes</label>
                            <label class="margin_left"><input name="motor" type="radio" value="" class="icheck">No</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5>Are you a student?</h5>
                            <label><input name="student" type="radio" value="" class="icheck" checked required>Yes</label>
                            <label class="margin_left"><input name="student" type="radio" value="" class="icheck">No</label>
                        </div>
                    </div>
                </div><!-- End row  -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5>Do you have a driving license?</h5>
                            <label><input name="license" type="radio" value="" class="icheck" checked required>Yes</label>
                            <label class="margin_left"><input name="license" type="radio" value="" class="icheck">No</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5>Do you have an iPhone or Android mobile?</h5>
                            <label><input name="mobile" type="radio" value="" class="icheck" checked required>Yes</label>
                            <label class="margin_left"><input name="mobile" type="radio" value="" class="icheck">No</label>
                        </div>
                    </div>
                </div><!-- End row  -->
                <hr style="border-color:#ddd;">
                <div class="text-center"><button class="btn_full_outline">Submit</button></div>
            </form>
        </div><!-- End col  -->
    </div><!-- End row  -->
</div><!-- End container  -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 nopadding features-intro-img">
            <div class="features-bg img_2">
                <div class="features-img">
                </div>
            </div>
        </div>
        <div class="col-md-6 nopadding">
            <div class="features-content">
                <h3>"What you'll need"</h3>
                <ul class="list_ok">
                    <li>A bicycle or scooter/motorbike with relevant safety equipment (road safety is a huge must for us!).</li>
                    <li>Smartphone - iPhone 4s or above or Android 4.3 or above.</li>
                    <li>The right to work in the Germany.</li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- End container-fluid  -->



@endsection
