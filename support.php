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
  </head>

  <body>

    <!-- status bar -->
    <div class="statusbar">
      <div class="left">
        <a href="index.php" class="white-text">Support</a>
      </div>
      <div class="right">
        <a href="health.php" class="green-text"><span class='white-text'>Server Status:</span> Healthy</a>
        <a href="support.php">Support</a>
        <a href="https://client.v0lture.com">Client</a>
      </div>
    </div>

    <!-- nav -->
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper">
          <a href="#" class="brand-logo">v0lture <sub class="hide-on-med-and-down"><small>Solutions</small></sub></a>
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
      <p>Currently the only support we offer is when you contact us via our <a href="mailto:support@v0lture.com">support email</p>

    </div>

  </body>
</html>
