<?php
  require "php/news.php";
  $n = new news();
?>

<!DOCTYPE html>
<html>

  <head>
    <!-- SEO -->
    <title>v0lture Solutions: Health</title>
    <meta charset="utf-8">
    <meta name="description" content="Health status of v0lture Solutions">

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
        <a href="https://v0lture.com" class="white-text">v0lture Solutions</a>
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
          <a href="#" class="brand-logo">health</a>
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

    <!-- project array -->
    <div class="projectarray-wrapper">

      <!-- projects -->
      <div class="row">

        <div class="col s6 m4 l2">
          <div class="projectarray waves-effect waves-light health-good z-depth-4">
            <p class="title">v0lture.com</p>
            <span class="version right hide-on-small-only"><i class="material-icons">done</i></span>
            <span class="desc">Everything looks good</span>
          </div>
        </div>

        <div class="col s6 m4 l2">
          <div class="projectarray waves-effect waves-light health-pending z-depth-4">
            <p class="title">Client</p>
            <span class="version right hide-on-small-only"><i class="material-icons">track_changes</i></span>
            <span class="desc">Coming soon</span>
          </div>
        </div>

        <div class="col s6 m4 l2">
          <div class="projectarray waves-effect waves-light health-good z-depth-4">
            <p class="title">Versioning</p>
            <span class="version right hide-on-small-only"><i class="material-icons">done</i></span>
            <span class="desc">Everything looks good</span>
          </div>
        </div>

        <div class="col s6 m4 l2">
          <div class="projectarray waves-effect waves-light health-pending z-depth-4">
            <p class="title">vCMS</p>
            <span class="version right hide-on-small-only"><i class="material-icons">track_changes</i></span>
            <span class="desc">Coming soon</span>
          </div>
        </div>

        <div class="col s6 m4 l2">
          <div class="projectarray waves-effect waves-light health-pending z-depth-4">
            <p class="title">Vucket</p>
            <span class="version right hide-on-small-only"><i class="material-icons">track_changes</i></span>
            <span class="desc">Coming soon</span>
          </div>
        </div>

        <div class="col s6 m4 l2">
          <div class="projectarray waves-effect waves-light health-pending z-depth-4">
            <p class="title">Bugs</p>
            <span class="version right hide-on-small-only"><i class="material-icons">track_changes</i></span>
            <span class="desc">Coming soon</span>
          </div>
        </div>

        <div class="col s6 m4 l2">
          <div class="projectarray waves-effect waves-light health-pending z-depth-4">
            <p class="title">vAT</p>
            <span class="version right hide-on-small-only"><i class="material-icons">track_changes</i></span>
            <span class="desc">Coming soon</span>
          </div>
        </div>

        <div class="col s6 m4 l2">
          <div class="projectarray waves-effect waves-light">

          </div>
        </div>

        <div class="col s6 m4 l2">
          <div class="projectarray waves-effect waves-light">

          </div>
        </div>

        <div class="col s6 m4 l2">
          <div class="projectarray waves-effect waves-light">

          </div>
        </div>

        <div class="col s6 m4 l2">
          <div class="projectarray waves-effect waves-light">

          </div>
        </div>

        <div class="col s6 m4 l2">
          <div class="projectarray waves-effect waves-light">

          </div>
        </div>

        <div class="col s6 m4 l2">
          <div class="projectarray waves-effect waves-light">

          </div>
        </div>

        <div class="col s6 m4 l2">
          <div class="projectarray waves-effect waves-light">

          </div>
        </div>

        <div class="col s6 m4 l2">
          <div class="projectarray waves-effect waves-light">

          </div>
        </div>

        <div class="col s6 m4 l2">
          <div class="projectarray waves-effect waves-light">

          </div>
        </div>

        <div class="col s6 m4 l2">
          <div class="projectarray waves-effect waves-light">

          </div>
        </div>

        <div class="col s6 m4 l2">
          <div class="projectarray waves-effect waves-light">

          </div>
        </div>

      </div>

    </div>

  </body>
</html>
