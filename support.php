<?php
  require "php/news.php";
  $n = new news();
?>

<!DOCTYPE html>
<html>

  <head>
    <!-- SEO -->
    <title>v0lture Solutions: Support</title>
    <meta charset="utf-8">
    <meta name="description" content="Get support v0lture Solutions and our products.">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">

    <!-- resources -->
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- scripts -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/main.js"></script>

    <?php include "php/analytics.php"; ?>

    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
  </head>

  <body>

    <!-- status bar -->
    <div class="statusbar">
      <div class="left">
        <a class="white-text">Support</a>
      </div>
      <div class="right">
        <a href="stats.php">v0lture Stats</a>
        <a href="support.php">Support</a>
        <a href="https://client.v0lture.com">Client Panel</a>
      </div>
    </div>

    <!-- nav -->
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper">
          <a href="index.php" class="brand-logo">v0lture <sub class="hide-on-med-and-down"><small>Solutions</small></sub></a>
          <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>

          <!-- mobile nav -->
          <ul class="side-nav" id="mobile">
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="solutions.php">Solutions</a></li>
          </ul>

          <!-- normal nav -->
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li class="waves-effect waves-light"><a href="about.php">About</a></li>
            <li class="waves-effect waves-light"><a href="contact.php">Contact</a></li>
            <li class="waves-effect waves-light"><a href="solutions.php">Solutions</a></li>
          </ul>
        </div>
      </nav>
    </div>

    <!-- page content -->
    <div class="markdown-wrapper">
      <h4>Support via email</h4>
      <p>Currently the only support we offer is when you contact us via our <a href="mailto:support@v0lture.com">support email</a></p>
      <p>We are in the process of setting up a support ticketing system. We will update this page when it is ready</p>
    </div>

    <div class="adblock" align="center">
  		<?php require "php/ad.php"; ?>
    </div>

  </body>
</html>
