<!DOCTYPE html>
<html>

  <head>
    <!-- SEO -->
    <title>v0lture Solutions: Contact</title>
    <meta charset="utf-8">
    <meta name="description" content="Contact v0lture Solutions regarding inquiries or concerns.">

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
        <a class="white-text">Contact</a>
      </div>
      <div class="right">
        <a href="stats.php">v0lture Stats</a>
        <a href="support.php">Support</a>
        <a href="https://client.v0lture.com">Client panel</a>
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
      <h3>Contact us</h3>
        <h4>Email</h4>
        <p>
          <b>v0lture Solutions</b> is available to be contacted via our email <a href="mailto:contact@v0lture.com">contact@v0lture.com</a>.<br />
          If you require support please view our <a href="support.php">support</a> page.
        </p>

        <h4>PGP</h4>
        <p>Use our PGP key <a href="contact/v0ltureContact.asc" class="tooltipped" data-delay="50" data-position="top" data-tooltip="v0ltureContact.asc">here</a> to securely communicate with us with encryption. If you do not supply your PGP key in return we may not reply.</p>

      <h3>Source Code</h3>
        <h4>GitHub</h4>
        <p>Our <a href="//github.com/v0lture">GitHub</a> hosts the source code for all of the the open source solutions we provide.</p>

      <h3>Social media</h3>
        <h4>Twitter</h4>
        <p>You can find us on Twitter using <a href="//twitter.com/v0ltureSolution">@v0ltureSolutions</a><br />
          Follow us here for more up to date news and updates relating to v0lture Solutions.</p>

        <h4>Instagram</h4>
        <p>You can find us on Instagram using <a href="//instagram.com/v0ltureSolutions">@v0ltureSolutions</a><br />
          We'll use this to post images of some work we are doing and other v0lture related images</p>

    </div>

    <div class="adblock" align="center">
  		<?php require "php/ad.php"; ?>
    </div>

  </body>
</html>
