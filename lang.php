<?php
    if(isset($_GET["debug_site"])){
        $site = $_GET["debug_site"];
    } else {
        $site = "Unspecified";
    }

    if(isset($_GET["debug_code"])){
        $code = $_GET["debug_code"];
    } else {
        $code = "unspecified_langload";
    }
?>


<!DOCTYPE html>
<html>

  <head>
    <!-- SEO -->
    <title>v0lture Solutions: Client Site Error</title>
    <meta charset="utf-8">
    <meta name="description" content="An error occurred on a client site produced by v0lture Solutions.">

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
        <a class="white-text">Client Site Error</a>
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

<br />
    <div align="center" class="white-text">
      <img src="img/logo.png" alt="v0lture Solutions Logo" style="width:10%;height:10%;"/>
      <h3>This site encountered an error trying to load a language.</h3>
      <p>Check our <a href="//stats.v0lture.com/#health">Health Center</a> or try loading the website again.</p>
      <p>Return to main site <a href="//v0lture.com">here</a> or <a href="//v0lture.com/contact.php">contact us</a></p>
      <br /><br />
      <p class="grey-text">
          Client site <b><?= $site; ?></b><br />
          Error code <b><?= $code; ?></b><br />
          Use this information when contacting us with reporting this issue.
      </p>
    </div>

	<div class="adblock" align="center">
		<?php require "php/ad.php"; ?>
  </div>

  </body>
</html>
