<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"
    />
    <link rel="stylesheet" href="../style/reset.css" />
    <link rel="stylesheet" href="../assets/css/style.css">

    <title>RAS Crayfish Control Monitoring System</title>
  </head>
  <div class="container">
    <?php require_once("../components/navbar.php"); ?>
    
    <!-- Content -->
    <iframe
      src="http://127.0.0.1:1880/ui"
      frameborder="0"
      width=1200
      height=900
    ></iframe>
    <!-- End Content -->

    <?php require_once("../components/burger.php"); ?>
  </div>

  <script src="../assets/js/index.js"></script>
</html>