<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>

  <!-- Google Web Fonts
  ================================================== -->

  <link href="https://fonts.googleapis.com/css?family=Heebo:300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Assistant:300,400,600,700,800" rel="stylesheet">

  <!-- Basic Page Needs
  ================================================== -->

  <title>{{ config('app.name') }}</title>

  <meta name = "format-detection" content = "telephone=no" />
  <meta charset="utf-8">

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <!--meta info-->
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">

  <!-- Vendor CSS
  ============================================ -->
  <link rel="stylesheet" type="text/css" media="all" href="{{asset('green_blue/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('green_blue/css/fontello.css')}}">
  <link rel="stylesheet" href="{{asset('green_blue/font/demo-files/demo.css')}}">
  <link rel="stylesheet" href="{{asset('green_blue/plugins/revolution/css/settings.css')}}">
  <link rel="stylesheet" href="{{asset('green_blue/plugins/revolution/css/layers.css')}}">
  <link rel="stylesheet" href="{{asset('green_blue/plugins/revolution/css/navigation.css')}}">
  <link rel="stylesheet" href="{{asset('green_blue/css/owl.carousel.css')}}">

  

  <!-- CSS theme files
  ============================================ -->
  <link rel="stylesheet" type="text/css" media="all" href="{{asset('green_blue/css/style.css')}}">
  <link rel="stylesheet" type="text/css" media="all" href="{{asset('green_blue/css/responsive.css')}}">


  <!-- Bootstrap 4.3.1 
  ============================================ -->
  {{-- <link rel="stylesheet" type="text/css" media="all" href="{{asset('bootstrap-4.3.1/css/bootstrap.min.css')}}"> --}}
  
  
  
</head>

