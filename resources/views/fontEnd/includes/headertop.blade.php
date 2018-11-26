<div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-sm-4 hidden-xs"> 
              <!-- Default Welcome Message -->
              <div class="welcome-msg ">Welcome to MyStore! </div>
              <span class="phone hidden-sm">Call Us: +123.456.789</span> </div>
          
            <!-- top links -->
            <div class="headerlinkmenu col-lg-8 col-md-7 col-sm-8 col-xs-12">
              <div class="links">
                <div class="About us"><a title="Blog" href=" {{url('About-us')}}"><span class="hidden-xs">About us</span></a></div>
                <div class="blog"><a title="Blog" href=" {{url('Blog')}}"><span class="hidden-xs">Blog</span></a></div>



                 <div class="myaccount"><a title="My Account" href="{{url('account/page')}}"><i class="fa fa-user"></i><span class="hidden-xs">My Account</span></a></div>
                <div class="wishlist"><a title="My Wishlist" href="{{url('wishlist')}}"><i class="fa fa-heart"></i><span class="hidden-xs">My Wishlist</span></a>
				         </div>
              </div>
              <div class="language-currency-wrapper">
                <div class="inner-cl">
                  <div class="block block-language form-language">
                    <div class="lg-cur"> <span> <img src="{{asset('public/fontEnd/images/')}}/flag-default.jpg" alt="French"> <span class="lg-fr">French</span> <i class="fa fa-angle-down"></i> </span> </div>
                    <ul>
                      <li> <a class="selected" href="#"> <img src="{{asset('public/fontEnd/images/')}}/flag-english.jpg" alt="flag"> <span>English</span> </a> </li>
                      <li> <a href="#"> <img src="{{asset('public/fontEnd/images/')}}/flag-default.jpg" alt="flag"> <span>French</span> </a> </li>
                      <li> <a href="#"> <img src="{{asset('public/fontEnd/images/')}}/flag-german.jpg" alt="flag"> <span>German</span> </a> </li>
                      <li> <a href="#"> <img src="{{asset('public/fontEnd/images/')}}/flag-brazil.jpg" alt="flag"> <span>Brazil</span> </a> </li>
                      <li> <a href="#"> <img src="{{asset('public/fontEnd/images/')}}/flag-chile.jpg" alt="flag"> <span>Chile</span> </a> </li>
                      <li> <a href="#"> <img src="{{asset('public/fontEnd/images/')}}/flag-spain.jpg" alt="flag"> <span>Spain</span> </a> </li>
                    </ul>
                  </div>
                  <div class="block block-currency">
                    <div class="item-cur"> <span>USD </span> <i class="fa fa-angle-down"></i></div>
                    <ul>
                      <li> <a href="#"><span class="cur_icon">€</span> EUR</a> </li>
                      <li> <a href="#"><span class="cur_icon">¥</span> JPY</a> </li>
                      <li> <a class="selected" href="#"><span class="cur_icon">$</span> USD</a> </li>
                    </ul>
                  </div>
                </div>
                
                <!-- End Default Welcome Message --> 
              </div>
            </div>
          </div>
        </div>
      </div>