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
               
                    @forelse($mn->food as $it)
                    <tr>
                    <td class="first-col" width="35%">
                        <figure class="thumb_menu_list"><img src="{{ asset('restaurant/food') }}/{{ $it->image }}" alt="thumb"></figure>
                        <h5 class="item-name">{{ $it->name }}</h5>
                        <input type="hidden"  value="{{ $it->id }}" class="form-control item-id" required name="food_id[]" readonly>
                        <p>
                           {{ $it->description }}
                        </p>
                    </td>
                    <td class="second-col" >
                        <strong class=>€ {{ number_format($it->price,2) }}</strong>
                        <input type="hidden"  value="{{ $it->price }}" class="form-control    item-price" required name="price[]" readonly>
                    </td>
                    
                    <td style=" width: 28%;" class="third-col"><div class="input-group number-spinner">
                        <span class="input-group-btn">
                            <button class="btn btn-default" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                        </span>
                        <input type="text" class="form-control text-center item-qty" value="1" style="height: 34px;" name="quantity[]">
                        <span class="input-group-btn">
                            <button class="btn btn-default" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                        </span>
                    </div>
                    </td>

                    <td class="options" >
                        <div class="dropdown dropdown-options">
                            <a  class="" role="button" type="submit"><i class="icon_plus_alt2 add"></i></a>
                        </div>
                    </td>
                </tr>
                    @empty
                    <tr>
                    <td>No Record Found</td>
                    </tr>
                    @endforelse
               
               
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
            <form method="POST" action="{{ route('new.order') }}">
                    @csrf
                <table class="table table_summary">
                <tbody id="order-list" >
                
                </tbody>
                </table>
                
                
                <hr>
                @if(!(Auth::user()))
                <span style="text-align: center;">Login Before You Can Order</span>
                <hr>
                @endif
                <button class="btn_full" type="submit" @if(!(Auth::user()))
                disabled
                @endif>Order Now</button>

                </form>
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

<script>
		// Constructor
function Item(id, name, price, qty) {
    this.identifier = id;
    this.name = name;
    this.price = price;
    this.qty = qty;
}

const shoppingCart = {
    cart: [],
    // Add to cart
    addItemToCart: function(id, name, price, qty) {
        let record = this.cart.find(item => item.name == name);

        if (record) {
            (record.qty = qty), (record.price = price);
        } else {
            let item = new Item(id, name, price, qty);
            this.cart.push(item);
        }
        this.saveCart();
    },

    // Remove item from cart
    removeItemFromCart: function(name) {
        let item = this.cart.find(item => {
            return item.name == name;
        });
        this.cart.splice(this.cart.indexOf(item), 1);
        this.saveCart();
    },
    // Load cart
    loadCart: function() {
        if (
            localStorage.getItem("shoppingCart") &&
            localStorage.getItem("shoppingCart") != null
        ) {
            return (this.cart = JSON.parse(
                localStorage.getItem("shoppingCart")
            ));
        }
        return [];
    },

    // Save cart
    saveCart: function() {
        localStorage.setItem("shoppingCart", JSON.stringify(this.cart));
    },

    clearCart: function() {
        this.cart = [];
        localStorage.setItem("shoppingCart", JSON.stringify(this.cart));
        return this.cart;
    }
};


/**
 * Load the cart and update the number of item in  cart
 */
function doShowAll() {
    //var keys =  Object.keys(localStorage)
    const cart = shoppingCart.loadCart();
    return cart;
}

function clearCart() {
    const cart = shoppingCart.clearCart();
    return cart;
}

//init shopping cart
	doShowAll()

	showProducts();

	let addButtons = document.querySelectorAll('.add');
	addButtons.forEach(btn=>{
		btn.addEventListener('click', (event)=>{
			let parentCol = event.currentTarget.parentNode.parentNode.parentNode
			
			let firstCol = getPreviousSibling(parentCol, '.first-col')
			let firstColChildren = firstCol.children
			let itemName = '';
			let itemIdentifier =''
			for (let i = 0; i < firstColChildren.length; i++) {
				if(firstColChildren[i].className == 'item-name'){
					 itemName = firstColChildren[i].textContent
					
				 }else if(firstColChildren[i].classList.contains("item-id")){
					 itemIdentifier = firstColChildren[i].value
				}

			}

			let secondCol = getPreviousSibling(parentCol, '.second-col')
			let secondColChildren = secondCol.children
			let itemPrice = ''
			for (let j = 0; j < secondColChildren.length; j++) {
				if(secondColChildren[j].classList.contains('item-price')){
					 itemPrice = secondColChildren[j].value
						break
				}

			}

			let thirdCol = getPreviousSibling(parentCol, '.third-col')
			let thirdColChildren = thirdCol.firstChild.children
			let itemQty = ''
			for (let i = 0; i < thirdColChildren.length; i++) {
				if(thirdColChildren[i].classList.contains('item-qty')){
					 itemQty = thirdColChildren[i].value
						break
				}
			}

			shoppingCart.addItemToCart(itemIdentifier ,itemName, itemPrice, itemQty)
			showProducts();

		})
	})

	function showProducts(){
		const orderList = document.querySelector('#order-list');
		let cart = doShowAll()
		
		let output =""
		let total = 0

		for(let item of cart){
			
			let subTotal = parseFloat(item.price) * parseInt(item.qty)
			total += subTotal

			output += `<tr><td><strong>${item.qty}x </strong>` + item.name + `<td>
					<strong class="pull-right">${item.qty * item.price}</strong>
			</td>` + `<input type="hidden" value=${item.identifier} name="identifier[]" >` +  `<input type="hidden" value=${item.qty} name="qty[]" >` +`<input type="hidden" value=${item.price} name="itemPrice[]" > </td></tr>`
			
		}

		output += `<hr>
                <tr>
									<td class="total">
												TOTAL <span class="pull-right"> ${total} 
												<input id="total" style=" width: 30%;" name="total" type="hidden" class="form-control" placeholder="Total" min="2" value=${total} step="0.001" readonly></span>
									</td>
                </tr>`

		orderList.innerHTML = output
	
	}


	let getPreviousSibling = function (elem, selector) {

		// Get the next sibling element
		let sibling = elem.previousElementSibling;
		
		// If there's no selector, return the first sibling
		if (!selector) return sibling;

		// If the sibling matches our selector, use it
		// If not, jump to the next sibling and continue the loop
		while (sibling) {
			
			if (sibling.matches(selector)) return sibling;
			sibling = sibling.previousElementSibling
			
		}

	};


	
</script>
@endsection