@extends('layouts.app')
@section('content')
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-area ptb-10 ptb-sm-10">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active"><a href="{{ route('about') }}">Our Program</a></li>
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
                    <div class="col-lg-12 col-md-12">
                        <h3 class="mb-15">Our Program</h3>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <h6 class="lh-30 mb-10">At Fundraiser Made Easy our top priority is supporting you in reaching your primary goals.</h6>
                        <ul class="kiosk-about-list mb-20">
                            <li><h6>Step <span>01</span>Get Started – Click here to fill out an online form or contact us</h6></li>
                            <li><h6>Step <span>02</span>Start Selling – Just put the word out and let the product do the “selling.”</h6></li>
                            <li><h6>Step <span>03</span>Place Orders – Place orders as needed. We’ll work with your schedule.</h6></li>
                            <li><h6>Step <span>04</span>Receive Orders – Your product will be delivered 7-10 business days after we receive your payment. Get Started Now</h6></li>
                        </ul>
                        <h6 class="lh-30 mb-20">After submitting your order· you will receive an invoice from us which you may pay online with a Credit Card, Debit Card, Check, or PayPal. We also accept payment through the mail via check or money order to our Facility.</h6>
                        <h6 class="lh-30">**We ship orders to schools upon receiving a Purchase Order Number</h6>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="about-top">
                            <img class="img" src="{{ asset('assets/front/img/slider/program-1.jpg') }}" alt="about-us">
                        </div>
                    </div>
                </div>
                <div class="row ptb-30">
                    <div class="col-lg-12 col-md-12">
                        <h3 class="mb-15">Fundraising 101</h3>
                        <h6 class="lh-30">Fundraiser Made Easy provides you with all the necessary tools you need to meet your Fundraiser Goal.</h6>

                        <h3 class="mt-30 mb-15">The Process…</h3>
                        <h4>Costs and Profit:</h4>
                        <ul class="kiosk-about-list">
                            <li><h6><span>01</span>The suggested selling price is $39 per set for all sizes ( California King, King, Queen, Full, and Twin)</h6></li>
                            <li><h6><span>02</span>When placing an order, you will receive an invoice for the cost of the product. &nbsp;You keep your profit!!</h6></li>
                        </ul>

                        <h5 class="mt-20 mb-10 text-primary">Get Started</h5>
                        <h6 class="lh-30">We will send you Free Marketing Materials so that you can get started immediately. We supply one Starter Kit for each participant in your Fundraiser.</h6>
                        <h6 class="lh-30">Our initial suggested selling period is two weeks. At this time the participants give the order form to their group leader. All completed order forms should be faxed or emailed to Fundraiser Made Easy.</h6>
                        <h6 class="lh-30">Fax or email order forms to <strong>888-856-9225</strong> or <strong>shippingsheets@gmail.com</strong>.</h6>
                        <h6 class="lh-30 text-danger"><u>Please do not send photos of your order form.</u></h6>
                        <h6 class="lh-30">After submitting your order you will receive an invoice from us which you may pay online with a Credit Card, Debit Card, Check, or PayPal. We also accept payment through the mail via check or money order to our Facility.</h6>
                        <h6 class="lh-30">For Orders of 90 sets or more, we will box and label each Participants order separately. This saves you time and insures accuracy during the distribution process.</h6>

                        <h5 class="mt-20 mb-10 text-primary">Very easy and simple!</h5>

                        <h4 class="mt-20 mb-10">Color Chart:</h4>
                        <h6 class="lh-30">We will supply you with a color chart showing the 14 colors we offer : Aqua blue, Black, Cream, Dark Cream, Chocolate Brown, Burgundy, Gold, Grey, Eggplant, Navy, Pink, Sage, Silver, and White</h6>
                        <h6 class="lh-30">We offer our sheet sets in 14 colors. These colors are rendered as accurately as possible.</h6>

                        <h4 class="mt-20 mb-10">Warranties:</h4>
                        <h6 class="lh-30">Fundraiser Made Easy warrants the sheets 100% against manufacturer defects. No questions asked</h6>
                        
                        <h4 class="mt-20 mb-10">Returns/Exchanges:</h4>
                        <h6 class="lh-30">If, after you receive your orders, there is a discrepancy; please let us know via email</h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Main Area End -->
@endsection