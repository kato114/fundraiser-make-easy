@extends('layouts.app')
@section('content')
        <div class="breadcrumb-area ptb-10 ptb-sm-10">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="{{ route('home') }}">Shop</a></li>
                        <li class="active"><a href="{{ route('pillow') }}">Pillow</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="kiosk-product-details ptb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="tab-content">
                            @for($i = 19; $i < 25; $i++)
                            <div id="thumb{{ $i }}" class="tab-pane {{ $i != 19 ? '' : 'active' }}">
                                <a data-fancybox="images" href="{{ asset('assets/front/img/products/'.$i.'.jpg') }}"><img src="{{ asset('assets/front/img/products/'.$i.'.jpg') }}" alt="product-view"></a>
                            </div>
                            @endfor
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row mx-0 mb-4">
                            <div>
                                <img src="{{ asset('assets/front/img/marks/Freeland-Falcons.png') }}" height="100" width="100">
                            </div>
                            <div class="team-progress">
                                <h3 class="my-1"><strong>Little Johnny</strong></h3>
                                <h6 class="mt-2"><strong>$37.50</strong></h6>
                                <div class="progress mt-2">
                                    <div class="progress-bar progress-bar-success progress-bar-striped progress-bar-animated" role="progressbar"
                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                    40% Complete (success)
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kiosk-product-description fix">
                            <h3><strong>Pillow</strong></h3>
                            <p><small>Item No: 10290401308</small></p>

                            <h3><strong>$14.95</strong></h3>
                            <p><small>Original MSRP</small> | <a href="javascript:;"><small>Pricing Policy</small></a></p>

                            <div class="pro-ref mtb-15">
                                <p><span class="in-stock">Color:</span><span class="sku">Magnet</span></p>
                                <div class="kiosk-product-thumb">
                                    <div class="color-menu nav">
                                    @for($i = 19; $i < 25; $i++)
                                        <a class="{{ $i != 19 ? '' : 'active' }}" data-toggle="tab" href="#thumb{{$i}}"> <img class="mb-1" src="{{ asset('assets/front/img/color/'.$i.'.jpg') }}" alt="kiosk-product-thumb" width="20"></a>
                                    @endfor   
                                    </div>
                                </div>
                            </div>
                            <div class="pro-ref mb-15">
                                <p>
                                    <span class="in-stock">Size:</span>
                                    <span class="sku">
                                        <button class="btn btn-default btn-xs my-1">US</button>
                                        <button class="btn btn-default btn-xs my-1">EU</button>
                                    </span>
                                    <a href="javascript:;"><small class="pull-right">Size Guide</small></a>
                                </p>
                                <div>
                                    <button class="btn btn-outline-secondary btn-xs my-1">5/5.5</button>
                                    <button class="btn btn-outline-secondary btn-xs my-1">6/6.5</button>
                                    <button class="btn btn-outline-secondary btn-xs my-1">7/7.5</button>
                                    <button class="btn btn-outline-secondary btn-xs my-1">8/8.5</button>
                                    <button class="btn btn-outline-secondary btn-xs my-1">9/9.5</button>
                                    <button class="btn btn-outline-secondary btn-xs my-1">10/10.5</button>
                                    <button class="btn btn-outline-secondary btn-xs my-1">11/11.5</button>
                                    <button class="btn btn-outline-secondary btn-xs my-1">12/12.5</button>
                                    <button class="btn btn-outline-secondary btn-xs my-1">13/13.5</button>
                                </div>
                            </div>
                            <div class="box-quantity">
                                <form action="javascript:;">
                                    <label for="">Quantity</label>
                                    <input class="number" id="numeric" type="number" min="1" value="1">
                                </form>
                            </div>
                            <div class="product-link">
                                <ul class="list-inline">
                                    <li><a href="{{ route('cart') }}">add to cart</a></li>
                                    <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="kiosk-thumbnail-area pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="kiosk-thumb-header nav">
                            <li><a class="active" data-toggle="tab" href="#dtail">Description</a></li>
                            <li><a data-toggle="tab" href="#review">Reviews</a></li>
                        </ul>
                        <div class="tab-content thumb-content border-default">
                            <div id="dtail" class="tab-pane in active">
                                <p class="pb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque cumque consequuntur beatae temporibus voluptates voluptas sint architecto incidunt omnis iste tempora placeat sequi, illum, iure ullam similique modi veritatis quia!</p>
                                <p class="pb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque cumque consequuntur beatae temporibus voluptates voluptas sint architecto incidunt omnis iste tempora placeat sequi, illum, iure ullam similique modi veritatis quia!</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque cumque consequuntur beatae temporibus voluptates voluptas sint architecto incidunt omnis iste tempora placeat sequi, illum, iure ullam similique modi veritatis quia!</p>
                            </div>
                            <div id="review" class="tab-pane">
                                <div class="review">
                                    <h4 class="review-mini-title">Review by koisk</h4>
                                    <ul class="review-list">
                                        <li>
                                            <span>Quality:</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <span>Price:</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <li>
                                            <span>Value:</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="review mt-30">
                                    <div class="riview-field">
                                        <h6 class="pb-15">Write A Review</h6>
                                        <form autocomplete="off" action="javascript:;">
                                            <div class="form-group">
                                                <label class="req" for="sure-name">Name</label>
                                                <input type="text" class="form-control" id="sure-name" required="required">
                                            </div>
                                            <div class="form-group">
                                                <label class="req" for="subject">Summary</label>
                                                <input type="text" class="form-control" id="subject" required="required">
                                            </div>
                                            <div class="form-group">
                                                <label class="req" for="comments">Review</label>
                                                <textarea class="form-control" rows="4" id="comments" required="required"></textarea>
                                            </div>
                                            <button type="submit" class="btn-submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection