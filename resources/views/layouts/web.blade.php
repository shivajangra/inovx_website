<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Inovx') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	  <link rel="shortcut icon" type="image/x-icon" href="img/logo/inovx.png">
    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

		<!-- bootstrap v3.3.6 css -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
		<!-- owl.carousel css -->
		<link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{ asset('css/owl.transitions.css')}}">
    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css')}}">
		<!-- font-awesome css -->
		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{ asset('css/themify-icons.css')}}">
		<link rel="stylesheet" href="{{ asset('css/flaticon.css')}}">
		<!-- venobox css -->
		<link rel="stylesheet" href="{{ asset('css/venobox.css')}}">
		<!-- venobox css -->
		<link rel="stylesheet" href="{{ asset('css/venobox.css')}}">
		<!-- magnific css -->
    <link rel="stylesheet" href="{{ asset('css/magnific.min.css')}}">
		<!-- style css -->
		<link rel="stylesheet" href="{{ asset('css/style.css')}}">
		<!-- responsive css -->
		<link rel="stylesheet" href="{{ asset('css/responsive.css')}}">

		<!-- modernizr css -->
		<script src="{{ asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<body>
    <div id="app">
      <div id="preloader"></div>
      <header class="{{ Request::is('/') ? 'header-one' : 'header-two' }}">
          <!-- Start top bar -->
          <div class="topbar-area fix hidden-xs">
              <div class="container">
                  <div class="row">
                      <div class=" col-md-9 col-sm-9">
                          <div class="topbar-left">
                              <ul>
                                  <li><a href="#"><i class="fa fa-envelope"></i> info.inovx@gmail.com</a></li>
                                  <li><a href="#"><i class="fa fa-phone-square"></i> +91 8222999949</a></li>
                                  <li><a href="#"><i class="fa fa-clock-o"></i> Mon - Fri: 10:00 - 18:00</a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-md-3 col-sm-3">
                          <div class="top-social">
             <ul>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-google"></i></a></li>
             </ul>
           </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- End top bar -->
          <!-- header-area start -->
          <div id="sticker" class="header-area {{ Request::is('/') ? '' : 'header-area-2' }} hidden-xs">
              <div class="container">
                  <div class="row">
                      <!-- logo start -->
                      <div class="col-md-3 col-sm-3">
                          <div class="logo">
                              <!-- Brand -->
                              <a class="navbar-brand " href="/">
                                  <img src="img/logo/inovx.png" alt="">
                              </a>
                          </div>
                          <!-- logo end -->
                      </div>
                      <div class="col-md-9 col-sm-9">
                          <div class="header-right-link">
                              <!-- search option end -->
             <a class="s-menu" href="/login">Get in Estimate</a>
                          </div>
                          <!-- mainmenu start -->
                          <nav class="navbar navbar-default">
                              <div class="collapse navbar-collapse" id="navbar-example">
                                  <div class="main-menu">
                                      <ul class="nav navbar-nav navbar-right">
                                          <li><a href="/">Home</a>
                                          </li>
                                          <li><a href="/about">About</a>
                                          </li>
                                          <li><a class="pagess" href="#">Domain</a>
                                              <ul class="sub-menu">
                                                  <li><a href="/service_detail">Software Development</a></li>
                                                  <li><a href="/service_detail">Digital Marketing</a></li>
                                                  <li><a href="/service_detail">Data Analytics</a></li>
                                                  <li><a href="/service_detail">AI Development</a></li>
                                                  <li><a href="/service_detail">Network Security</a></li>
                                                  <li><a href="/service_detail">BlockChain</a></li>
                                              </ul>
                                          </li>
                                          <li><a class="pagess" href="your_dream">Your Dreams</a>
                                          </li>
                                          <li><a href="/blog">Blog</a>
                                          </li>
                                          <li><a href="/contacts">contacts</a></li>
                                      </ul>
                                  </div>
                              </div>
                          </nav>
                          <!-- mainmenu end -->
                      </div>
                  </div>
              </div>
          </div>
          <!-- header-area end -->
          <!-- mobile-menu-area start -->
          <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="mobile-menu">
                              <div class="logo">
                                  <a href="index-2.html"><img src="img/logo/inovx.png" alt="" /></a>
                              </div>
                              <nav id="dropdown">
                                  <ul>
                                    <li><a href="/">Home</a>
                                    </li>
                                    <li><a href="/about">About</a>
                                    </li>
                                    <li><a class="pagess" href="#">Domain</a>
                                        <ul class="sub-menu">
                                            <li><a href="/software_development">Software Development</a></li>
                                            <li><a href="/digital_marketing">Digital Marketing</a></li>
                                            <li><a href="/data_management">Data Analytics</a></li>
                                            <li><a href="/ai_development">AI Development</a></li>
                                            <li><a href="/network_security">Network Security</a></li>
                                            <li><a href="/blockChain">BlockChain</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="pagess" href="your_dream">Your Dreams</a>
                                    </li>
                                    <li><a href="/blog">Blog</a>
                                    </li>
                                    <li><a href="/contacts">contacts</a></li>
                                  </ul>
                              </nav>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- mobile-menu-area end -->
      </header>

        <main class="py-4">
            @yield('content')
        </main>

        <!-- Start Footer bottom Area -->
        <footer class="footer1">
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="footer-content logo-footer">
                                <div class="footer-head">
                                    <div class="footer-logo">
                                    	<a class="footer-black-logo" href="#"><img src="img/logo/inovx.png" alt=""></a>
                                    </div>
                                    <p>
                                        Are you looking for professional advice for your new business. Are you looking for professional advice for your new business. Are you looking for professional advice for your new business.
                                    </p>
                                    <!-- <div class="subs-feilds">
                                        <div class="suscribe-input">
                                            <input type="email" class="email form-control width-80" id="sus_email" placeholder="Type Email">
                                            <button type="submit" id="sus_submit" class="add-btn">Subscribe</button>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-4 col-sm-3 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Services Link</h4>
                                    <ul class="footer-list">
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Agency </a></li>
                                        <li><a href="#">Social media</a></li>
                                        <li><a href="#">Branding</a></li>
                                        <li><a href="#">Design </a></li>
                                    </ul>
                                    <ul class="footer-list hidden-sm">
										<li><a href="#">Search engine</a></li>
                                        <li><a href="#">Online support</a></li>
                                        <li><a href="#">Development</a></li>
                                        <li><a href="#">Pay per click</a></li>
                                        <li><a href="#">Event activation</a></li>
                                        <li><a href="faq">FAQ</a></li>
									</ul>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="footer-content last-content">
                                <div class="footer-head">
                                    <h4>Information</h4>
                                    <div class="footer-contacts">
										<p><span>Tel :</span> +91 8222999949</p>
										<p><span>Email :</span> info.inovx@gmail.com</p>
										<p><span>Location :</span> Q 271, South City - II, Gurugram</p>
									</div>
                                    <div class="footer-icons">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-pinterest"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p>
                                    Copyright © 2020
                                    <a href="#">Inovx</a> All Rights Reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- jquery latest version -->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <!-- owl.carousel js -->
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <!-- venobox js -->
    <script src="{{ asset('js/venobox.min.js')}}"></script>
    <!-- magnific js -->
    <script src="{{ asset('js/magnific.min.js')}}"></script>
    <!-- wow js -->
    <script src="{{ asset('js/wow.min.js')}}"></script>
    <!-- meanmenu js -->
    <script src="{{ asset('js/jquery.meanmenu.js')}}"></script>
    <!-- Form validator js -->
    <script src="{{ asset('js/form-validator.min.js')}}"></script>
    <!-- plugins js -->
    <script src="{{ asset('js/plugins.js')}}"></script>
    <!-- main js -->
    <script src="{{ asset('js/main.js')}}"></script>
</body>
</html>
