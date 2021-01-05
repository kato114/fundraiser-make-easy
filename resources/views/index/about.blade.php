@extends('layouts.app')
@section('content')
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-area ptb-10 ptb-sm-10">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active"><a href="{{ route('about') }}">About</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- About Area Start -->
        <div class="about-area ptb-40">
            <div class="container">
                <div class="row pb-30">
                    <div class="col-lg-7 col-md-12">
                        <h4 class="lh-50">Fundraiser Made Easy was founded to help organizations and teams make large sums of money in a short time period by selling a product that people need that also has BIG margins. There is a high demand for “something new” in the fundraiser business. The team at Fundraiser Made Easy discovered a solution. Bed Sheet Fundraisers!</h4>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="about-top">
                            <img class="img" src="{{ asset('assets/front/img/slider/about-1.jpg') }}" alt="about-us">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="about-content">
                            <ul class="kiosk-about-list">
                                <li><h4><span>01</span>An easy fundraising program; selling a high quality Bed Sheets that people actually need at an affordable price.</h4></li>
                                <li><h4><span>02</span>Excellent Customer Service – the best on the Planet!</h4></li>
                                <li><h4><span>03</span>For Orders of 90 sets or more, we will box and label each Participants order separately. This saves you time and insures accuracy during the distribution process.</h4></li>
                                <li><h4><span>04</span>No upfront purchases needed. We provide you Free marketing materials including Starter Packs with Fabric Swatches.</h4></li>
                                <li><h4><span>05</span>100% Manufacturers Warranty.</h4></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row ptb-30">
                    <div class="col-lg-5 col-md-12">
                        <div class="about-top">
                            <img class="img" src="{{ asset('assets/front/img/slider/about-2.jpg') }}" alt="about-us">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <h4 class="lh-50">Follow our proven money making methods and let our products do the selling. “We have sold millions of bed sheets but we have never sold one as they sell themselves.”</h4>
                        <br>
                        <h4 class="lh-50">Whether you are a seasoned fundraising group or this is your first one, we offer you the key to reach your financial goals in style.</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Main Area End -->
@endsection