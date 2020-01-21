@extends('layouts.frontend')


@section('content')
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="{{ asset('img/bg.jpg') }}" data-natural-width="" data-natural-height="350">
    <div id="subheader">
    	<div id="sub_content">
    	 <h1>Order Completed</h1>
            <div class="bs-wizard">
                <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum"><strong>1.</strong> Your details</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="" class="bs-wizard-dot"></a>
                </div>
                               
                <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum"><strong>2.</strong> Payment</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="" class="bs-wizard-dot"></a>
                </div>
            
              <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum"><strong>3.</strong> Finish!</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#0" class="bs-wizard-dot"></a>
                </div>  
		</div><!-- End bs-wizard --> 
        </div><!-- End sub_content -->
	</div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="#0">Home</a></li>
                <li><a href="#0">Order</a></li>
                <li>{{ $page_title }}</li>
            </ul>
            <a href="#0" class="search-overlay-menu-btn"><i class="icon-search-6"></i> Search</a>
        </div>
    </div><!-- Position -->
    
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="box_style_2">
                    <h2 class="inner">Order confirmed!</h2>
                    <div id="confirm">
                        <i class="icon_check_alt2"></i>
                        <h3>Thank you!</h3>
                        <p>
                        Hello {{ Auth::user()->firstname ?? ''}}<br>
                        Thank you for choosing us!<br>
                        Your order has been submitted and you will be updated via mail when its ready
                        </p>
                    </div>
                    
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
<!-- Content ================================================== -->



@endsection

@section('scripts')
<script src="{{ asset('js/theia-sticky-sidebar.js') }}"></script>
<script>
    jQuery('#sidebar').theiaStickySidebar({
      additionalMarginTop: 80
    });
</script>
@endsection