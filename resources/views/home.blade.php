@extends('layouts.app')
@section('content')

<!-- Section: home -->
    <section id="home" class="divider">
      <div class="fullwidth-carousel" data-nav="true">
        <!-- Slider Revolution Start -->
        @foreach($slider as $i=>$sliders)
        <div class="item bg-img-cover" data-bg-img="{{URL::asset('images/sliders/'.$sliders->img)}}">
          <div class="display-table">
            <div class="display-table-cell">
              <div class="container pt-150 pb-150 slide-respon">
                <div class="row">
                  <div class="col-md-10 col-md-offset-1 text-center">
                    <div class="inline-block outline-border mt-40 pb-60 pl-60 pr-60 pt-40 cntn-slide-respon nomarg-on-respon bg-black-op">
                      <h1 class="text-uppercase text-theme-colored font-raleway font-weight-800 mb-0 mt-0 font-42 boxlabel" >{{ $sliders->title }} <span class="text-theme-colored"></span></h1>
                      <p class="font-16 text-white font-raleway letter-spacing-1 mb-20 desc hide-on-respon">{{ str_limit($sliders->desc, 250) }}</p>
                      <a class="btn btn-colored btn-theme-colored" href='{{URL::action("HomeController@detailSlider",array($sliders->id))}}'>View Details</a> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </section>

    <!-- Section: About -->
    <section id="about">
      <div class="container pt-50">
        <div class="section-content text-center">
          <div class="row about-absolt">
            @foreach($kua as $i=>$kuas)
            <div class="col-sm-6 col-md-4 maxwidth500 mb-sm-40 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <img class="img-fullwidth" src="{{URL::asset('images/kuas/'.$kuas->img)}}" alt="">
              <div class="bg-theme-colored-transparent-9 border-1px p-20">
                <h3 class="mt-0 text-white">{{ $kuas->title }}</h3>
                <p class="text-white">{!! str_limit($kuas->desc, 80) !!}</p>
                <a href='{{URL::action("DetailKuaController@index",array($kuas->id))}}' class="btn btn-sm btn-default">Read more</a>
              </div>
            </div>
            @endforeach
            @foreach($puskesmas as $i=>$puskesmass)
            <div class="col-sm-6 col-md-4 maxwidth500 mb-sm-40 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
              <img class="img-fullwidth" src="{{URL::asset('images/puskesmass/'.$puskesmass->img)}}" alt="">
              <div class="bg-theme-colored-transparent-9 border-1px p-20">
                <h3 class="mt-0 text-white">{{ $puskesmass->title }}</h3>
                <p class="text-white">{!! str_limit($puskesmass->desc, 80) !!}</p>
                <a href='{{URL::action("PuskesmasController@index",array($puskesmass->id))}}' class="btn btn-sm btn-default">Read more</a>
              </div>
            </div>
            @endforeach
            @foreach($bkkbn as $i=>$bkkbns)
            <div class="col-sm-6 col-md-4 maxwidth500 mb-sm-0 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
              <img class="img-fullwidth" src="{{URL::asset('images/bkkbns/'.$bkkbns->img)}}" alt="">
              <div class="bg-theme-colored-transparent-9 border-1px p-20">
                <h3 class="mt-0 text-white">{{ $bkkbns->title }}</h3>
                <p class="text-white">{!! str_limit($bkkbns->desc, 80) !!}</p>
                <a href='{{URL::action("DetailBkkbnController@index",array($bkkbns->id))}}' class="btn btn-sm btn-default">Read more</a>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>

    <!-- Section: intro  -->
    <section class="bg-lighter">
      <div class="container">
        <div class="section-content">
          <div class="row">
            @foreach($about as $i=>$abouts)
            <div class="col-md-6">
              <img class="img-fullwidth tentang-kami" src="{{URL::asset('images/abouts/'.$abouts->img)}}" alt="">
              <h3 class="line-bottom-double-line">{{ $abouts->title }}</h3>
              <p>{!! str_limit($abouts->desc, 200) !!}</p>
              <a class="text-theme-colored font-13" href='{{URL::action("TentangKamiController@detail",array($abouts->id))}}'>Read More →</a>
            </div>
            @endforeach
            <div class="col-md-6">
              @foreach($sambutan as $i=>$sambutans)
              <h3 class="line-bottom line-height-1 mt-0 mt-sm-30">{{ $sambutans->title }}</h3>
              <p class="mb-30">{!! str_limit($sambutans->desc, 200) !!}
              <a class="text-theme-colored font-13" href='{{URL::action("KonselingPranikahController@index",array($sambutans->id))}}'>Read More →</a>
              </p>
              @endforeach
              <div class="row">
              @foreach($kua as $i=>$kuas)
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box p-0 mb-30">
                    <a class="icon icon-sm pull-left sm-pull-none flip bg-theme-colored mb-sm-15 mb-0 mr-10" href='{{URL::action("DetailKuaController@index",array($kuas->id))}}'>
                      <!-- <i class="fa fa-comments-o text-white font-36"></i> -->
                      <img class="img-fullwidth" src="{{URL::asset('images/icon/kuas/'.$kuas->icon)}}" alt="">
                    </a>
                    <h4 class="icon-box-title m-0 mb-5">{{ $kuas->title }}</h4>
                    <p class="text-gray mb-5">{!! str_limit($kuas->desc, 100) !!}</p>
                   <a href='{{URL::action("DetailKuaController@index",array($kuas->id))}}' class="text-theme-colored font-13">Read More →</a>
                  </div>
                </div>
              @endforeach
              @foreach($bkkbn as $i=>$bkkbns)
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box p-0 mb-30">
                    <a class="icon icon-sm pull-left sm-pull-none flip bg-theme-colored mb-sm-15 mb-0 mr-10" href='{{URL::action("DetailBkkbnController@index",array($bkkbns->id))}}'>
                      <img class="img-fullwidth" src="{{URL::asset('images/icon/bkkbns/'.$bkkbns->icon)}}" alt="">
                    </a>
                    <h4 class="icon-box-title m-0 mb-5">{{ $bkkbns->title }}</h4>
                    <p class="text-gray mb-5">{!! str_limit($bkkbns->desc, 100) !!}</p>
                   <a href='{{URL::action("DetailBkkbnController@index",array($bkkbns->id))}}' class="text-theme-colored font-13">Read More →</a>
                  </div>
                </div>
              @endforeach
              @foreach($puskesmas as $i=>$puskesmass)
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box p-0 mb-sm-30">
                    <a class="icon icon-sm pull-left sm-pull-none flip bg-theme-colored mb-sm-15 mb-0 mr-10" href='{{URL::action("PuskesmasController@index",array($puskesmass->id))}}'>
                      <img class="img-fullwidth" src="{{URL::asset('images/icon/puskesmass/'.$puskesmass->icon)}}" alt="">
                    </a>
                    <h4 class="icon-box-title m-0 mb-5">{{ $puskesmass->title }}</h4>
                    <p class="text-gray mb-5">{!! str_limit($puskesmass->desc, 100) !!}</p>
                   <a href='{{URL::action("PuskesmasController@index",array($puskesmass->id))}}' class="text-theme-colored font-13">Read More →</a>
                  </div>
                </div>
              @endforeach
