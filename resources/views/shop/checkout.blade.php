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
    <div class="kiosk-checkout-area ptb-70">
        <div class="container">
            <form action="#">                
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="kiosk-checkbox-form">
                            <h3>Billing Details</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>First Name <span class="required">*</span></label>
                                        <input type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list mb-30">
                                        <label>Last Name <span class="required">*</span></label>
                                        <input type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list mb-30">
                                        <label>Company Name</label>
                                        <input type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list mb-30">
                                        <label>Email Address <span class="required">*</span></label>
                                        <input type="email" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list mb-30">
                                        <label>Phone  <span class="required">*</span></label>
                                        <input type="text" placeholder="phone" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="country-select mb-30">
                                        <label>Country <span class="required">*</span></label>
                                        <select>
                                            <option value="volvo">Bangladesh</option>
                                            <option value="saab">German</option>
                                            <option value="mercedes">USA</option>
                                            <option value="audi">Norway</option>
                                            <option value="audi2">Panama</option>
                                            <option value="audi3">Brazil</option>
                                            <option value="audi4">Colombia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list mb-30">
                                        <label>Address <span class="required">*</span></label>
                                        <input type="text" placeholder="Street address" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list mb-30">
                                        <label>City <span class="required">*</span></label>
                                        <input type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list mb-30">
                                        <label>Zipcode <span class="required">*</span></label>
                                        <input type="text" placeholder="Postcode / Zipcode" />
                                    </div>
                                </div>
                            </div>
                            <div class="different-address">
                                <div class="ship-different-title">
                                    <h3>
                                        <label>Ship to a different address?</label>
                                        <input id="ship-box" type="checkbox" />
                                    </h3>
                                </div>
                                <div id="ship-box-info">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>First Name <span class="required">*</span></label>
                                                <input type="text" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list mb-30">
                                                <label>Last Name <span class="required">*</span></label>
                                                <input type="text" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list mb-30">
                                                <label>Company Name</label>
                                                <input type="text" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list mb-30">
                                                <label>Email Address <span class="required">*</span></label>
                                                <input type="email" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list mb-30">
                                                <label>Phone  <span class="required">*</span></label>
                                                <input type="text" placeholder="phone" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="country-select mb-30">
                                                <label>Country <span class="required">*</span></label>
                                                <select>
                                                    <option value="volvo">Bangladesh</option>
                                                    <option value="saab">German</option>
                                                    <option value="mercedes">USA</option>
                                                    <option value="audi">Norway</option>
                                                    <option value="audi2">Panama</option>
                                                    <option value="audi3">Brazil</option>
                                                    <option value="audi4">Colombia</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list mb-30">
                                                <label>Address <span class="required">*</span></label>
                                                <input type="text" placeholder="Street address" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list mb-30">
                                                <label>City <span class="required">*</span></label>
                                                <input type="text" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list mb-30">
                                                <label>Zipcode <span class="required">*</span></label>
                                                <input type="text" placeholder="Postcode / Zipcode" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-notes">
                                    <div class="checkout-form-list">
                                        <label>Notes</label>
                                        <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes text"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="kiosk-checkbox-form">
                            <h3>Your order</h3>
                        </div>
                        <div class="kiosk-order">
                            <div class="kiosk-order-table table-responsive">
                                <table>
                                    <tbody>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                Standard Shoes
                                            </td>
                                            <td class="product-total">
                                                <span class="amount">$453.00</span>
                                            </td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                Shipping
                                            </td>
                                            <td class="product-total">
                                                <span class="amount">$10.00</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td class="product-total">
                                                <span class="amount">$546.00</span>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td class="product-total">
                                                <strong><span class="amount">$564.00</span></strong>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="kiosk-payment">
                                <div class="payment-accordion">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Direct Bank Transfer
                                                </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse  in show" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Cheque Payment
                                                </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingThree">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                PayPal
                                                </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                <div class="panel-body">
                                                    <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kiosk-payment-btn">
                                        <input type="submit" value="Place order" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </form>   
        </div>
    </div>
@endsection