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
                <img src="img/logo.png" alt="v0lture Logo"></img>
                <h4>v0lture</h4>
            </span>

            <div class="right hide-on-small-only">
                <a href="index.php" class="btn-flat waves-effect waves-light accent-text">Home</a>
                <a href="solutions.php" class="btn waves-effect waves-light accent white-text">Solutions</a>
                <a href="business.php" class="btn-flat waves-effect waves-light accent-text">For Business</a>
                <a href="contact.php" class="btn-flat waves-effect waves-light accent-text">Contact Us</a>
                <a href="https://client.v0lture.com" class="btn-flat waves-effect waves-light accent-text">Client Area</a>
            </div>
        </div>

        <div style="height: 72px"></div>

        <div class="landingsection">
            <h4 class="center-align thin">Our flagslip solutions</h4>
        </div>

        <div class="row">

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

        <div class="row">

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
            
            <div class="col s6 m3" style="padding: 30px;">
                <h5 class="thin">My MU</h5>
                <p>An unofficial app to support students at Methodist University</p>
                <a href="https://github.com/v0lture/MU_Mobile_Android_App" class="btn-flat waves-effect waves-light accent-text">View Source Code</a>
                <a href="https://play.google.com/store/apps/details?id=com.v0lture.deAngelo.mymu" class="btn waves-effect waves-light accent white-text">Play Store</a>
            </div>

            <div class="col s6 m3" style="padding: 30px;">
                <h5 class="thin">v0lture Solutions App</h5>
                <p>The app for everything v0lture Solutions. Announcements, our team, and more.</p>
                <a href="https://github.com/v0lture/v0lture_Solutions_App" class="btn-flat waves-effect waves-light accent-text">View Source Code</a>
                <a href="https://play.google.com/store/apps/details?id=com.apps.v0lture.v0lture_solutions" class="btn waves-effect waves-light accent white-text">Play Store</a>
            </div>

            <div class="col s6 m3" style="padding: 30px;">
                <h5 class="thin">vucket</h5>
                <p>Open source API used within v0lture that powers business client areas.</p>
                <a href="https://github.com/v0lture/vucket" class="btn-flat waves-effect waves-light accent-text">View Source Code</a>
            </div>

            <div class="col s6 m3" style="padding: 30px;">
                <h5 class="thin">Project Junebug</h5>
                <p>A JS and Firebase powered bug tracker for v0lture Solutions use.</p>
                <a href="https://github.com/v0lture/project-junebug" class="btn-flat waves-effect waves-light accent-text">View Source Code</a>
                <a href="https://bugs.v0lture.com" class="btn waves-effect waves-light accent white-text">Open</a>
            </div>

            <div class="col s6 m3" style="padding: 30px;">
                <h5 class="thin">Project Sharon</h5>
                <p>An application for remotely managing computer applications, information, and data.</p>
                <a href="https://github.com/v0lture/project-sharon" class="btn-flat waves-effect waves-light accent-text">View Source Code</a>
            </div>

            <div class="col s6 m3" style="padding: 30px;">
                <h5 class="thin">Project Zinc</h5>
                <p><b>Unreleased</b> &mdash; An application for monitoring your workflow and integrating your apps and tools.</p>
                <a href="https://github.com/v0lture/project-zinc" class="btn-flat waves-effect waves-light accent-text">View Source Code</a>
            </div>

        </div>

        <div class="contactsection center-align">
            <h4 class="thin">Let's get in touch</h4>
            <p>Want v0lture to custom build a solution for your business's problem, let us know and we can get started.</p>
            <a class="btn waves-effect waves-light vpurple white-text" href="https://medium.com/v0lture-solutions-llc">Read our blog</a>
            <a class="btn waves-effect waves-light vpurple white-text" href="mailto:contact@v0lture.com">Email us</a>
            <a class="btn waves-effect waves-light vpurple white-text" href="contact/v0ltureContact.asc">Get our PGP Key</a>
        </div>

    </body>

</html>