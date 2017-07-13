<!DOCTYPE html>
<html>

    <head>
        <?php 
            $head = Array(
                "title" => "v0lture Solutions, LLC",
                "desc" => "v0lture Solutions, LLC is a company that builds the solutions needed for your home, business, or enterprise."
            );
            require_once "layout/head.php"; 
        ?>
    </head>

    <body>

        <div class="vnavbar">
            <span>
                <div class="blacksquarelogo"></div>
                <!--<img src="img/logo.png" alt="v0lture Logo"></img>-->
                <!--<h4>v0lture</h4>-->
            </span>

            <div class="right hide-on-med-and-up">
                <a onclick="menu('open');" class="btn-flat waves-effect waves-light accent-text">Menu</a>
            </div>

            <div class="right hide-on-small-only">
                <a href="index.php" class="btn-flat waves-effect waves-light white-text">Home</a>
                <a href="solutions.php" class="btn-flat waves-effect waves-light white-text">Solutions</a>
                <a href="business.php" class="btn-flat waves-effect waves-light white-text">For Business</a>
                <a href="contact.php" class="btn-flat waves-effect waves-light white-text">Contact Us</a>
                <a href="https://client.v0lture.com" class="btn-flat waves-effect waves-light white-text">Client Area</a>
            </div>
        </div>

        <div id="menuui" style="display:none;">
            <div class="contactsection center-align">
                <h4 class="thin">Menu</h4>
                <p>Navigate various sections of v0lture.</p>
                <a class="btn waves-effect waves-light vpurple white-text" href="index.php">Home</a><br /><br />
                <a class="btn waves-effect waves-light vpurple white-text" href="solutions.php">Our Solutions</a><br /><br />
                <a class="btn waves-effect waves-light vpurple white-text" href="business.php">For Business</a><br /><br />
                <a class="btn waves-effect waves-light vpurple white-text" href="contact.php">Contact Us</a><br /><br />
                <a class="btn waves-effect waves-light vpurple white-text" href="https://client.v0lture.com">Client Area</a><br /><br />
                <a class="btn waves-effect waves-light vpurple white-text" onclick="menu('close');">Close Menu</a><br /><br />
            </div>
        </div>

        <div id="appui">
            <div class="landing center-align">
                <div class="box">
                    <div class="blacksquarelogo"></div>
                    <h4 class="thick">Welcome to a better step forward</h4>
                    <p>lorem ipsum lorem ipsum lorem ipsumlorem ipsum lorem ipsum lorem ipsumlorem ipsum lorem ipsum lorem ipsumlorem ipsum lorem ipsum lorem ipsumlorem ipsum lorem ipsum lorem</p>
                    <h5 class="hide-on-small-only">Let's help you</h5>
                    <a href="business.php" class="btn waves-effect waves-light black-text" style="background: #fafafa;">Our Solutions</a>
                </div>

                <div class="box-shadow"></div>
            </div>

            <div class="landingsection">
                <h4 class="center-align thin">Our flagship solutions</h4>
            </div>

            <div class="row hide-on-small-only">

                <div class="col s6">
                    <div class="solution" style="background: url('img/v0.lt.png');"></div>
                </div>

                <div class="col s6">
                    <div style="margin-top: 224px;">
                        <h4 class="thin">v0.lt <small><small>v0.1.0.0</small></small></h4>
                        <p>A super simple URL shortener. No tricks or gimmicks.</p>
                        <a href="https://github.com/v0lture/v0.lt" class="btn-flat waves-effect waves-light accent-text">View Source Code</a>
                        <a href="https://v0.lt" class="btn accent white-text waves-effect waves-light">Open</a>
                    </div>
                </div>

            </div>

            <div class="row hide-on-small-only">

                <div class="col s6">
                    <div style="margin-top: 224px;" class="right">
                        <h4 class="thin">v0ltureDB <small><small>v0.0.3.3</small></small></h4>
                        <p>A web-based management tool for MySQL databases.</p>
                        <a href="https://github.com/v0lture/v0ltureDB" class="btn-flat waves-effect waves-light accent-text">View Source Code</a>
                    </div>
                </div>

                <div class="col s6">
                    <div class="solution" style="background: url('img/v0ltureDB.png');"></div>
                </div>

            </div>

            <div class="row">

                <div class="col s6 m3 hide-on-med-and-up" style="padding: 30px;">
                    <h5 class="thin">v0ltureDB</h5>
                    <p>A web-based management tool for MySQL databases.</p>
                    <a href="https://github.com/v0lture/v0ltureDB" class="btn-flat waves-effect waves-light accent-text">View Source Code</a>
                </div>

                <div class="col s6 m3 hide-on-med-and-up" style="padding: 30px;">
                    <h5 class="thin">v0.lt</h5>
                    <p>A super simple URL shortener. No tricks or gimmicks.</p>
                    <a href="https://v0.lt" class="btn waves-effect waves-light accent white-text">Open</a>
                </div>
                
                <div class="col s6 m3" style="padding: 30px;">
                    <h5 class="thin">My MU</h5>
                    <p>An unofficial app to support students at Methodist University</p>
                    <a href="https://github.com/v0lture/MU_Mobile_Android_App" class="btn-flat waves-effect waves-light accent-text hide-on-small-only">View Source Code</a>
                    <a href="https://play.google.com/store/apps/details?id=com.v0lture.deAngelo.mymu" class="btn waves-effect waves-light accent white-text">Play Store</a>
                </div>

                <div class="col s6 m3" style="padding: 30px;">
                    <h5 class="thin">v0lture Solutions App</h5>
                    <p>The app for everything v0lture Solutions. Announcements, our team, and more.</p>
                    <a href="https://github.com/v0lture/v0lture_Solutions_App" class="btn-flat waves-effect waves-light accent-text hide-on-small-only">View Source Code</a>
                    <a href="https://play.google.com/store/apps/details?id=com.apps.v0lture.v0lture_solutions" class="btn waves-effect waves-light accent white-text">Play Store</a>
                </div>

                <div class="col s6 m3" style="padding: 30px;">
                    <h5 class="thin">vucket</h5>
                    <p>Open source API used within v0lture that powers business client areas.</p>
                    <a href="https://github.com/v0lture/vucket" class="btn-flat waves-effect waves-light accent-text">View Source Code</a>
                </div>

                <div class="col s6 m3" style="padding: 30px;">
                    <h5 class="thin">Project Junebug</h5>
                    <p>A JS and Firebase powered bug tracker for v0lture Solutions' use.</p>
                    <a href="https://github.com/v0lture/project-junebug" class="btn-flat waves-effect waves-light accent-text hide-on-small-only">View Source Code</a>
                    <a href="https://bugs.v0lture.com" class="btn waves-effect waves-light accent white-text">Open</a>
                </div>

                <div class="center-align">
                    <a href="solutions.php" class="btn-flat waves-effect waves-lght accent-text">View all of our solutions</a>
                </div>

            </div>

            <div class="landingsection">
                <h4 class="center-align thin">v0lture for your Business</h4>
            </div>

            <div class="row">
                
                <div class="col s12 m4" style="padding: 30px;">
                    <h5 class="thin">Marketing</h5>
                    <p>Our marketing team can help you manage advertising campaigns on various services and your search engine ranking for any websites built with us.</p>
                    <a href="business.php#marketing" class="btn waves-effect waves-light accent white-text">View marketing details</a>
                </div>

                <div class="col s12 m4" style="padding: 30px;">
                    <h5 class="thin">Pay only for what you need</h5>
                    <p>Our modular packages and scaled pricing helps you save money by not wasting your budget on addons or packages you don't need.</p>
                    <a href="business.php#pricing" class="btn waves-effect waves-light accent white-text">View pricing details</a>
                </div>

                <div class="col s12 m4" style="padding: 30px;">
                    <h5 class="thin">Premium custom-made apps, websites, and software</h5>
                    <p>v0lture can create premium, while being cost effective, applications for your mobile users, websites for your brand and software for your staff.</p>
                    <a href="business.php#pricing" class="btn waves-effect waves-light accent white-text">View packages</a>
                </div>

            </div>

            <div class="contactsection center-align">
                <h4 class="thin">Let's get in touch</h4>
                <p>Want to get in touch about using v0lture for your business? Contact us in the various forms below.</p>
                <a class="btn waves-effect waves-light vpurple white-text" href="https://medium.com/v0lture-solutions-llc">Read our blog</a>
                <a class="btn waves-effect waves-light vpurple white-text" href="mailto:contact@v0lture.com">Email us</a>
                <a class="btn waves-effect waves-light vpurple white-text" href="contact/v0ltureContact.asc">Get our PGP Key</a>
            </div>
        </div>

        <script>
            function menu(state) {
                if(state === "open"){
                    $("#appui").slideUp();
                    $("#menuui").slideDown();
                } else {
                    $("#appui").slideDown();
                    $("#menuui").slideUp();
                }
            }
        </script>

        <?php require_once "layout/intercom.php"; ?>

    </body>

</html>