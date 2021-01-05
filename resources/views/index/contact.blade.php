@extends('layouts.app')
@section('content')
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-area ptb-10 ptb-sm-10">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="active">
                            <a href="{{ route('contact') }}">Contact US</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- Contact Email Area Start -->
        <div class="contact-email-area ptb-40">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="map"></div>
                    </div>
                    <div class="col-md-6">
                        <h4>Leave a message</h4>
                        <form id="contact-form" class="contact-form" action="javascript:;" method="post">
                            <div class="kiosk-blog-input">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="kiosk-name">
                                            <input type="text" name="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="kiosk-email">
                                            <input type="email" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="address-subject">
                                            <input type="text" name="subject" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="kiosk-message">
                                            <textarea name="message" placeholder="Write your message"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="form-message ml-15"></p>
                            <div class="col-xs-12 footer-content kiosk-submit">
                                <div class="kiosk-submit-area">
                                    <input type="submit" value="Submit" class="submit">
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
@endsection
@section('script')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlZPf84AAVt8_FFN7rwQY5nPgB02SlTKs"></script>
    <script src="{{ asset('assets/front/js/map.js') }}"></script>
@endsection