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
                <h2>Login & Register</h2>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Login & Register</li>
                </ul>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->

    <!-- Page Content -->
    <main class="page-content">
        @if ($errors->any())
            <div class="alert alert-warning">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(@isset($msg))
                <div class="alert alert-success">
                    <p>{{ $msg }}</p>
                </div>
        @endif
            @if(@isset($loginerror))
                <div class="alert alert-danger">
                    <p>{{ $loginerror }}</p>
                </div>
            @endif
        <!-- Login Register Area -->
        <div class="tm-section tm-login-register-area bg-white tm-padding-section">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6">
                        <form action="{{ route("login-customer") }}" class="tm-form tm-login-form" method="post">
                            @csrf
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
                        <form action="{{ route("register-customer") }}" method="post" class="tm-form tm-register-form">
                            @csrf
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
