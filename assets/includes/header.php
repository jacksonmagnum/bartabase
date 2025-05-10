    <!-- Top Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="http://localhost/bartabase/assets/images/bartabase-logo.png" class="top-logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#menuModal">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center d-none d-lg-block">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/bartabase">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Top Rated</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Free Items</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Handy Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
            <div class="dropdown d-none d-lg-block">
                <button class="btn btn-primary dropdown-toggle signin-button text-start" type="button" id="authDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <div>
                        <div class="signin-hello-text">Hello, sign in</div>
                        <div class="accounts-text">Accounts & Lists</div>
                    </div>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="authDropdown" style="padding:10px;">
                    <li>
                        <a class="dropdown-item top-signin-btn" href="#">Sign in</a>
                        <div class="new-customer-link">New customer? <a href="#">Create account here.</a></div>
                    </li>
                    <hr>
                    <li>
                        <div class="account-list">
                            <h6 style="font-weight: bold; text-align: center;">Your Account</h6>
                            <a href="#">Account</a>
                            <a href="#">Orders</a>
                            <a href="#">Watchlist</a>
                            <a href="#">Recommendations</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu Modal -->
    <div class="modal fade" id="menuModal" tabindex="-1" aria-labelledby="menuModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-sm-down">
            <div class="modal-content bg-dark text-white">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="menuModalLabel"><img src="http://localhost/bartabase/assets/images/bartabase-logo.png" class="top-logo"></h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <a class="btn btn-outline-light w-100 mb-2" href="#">Sell Now</a>
                    <a class="btn btn-primary w-100" href="#">Sign up | Log in</a>
                </div>

                <hr class="text-white">

                <ul class="navbar-nav">
                    <h6>Categories</h6>
                    <li class="nav-item"><a class="nav-link-mobile text-white" href="#"><i class="fa-solid fa-desktop"></i> Computers</a></li>
                    <li class="nav-item"><a class="nav-link-mobile text-white mobile-li" href="http://localhost/bartabase/categories/electronics"><i class="fa-solid fa-plug-circle-check"></i> Electronics</a></li>
                    <li class="nav-item"><a class="nav-link-mobile text-white" href="#"><i class="fa-solid fa-signal"></i> Phones & Tablets</a></li>
                    <li class="nav-item"><a class="nav-link-mobile text-white" href="#"><i class="fa-solid fa-shirt"></i> Fashion</a></li>
                    <li class="nav-item"><a class="nav-link-mobile text-white" href="#"><i class="fa-solid fa-fan"></i> Appliances</a></li>
                    <li class="nav-item"><a class="nav-link-mobile text-white" href="#"><i class="fa-solid fa-wheat-awn-circle-exclamation"></i> Beauty & Health</a></li>
                    <li class="nav-item"><a class="nav-link-mobile text-white" href="#"><i class="fa-solid fa-baby-carriage"></i> Baby</a></li>
                    <li class="nav-item"><a class="nav-link-mobile text-white" href="#"><i class="fa-solid fa-kitchen-set"></i> Home & Kitchen</a></li>
                    <li class="nav-item"><a class="nav-link-mobile text-white" href="#"><i class="fa-solid fa-gamepad"></i> Toys & Games</a></li>
                    <li class="nav-item"><a class="nav-link-mobile text-white" href="#"><i class="fa-solid fa-briefcase"></i> Office</a></li>
                    <li class="nav-item"><a class="nav-link-mobile text-white" href="#"><i class="fa-solid fa-martini-glass"></i> Drinks & Groceries</a></li>
                    <li class="nav-item"><a class="nav-link-mobile text-white" href="#"><i class="fa-solid fa-star-of-life"></i> Other Categories</a></li>
                </ul>
            </div>
            </div>
        </div>
    </div>