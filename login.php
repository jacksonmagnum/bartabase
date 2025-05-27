<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BartaBase - Declutter & Sell</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/5e167c62db.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://localhost/bartabase/assets/css/styles.css">
    <script src="assets/js/script.js"></script>
</head>
<body>

    <!--Header Start-->
    <?php
        include 'assets/includes/header.php';
    ?>
    <!--/Header-->


    <!-- Side Menu -->
     <?php
        include 'assets/includes/side-bar.php';
     ?>
    <!--/Side Menu -->

    <div class="container mt-5" style="height: 100vh;">
        <div class="row">
            <div class="col-md-6 mx-auto">

                    <div class="login-card p-4 border rounded shadow">

                        <!-- Alert container -->
                        <div id="login-error" class="alert alert-danger d-none" role="alert"></div>

                        <h2>Log in</h2>
                        <input type="text" placeholder="Email or username" id="loginEmail" />

                        <div class="password-wrap">
                            <input type="password" placeholder="Password" id="loginPassword" />
                            <i class="fa-solid fa-eye toggle-password" id="toggleLoginPassword"></i>
                        </div>

                        <button id="loginButton" onclick="loginUser()">
                            <span id="loginBtnText">Continue</span>
                            <span id="loginSpinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                        </button>


                        <div class="help-link">
                            <a href="#">Forgot your password?</a>
                            <a href="#">Having trouble?</a>
                        </div>
                    </div>

            </div>
        </div>
    </div>



    <!--Footer-->
    <?php
        include 'assets/includes/footer.php';
    ?>
    <!--/Footer-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
        window.loginUser = function () {
            const identifier = document.getElementById('loginEmail').value.trim();
            const password = document.getElementById('loginPassword').value;
            const errorContainer = document.getElementById('login-error');
            const loginBtn = document.getElementById('loginButton');
            const loginText = document.getElementById('loginBtnText');
            const loginSpinner = document.getElementById('loginSpinner');

            errorContainer.innerHTML = '';
            errorContainer.classList.add('d-none');

            loginBtn.disabled = true;
            loginSpinner.classList.remove('d-none');
            loginText.textContent = 'Signing in...';

            fetch('loginuser.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ identifier, password })
            })
            .then(res => res.json().then(data => ({ status: res.status, body: data })))
            .then(({ status, body }) => {
            loginBtn.disabled = false;
            loginSpinner.classList.add('d-none');
            loginText.textContent = 'Continue';

            if (status === 200 && body.success) {
                window.location.href = 'index.php'; // Redirect instead of reload
                //location.reload();
            } else {
                errorContainer.classList.remove('d-none');
                if (body.error_code === 'user_not_found') {
                errorContainer.innerHTML = `Login Error: User Does Not Exist! <a href="#" onclick="openSignupModal()">Create an account here</a>.`;
                } else {
                errorContainer.textContent = body.error || 'Login failed';
                }
            }
            })
            .catch((err) => {
            loginBtn.disabled = false;
            loginSpinner.classList.add('d-none');
            loginText.textContent = 'Continue';
            errorContainer.classList.remove('d-none');
            errorContainer.textContent = 'An error occurred. Please try again.';
            console.error("Fetch Error:", err); // log the actual error
            });
        };
        });
    </script>

    <script>
        function openSignupModal() {
            const signupModal = document.getElementById('bartabase-auth-modal');
            if (signupModal) {
            signupModal.style.display = 'block'; // or use Bootstrap/modal logic if applicable
            }
        }
    </script>



  
</body>
</html>
