<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Surose - Jewelry eCommerce HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" href="assets/images/favicon.png">
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- CSS FILES HERE -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/jquery.nstSlider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- endinject -->
</head>

<body>
<p>{{ $featured_products }}</p>
{{--<p>{{ json_decode($main_images) }}</p>--}}
<!-- Preloader -->

<!--// Preloader -->

<!-- Wrapper -->
<div id="wrapper" class="wrapper">

    <!-- Header -->
    <div class="tm-header tm-header-sticky">

        <!-- Header Top Area -->
        <div class="tm-header-toparea bg-black">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-12">

                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="tm-header-options">
                            <div class="tm-dropdown tm-header-links">
                                <button>My Account</button>
                                <ul>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="login-register.html">Login/Register</a></li>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Header Top Area -->

        <!-- Header Middle Area -->
        <div class="tm-header-middlearea bg-white">
            <div class="container">
                <div class="tm-mobilenav"></div>
                <div class="row align-items-center">
                    <div class="col-lg-3 col-6 order-1 order-lg-1">
                        <a href="index.html" class="tm-header-logo">
                            <img src="assets/images/logo.png" alt="surose">
                        </a>
                    </div>
                    <div class="col-lg-6 col-12 order-3 order-lg-2">
                        <form class="tm-header-search">
                            <input type="text" placeholder="Search product...">
                            <button><i class="ion-android-search"></i></button>
                        </form>
                    </div>
                    <div class="col-lg-3 col-6 order-2 order-lg-3">
                        <ul class="tm-header-icons">
                            <li><a href="wishlist.html"><i
                                        class="ion-android-favorite-outline"></i><span>0</span></a></li>
                            <li><a href="cart.html"><i class="ion-bag"></i><span>0</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--// Header Middle Area -->

        <!-- Header Bottom Area -->
        <div class="tm-header-bottomarea bg-white">
            <div class="container">
                <nav class="tm-header-nav">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li class="tm-header-nav-dropdown"><a href="products.html">Shop</a>
                            <ul>
                                <li><a href="products.html">Products</a></li>
                                <li><a href="products-leftsidebar.html">Products Left Sidebar</a></li>
                                <li><a href="products-nosidebar.html">Products Without Sidebar</a></li>
                                <li><a href="products-4-column.html">Products 4 Column</a></li>
                                <li><a href="product-details.html">Product Details</a></li>
                                <li><a href="product-details-leftsidebar.html">Product Details Left Sidebar</a></li>
                                <li><a href="product-details-nosidebar.html">Product Details Without Sidebar</a>
                                </li>
                                <li><a href="#">Others</a>
                                    <ul>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="login-register.html">Login / Register</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="tm-header-nav-megamenu"><a href="index.html">Pages</a>

                            <ul>
                                <li><a href="shop.html">Common Pages</a>
                                    <ul>
                                        <li><a href="index.html">Homepage</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="portfolios.html">Portfolios</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Blog Pages</a>
                                    <ul>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-leftsidebar.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                        <li><a href="blog-details-leftsidebar.html">Blog Details Left Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Shop Pages</a>
                                    <ul>
                                        <li><a href="products.html">Products</a></li>
                                        <li><a href="products-leftsidebar.html">Products Left Sidebar</a></li>
                                        <li><a href="products-nosidebar.html">Products Without Sidebar</a></li>
                                        <li><a href="products-4-column.html">Products 4 Column</a></li>
                                        <li><a href="product-details.html">Product Details</a></li>
                                        <li><a href="product-details-leftsidebar.html">Product Details Left
                                                Sidebar</a></li>
                                        <li><a href="product-details-nosidebar.html">Product Details Without
                                                Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Shop Related Pages</a>
                                    <ul>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="login-register.html">Login / Register</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </li>
                        <li class="tm-header-nav-dropdown"><a href="blog.html">Blog</a>
                            <ul>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-leftsidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                                <li><a href="blog-details-leftsidebar.html">Blog Details Left Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!--// Header Bottom Area -->

    </div>
    <!--// Header -->

    <!-- Heroslider Area -->
    <div class="tm-heroslider-area bg-grey">
        <div class="tm-heroslider-slider">

            <!-- Heroslider Item -->
            <div class="tm-heroslider" data-bgimage="assets/images/heoslider-image-1.jpg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-8 col-12">
                            <div class="tm-heroslider-contentwrapper">
                                <div class="tm-heroslider-content">
                                    <h1>Woman’s Jewellery Collection</h1>
                                    <p>Jewellery may be made from a wide range of materials. Jewellery has been
                                        made to adorn nearly every body part from hairpins to toe.</p>
                                    <a href="products.html" class="tm-button">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Heroslider Item -->

            <!-- Heroslider Item -->
            <div class="tm-heroslider" data-bgimage="assets/images/heoslider-image-2.jpg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-8 col-12">
                            <div class="tm-heroslider-contentwrapper">
                                <div class="tm-heroslider-content">
                                    <h1>Woman’s Jewellery Collection</h1>
                                    <p>Jewellery may be made from a wide range of materials. Jewellery has been
                                        made to adorn nearly every body part from hairpins to toe.</p>
                                    <a href="products.html" class="tm-button">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Heroslider Item -->

        </div>
    </div>
    <!--// Heroslider Area -->

    <!-- Page Content -->
    <main class="page-content">

        <!-- Features Area -->
        <div class="tm-section tm-feature-area bg-grey">
            <div class="container">
                <div class="row mt-30-reverse">

                    <!-- Single Feature -->
                    <div class="col-lg-4 mt-30">
                        <div class="tm-feature">
                                <span class="tm-feature-icon">
                                    <img src="https://thememarch.com/demo/html/surose/surose/assets/images/icons/icon-free-shipping.png" alt="free shipping">
                                </span>
                            <div class="tm-feature-content">
                                <h6>Free Shipping</h6>
                                <p>We provide free shipping for all order over $200.00</p>
                            </div>
                        </div>
                    </div>
                    <!--// Single Feature -->

                    <!-- Single Feature -->
                    <div class="col-lg-4 mt-30">
                        <div class="tm-feature">
                                <span class="tm-feature-icon">
                                    <img src="assets/images/icons/icon-fast-delivery.png" alt="fast delivery">
                                </span>
                            <div class="tm-feature-content">
                                <h6>Fast Delivery</h6>
                                <p>We always deliver our customers very quickly.</p>
                            </div>
                        </div>
                    </div>
                    <!--// Single Feature -->

                    <!-- Single Feature -->
                    <div class="col-lg-4 mt-30">
                        <div class="tm-feature">
                                <span class="tm-feature-icon">
                                    <img src="assets/images/icons/icon-247-support.png" alt="24/7 Support">
                                </span>
                            <div class="tm-feature-content">
                                <h6>24/7 Support</h6>
                                <p>We provide support to our customers within 24 hours. </p>
                            </div>
                        </div>
                    </div>
                    <!--// Single Feature -->

                </div>
            </div>
        </div>
        <!--// Features Area -->

        <!-- Popular Products Area -->
        <div id="tm-popular-products-area" class="tm-section tm-popular-products-area tm-padding-section bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-12">
                        <div class="tm-sectiontitle text-center">
                            <h3>FEATURED PRODUCTS</h3>
                            <p>Our popular products are so beautyful to see that the shoppers are easily attracted
                                to them.</p>
                        </div>
                    </div>
                </div>
                <div class="row tm-products-slider">

                    <!-- Single Product -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="tm-product tm-scrollanim">
                            <div class="tm-product-topside">
                                <div class="tm-product-images">
                                    <img src="https://thememarch.com/demo/html/surose/surose/assets/images/products/product-image-8.jpg" alt="product image">
                                    <img src="https://thememarch.com/demo/html/surose/surose/assets/images/products/product-image-8.jpg" alt="product image">
                                </div>
                                <ul class="tm-product-actions">
                                    <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                </ul>
                                <div class="tm-product-badges">
                                    <span class="tm-product-badges-new">New</span>
                                    <span class="tm-product-badges-sale">Sale</span>
                                </div>
                            </div>
                            <div class="tm-product-bottomside">
                                <h6 class="tm-product-title"><a href="product-details.html">Stylist daimond
                                        earring</a></h6>
                                <div class="tm-ratingbox">
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span><i class="ion-android-star-outline"></i></span>
                                </div>
                                <span class="tm-product-price">$29.99</span>
                                <div class="tm-product-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five centuries, but also the
                                        leap into electronic typesetting.</p>
                                    <ul class="tm-product-actions">
                                        <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                    class="ion-eye"></i></button></li>
                                        <li><a href="#"><i class="ion-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Single Product -->

                    <!-- Single Product -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="tm-product tm-scrollanim">
                            <div class="tm-product-topside">
                                <div class="tm-product-images">
                                    <img src="assets/images/products/product-image-3.jpg" alt="product image">
                                </div>
                                <ul class="tm-product-actions">
                                    <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>

                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                </ul>
                                <div class="tm-product-badges">
                                    <span class="tm-product-badges-sale">Sale</span>
                                </div>
                            </div>
                            <div class="tm-product-bottomside">
                                <h6 class="tm-product-title"><a href="product-details.html">Stylist daimond
                                        earring</a></h6>
                                <div class="tm-ratingbox">
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span><i class="ion-android-star-outline"></i></span>
                                </div>
                                <span class="tm-product-price">$29.99</span>
                                <div class="tm-product-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five centuries, but also the
                                        leap into electronic typesetting.</p>
                                    <ul class="tm-product-actions">
                                        <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                    class="ion-eye"></i></button></li>
                                        <li><a href="#"><i class="ion-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Single Product -->





                    <!-- Single Product -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="tm-product tm-scrollanim">
                            <div class="tm-product-topside">
                                <div class="tm-product-images">
                                    <img src="assets/images/products/product-image-10.jpg" alt="product image">
                                    <img src="assets/images/products/product-image-1.jpg" alt="product image">
                                </div>
                                <ul class="tm-product-actions">
                                    <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>

                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                </ul>
                                <div class="tm-product-badges">
                                    <span class="tm-product-badges-soldout">Sold out</span>
                                </div>
                            </div>
                            <div class="tm-product-bottomside">
                                <h6 class="tm-product-title"><a href="product-details.html">Stylist daimond
                                        earring</a></h6>
                                <div class="tm-ratingbox">
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span><i class="ion-android-star-outline"></i></span>
                                </div>
                                <span class="tm-product-price">$29.99</span>
                                <div class="tm-product-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five centuries, but also the
                                        leap into electronic typesetting.</p>
                                    <ul class="tm-product-actions">
                                        <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                    class="ion-eye"></i></button></li>
                                        <li><a href="#"><i class="ion-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Single Product -->

                    <!-- Single Product -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="tm-product tm-scrollanim">
                            <div class="tm-product-topside">
                                <div class="tm-product-images">
                                    <img src="assets/images/products/product-image-12.jpg" alt="product image">
                                </div>
                                <ul class="tm-product-actions">
                                    <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>

                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                </ul>
                                <div class="tm-product-badges">
                                    <span class="tm-product-badges-new">New</span>
                                </div>
                            </div>
                            <div class="tm-product-bottomside">
                                <h6 class="tm-product-title"><a href="product-details.html">Stylist daimond
                                        earring</a></h6>
                                <div class="tm-ratingbox">
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span><i class="ion-android-star-outline"></i></span>
                                </div>
                                <span class="tm-product-price">$29.99</span>
                                <div class="tm-product-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five centuries, but also the
                                        leap into electronic typesetting.</p>
                                    <ul class="tm-product-actions">
                                        <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                    class="ion-eye"></i></button></li>
                                        <li><a href="#"><i class="ion-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Single Product -->

                </div>
            </div>
        </div>
        <!--// Popular Products Area -->

        <!-- Banners Area -->
        <div class="tm-section tm-banners-area">
            <div class="container">
                <div class="row mt-30-reverse">

                    <!-- Single Banner -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-30">
                        <a href="#" class="tm-banner tm-scrollanim">
                            <img src="assets/images/banner-image-1.jpg" alt="banner image">
                        </a>
                    </div>
                    <!--// Single Banner -->

                    <!-- Single Banner -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-30">
                        <a href="#" class="tm-banner tm-scrollanim">
                            <img src="assets/images/banner-image-2.jpg" alt="banner image">
                        </a>
                    </div>
                    <!--// Single Banner -->

                    <!-- Single Banner -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-30">
                        <a href="#" class="tm-banner tm-scrollanim">
                            <img src="assets/images/banner-image-3.jpg" alt="banner image">
                        </a>
                    </div>
                    <!--// Single Banner -->

                </div>
            </div>
        </div>
        <!--// Banners Area -->

        <!-- Popular Products Area -->
        <div id="tm-latest-products-area" class="tm-section tm-latest-products-area tm-padding-section bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-12">
                        <div class="tm-sectiontitle text-center">
                            <h3>NEW ARRIVAL PRODUCTS</h3>
                            <p>Our popular products are so beautyful to see that the shoppers are easily attracted
                                to them.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-50-reverse">
                    <!-- Single Product -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mt-50">
                        <div class="tm-product tm-scrollanim">
                            <div class="tm-product-topside">
                                <div class="tm-product-images">
                                    <img src="assets/images/products/product-image-12.jpg" alt="product image">
                                    <img src="assets/images/products/product-image-1.jpg" alt="product image">
                                </div>
                                <ul class="tm-product-actions">
                                    <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>

                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                </ul>
                            </div>
                            <div class="tm-product-bottomside">
                                <h6 class="tm-product-title"><a href="product-details.html">Stylist daimond
                                        earring</a></h6>
                                <div class="tm-ratingbox">
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span><i class="ion-android-star-outline"></i></span>
                                </div>
                                <span class="tm-product-price">$29.99</span>
                                <div class="tm-product-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five centuries, but also the
                                        leap into electronic typesetting.</p>
                                    <ul class="tm-product-actions">
                                        <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                    class="ion-eye"></i></button></li>
                                        <li><a href="#"><i class="ion-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--// Single Product -->
                </div>
                <div class="tm-product-loadmore text-center mt-50">
                    <a href="products.html" class="tm-button">All Products</a>
                </div>
            </div>
        </div>
        <!--// Popular Products Area -->

        <!-- Offer Area -->
        <div class="tm-section tm-offer-area tm-padding-section bg-grey">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12 order-2 order-lg-1">
                        <div class="tm-offer-content">
                            <h6>Super deal of the Month</h6>
                            <h1>Brand ear ring on <span>$250</span> only</h1>
                            <div class="tm-countdown" data-countdown="2020/10/12"></div>
                            <a href="product-details.html" class="tm-button">Shop now</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 order-1 order-lg-2">
                        <div class="tm-offer-image">
                            <img class="tm-offer" src="assets/images/offer-image-1.png" alt="offer image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Offer Area -->


        <!--// Latest Blogs Area -->

        <!-- Brand Logos -->
        <div class="tm-section tm-brandlogo-area tm-padding-section bg-grey">
            <div class="container">
                <div class="row tm-brandlogo-slider">

                    <!-- Brang Logo Single -->
                    <div class="col-12 tm-brandlogo">
                        <a href="#">
                            <img src="assets/images/brandlogo-1.png" alt="brand-logo">
                        </a>
                    </div>
                    <!--// Brang Logo Single -->

                    <!-- Brang Logo Single -->
                    <div class="col-12 tm-brandlogo">
                        <a href="#">
                            <img src="assets/images/brandlogo-2.png" alt="brand-logo">
                        </a>
                    </div>
                    <!--// Brang Logo Single -->

                    <!-- Brang Logo Single -->
                    <div class="col-12 tm-brandlogo">
                        <a href="#">
                            <img src="assets/images/brandlogo-3.png" alt="brand-logo">
                        </a>
                    </div>
                    <!--// Brang Logo Single -->

                    <!-- Brang Logo Single -->
                    <div class="col-12 tm-brandlogo">
                        <a href="#">
                            <img src="assets/images/brandlogo-4.png" alt="brand-logo">
                        </a>
                    </div>
                    <!--// Brang Logo Single -->

                    <!-- Brang Logo Single -->
                    <div class="col-12 tm-brandlogo">
                        <a href="#">
                            <img src="assets/images/brandlogo-5.png" alt="brand-logo">
                        </a>
                    </div>
                    <!--// Brang Logo Single -->

                    <!-- Brang Logo Single -->
                    <div class="col-12 tm-brandlogo">
                        <a href="#">
                            <img src="assets/images/brandlogo-1.png" alt="brand-logo">
                        </a>
                    </div>
                    <!--// Brang Logo Single -->

                    <!-- Brang Logo Single -->
                    <div class="col-12 tm-brandlogo">
                        <a href="#">
                            <img src="assets/images/brandlogo-2.png" alt="brand-logo">
                        </a>
                    </div>
                    <!--// Brang Logo Single -->

                    <!-- Brang Logo Single -->
                    <div class="col-12 tm-brandlogo">
                        <a href="#">
                            <img src="assets/images/brandlogo-3.png" alt="brand-logo">
                        </a>
                    </div>
                    <!--// Brang Logo Single -->

                    <!-- Brang Logo Single -->
                    <div class="col-12 tm-brandlogo">
                        <a href="#">
                            <img src="assets/images/brandlogo-4.png" alt="brand-logo">
                        </a>
                    </div>
                    <!--// Brang Logo Single -->

                    <!-- Brang Logo Single -->
                    <div class="col-12 tm-brandlogo">
                        <a href="#">
                            <img src="assets/images/brandlogo-5.png" alt="brand-logo">
                        </a>
                    </div>
                    <!--// Brang Logo Single -->

                </div>
            </div>
        </div>
        <!--// Brand Logos -->

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

    <!-- Product Quickview -->
    <div class="tm-product-quickview" id="tm-product-quickview">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10 col-12">
                    <div class="tm-product-quickview-inner">

                        <!-- Product Details -->
                        <div class="tm-prodetails">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-10 col-12">
                                    <div class="tm-prodetails-images">
                                        <div class="tm-prodetails-largeimages">
                                            <div class="tm-prodetails-largeimage">
                                                <img src="assets/images/products/product-image-1.jpg"
                                                     alt="product image">
                                            </div>
                                            <div class="tm-prodetails-largeimage">
                                                <img src="assets/images/products/product-image-2.jpg"
                                                     alt="product image">
                                            </div>
                                            <div class="tm-prodetails-largeimage">
                                                <img src="assets/images/products/product-image-3.jpg"
                                                     alt="product image">
                                            </div>
                                            <div class="tm-prodetails-largeimage">
                                                <img src="assets/images/products/product-image-4.jpg"
                                                     alt="product image">
                                            </div>
                                            <div class="tm-prodetails-largeimage">
                                                <img src="assets/images/products/product-image-6.jpg"
                                                     alt="product image">
                                            </div>
                                            <div class="tm-prodetails-largeimage">
                                                <img src="assets/images/products/product-image-6.jpg"
                                                     alt="product image">
                                            </div>
                                        </div>
                                        <div class="tm-prodetails-thumbnails">
                                            <div class="tm-prodetails-thumbnail">
                                                <img src="assets/images/products/product-image-1-thumb.jpg"
                                                     alt="product image">
                                            </div>
                                            <div class="tm-prodetails-thumbnail">
                                                <img src="assets/images/products/product-image-2-thumb.jpg"
                                                     alt="product image">
                                            </div>
                                            <div class="tm-prodetails-thumbnail">
                                                <img src="assets/images/products/product-image-3-thumb.jpg"
                                                     alt="product image">
                                            </div>
                                            <div class="tm-prodetails-thumbnail">
                                                <img src="assets/images/products/product-image-4-thumb.jpg"
                                                     alt="product image">
                                            </div>
                                            <div class="tm-prodetails-thumbnail">
                                                <img src="assets/images/products/product-image-5-thumb.jpg"
                                                     alt="product image">
                                            </div>
                                            <div class="tm-prodetails-thumbnail">
                                                <img src="assets/images/products/product-image-6-thumb.jpg"
                                                     alt="product image">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="tm-prodetails-content">
                                        <h4 class="tm-prodetails-title">Stylist daimond ring</h4>
                                        <span class="tm-prodetails-price"><del>$75.99</del> $59.99</span>
                                        <div class="tm-ratingbox">
                                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                            <span><i class="ion-android-star-outline"></i></span>
                                        </div>
                                        <div class="tm-prodetails-infos">
                                            <div class="tm-prodetails-singleinfo">
                                                <b>Product ID : </b>010
                                            </div>
                                            <div class="tm-prodetails-singleinfo">
                                                <b>Category : </b><a href="#">Ring</a>
                                            </div>
                                            <div class="tm-prodetails-singleinfo tm-prodetails-tags">
                                                <b>Tags : </b>
                                                <ul>
                                                    <li><a href="#">bracelets</a></li>
                                                    <li><a href="#">diamond</a></li>
                                                    <li><a href="#">ring</a></li>
                                                    <li><a href="#">necklaces</a></li>
                                                </ul>
                                            </div>
                                            <div class="tm-prodetails-singleinfo">
                                                <b>Available : </b>
                                                <span class="color-theme">In Stock</span>
                                            </div>
                                            <div class="tm-prodetails-singleinfo tm-prodetails-share">
                                                <b>Share : </b>
                                                <ul>
                                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                                    <li><a href="#"><i class="ion-social-instagram-outline"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="ion-social-skype-outline"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="ion-social-pinterest-outline"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis quemi
                                            dolor, malesuada id metus a, mattis eleifend elit. Nullam pharetra
                                            consequat ex in dapibus. Vestibulum ante ipsum primis in faucibus
                                            orciluctus curae.</p>
                                        <div class="tm-prodetails-quantitycart">
                                            <h6>Quantity :</h6>
                                            <div class="tm-quantitybox">
                                                <input type="text" value="1">
                                            </div>
                                            <a href="#" class="tm-button tm-button-dark">Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Product Details -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Product Quickview -->

    <button id="back-top-top"><i class="ion-arrow-up-c"></i></button>

</div>
<!--// Wrapper -->

<!-- JS FILES HERE -->
<!-- inject:js -->
<script src="{{ asset('assets/js/vendors/modernizr-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/jquery.meanmenu.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/jquery.nice-select.js') }}"></script>
<script src="{{ asset('assets/js/vendors/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/instafeed.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/jquery.nstslider.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<!-- endinject -->
</body>

</html>
