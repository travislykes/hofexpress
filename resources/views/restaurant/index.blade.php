@extends('layouts.frontend')

@section('styles')
<link href="{{ asset('css/skins/square/grey.css') }}" rel="stylesheet">
@endsection
@section('content')
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/sub_header_short.jpg" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
	<div id="sub_content">
    	<h1>All Restaurants In your zone</h1>
        <div><i class="icon_pin"></i> 95028 Hof, Bavaria</div>
    </div><!-- End sub_content -->
</div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="{{ route('index') }}">Home</a></li>
                
                <li>{{ $page_title }}</li>
            </ul>
             <a href="#0" class="search-overlay-menu-btn"><i class="icon-search-6"></i> Search</a>
        </div>
    </div><!-- Position -->
    
    <div class="collapse" id="collapseMap">
		<div id="map" class="map"></div>
	</div><!-- End Map -->

<!-- Content ================================================== -->
<div class="container margin_60_35">
	<div class="row">
    
		<div class="col-md-3">
			{{-- <p>
				<a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">View on map</a>
			</p> --}}
			<div id="filters_col">
				<a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filters <i class="icon-plus-1 pull-right"></i></a>
				<div class="collapse" id="collapseFilters">
					<div class="filter_type">
                    	<h6>Distance</h6>
                        <input type="text" id="range" value="" name="range">
						<h6>Type</h6>
						<ul>
							<li><label><input type="checkbox" checked class="icheck">All <small>(49)</small></label></li>
							<li><label><input type="checkbox" class="icheck">American <small>(12)</small></label><i class="color_1"></i></li>
							<li><label><input type="checkbox" class="icheck">Chinese <small>(5)</small></label><i class="color_2"></i></li>
							<li><label><input type="checkbox" class="icheck">Hamburger <small>(7)</small></label><i class="color_3"></i></li>
							<li><label><input type="checkbox" class="icheck">Fish <small>(1)</small></label><i class="color_4"></i></li>
							<li><label><input type="checkbox" class="icheck">Mexican <small>(49)</small></label><i class="color_5"></i></li>
							<li><label><input type="checkbox" class="icheck">Pizza <small>(22)</small></label><i class="color_6"></i></li>
							<li><label><input type="checkbox" class="icheck">Sushi <small>(43)</small></label><i class="color_7"></i></li>
						</ul>
					</div>
					<div class="filter_type">
						<h6>Rating</h6>
						<ul>
							<li><label><input type="checkbox" class="icheck"><span class="rating">
							<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i>
							</span></label></li>
							<li><label><input type="checkbox" class="icheck"><span class="rating">
							<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
							</span></label></li>
							<li><label><input type="checkbox" class="icheck"><span class="rating">
							<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
							</span></label></li>
							<li><label><input type="checkbox" class="icheck"><span class="rating">
							<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>
							</span></label></li>
							<li><label><input type="checkbox" class="icheck"><span class="rating">
							<i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>
							</span></label></li>
						</ul>
					</div>
					<div class="filter_type">
						<h6>Options</h6>
						<ul class="nomargin">
							<li><label><input type="checkbox" class="icheck">Delivery</label></li>
							<li><label><input type="checkbox" class="icheck">Take Away</label></li>
							<li><label><input type="checkbox" class="icheck">Distance 10Km</label></li>
							<li><label><input type="checkbox" class="icheck">Distance 5Km</label></li>
						</ul>
					</div>
				</div><!--End collapse -->
			</div><!--End filters col-->
		</div><!--End col-md -->
        
		<div class="col-md-9">
        
        <div id="tools">
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="styled-select">
							<select name="sort_rating" id="sort_rating">
								<option value="" selected>Sort by ranking</option>
								<option value="lower">Lowest ranking</option>
								<option value="higher">Highest ranking</option>
							</select>
						</div>
					</div>
					{{-- <div class="col-md-9 col-sm-9 hidden-xs">
						<a href="grid_list.html" class="bt_filters"><i class="icon-th"></i></a>
					</div> --}}
				</div>
			</div><!--End tools -->
        
			<div class="strip_list wow fadeIn" data-wow-delay="0.1s">
				<div class="ribbon_1">
					Featured
				</div>
				<div class="row">
					<div class="col-md-9 col-sm-9">
						<div class="desc">
							<div class="thumb_strip">
								<a href="detail_page.html"><img src="img/thumb_restaurant.jpg" alt=""></a>
							</div>
							<div class="rating">
								<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> (<small><a href="#0">98 reviews</a></small>)
							</div>
							<h3>Taco Mexican</h3>
							<div class="type">
								Mexican / American
							</div>
							<div class="location">
								135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00.</span> Minimum order: $15
							</div>
							<ul>
								<li>Take away<i class="icon_check_alt2 ok"></i></li>
								<li>Delivery<i class="icon_check_alt2 no"></i></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-sm-3">
						<div class="go_to">
							<div>
								<a href="detail_page.html" class="btn_1">View Menu</a>
							</div>
						</div>
					</div>
				</div><!-- End row-->
			</div><!-- End strip_list-->
            
            @forelse($restaurants as $restaurant)
			<div class="strip_list wow fadeIn" data-wow-delay="0.2s">
				
				<div class="row">
					<div class="col-md-9 col-sm-9">
						<div class="desc">
							<div class="thumb_strip">
								<a href="{{ route('restaurant.show', [$restaurant->id]) }}"><img src="{{ asset('restaurant/logos') }}/{{ $restaurant->logo ?? '' }}" alt=""></a>
							</div>
							<div class="rating">
								<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> (<small><a href="#0">98 reviews</a></small>)
							</div>
							<h3>{{ $restaurant->name }}</h3>
							<div class="type">
								{{ $restaurant->restaurantType->name ?? '' }}
							</div>
							<div class="location">
								{{ $restaurant->location }} <span class="opening">Opens at 17:00.</span> Minimum order: $15
							</div>
							<ul>
								<li>Take away<i class="icon_check_alt2 ok"></i></li>
								<li>Delivery<i class="icon_check_alt2 ok"></i></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-sm-3">
						<div class="go_to">
							<div>
								<a href="{{ route('restaurant.show', [$restaurant->id]) }}" class="btn_1">View Menu</a>
							</div>
						</div>
					</div>
				</div><!-- End row-->
			</div><!-- End strip_list-->
            @empty
			<div class="strip_list wow fadeIn" data-wow-delay="0.3s">
				<div class="row">
					<div class="col-md-9 col-sm-9">
						<div class="desc">
							<div class="thumb_strip">
								<a href="detail_page.html"><img src="img/thumb_restaurant_3.jpg" alt=""></a>
							</div>
							<div class="rating">
								<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> (<small><a href="#0">98 reviews</a></small>)
							</div>
							<h3>Japan Food</h3>
							<div class="type">
								Sushi / Japanese
							</div>
							<div class="location">
								135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00.</span> Minimum order: $15
							</div>
							<ul>
								<li>Take away<i class="icon_check_alt2 ok"></i></li>
								<li>Delivery<i class="icon_check_alt2 ok"></i></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-sm-3">
						<div class="go_to">
							<div>
								<a href="detail_page.html" class="btn_1">View Menu</a>
							</div>
						</div>
					</div>
				</div><!-- End row-->
			</div><!-- End strip_list-->
            @endforelse
			<div class="strip_list wow fadeIn" data-wow-delay="0.4s">
				<div class="row">
					<div class="col-md-9 col-sm-9">
						<div class="desc">
							<div class="thumb_strip">
								<a href="detail_page.html"><img src="img/thumb_restaurant_4.jpg" alt=""></a>
							</div>
							<div class="rating">
								<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> (<small><a href="#0">98 reviews</a></small>)
							</div>
							<h3>Sushi Gold</h3>
							<div class="type">
								Sushi / Japanese
							</div>
							<div class="location">
								135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00.</span> Minimum order: $15
							</div>
							<ul>
								<li>Take away<i class="icon_check_alt2 ok"></i></li>
								<li>Delivery<i class="icon_check_alt2 ok"></i></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-sm-3">
						<div class="go_to">
							<div>
								<a href="detail_page.html" class="btn_1">View Menu</a>
							</div>
						</div>
					</div>
				</div><!-- End row-->
			</div><!-- End strip_list-->
            
			<div class="strip_list wow fadeIn" data-wow-delay="0.5s">
				<div class="row">
					<div class="col-md-9 col-sm-9">
						<div class="desc">
							<div class="thumb_strip">
								<a href="detail_page.html"><img src="img/thumb_restaurant_5.jpg" alt=""></a>
							</div>
							<div class="rating">
								<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> (<small><a href="#0">98 reviews</a></small>)
							</div>
							<h3>Dragon Tower</h3>
							<div class="type">
								Chinese / Thai
							</div>
							<div class="location">
								135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00.</span> Minimum order: $15
							</div>
							<ul>
								<li>Take away<i class="icon_check_alt2 ok"></i></li>
								<li>Delivery<i class="icon_check_alt2 ok"></i></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-sm-3">
						<div class="go_to">
							<div>
								<a href="detail_page.html" class="btn_1">View Menu</a>
							</div>
						</div>
					</div>
				</div><!-- End row-->
			</div><!-- End strip_list-->
            
			<div class="strip_list last wow fadeIn" data-wow-delay="0.6s">
				<div class="row">
					<div class="col-md-9 col-sm-9">
						<div class="desc">
							<div class="thumb_strip">
								<a href="detail_page.html"><img src="img/thumb_restaurant_6.jpg" alt=""></a>
							</div>
							<div class="rating">
								<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> (<small><a href="#0">98 reviews</a></small>)
							</div>
							<h3>China Food</h3>
							<div class="type">
								Chinese / Vietnam
							</div>
							<div class="location">
								135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00.</span> Minimum order: $15
							</div>
							<ul>
								<li>Take away<i class="icon_check_alt2 ok"></i></li>
								<li>Delivery<i class="icon_check_alt2 ok"></i></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-sm-3">
						<div class="go_to">
							<div>
								<a href="detail_page.html" class="btn_1">View Menu</a>
							</div>
						</div>
					</div>
				</div><!-- End row-->
			</div><!-- End strip_list-->
            <a href="#0" class="load_more_bt wow fadeIn" data-wow-delay="0.2s">Load more...</a>  
		</div><!-- End col-md-9-->
        
	</div><!-- End row -->
</div><!-- End container -->



@endsection
