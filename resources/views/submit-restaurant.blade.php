@extends('layouts.frontend')

@section('styles')
<link href="{{ asset('css/skins/square/grey.css') }}" rel="stylesheet">
@endsection
@section('content')
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="{{ asset('img/restaurant.jpg') }}" data-natural-width="1400" data-natural-height="">
    <div id="subheader">
        <div id="sub_content">
            <h1>Register Your Restaurant</h1>
            <p>Get Access To 1000's of Customers In Hof.</p>
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
            <li>Restaurant Submission</li>
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
                    <h4 class="nomargin_top">Account Awaiting Approval</h4>
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
        <h2 class="nomargin_top">Please submit the form below</h2>
        <p>
           All fields are required
        </p>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="{{ route('save.restaurant') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label>First name</label>
                            <input type="text" class="form-control" id="name_contact" name="firstname" placeholder="Hans" required>
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
                            <input type="email" id="email_contact" name="email" class="form-control " placeholder="jhon@email.com" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label>Phone number:</label>
                            <input type="text" id="phone_contact" name="phonenumber" class="form-control" placeholder="01515435435" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Restaurant name</label>
                            <input type="text" id="restaurant" name="restaurant_name" class="form-control" placeholder="Pizza King" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Location</label>
                            <input type="text" id="restaurant_web" name="restaurant_location" class="form-control" placeholder="" required>
                        </div>
                    </div>
                </div><!-- End row  -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" id="restaurant_description" name="restaurant_description" class="form-control" placeholder="Brief Info" required ></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Restaurant Type</label>
                            <select id="restaurant_type_id" name="restaurant_type_id" class="form-control" placeholder="">
                                <option value="">Select One</option>
                                @forelse($restaurant_types as $restaurant)
                                <option value="{{ $restaurant->id }}">{{ $restaurant->name }}</option>
                                @empty
                                <option value="">No Record Available</option>
                                @endforelse
                            </select>
                        </div>
                    </div>
                </div><!-- End row  -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Create a password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" id="password1">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Confirm password</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password" id="password2">
                        </div>
                    </div>
                </div><!-- End row  -->
                <div id="pass-info" class="clearfix"></div>
                <div class="row">
                    <div class="col-md-6">
                        <label><input name="mobile" type="checkbox" value="" class="icheck" checked>Accept <a href="#0">terms and conditions</a>.</label>
                    </div>
                </div><!-- End row  -->
                <hr style="border-color:#ddd;">
                <div class="text-center"><button class="btn_full_outline">Submit</button></div>
            </form>
        </div><!-- End col  -->
    </div><!-- End row  -->
</div>
<div class="container margin_60_35">
    <div class="main_title margin_mobile">
        <h2 class="nomargin_top">Increase your customers</h2>
        <p>
            Cum doctus civibus efficiantur in imperdiet deterruisset.
        </p>
    </div>
    <div class="row">
        <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
            <div class="feature">
                <i class="icon_datareport"></i>
                <h3><span>Increase</span> your sales</h3>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                </p>
            </div>
        </div>
        <div class="col-md-6 wow fadeIn" data-wow-delay="0.2s">
            <div class="feature">
                <i class="icon_chat_alt"></i>
                <h3><span>H24</span> chat support</h3>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                </p>
            </div>
        </div>
    </div><!-- End row -->
    <div class="row">
        <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
            <div class="feature">
                <i class="icon_bag_alt"></i>
                <h3><span>Delivery</span> or Takeaway</h3>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                </p>
            </div>
        </div>
        <div class="col-md-6 wow fadeIn" data-wow-delay="0.4s">
            <div class="feature">
                <i class="icon_mobile"></i>
                <h3><span>Mobile</span> support</h3>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                </p>
            </div>
        </div>
    </div><!-- End row -->
    <div class="row">
        <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="feature">
                <i class="icon_wallet"></i>
                <h3><span>Cash</span> payment</h3>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                </p>
            </div>
        </div>
        <div class="col-md-6 wow fadeIn" data-wow-delay="0.6s">
            <div class="feature">
                <i class="icon_creditcard"></i>
                <h3><span>Secure card</span> payment</h3>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                </p>
            </div>
        </div>
    </div><!-- End row -->
</div><!-- End container -->




@endsection
