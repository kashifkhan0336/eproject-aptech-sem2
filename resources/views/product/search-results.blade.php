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
                <form action="#" class="tm-shop-header">
                    <div class="tm-shop-productview">
                        <span>View:</span>
                        <button data-view="grid" class="active"><i class="ion-android-apps"></i></button>
                        <button data-view="list"><i class="ion-android-menu"></i></button>
                    </div>
                    <p class="tm-shop-countview">Products count : {{ count($allProducts) }}</p>
                    <select>
                        <option value="value">Default Sorting</option>
                        <option value="value">Name A-Z</option>
                        <option value="value">Date</option>
                        <option value="value">Best Sellers</option>
                        <option value="value">Trending</option>
                    </select>
                </form>

                <div class="tm-shop-products">
                    <div class="row mt-30-reverse">
                        @foreach($allProducts as $product)
                            <!-- Single Product -->
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mt-50">
                                <div class="tm-product tm-scrollanim">
                                    <div class="tm-product-topside">
                                        <div class="tm-product-images">
                                            <img src="{{ $product->getMedia("main-image")[0]->getFullUrl() }}" alt="product image">
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
                                        <h6 class="tm-product-title"><a href="{{ route("product.show", ['id'=>$product->product_id]) }}">{{ $product->name }}</a></h6>
                                        <span class="tm-product-price">{{ $product->price }}</span>
                                        <div class="tm-product-content">
                                            <ul class="tm-product-actions">
                                                <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--// Single Product -->
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
        <!--// Products Wrapper -->

    </main>
    <!--// Page Content -->

    <!-- Footer -->
    @include("partials.footer")
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
