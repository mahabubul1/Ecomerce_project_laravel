
 
 <nav>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4">
          <div class="mm-toggle-wrap">
            <div class="mm-toggle"> <i class="fa fa-align-justify"></i> </div>
            <span class="mm-label">Categories</span> </div>
          <div class="mega-container visible-lg visible-md visible-sm">
            <div class="navleft-container">
              <div class="mega-menu-title">
                <h3>Categories</h3>
              </div>
              <div class="mega-menu-category">
                <ul class="nav">
                  @foreach($categories as $category)
                  <li><a href="#"> {{$category->categoryName}}</a>
                    <div class="wrap-popup">
                      <div class="popup">
                        <div class="row">
                           @foreach($category->manufactires as $manufacture)
                             
                            <div class="col-md-4 col-sm-6">
                              <ul class="nav">
                                <li><a target="_blank" href="{{url('product/Manufacture/'.$manufacture->id)}}"><span> {{$manufacture->manufactureName}}</span></a></li>
                              </ul>
                           </div>
                          @endforeach
                        
                        </div>
                      </div>
                    </div>
                  </li>
 
                  @endforeach

                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9 col-sm-8">
          <div class="mtmegamenu">
          </div>
        </div>
      </div>
    </div>
  </nav>