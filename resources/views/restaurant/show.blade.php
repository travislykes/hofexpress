@extends('layouts.frontend')


@section('content')
<!-- SubHeader =============================================== -->
<section class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('restaurant/cover') }}/{{ $restaurant->cover_image ?? '' }}" data-natural-width="1400" data-natural-height="">
    <div id="subheader">
        <div id="sub_content">
            <div id="thumb"><a href="{{ route('restaurant.detail',[$restaurant->id]) }}"><img src="{{ asset('restaurant/logos') }}/{{ $restaurant->logo ?? '' }}" alt=""></a></div>
            <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> ( <small><a href="#0">98 reviews</a></small> )</div>
            <h1>{{ ucwords($restaurant->name) }}</h1>
            <div><em>{{ ucwords($restaurant->restaurantType->name ?? '') }}</em></div>
            <div><i class="icon_pin"></i> {{ $restaurant->location }} 
                {{-- - <strong>Delivery charge:</strong> $10, free over $15. --}}
            </div>
        </div><!-- End sub_content -->
    </div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

<div id="position">
    <div class="container">
        <ul>
            <li><a href="#0">Home</a></li>
            <li><a href="#0">Restaurants</a></li>
            <li>{{ $page_title }}</li>
        </ul>
        <a href="#0" class="search-overlay-menu-btn"><i class="icon-search-6"></i> Search</a>
    </div>
</div><!-- Position -->

<!-- Content ================================================== -->
<div class="container margin_60_35">
    <div class="row">
    
        <div class="col-md-3">
            <p><a href="list_page.html" class="btn_side">Back to search</a></p>
            <div class="box_style_1">
                <ul id="cat_nav">
                    @forelse($menu as $mn)
                    <li><a href="#{{ strtolower($mn->name) }}" class="active">{{ ucwords($mn->name) }} <span>({{ $mn->food->count() }})</span></a></li>
                    @empty
                    <li><a href="#drinks">No Menus Found <span>(0)</span></a></li>
                    @endforelse
                </ul>
            </div><!-- End box_style_1 -->
            
            <div class="box_style_2 hidden-xs" id="help">
                <i class="icon_lifesaver"></i>
                <h4>Need <span>Help?</span></h4>
                <a href="tel://004542344599" class="phone">+49 152 423 459</a>
                <small>Monday to Friday 9.00am - 7.30pm</small>
            </div>
        </div><!-- End col-md-3 -->
                               
        <div class="col-md-6">
            <div class="box_style_2" id="main_menu">
                <h2 class="inner">Menu</h2>
                @forelse($menu as $mn)
                {{-- @php $v = $fd->pluck('menu_id')->first(); 
                    $cat = App\Menu::findOrFail($v);
                @endphp --}}
                <h3 class="nomargin_top" id="{{ strtolower($mn->name) }}">{{ $mn->name }}</h3>
                <p>
                    {{ $mn->description }}
                </p>
                <table class="table table-striped cart-list">
                <thead>
                <tr>
                    <th>
                         Item
                    </th>
                    <th>
                         Price
                    </th>
                    <th></th>
                    <th>
                         Order
                    </th>
                    
                </tr>
                </thead>
                <tbody>
                <tr>
                    @forelse($mn->food as $it)
                    <td>
                        <figure class="thumb_menu_list"><img src="{{ asset('restaurant/food') }}/{{ $it->image }}" alt="thumb"></figure>
                        <h5>{{ $it->name }}</h5>
                        <input type="hidden" value="{{ $it->id }}" class="form-control" required name="food_id[]" readonly>
                        <p>
                           {{ $it->description }}
                        </p>
                    </td>
                    <td>
                        <strong>€ {{ number_format($it->price,2) }}</strong>
                        <input type="hidden" value="{{ $it->price }}" class="form-control" required name="price[]" readonly>
                    </td>
                    
                    <td style=" width: 30%;"><div class="input-group number-spinner">
                        <span class="input-group-btn">
                            <button class="btn btn-default" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                        </span>
                        <input type="text" class="form-control text-center" value="1" style="height: 34px;" name="quantity[]">
                        <span class="input-group-btn">
                            <button class="btn btn-default" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                        </span>
                    </div>
                    </td>

                    <td class="options">
                        <div class="dropdown dropdown-options">
                            <a  class="" role="button" type="submit"><i class="icon_plus_alt2"></i></a>
                        </div>
                    </td>
                    @empty
                    <td>No Record Found</td>
                    @endforelse
                </tr>
               
                </tbody>
                </table>
                <hr>
                @empty 
                <h3 id="">No Menus Found</h3>
                @endforelse
                
            </div><!-- End box_style_1 -->
        </div><!-- End col-md-6 -->
        
        <div class="col-md-3" id="sidebar">
        <div class="theiaStickySidebar">
            <div id="cart_box" >
                <h3>Your order <i class="icon_cart_alt pull-right"></i></h3>
                <table class="table table_summary">
                <tbody>
                <tr>
                    <td>
                        <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>1x</strong> Enchiladas
                    </td>
                    <td>
                        <strong class="pull-right">$11</strong>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>2x</strong> Burrito
                    </td>
                    <td>
                        <strong class="pull-right">$14</strong>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>1x</strong> Chicken
                    </td>
                    <td>
                        <strong class="pull-right">$20</strong>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>2x</strong> Corona Beer
                    </td>
                    <td>
                        <strong class="pull-right">$9</strong>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>2x</strong> Cheese Cake
                    </td>
                    <td>
                        <strong class="pull-right">$12</strong>
                    </td>
                </tr>
                </tbody>
                </table>
                <hr>
                <div class="row" id="options_2">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                        <label><input type="radio" value="" checked name="option_2" class="icheck">Delivery</label>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                        <label><input type="radio" value="" name="option_2" class="icheck">Take Away</label>
                    </div>
                </div><!-- Edn options 2 -->
                
                <hr>
                <table class="table table_summary">
                <tbody>
                <tr>
                    <td>
                         Subtotal <span class="pull-right">$56</span>
                    </td>
                </tr>
                <tr>
                    <td>
                         Delivery fee <span class="pull-right">$10</span>
                    </td>
                </tr>
                <tr>
                    <td class="total">
                         TOTAL <span class="pull-right"><input id="total" style=" width: 30%;" name="total" type="number" class="form-control" placeholder="Total" min="2"  step="0.001" readonly></span>
                    </td>
                </tr>
                </tbody>
                </table>
                <hr>
                <a class="btn_full" href="cart.html">Order now</a>
            </div><!-- End cart_box -->
            </div><!-- End theiaStickySidebar -->
        </div><!-- End col-md-3 -->
        
    </div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->


@endsection

@section('scripts')
<script text="javascript">
    $(document).on('click', '.number-spinner button', function () {    
	var btn = $(this),
		oldValue = btn.closest('.number-spinner').find('input').val().trim(),
		newVal = 0;
	
	if (btn.attr('data-dir') == 'up') {
		newVal = parseInt(oldValue) + 1;
	} else {
		if (oldValue > 1) {
			newVal = parseInt(oldValue) - 1;
		} else {
			newVal = 1;
		}
	}
	btn.closest('.number-spinner').find('input').val(newVal);
});
</script>
@endsection