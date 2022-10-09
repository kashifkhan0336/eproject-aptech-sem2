<!DOCTYPE html>
<html lang="zxx">

<?php echo $__env->make("partials.head", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
<?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p><?php echo e($item->getMedia("main-image")[0]->getFullUrl("cart")); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<!-- Wrapper -->
<div id="wrapper" class="wrapper">

    <!-- Header -->
   <?php echo $__env->make("partials.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--// Header -->


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
                        <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                             <td>
                                    <a href="product-details.html" class="tm-cart-productimage">
                                        <img src="<?php echo e($item->getMedia("main-image")[0]->getFullUrl("cart")); ?>" alt="product image">
                                    </a>
                                </td>
                                <td>
                                    <a href="product-details.html" class="tm-cart-productname"><?php echo e($item->name); ?></a>
                            </td>
                            <td class="tm-cart-price"><?php echo e($item->price); ?></td><td>
        <span class="tm-cart-totalprice"><?php echo e($item->price); ?></span>
    </td>
    <td>
        <button class="tm-cart-removeproduct"><i class="ion-close"></i></button>
    </td>
</tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


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
<?php /**PATH F:\Projects\eproject-aptech-sem2\resources\views/customer/cart.blade.php ENDPATH**/ ?>