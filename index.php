<?php
  require "php/news.php";
  $n = new news();
?>

<!DOCTYPE html>
<html>

  <head>
    <!-- SEO -->
    <title>v0lture Solutions</title>
    <meta charset="utf-8">
    <meta name="description" content="">

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

    <!-- project array -->
    <div class="projectarray-wrapper" style="padding-top:5px;">
	  <p style="color:white;padding:0px;font-size:24px;">Flagship Solutions</p>
      <!-- Solutions -->
      <div class="row">
        <a href="//github.com/v0lture/v0ltureDB">
          <div class="col s6 m4 l2">
            <div class="projectarray waves-effect waves-light projectarray-v0ltureDB z-depth-4">
              <p class="title">v0ltureDB</p>
              <span class="version right hide-on-small-only">0.0.3.0</span>
              <span class="desc">A web based MySQL database manager</span>
            </div>
          </div>
        </a>

        <a href="//github.com/v0lture/My-Mu-Portal">
          <div class="col s6 m4 l2">
            <div class="projectarray waves-effect waves-light projectarray-muApp z-depth-4">
              <p class="title">MU mobile app</p>
              <span class="version right hide-on-small-only">0.0.1.2</span>
              <span class="desc">An unoffical app to support students at Methodist University</span>
            </div>
          </div>
        </a>

        <a href="//github.com/v0lture/vucket">
          <div class="col s6 m4 l2">
            <div class="projectarray waves-effect waves-light projectarray-vucket z-depth-4">
              <p class="title">vucket</p>
              <span class="version right hide-on-small-only">0.0.3.5</span>
              <span class="desc">A bucket of various APIs used across v0lture Solutions</span>
            </div>
          </div>
        </a>

        <a href="//v0.lt">
          <div class="col s6 m4 l2">
            <div class="projectarray waves-effect waves-light projectarray-v0lt z-depth-4">
              <p class="title">v0lt</p>
              <span class="version right hide-on-small-only">0.0.0.1</span>
              <span class="desc">URL shortener currently in internal testing</span>
            </div>
          </div>
        </a>

        <div class="col s6 m4 l2">
          <div class="projectarray projectarray-prjRomeo z-depth-4">
            <p class="title">Project Romeo</p>
            <span class="version right hide-on-small-only">SECRET</span>
            <span class="desc">Internal project that will be released when ready</span>
          </div>
        </div>

        <div class="col s6 m4 l2">
          <div class="projectarray projectarray-vos z-depth-4">
            <p class="title">vOS</p>
            <span class="version right hide-on-small-only">pre-release</span>
            <span class="desc">An unreleased Linux distribution by v0lture Solutions</span>
          </div>
        </div>

      </div>

    <!-- news modal -->
    <div id="fullpost" class="modal modal-fixed-footer grey darken-2">
      <div class="modal-content grey darken-2">
        <div id="fullpost_loader" class="center-align">
          <div class="preloader-wrapper active">
            <div class="spinner-layer spinner-blue-only">
              <div class="circle-clipper left">
                <div class="circle"></div>
              </div><div class="gap-patch">
                <div class="circle"></div>
              </div><div class="circle-clipper right">
                <div class="circle"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="markdown-wrapper" id="fullpostcontent">

        </div>
      </div>
      <div class="modal-footer grey darken-2">
        <a href="#!" class="modal-action modal-close waves-effect waves-light white-text btn-flat ">Close</a>
      </div>
    </div>

    <!-- news -->
	<p style="color:white;font-size:32px;">News</p>
    <div class="news" style="padding-top:0px;">
      <a name="news"></a>
      <div class="markdown-wrapper" style="padding-top:0px;">
        <?= $n->newsSnippets(); ?>
      </div>
    </div>
  </div>

	<div class="adblock" align="center">
    <?php require "php/ad.php"; ?>
  </div>

  </body>
</html>
