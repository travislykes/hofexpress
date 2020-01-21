@extends('layouts.frontend')

@section('styles')
<link href="{{ asset('css/skins/square/grey.css') }}" rel="stylesheet">
<link href="{{ asset('css/admin.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/dropzone.css') }}" rel="stylesheet">
@endsection
@section('content')
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="{{ asset("img/sub_header_cart.jpg") }}" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
        <div id="sub_content">
            <h1>My Account</h1>
            <p>Manage Orders, Profile &amp; Locations</p>
            <p></p>
        </div><!-- End sub_content -->
    </div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

<div id="position">
    <div class="container">
        <ul>
            <li><a href="#0">My Account</a></li>
            <li>Profile</li>
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
                    <h4 class="nomargin_top">Profile Created Successfullyy</h4>
                    <p><strong>{{ session('message') }}</strong></p>
                    <p>Your account has been created and can now<br>
                    manage your profile and locations in this view <br> Refresh page to delete this message</p>
                    <p> For more information write us at <a href="mailto:hofexpress@hof-university.de">hofexpress@hof-university.de</a></p>
                    <br>

                </div>
            </div><!-- Edn row -->
          <hr>

        </div>
    </div>
</div>
@endif
<!-- Content ================================================== -->
<div class="container margin_60">
    <div id="tabs" class="tabs">
        <nav>
            <ul>
                <li><a href="#section-1" class="icon-profile"><span>Main info</span></a>
                </li>
                <li><a href="#section-2" class="icon-menut-items"><span>My Orders</span></a>
                </li>
                <li><a href="#section-3" class="icon-settings"><span>Edit Info</span></a>
                </li>
            </ul>
        </nav>
        <div class="content">

            <section id="section-1">
                <div class="indent_title_in">
                    <i class="icon_house_alt"></i>
                    <h3>General info</h3>
                    {{-- <p>Partem diceret praesent mel et, vis facilis alienum antiopam ea, vim in sumo diam sonet. Illud ignota cum te, decore elaboraret nec ea. Quo ei graeci repudiare definitionem. Vim et malorum ornatus assentior, exerci elaboraret eum ut, diam meliore no mel.</p> --}}
                </div>

                <div class="wrapper_indent">
                    <table class="table table-striped">
                       
                        <tbody>
                          <tr>
                            <td>Full Name</td>
                            <td>{{ Auth::user()->firstname. ' ' .Auth::user()->lastname }}</td>
                         </tr>
                         <tr>
                            <td>Email</td>
                            <td>{{ Auth::user()->email }}</td>
                          
                          </tr>
                          <tr>
                            <td>Phone Number</td>
                            <td>{{ Auth::user()->profile->phonenumber ?? 'N/A' }}</td>
                          
                          </tr>
                          <tr>
                            <td>Address</td>
                           
                            <td> @forelse(Auth::user()->locations as $loc) {{ $loc->name }} | {{ $loc->houseNumber }} | {{ $loc->street }},
                                @empty 
                                N/A 
                                @endforelse
                            </td>
                           
                           
                           
                          
                          </tr>
                          <tr>
                            <td>Gender</td>
                            <td>{{ Auth::user()->profile->gender ?? 'N/A' }}</td>
                          
                          </tr>
                          <tr>
                            <td>Account Type</td>
                            <td>{{ Auth::user()->userType->name ?? '' }}</td>
                          
                          </tr>
                          <tr>
                            <td>Occupation</td>
                            <td>{{ Auth::user()->profile->occupation ?? 'N/A' }}</td>
                          
                          </tr>
                          <tr>
                            <td>Created At</td>
                            <td>{{ Auth::user()->created_at ?? 'N/A' }}</td>
                          
                          </tr>
                          
                          
                        </tbody>
                    </table>
                   
                </div><!-- End wrapper_indent -->

            </section><!-- End section 1 -->

            <section id="section-2">
                
                
            </section><!-- End section 2 -->

            <section id="section-3">

                <div class="row">
                
                    <div class="col-md-6 col-sm-6 add_bottom_15">
                        <div class="indent_title_in">
                            <i class="icon_lock_alt"></i>
                            <h3>Change your password</h3>
                            <p>
                                Leave empty to maintain old password
                            </p>
                        </div>
                        <div class="wrapper_indent">
                            <div class="form-group">
                                <label>Old password</label>
                                <input class="form-control" name="old_password" id="old_password" type="password">
                            </div>
                            <div class="form-group">
                                <label>New password</label>
                                <input class="form-control" name="new_password" id="new_password" type="password">
                            </div>
                            <div class="form-group">
                                <label>Confirm new password</label>
                                <input class="form-control" name="confirm_new_password" id="confirm_new_password" type="password">
                            </div>
                            <button type="submit" class="btn_1 green">Update Password</button>
                        </div><!-- End wrapper_indent -->
                    </div>
                    
                    <div class="col-md-6 col-sm-6 add_bottom_15">
                        <div class="indent_title_in">
                            <i class="icon_mail_alt"></i>
                            <h3>Change your email</h3>
                            <p>
                                Update details
                            </p>
                        </div>
                        <div class="wrapper_indent">
                            <div class="form-group">
                                <label>Old email</label>
                                <input class="form-control" name="old_email" id="old_email" type="email">
                            </div>
                            <div class="form-group">
                                <label>New email</label>
                                <input class="form-control" name="new_email" id="new_email" type="email">
                            </div>
                            <div class="form-group">
                                <label>Confirm new email</label>
                                <input class="form-control" name="confirm_new_email" id="confirm_new_email" type="email">
                            </div>
                            <button type="submit" class="btn_1 green">Update Email</button>
                        </div><!-- End wrapper_indent -->
                    </div>
                    
                </div><!-- End row -->

                <hr class="styled_2">

                <div class="indent_title_in">
                    <i class="icon_pin_alt"></i>
                    <h3>Address</h3>
                    <p>
                        Mussum ipsum cacilds, vidis litro abertis.
                    </p>
                    
                </div>
                <div class="wrapper_indent">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Country</label>
                                <select class="form-control" name="country" id="country">
                                    <option value="" selected>Select your country</option>
                                    <option value="Europe">Europe</option>
                                    <option value="United states">United states</option>
                                    <option value="Asia">Asia</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Street line 1</label>
                                <input type="text" id="street_1" name="street_1" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Street line 2</label>
                                <input type="text" id="street_2" name="street_2" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" id="city_booking" name="city_booking" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>State</label>
                                <input type="text" id="state_booking" name="state_booking" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Postal code</label>
                                <input type="text" id="postal_code" name="postal_code" class="form-control">
                            </div>
                        </div>
                    </div><!--End row -->
                </div><!-- End wrapper_indent -->
                <hr class="styled_2">
                
                {{-- <div class="indent_title_in">
                    <i class="icon_shield"></i>
                    <h3>Notification settings</h3>
                    <p>
                        Mussum ipsum cacilds, vidis litro abertis.
                    </p>
                </div>
                <div class="row">
                
                    <div class="col-md-6 col-sm-6">
                        <div class="wrapper_indent">
                            <table class="table table-striped notifications">
                                <tbody>
                                    <tr>
                                        <td style="width:5%">
                                            <i class="icon_pencil-edit_alt"></i>
                                        </td>
                                        <td style="width:65%">
                                            New orders
                                        </td>
                                        <td style="width:35%">
                                            <label>
                                                <input type="checkbox" name="option_1_settings" checked class="icheck" value="yes">Yes</label>
                                            <label class="margin_left">
                                                <input type="checkbox" name="option_1_settings" class="icheck" value="no">No</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="icon_pencil-edit_alt"></i>
                                        </td>
                                        <td>
                                            Modified orders
                                        </td>
                                        <td>
                                            <label>
                                                <input type="checkbox" name="option_2_settings" checked class="icheck" value="yes">Yes</label>
                                            <label class="margin_left">
                                                <input type="checkbox" name="option_2_settings" class="icheck" value="no">No</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="icon_pencil-edit_alt"></i>
                                        </td>
                                        <td>
                                            New user registration
                                        </td>
                                        <td>
                                            <label>
                                                <input type="checkbox" name="option_3_settings" checked class="icheck" value="yes">Yes</label>
                                            <label class="margin_left">
                                                <input type="checkbox" name="option_3_settings" class="icheck" value="no">No</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="icon_pencil-edit_alt"></i>
                                        </td>
                                        <td>
                                            New comments
                                        </td>
                                        <td>
                                            <label>
                                                <input type="checkbox" name="option_4_settings" checked class="icheck" value="yes">Yes</label>
                                            <label class="margin_left">
                                                <input type="checkbox" name="option_4_settings" class="icheck" value="no">No</label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="submit" class="btn_1 green">Update notifications settings</button>
                        </div>
                        
                    </div><!-- End row -->
                </div><!-- End wrapper_indent --> --}}
                
            </section><!-- End section 3 -->

        </div><!-- End content -->
    </div>
</div><!-- End container  -->
<!-- End Content =============================================== -->




@endsection


@section('scripts')
<script src="{{ asset('js/tabs.js') }}"></script>
	<script>
		new CBPFWTabs(document.getElementById('tabs'));
	</script>

	<script src="js/bootstrap3-wysihtml5.min.js"></script>
	<script type="text/javascript">
		$('.wysihtml5').wysihtml5({});
	</script>
	<script src="js/dropzone.min.js"></script>
	<script>
		if ($('.dropzone').length > 0) {
			Dropzone.autoDiscover = false;
			$("#photos").dropzone({
				url: "upload",
				addRemoveLinks: true
			});

			$("#logo_picture").dropzone({
				url: "upload",
				maxFiles: 1,
				addRemoveLinks: true
			});

			$(".menu-item-pic").dropzone({
				url: "upload",
				maxFiles: 1,
				addRemoveLinks: true
			});
		}
    </script>
@endsection