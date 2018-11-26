
<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
 <head>
  <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('public/admin_asset/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('public/admin_asset/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
         Ecomerce @yield("title")
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--  Social tags      -->
    <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, material dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, material design, material dashboard bootstrap 4 dashboard">
    <meta name="description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- CSS Files -->

    <link href="{{asset('public/admin_asset/css/material-dashboard.min.css')}}" rel="stylesheet" />
        <link href="{{asset('public/admin_asset/css/custom.css')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('public/admin_asset/demo/demo.css')}}" rel="stylesheet" />
   
   <script src='https://devpreview.tiny.cloud/demo/tinymce.min.js'></script>
    <script>
      tinymce.init({
        selector: '#textArea, #productLongDescription'
      });
  </script>
</head>
 <body class="">

   <div class="wrapper ">
     <!-- sider bar start -->
     @include("admin.includes.leftMenu")
      <!-- end side bar  -->

    <div class="main-panel">
     <!--header start -->
           @include("admin.includes.header")


      <!--mainContent start-->
           @yield("adminMainContent")

       <!-- mainContent end-->

       
       <!-- footer start -->
       
          @include("admin.includes.footer")
               
    </div>
  </div>      
 
        

<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
      <li class="header-title"> Sidebar Filters</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger active-color">
                  <div class="badge-colors ml-auto mr-auto">
                    <span class="badge filter badge-purple" data-color="purple"></span>
                    <span class="badge filter badge-azure" data-color="azure"></span>
                    <span class="badge filter badge-green" data-color="green"></span>
                    <span class="badge filter badge-warning" data-color="orange"></span>
                    <span class="badge filter badge-danger" data-color="danger"></span>
                    <span class="badge filter badge-rose active" data-color="rose"></span>
                  </div>
                  <div class="clearfix"></div>
                </a>
            </li>

            
            <li class="header-title">Sidebar Background</li>
              <li class="adjustments-line">
                  <a href="javascript:void(0)" class="switch-trigger background-color">
                      <div class="ml-auto mr-auto">
                        <span class="badge filter badge-black active" data-background-color="black"></span>
                        <span class="badge filter badge-white" data-background-color="white"></span>
                        <span class="badge filter badge-red" data-background-color="red"></span>
                      </div>
                      <div class="clearfix"></div>
                  </a>
              </li>

              <li class="adjustments-line">
                  <a href="javascript:void(0)" class="switch-trigger">
                      <p>Sidebar Mini</p>
                      <label class="ml-auto">
                        <div class="togglebutton switch-sidebar-mini">
                          <label>
                            <input type="checkbox">
                            <span class="toggle"></span>
                          </label>
                        </div>
                      </label>
                      <div class="clearfix"></div>
                  </a>
              </li>

              <li class="adjustments-line">
                  <a href="javascript:void(0)" class="switch-trigger">
                      <p>Sidebar Images</p>
                      <label class="switch-mini ml-auto">
                        <div class="togglebutton switch-sidebar-image">
                          <label>
                            <input type="checkbox" checked="">
                            <span class="toggle"></span>
                          </label>
                        </div>
                      </label>
                      <div class="clearfix"></div>
                  </a>
              </li>

              <li class="header-title">Images</li>

              <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                  <img src="../assets/img/sidebar-1.jpg" alt="">
                </a>
              </li>
              <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                  <img src="../assets/img/sidebar-2.jpg" alt="">
                </a>
              </li>
              <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                  <img src="../assets/img/sidebar-3.jpg" alt="">
                </a>
              </li>
              <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                  <img src="../assets/img/sidebar-4.jpg" alt="">
                </a>
              </li>


            <li class="button-container">
              <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-rose btn-block btn-fill">Buy Now</a>
              <a href="https://demos.creative-tim.com/material-dashboard-pro/docs/2.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
                  Documentation
              </a>
              <a href="https://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-info btn-block">
                  Get Free Demo!
              </a>
            </li>
            

            
            <li class="button-container github-star">
                <a class="github-button" href="https://github.com/creativetimofficial/ct-material-dashboard-pro" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
            </li>
            <li class="header-title">Thank you for 95 shares!</li>

            <li class="button-container text-center">
                <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
                <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
                <br>
                <br>
            </li>
        </ul>
    </div>
</div>

        
        















<!--   Core JS Files   -->
<script src="{{asset('public/admin_asset/')}}/js/core/jquery.min.js" type="text/javascript"></script>
<script src="{{asset('public/admin_asset/')}}/js/core/popper.min.js" type="text/javascript"></script>
<script src="{{asset('public/admin_asset/')}}/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>

<script src="{{asset('public/admin_asset/')}}/js/plugins/perfect-scrollbar.jquery.min.js" ></script>


<!-- Plugin for the momentJs  -->
<script src="{{asset('public/admin_asset/')}}/js/plugins/moment.min.js"></script>

<!--  Plugin for Sweet Alert -->
<script src="{{asset('public/admin_asset/')}}/js/plugins/sweetalert2.js"></script>

<!-- Forms Validations Plugin -->
<script src="{{asset('public/admin_asset/')}}/js/plugins/jquery.validate.min.js"></script>

<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{asset('public/admin_asset/')}}/js/plugins/jquery.bootstrap-wizard.js"></script>

