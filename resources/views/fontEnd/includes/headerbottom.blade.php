<div class="container">
        <div class="row">
          <div class="col-sm-3 col-md-3 col-xs-12"> 
            <!-- Header Logo -->
            <div class="logo"><a title="e-commerce" href="{{url('/')}}"><img alt="responsive theme logo" src="{{asset('public/fontEnd/images/')}}/logo.png"></a> </div>
            <!-- End Header Logo --> 
          </div>
          <div class="col-xs-9 col-sm-6 col-md-8"> 
            <!-- Search -->
            
            <div class="top-search">
              <div id="search">
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="search">
                    <button class="btn-search" type="button"><i class="fa fa-search"></i></button>
                  </div>
                </form>
              </div>
            </div>
            
            <!-- End Search --> 
          </div>
          <!-- top cart -->

          <div class="col-lg-1 col-xs-2 top-cart">
            <div class="top-cart-contain">
              <div class="mini-cart">
                <div  data-hover="dropdown" class="basket dropdown-toggle"> 
                  <a href="#">
                    <div class="car"><i class="fa fa-shopping-cart"></i></div>
                    <div class="shoppingcart-inner hidden-xs">
  				             <span class="cart-title">{{Cart::count()}}</span> 
                      </a>
				            </div>
                <div>
                  <div class="top-cart-content">
                    <div class="block-subtitle hidden-xs">Recently added item(s)</div>
                    <ul id="cart-sidebar" class="mini-products-list">
                     @foreach($prodcutCarts as $productCart)
                      <li class="item odd"> <a href="{{url('shopping-cart')}}" title="Ipsums Dolors Untra" class="product-image"><img src="{{$productCart->options->image}}" alt="{{$productCart->name}}" width="65"></a>
                        <div class="product-details"> <a href="{{url('deleteToCart/'.$productCart->rowId)}}" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a>
                          <p class="product-name"><a href="shopping_cart.html">{{$productCart->name}}</a> </p>
                          <strong>{{$productCart->qty}}</strong> x <span class="price">{{$productCart->qty*$productCart->price}}</span> </div>
                      </li>
                     @endforeach
                    </ul>
                    <div class="top-subtotal">Subtotal: <span class="price">{{Cart::subtotal()}}</span></div>
                     <div class="actions">
                        <a href="{{url('account/page')}}" class="btn-checkout"><i class="fa fa-check"></i><span>Checkout</span></a>
                        <a href="{{url('shoping-cart')}}" class="view-cart"><i class="fa fa-shopping-cart"></i> <span>View Cart</span></a>
                       
                     </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>