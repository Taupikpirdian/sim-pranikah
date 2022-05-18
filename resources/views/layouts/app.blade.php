<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from html.kodesolution.live/s/counseling/v3.0/demo/index-mp-layout1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jul 2019 15:07:26 GMT -->
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Counseling - Best Psychology & Counseling HTML5 Template" />
<meta name="keywords" content="chiropractor, counseling, healthcare, psychiatrist, psychologist, psychology" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
 <title>SIM PRANIKAH</title>

<!-- Favicon and Touch Icons -->
<link href="front/images/favicon.png" rel="shortcut icon" type="image/png">
<link href="front/images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="front/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="front/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="front/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
{!! Html::style('front/css/bootstrap.min.css') !!}
{!! Html::style('front/css/jquery-ui.min.css') !!}
{!! Html::style('front/css/animate.css') !!}
{!! Html::style('front/css/css-plugin-collections.css') !!}
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="front/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
{!! Html::style('front/css/menuzord-skins/menuzord-rounded-boxed.css') !!}
<!-- CSS | Main style file -->
{!! Html::style('front/css/style-main.css') !!}
<!-- CSS | Preloader Styles -->
{!! Html::style('front/css/preloader.css') !!}
<!-- CSS | Custom Margin Padding Collection -->
{!! Html::style('front/css/custom-bootstrap-margin-padding.css') !!}
<!-- CSS | Responsive media queries -->
{!! Html::style('front/css/responsive.css') !!}
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="front/css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
{!! Html::style('front/js/revolution-slider/css/settings.css') !!}
{!! Html::style('front/js/revolution-slider/css/layers.css') !!}
{!! Html::style('front/js/revolution-slider/css/navigation.css') !!}

<!-- CSS | Theme Color -->
{!! Html::style('front/css/colors/theme-skin-green.css') !!}

<!-- external javascripts -->
{!! Html::script('front/js/jquery-2.2.4.min.js') !!}
{!! Html::script('front/js/jquery-ui.min.js') !!}
{!! Html::script('front/js/bootstrap.min.js') !!}
<!-- JS | jquery plugin collection for this theme -->
{!! Html::script('front/js/jquery-plugin-collection.js') !!}

<!-- Revolution Slider 5.x SCRIPTS -->
{!! Html::script('front/js/revolution-slider/js/jquery.themepunch.tools.min.js') !!}
{!! Html::script('front/js/revolution-slider/js/jquery.themepunch.revolution.min.js') !!}

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-square-swapping">
        <div class="cssload-square-part cssload-square-green"></div>
        <div class="cssload-square-part cssload-square-pink"></div>
        <div class="cssload-square-blend"></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
  <!-- Header -->
  <header id="header" class="header">
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default">
            <a class="menuzord-brand pull-left flip xs-pull-center mt-20" href="{{ url('/') }}">
              <img src="{{URL::asset('front/images/pranik.png')}}" alt="">
            </a>
            <ul class="menuzord-menu">
              <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
              <li class="{{ Request::is('konseling-pranikah') ? 'active' : '' }}"><a href="{{ url('/konseling-pranikah') }}">Konseling Pranikah</a></li>
              <li class="{{ Request::is('tentang-kami') ? 'active' : '' }}"><a href="{{ url('/tentang-kami') }}">Tentang Kami</a></li>
              <li class="{{ Request::is('kontak') ? 'active' : '' }}"><a href="{{ url('/kontak') }}">Kontak</a></li>
              @if(Auth::check())
              <li><a href="{{ url('/@dmin') }}">Lengkapi Data</a></li>
              @endif
              @guest
                  <li class="{{ Request::is('login') ? 'active' : '' }}"><a href="{{ route('login') }}">Login</a></li>
                  <li class="{{ Request::is('register') ? 'active' : '' }}"><a href="{{ route('register') }}">Register</a></li>
                  @else
                  <li><a href="#">{{ Auth::user()->name }}</a>
                    <ul class="dropdown">
                      <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                      </li>
                    </ul>
                  </li>
              @endguest
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  
  <!-- Start main-content -->
  <div class="main-content">
    

    @yield('content')

    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Tidak ada Jadwal</h4>
          </div>
          <div class="modal-body">
            <p>Tidak ada Jadwal</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

    <!-- Footer -->
    <footer id="footer" class="footer" data-bg-img="front/images/footer-bg.png" data-bg-color="#25272e">
      <div class="container pt-70 pb-40">
        <div class="row border-bottom-black">
          <div class="col-sm-6 col-md-3">
            <div class="widget dark">
              <img class="mt-10 mb-20" alt="" src="{{URL::asset('front/images/pranik.png')}}">
              <p>Bandung Jawabarat Kec Buah Batu.</p>
              <ul class="list-inline mt-5">
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="#">+62 813-9425-893</a> </li>
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="#">simpranikah@gmail.com</a> </li>
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray" href="#">www.SIMPRANIKAH.com</a> </li>
              </ul>
             <!--  <ul class="social-icons icon-dark icon-theme-colored icon-circled icon-sm mt-15">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
              </ul> -->
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="widget dark">
              <h5 class="widget-title line-bottom">Berita Terbaru</h5>
              <div class="latest-posts">
              @foreach($news as $i=>$new)
                <article class="post media-post clearfix pb-0 mb-10">
                  <a href="#" class="post-thumb"><img alt="" src="{{URL::asset('images/news/'.$new->img)}}" class="img-footer-fit"></a>
                  <div class="post-right">
                    <h5 class="post-title mt-0 mb-5"><a href="#">{{{ $new->title }}}</a></h5>
                    <p class="post-date mb-0 font-12">{{ Carbon\Carbon::parse($new->created_at)->formatLocalized('%B %d, %Y')}}</p>
                  </div>
                </article>
              @endforeach
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="widget dark">
              <h5 class="widget-title line-bottom">Link Cepat</h5>
              <ul class="list angle-double-right list-border">
                <li><a href="#">Home</a></li>
                <li><a href="#">Konseling Pernikahan</a></li>
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="#">Kontak</a></li>
                <li><a href="#">Faq</a></li>              
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="widget dark">
                <h5 class="widget-title line-bottom">Map</h5>
                <div id="flickr-feed" class="clearfix">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.60912443619!2d107.5731163132953!3d-6.903273916440719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C+Kota+Bandung%2C+Jawa+Barat!5e0!3m2!1sid!2sid!4v1564215296116!5m2!1sid!2sid" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom bg-black-333">
        <div class="container pt-15 pb-10">
          <div class="row">
            <div class="col-md-6">
              <p class="font-11 text-black-777 m-0 sm-text-center" style="color: white">Copyright &copy;2019 Konseling Pernikahan. All Rights Reserved</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
{!! Html::script('front/js/custom.js') !!}

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
{!! Html::script('front/js/revolution-slider/js/extensions/revolution.extension.actions.min.js') !!}
{!! Html::script('front/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') !!}
{!! Html::script('front/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js') !!}
{!! Html::script('front/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js') !!}
{!! Html::script('front/js/revolution-slider/js/extensions/revolution.extension.migration.min.js') !!}
{!! Html::script('front/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js') !!}
{!! Html::script('front/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js') !!}
{!! Html::script('front/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js') !!}
{!! Html::script('front/js/revolution-slider/js/extensions/revolution.extension.video.min.js') !!}

