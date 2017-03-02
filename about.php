
<!DOCTYPE html>
<html>

  <head>
    <!-- SEO -->
    <title>v0lture Solutions: About</title>
    <meta charset="utf-8">
    <meta name="description" content="About v0lture Solutions">

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
        <a class="white-text">About</a>
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
      <p>
        v0lture Solutions is a company dedicated to the creation and maintenance of high quality websites and software. We are proud supporters of the Free Software Foundation so all software we make for ourselves will always remain free and open source.
      </p>
      <p>
        Our current largest project is <a href="v0ltureDB/">v0ltureDB</a> which is designed to be a web based MySQL database manager that was originally thought of when we were dissatisfied with the software already available.
      </p>
      <p>
        We also do website development and maintenance for a very fair price as well as create software by request of a client. All pricing is negotiable and we can do our best to fit any budget.
      </p>
      <p>
        If you would like to get in contact with us to request software or just want to talk, email us at <a href="mailto:contact@v0lture.com">contact@v0lture.com</a>. Our PGP key is available on our <a href="contact.php">contact page</a> if you'd like to contact us using that.
      </p>
    </div>

	<div class="adblock" align="center">
		<?php require "php/ad.php"; ?>
  </div>

  </body>
</html>
