<?php
  session_start();

  if (!isset($_SESSION['allow_thankyou_page'])) {
      header('Location: index.php');
      exit;
  }

  unset($_SESSION['allow_thankyou_page']);
?>



<!-- thank-you.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Thank You</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT Sans">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/5e167c62db.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/styles.css">
  <script src="assets/js/script.js"></script>
  <style>
    h2 { color: #2e7d32; }
    p { color: #444; }
  </style>
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
  <div class="thank-you-main">
    <div class="box">
      <h2>Thank You!</h2>
      <p>Your email has been successfully verified.</p>
      <p>You may now continue with your purchase or login to your account.</p>
    </div>
  </div>

      <!--Footer-->
    <?php
        include 'assets/includes/footer.php';
    ?>
    <!--/Footer-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    
</body>
</html>
