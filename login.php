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
                <div class="login-card">
                    <h2>Log in</h2>
                    <input type="text" placeholder="Email or username" id="loginEmail" />

                    <div class="password-wrap">
                        <input type="password" placeholder="Password" id="loginPassword" />
                        <i class="fa-solid fa-eye toggle-password" id="toggleLoginPassword"></i>
                    </div>

                    <button>Continue</button>

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

    <!--Load More JS -->
    <script>
        const loadMoreBtn = document.getElementById('load-more-btn');
        const loadCount = 4; // Number of items to show per click

        loadMoreBtn.addEventListener('click', () => {
            const hiddenItems = document.querySelectorAll('.more-products.d-none');
            let shown = 0;

            hiddenItems.forEach((item) => {
            if (shown < loadCount) {
                item.classList.remove('d-none');
                item.classList.add('fade-in');
                shown++;
            }
            });

            // Hide button if no more items left to show
            if (document.querySelectorAll('.more-products.d-none').length === 0) {
            document.getElementById('load-more-wrapper').classList.add('d-none');
            }
        });
    </script>

</body>
</html>
