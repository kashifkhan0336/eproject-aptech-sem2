<!DOCTYPE html>
<html lang="zxx">

@include("partials.head")
<body>

<!-- Wrapper -->
<div id="wrapper" class="wrapper">

    <!-- Header -->
    @include("partials.header")
    <!--// Header -->

    <!-- Page Content -->
    <main class="page-content">

        <!-- Products Wrapper -->
        <div class="tm-products-area tm-section tm-padding-section bg-white">
            <div class="container">
                <div class="row">

                    <div class="col-lg-9 col-12 order-1 order-lg-2">
                        <form action="#" class="tm-shop-header">
                            <div class="tm-shop-productview">
                                <span>View:</span>
                                <button data-view="grid" class="active"><i class="ion-android-apps"></i></button>
                                <button data-view="list"><i class="ion-android-menu"></i></button>
                            </div>
                            <p class="tm-shop-countview">Product count {{ count($products) }}</p>
                            <select>
                                <option value="value">Default Sorting</option>
                                <option value="value">Name A-Z</option>
                                <option value="value">Date</option>
                            </select>
                        </form>

                        <div class="tm-shop-products">
                            <div class="row mt-30-reverse">
                                @foreach($products->sortBy("price") as $product)
                                    <!-- Single Product -->
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 mt-50">
                                        <div class="tm-product tm-scrollanim">
                                            <div class="tm-product-topside">
                                                <div class="tm-product-images">
                                                    <img src="{{ $product->getMedia("main-image")[0]->getFullUrl("thumb") }}"
                                                         alt="product image">
                                                </div>
                                                <ul class="tm-product-actions">
                                                    <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a>
                                                    </li>
                                                </ul>
                                                <div class="tm-product-badges">
                                                    <span class="tm-product-badges-new">New</span>
                                                </div>
                                            </div>
                                            <div class="tm-product-bottomside">
                                                <h6 class="tm-product-title"><a href="product-details.html">{{ $product->name }}</a></h6>
                                                <div class="tm-ratingbox">
                                                    <span class="is-active"><i
                                                            class="ion-android-star-outline"></i></span>
                                                    <span class="is-active"><i
                                                            class="ion-android-star-outline"></i></span>
                                                    <span class="is-active"><i
                                                            class="ion-android-star-outline"></i></span>
                                                    <span class="is-active"><i
                                                            class="ion-android-star-outline"></i></span>
                                                    <span><i class="ion-android-star-outline"></i></span>
                                                </div>
                                                <span class="tm-product-price">{{ $product->price }}</span>
                                                <div class="tm-product-content">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry.
                                                        Lorem
                                                        Ipsum has been the industry's standard dummy text ever since the
                                                        when an unknown printer took a galley of type and scrambled it
                                                        to make a
                                                        type specimen book. It has survived not only five centuries, but
                                                        also the
                                                        leap into electronic typesetting.</p>
                                                    <ul class="tm-product-actions">
                                                        <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a>
                                                        </li>
                                                        <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                                    class="ion-eye"></i></button></li>
                                                        <li><a href="#"><i class="ion-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--// Single Product -->
                                @endforeach


                            </div>
                        </div>

                        <div class="tm-pagination mt-50">
                            <ul>
                                <li class="is-active"><a href="products.html">1</a></li>
                                <li><a href="products.html">2</a></li>
                                <li><a href="products.html">3</a></li>
                                <li><a href="products.html">4</a></li>
                                <li><a href="products.html"><i class="ion-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Widgets -->
                    <div class="col-lg-3 col-12 order-2 order-lg-1">
                        <div class="widgets">

                            <!-- Single Widget -->
                            <div class="single-widget widget-categories">
                                <h6 class="widget-title">Categories</h6>
                                <ul>
                                    @foreach($categories as $category)
                                        <li><a href="{{ route("category.show", ["id"=>$category])}}">{{ $category->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <!--// Single Widget -->

                            <!-- Single Widget -->
                            <div class="single-widget widget-pricefilter">
                                <h6 class="widget-title">Filter by Price</h6>
                                <div class="widget-pricefilter-inner">
                                    <div class="tm-rangeslider" data-range_min="0" data-range_max="800"
                                         data-cur_min="200" data-cur_max="550">
                                        <div class="tm-rangeslider-bar nst-animating"></div>
                                        <span class="tm-rangeslider-leftgrip nst-animating" tabindex="0"></span>
                                        <span class="tm-rangeslider-rightgrip nst-animating" tabindex="0"></span>
                                    </div>
                                    <div class="widget-pricefilter-actions">
                                        <p class="widget-pricefilter-price">Price: $<span
                                                class="tm-rangeslider-leftlabel">308</span>
                                            - $<span class="tm-rangeslider-rightlabel">798</span></p>
                                        <button class="widget-pricefilter-button">Filter</button>
                                    </div>
                                </div>
                            </div>
                            <!--// Single Widget -->

                            <!-- Single Widget -->
                            <div class="single-widget widget-popularproduct">
                                <h6 class="widget-title">Popular Product</h6>
                                <ul>
                                    @foreach($featured_products as $product)
                                        <li>
                                            <a href="product-details.html" class="widget-popularproduct-image">
                                                <img src="{{ $product->getMedia("main-image")[0]->getFullUrl("thumb") }}"
                                                     alt="product thumbnail">
                                            </a>
                                            <div class="widget-popularproduct-content">
                                                <h6><a href="product-details.html">{{ $product->name }}</a></h6>
                                                <span>{{ $product->price }}</span>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!--// Single Widget -->

                            <!-- Single Widget -->

                            <!--// Single Widget -->

                        </div>
                    </div>
                    <!--// Widgets -->

                </div>
            </div>
        </div>
        <!--// Products Wrapper -->

    </main>
    <!--// Page Content -->

    <!-- Footer -->
    @include("partials.footer")
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
@include("partials.scripts")
<!-- endinject -->
</body>

</html>
