<!DOCTYPE html>
<html>

  <head>
    <!-- SEO -->
    <title>v0lture</title>
    <meta charset="utf-8">
    <meta name="description" content="">

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
  </head>

  <body>

    <!-- status bar -->
    <div class="statusbar">
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

    <!-- project array -->
    <div class="projectarray-wrapper">

      <!-- projects -->
      <div class="row">

        <div class="col s6 m4 l2">
          <div class="projectarray waves-effect waves-light projectarray-v0ltureDB z-depth-4">
            <p class="title">v0ltureDB</p>
            <span class="version right hide-on-small-only">0.0.3</span>
            <span class="desc">A web MySQL database manager</span>
          </div>
        </div>

        <div class="col s6 m4 l2">
          <div class="projectarray waves-effect waves-light projectarray-mymu z-depth-4">
            <p class="title">MyMu</p>
            <span class="version right hide-on-small-only">0.1</span>
            <span class="desc">An app for everything Methodist University</span>
          </div>
        </div>

        <div class="col s6 m4 l2">
          <div class="projectarray waves-effect waves-light projectarray-vos z-depth-4">
            <p class="title">vOS</p>
            <span class="version right hide-on-small-only">0.0</span>
            <span class="desc">The operating system by v0lture</span>
          </div>
        </div>

        <div class="col s6 m4 l2">
          <div class="projectarray waves-effect waves-light projectarray-bugs z-depth-4">
            <p class="title">Bugs</p>
            <span class="version right hide-on-small-only">0.0</span>
            <span class="desc">v0lture's in-house bug tracker</span>
          </div>
        </div>

        <div class="col s6 m4 l2">
          <div class="projectarray waves-effect waves-light projectarray-veddit z-depth-4">
            <p class="title">veddit</p>
            <span class="version right hide-on-small-only">0.0.2</span>
            <span class="desc">Material design facelift for Reddit</span>
          </div>
        </div>

        <div class="col s6 m4 l2">
          <div class="projectarray waves-effect waves-light projectarray-mc z-depth-4">
            <p class="title">vPolice</p>
            <span class="version right hide-on-small-only">0.0.0</span>
            <span class="desc">Minecraft Police plugin</span>
          </div>
        </div>

      </div>

      <!-- down arrow -->
      <a href="#news">
        <div class="projectarray-more hide-on-med-and-down">
          <p>
            More v0lture<br />
            <i class="material-icons circle waves-effect waves-light">arrow_downward</i>
          </p>
        </div>
      </a>
    </div>

    <!-- news -->
    <div class="news">
      <a name="news"></a>

      <h4 class="center-align">News</h4>

      <div class="row">
        <div class="col s6">
          <div class="news-item">
            <span class="title underlineeffect">New v0lture site</span>
            <p class="content">A revamped and up-to-date site which shows our solutions is now live for the public to see!</p>
          </div>
        </div>

        <div class="col s6">
          <div class="news-item">
            <span class="title underlineeffect">New Projects</span>
            <p class="content">A number of solutions have been started and are currently being developed by our amazing team members. Keep checking back here or view the solution pages to view more details.</p>
          </div>
        </div>

      </div>


    </div>

  </body>
</html>
