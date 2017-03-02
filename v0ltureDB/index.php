<?php

  require "../php/project.php";
  // fetch project api

  $p = new project();
  // set project on this $p:
  $p->setProj("v0ltureDB");

?>

<!DOCTYPE html>
<html>

  <head>
    <!-- SEO -->
    <title>v0lture Solutions: v0ltureDB</title>
    <meta charset="utf-8">
    <meta name="description" content="v0ltureDB is a web based MySQL database manager">
    <meta name="author" content="randomdeathbymusic">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">

    <!-- resources -->
    <link rel="stylesheet" href="../css/materialize.min.css">
    <link rel="stylesheet" href="../css/main.css">

    <!-- scripts -->
    <script src="../js/jquery-2.2.4.min.js"></script>
    <script src="../js/materialize.min.js"></script>
    <script src="../js/main.js"></script>

    <?php include "../php/analytics.php"; ?>
  </head>

  <body>

    <!-- status bar -->
    <div class="statusbar">
      <div class="left">
        <a href="https://v0lture.com" class="white-text">v0lture Solutions</a>
      </div>
      <div class="right">
        <a href="../health.php" class="green-text"><span class='white-text'>Server Status:</span> Healthy</a>
        <a href="../support.php">Support</a>
        <a href="https://client.v0lture.com">Client</a>
      </div>
    </div>

    <!-- nav -->
    <div class="navbar-fixed">
      <nav class="projectarray-<?= $p->fancy; ?>">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo"><?= $p->fancy; ?></a>
          <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>

          <!-- mobile nav -->
          <ul class="side-nav" id="mobile">
            <li class="waves-effect waves-light"><a href="https://bugs.v0lture.com/?project=<?= $p->fancy; ?>">Issues</a></li>
            <li class="waves-effect waves-light"><a href="#changelogs">Changelogs</a></li>
            <li class="waves-effect waves-light"><a href="#download">Download</a></li>
          </ul>

          <!-- normal nav -->
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li class="waves-effect waves-light"><a href="https://bugs.v0lture.com/?project=<?= $p->fancy; ?>">Issues</a></li>
            <li class="waves-effect waves-light"><a href="#changelogs">Changelogs</a></li>
            <li class="waves-effect waves-light"><a href="#download">Download</a></li>
          </ul>
        </div>
      </nav>
    </div>

    <!-- so we can isolate MD styling from the rest of the app -->
    <div class="markdown-wrapper <?= $p->stale; ?>">
      <h2>About</h2>
      <?= $p->about(); ?>
      <a name="download"></a>
      <h2>Download</h2>
      <?= $p->dl(); ?>
    </div>
    <div class="adblock">
      <?php require "../php/ad.php"; ?>
    </div>
    <div class="markdown-wrapper <?= $p->stale; ?>">
      <a name="changelogs"></a>
      <h2>Changelogs</h2>
      <?= $p->changelogs(); ?>
    </div>

  </body>
</html>