<!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{asset('public/admin_asset/')}}/js/plugins/bootstrap-selectpicker.js" ></script>

<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{asset('public/admin_asset/')}}/js/plugins/bootstrap-datetimepicker.min.js"></script>

<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="{{asset('public/admin_asset/')}}/js/plugins/jquery.dataTables.min.js"></script>

<!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{asset('public/admin_asset/')}}/js/plugins/bootstrap-tagsinput.js"></script>

<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{asset('public/admin_asset/')}}/js/plugins/jasny-bootstrap.min.js"></script>

<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="{{asset('public/admin_asset/')}}/js/plugins/fullcalendar.min.js"></script>

<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="{{asset('public/admin_asset/')}}/js/plugins/jquery-jvectormap.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('public/admin_asset/')}}/js/plugins/nouislider.min.js" ></script>

<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="../../../cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

<!-- Library for adding dinamically elements -->
<script src="{{asset('public/admin_asset/')}}/js/plugins/arrive.min.js"></script>


<!--  Google Maps Plugin    -->

<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="../../../buttons.github.io/buttons.js"></script>


<!-- Chartist JS -->
<script src="{{asset('public/admin_asset/')}}/js/plugins/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="{{asset('public/admin_asset/')}}/js/plugins/bootstrap-notify.js"></script>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="{{asset('public/admin_asset/')}}/js/material-dashboard.min.js" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('public/admin_asset/')}}/demo/demo.js"></script>


<script>
  $(document).ready(function(){
    $().ready(function(){
      $sidebar = $('.sidebar');

      $sidebar_img_container = $sidebar.find('.sidebar-background');

      $full_page = $('.full-page');

      $sidebar_responsive = $('body > .navbar-collapse');

      window_width = $(window).width();

      fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

      if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
              $('.fixed-plugin .dropdown').addClass('open');
          }

      }

      $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
              if (event.stopPropagation) {
                  event.stopPropagation();
              } else if (window.event) {
                  window.event.cancelBubble = true;
              }
          }
      });

      $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
              $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
              $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.attr('data-color', new_color);
          }
      });

      $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
              $sidebar.attr('data-background-color', new_color);
          }
      });

      $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
              $sidebar_img_container.fadeOut('fast', function() {
                  $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                  $sidebar_img_container.fadeIn('fast');
              });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
              var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

              $full_page_background.fadeOut('fast', function() {
                  $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                  $full_page_background.fadeIn('fast');
              });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
              var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
              var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
      });

      $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
              if ($sidebar_img_container.length != 0) {
                  $sidebar_img_container.fadeIn('fast');
                  $sidebar.attr('data-image', '#');
              }

              if ($full_page_background.length != 0) {
                  $full_page_background.fadeIn('fast');
                  $full_page.attr('data-image', '#');
              }

              background_image = true;
          } else {
              if ($sidebar_img_container.length != 0) {
                  $sidebar.removeAttr('data-image');
                  $sidebar_img_container.fadeOut('fast');
              }

              if ($full_page_background.length != 0) {
                  $full_page.removeAttr('data-image', '#');
                  $full_page_background.fadeOut('fast');
              }

              background_image = false;
          }
      });

      $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
              $('body').removeClass('sidebar-mini');
              md.misc.sidebar_mini_active = false;

              $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

              $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

              setTimeout(function() {
                  $('body').addClass('sidebar-mini');

                  md.misc.sidebar_mini_active = true;
              }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
              window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
              clearInterval(simulateWindowResize);
          }, 1000);

      });
    });
  });
</script>
  
<!-- Sharrre libray -->
<script src="{{asset('public/admin_asset/')}}/demo/jquery.sharrre.js"></script>
<script src="{{asset('public/admin_asset/js/main.js')}}"></script>


  <script>
    $(document).ready(function(){
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
      
      md.initVectorMap();
      
    });
</script>


<script>
  $(document).ready(function() {
    $('#datatables').DataTable({
      "pagingType": "full_numbers",
      "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
      ],
      responsive: true,
      language: {
        search: "_INPUT_",
        searchPlaceholder: "Search records",
      }
    });

    var table = $('#datatable').DataTable();

    // Edit record
    table.on('click', '.edit', function() {
      $tr = $(this).closest('tr');
      var data = table.row($tr).data();
      alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
    });

    // Delete a record
    table.on('click', '.remove', function(e) {
      $tr = $(this).closest('tr');
      table.row($tr).remove().draw();
      e.preventDefault();
    });

    //Like record
    table.on('click', '.like', function() {
      alert('You clicked on Like button');
    });
  });
</script>



    </body>

</html>
