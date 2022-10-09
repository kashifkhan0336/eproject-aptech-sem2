<!DOCTYPE html>
<html lang="zxx">

<?php echo $__env->make("partials.head", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>



<!-- Preloader -->

<!--// Preloader -->

<!-- Wrapper -->
<div id="wrapper" class="wrapper">

    <!-- Header -->
    <?php echo $__env->make("partials.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--// Header -->

    <!-- Heroslider Area -->
    <div class="tm-heroslider-area bg-grey">
        <div class="tm-heroslider-slider">

            <!-- Heroslider Item -->
            <div class="tm-heroslider" data-bgimage="/storage/images/hero1.jpg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-8 col-12">
                            <div class="tm-heroslider-contentwrapper">
                                <div class="tm-heroslider-content">
                                    <h1>Arts Shop</h1>
                                    <p>Arts is a stationary shop that sells arts, gift articles, greeting cards, dolls, files, hand bags, wallets, and as well some of the beauty products</p>
                                    <a href="<?php echo e(route("product.all")); ?>" class="tm-button">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Heroslider Item -->

            <!-- Heroslider Item -->
            <div class="tm-heroslider" data-bgimage="/storage/images/hero2.jpg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-8 col-12">
                            <div class="tm-heroslider-contentwrapper">
                                <div class="tm-heroslider-content">
                                    <h1>Stationary Shop</h1>
                                    <p>Arts is a stationary shop that sells arts, gift articles, greeting cards, dolls, files, hand bags, wallets, and as well some of the beauty products</p>
                                    <a href="<?php echo e(route("product.all")); ?>" class="tm-button">Shop Now</a>
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
                                    <img src="|<?php echo e(asset("assets/images/icons/icon-free-shipping.png")); ?>" alt="free shipping">
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
                                    <img src="<?php echo e(asset("assets/images/icons/icon-fast-delivery.png")); ?>" alt="fast delivery">
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
                                    <img src="<?php echo e(asset("assets/images/icons/icon-247-support.png")); ?>" alt="24/7 Support">
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
                            <p>Our popular products are so beautiful to see that the shoppers are easily attracted
                                to them.</p>
                        </div>
                    </div>
                </div>
                <div class="row tm-products-slider">

                    <?php $__currentLoopData = $featured_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="tm-product tm-scrollanim">
                                <div class="tm-product-topside">
                                    <div class="tm-product-images">
                                        <img src="<?php echo e($product->getMedia("main-image")[0]->getFullUrl()); ?>" alt="product image">
                                    </div>
                                    <ul class="tm-product-actions">
                                        <li><a href="<?php echo e(route("customer-cart-add",["product_id"=>$product->product_id])); ?>"><i class="ion-android-cart"></i> Add to cart</a></li>
                                    </ul>
                                    <div class="tm-product-badges">
                                        <span class="tm-product-badges-new">New</span>
                                    </div>
                                </div>
                                <div class="tm-product-bottomside">
                                    <h6 class="tm-product-title"><a href="<?php echo e(route("product.show", ["id"=>$product->product_id])); ?>"><?php echo e($product->name); ?></a></h6>
                                    <span class="tm-product-price"><?php echo e($product->price); ?></span>
                                    <div class="tm-product-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem
                                            Ipsum has been the industry's standard dummy text ever since the
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book. It has survived not only five centuries, but also the
                                            leap into electronic typesetting.</p>
                                        <ul class="tm-product-actions">
                                            <li>
                                                <a href="<?php echo e(route("customer-cart-add",["product_id"=>$product->product_id])); ?>"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
        <!--// Popular Products Area -->

        <!-- Banners Area -->

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
                    <?php $__currentLoopData = $all_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mt-50">
                            <div class="tm-product tm-scrollanim">
                                <div class="tm-product-topside">
                                    <div class="tm-product-images">
                                        <img src="<?php echo e($product->getMedia("main-image")[0]->getFullUrl()); ?> " alt="product image" >
                    </div>
                                    <ul class="tm-product-actions">
                                        <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                    </ul>
                                </div>
                                <div class="tm-product-bottomside">
                                    <h6 class="tm-product-title"><a href="<?php echo e(route("product.show", ["id"=>$product->product_id])); ?>"><?php echo e($product->name); ?></a></h6>
                                    <div class="tm-ratingbox">
                                        <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                        <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                        <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                        <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                        <span><i class="ion-android-star-outline"></i></span>
                                    </div>
                                    <span class="tm-product-price"><?php echo e($product->price); ?></span>
                                    <div class="tm-product-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem
                                            Ipsum has been the industry's standard dummy text ever since the
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book. It has survived not only five centuries, but also the
                                            leap into electronic typesetting.</p>
                                        <ul class="tm-product-actions">
                                            <li><a href="<?php echo e(route("customer-cart-add",["product_id"=>$product->product_id])); ?>"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    <!--// Single Product -->
                </div>
                <div class="tm-product-loadmore text-center mt-50">
                    <a href="products.html" class="tm-button">All Products</a>
                </div>
            </div>
        </div>
        <!--// Popular Products Area -->

    </main>
    <!--// Page Content -->

    <!-- Footer -->
    <?php echo $__env->make("partials.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--// Footer -->

    <button id="back-top-top"><i class="ion-arrow-up-c"></i></button>

</div>
<!--// Wrapper -->

<!-- JS FILES HERE -->
<!-- inject:js -->
    <?php echo $__env->make("partials.scripts", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- endinject -->
</body>

</html>
<?php /**PATH F:\Projects\eproject-aptech-sem2\resources\views/home.blade.php ENDPATH**/ ?>