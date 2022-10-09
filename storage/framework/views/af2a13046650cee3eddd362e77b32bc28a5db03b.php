<!DOCTYPE html>
<html lang="zxx">

<?php echo $__env->make("partials.head", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<!-- Wrapper -->
<div id="wrapper" class="wrapper">

    <!-- Header -->
    <?php $__env->startSection("partials.header"); ?>
    <!--// Header -->


    <!-- Page Content -->
    <main class="page-content">
        <?php if($errors->any()): ?>
            <div class="alert alert-warning">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <?php if(@isset($msg)): ?>
                <div class="alert alert-success">
                    <p><?php echo e($msg); ?></p>
                </div>
        <?php endif; ?>
            <?php if(@isset($loginerror)): ?>
                <div class="alert alert-danger">
                    <p><?php echo e($loginerror); ?></p>
                </div>
            <?php endif; ?>
        <!-- Login Register Area -->
        <div class="tm-section tm-login-register-area bg-white tm-padding-section">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6">
                        <form action="<?php echo e(route("login-customer")); ?>" class="tm-form tm-login-form" method="post">
                            <?php echo csrf_field(); ?>
                            <h4>Login</h4>
                            <p>Become a part of our community!</p>
                            <div class="tm-form-inner">
                                <div class="tm-form-field">
                                    <label for="login-email">email address*</label>
                                    <input type="email" id="login-email" required="required" name="email">
                                </div>
                                <div class="tm-form-field">
                                    <label for="login-password">Password*</label>
                                    <input type="password" id="login-password" required="required" name="password">
                                </div>
                                <div class="tm-form-field">
                                    <input type="checkbox" name="login-remember" id="login-remember">
                                    <label for="login-remember">Remember Me</label>
                                </div>
                                <div class="tm-form-field">
                                    <button type="submit" class="tm-button">Login</button>
                                </div>
                                <div class="tm-form-field">

                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-6">
                        <form action="<?php echo e(route("register-customer")); ?>" method="post" class="tm-form tm-register-form">
                            <?php echo csrf_field(); ?>
                            <h4>Create an account</h4>
                            <p>Welcome! Register for an account</p>
                            <div class="tm-form-inner">
                                <div class="tm-form-field">
                                    <label for="register-username">Username</label>
                                    <input type="text" id="register-username" required="required" name="username">
                                </div>
                                <div class="tm-form-field">
                                    <label for="register-email">Email address</label>
                                    <input type="email" id="register-email" required="required" name="email">
                                </div>
                                <div class="tm-form-field">
                                    <label for="register-username">First Name</label>
                                    <input type="text" id="register-username" required="required" name="lastName">
                                </div>
                                <div class="tm-form-field">
                                    <label for="register-email">Last Name</label>
                                    <input type="text" id="register-email" required="required" name="firstName">
                                </div>
                                <div class="tm-form-field">
                                    <label for="register-password">Password</label>
                                    <input type="password" id="register-password" name="password"
                                           required="required">
                                </div>
                                <div class="tm-form-field">
                                    <div>
                                        <input type="checkbox" id="register-pass-show" name="register-pass-show">
                                        <label for="register-pass-show">Show Password</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="register-terms" name="register-terms">
                                        <label for="register-terms">I have read and agree to the website <a
                                                href="#">terms and
                                                conditions</a></label>
                                    </div>
                                </div>
                                <div class="tm-form-field">
                                    <button type="submit" class="tm-button">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!--// Login Register Area -->

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
<?php /**PATH F:\Projects\eproject-aptech-sem2\resources\views/customer/login-register.blade.php ENDPATH**/ ?>