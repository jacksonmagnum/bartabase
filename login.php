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
                        <div id="loginAlert" class="alert alert-danger d-none" role="alert"></div>

                        <h2>Log in</h2>
                        <input type="text" placeholder="Email or username" id="loginEmail" />

                        <div class="password-wrap">
                            <input type="password" placeholder="Password" id="loginPassword" />
                            <i class="fa-solid fa-eye toggle-password" id="toggleLoginPassword"></i>
                        </div>

                        <button onclick="loginUser()">Continue</button>

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
        function loginUser() {
            const identifier = document.getElementById('loginEmail').value.trim();
            const password = document.getElementById('loginPassword').value;
            const alertBox = document.getElementById('loginAlert');

            alertBox.classList.add('d-none');
            alertBox.innerHTML = '';

            if (!identifier || !password) {
                alertBox.textContent = "Please enter both username and password.";
                alertBox.classList.remove('d-none');
                return;
            }

            fetch('login.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ identifier, password })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = 'index.php';
                } else {
                    if (data.error === 'user_not_found') {
                        alertBox.innerHTML = `Login Error: User Does Not Exist! Please <a href="#" onclick="triggerSignupModal()">create an account here</a>.`;
                    } else {
                        alertBox.textContent = "Username or Password is incorrect!";
                    }
                    alertBox.classList.remove('d-none');
                }
            })
            .catch(() => {
                alertBox.textContent = "Something went wrong. Please try again.";
                alertBox.classList.remove('d-none');
            });
        }

        // Trigger signup modal
        function triggerSignupModal() {
            const signupModal = new bootstrap.Modal(document.getElementById('signupModal'));
            signupModal.show();
        }
    </script>

  
</body>
</html>
