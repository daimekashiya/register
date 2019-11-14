@extends('layouts.theme.header1')

@section('content')

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
        
        <h1 class="page-title">Gallery</h1>

        <ul class="breadcrumbs">

          <li><a href="{{ route('FrontPage') }}">Home</a></li>
          <li>Gallery</li>

        </ul>

      </div>

    </div>

    <!-- - - - - - - - - - - - - end Breadcrumbs - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

    <div id="content" class="page-content-wrap">
      
      <div class="container">
        
        <div class="portfolio-holder fx-cols-3">
          
          <div class="pr-col">

            <!-- - - - - - - - - - - - - - Project - - - - - - - - - - - - - - - - -->
            <div class="project">

              <!-- - - - - - - - - - - - - - Project Image - - - - - - - - - - - - - - - - -->

              <div class="project-image">

                <img src="{{asset('img/360x240_img1.jpg')}}" alt="">
                <a href="{{asset('img/360x240_img1.jpg')}}" class="project-link project-action fancy-gallery" rel="category"></a>

              </div>

              <!-- - - - - - - - - - - - - - End of Project Image - - - - - - - - - - - - - - - - -->

              <!-- - - - - - - - - - - - - - Project Description - - - - - - - - - - - - - - - - -->

              <div class="project-description">

                <div class="description-inner">

                  <h5 class="project-title"><a href="#">Pallet Trasport</a></h5>

                </div><!--/ .description-inner -->

              </div>

              <!-- - - - - - - - - - - - - - End of Project Description - - - - - - - - - - - - - - - - -->

            </div>

          </div>

          <div class="pr-col">

            <!-- - - - - - - - - - - - - - Project - - - - - - - - - - - - - - - - -->
            <div class="project">
            
              <!-- - - - - - - - - - - - - - Project Image - - - - - - - - - - - - - - - - -->
            
              <div class="project-image">
            
                <img src="{{asset('img/360x240_img2.jpg')}}" alt="">
                <a href="{{asset('img/360x240_img2.jpg')}}" class="project-link project-action fancy-gallery" rel="category"></a>
            
              </div>
            
              <!-- - - - - - - - - - - - - - End of Project Image - - - - - - - - - - - - - - - - -->
            
              <!-- - - - - - - - - - - - - - Project Description - - - - - - - - - - - - - - - - -->
            
              <div class="project-description">
            
                <div class="description-inner">
            
                  <h5 class="project-title"><a href="portfolio_single.html">Airobus A330 Freighter</a></h5>
            
                </div><!--/ .description-inner -->
            
              </div>
            
              <!-- - - - - - - - - - - - - - End of Project Description - - - - - - - - - - - - - - - - -->
            
            </div>

          </div>

          <div class="pr-col">

            <!-- - - - - - - - - - - - - - Project - - - - - - - - - - - - - - - - -->
            <div class="project">
            
              <!-- - - - - - - - - - - - - - Project Image - - - - - - - - - - - - - - - - -->
            
              <div class="project-image">
            
                <img src="{{asset('img/360x240_img3.jpg')}}" alt="">
                <a href="{{asset('img/360x240_img3.jpg')}}" class="project-link project-action fancy-gallery" rel="category"></a>
            
              </div>
            
              <!-- - - - - - - - - - - - - - End of Project Image - - - - - - - - - - - - - - - - -->
            
              <!-- - - - - - - - - - - - - - Project Description - - - - - - - - - - - - - - - - -->
            
              <div class="project-description">
            
                <div class="description-inner">
            
                  <h5 class="project-title"><a href="portfolio_single.html">Container Truck</a></h5>
            
                </div><!--/ .description-inner -->
            
              </div>
            
              <!-- - - - - - - - - - - - - - End of Project Description - - - - - - - - - - - - - - - - -->
            
            </div>

          </div>

          <div class="pr-col">

            <!-- - - - - - - - - - - - - - Project - - - - - - - - - - - - - - - - -->
            <div class="project">

              <!-- - - - - - - - - - - - - - Project Image - - - - - - - - - - - - - - - - -->

              <div class="project-image">

                <img src="{{asset('img/360x240_img4.jpg')}}" alt="">
                <a href="{{asset('img/360x240_img4.jpg')}}" class="project-link project-action fancy-gallery" rel="category"></a>

              </div>

              <!-- - - - - - - - - - - - - - End of Project Image - - - - - - - - - - - - - - - - -->

              <!-- - - - - - - - - - - - - - Project Description - - - - - - - - - - - - - - - - -->

              <div class="project-description">

                <div class="description-inner">

                  <h5 class="project-title"><a href="#">Pallet Trasport</a></h5>

                </div><!--/ .description-inner -->

              </div>

              <!-- - - - - - - - - - - - - - End of Project Description - - - - - - - - - - - - - - - - -->

            </div>

          </div>

          <div class="pr-col">

            <!-- - - - - - - - - - - - - - Project - - - - - - - - - - - - - - - - -->
            <div class="project">
            
              <!-- - - - - - - - - - - - - - Project Image - - - - - - - - - - - - - - - - -->
            
              <div class="project-image">
            
                <img src="{{asset('img/360x240_img5.jpg')}}" alt="">
                <a href="{{asset('img/360x240_img5.jpg')}}" class="project-link project-action fancy-gallery" rel="category"></a>
            
              </div>
            
              <!-- - - - - - - - - - - - - - End of Project Image - - - - - - - - - - - - - - - - -->
            
              <!-- - - - - - - - - - - - - - Project Description - - - - - - - - - - - - - - - - -->
            
              <div class="project-description">
            
                <div class="description-inner">
            
                  <h5 class="project-title"><a href="portfolio_single.html">Airobus A330 Freighter</a></h5>
            
                </div><!--/ .description-inner -->
            
              </div>
            
              <!-- - - - - - - - - - - - - - End of Project Description - - - - - - - - - - - - - - - - -->
            
            </div>

          </div>

          <div class="pr-col">

            <!-- - - - - - - - - - - - - - Project - - - - - - - - - - - - - - - - -->
            <div class="project">
            
              <!-- - - - - - - - - - - - - - Project Image - - - - - - - - - - - - - - - - -->
            
              <div class="project-image">
            
                <img src="{{asset('img/360x240_img6.jpg')}}" alt="">
                <a href="{{asset('img/360x240_img6.jpg')}}" class="project-link project-action fancy-gallery" rel="category"></a>
            
              </div>
            
              <!-- - - - - - - - - - - - - - End of Project Image - - - - - - - - - - - - - - - - -->
            
              <!-- - - - - - - - - - - - - - Project Description - - - - - - - - - - - - - - - - -->
            
              <div class="project-description">
            
                <div class="description-inner">
            
                  <h5 class="project-title"><a href="portfolio_single.html">Container Truck</a></h5>
            
                </div><!--/ .description-inner -->
            
              </div>
            
              <!-- - - - - - - - - - - - - - End of Project Description - - - - - - - - - - - - - - - - -->
            
            </div>
            
          </div>

          <div class="pr-col">

            <!-- - - - - - - - - - - - - - Project - - - - - - - - - - - - - - - - -->
            <div class="project">

              <!-- - - - - - - - - - - - - - Project Image - - - - - - - - - - - - - - - - -->

              <div class="project-image">

                <img src="{{asset('img/360x240_img7.jpg')}}" alt="">
                <a href="{{asset('img/360x240_img7.jpg')}}" class="project-link project-action fancy-gallery" rel="category"></a>

              </div>

              <!-- - - - - - - - - - - - - - End of Project Image - - - - - - - - - - - - - - - - -->

              <!-- - - - - - - - - - - - - - Project Description - - - - - - - - - - - - - - - - -->

              <div class="project-description">

                <div class="description-inner">

                  <h5 class="project-title"><a href="#">Pallet Trasport</a></h5>

                </div><!--/ .description-inner -->

              </div>

              <!-- - - - - - - - - - - - - - End of Project Description - - - - - - - - - - - - - - - - -->

            </div>

          </div>

          <div class="pr-col">

            <!-- - - - - - - - - - - - - - Project - - - - - - - - - - - - - - - - -->
            <div class="project">
            
              <!-- - - - - - - - - - - - - - Project Image - - - - - - - - - - - - - - - - -->
            
              <div class="project-image">
            
                <img src="{{asset('img/360x240_img8.jpg')}}" alt="">
                <a href="{{asset('img/360x240_img8.jpg')}}" class="project-link project-action fancy-gallery" rel="category"></a>
            
              </div>
            
              <!-- - - - - - - - - - - - - - End of Project Image - - - - - - - - - - - - - - - - -->
            
              <!-- - - - - - - - - - - - - - Project Description - - - - - - - - - - - - - - - - -->
            
              <div class="project-description">
            
                <div class="description-inner">
            
                  <h5 class="project-title"><a href="portfolio_single.html">Airobus A330 Freighter</a></h5>
            
                </div><!--/ .description-inner -->
            
              </div>
            
              <!-- - - - - - - - - - - - - - End of Project Description - - - - - - - - - - - - - - - - -->
            
            </div>

          </div>

          <div class="pr-col">

            <!-- - - - - - - - - - - - - - Project - - - - - - - - - - - - - - - - -->
            <div class="project">
            
              <!-- - - - - - - - - - - - - - Project Image - - - - - - - - - - - - - - - - -->
            
              <div class="project-image">
            
                <img src="{{asset('img/360x240_img9.jpg')}}" alt="">
                <a href="{{asset('img/360x240_img9.jpg')}}" class="project-link project-action fancy-gallery" rel="category"></a>
            
              </div>
            
              <!-- - - - - - - - - - - - - - End of Project Image - - - - - - - - - - - - - - - - -->
            
              <!-- - - - - - - - - - - - - - Project Description - - - - - - - - - - - - - - - - -->
            
              <div class="project-description">
            
                <div class="description-inner">
            
                  <h5 class="project-title"><a href="portfolio_single.html">Container Truck</a></h5>
            
                </div><!--/ .description-inner -->
            
              </div>
            
              <!-- - - - - - - - - - - - - - End of Project Description - - - - - - - - - - - - - - - - -->
            
            </div>
            
          </div>

          <div class="pr-col">

            <!-- - - - - - - - - - - - - - Project - - - - - - - - - - - - - - - - -->
            <div class="project">

              <!-- - - - - - - - - - - - - - Project Image - - - - - - - - - - - - - - - - -->

              <div class="project-image">

                <img src="{{asset('img/360x240_img10.jpg')}}" alt="">
                <a href="{{asset('img/360x240_img10.jpg')}}" class="project-link project-action fancy-gallery" rel="category"></a>

              </div>

              <!-- - - - - - - - - - - - - - End of Project Image - - - - - - - - - - - - - - - - -->

              <!-- - - - - - - - - - - - - - Project Description - - - - - - - - - - - - - - - - -->

              <div class="project-description">

                <div class="description-inner">

                  <h5 class="project-title"><a href="#">Pallet Trasport</a></h5>

                </div><!--/ .description-inner -->

              </div>

              <!-- - - - - - - - - - - - - - End of Project Description - - - - - - - - - - - - - - - - -->

            </div>

          </div>

          <div class="pr-col">

            <!-- - - - - - - - - - - - - - Project - - - - - - - - - - - - - - - - -->
            <div class="project">
            
              <!-- - - - - - - - - - - - - - Project Image - - - - - - - - - - - - - - - - -->
            
              <div class="project-image">
            
                <img src="{{asset('img/360x240_img11.jpg')}}" alt="">
                <a href="{{asset('img/360x240_img11.jpg')}}" class="project-link project-action fancy-gallery" rel="category"></a>
            
              </div>
            
              <!-- - - - - - - - - - - - - - End of Project Image - - - - - - - - - - - - - - - - -->
            
              <!-- - - - - - - - - - - - - - Project Description - - - - - - - - - - - - - - - - -->
            
              <div class="project-description">
            
                <div class="description-inner">
            
                  <h5 class="project-title"><a href="portfolio_single.html">Airobus A330 Freighter</a></h5>
            
                </div><!--/ .description-inner -->
            
              </div>
            
              <!-- - - - - - - - - - - - - - End of Project Description - - - - - - - - - - - - - - - - -->
            
            </div>

          </div>

          <div class="pr-col">

            <!-- - - - - - - - - - - - - - Project - - - - - - - - - - - - - - - - -->
            <div class="project">
            
              <!-- - - - - - - - - - - - - - Project Image - - - - - - - - - - - - - - - - -->
            
              <div class="project-image">
            
                <img src="{{asset('img/360x240_img12.jpg')}}" alt="">
                <a href="{{asset('img/360x240_img12.jpg')}}" class="project-link project-action fancy-gallery" rel="category"></a>
            
              </div>
            
              <!-- - - - - - - - - - - - - - End of Project Image - - - - - - - - - - - - - - - - -->
            
              <!-- - - - - - - - - - - - - - Project Description - - - - - - - - - - - - - - - - -->
            
              <div class="project-description">
            
                <div class="description-inner">
            
                  <h5 class="project-title"><a href="portfolio_single.html">Container Truck</a></h5>
            
                </div><!--/ .description-inner -->
            
              </div>
            
              <!-- - - - - - - - - - - - - - End of Project Description - - - - - - - - - - - - - - - - -->
            
            </div>
            
          </div>
          
        </div>

        <ul class="pagination">
          <li><a href="#" class="prev-page"></a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#" class="next-page"></a></li>
        </ul>

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

  <!-- JS theme files
  ============================================ -->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  

@endsection