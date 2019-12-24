@extends('layouts.frontend')

@section('styles')
<link href="{{ asset('css/skins/square/grey.css') }}" rel="stylesheet">
@endsection
@section('content')
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/sub_header_cart.jpg" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
        <div id="sub_content">
            <h1>Create Your Account</h1>
            
            <p></p>
        </div><!-- End sub_content -->
    </div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

<div id="position">
    {{-- <div class="container">
        <ul>
            <li><a href="#0">My Account</a></li>
            <li><a href="#0">My Name</a></li>
            <li>Complete Profile </li>
        </ul>
        <a href="#0" class="search-overlay-menu-btn"><i class="icon-search-6"></i> Search</a>
    </div> --}}
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
            Login To Your Account
        </p>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- End col  -->
    </div><!-- End row  -->
</div>
<!-- End container -->




@endsection
