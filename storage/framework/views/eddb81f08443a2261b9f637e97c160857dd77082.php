<!DOCTYPE html>
<html lang="zxx">

<?php echo $__env->make("partials.head", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>

<!-- Wrapper -->
<div id="wrapper" class="wrapper">

    <!-- Header -->
    <?php echo $__env->make("partials.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--// Header -->

    <!-- Breadcrumb Area -->
    <br>
    <br>
    <br>
    <!--// Breadcrumb Area -->


    <!-- Page Content -->
    <main class="page-content">

        <!-- Product Details Wrapper -->
        <div class="tm-product-details-area tm-section tm-padding-section bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <!-- Product Details -->
                        <div class="tm-prodetails">
                            <div class="row">
                                <div class="col-lg-5 col-md-6 col-sm-10 col-12">
                                    <div class="tm-prodetails-images">
                                        <div class="tm-prodetails-largeimages">
                                            <div class="tm-prodetails-largeimage">
                                                <a data-fancybox="tm-prodetails-imagegallery"
                                                   href="assets/images/products/product-image-1.jpg"
                                                   data-caption="Product Zoom Image 1">
                                                    <img src="<?php echo e($product->getMedia("main-image")[0]->getFullUrl()); ?>"
                                                         alt="product image">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-7 col-md-6 col-12">
                                    <div class="tm-prodetails-content">
                                        <h4 class="tm-prodetails-title"><?php echo e($product->name); ?></h4>
                                        <span class="tm-prodetails-price"><?php echo e($product->price); ?></span>
                                        <div class="tm-ratingbox">
                                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                            <span><i class="ion-android-star-outline"></i></span>
                                        </div>
                                        <div class="tm-prodetails-infos">
                                            <div class="tm-prodetails-singleinfo">
                                                <b>Product ID : </b><?php echo e($product->product_id); ?>

                                            </div>
                                            <div class="tm-prodetails-singleinfo">
                                                <b>Category : </b><a href="#"><?php echo e($product->category->name); ?></a>
                                            </div>
                                            <div class="tm-prodetails-singleinfo">

                                                <b>In stock : </b>
                                                <span class="color-theme"><?php echo e($product->stock); ?></span>
                                            </div>
                                        </div>
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

                        <!-- Product Details Description & Review -->
                        <div class="tm-prodetails-desreview tm-padding-section-sm-top">
                            <ul class="nav tm-tabgroup2" id="prodetails" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="prodetails-area1-tab" data-toggle="tab"
                                       href="#prodetails-area1" role="tab" aria-controls="prodetails-area1"
                                       aria-selected="true">Description</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="prodetails-content">
                                <div class="tab-pane fade show active" id="prodetails-area1" role="tabpanel"
                                     aria-labelledby="prodetails-area1-tab">
                                    <div class="tm-prodetails-description">
                                        <h4>Product Description</h4>
                                        {<?php echo $product->desc; ?>}

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--// Product Details Description & Review -->

                    </div>
                </div>
            </div>
        </div>
        <!--// Product Details Wrapper -->

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
<?php /**PATH F:\Projects\eproject-aptech-sem2\resources\views/product/single-product.blade.php ENDPATH**/ ?>