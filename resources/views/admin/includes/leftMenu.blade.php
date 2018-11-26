   <div class="sidebar" data-color="rose" data-background-color="black" data-image="{{asset('public/admin_asset/')}}/img/sidebar-1.jpg">
      <div class="logo">
           <a href="{{url('admin/dashboard') }}" style="text-align: center;" class="simple-text logo-normal">  Creative   </a>
      </div>
      <div class="sidebar-wrapper">
          <div class="user">
              <div class="photo">
                  <img src="{{asset('public/admin_asset/img/faces/avatar.jpg')}}" />
              </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>
                      {{ Auth::user()->name }}
                      <b class="caret"></b>
                    </span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                              <span class="sidebar-mini"> MP </span>
                              <span class="sidebar-normal"> My Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                              <span class="sidebar-mini"> EP </span>
                              <span class="sidebar-normal"> Edit Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                              <span class="sidebar-mini"> S </span>
                              <span class="sidebar-normal"> Settings </span>
                            </a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                              <span class="sidebar-mini"> L </span>
                              <span class="sidebar-normal"> Log out </span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">

            <li class="nav-item active ">
                <a class="nav-link" href="{{url('admin/dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#pagesUsers">
                    <i class="material-icons">image</i>
                    <p> Users Info 
                       <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse" id="pagesUsers">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">
                              <span class="sidebar-mini"> C</span>
                              <span class="sidebar-normal">User Add</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{url('admin/Category/manage')}}">
                              <span class="sidebar-mini"> C</span>
                              <span class="sidebar-normal"> Category Manage </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
                    <i class="material-icons">image</i>
                    <p> Cateogry 
                       <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse" id="pagesExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{url('admin/Category/Add')}}">
                              <span class="sidebar-mini"> C</span>
                              <span class="sidebar-normal">Category Add</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{url('admin/Category/manage')}}">
                              <span class="sidebar-mini"> C</span>
                              <span class="sidebar-normal"> Category Manage </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
                    <i class="material-icons">apps</i>
                    <p> Manufacture Info 
                       <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse" id="componentsExamples">
                    <ul class="nav">
                      <li class="nav-item ">
                          <a class="nav-link"  href="{{url('admin/Manufacture/Add')}}">
                            <span class="sidebar-mini"> M</span>
                            <span class="sidebar-normal">  Manufacture Add
                             
                            </span>

                          </a>

                       </li>   

                        <li class="nav-item ">
                            <a class="nav-link" href="{{url('admin/Manufacture/manage')}}">
                              <span class="sidebar-mini"> M </span>
                               <span class="sidebar-normal"> Manufacture All </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
                   <i class="material-icons">apps</i>
                    <p> Brand Info
                       <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse" id="tablesExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{url('admin/Brand/Add')}}">
                                <span class="sidebar-mini"> B </span>
                                <span class="sidebar-normal"> Brand Add </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{url('admin/Brand/manage')}}">
                              <span class="sidebar-mini"> B </span>
                              <span class="sidebar-normal"> Brand All Manage </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                    <i class="material-icons">apps</i>
                    <p> Product info
                       <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse" id="formsExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{url('admin/Product/Add')    }}">
                              <span class="sidebar-mini">P </span>
                              <span class="sidebar-normal">Product Add </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{url('admin/Product/manage')}}">
                              <span class="sidebar-mini"> P </span>
                              <span class="sidebar-normal"> product Manage  </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
      
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#mapsExamples">
                    <i class="material-icons">place</i>
                    <p> Maps 
                       <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse" id="mapsExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="maps/google.html">
                              <span class="sidebar-mini"> GM </span>
                              <span class="sidebar-normal"> Google Maps </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="maps/fullscreen.html">
                              <span class="sidebar-mini"> FSM </span>
                              <span class="sidebar-normal"> Full Screen Map </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="maps/vector.html">
                              <span class="sidebar-mini"> VM </span>
                              <span class="sidebar-normal"> Vector Map </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="widgets.html">
                    <i class="material-icons">widgets</i>
                    <p> Widgets </p>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="charts.html">
                    <i class="material-icons">timeline</i>
                    <p> Charts </p>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="calendar.html">
                    <i class="material-icons">date_range</i>
                    <p> Calendar </p>
                </a>
            </li>
            
        </ul>
    </div>
</div>