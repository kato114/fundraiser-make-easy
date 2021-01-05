@extends('layouts.app')
@section('content')
    <div class="slider-area kiosk-slider">
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <a href="{{ route('bedsheet') }}"> <img src="{{ asset('assets/front/img/slider/2.jpg') }}" data-thumb="{{ asset('assets/front/img/slider/2.jpg') }}" alt="" title="#slider-1-caption1"/></a>
                <a href="{{ route('pillow') }}"><img src="{{ asset('assets/front/img/slider/1.jpg') }}" data-thumb="{{ asset('assets/front/img/slider/1.jpg') }}" alt="" title="#slider-1-caption2"/></a>
            </div>
            <div id="slider-1-caption1" class="nivo-html-caption nivo-caption">
                <div class="text-content-wrapper">
                    <div class="container">
                        <div class="text-content">
                            <h4 class="title2 wow fadeInUp mb-16" data-wow-duration="2s" data-wow-delay="0s">Sale off 10%</h4>
                            <h1 class="title1 wow fadeInUp mb-16" data-wow-duration="2s" data-wow-delay="1s">New Bedsheet 2020</h1>
                            <div class="banner-readmore wow fadeInUp mt-35" data-wow-duration="2s" data-wow-delay="2s">
                                <a class="button slider-btn" href="{{ route('bedsheet') }}">Shop Now</a>                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            <div id="slider-1-caption2" class="nivo-html-caption nivo-caption">
                <div class="text-content-wrapper">
                    <div class="container">
                        <div class="text-content slide-2">
                            <h4 class="title2 wow fadeInUp mb-16" data-wow-duration="1s" data-wow-delay="1s">Sale off 30%</h4>
                            <h1 class="title1 wow fadeInUp mb-16" data-wow-duration="1s" data-wow-delay="2s">New Pillow 2018</h1>
                            <div class="banner-readmore wow fadeInUp mt-35" data-wow-duration="1s" data-wow-delay="3s">
                                <a class="button slider-btn" href="{{ route('pillow') }}">Shop Now</a>                    
                            </div>
                        </div> 
                    </div>      
                </div>
            </div>
        </div>
    </div>
    <div class="kiosk-services ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service">
                        <div class="service-content">
                            <i class="fa fa-bus"></i>
                            <h3>Free Shipping</h3>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo blanditiis odio.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service">
                        <div class="service-content">
                            <i class="fa fa-credit-card"></i>
                            <h3>MONEY BACK</h3>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo blanditiis odio.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service">
                        <div class="service-content">
                            <i class="fa fa-phone"></i>
                            <h3>ONLINE SUPPORT</h3>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo blanditiis odio.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service">
                          <div class="service-content">
                            <i class="fa fa-briefcase"></i>
                            <h3>BONUS PLUS</h3>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo blanditiis odio.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="kiosk-top-product ptb-70">
        <div class="container">
            <div class="row">
                <div class="section-title col-lg-12">
                    <h2>Featured Products <i class="fa fa-shopping-cart"></i></h2>
                </div>
            </div>
            <div class="kiosk-top-active owl-carousel home1-product">
            	@for($i = 19; $i < 24; $i++)
                <div class="single-product">
                    <div class="kiosk-product-img">
                        <a href="{{ route('pillow') }}">
                            <img class="first-img rounded-circle product-front" src="{{ asset('assets/front/img/products/'.$i.'.jpg') }}" alt="single-product">
                            <img class="second-img rounded-circle product-back" src="{{ asset('assets/front/img/products/'.$i.'-2.jpg') }}" alt="single-product">
                        </a>
                    </div>
                    <div class="kiosk-product-content">
                        <div class="kiosk-product-action">
                            <div class="kiosk-action-content">
                                <a href="javascript:;" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                <a href="javascript:;" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>                      
                @endfor
            </div>
        </div>
    </div>
    <div class="product-area pb-70">
        <div class="container">
            <div class="row">
            	@for($i = 1; $i < 15; $i++)
                <div class="col-lg-2 col-sm-3">
                    <div class="single-product">
                        <div class="kiosk-product-img">
                            <a href="{{ route('bedsheet') }}">
                                <img class="first-img" src="{{ asset('assets/front/img/products/'.$i.'.jpg') }}" alt="single-product">
                                <img class="second-img" src="{{ asset('assets/front/img/products/'.$i.'-2.jpg') }}" alt="single-product">
                            </a>
                        </div>
                        <div class="kiosk-product-content">
                            <p><span class="price">$300.00</span></p>
                            <h4><a href="{{ route('bedsheet') }}">Lorem ipsum solet</a></h4>
                            <div class="kiosk-product-action">
                                <div class="kiosk-action-content">
                                    <a href="javascript:;" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="javascript:;" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="{{ route('bedsheet') }}" data-toggle="tooltip" title="Product Details"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor   
            </div>
        </div>
    </div> 
    <div class="parallax-area pb-60">
        <div class="container-fluid">
           <div class="row">
               <div class="col-md-6">
                    <div class="parallax-left parallax-bg2">
                        <div class="parallax-content">
                            <h3>Elastic Pillow</h3>
                            <p>Lorem ipsum dolor sit, amet conse ctetur adip isicing elit. Et deleniti iure voluptates eaque cumque suscipit aliquid dolorem expedita iste voluptatum conse ctetur volupt atum</p>
                            <a class="button slider-btn" href="{{ route('pillow') }}">Shop Now</a>
                        </div>
                    </div>
                </div>
               <div class="col-md-6">
                    <div class="parallax-right">
                        <div class="parallax-content">
                            <h3>Soft Bedsheet</h3>
                            <p>Lorem ipsum dolor sit, amet conse ctetur adip isicing elit. Et deleniti iure voluptates eaque cumque suscipit aliquid dolorem expedita iste voluptatum conse ctetur volupt atum</p>
                            <a class="button slider-btn" href="{{ route('bedsheet') }}">Shop Now</a>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div> 
    <div class="new-products ptb-70">
        <div class="container">
            <div class="row">
                <div class="section-title col-lg-12 mb-50">
                    <h2>Our Collections <i class="fa fa-shopping-cart"></i></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 ">
                    <div class="new-kiosk-product-content">
                        <div class="tab-content product-tab-content jump mt-30">
                            <div id="new-arrival" class="tab-pane active">
                                <div class="kiosk-collection owl-carousel">
            						@for($i = 15; $i < 19; $i++)
                                    <div class="single-product">
                                        <div class="kiosk-product-img">
                                            <a href="javascript:;">
                                                <img class="first-img" src="{{ asset('assets/front/img/products/'.$i.'.jpg') }}" alt="single-product">
                                                <img class="second-img" src="{{ asset('assets/front/img/products/'.$i.'-2.jpg') }}" alt="single-product">
                                            </a>
                                        </div>
                                        <div class="kiosk-product-content">  
                                            <p><span class="price">$320.00</span></p>             
                                            <h4><a href="javascript:;">Lorem ipsum solet</a></h4>
                                        </div>
                                        <span class="sticker-new">sale</span>
                                    </div>      
                                	@endfor                          
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="purchase-area parallax-bg2" data-stellar-background-ratio="0.6">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 ptb-100 col-lg-12 text-center">
                    <h2 class="mb-40">This Weekend 30% Discount </h2>
                    <a class="button slider-btn" href="{{ route('bedsheet') }}">Purchsase Now</a>
                </div>
            </div>
        </div>
    </div>
        <div class="blog-area ptb-70 padding-small">
            <div class="container">
                <div class="row">
                    <div class="section-title col-lg-12 mb-50">
                        <h2>Our Blogs <i class="fa fa-shopping-cart"></i></h2>
                    </div>
                </div>
                 <div class="kiosk-blog owl-carousel">
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="javascript:;"><img src="{{ asset('assets/front/img/blog/1.jpg') }}" alt="blog-image"></a>
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="javascript:;">A Grand Opening Program</a></h4>
                            <div class="blog-meta">
                                <ul>
                                    <li><span>By</span> <a href="javascript:;">Kavin </a></li>
                                    <li><a href="javascript:;">12 Feb, 2018</a></li>
                                    <li><a href="javascript:;">comments(2)</a></li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor sit amet adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn a aliqua. Ut enim ad minim veniam.</p>
                            <div class="readmore">
                                <a href="javascript:;">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="javascript:;"><img src="{{ asset('assets/front/img/blog/2.jpg') }}" alt="blog-image"></a>
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="javascript:;">Women Fashion 2018</a></h4>
                            <div class="blog-meta">
                                <ul>
                                    <li><span>By</span> <a href="javascript:;">Jone doe </a></li>
                                    <li><a href="javascript:;">12 Feb, 2018</a></li>
                                    <li><a href="javascript:;">comments(2)</a></li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor sit amet adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn a aliqua. Ut enim ad minim veniam.</p>
                            <div class="readmore">
                                <a href="javascript:;">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="javascript:;"><img src="{{ asset('assets/front/img/blog/3.jpg') }}" alt="blog-image"></a>
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="javascript:;">Celebrating 27th anniversary</a></h4>
                            <div class="blog-meta">
                                <ul>
                                    <li><span>By</span> <a href="javascript:;">Riya </a></li>
                                    <li><a href="javascript:;">12 Feb, 2018</a></li>
                                    <li><a href="javascript:;">comments(2)</a></li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor sit amet adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn a aliqua. Ut enim ad minim veniam.</p>
                            <div class="readmore">
                                <a href="javascript:;">Read More</a>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
@endsection