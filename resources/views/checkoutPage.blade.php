@extends('front.layouts.app')


@section('contents')

<section class="checkOut_sec_1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main_checkout_head">
                    <h2>Checkout</h2>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="checkOut_sec_2">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="main_order_secc">
                    <h4>Order #240625-123006432</h4>
                    <hr>
                    <div class="main_box_checkoutt">
                        <div class="checkout-img">
                            <img src="assets/images/hotel_list1.webp" alt="">
                        </div>
                        <div class="checkout-box-content">
                            <h5>Caño Cristales River Trip</h5>
                            <p><b>Date:</b> 27 Jun, 2024</p>
                            <div class="date-child">
                            <p><b>From:</b> 27 Jun, 2024</p>
                            <p><b>To:</b> 30 Jun, 2024</p>
                        </div>
                            <p><b>Duration: </b>4 days</p>
                            <p><b>Tickets: </b> 1 person	<strong>PKR 27,000</strong></p>
                        </div>
                        <div class="checkout-box-price">
                            <h4>PKR 27,000</h4>
                        </div>

                    </div>
                    <div class="checkout-calculation-box">
                        <p><b>Subtotal:	</b>&nbsp; <b>PKR 27,000</b></p>
                        <p><b>Total:	</b>&nbsp; <b>PKR 27,000</b></p>
                        <p><b>Amount Paid:</b>&nbsp; <b>PKR 0</b></p>
                        <p><b>Amount Due:</b>&nbsp; <b class="total">PKR 27,000</b></p>

                    </div>

                    <div class="checkout-coupon-box">
                        <form action="">
                            <div class="coupon-code">
                                <p>Enter Coupon Code and get a discount!</p>
                                <input type="text" name="coupon" required>
                            </div>
                            <div class="submit-bnt">
                                <input type="submit" value="Apply Coupon">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="checkout-contact-form">
                    <h4>Contact information</h4>
                    <form action="">
                        <input type="text" name="f_name" placeholder="First name" required>
                        <input type="text" name="l_name" placeholder="Last name" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="email" name="re_email" placeholder="Re-type Email" required>
                        <input type="number" name="phone" placeholder="Contact Phone" required>
                        <div class="radio-fieldss">
                            <p>Amount to Pay:</p>
                            <input type="radio" id="amount-paid" checked name="amount" >
                            <label for="amount-paid">PKR 27,000</label>
                        </div>
                        <hr>
                        <div class="payment-amount-method">
                            <h4>Payment Method</h4>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="payLater-tab" data-bs-toggle="tab" data-bs-target="#payLater" type="button" role="tab" aria-controls="payLater" aria-selected="true">Pay Later</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="PayPal-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="PayPal" aria-selected="false">PayPal</button>
                                </li>
                              </ul>
                              <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="payLater" role="tabpanel" aria-labelledby="payLater-tab">
                                    <div class="main-tab-checkout-content">
                                        <h6>Book now, pay later!</h6>
                                        <div class="checkbox_field-cheout">
                                            <input type="checkbox" id="Paylater" name="payLater" required>
                                            <label for="Paylater">
                                                <h6>I read and agree to the terms & conditions</h6>
                                                <p>You have to edit “Terms & Conditions” page to replace this start content with your own</p>
                                            </label>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="PayPal" role="tabpanel" aria-labelledby="PayPal-tab">
                                    <div class="main-tab-checkout-content">
                                        <img src="assets/images/paypal-logo.png" alt="">
                                        <h6>Continue complete order and Pay with PayPal</h6>
                                        <div class="checkbox_field-cheout">
                                            <input type="checkbox" id="Paylater" name="payLater" required>
                                            <label for="Paylater">
                                                <h6>I read and agree to the terms & conditions</h6>
                                                <p>You have to edit “Terms & Conditions” page to replace this start content with your own</p>
                                            </label>
                                        </div>
                                        
                                    </div>
                                </div>
                              </div>
                        </div>

                        <div class="complete-order-btn">
                            <button type="submit">Complete My Order</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
