@extends('fontEnd.masterContent') 

@section("mainContent")

 <!-- Home Slider Start -->
<div class="slider">
    <div class="tp-banner-container clearfix">
      <div class="tp-banner" >
        <ul>
          <!-- SLIDE 1 -->
          <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" > 
            <!-- MAIN IMAGE --> 
            <img src="{{asset('public/fontEnd/images')}}/slider/slider-img1.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
            <!-- LAYERS --> 
            <!-- LAYER NR. 1 -->
            <div class="tp-caption very_big_white skewfromrightshort fadeout"
                          data-x="center"
                          data-y="100"
                          data-speed="500"
                          data-start="1200"
                          data-easing="Circ.easeInOut"
                          style=" font-size:70px; font-weight:800; color:#fe0100;">Huge <span style=" color:#000;">sale</span> </div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption tp-caption medium_text skewfromrightshort fadeout"
                          data-x="center"
                          data-y="165"
                          data-hoffset="0"
                          data-voffset="-73"
                          data-speed="500"
                          data-start="1200"
                          data-easing="Power4.easeOut"
                          style=" font-size:20px; font-weight:500; color:#337ab7;"> Sale off 75% all products </div>
            
            <!-- LAYER NR. 3 -->
            <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0"
                          data-x="center"
                          data-y="210"
                          data-hoffset="0"
                          data-voffset="98" 
                          data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                          data-speed="500"
                          data-start="1500"
                          data-easing="Power3.easeInOut"
                          data-splitin="none"
                          data-splitout="none"
                          data-elementdelay="0.1"
                          data-endelementdelay="0.1"
                          data-linktoslide="next"
                          style="border: 2px solid #fed700;border-radius: 50px; font-size:14px; background-color:#fed700; color:#333; z-index: 12; white-space: nowrap; letter-spacing:1px;"><a href='#' class='largebtn slide1'>Learn More</a> </div>
          </li>
          
          <!-- SLIDE 2 -->
          <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" > 
            <!-- MAIN IMAGE --> 
            <img src="{{asset('public/fontEnd/images/')}}/slider/slider-img2.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
            <!-- LAYERS --> 
            <!-- LAYER NR. 1 -->
            <div class="tp-caption white_heavy_60 customin ltl tp-resizeme"
                          data-x="310"
                          data-y="140" 
                          data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                          data-speed="1200"
                          data-start="700"
                          data-easing="Power4.easeOut"
                          data-splitin="chars"
                          data-splitout="none"
                          data-elementdelay="0.1"
                          data-endelementdelay="0.1"
                          data-endspeed="1000"
                          data-endeasing="Power4.easeIn"
                          style=" font-size:70px; font-weight:800; color:#333;">GREAT LOOKS </div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption black_thin_blackbg_30 customin ltl tp-resizeme"
                          data-x="310"
                          data-y="220" 
                          data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                          data-speed="1500"
                          data-start="1000"
                          data-easing="Power4.easeInOut"
                          data-splitin="none"
                          data-splitout="none"
                          data-elementdelay="0.01"
                          data-endelementdelay="0.1"
                          data-endspeed="1000"
                          data-endeasing="Power4.easeIn"
                          style="z-index: 3; white-space: nowrap; color:#34bcec; font-size:20px; font-weight:500;">The perfect synthesis of innovative thinking </div>
            
            <!-- LAYER NR. 4 -->
            <div class="tp-caption lfb ltb start tp-resizeme"
                          data-x="310"
                          data-y="270"
                          data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                          data-speed="1500"
                          data-start="1600"
                          data-easing="Power3.easeInOut"
                          data-splitin="none"
                          data-splitout="none"
                          data-elementdelay="0.01"
                          data-endelementdelay="0.1"
                          data-linktoslide="next"
                          style="z-index: 12; white-space: nowrap;"><a href='#' class='largebtn solid'>Get It Now!</a> </div>
          </li>
          
          <!-- SLIDE 3 -->
          <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" > 
            <!-- MAIN IMAGE --> 
            <img src="{{asset('public/fontEnd/images/')}}/slider/slider-img3.jpg" alt="slidebg3" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
            <!-- LAYERS --> 
            <!-- LAYER NR. 1 -->
            <div class="tp-caption big_100_white lft start fadeout"
                          data-x="310"
                          data-y="120"
                          data-speed="500"
                          data-start="1200"
                          data-easing="Circ.easeInOut"
                          style=" font-size:70px; font-weight:800; color:#fff;">High</div>
            <div class="tp-caption big_100_white lft fadeout"
                          data-x="310"
                          data-y="180"
                          data-speed="500"
                          data-start="1200"
                          data-easing="Circ.easeInOut"
                          style=" font-size:50px; font-weight:800; color:#fed700;">Definition</div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption tp-caption medium_text lfb fadeout"
                          data-x="310"
                          data-y="260"
                          data-speed="500"
                          data-start="1200"
                          data-easing="Power4.easeOut"
                          style="z-index: 3; white-space: nowrap; color:#34bcec; font-size:20px; font-weight:500;">Best Camera For You?</div>
            
            <!-- LAYER NR. 3 -->
            <div class="tp-caption fade fadeout tp-resizeme"
                          data-x="310"
                          data-y="320"
                          data-hoffset="-100"
                          data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                          data-speed="1500"
                          data-start="800"
                          data-easing="Power3.easeInOut"
                          data-splitin="none"
                          data-splitout="none"
                          data-elementdelay="0.01"
                          data-endelementdelay="0.1"
                          data-linktoslide="next"
                          style="z-index: 12; white-space: nowrap;"><a href='#' class='largebtn solid'>Get It Now!</a> </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  
  <!-- main container -->
  <div class="main-container col1-layout">
    <div class="container">
      <div class="row"> 
        
        <!-- Home Tabs  -->
        <div class="col-sm-8 col-md-9 col-xs-12">
          <div class="home-tab">
            <ul class="nav home-nav-tabs home-product-tabs">
              <li class="active"><a href="#featured" data-toggle="tab" aria-expanded="false">Featured products</a></li>
              <li class="divider"></li>
              <li> <a href="#top-sellers" data-toggle="tab" aria-expanded="false">Top Sellers</a> </li>
            </ul>
            <div id="productTabContent" class="tab-content">
              <div class="tab-pane active in" id="featured">
                <div class="featured-pro">
                  <div class="slider-items-products">
                    <div id="featured-slider" class="product-flexslider hidden-buttons">
                      <div class="slider-items slider-width-col4">
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="icon-sale-label sale-left">Sale</div>
                              <div class="icon-new-label new-right">New</div>
                              <div class="pr-img-area"> <a  target="_blank" title="Ipsums Dolors Untra" href="{{url('single-product-view')}}">
                                <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img01.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img01.jpg" alt="html template"></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="{{url('product-quilck-view')}}"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img02.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img02.jpg" alt="html template"></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img03.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img03.jpg" alt="html template"></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="icon-sale-label sale-left">Sale</div>
                            <div class="icon-new-label new-right">New</div>
                            <div class="product-thumbnail">
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img04.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img04.jpg" alt="html template"></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="icon-new-label new-left">New</div>
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img05.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img05.jpg" alt="html template"></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img06.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img06.jpg" alt="html template"></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="top-sellers">
                <div class="top-sellers-pro">
                  <div class="slider-items-products">
                    <div id="top-sellers-slider" class="product-flexslider hidden-buttons">
                      <div class="slider-items slider-width-col4 ">
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="icon-sale-label sale-left">Sale</div>
                              <div class="icon-new-label new-right">New</div>
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img03.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img03.jpg" alt="html template"></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="icon-sale-label sale-left">Sale</div>
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img08.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img08.jpg" alt="html template"></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img01.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img01.jpg" alt="html template"></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img04.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img04.jpg" alt="html template"></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img05.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img05.jpg" alt="html template"></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img06.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img06.jpg" alt="html template"></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Hot deal -->
        <div class="col-md-3 col-sm-4 col-xs-12 hot-products">
          <div class="hot-deal"> <span class="title-text">Hot deal</span>
            <ul class="products-grid">
              <li class="item">
                <div class="product-item">
                  <div class="item-inner">
                    <div class="product-thumbnail">
                      <div class="icon-hot-label hot-right">Hot</div>
                      <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                        <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img15.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img15.jpg" alt="html template"></figure>
                        </a>
                        <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                      </div>
                      <div class="jtv-box-timer">
                        <div class="countbox_1 jtv-timer-grid"></div>
                      </div>
                      <div class="pr-info-area">
                        <div class="pr-button">
                          <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                          <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                          <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end main container --> 
  
  
  
  <!-- watch product  star -->
  <div class="container">
    <div class="row">
        <!-- Home Tabs  -->
        <div class="col-sm-8 col-md-9 col-xs-12">
          <div class="home-tab">
            <ul class="nav home-nav-tabs home-product-tabs">
              <li> <a href="#">Top Sellers</a> </li>
            </ul>
            <div id="productTabContent" class="tab-content">
              <div class="tab-pane active in" id="featured">
                <div class="featured-pro">
                  <div class="slider-items-products">
                    <div id="featured-slider" class="product-flexslider hidden-buttons">
                      <div class="slider-items slider-width-col4">
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="icon-sale-label sale-left">Sale</div>
                              <div class="icon-new-label new-right">New</div>
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img03.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img03.jpg" alt="html template"></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img03.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img03.jpg" alt="html template"></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img03.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img03.jpg" alt="html template"></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="icon-sale-label sale-left">Sale</div>
                            <div class="icon-new-label new-right">New</div>
                            <div class="product-thumbnail">
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img03.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img03.jpg" alt="html template"></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="icon-new-label new-left">New</div>
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img03.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img03.jpg" alt="html template"></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img03.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img03.jpg" alt="html template"></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
 
		  <div class="col-sm-3 col-xs-12">
			<div class="jtv-banner-box banner-inner">
			  <div class="image"> <a class="jtv-banner-opacity" href="#"><img src="{{asset('public/fontEnd/images/')}}/top-banner3.jpg" alt="html template"></a> </div>
			  <div class="jtv-content-text">
				<h3 class="title">New Arrival</h3>
			  </div>
			</div>
			<div class="jtv-banner-box banner-inner">
			  <div class="image "> <a class="jtv-banner-opacity" href="#"><img src="{{asset('public/fontEnd/images/')}}/top-banner4.jpg" alt="html template"></a> </div>
			  <div class="jtv-content-text">
				<h3 class="title">Accessories</h3>
			  </div>
			</div>
		  </div>
      </div>
   </div>
  <!--special-products-->
  <div class="container">
    <div class="row">
    	<div class="col-sm-8 col-md-9 col-xs-12">
			<div class="special-products">
			  <div class="page-header">
				<h2>special products</h2>
			  </div>
			  <div class="special-products-pro">
				<div class="slider-items-products">
				  <div id="special-products-slider" class="product-flexslider hidden-buttons">
					<div class="slider-items slider-width-col4">
					  <div class="product-item">
						<div class="item-inner">
						  <div class="product-thumbnail">
							<div class="icon-sale-label sale-left">Sale</div>
							<div class="icon-new-label new-right">New</div>
							<div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
							  <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img08.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img08.jpg" alt="html template"></figure>
							  </a>
							  <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
							</div>
							<div class="pr-info-area">
							  <div class="pr-button">
								<div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
								<div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
								<div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
							  </div>
							</div>
						  </div>
						  <div class="item-info">
							<div class="info-inner">
							  <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
							  <div class="item-content">
								<div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
								<div class="item-price">
								  <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
								</div>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					  <div class="product-item">
						<div class="item-inner">
						  <div class="product-thumbnail">
							<div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
							  <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img13.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img13.jpg" alt="html template"></figure>
							  </a>
							  <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
							</div>
							<div class="pr-info-area">
							  <div class="pr-button">
								<div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
								<div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
								<div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
							  </div>
							</div>
						  </div>
						  <div class="item-info">
							<div class="info-inner">
							  <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
							  <div class="item-content">
								<div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
								<div class="item-price">
								  <div class="price-box">
									<p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
									<p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
								  </div>
								</div>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					  <div class="product-item">
						<div class="item-inner">
						  <div class="product-thumbnail">
							<div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
							  <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img09.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img09.jpg" alt="html template"></figure>
							  </a>
							  <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
							</div>
							<div class="pr-info-area">
							  <div class="pr-button">
								<div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
								<div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
								<div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
							  </div>
							</div>
						  </div>
						  <div class="item-info">
							<div class="info-inner">
							  <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
							  <div class="item-content">
								<div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
								<div class="item-price">
								  <div class="price-box">
									<p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
									<p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
								  </div>
								</div>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					  <div class="product-item">
						<div class="item-inner">
						  <div class="icon-sale-label sale-left">Sale</div>
						  <div class="icon-new-label new-right">New</div>
						  <div class="product-thumbnail">
							<div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
							  <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img12.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img12.jpg" alt="html template"></figure>
							  </a>
							  <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
							</div>
							<div class="pr-info-area">
							  <div class="pr-button">
								<div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
								<div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
								<div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
							  </div>
							</div>
						  </div>
						  <div class="item-info">
							<div class="info-inner">
							  <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
							  <div class="item-content">
								<div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
								<div class="item-price">
								  <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
								</div>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					  <div class="product-item">
						<div class="item-inner">
						  <div class="product-thumbnail">
							<div class="icon-new-label new-left">New</div>
							<div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
							  <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img05.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img05.jpg" alt="html template"></figure>
							  </a>
							  <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
							</div>
							<div class="pr-info-area">
							  <div class="pr-button">
								<div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
								<div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
								<div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
							  </div>
							</div>
						  </div>
						  <div class="item-info">
							<div class="info-inner">
							  <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
							  <div class="item-content">
								<div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
								<div class="item-price">
								  <div class="price-box">
									<p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
									<p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
								  </div>
								</div>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					  <div class="product-item">
						<div class="item-inner">
						  <div class="product-thumbnail">
							<div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
							  <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img06.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img06.jpg" alt="html template"></figure>
							  </a>
							  <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
							</div>
							<div class="pr-info-area">
							  <div class="pr-button">
								<div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
								<div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
								<div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
							  </div>
							</div>
						  </div>
						  <div class="item-info">
							<div class="info-inner">
							  <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
							  <div class="item-content">
								<div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
								<div class="item-price">
								  <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
								</div>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
        </div>
		 <div class="col-sm-3 col-xs-12">
			 <div class="jtv-banner-box banner-inner">
				  <div class="image"> <a class="jtv-banner-opacity" href="#"><img src="{{asset('public/fontEnd/images/')}}/top-banner3.jpg" alt="html template"></a> </div>
				  <div class="jtv-content-text">
					<h3 class="title">New Arrival</h3>
				  </div>
			</div>
			<div class="jtv-banner-box banner-inner">
				  <div class="image "> <a class="jtv-banner-opacity" href="#"><img src="{{asset('public/fontEnd/images/')}}/top-banner4.jpg" alt="html template"></a> </div>
				  <div class="jtv-content-text">
					<h3 class="title">Accessories</h3>
				  </div>
			</div>
	   </div>
    </div>
  </div>
  
  <!--headphone and pendrive-->
  
  <div class="container">
    <div class="row">
    	<div class="col-sm-8 col-md-9 col-xs-12">
			<div class="special-products">
			  <div class="page-header">
				<h2>special products</h2>
			  </div>
			  <div class="special-products-pro">
				<div class="slider-items-products">
				  <div id="special-products-slider" class="product-flexslider hidden-buttons">
					<div class="slider-items slider-width-col4">
					  <div class="product-item">
						<div class="item-inner">
						  <div class="product-thumbnail">
							<div class="icon-sale-label sale-left">Sale</div>
							<div class="icon-new-label new-right">New</div>
							<div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
							  <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img08.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img08.jpg" alt="html template"></figure>
							  </a>
							  <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
							</div>
							<div class="pr-info-area">
							  <div class="pr-button">
								<div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
								<div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
								<div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
							  </div>
							</div>
						  </div>
						  <div class="item-info">
							<div class="info-inner">
							  <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
							  <div class="item-content">
								<div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
								<div class="item-price">
								  <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
								</div>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					  <div class="product-item">
						<div class="item-inner">
						  <div class="product-thumbnail">
							<div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
							  <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img13.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img13.jpg" alt="html template"></figure>
							  </a>
							  <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
							</div>
							<div class="pr-info-area">
							  <div class="pr-button">
								<div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
								<div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
								<div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
							  </div>
							</div>
						  </div>
						  <div class="item-info">
							<div class="info-inner">
							  <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
							  <div class="item-content">
								<div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
								<div class="item-price">
								  <div class="price-box">
									<p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
									<p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
								  </div>
								</div>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					  <div class="product-item">
						<div class="item-inner">
						  <div class="product-thumbnail">
							<div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
							  <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img09.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img09.jpg" alt="html template"></figure>
							  </a>
							  <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
							</div>
							<div class="pr-info-area">
							  <div class="pr-button">
								<div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
								<div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
								<div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
							  </div>
							</div>
						  </div>
						  <div class="item-info">
							<div class="info-inner">
							  <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
							  <div class="item-content">
								<div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
								<div class="item-price">
								  <div class="price-box">
									<p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
									<p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
								  </div>
								</div>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					  <div class="product-item">
						<div class="item-inner">
						  <div class="icon-sale-label sale-left">Sale</div>
						  <div class="icon-new-label new-right">New</div>
						  <div class="product-thumbnail">
							<div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
							  <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img12.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img12.jpg" alt="html template"></figure>
							  </a>
							  <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
							</div>
							<div class="pr-info-area">
							  <div class="pr-button">
								<div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
								<div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
								<div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
							  </div>
							</div>
						  </div>
						  <div class="item-info">
							<div class="info-inner">
							  <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
							  <div class="item-content">
								<div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
								<div class="item-price">
								  <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
								</div>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					  <div class="product-item">
						<div class="item-inner">
						  <div class="product-thumbnail">
							<div class="icon-new-label new-left">New</div>
							<div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
							  <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img05.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img05.jpg" alt="html template"></figure>
							  </a>
							  <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
							</div>
							<div class="pr-info-area">
							  <div class="pr-button">
								<div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
								<div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
								<div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
							  </div>
							</div>
						  </div>
						  <div class="item-info">
							<div class="info-inner">
							  <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
							  <div class="item-content">
								<div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
								<div class="item-price">
								  <div class="price-box">
									<p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
									<p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
								  </div>
								</div>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					  <div class="product-item">
						<div class="item-inner">
						  <div class="product-thumbnail">
							<div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
							  <figure> <img class="first-img" src="{{asset('public/fontEnd/images/')}}/products/img06.jpg" alt="html template"> <img class="hover-img" src="{{asset('public/fontEnd/images/')}}/products/img06.jpg" alt="html template"></figure>
							  </a>
							  <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
							</div>
							<div class="pr-info-area">
							  <div class="pr-button">
								<div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
								<div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
								<div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
							  </div>
							</div>
						  </div>
						  <div class="item-info">
							<div class="info-inner">
							  <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
							  <div class="item-content">
								<div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
								<div class="item-price">
								  <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
								</div>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
        </div>
		 <div class="col-sm-3 col-xs-12">
			 <div class="jtv-banner-box banner-inner">
				  <div class="image"> <a class="jtv-banner-opacity" href="#"><img src="{{asset('public/fontEnd/images/')}}/top-banner3.jpg" alt="html template"></a> </div>
				  <div class="jtv-content-text">
					<h3 class="title">New Arrival</h3>
				  </div>
			</div>
			<div class="jtv-banner-box banner-inner">
				  <div class="image "> <a class="jtv-banner-opacity" href="#"><img src="{{asset('public/fontEnd/images/')}}/top-banner4.jpg" alt="html template"></a> </div>
				  <div class="jtv-content-text">
					<h3 class="title">Accessories</h3>
				  </div>
			</div>
	   </div>
    </div>
  </div>

  <!-- Latest news start -->
  
  <div class="container">
    <div id="latest-news" class="news">
      <div class="page-header">
        <h2>Latest news</h2>
      </div>
      <div class="slider-items-products">
        <div id="latest-news-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6"> 
            
            <!-- Item -->
            <div class="item">
              <div class="jtv-blog">
                <div class="blog-img"> <a href="{{url('single-post')}}"> <img class="primary-img" src="{{asset('public/fontEnd/images/')}}/blog-img1.jpg" alt="html template"></a> <span class="moretag"></span> </div>
                <div class="blog-content-jtv">
                  <h2><a href="single_post.html">Sed do eiusmod sit amet</a></h2>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                  <span class="blog-likes"><i class="fa fa-heart"></i> 149 likes</span> <span class="blog-comments"><i class="fa fa-comment"></i> 80 comments</span>
                  <div class="blog-action"> <span>Jan, 20, 2016</span> <a class="read-more" href="single_post.html">read more</a> </div>
                </div>
              </div>
            </div>
            <!-- End Item -->
            <div class="item">
              <div class="jtv-blog">
                <div class="blog-img"> <a href="{{url('single-post')}}"><img class="primary-img" src="{{asset('public/fontEnd/images/')}}/blog-img2.jpg" alt="html template"></a> </div>
                <div class="{{url('single-post')}}">
                  <h2><a href="single_post.html">Lorem ipsum dolor sit amet</a></h2>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                  <span class="blog-likes"><i class="fa fa-heart"></i> 89 likes</span> <span class="blog-comments"><i class="fa fa-comment"></i> 10 comments</span>
                  <div class="blog-action"><span>May, 25, 2016</span> <a class="read-more" href="single_post.html">read more</a> </div>
                </div>
              </div>
            </div>
            <!-- Item -->
            <div class="item">
              <div class="jtv-blog">
                <div class="blog-img"> <a href="single_post.html"><img class="primary-img" src="{{asset('public/fontEnd/images/')}}/blog-img3.jpg" alt="html template"></a> </div>
                <div class="blog-content-jtv">
                  <h2><a href="single_post.html">Integer scelerisque diam vitae</a></h2>
                  <p>Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis. Maecenas eu enim in lorem</p>
                  <span class="blog-likes"><i class="fa fa-heart"></i> 125 likes</span> <span class="blog-comments"><i class="fa fa-comment"></i> 30 comments</span>
                  <div class="blog-action"><span>April, 12, 2016</span> <a class="read-more" href="single_post.html">read more</a> </div>
                </div>
              </div>
            </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item">
              <div class="jtv-blog">
                <div class="blog-img"> <a href="single_post.html"> <img class="primary-img" src="{{asset('public/fontEnd/images/')}}/blog-img1.jpg" alt="html template"></a> <span class="moretag"></span> </div>
                <div class="blog-content-jtv">
                  <h2><a href="single_post.html">Sed do eiusmod sit amet</a></h2>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                  <span class="blog-likes"><i class="fa fa-heart"></i> 149 likes</span> <span class="blog-comments"><i class="fa fa-comment"></i> 80 comments</span>
                  <div class="blog-action"> <span>Jan, 20, 2016</span> <a class="read-more" href="single_post.html">read more</a> </div>
                </div>
              </div>
            </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item">
              <div class="jtv-blog">
                <div class="blog-img"> <a href="single_post.html"> <img class="primary-img" src="{{asset('public/fontEnd/images/')}}/blog-img3.jpg" alt="html template"></a> <span class="moretag"></span> </div>
                <div class="blog-content-jtv">
                  <h2><a href="single_post.html">Sed do eiusmod sit amet</a></h2>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                  <span class="blog-likes"><i class="fa fa-heart"></i> 149 likes</span> <span class="blog-comments"><i class="fa fa-comment"></i> 80 comments</span>
                  <div class="blog-action"> <span>Jan, 20, 2016</span> <a class="read-more" href="single_post.html">read more</a> </div>
                </div>
              </div>
            </div>
            <!-- End Item --> 
            
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection

