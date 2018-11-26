      
<!DOCTYPE html>
<html lang="en">

<!-- Basic page needs -->
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>e-commerce</title>
<meta name="description" content="best template, template free, responsive theme, fashion store, responsive theme, responsive html theme, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template">
<meta name="keywords" content="bootstrap, ecommerce, fashion, layout, responsive, responsive template, responsive template download, responsive theme, retail, shop, shopping, store, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template"/>
<!-- Mobile specific metas  , -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}" />

<!-- Favicon  -->
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Dosis:400,300,200,500,600,700,800' rel='stylesheet' type='text/css'>
<!-- CSS Style -->
<!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="{{asset('public/fontEnd/css/bootstrap.min.css')}}">

<!-- font-awesome & simple line icons CSS -->
<link rel="stylesheet" type="text/css" href="{{asset('public/fontEnd/css/font-awesome.css')}}" media="all">
<link rel="stylesheet" type="text/css" href="{{asset('public/fontEnd/css/simple-line-icons.css')}}" media="all">

<!-- owl.carousel CSS -->
<link rel="stylesheet" type="text/css" href="{{asset('public/fontEnd/css/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/fontEnd/css/owl.theme.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/fontEnd/css/owl.transitions.css')}}">

<!-- animate CSS  -->
<link rel="stylesheet" type="text/css" href="{{asset('public/fontEnd/css/animate.css')}}" media="all">
<!-- flexslider CSS -->
<link rel="stylesheet" type="text/css" href="{{asset('public/fontEnd/css/flexslider.css')}}" >
<!-- jquery-ui.min CSS  -->
<link rel="stylesheet" type="text/css" href="{{asset('public/fontEnd/css/jquery-ui.css')}}">
<!-- Revolution Slider CSS -->
<link href="{{asset('public/fontEnd/css/revolution-slider.css')}}" rel="stylesheet">
<!-- style CSS -->
<link rel="stylesheet" href="{{asset('public/fontEnd/css/quick_view_popup.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('public/fontEnd/css/blog.css')}}" media="all">
<link rel="stylesheet" type="text/css" href="{{asset('public/fontEnd/css/style.css')}}" media="all">
<script src="{{asset('public/fontEnd/js/ajax.js')}}"></script> 

  <script> 
    $(document).ready(function(){
        $("span.cart-title").hide();
        @if(Cart::count()>0)
            $(".cart-title").show();
          @endif
     }); 
   </script>
</head>
<!-- style CSS -->

<body class="cms-index-index cms-home-page">
<!-- mobile menu -->

    @include('fontEnd.includes.mobileMenu')

<!-- end mobile menu -->
<div id="page"> 
  <!-- Header -->
  <header>
    <div class="header-container">
     <!--header top -->
          @include("fontEnd.includes.headertop")

     <!-- header top end -->

     <!--header bottom-->
   
        @include("fontEnd.includes.headerbottom")

     <!--header bottm end-->

  </header>
  <!-- end header --> 
  
  <!-- Navbar -->
     @include("fontEnd.includes.menuArea")
   
  <!-- end nav --> 
  

<!--maninContnet-->


   @yield('mainContent')






  
  <!-- Footer -->
  <footer>
     <!-- footer top -->
         @include("fontEnd.includes.footertop");   

     <!--footer top end-->
    
     <!--footer middle start-->

        @include("fontEnd.includes.footerMiddle")
     <!--footer middle end-->

   <!--footer top-->
        @include('fontEnd.includes.footerBottom')

   <!--footer top end -->

  </footer>
  <a href="#" class="totop"> </a> </div>

  <!-- End Footer --> 
     
  @yield("product_view")



<!-- JS --> 

<!-- jquery js --> 
<script src="{{asset('public/fontEnd/js/jquery.min.js')}}"></script> 
<!-- bootstrap js --> 
<script src="{{asset('public/fontEnd/js/bootstrap.min.js')}}"></script> 
<!-- owl.carousel.min js --> 
<script src="{{asset('public/fontEnd/js/owl.carousel.min.js')}}"></script> 
<!-- bxslider js --> 
<script src="{{asset('public/fontEnd/js/jquery.bxslider.js')}}"></script> 
<!-- Slider Js --> 
<script src="{{asset('public/fontEnd/js/revolution-slider.js')}}"></script> 
<!-- flexslider js --> 
<script src="{{asset('public/fontEnd/js/jquery.flexslider.js')}}"></script> 
<!-- megamenu js --> 
<script src="{{asset('public/fontEnd/js/megamenu.js')}}"></script> 
<script>
  /* <![CDATA[ */   
  var mega_menu = '0';
  
  /* ]]> */
  </script> 

<!-- jquery.mobile-menu js --> 
<script src="{{asset('public/fontEnd/js/mobile-menu.js')}}"></script> 

<!--jquery-ui.min js --> 
<script src="{{asset('public/fontEnd/js/jquery-ui.js')}}"></script> 

<!-- main js --> 
<script src="{{asset('public/fontEnd/js/main.js')}}"></script> 

<!-- countdown js --> 
<script src="{{asset('public/fontEnd/js/countdown.js')}}"></script> 
<script src="{{asset('public/fontEnd/js/slider.html')}}"></script> 

<!-- Revolution Slider --> 
<script>
      jQuery(document).ready(function() {
             jQuery('.tp-banner').revolution(
              {
                  delay:9000,
                  startwidth:1170,
                  startheight:530,
                  hideThumbs:10,

                  navigationType:"bullet",							
                  navigationStyle:"preview1",

                  hideArrowsOnMobile:"on",
                  
                  touchenabled:"on",
                  onHoverStop:"on",
                  spinner:"spinner4"
              });
      });
</script> 

<!--cloud-zoom js --> 
<script src="{{asset('public/fontEnd/js/cloud-zoom.js')}}"></script> 

<!-- Hot Deals Timer 1--> 
<script>
      var dthen1 = new Date("12/25/20 11:59:00 PM");
      start = "06/04/18 03:02:11 AM";
      start_date = Date.parse(start);
      var dnow1 = new Date(start_date);
      if(CountStepper>0)
          ddiff= new Date((dnow1)-(dthen1));
      else
          ddiff = new Date((dthen1)-(dnow1));
      gsecs1 = Math.floor(ddiff.valueOf()/1000);
      
      var iid1 = "countbox_1";
      CountBack_slider(gsecs1,"countbox_1", 1);
  </script>
    
</body>
</html>