<body class="wide-layout">

  <div class="loader"></div>

  <!--cookies-->
   <!-- <div class="cookies">
          <div class="container">
            <div class="clearfix">
              <span>Please note this website requires cookies in order to function correctly, they do not store any specific information about you personally.</span>
              <div class="f-right"><a href="#" class="btn btn-small btn-style-2">Accept Cookies</a><a href="#" class="btn btn-small btn-style-4">Read More</a></div>
            </div>
          </div>
        </div>  -->

  <!-- - - - - - - - - - - - - - Wrapper - - - - - - - - - - - - - - - - -->

  <div id="wrapper" class="wrapper-container">

    <!-- - - - - - - - - - - - - Mobile Menu - - - - - - - - - - - - - - -->

    <nav id="mobile-advanced" class="mobile-advanced"></nav>

    <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

    <header id="header">

      <!--search form-->
      <div class="searchform-wrap">
        <div class="vc-child h-inherit">

          <form>
            <input type="text" name="search" placeholder="Start typing...">
            <button type="button"></button>
          </form>

        </div>
      </div>
      
      <!-- top-bar -->

      <div class="top-bar">
        
        <div class="container">
          
          <div class="table-row">
            
            <div class="col-sm-6">
              
              <ul class="contact-info">
                <li>{{ __('layouts.phone') }}: <a href="#">800-987-65-43</a></li>
                <li>{{ __('layouts.email') }}: <a href="#">info@companyname.com</a></li>
              </ul>

            </div>
            <div class="col-sm-6">
              
              <ul class="client-info">
                
                {{-- <li><a href="#">{{ __('layouts.shipment_tracker') }}</a></li>
                <li><a href="#">{{ __('layouts.online_booking') }}</a></li>
                <li><a href="#">{{ __('layouts.contact') }}</a></li> --}}
                @guest
                <li><a href="{{ route('login') }}">{{ __('layouts.client_login') }}</a></li>
                @endguest
                
                {{-- <li class="lang-button"><a href="#">{{ __('layouts.english') }}</a>
                  <ul class="dropdown-list">
                    <li><a href="#">{{ __('layouts.english') }}</a></li>
                    <li><a href="#">{{ __('layouts.german') }}</a></li>
                    <li><a href="#">{{ __('layouts.spanish') }}</a></li>
                  </ul>
                </li> --}}

                
                
                @auth
                <li class="lang-button"><a href="#">{{Auth::user()->name}}</a>
                  <ul class="dropdown-list">
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>

                  </ul>
                </li>
                @endauth

              </ul>

            </div>
  
          </div>

        </div>

      </div>

      <!-- top-header -->

      <div class="top-header">

        <div class="container">

          <div class="table-row">
            
            <div class="col-md-3">

              <!--Logo-->
              
              <a href="{{URL::to('/')}}" class="logo">
          
                <img src="{{asset('pplb-logo.png')}}" alt="">

              </a>

            </div>
            <div class="col-md-9">
              
              <!-- - - - - - - - - - - - / Mobile Menu - - - - - - - - - - - - - -->

              <!--main menu-->

              <div class="menu-holder">
                
                <div class="menu-wrap">

                  <div class="nav-item">
                    
                    <!-- - - - - - - - - - - - - - Navigation - - - - - - - - - - - - - - - - -->

                    <nav id="main-navigation" class="main-navigation">
                      <ul id="menu" class="clearfix">
                        {{-- <!-- menu L1 with child -->
                        <li><a href="#">{{ __('layouts.home') }}</a>
                          
                          <div class="sub-menu-wrap">
                            <ul>

                              <!-- menu L2 with child -->
                              <li><a href="#">L2 - 1</a>
                                <div class="sub-menu-wrap sub-menu-inner">
                                  <ul>

                                    <!-- menu L3 single -->
                                    <li><a href="#">L3</a></li>
                                    <!-- menu L3 single -->

                                  </ul>
                                </div>
                              </li>
                              <!-- menu L2 with child -->

                              <!-- menu L2 single -->
                              <li><a href="#">L2 - 2</a></li>
                              <!-- menu L2 single -->

                            </ul>
                          </div>
                          
                        </li>
                        <!-- menu L1 with child --> --}}

                        <!-- menu L1 single -->
                        <li><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
                        
                        <!-- menu L1 single -->
                        
                      </ul>
                    </nav>

                    <!-- - - - - - - - - - - - - end Navigation - - - - - - - - - - - - - - - -->

                    <div class="search-holder">

                      <button class="search-button"></button>

                    </div>

                  </div>

                </div>

              </div>

            </div>
  
          </div>
          
        </div>

      </div>

    </header>

    <!-- - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - -->

    @yield('content')

    <!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->

    <footer id="footer" class="footer">
      
      <div class="footer-widgets">
        
        <div class="container">
        
          <div class="row">

            <div class="col-md-3 col-xs-6">
              
              <!-- - - - - - - - - - - - - - Widget - - - - - - - - - - - - - - - - -->
              <div class="widget">
                <h6 class="widget-title">{{ __('layouts.contact_us') }}</h6>
                <p>{{ config('app.name') }}<br>
                9870 St Vincent Place, Glasgow, <br>
                DC 45 Fr 45</p>

                <ul class="contact-info">

                  <li><span class="licon-telephone"></span> <a href="callto:18005596580">+ 1 800 559 6580</a></li>
                  <li><span class="licon-at-sign"></span> <a href="mailto:mail@companyname.com">mail@companyname.com</a></li>

                </ul>
                <ul class="social-icons">

                  <li><a href="#"><i class="icon-facebook"></i></a></li>
                  <li><a href="#"><i class="icon-gplus"></i></a></li>
                  <li><a href="#"><i class="icon-twitter"></i></a></li>
                  <li><a href="#"><i class="icon-linkedin-1"></i></a></li>
                  <li><a href="#"><i class="icon-mail"></i></a></li>

                </ul>
              </div>
              <!-- - - - - - - - - - - - - - End of Widget - - - - - - - - - - - - - - - - -->

            </div>
            <div class="col-md-3 col-xs-6">
              
              <!-- - - - - - - - - - - - - - Widget - - - - - - - - - - - - - - - - -->
              <div class="widget">
                <h6 class="widget-title">{{__('layouts.about')}} {{ config('app.name') }}</h6>
                <ul class="info-links">
                
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Our Team</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Global Network</a></li>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Contact Us</a></li>

                </ul>
              </div>
              <!-- - - - - - - - - - - - - - End of Widget - - - - - - - - - - - - - - - - -->

            </div>
            <div class="col-md-3 col-xs-6">
              
              <!-- - - - - - - - - - - - - - Widget - - - - - - - - - - - - - - - - -->
              <div class="widget">
                <h6 class="widget-title">Services</h6>
                <ul class="info-links">
                
                  <li><a href="#">Road Transport</a></li>
                  <li><a href="#">Sea Freight</a></li>
                  <li><a href="#">Air Freight</a></li>
                  <li><a href="#">Project Forwarding</a></li>
                  <li><a href="#">Logistics</a></li>
                  <li><a href="#">Warehousing</a></li>
                  <li><a href="#">Cargo insurance</a></li>
                  <li><a href="#">Supply Chain</a></li>

                </ul>
              </div>
              <!-- - - - - - - - - - - - - - End of Widget - - - - - - - - - - - - - - - - -->

            </div>
            <div class="col-md-3 col-xs-6">
              
              <!-- - - - - - - - - - - - - - Widget - - - - - - - - - - - - - - - - -->
              <div class="widget">
                <h6 class="widget-title">Newsletter Sign Up</h6>
                <p>Sign up to our newsletter and get exclusive offers and news you wont find anywhere else straight to your inbox!</p>
                <form id="newsletter" class="lineform">

                  <input type="email" name="newsletter-email" placeholder="Enter your email address">

                  <button class="lineform-btn btn">Sign Up</button>

                </form>
              </div>
              <!-- - - - - - - - - - - - - - End of Widget - - - - - - - - - - - - - - - - -->

            </div>

          </div>
          
        </div>

      </div>

      <!-- - - - - - - - - - - - - - Copyright - - - - - - - - - - - - - - - - -->
      <div class="copyright">
        
        <div class="container">

          <div class="table-row">

            <div class="col-sm-6">
              Copyright {{ config('app.name') }} © {{ \Carbon\Carbon::now()->format('Y')}}. All Rights Reserved
            </div>
            <div class="col-sm-6">
              
              <ul class="info-links h-type">
              
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Service Terms</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Sitemap</a></li>

              </ul>

            </div>

          </div>

        </div>

      </div>
      <!-- - - - - - - - - - - - - - End Copyright - - - - - - - - - - - - - - - - -->

    </footer>

    <!-- - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - -->

  </div>

  <!-- - - - - - - - - - - - end Wrapper - - - - - - - - - - - - - - -->

  <!-- JS Libs & Plugins
  ============================================ -->
  <script src="{{asset('green_blue/js/libs/jquery.modernizr.js')}}"></script>
  <script src="{{asset('green_blue/js/libs/jquery-2.2.4.min.js')}}"></script>
  <script src="{{asset('green_blue/js/libs/jquery-ui.min.js')}}"></script>
  <script src="{{asset('green_blue/js/libs/retina.min.js')}}"></script>
  <script src="{{asset('green_blue/plugins/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('green_blue/plugins/jquery.localScroll.min.js')}}"></script>
  <script src="{{asset('green_blue/plugins/jquery.queryloader2.min.js')}}"></script>
  <script src="{{asset('green_blue/plugins/bootstrap.js')}}"></script>
  <script src="{{asset('green_blue/plugins/owl.carousel.min.js')}}"></script>
  <script src="{{asset('green_blue/plugins/revolution/js/jquery.themepunch.tools.min.js')}}?ver=5.0"></script>
  <script src="{{asset('green_blue/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}?ver=5.0"></script>

  <!-- JS theme files
  ============================================ -->
  <script src="{{asset('green_blue/js/plugins.js')}}"></script>
  <script src="{{asset('green_blue/js/script.js')}}"></script>


  <!-- Bootstrap 4.3.1 
  ============================================ -->
  {{-- <script src="{{asset('bootstrap-4.3.1/js/bootstrap.min.js')}}"></script> --}}
  
</body>
</html>