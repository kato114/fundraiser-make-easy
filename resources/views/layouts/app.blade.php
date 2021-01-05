<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fundraiser Made Easy</title>
    <meta name="description" content="Default Description">
    <meta name="keywords" content="E-commerce" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/front/img/icon/favicon.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Lily+Script+One" rel="stylesheet"> 

    <link rel="stylesheet" href="{{ asset('assets/front/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/nivo-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/jquery.fancybox.css') }}">     
    <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/responsive.css') }}">

    <script src="{{ asset('assets/front/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <div class="wrapper kiosk-home">
        <header>
            <div class="kiosk-header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 d-center">
                            <div class="kiosk-header-top-left">
                                <i class="fa fa-phone"></i>Support free: 770-345-4766
                            </div>                        
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="kiosk-header-top-right">
                                <div class="search-box-view">
                                    <form action="javascript:;">
                                        <input type="text" class="email" placeholder="Search Your Product" name="product">
                                        <button type="submit" class="submit"></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kiosk-header-bottom header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-2 col-sm-5 col-5">
                            <div class="logo">
                                <a href="{{ route('home') }}">
                                    <!-- <h4>Fundraiser Made Easy</h4> -->
                                    <img src="{{ asset('assets/front/img/logo/logo.png') }}" height="20">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7 d-none d-lg-block">
                            <div class="kiosk-middle-menu pull-right">
                                <nav>
                                    <ul class="kiosk-middle-menu-list">
                                        <li><a href="{{ route('home') }}">shop</a></li>
                                        <li><a href="{{ route('program') }}">our program</a></li>
                                        <li><a href="{{ route('about') }}">about us</a></li>
                                        <li><a href="{{ route('contact') }}">contact us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-7 col-7">
                            <div class="kiosk-cart text-right">
                                <ul>
                                    <li><a href="javascript:;"><i class="fa fa-shopping-cart"></i><span class="cart-counter">2</span></a>
                                        <ul class="kiosk-dropdown main-kiosk-cart">
                                            <li>
                                                <div class="single-kiosk-cart">
                                                    <div class="cart-img">
                                                        <a href="javascript:;"><img src="{{ asset('assets/front/img/products/4.jpg') }}" alt="cart-image"></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6><a href="javascript:;">Bed Sheet</a></h6>
                                                        <p class="lh-15"><small>Color: Magnet</small></p>
                                                        <p class="lh-15"><small>Size: 11/11.5</small></p>
                                                        <p class="lh-15"><small>Qty: 2</small></p>
                                                    </div>
                                                </div>
                                                <div class="single-kiosk-cart">
                                                    <div class="cart-img">
                                                        <a href="javascript:;"><img src="{{ asset('assets/front/img/products/1.jpg') }}" alt="cart-image"></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6><a href="javascript:;">Bed Sheet</a></h6>
                                                        <p class="lh-15"><small>Color: Yellow</small></p>
                                                        <p class="lh-15"><small>Size: 11/11.5</small></p>
                                                        <p class="lh-15"><small>Qty: 2</small></p>
                                                    </div>
                                                </div>
                                                <div class="cart-footer fix">
                                                    <h5>Total<span class="f-right"><b>$698.00</b></span></h5>
                                                    <div class="kiosk-cart-button">
                                                        <a class="button slider-btn" href="{{ route('cart') }}">View Cart</a>
                                                        <a class="button slider-btn f-right mr-0" href="{{ route('checkout') }}">Checkout</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:;"><i class="fa fa-heart-o"></i></a></li> 
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-12 d-lg-none">
                            <div class="mobile-menu">
                                <nav>
                                    <ul>
                                        <li><a href="{{ route('home') }}">shop</a></li>
                                        <li><a href="{{ route('program') }}">our program</a></li>
                                        <li><a href="{{ route('about') }}">about us</a></li>
                                        <li><a href="{{ route('contact') }}">contact us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
        <div class="kiosk-newsletter-area ptb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mr-auto ml-auto">
                        <div class="newsletter text-center">
                            <div class="main-news-desc">
                                <div class="news-desc">
                                    <h3>Sign Up To Newsletter</h3>
                                </div>
                            </div>
                            <div class="kiosk-subscribe">
                                <form action="javascript:;">
                                    <input class="subscribe" placeholder="Enter your email address" name="email" id="subscribe" type="text">
                                    <button type="submit" class="submit">subscribe</button>
                                </form>
                            </div>
                        </div>                            
                    </div>
                </div>          
            </div>
        </div>
        <footer class="black-bg">
            <div class="footer-top ptb-60">
                <div class="container">           
                    <div class="row">
                        <div class="col-lg-4  col-md-4 col-sm-6">
                            <div class="single-footer">
                                <h3>About us</h3>
                                <div class="footer-content">
                                    <p>Getting started with Fundraiser Made Easy is, like all things with our program, easy.</p>
                                    <div class="kiosk-footer-social">
                                        <ul class="kiosk-footer-list footer-top-social">
                                            <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="javascript:;"><i class="fa fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2  col-md-2 col-sm-6 footer-full">
                            <div class="single-footer">
                                <h3 class="footer-title">Quick Link</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
                                        <li><a href="javascript:;">Our Program</a></li>
                                        <li><a href="javascript:;">About Us</a></li>
                                        <li><a href="javascript:;">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3  col-sm-6 footer-full">
                            <div class="single-footer">
                                <h3 class="footer-title">My Account</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
                                        <li><a href="javascript:;">Checkout</a></li>
                                        <li><a href="javascript:;">Login</a></li>
                                        <li><a href="javascript:;">Registration</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 footer-full">
                            <div class="single-footer margin-sm0">
                                <h3>Contact us</h3>
                                <div class="footer-content">
                                    <div class="kiosk-contact-address">
                                        <span><i class="fa fa-map-marker"></i>Location</span>
                                        <span><i class="fa fa-envelope-o"></i>shippingsheets@gmail.com</span>
                                        <span><i class="fa fa-phone"></i>888-856-9225</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-bottom-content">
                        <p class="copy-right-text">Copyright © <a  href="javascript:;">2020</a> &nbsp;&nbsp; All Rights Reserved.</p>
                        <div class="kiosk-footer-social hidden-content">
                            <ul class="kiosk-footer-list">
                                <li><a href="javascript:;"><img src="{{ asset('assets/front/img/footer/visa.png') }}" alt=""></a></li>
                                <li><a href="javascript:;"><img src="{{ asset('assets/front/img/footer/amarcan.png') }}" alt=""></a></li>
                                <li><a href="javascript:;"><img src="{{ asset('assets/front/img/footer/discover.png') }}" alt=""></a></li>
                                <li><a href="javascript:;"><img src="{{ asset('assets/front/img/footer/mastercard.png') }}" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="{{ asset('assets/front/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.scrollUp.js') }}"></script>
    <script src="{{ asset('assets/front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.nivo.slider.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/parallax.js') }}"></script>
    <script src="{{ asset('assets/front/js/popper.js') }}"></script>
    <script src="{{ asset('assets/front/js/plugins.js') }}"></script>
    @yield('script')
    <script src="{{ asset('assets/front/js/main.js') }}"></script>
</body>
</html>