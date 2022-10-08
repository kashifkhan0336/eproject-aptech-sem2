<!DOCTYPE html>
<html lang="zxx">

@include("partials.head")

<body>


<!-- Wrapper -->
<div id="wrapper" class="wrapper">

    <!-- Header -->
   @include("partials.header")
    <!--// Header -->

    <!-- Breadcrumb Area -->
    <div class="tm-breadcrumb-area tm-padding-section bg-grey" data-bgimage="assets/images/breadcrumb-bg.jpg">
        <div class="container">
            <div class="tm-breadcrumb">
                <h2>Shopping Cart</h2>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="products.html">Shop</a></li>
                    <li>Shopping Cart</li>
                </ul>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->

    <!-- Page Content -->
    <main class="page-content">

        <!-- Shopping Cart Area -->
        <div class="tm-section shopping-cart-area bg-white tm-padding-section">
            <div class="container">

                <!-- Shopping Cart Table -->
                <div class="tm-cart-table table-responsive">
                    <table class="table table-bordered mb-0">
                        <thead>
                        <tr>
                            <th class="tm-cart-col-image" scope="col">Image</th>
                            <th class="tm-cart-col-productname" scope="col">Product</th>
                            <th class="tm-cart-col-price" scope="col">Price</th>
                            <th class="tm-cart-col-quantity" scope="col">Quantity</th>
                            <th class="tm-cart-col-total" scope="col">Total</th>
                            <th class="tm-cart-col-remove" scope="col">Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <a href="product-details.html" class="tm-cart-productimage">
                                    <img src="assets/images/products/product-image-1-thumb.jpg"
                                         alt="product image">
                                </a>
                            </td>
                            <td>
                                <a href="product-details.html" class="tm-cart-productname">Stylist
                                    daimond
                                    earring</a>
                            </td>
                            <td class="tm-cart-price">$75.00</td>
                            <td>
                                <div class="tm-quantitybox">
                                    <input type="text" value="1">
                                </div>
                            </td>
                            <td>
                                <span class="tm-cart-totalprice">$75.00</span>
                            </td>
                            <td>
                                <button class="tm-cart-removeproduct"><i class="ion-close"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="product-details.html" class="tm-cart-productimage">
                                    <img src="assets/images/products/product-image-2-thumb.jpg"
                                         alt="product image">
                                </a>
                            </td>
                            <td>
                                <a href="product-details.html" class="tm-cart-productname">Stylist
                                    daimond
                                    earring</a>
                            </td>
                            <td class="tm-cart-price">$75.00</td>
                            <td>
                                <div class="tm-quantitybox">
                                    <input type="text" value="1">
                                </div>
                            </td>
                            <td>
                                <span class="tm-cart-totalprice">$75.00</span>
                            </td>
                            <td>
                                <button class="tm-cart-removeproduct"><i class="ion-close"></i></button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!--// Shopping Cart Table -->

                <!-- Shopping Cart Content -->
                <div class="tm-cart-bottomarea">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="tm-buttongroup">
                                <a href="#" class="tm-button">Continue Shopping</a>
                                <a href="#" class="tm-button">Update Cart</a>
                            </div>
                            <form action="#" class="tm-cart-coupon">
                                <label for="coupon-field">Have a coupon code?</label>
                                <input type="text" id="coupon-field" placeholder="Enter coupon code"
                                       required="required">
                                <button type="submit" class="tm-button">Submit</button>
                            </form>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="tm-cart-pricebox">
                                <h2>Cart Totals</h2>
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <tbody>
                                        <tr class="tm-cart-pricebox-subtotal">
                                            <td>Cart Subtotal</td>
                                            <td>$175.00</td>
                                        </tr>
                                        <tr class="tm-cart-pricebox-shipping">
                                            <td>(+) Shipping Charge</td>
                                            <td>$15.00</td>
                                        </tr>
                                        <tr class="tm-cart-pricebox-total">
                                            <td>Total</td>
                                            <td>$190.00</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="#" class="tm-button">Proceed To Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Shopping Cart Content -->

            </div>
        </div>
        <!--// Shopping Cart Area -->

    </main>
    <!--// Page Content -->

    <!-- Footer -->
    <div class="tm-footer">

        <!-- Instagram Photos -->
        <ul id="instafeed" class="tm-instaphotos"></ul>
        <!--// Instagram Photos -->

        <!-- Footer Top Area -->
        <div class="tm-footer-toparea tm-padding-section">
            <div class="container">
                <div class="widgets widgets-footer row">

                    <!-- Single Widget -->
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-widget widget-info">
                            <a class="widget-info-logo" href="index.html"><img src="assets/images/logo.png"
                                                                               alt="logo"></a>
                            <p>Lorem ipsum dolor sit amet, consect etur adipiscing elit.</p>
                            <ul>
                                <li><b>Address :</b>2726 Avenue Papineau Montreal, QC, Canada</li>
                                <li><b>Phone :</b><a href="tel:+18009156270">1-800-915-6270</a></li>
                                <li><b>Email :</b><a href="mailto:info@example.com">info@example.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--// Single Widget -->

                    <!-- Single Widget -->
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-widget widget-quicklinks">
                            <h6 class="widget-title">Useful Link</h6>
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="#">Delivery Info</a></li>
                                <li><a href="#">Privacy & Policy</a></li>
                                <li><a href="#">Returns & Refunds</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--// Single Widget -->

                    <!-- Single Widget -->
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-widget widget-quicklinks">
                            <h6 class="widget-title">My Account</h6>
                            <ul>
                                <li><a href="my-account.html">My account</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="#">Newsletter</a></li>
                                <li><a href="#">Check out</a></li>
                                <li><a href="#">Frequently Questions</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--// Single Widget -->

                    <!-- Single Widget -->
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-widget widget-newsletter">
                            <h6 class="widget-title">Join Our Newsletter</h6>
                            <p>Get Business news, tip and solutions to
                                your problems from our experts.</p>
                            <form id="tm-mailchimp-form" class="widget-newsletter-form">
                                <input id="mc-email" type="text" placeholder="Enter email address">
                                <button id="mc-submit" type="submit" class="tm-button">Subscribe Now
                                    <b></b></button>
                            </form>
                            <!-- Mailchimp Alerts -->
                            <div class="tm-mailchimp-alerts">
                                <div class="tm-mailchimp-submitting"></div>
                                <div class="mailchimp-success"></div>
                                <div class="tm-mailchimp-error"></div>
                            </div>
                            <!--// Mailchimp Alerts -->
                        </div>
                    </div>
                    <!--// Single Widget -->

                </div>
            </div>
        </div>
        <!--// Footer Top Area -->

        <!-- Footer Bottom Area -->
        <div class="tm-footer-bottomarea">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <p class="tm-footer-copyright">©
                            2019. Designed by <a href="https://thememarch.com">ThemeMarch</a></p>
                    </div>
                    <div class="col-md-5">
                        <div class="tm-footer-payment">
                            <img src="assets/images/payment-methods.png" alt="payment methods">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Footer Bottom Area -->

    </div>
    <!--// Footer -->

    <button id="back-top-top"><i class="ion-arrow-up-c"></i></button>

</div>
<!--// Wrapper -->

<!-- JS FILES HERE -->
<!-- inject:js -->
@include("partials.scripts")
<!-- endinject -->
</body>

</html>
