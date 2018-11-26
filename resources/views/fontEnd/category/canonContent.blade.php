@extends("fontEnd.masterContent")


<!-- Breadcrumbs -->
 @section("mainContent")

  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"  style="margin-top:200px"> <a title="Go to Home Page" href="index.html">Home</a><span>&raquo;</span></li>
            <li class=""> <a title="Go to Home Page" href="shop_grid.html">Computers</a><span>&raquo;</span></li>
            <li><strong>Apple</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  <!-- Main Container -->
  <div class="main-container col2-left-layout">
    <div class="container">
      <div class="row">
        <div class="col-main col-sm-9 col-xs-12 col-sm-push-3">
          <div class="category-description std">
            <div class="slider-items-products">
              <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col1 owl-carousel owl-theme"> 
                  
                  <!-- Item -->
                  <div class="item"> <a href="#x"><img alt="" src="{{asset('public/fontEnd/images/')}}/cat-slider-img1.jpg"></a>
                    <div class="inner-info">
                      <div class="cat-img-title"> <span>Our new range of</span>
                        <h2 class="cat-heading"><strong>Smartphone</strong></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                        <a class="info" href="#">Shop Now</a> </div>
                    </div>
                  </div>
                  <!-- End Item --> 
                  
                  <!-- Item -->
                  <div class="item"> <a href="#x"><img alt="" src="{{asset('public/fontEnd/images/')}}/cat-slider-img2.jpg"></a> </div>
                  
                  <!-- End Item --> 
                  
                </div>
              </div>
            </div>
          </div>
          <div class="shop-inner">
            <div class="page-title">
              <h2>Apple</h2>
            </div>
            <div class="toolbar">
              <div class="view-mode">
                <ul>
                  <li class="active"> <a href="shop_grid.html"> <i class="fa fa-th-large"></i> </a> </li>
                  <li> <a href="shop_list.html"> <i class="fa fa-th-list"></i> </a> </li>
                </ul>
              </div>
              <div class="sorter">
                <div class="short-by">
                  <label>Sort By:</label>
                  <select>
                    <option selected="selected">Position</option>
                    <option>Name</option>
                    <option>Price</option>
                    <option>Size</option>
                  </select>
                </div>
                <div class="short-by page">
                  <label>Show:</label>
                  <select>
                    <option selected="selected">18</option>
                    <option>20</option>
                    <option>25</option>
                    <option>30</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="product-grid-area">
              <ul class="products-grid">
               @foreach($publishedProducts as $publishedProduct)

                <?php $productImage= explode(",", $publishedProduct->productImage); ?>
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-sale-label sale-left">Sale</div>
                        <div class="pr-img-area"> <a target="_blank" title="Ipsums Dolors Untra" href="{{url('single-product-view/'.$publishedProduct->productId)}}">
                          <figure> <img class="first-img" src='{{asset("$productImage[0]")}}' alt=""> <img class="hover-img" src='{{asset("$productImage[0]")}}' alt=""></figure>
                          </a>
                          <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                        </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                            <div class="mt-button add_to_compare"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="{{ucfirst($publishedProduct->productName)}}" href="{{url('single-product-view/'.$publishedProduct->productId)}}">{{ ucfirst($publishedProduct->productName)}} </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price"> {{$publishedProduct->productPrice}} Tk</span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
               
                @endforeach
              
               
              
                
                
              </ul>
            </div>
            <div class="pagination-area ">
              <ul>
                <li><a class="active" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
         <!-- sidebar start-->

          @include("fontEnd.includes.sidebar");   

      </div>
    </div>
  </div>
  <!-- Main Container End --> ]


@endsection