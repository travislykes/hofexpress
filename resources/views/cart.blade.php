@extends('layouts.frontend')


@section('content')
<section class="parallax-window"  id="short"  data-parallax="scroll" data-image-src="{{ asset('img/bg.jpg') }}" data-natural-width="" data-natural-height="350">
    <div id="subheader">
    	<div id="sub_content">
    	 <h1>Place your order</h1>
            <div class="bs-wizard">
                <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum"><strong>1.</strong> Your details</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                </div>
                               
                <div class="col-xs-4 bs-wizard-step active">
                  <div class="text-center bs-wizard-stepnum"><strong>2.</strong> Payment</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#0" class="bs-wizard-dot"></a>
                </div>
            
              <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum"><strong>3.</strong> Finish!</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
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
    
<!-- Content ================================================== -->
<div class="container margin_60_35">
		<div class="row">
			<div class="col-md-3">
				<div class="box_style_2 hidden-xs info">
					<h4 class="nomargin_top">Delivery time <i class="icon_clock_alt pull-right"></i></h4>
					<p>
						the amount of time that it takes for goods that have been bought to arrive at the place where they are wanted
					</p>
					<hr>
					<h4>Secure payment <i class="icon_creditcard pull-right"></i></h4>
					<p>
						Secure Payment Services is a safer, faster, more secure way to pay online with, your payments sent directly to the prison. Should you have any problems at all then please contact our support team
					</p>
				</div><!-- End box_style_2 -->
                
				<div class="box_style_2 hidden-xs" id="help">
					<i class="icon_lifesaver"></i>
					<h4>Need <span>Help?</span></h4>
					<a href="tel://004542344599" class="phone">+49 423 445 99</a>
					<small>Monday to Friday 9.00am - 7.30pm</small>
				</div>
			</div><!-- End col-md-3 -->
            
			<div class="col-md-6">
				<div class="box_style_2">
                    <h2 class="inner">Complete Order</h2>
                    <label>Payment methods</label>
                <form method="POST" action="{{ route('save.order',[$order->id])}}">
                        @csrf
                        @method('PUT')
					<div class="payment_select">
                        @forelse($payment_types as $pt)
                        <input type="radio" name="payment_type_id" value="{{ $pt->id }}" required> {{ ucfirst($pt->name) }}<br>
                        @empty 
                        <input type="radio" name="payment_type_id" value=""> No Records Found<br>
                        @endforelse
                       
						<i class="icon_creditcard"></i>
					</div>
					<div class="form-group">
                    <label>Location</label>
                        <div class="payment_select">
                            @forelse($locations as $lc)
                            <input type="radio" name="location_id" value="{{ $lc->id }}" required> {{ $lc->name }}<br>
                            @empty 
                            <input type="radio" name="location_id" value="" required> N/A<br>
                            Add Locations in your Profile
                            @endforelse
                            
                            <i class="icon_creditcard"></i>
                        </div>
                    </div>
                    <div class="form-group">
                    <label>Delivery Type</label>
                        <div class="payment_select">
                            @forelse($delivery_types as $dt)
                            <input type="radio" name="delivery_id" value="{{ $dt->id ?? '' }}" required> {{ $dt->name ?? '' }}<br>
                            @empty 
                            <input type="radio" name="delivery_id" value="female"> N/A<br>
                            @endforelse
                           
                            <i class="icon_creditcard"></i>
                        </div>
                    </div>
					
					
					
				</div><!-- End box_style_1 -->
			</div><!-- End col-md-6 -->
            
			<div class="col-md-3" id="sidebar">
            	<div class="theiaStickySidebar">
				<div id="cart_box">
					<h3>Your order <i class="icon_cart_alt pull-right"></i></h3>
					<table class="table table_summary">
					<tbody>
                     
                    @forelse($order->food as $food)
					<tr>
						<td>
							<a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>{{ $food->quantity }}</strong> {{ $food->name }}
						</td>
						<td>
                        <strong class="pull-right">$ {{ number_format($food->price,2 )}}</strong>
						</td>
                    </tr>
                    @empty 

					<tr>
						<td>
							<a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>No</strong> Items In Cart
						</td>
						<td>
							
						</td>
                    </tr>
                    @endforelse
					
					</tbody>
					</table>
					<hr>
					{{-- <div class="row" id="options_2">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
							<label><input type="radio" value="" checked name="option_2" class="icheck">Delivery</label>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
							<label><input type="radio" value="" name="option_2" class="icheck">Take Away</label>
						</div>
					</div><!-- Edn options 2 -->
					<hr> --}}
					<table class="table table_summary">
					<tbody>
					
					<tr>
						<td class="total">
							 TOTAL <span class="pull-right">$ {{ number_format($order->total,2) }}</span>
						</td>
					</tr>
					</tbody>
					</table>
					<hr>
                    <button class="btn_full" type="submit">Confirm your order</button>
                </form>
				</div><!-- End cart_box -->
                </div><!-- End theiaStickySidebar -->
			</div><!-- End col-md-3 -->
            
		</div><!-- End row -->
</div><!-- End container -->


@endsection

@section('scripts')
<script src="{{ asset('js/theia-sticky-sidebar.js') }}"></script>
<script>
    jQuery('#sidebar').theiaStickySidebar({
      additionalMarginTop: 80
    });
</script>
@endsection