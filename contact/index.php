<?php

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/config.php';

session_start();

if (!empty($_SESSION['_contact_form_error'])) {
    $error = $_SESSION['_contact_form_error'];
    unset($_SESSION['_contact_form_error']);
}

if (!empty($_SESSION['_contact_form_success'])) {
    $success = true;
    unset($_SESSION['_contact_form_success']);
}

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

    <title>Adventure Website Design</title>
    <link rel="stylesheet" href="../style.css">
    <script src="https://use.fontawesome.com/b9f0ac4ecc.js"></script>

    <!-- reCAPTCHA Javascript -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
        <section class="sub-header">
            <nav>
                <a href="../index.html"><img src="../images/Adventure-logo.png" alt="logo"></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="../index.html">HOME</a></li>
                        <li><a href="../about.html">ABOUT</a></li>
                        <li><a href="../programs.html">PROGRAMS</a></li>
                        <li><a href="../blog.html">BLOG</a></li>
                        <li><a href="index.php">CONTACT</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>

            <h1>Contact Us</h1>
        </section>

        <!-- Contact us -->
        <section class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.0447989310665!2d55.39648031501096!3d25.269078383862777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5dd6068c4a49%3A0xdf914a889e348c17!2sAl%20Qusais%20Pond%20Park!5e0!3m2!1sen!2sae!4v1644397151619!5m2!1sen!2sae" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>

        <section class="contact-us">
            <div class="row">
                <div class="contact-col">
                    <div>
                        <i class="fa fa-home"></i>
                        <span>
                            <h5>169 Baghdad Street - Al Qusais 3</h5>
                            <p>Dubai, United Arab Emirates</p>
                        </span>
                    </div>
                    <div>
                        <i class="fa fa-phone"></i>
                        <span>
                            <h5>+971 50 123 4567</h5>
                            <p>Monday to Saturday, 9am to 5pm</p>
                        </span>
                    </div>
                    <div>
                        <i class="fa fa-envelope-o"></i>
                        <span>
                            <h5>contact@test.com</h5>
                            <p>Email us for more information</p>
                        </span>
                    </div>
                </div>
                <div class="contact-col">
                <?php
                if (!empty($success)) {
                    ?>
                    <div class="alert alert-success">Your message was sent successfully!</div>
                    <?php
                }
                ?>

                <?php
                if (!empty($error)) {
                    ?>
                    <div class="alert alert-danger"><?= $error ?></div>
                    <?php
                }
                ?>
                    <form method="post" action="submit.php">
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="text" name="subject" placeholder="Enter Subject" required>
                        <textarea rows="8" name="message" placeholder="Enter your Message" required></textarea>
                        <br> <br>
                        <div class="g-recaptcha" data-sitekey="<?= CONTACTFORM_RECAPTCHA_SITE_KEY ?>"></div>
                        <button type="submit" class="hero-btn red-btn">SUBMIT</button>
                    </form>

                </div>
            </div>
        </section>

        <!-- Footer -->
        <section class="footer">
            <h4>About Us</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quibusdam vitae et enim, nostrum, quae ut impedit omnis harum eveniet <br> corrupti rerum aspernatur quaerat laborum est deserunt magnam? Consequatur, animi!</p>
            <div class="icons">
                <a href="https://www.facebook.com"><i class="fa fa-facebook""></i></a>
                <a href="https://twitter.com"><i class="fa fa-twitter""></i></a>
                <a href="https://www.instagram.com"><i class="fa fa-instagram""></i></a>
                <a href="https://www.linkedin.com/in/shivaanee-eswaran/"><i class="fa fa-linkedin""></i></a>
            </div>
            <p>Made By <a href="https://www.linkedin.com/in/shivaanee-eswaran/">Nisha</a></p>
        </section>

        <!-- JavaScript for Toggle Menu -->
        <script>
            var navLinks = document.getElementById("navLinks");
            function showMenu(){
                navLinks.style.right = "0";
            }
            function hideMenu(){
                navLinks.style.right = "-200px";
            }
        </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>-->
    <!--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>-->
    <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>-->
    </body>
</html>
