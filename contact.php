<!DOCTYPE html>
<html>

    <head>
        <?php 
            $head = Array(
                "title" => "Contact v0lture Solutions, LLC",
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

            <div class="right hide-on-med-and-up">
                <a onclick="menu('open');" class="btn-flat waves-effect waves-light accent-text">Menu</a>
            </div>

            <div class="right hide-on-small-only">
                <a href="index.php" class="btn-flat waves-effect waves-light accent-text">Home</a>
                <a href="solutions.php" class="btn-flat waves-effect waves-light accent-text">Solutions</a>
                <a href="business.php" class="btn-flat waves-effect waves-light accent-text">For Business</a>
                <a href="contact.php" class="btn waves-effect waves-light accent white-text">Contact Us</a>
                <a href="https://client.v0lture.com" class="btn-flat waves-effect waves-light accent-text">Client Area</a>
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
            <div class="contactsection center-align">
                <h4 class="thin">Let's get in touch</h4>
                <p>Want v0lture to custom build a solution for your business's problem, let us know and we can get started.</p>
                <a class="btn waves-effect waves-light vpurple white-text" href="https://medium.com/v0lture-solutions-llc">Read our blog</a>
                <a class="btn waves-effect waves-light vpurple white-text" href="mailto:contact@v0lture.com">Email us</a>
                <a class="btn waves-effect waves-light vpurple white-text" href="contact/v0ltureContact.asc">Get our PGP Key</a>
            </div>
        </div>

        <?php require_once "layout/intercom.php"; ?>

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

    </body>

</html>