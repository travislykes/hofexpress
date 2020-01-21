@extends('layouts.frontend')

@section('content')

<section class="parallax-window" id="home" data-parallax="scroll" data-image-src="{{ asset('img/bg.jpg') }}" data-natural-width="1400" data-natural-height="">
    <div id="subheader">
        <div id="sub_content">
            <h1>Order <strong id="js-rotating">Takeaway,Delivery,Quick</strong> Food</h1>
            <p>
                Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula. 
            </p>
            <form method="post" action="list_page.html">
                <div id="custom-search-input">
                    <div class="input-group ">
                        <input type="text" class=" search-query" placeholder="Your Address or postal code">
                        <span class="input-group-btn">
                        <input type="submit" class="btn_search" value="submit">
                        </span>
                    </div>
                </div>
            </form>
        </div><!-- End sub_content -->
    </div><!-- End subheader -->
    <div id="count" class="hidden-xs">
        <ul>
            <li><span class="number">46</span> Restaurant</li>
            <li><span class="number">5350</span> People Served</li>
            <li><span class="number">300</span> Cuisines To Choose</li>
        </ul>
    </div>
    </section><!-- End section -->
    <!-- End SubHeader ============================================ -->
    
    <!-- Content ================================================== -->
         <div class="container margin_60">
        
         <div class="main_title">
            <h2 class="nomargin_top" style="padding-top:0">How it works</h2>
            <p>
                Cum doctus civibus efficiantur in imperdiet deterruisset.
            </p>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="box_home" id="one">
                    <span>1</span>
                    <h3>Search by address</h3>
                    <p>
                        Find all restaurants available in your zone.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box_home" id="two">
                    <span>2</span>
                    <h3>Choose a restaurant</h3>
                    <p>
                        We have more than 1000s of menus online.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box_home" id="three">
                    <span>3</span>
                    <h3>Pay by card or cash</h3>
                    <p>
                        It's quick, easy and totally secure.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box_home" id="four">
                    <span>4</span>
                    <h3>Delivery or takeaway</h3>
                    <p>
                        You are lazy? Are you backing home?
                    </p>
                </div>
            </div>
        </div><!-- End row -->
        
        <div id="delivery_time" class="hidden-xs">
            <strong><span>1</span><span>5</span></strong>
            <h4>The minutes that usually takes to deliver!</h4>
        </div>
        </div><!-- End container -->
            
    <div class="white_bg">
    <div class="container margin_60">
        
        <div class="main_title">
            <h2 class="nomargin_top">Choose from Most Popular</h2>
            <p>
                Restaurants that users frequently order from
            </p>
        </div>
        
        <div class="row">
            @forelse($restaurants as $restaurant)
            <div class="col-md-6">
                
                <a href="{{ route('restaurant.show', [$restaurant->id]) }}" class="strip_list">
                <div class="ribbon_1">Popular</div>
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="{{ asset('restaurant/logos') }}/{{ $restaurant->logo ?? '' }}" alt="">
                        </div>
                        <div class="rating">
                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                        </div>
                        <h3>{{ $restaurant->name }}</h3>
                        <div class="type">
                            {{ $restaurant->restaurantType->name ?? '' }}
                        </div>
                        <div class="location">
                            {{ $restaurant->location }} <span class="opening">Opens at 17:00</span>
                        </div>
                        <ul>
                            <li>Take away<i class="icon_check_alt2 ok"></i></li>
                            <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                        </ul>
                    </div><!-- End desc-->
                </a><!-- End strip_list-->
            </div>
                @empty
                <div class="col-md-6">
                <a href="#" class="strip_list">
                    <div class="ribbon_1">Popular</div>
                        <div class="desc">
                            <div class="thumb_strip">
                                <img src="img/thumb_restaurant.jpg" alt="">
                            </div>
                            <div class="rating">
                                <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                            </div>
                            <h3>No Record Found</h3>
                            <div class="type">
                                Hof Express
                            </div>
                            <div class="location">
                                
                            </div>
                            <ul>
                                
                            </ul>
                        </div><!-- End desc-->
                    </a><!-- End strip_list--> 
               
               
            </div>
            @endforelse
        </div><!-- End row -->   
        
        </div><!-- End container -->
        </div><!-- End white_bg -->
        
       <div class="high_light" style="background: #000;">
      	<div class="container">
      		<h3>Choose from over 20 Restaurants in Hof</h3>
            <p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
            <a href="{{ route('all.restaurants') }}">View all Restaurants</a>
        </div><!-- End container -->
      </div><!-- End hight_light -->
            
    <section class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('img/img1.jpg') }}" data-natural-width="1200" data-natural-height="600">
    <div class="parallax-content">
        <div class="sub_content">
            <i class="icon_mug"></i>
            <h3>We also deliver to your office</h3>
            <p>
                Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.
            </p>
        </div><!-- End sub_content -->
    </div><!-- End subheader -->
    </section><!-- End section -->
    <!-- End Content =============================================== -->
	
	<div class="container margin_60">
      <div class="main_title margin_mobile">
            <h2 class="nomargin_top">Work with Us</h2>
            <p>
                Cum doctus civibus efficiantur in imperdiet deterruisset.
            </p>
        </div>
      	<div class="row">
            <div class="col-md-4 col-md-offset-2">
            	<a class="box_work" href="{{ route('submit.restaurant') }}">
                <img src="{{ asset('img/restaurant.jpg') }}" width="848" height="480" alt="" class="img-responsive">
                <h3>Submit your Restaurant<span>Start to earn customers</span></h3>
                <p>Lorem ipsum dolor sit amet, ut virtute fabellas vix, no pri falli eloquentiam adversarium. Ea legere labore eam. Et eum sumo ocurreret, eos ei saepe oratio omittantur, legere eligendi partiendo pro te.</p>
                <div class="btn_1">Read more</div>
                </a>
            </div>
            <div class="col-md-4">
            	<a class="box_work" href="{{ route('view.rider.form') }}">
                <img src="{{ asset('img/rider.jpg') }}" width="848" height="480" alt="" class="img-responsive">
				<h3>We are looking for a Driver<span>Start to earn money</span></h3>
                <p>Lorem ipsum dolor sit amet, ut virtute fabellas vix, no pri falli eloquentiam adversarium. Ea legere labore eam. Et eum sumo ocurreret, eos ei saepe oratio omittantur, legere eligendi partiendo pro te.</p>
                <div class="btn_1">Read more</div>
                </a>
            </div>
      </div><!-- End row -->
    </div><!-- End container -->




@endsection
