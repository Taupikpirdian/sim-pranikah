<!DOCTYPE html>
<html>
  <head>
    <title>SIM PRANIKAH | Admin Dashboard</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
    {!! Html::style('admin/bower_components/select2/dist/css/select2.min.css') !!}
    {!! Html::style('admin/bower_components/bootstrap-daterangepicker/daterangepicker.css') !!}
    {!! Html::style('admin/bower_components/dropzone/dist/dropzone.css') !!}
    {!! Html::style('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
    {!! Html::style('admin/bower_components/fullcalendar/dist/fullcalendar.min.css') !!}
    {!! Html::style('admin/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css') !!}
    {!! Html::style('admin/css/main.css?version=3.7.0') !!}
  </head>
  <body>
    <div class="all-wrapper menu-side with-side-panel">
      <div class="layout-w">
        <!--------------------
        START - Mobile Menu
        -------------------->
        <div class="menu-mobile menu-activated-on-click color-scheme-dark">
          <div class="mm-logo-buttons-w">
            <a class="mm-logo" href="{{URL::to('/@dmin')}}"><img src="admin/img/logo.png"><span>Sim Pranikah Admin</span></a>
            <div class="mm-buttons">
              <div class="content-panel-open">
                <div class="os-icon os-icon-grid-circles"></div>
              </div>
              <div class="mobile-menu-trigger">
                <div class="os-icon os-icon-hamburger-menu-1"></div>
              </div>
            </div>
          </div>
          <div class="menu-and-user">
            <div class="logged-user-w">
              <div class="avatar-w">
                <img alt="" src="admin/img/avatar1.jpg">
              </div>
              <div class="logged-user-info-w">
                <div class="logged-user-name">
                  {{ Auth::user()->name }}
                </div>
                <div class="logged-user-role">
                  Administrator
                </div>
              </div>
            </div>
            <!--------------------
            START - Mobile Menu List
            -------------------->
            <ul class="main-menu">
            @if(Auth::check())
            @if(Auth::user()->groups()->where("name", "=", "Admin")->first())
              <li class="has-sub-menu">
                <a href="index.html">
                  <div class="icon-w">
                    <div class="os-icon os-icon-window-content"></div>
                  </div>
                  <span>Dashboard</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="{{URL::to('/roles')}}">Role</a>
                  </li>
                  <li>
                    <a href="{{URL::to('/groups')}}">Groups</a>
                  </li>
                  <li>
                    <a href="{{URL::to('/group-roles')}}">Groups Roles</a>
                  </li>
                  <li>
                    <a href="{{URL::to('/user-groups')}}">User Groups</a>
                  </li>
                </ul>
              </li>
              <li class="">
                <a href="{{URL::to('/kalender/index')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Kalender</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('/slider/index')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Slider</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('/kua/index')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>KUA</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('/bkkbn/index')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>DP3AKB</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('/puskesmas/index')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Puskesmas</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('/sambutan/index')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Konseling Pranikah</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('/about/index')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Tentang Kami</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('/news/index')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Berita</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('/galery/index')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Galeri</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('/contact/index')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Kontak</span>
                </a>
              </li>
              
              <li class="">
                <a href="{{URL::to('/testimony/index')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Testimoni</span>
                </a>
              </li>
              <li class="menu-sub-header">
                <span>Admin KUA</span>
              </li>
              <li class="">
                <a href="{{URL::to('/data-master-catin/index')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Input Data Master Catin</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('#')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Download Persyaratan</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('/list-print')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Print N1, N4, N7</span>
                </a>
              </li>
              <li class="menu-sub-header">
                <span>Admin Puskesmas</span>
              </li>
              <li class="">
                <a href="{{URL::to('/cek-kesehatan')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Check Imunisasi TT</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('/list-laboratorium')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Check Laboratorium</span>
                </a>
              </li>
              <li class="menu-sub-header">
                <span>Admin D3PAKB</span>
              </li>
              <li class="">
                <a href="{{URL::to('/cek-kie')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>List Catin BP3AKB</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('#')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Cetak Surat</span>
                </a>
              </li>
              @else
              @endif
              @endif
              @if (Auth::user()->hasAnyRole('Kua'))
              <li class="menu-sub-header">
                <span>Admin KUA</span>
              </li>
              <li class="">
                <a href="{{URL::to('/data-master-catin/index')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Input Data Master Catin</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('#')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Download Persyaratan</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('/list-print')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Print N1, N4, N7</span>
                </a>
              </li>
              @endif
              @if (Auth::user()->hasAnyRole('Puskesmas'))
              <li class="menu-sub-header">
                <span>Admin Puskesmas</span>
              </li>
              <li class="">
                <a href="{{URL::to('/cek-kesehatan')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Check Kesehatan</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('#')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Pemberian Imunisasi</span>
                </a>
              </li>
              @endif
              @if (Auth::user()->hasAnyRole('Dp3akb'))
              <li class="menu-sub-header">
                <span>Admin D3PAKB</span>
              </li>
              <li class="">
                <a href="{{URL::to('/cek-kie')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Check KIE</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('#')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Cetak Surat</span>
                </a>
              </li>
            @endif
            </ul>
            <!--------------------
            END - Mobile Menu List
            -------------------->
            <div class="mobile-menu-magic">
              <h4>
                Simpranikah
              </h4>
              <p>
                Admin Dashboard
              </p>
            </div>
          </div>
        </div>
        <!--------------------
        END - Mobile Menu
        --------------------><!--------------------
        START - Menu Side Website
        -------------------->
        <div class="desktop-menu menu-side-w menu-activated-on-click">
          <div class="logo-w">
            <a class="logo" href="{{URL::to('/@dmin')}}"><img src="admin/img/logo.png"><span>Sim Pranikah Admin</span></a>
          </div>
          <div class="menu-and-user">
            <div class="logged-user-w">
              <div class="logged-user-i">
                <div class="avatar-w">
                  <img alt="" src="img/avatar1.jpg">
                </div>
                <div class="logged-user-info-w">
                  <div class="logged-user-name">
                    {{ Auth::user()->name }}
                  </div>
                  <div class="logged-user-role">
                    Administrator
                  </div>
                </div>
                <div class="logged-user-menu">
                  <div class="logged-user-avatar-info">
                    <div class="avatar-w">
                      <img alt="" src="img/avatar1.jpg">
                    </div>
                    <div class="logged-user-info-w">
                      <div class="logged-user-name">
                        {{ Auth::user()->name }}
                      </div>
                      <div class="logged-user-role">
                        Administrator
                      </div>
                    </div>
                  </div>
                  <div class="bg-icon">
                    <i class="os-icon os-icon-wallet-loaded"></i>
                  </div>
                  <ul>
                    <li>
                      <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <ul class="main-menu">
            @if(Auth::check())
            @if(Auth::user()->groups()->where("name", "=", "Admin")->first())
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-window-content"></div>
                  </div>
                  <span>Dashboard</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="{{URL::to('/roles')}}">Role</a>
                  </li>
                  <li>
                    <a href="{{URL::to('/groups')}}">Groups</a>
                  </li>
                  <li>
                    <a href="{{URL::to('/group-roles')}}">Groups Roles</a>
                  </li>
                  <li>
                    <a href="{{URL::to('/user-groups')}}">User Groups</a>
                  </li>
                </ul>
              </li>
              <li class="">
                <a href="{{URL::to('/kalender/index')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Kalender</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('/slider/index')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Slider</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('/kua/index')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>KUA</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('/bkkbn/index')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>DP3AKB</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('/puskesmas/index')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Puskesmas</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('/sambutan/index')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Konseling Pranikah</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('/about/index')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Tentang Kami</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('/news/index')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Berita</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('/galery/index')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Galeri</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('/contact/index')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Kontak</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('/testimony/index')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Testimoni</span>
                </a>
              </li>
              @else
              @endif
              @endif

              @if (Auth::user()->hasAnyRole('Kua'))
              <li class="menu-sub-header">
                <span>Admin KUA</span>
              </li>
              <li class="">
                <a href="{{URL::to('/data-master-catin/index')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Input Data Master Catin</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('#')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Download Persyaratan</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('/list-print')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Print N1, N4, N7</span>
                </a>
              </li>
              @endif

              @if (Auth::user()->hasAnyRole('Puskesmas'))
              <li class="menu-sub-header">
                <span>Admin Puskesmas</span>
              </li>
              <li class="">
                <a href="{{URL::to('/cek-kesehatan')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Check Imunisasi TT</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('/list-laboratorium')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Check Laboratorium</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('/list-check-kesehatan')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Check Kesehatan</span>
                </a>
              </li>
              @endif

              @if (Auth::user()->hasAnyRole('Dp3akb'))
              <li class="menu-sub-header">
              <span>Admin D3PAKB</span>
              </li>
              <li class="">
                <a href="{{URL::to('/cek-kie')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>List Catin BP3AKB</span>
                </a>
              </li>
              <li class="">
                <a href="{{URL::to('#')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                  </div>
                  <span>Cetak Surat</span>
                </a>
              </li>
            @endif

            @if(Auth::user()->groups()->where("name", "=", "User")->first())
            <li class="menu-sub-header">
                <span>Data</span>
            </li>
            <li class="">
              <a href="{{URL::to('/data-master-catin/index')}}">
                <div class="icon-w">
                  <div class="os-icon os-icon-hierarchy-structure-2"></div>
                </div>
                <span>Input Data Master Catin</span>
              </a>
            </li>
            @endif
            </ul>

            <div class="side-menu-magic">
              <h4>
                Simpranikah
              </h4>
              <p>
                Admin Dashboard
              </p>
            </div>
          </div>
        </div>
        <!--------------------
        END - Menu side Website
        -------------------->
        <div class="content-w">
          <!--------------------
          END - Breadcrumbs
          -------------------->
          <div class="content-panel-toggler">
            <i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
          </div>
              @yield('content')
        </div>
      </div>
      </div>
      <div class="display-type"></div>
    </div>
    {!! Html::script('admin/bower_components/jquery/dist/jquery.min.js') !!}
    {!! Html::script('admin/bower_components/moment/moment.js') !!}
    {!! Html::script('admin/bower_components/chart.js/dist/Chart.min.js') !!}
    {!! Html::script('admin/bower_components/select2/dist/js/select2.full.min.js') !!}
    {!! Html::script('admin/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js') !!}
    {!! Html::script('admin/bower_components/ckeditor/ckeditor.js') !!}
    {!! Html::script('admin/bower_components/bootstrap-validator/dist/validator.min.js') !!}
    {!! Html::script('admin/bower_components/bootstrap-daterangepicker/daterangepicker.js') !!}
    {!! Html::script('admin/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js') !!}
    {!! Html::script('admin/bower_components/dropzone/dist/dropzone.js') !!}
    {!! Html::script('admin/bower_components/editable-table/mindmup-editabletable.js') !!}
    {!! Html::script('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}
    {!! Html::script('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}
    {!! Html::script('admin/bower_components/fullcalendar/dist/fullcalendar.min.js') !!}
    {!! Html::script('admin/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') !!}
    {!! Html::script('admin/bower_components/tether/dist/js/tether.min.js') !!}
    {!! Html::script('admin/bower_components/bootstrap/js/dist/util.js') !!}
    {!! Html::script('admin/bower_components/bootstrap/js/dist/alert.js') !!}
    {!! Html::script('admin/bower_components/bootstrap/js/dist/button.js') !!}
    {!! Html::script('admin/bower_components/bootstrap/js/dist/carousel.js') !!}
    {!! Html::script('admin/bower_components/bootstrap/js/dist/collapse.js') !!}
    {!! Html::script('admin/bower_components/bootstrap/js/dist/dropdown.js') !!}
    {!! Html::script('admin/bower_components/bootstrap/js/dist/modal.js') !!}
    {!! Html::script('admin/bower_components/bootstrap/js/dist/tab.js') !!}
    {!! Html::script('admin/bower_components/bootstrap/js/dist/tooltip.js') !!}
    {!! Html::script('admin/bower_components/bootstrap/js/dist/popover.js') !!}
    {!! Html::script('admin/js/dataTables.bootstrap4.min.js') !!}
    {!! Html::script('admin/js/main.js?version=3.7.0') !!}
    {!! Html::script('admin/js/jquery.printPage') !!}
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      
      ga('create', 'UA-XXXXXXXX-9', 'auto');
      ga('send', 'pageview');
    </script>
    <!-- wysiwig -->  
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'ckeditor' );
    </script>
  </body>
</html>