<!--                 <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box p-0">
                    <a class="icon icon-sm pull-left sm-pull-none flip bg-theme-colored mb-sm-15 mb-0 mr-10" href="#">
                      <i class="fa fa-stethoscope text-white font-36"></i>
                    </a>
                    <h4 class="icon-box-title m-0 mb-5">AKAD NIKAH</h4>
                    <p class="text-gray mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et magni temporibus voluptates adipisicing..</p>
                   <a href="#" class="text-theme-colored font-13">Read More →</a>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Services -->
    <section id="services">
      <div class="container pt-50 pb-50">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <h2 class="text-uppercase mt-0">Jadwal <span class="text-theme-colored">Layanan Kami</span></h2>
              <p>Jangan Lewatkan Jadwal SUSCATIN ( Kursus Calon Pengantin ) <br>Bagi Anda Yang Akan Melakukan Pernikahan Dibulan Ini.</p>
            </div>
          </div>
        </div>
        <div class="row multi-row-clearfix">
          <div class="col-md-12">
            <div id="calendar"></div>
          </div>
        </div>
      </div>
    </section>

    @foreach($kalenders as $i=>$kalender)
    <div id="{{$kalender->id}}" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">{{ $kalender->title }}</h4>
          </div>
          <div class="modal-body">
            <p>{{ $kalender->desc }}</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
    @endforeach

    <!-- Section: blog -->
    <section id="blog">
      <div class="container pt-50">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase mt-0">Berita <span class="text-theme-colored">Terbaru</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            @foreach($news as $i=>$new)
            <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <article class="post clearfix bg-lighter mb-sm-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img src="{{URL::asset('images/news/'.$new->img)}}" alt="" class="img-responsive img-fullwidth">
                  </div>
                </div>
                <div class="entry-content p-20">
                  <h4 class="entry-title text-white text-uppercase"><a class="font-weight-600" href='{{URL::action("DetailBeritaController@index",array($new->id))}}'>{{{ $new->title }}}</a></h4>
                  <div class="entry-meta">
                    <ul class="list-inline font-12 mb-10">
                      <li><i class="fa fa-user text-theme-colored mr-5"></i>By: {{{ $new->name }}} / </li>
                      <li><i class="fa fa-calendar text-theme-colored mr-5"></i> {{ Carbon\Carbon::parse($new->created_at)->formatLocalized('%B %d, %Y')}} / </li>
                      <li><i class="fa fa-comment-o text-theme-colored mr-5"></i>Comments: 45 </li>
                    </ul>
                  </div>
                  <p class="mt-5">{!! str_limit($new->desc, 80) !!}</p>
                  <a class="btn btn-theme-colored btn-sm mt-10" href='{{URL::action("DetailBeritaController@index",array($new->id))}}'> View Details</a>
                </div>
              </article>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Gallery -->
    <section id="gallery">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-7 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
              <h3 class="text-uppercase title line-bottom mt-0 mb-30"><i class="fa fa-calendar text-gray-darkgray mr-10"></i>Foto <span class="text-theme-colored">Galery</span></h3>
              <!-- Portfolio Gallery Grid -->

              <div class="gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery">
                <!-- Portfolio Item Start -->
              @foreach($galery as $i=>$galeries)
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{URL::asset('images/galeries/'.$galeries->img)}}" class="img-fullwidth galery-fit">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="{{URL::asset('images/galeries/'.$galeries->img)}}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
                <!-- Portfolio Item End -->
              </div>
              <!-- End Portfolio Gallery Grid -->
            </div>
            <div class="col-md-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <h3 class="text-uppercase title line-bottom mt-0 mb-30 mt-sm-40"><i class="fa fa-calendar text-gray-darkgray mr-10"></i>Client <span class="text-theme-colored">Testimonials</span></h3>

              <div class="bxslider bx-nav-top" data-count="2">
              @foreach($testimony as $i=>$testimonial)
                <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
                  <div class="testimonial pt-10">
<!--                     <div class="thumb pull-left mb-0 mr-0 pr-20">
                      <img width="75" class="img-circle" alt="" src="front/images/testimonials/1.jpg">
                    </div> -->
                    <div class="ml-100 ">
                      <p>{{ str_limit($testimonial->desc, 80) }}</p>
                      <p class="author mt-10">- <span class="text-theme-colored">{{{ $testimonial->title }}}</span></p>
                    </div>
                  </div>
                </div>
              @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection