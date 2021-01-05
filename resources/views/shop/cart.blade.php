@extends('layouts.app')
@section('content')
    <div class="breadcrumb-area ptb-10 ptb-sm-10">
        <div class="container">
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ route('home') }}">Shop</a></li>
                    <li class="active"><a href="{{ route('cart') }}">Bedsheet</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="kiosk-products-cart ptb-70 pb-sm-50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="kiosk-product-thumb">Image</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-color">Color</th>
                                        <th class="product-size">Size</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-total">Total</th>
                                        <th class="kiosk-product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="kiosk-product-thumb">
                                            <img src="{{ asset('assets/front/img/products/3.jpg') }}" alt="cart-image" width="100" />
                                        </td>
                                        <td class="product-name">Bed Sheet</td>
                                        <td class="product-color"><span class="amount">Red</span></td>
                                        <td class="product-size"><span class="amount">5 / 5.5</span></td>
                                        <td class="product-price"><span class="amount">$232.00</span></td>
                                        <td class="product-quantity">
                                            <input value="1" type="number">
                                        </td>
                                        <td class="product-total text-center"><span class="amount">$232.00</span></td>
                                        <td class="product-add-to-cart"><a href="#">X</a></td>
                                    </tr>
                                    <tr>
                                        <td class="kiosk-product-thumb">
                                           <img src="{{ asset('assets/front/img/products/12.jpg') }}" alt="cart-image" width="100" />
                                        </td>
                                        <td class="product-name">Bed Sheet</td>
                                        <td class="product-color"><span class="amount">Red</span></td>
                                        <td class="product-size"><span class="amount">5 / 5.5</span></td>
                                        <td class="product-price"><span class="amount">$233.00</span></td>
                                        <td class="product-quantity">
                                            <input value="1" type="number">
                                        </td>
                                        <td class="product-total text-center"><span class="amount">$232.00</span></td>
                                        <td class="product-add-to-cart"><a href="#">X</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection