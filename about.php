<!DOCTYPE HTML>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clickit Social | Main Page</title>
    <meta name="description" content="This is my best website ever!">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Bitter|Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://clickitsocial.com/wp-content/themes/clickitsocial-main/styles/style.css">
    <link rel="stylesheet" href="https://clickitsocial.com/wp-content/themes/clickitsocial-main/styles/normalize.css">
</head>

<body>
    <header class="landing-page-wrapper">
        <!--Nav Bar-->
        <div class="wrapper">
            <nav class="navigation">
                <div class="container-left" onclick="myFunction(this); toggleStickyHam();">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                <div class="site-icon">
                    <a href="https://clickitsocial.com/">
                        <img src="https://clickitsocial.com/wp-content/themes/clickitsocial-main/images/Logo.png">
                    </a>
                </div>
                <ul id="ul">
                    <li>
                        <i class="navigation-icon fas fa-home"></i>
                        <a href="https://clickitsocial.com">Home</a>
                    </li>
                    <!--<li>
                                <i class="navigation-icon far fa-hand-point-up"></i>
                                <a href="https://clickitsocial.com/about-us">About Us</a>
                            </li>-->
                    <li>
                        <i class="fas fa-laptop"></i>
                        <a href="https://clickitsocial.com/wp-content/themes/clickitsocial-main/services.php">Services</a>
                    </li>
                    <!--<li>
                                <i class="navigation-icon fas fa-mobile-alt"></i>
                                <a href="/contact.html">Contact</a>
                            </li>-->
                </ul>
                <h2 class="navigation-phone">(702) CLICKIT</h2>
            </nav>
        </div>

        <!--Landing Area-->
        <div>
            <video autoplay muted loop id="video">
                <source src="https://clickitsocial.com/wp-content/themes/clickitsocial-main/videos/clickit-intro.mp4" type="video/mp4">
            </video>
            <div class="landing-page-text-container">
                <h1>Your Digital Assets Service Provider</h1>
                <h3>Let us help you develop a digital asset portfolio that get your online presence...amplified.</h3>
            </div>
        </div>
    </header>
    <div class="page-title">
        <h1>About Us</h1>
        <p>Our goal at ClickIt Social is to provide an effective Web-based service portfolio that boosts your businesses online
            relevance & exposure regardless of the size of your organization. In fact, we keep it personal as each client
            is assigned to one of our Certified Consultants with whom the responsibility rests to assess, identify, and implement
            an action plan custom fit to each business model. “Completely Satisfied” is a grade that only comes from the
            customized design solutions we tailor specifically to the needs of our businesses. The result of this approach?
            The observation of customers and dollars in the door. The bottom line truth is that without a positive ROI, marketing
            & social media management budgets simply get cut or canceled. Each of our team members has a niche skill set
            with a results-oriented approach to what they do. Focused on your business success, you can rest assured that
            the team at ClickIt Social is a group of people you can rely on.</p>
    </div>
    <footer>
        <!-- Contact Us -->
        <div class="contact-container">
            <div class="contact-us-container">
                <div class="contact-us-box">
                    <h1>Contact Us</h1>
                    <div class="contact-info">
                        <p>
                            <i class="footer-icon fas fa-location-arrow"></i> 5375, Unit A, Cameron St, Las Vegas, NV 89118</p>
                        <p>
                            <i class="footer-icon fas fa-phone"></i> (702) 254-2548</p>
                        <p>
                            <i class="footer-icon fas fa-envelope"></i> Email here</p>
                    </div>
                    <div class="social-media-icons">
                        <a href="https://www.facebook.com/ClickItSocial">
                            <div class="media-box">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                        </a>
                        <a href="https://www.instagram.com/clickit_social/">
                            <div class="media-box">
                                <i class="fab fa-instagram"></i>
                            </div>
                        </a>
                        <a href="https://twitter.com/clickit_social">
                            <div class="media-box">
                                <i class="fab fa-twitter"></i>
                            </div>
                        </a>
                        <a href="https://www.pinterest.com/clickitsocial/">
                            <div class="media-box">
                                <i class="fab fa-pinterest-p"></i>
                            </div>
                        </a>
                        <a href="https://plus.google.com/101629708857323054425">
                            <div class="media-box">
                                <i class="fab fa-google-plus-g"></i>
                            </div>
                        </a>
                        <a href="https://www.linkedin.com/company/clickit-social/">
                            <div class="media-box">
                                <i class="fab fa-linkedin-in"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="form-container">
                <form method="post" id="homepage-form" action="https://clickitsocial.com/wp-content/themes/clickitsocial-main/form-to-email.php">
                    <label for="name">Hi, my name is</label>
                    <input type="text" name="name" placeholder="name">
                    <br>
                    <label for="company">
                        with</label>
                    <br>
                    <input type="text" name="company" placeholder="company">
                    <br>
                    <label for="phone">You can reach me at</label>
                    <input type="text" name="phone" placeholder="phone">
                    <br>
                    <label for="email"> or
                        <br>
                    </label>
                    <input type="text" name="email" placeholder="email">
                    <br>
                    <label for="subject">I am interested in</label>
                    <input type="text" name="subject" placeholder="subject">
                    <br>
                    <textarea name="message" rows="1" cols="40" placeholder="message"></textarea>
                    <br>
                    <button type="submit" name="submit" value="submit">Send</button>
                </form>
            </div>
        </div>

        <div class="footer">
            <ul>
                <li>
                    <a href="">Terms of Use</a>
                </li>
                <li>
                    <a href="">Privacy Policy</a>
                </li>
                <li>
                    <a href="">Contact Us</a>
                </li>
                <li>
                    <a href="">Careers</a>
                </li>
            </ul>
            <ul id="copyright">
                <li>&copy; 2018 Clickit Social</li>
            </ul>
        </div>
    </footer>
    <script src="https://clickitsocial.com/wp-content/themes/clickitsocial-main/scripts/script.js"></script>
</body>

</html>