<script type="text/javascript">
   $(document).ready(function() {

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            navLinks: true, // can click day/week names to navigate views
            selectable: true,
            selectHelper: true,
            select: function(start, end) {
                // Display the modal.
                // You could fill in the start and end fields based on the parameters
                $('#myModal').modal('show');

            },

            @foreach($kalenders as $i=>$kalender)
              eventClick: function(event, element) {
                  // Display the modal and set the values to the event values.
                  $('#'+event.id).modal('show');
              },
            @endforeach

            editable: true,
            eventLimit: true, // allow "more" link when too many events
                events: [
            @foreach($kalenders as $i=>$kalender)
                  {
                      title: '{{ $kalender->title }}',
                      id: '{{ $kalender->id }}',
                      start: '{{ $kalender->start }}',
                      end: '{{ $kalender->end }}'
                  },
            @endforeach
              ]

        });
    });
</script>

        <!-- end .rev_slider_wrapper -->
        <script>
          $(document).ready(function(e) {
            $(".rev_slider_default").revolution({
              sliderType:"standard",
              sliderLayout: "auto",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                  keyboardNavigation: "off",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation: "off",
                  onHoverStop: "off",
                  touch: {
                      touchenabled: "on",
                      swipe_threshold: 75,
                      swipe_min_touches: 1,
                      swipe_direction: "horizontal",
                      drag_block_vertical: false
                  },
                arrows: {
                  style:"zeus",
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                  left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  },
                  right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  }
                },
                bullets: {
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  style:"metis",
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  direction:"horizontal",
                  h_align:"center",
                  v_align:"bottom",
                  h_offset:0,
                  v_offset:30,
                  space:5,
                  
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [700, 768, 960, 720],
              lazyType: "none",
              parallax: {
                  origo: "slidercenter",
                  speed: 1000,
                  levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                  type: "scroll"
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                  simplifyAll: "off",
                  nextSlideOnWindowFocus: "off",
                  disableFocusListener: false,
              }
            });
          });
        </script>
        <!-- Slider Revolution Ends -->
</body>

<!-- Mirrored from html.kodesolution.live/s/counseling/v3.0/demo/index-mp-layout1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jul 2019 15:10:22 GMT -->
</html>