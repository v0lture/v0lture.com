<!DOCTYPE html>
<html>

    <head>
        <?php 
            $head = Array(
                "title" => "v0lture for your Business",
                "desc" => "Help empower your business with v0lture."
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
                <a href="business.php" class="btn waves-effect waves-light accent white-text">For Business</a>
                <a href="contact.php" class="btn-flat waves-effect waves-light accent-text">Contact Us</a>
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
            <div class="landing center-align">
                <h4>Help your business soar with v0lture.</h4>
                <p>Our solutions can help empower your business soar further than ever before.</p>
                
                <div class="arrow center-align">
                    <p>Scroll down to learn more</p>
                    <i class="material-icons">arrow_downward</i>
                </div>
            </div>

            <a id="marketing"></a>
            <div class="landingsection">
                <h4 class="center-align thin">Marketing</h4>
                <p class="center-align">Our marketing team can help improve your business visibility with advertising and your search engine ranking with our premium websites. <br />View our packages available below.</p>
            </div>

            <div class="container">

                <table>

                    <thead>
                        <tr>
                            <th></th>
                            <th>Bronze Package</th>
                            <th>Silver Package</th>
                            <th>Gold Package</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Targeted audiences</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Advertising platforms</td>
                            <td>Facebook only</td>
                            <td>Any of your choosing</td>
                            <td>All</td>
                        </tr>
                        <tr>
                            <td>Consistent communication from v0lture and you</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>We help manage your social media pages</td>
                            <td>No</td>
                            <td>Yes, if desired</td>
                            <td>Yes, if desired</td>
                        </tr>
                        <tr>
                            <td>Free custom built website</td>
                            <td>No</td>
                            <td>Yes, if desired</td>
                            <td>Yes, if desired</td>
                        </tr>
                        <tr>
                            <td>Keep your website towards the top of search results</td>
                            <td>No</td>
                            <td>Yes, if you have a website with us</td>
                            <td>Yes, if you have a website with us</td>
                        </tr>
                        <tr>
                            <td>Free custom built iOS and Android apps</td>
                            <td>No</td>
                            <td>No</td>
                            <td>Yes, if desired</td>
                        </tr>
                        <tr>
                            <td>Free business email</td>
                            <td>No</td>
                            <td>No</td>
                            <td>Yes, if desired</td>
                        </tr>
                        <tr>
                            <td>Monthly cost</td>
                            <td>$750</td>
                            <td>$1,050</td>
                            <td>$2,000</td>
                        </tr>
                    </tbody>    

                </table>

            </div>

            <a id="pricing"></a>
            <div class="landingsection">
                <h4 class="center-align thin">Websites</h4>
                <p class="center-align">A professional website is mandatory in modern age of businesses.<br />A professional and functional website can help introduce more customers to your business or allow them to interact with your products.<br />v0lture can even create web-based software for any need.<br />View our pricing below.</p>
            </div>

            <div class="container">

                <table>

                    <thead>
                        <tr>
                            <th>Package</th>
                            <th>Description</th>
                            <th>Pricing</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Server Hosting</td>
                            <td>This server hosts the website we create and gives us access to maintaining and modifying your site.</td>
                            <td>$15</td>
                        </tr>
                        <tr>
                            <td>Pages</td>
                            <td>The pages in your website. For instance, a contact us page or about us page.</td>
                            <td>$5/mo/page</td>
                        </tr>
                        <tr>
                            <td>Pages maintenance</td>
                            <td>Maintaining your pages to keep them up-to-date or fix any issues that come up.</td>
                            <td>$5/hr</td>
                        </tr>
                        <tr>
                            <td>Login system</td>
                            <td>Add a login flow for your website or web app.</td>
                            <td>$30/mo</td>
                        </tr>
                        <tr>
                            <td>User security</td>
                            <td>Add the ability to control which areas and what functions various users can do.</td>
                            <td>+$15/mo &mdash; requires Login system</td>
                        </tr>
                        <tr>
                            <td>Login system with 3rd parties</td>
                            <td>Add 3rd party login along with your normal login system to support more users.</td>
                            <td>+$5/mo &mdash; requires Login system</td>
                        </tr>
                        <tr>
                            <td>Data storage and interaction</td>
                            <td>Store and interact with data, such as sales data or user data.</td>
                            <td>$5/mo</td>
                        </tr>
                        <tr>
                            <td>Extensive data interaction</td>
                            <td>Extensively interact with your data, such as creating a report or deep analysis.</td>
                            <td>+$5/mo &mdash; requires Data storage and interaction</td>
                        </tr>
                        <tr>
                            <td>Data import/export with 3rd parties</td>
                            <td>Import data from 3rd parties and/or export data to 3rd parties.</td>
                            <td>+$2/mo &mdash; requires Data storage and interaction</td>
                        </tr>
                        <tr>
                            <td>General backend needs</td>
                            <td>Implementing a search feature or fetching data from a 3rd party without storing it</td>
                            <td>$10/mo</td>
                        </tr>
                    </tbody>    

                </table>

            </div>

            <div class="landingsection">
                <h4 class="center-align thin">Mobile Apps</h4>
                <p class="center-align">Mobile apps are critical to the market due to the ever-expanding use of mobile phones and instanteous availability.<br />The sooner your clients or customers can get information, the faster you can get leads or sales.<br />View our pricing below.</p>
            </div>

            <div class="container">

                <table>

                    <thead>
                        <tr>
                            <th></th>
                            <th>Bronze Package</th>
                            <th>Silver Package</th>
                            <th>Gold Package</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>App design</td>
                            <td>$50-75 &mdash; varies by needs</td>
                            <td>$50-75 &mdash; varies by needs</td>
                            <td>$50-75 &mdash; varies by needs</td>
                        </tr>
                        <tr>
                            <td>App creation</td>
                            <td>$15/hr</td>
                            <td>$40/hr</td>
                            <td>$80/hr</td>
                        </tr>
                        <tr>
                            <td>App maintenance</td>
                            <td>$15/hr</td>
                            <td>$30/hr</td>
                            <td>$30/hr</td>
                        </tr>
                    </tbody>    

                </table>

            </div>

            <div class="landingsection">
                <h4 class="center-align thin">Desktop Software</h4>
                <p class="center-align">v0lture can build you premium desktop software to use internally in your company.<br />Software ranging from sales management <br />View our pricing below.</p>
            </div>

            <div class="container">

                <table>

                    <thead>
                        <tr>
                            <th></th>
                            <th>Bronze Package</th>
                            <th>Silver Package</th>
                            <th>Gold Package</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Software languages</td>
                            <td>C#, Visual Basic, Python, Java, C++</td>
                            <td>C#, Visual Basic, Python, Java, C++</td>
                            <td>Any language</td>
                        </tr>
                        <tr>
                            <td>Allowed features</td>
                            <td>Database connections, no use of 3rd party libraries, and only database2</td>
                            <td>Authentication, searching in-depth in data, client/software communication, and messaging</td>
                            <td>Ecommerce, data security, multi-server communication, </td>
                        </tr>
                        <tr>
                            <td>Design</td>
                            <td>$50-75/hr</td>
                            <td>$50-75/hr</td>
                            <td>$50-75/hr</td>
                        </tr>
                        <tr>
                            <td>Development</td>
                            <td>$15/hr</td>
                            <td>$40-79/hr</td>
                            <td>$80+/hr</td>
                        </tr>
                        <tr>
                            <td>Maintenance</td>
                            <td>$15/mo</td>
                            <td>$30/mo</td>
                            <td>$30/mo</td>
                        </tr>
                    </tbody>    

                </table>

            </div>

            <div class="contactsection center-align">
                <h4 class="thin">Need help? Want to purchase?</h4>
                <p>If you don't know what package you need for any part of our product line, drop a line at our email and we can help you decide based on your needs.</p>
                <a class="btn waves-effect waves-light vpurple white-text" href="mailto:contact@v0lture.com">Email us your needs</a>
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