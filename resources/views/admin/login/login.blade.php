<!DOCTYPE html>
<html lang="en">  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8" />
 <link rel="apple-touch-icon" sizes="76x76" href="{{asset('public/admin_asset/img/apple-icon.png')}}">
 <link rel="icon" type="image/png" href="{{asset('public/admin_asset/img/favicon.png')}}">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title> Material Dashboard/login   </title>

<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
<link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-pro" />

<!--  Social tags      -->
<meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, material dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, material design, material dashboard bootstrap 4 dashboard">
<meta name="description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">
<!-- Schema.org markup for Google+ -->
<meta itemprop="description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">
<meta itemprop="image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg">
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="../../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<!-- CSS Files -->
<link href="{{asset('public/admin_asset/css/material-dashboard.min.css')}}" rel="stylesheet" />
<!-- CSS Just for demo purpose, don't include it in your project -->
<link href="{{asset('public/admin_asset/assets/demo/demo.css')}}" rel="stylesheet" />
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
<!-- End Google Tag Manager -->

</head>
<body class="off-canvas-sidebar"> 
<div class="wrapper wrapper-full-page">

<div class="page-header login-page header-filter" filter-color="black" style="background-image: url('public/admin_asset/img/login.jpg'); background-size: cover; background-position: top center;">
  <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
  <div class="container">
    <div class="col-lg-4 col-md-6 col-sm-6 ml-auto mr-auto">
      {!! Form::open(['url' => 'login', 'method'=>'post']) !!}
        <div class="card card-login card-hidden">
          <div class="card-header card-header-rose text-center">
            <h4 class="card-title">Login</h4>
            <div class="social-line">
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-google-plus"></i>
              </a>
            </div>
          </div>
          <div class="card-body ">
            <p class="card-description text-center">Or Be Classical</p>
            <span class="bmd-form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input type="email" class="form-control" name="email" placeholder="Email...">
              
              </div>
              <span class="text-danger">{{ $errors->has("email")?$errors->first('email'):""}}</span>
            </span>
            <span class="bmd-form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password" class="form-control" placeholder="Password...">
               
              </div>
               <span class="text-danger">{{ $errors->has("password")?$errors->first('password'):""}}</span>
            </span>
          </div>
          <div class="card-footer justify-content-center">
            {!! Form::submit('Lets GO',['class'=>'btn btn-rose btn-link btn-lg'])!!};

          </div>
        </div>
      {!! Form::close() !!}
    </div>
  </div>
  <footer class="footer" >
    <div class="container">
        <div class="copyright float-right">  by
            <a href="#" target="_blank">mahabubul</a>  
        </div>
    </div>
</footer>
</div>
          
</div>
   

 
<script src="{{asset('public/admin_asset/js/core/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/admin_asset/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/admin_asset/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/admin_asset/js/plugins/perfect-scrollbar.jquery.min.js')}}" ></script>
<script src="{{asset('public/admin_asset/js/plugins/moment.min.js')}}"></script>

<!--  Plugin for Sweet Alert -->
<script src="{{asset('public/admin_asset/js/plugins/sweetalert2.js')}}"></script>

<!-- Forms Validations Plugin -->
<script src="{{asset('public/admin_asset/js/plugins/jquery.validate.min.js')}}"></script>

<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{asset('public/admin_asset/js/plugins/jquery.bootstrap-wizard.js')}}"></script>

<!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{asset('public/admin_asset/js/plugins/bootstrap-selectpicker.js')}}" ></script>

<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{asset('public/admin_asset/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>

<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="{{asset('public/admin_asset/js/plugins/jquery.dataTables.min.js')}}"></script>

<!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{asset('public/admin_asset/js/plugins/bootstrap-tagsinput.js')}}"></script>

<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{asset('public/admin_asset/js/plugins/jasny-bootstrap.min.js') }}"></script>
<script src="{{asset('public/admin_asset/js/plugins/fullcalendar.min.js') }}"></script>
<script src="{{asset('public/admin_asset/js/plugins/jquery-jvectormap.js') }}"></script>
<script src="{{asset('public/admin_asset/js/plugins/nouislider.min.js')}}" ></script>
<script src="{{asset('public/admin_asset/js/plugins/arrive.min.js') }}"></script>
<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="{{asset('public/admin_asset/buttons.github.io/buttons.js')}}"></script>


<!-- Chartist JS -->
<script src="{{asset('public/admin_asset/js/plugins/chartist.min.js')}}"></script>

<!--  Notifications Plugin    -->
<script src="{{asset('public/admin_asset/js/plugins/bootstrap-notify.js')}}"></script>
<script src="{{asset('public/admin_asset/js/material-dashboard.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/admin_asset/demo/demo.js')}}"></script>
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
<script src="{{asset('public/admin_asset/demo/jquery.sharrre.js')}}"></script>


     <script>
        $(document).ready(function(){
          demo.checkFullPageBackgroundImage();setTimeout(function(){
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
          }, 700);});
      </script>

    </body>
</html>
