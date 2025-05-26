<?php
    session_start();

    $userLoggedIn = false;
    $username = '';

    if (isset($_SESSION['user_id'])) {
        // Connect to DB
        $pdo = new PDO("mysql:host=localhost;dbname=bartabase;charset=utf8mb4", "root", "", [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);

        $stmt = $pdo->prepare("SELECT username FROM users WHERE id = ?");
        $stmt->execute([$_SESSION['user_id']]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $username = htmlspecialchars($user['username']);
            $userLoggedIn = true;
        }
    }
?>

<!-- Top Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="http://localhost/bartabase/"><img src="http://localhost/bartabase/assets/images/bartabase-logo.png" class="top-logo"></a>
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
                        <div class="signin-hello-text">
                            <?= $userLoggedIn ? "Hello, $username" : "Hello, sign in" ?>
                        </div>
                        <div class="accounts-text">Accounts & Lists</div>
                    </div>
                </button>

                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="authDropdown" style="padding:10px;">
                    <?php if (!$userLoggedIn): ?>
                        <li>
                            <a class="dropdown-item top-signin-btn" href="#" data-auth-trigger>Sign in</a>
                            <div class="new-customer-link">New customer? <a href="#" data-auth-trigger>Create account here.</a></div>
                        </li>
                        <hr>
                    <?php endif; ?>

                    <li>
                        <div class="account-list">
                            <h6 style="font-weight: bold; text-align: center;">Your Account</h6>
                            <a href="#">Account</a>
                            <a href="#">Orders</a>
                            <a href="#">Watchlist</a>
                            <a href="#">Recommendations</a>
                        </div>
                    </li>

                    <?php if ($userLoggedIn): ?>
                        <hr>
                        <li>
                            <form action="http://localhost/bartabase/logout.php" method="POST">
                                <button type="submit" class="dropdown-item top-signin-btn">Sign out</button>
                            </form>
                        </li>
                    <?php endif; ?>
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
                    <a class="btn btn-primary w-100" href="#" data-auth-trigger>Sign up | Log in</a>
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


<!-- Trigger buttons -->
<a class="dropdown-item top-signin-btn" href="#" data-auth-trigger>Sign in</a>
<div class="new-customer-link">
  New customer? <a href="#" data-auth-trigger>Create account here.</a>
</div> 

<!-- Bartabase Auth Modal -->
<div id="bartabase-auth-modal" class="bartabase-modal">
  <div class="bartabase-modal-content">
    <span class="bartabase-modal-close">&times;</span>
    <h3 style="text-align:center;">Join and sell on Bartabase with no fees.</h3>
    <button class="auth-btn social google"><i class="fa-brands fa-google"></i> Continue with Google</button>
    <button class="auth-btn social facebook"><i class="fa-brands fa-facebook-f"></i> Continue with Facebook</button>
    <button class="auth-btn social apple"><i class="fa-brands fa-apple"></i> Continue with Apple</button>
    <div style="text-align: center; margin: 20px 0;">
        <p>Register with <a href="#" class="email-link">Email</a></p>
        <p>Already have an account? <a href="http://localhost/bartabase/login.php">Log in</a></p>
    </div>
  </div>
</div>

<!-- Sign up with Email Modal -->
<div id="bartabase-email-modal" class="bartabase-modal">
  <div class="bartabase-modal-content large">
    <span class="bartabase-modal-close email-close">&times;</span>
    <form id="signupForm" method="POST" action="http://localhost/bartabase/signup.php">
        <h2 style="text-align: center">Sign up with email</h2>

        <input type="text" id="fullName" placeholder="Full name">
        <label id="fullNameLabel" data-default="Your full name will not be publicly visible.">Your full name will not be publicly visible.</label>

        <input type="text" id="username" placeholder="Username">
        <label id="usernameLabel" data-default="Only use letters and numbers. Usernames can’t be changed later.">Only use letters and numbers. Usernames can’t be changed later.</label>

        <input type="email" id="email" placeholder="Email">
        <label id="emailLabel" data-default="Enter the email you want to use on Bartabase.">Enter the email you want to use on Bartabase.</label>

        <div class="password-wrap">
        <input type="password" id="passwordField" placeholder="Password">
        <span class="toggle-password" id="togglePassword">&#128065;</span>
        </div>
        <label id="passwordLabel" data-default="At least 7 characters, including at least 1 letter and 1 number.">At least 7 characters, including at least 1 letter and 1 number.</label>

        <div class="checkbox-group">
        <label>
            <input type="checkbox" id="offersCheckbox">
            I’d like to receive personalized offers and updates via email.
        </label>
        <label>
            <input type="checkbox" id="termsCheckbox">
            <span>
                I agree to Bartabase’s
                <a href="#">Terms & Conditions</a> and 
                <a href="#">Privacy Policy</a>.
            </span>
        </label>
        </div>
        <span id="termsError" class="error-message"></span>

        <button class="auth-btn continue" id="signupBtn">Continue</button>
        </form>
    <p class="help-link"><a href="#">Having trouble?</a></p>
  </div>
</div>


