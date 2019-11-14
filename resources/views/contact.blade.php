@extends('layouts.theme.header1')

@section('content')


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

  <title>Expeditor</title>

  <meta name = "format-detection" content = "telephone=no" />
  <meta charset="utf-8">

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <!--meta info-->
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">

  <!-- CSS
  ================================================== -->
  <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/fontello.css">
  <link rel="stylesheet" href="font/demo-files/demo.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/jquery.fancybox.css">
  

  <!-- CSS theme files
  ============================================ -->
  <link rel="stylesheet" type="text/css" media="all" href="css/style.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/responsive.css">

  
  
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

    <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

    <div class="breadcrumbs-wrap data-grad-bg">

      <div class="container">
        
        <h1 class="page-title">Contact Us</h1>

        <ul class="breadcrumbs">

          <li><a href="{{ route('FrontPage') }}">Home</a></li>
          <li>Contact Us</li>

        </ul>

      </div>

    </div>

    <!-- - - - - - - - - - - - - end Breadcrumbs - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

    <div id="content">
      
      <!-- Google map -->
      <div class="relative">

        <div id="googleMap" class="map_container"></div>

      </div>
      
      <!-- page-section -->
      <div class="page-section-bg type2">
        
        <div class="container">
          
          <div class="row">
            <div class="col-md-3 col-sm-6">
              
              <h5 class="fw-medium">Europe Office</h5>
              <p>9870 St Vincent Place, Glasgow, <br>
              DC 45 Fr 45</p>
              <ul class="contact-info">

                <li><span class="licon-telephone"></span> <a href="callto:18005596580">+ 1 800 559 6580</a></li>
                <li><span class="licon-at-sign"></span> <a href="mailto:mail@companyname.com">mail@companyname.com</a></li>

              </ul>
            </div>
            <div class="col-md-3 col-sm-6">
              
              <h5 class="fw-medium">Americas Office</h5>
              <p>9870 St Vincent Place, Glasgow, <br>
              DC 45 Fr 45</p>
              <ul class="contact-info">

                <li><span class="licon-telephone"></span> <a href="callto:18005596580">+ 1 800 559 6580</a></li>
                <li><span class="licon-at-sign"></span> <a href="mailto:mail@companyname.com">mail@companyname.com</a></li>

              </ul>
            </div>
            <div class="col-md-3 col-sm-6">
              
              <h5 class="fw-medium">Middle East & Africa Office</h5>
              <p>9870 St Vincent Place, Glasgow, <br>
              DC 45 Fr 45</p>
              <ul class="contact-info">

                <li><span class="licon-telephone"></span> <a href="callto:18005596580">+ 1 800 559 6580</a></li>
                <li><span class="licon-at-sign"></span> <a href="mailto:mail@companyname.com">mail@companyname.com</a></li>

              </ul>
            </div>
            <div class="col-md-3 col-sm-6">
              
              <h5 class="fw-medium">Asia Office</h5>
              <p>9870 St Vincent Place, Glasgow, <br>
              DC 45 Fr 45</p>
              <ul class="contact-info">

                <li><span class="licon-telephone"></span> <a href="callto:18005596580">+ 1 800 559 6580</a></li>
                <li><span class="licon-at-sign"></span> <a href="mailto:mail@companyname.com">mail@companyname.com</a></li>

              </ul>
            </div>
          </div>

        </div>

      </div>

      <!-- page-section -->
      <div class="page-section">
        
        <div class="container">
          
          <div class="row">
            <div class="col-md-6">
              
              <h2>Contact Us</h2>
              <p>Please fill out the form below and we will get back to you as soon as possible.</p>
              <form id="contact-form" action="" class="contact-form form-style1 fx-cols-2">
                
                <div class="form-column">
                  <input type="text" name="cf-name" placeholder="First Name">
                </div>
                <div class="form-column">
                  <input type="text" placeholder="Last Name">
                </div>
                <div class="form-column">
                  <input type="text" name="cf-email" placeholder="Email">
                </div>
                <div class="form-column">
                  <input type="text" placeholder="Phone number">
                </div>
                <div class="form-column-full">

                   <div class="custom-select">
                    <div class="select-title">Select a department</div>
                    <ul id="menu-type" class="select-list"></ul>
                    <select class="hide">
                      <option value="menu">Option 1</option>
                      <option value="menu">Option 2</option>
                      <option value="menu">Option 3</option>
                    </select>
                  </div>

                </div>
                <div class="form-column-full">
                  <textarea name="cf-message" rows="4" placeholder="Message"></textarea>
                </div>
                <div class="form-column-full">
                  <button type="submit" class="btn" data-type="submit">Send Message</button>
                </div>

              </form>

            </div>
            <div class="col-md-6">
              
              <div class="banners-wrap fx-cols-2">
                
                <!-- Banner -->
                <a href="#" class="banner-item">
                  <div class="banner-inner">
                    <h5 class="banner-title">Get a Free Quote!</h5>
                    <p>Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula. </p>
                    <div class="btn btn-small">Start a Quote</div>
                    <i class="licon-quote-open"></i>
                  </div>
                </a>

                <!-- Banner -->
                <a href="#" class="banner-item">
                  <div class="banner-inner">
                    <h5 class="banner-title">Shipment Tracking</h5>
                    <p>Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim.</p>
                    <div class="btn btn-small">Find Your Cargo</div>
                    <i class="licon-dolly"></i>
                  </div>
                </a>

                <!-- Banner -->
                <a href="#" class="banner-item">
                  <div class="banner-inner">
                    <h5 class="banner-title">Join Our Team</h5>
                    <p>Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, cursus eleifend, elit. </p>
                    <button class="btn btn-small">Submit Resume</button>
                    <i class="licon-tie"></i>
                  </div>
                </a>

                <!-- Banner -->
                <a href="#" class="banner-item">
                  <div class="banner-inner">
                    <h5 class="banner-title">Shipping Calculator</h5>
                    <p>Donec sagittis euismod purus.Sed ut perspiciatis unde omnis iste natus error.</p>
                    <div class="btn btn-small">Get Estimate</div>
                    <i class="licon-calculator2"></i>
                  </div>
                </a>

              </div>

            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->

  </div>

  <!-- - - - - - - - - - - - end Wrapper - - - - - - - - - - - - - - -->

  <!-- JS Libs & Plugins
  ============================================ -->
  <script src="js/libs/jquery.modernizr.js"></script>
  <script src="js/libs/jquery-2.2.4.min.js"></script>
  <script src="js/libs/jquery-ui.min.js"></script>
  <script src="js/libs/retina.min.js"></script>
  <script src="plugins/jquery.scrollTo.min.js"></script>
  <script src="plugins/jquery.localScroll.min.js"></script>
  <script src="plugins/jquery.queryloader2.min.js"></script>
  <script src="plugins/jquery.fancybox.js"></script>
  <script src="plugins/owl.carousel.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBN4XjYeIQbUspEkxCV2dhVPSoScBkIoic"></script>

  <!-- JS theme files
  ============================================ -->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  
</body>
</html>


@endsection
