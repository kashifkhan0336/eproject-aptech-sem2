<div class="tm-header tm-header-sticky">

    <!-- Header Top Area -->
    <div class="tm-header-toparea bg-black">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-12">

                </div>
                <div class="col-lg-4 col-12">
                    <div class="tm-header-options">

                            @guest()
                                <a href="{{ route("customer.login-signup") }}">Login/Register1</a>
                            @endguest
                            @auth()
                                @if(Auth::user()->role != "dealer")
                                        <div class="tm-dropdown tm-header-links">
                                        <button>My Account</button>
                                        <ul>
                                            <li><a href="{{ route("customer-account") }}">My Account</a></li>
                                            <li><a href="{{ route("customer-cart") }}">Shopping Cart</a></li>
                                            <li><a href="{{ route("customer-logout") }}"><Logout></Logout></a></li>
                                        </ul>
                                        </div>
                                @endif
                            @endauth


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
                    <a href="/" class="tm-header-logo">
                        <h3>Arts Shop</h3>
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
                    <li class="tm-header-nav-dropdown"><a href="#">Categories</a>
                        <ul>
                            @foreach($categories as $category)
                                <li><a href="{{ route("category.show", ["id"=>$category])}}">{{ $category->name }}</a></li>
                            @endforeach

                        </ul>
                    </li>

                    <li><a href="{{ route("feedback.show") }}">Feedback</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--// Header Bottom Area -->

</div>
