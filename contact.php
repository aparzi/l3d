<!DOCTYPE html>
<html lang="en">
<?php include 'partials/head.html' ?>
<body>
<!--loader-->
<div id="preloader">
    <div class="sk-circle">
        <div class="sk-circle1 sk-child"></div>
        <div class="sk-circle2 sk-child"></div>
        <div class="sk-circle3 sk-child"></div>
        <div class="sk-circle4 sk-child"></div>
        <div class="sk-circle5 sk-child"></div>
        <div class="sk-circle6 sk-child"></div>
        <div class="sk-circle7 sk-child"></div>
        <div class="sk-circle8 sk-child"></div>
        <div class="sk-circle9 sk-child"></div>
        <div class="sk-circle10 sk-child"></div>
        <div class="sk-circle11 sk-child"></div>
        <div class="sk-circle12 sk-child"></div>
    </div>
</div>

<!--loader-->
<!-- HEADER -->
<!--Start header area-->
<header class="header__block">
    <div class="top-part__block ptb-15">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <p>Welcome to our corporate buisness</p>
                </div>
                <div class="col-sm-5">
                    <div class="social-link__block text-right">
                        <a href="contact.html#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="contact.html#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="contact.html#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="contact.html#" class="linkedin"><i class="fa fa-linkedin"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="middel-part__block ptb-20">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo">
                        <a href="index1.html">
                            <img src="assets/images/logo.png" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="top-info__block text-right">
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <p> 13005 Greenvile Avenue <span> California, TX 70240</span></p>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>Call Us <span> +56 (0) 012 345 6789</span></p>
                            </li>
                            <li>
                                <i class="fa fa-clock-o"></i>
                                <p>Opening Time <span> Mon -Sat: 7:00 - 17:00</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'partials/navbar.html' ?>
</header>
<!--End mainmenu area-->
<!-- END HEADER -->
<!-- Intro Section -->
<section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
        <div class="row title">
            <h1 data-title="contact"><span>contact</span></h1>
        </div>
    </div>
</section>
<!-- Intro Section -->
<!-- Contact Section -->
<section class="ptb ptb-xs-60">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h2>KEEP IN TOUCH</h2>
                <p class="lead"> Nullam dictum felis eu pede mollis pretium leo eget bibendum sodales augue velit
                    cursus. tellus eget condimentum rhoncus sem quam semper libero. </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 contact pb-60 pt-30">
                <div class="row text-center">
                    <div class="col-sm-4 pb-xs-30"><i class="fa-android icon-circle pos-s"></i><a
                                href="contact.html#" class="mt-15 i-block">+91 123-1234</a></div>
                    <div class="col-sm-4 pb-xs-30"><i class="ion-ios-location icon-circle pos-s"></i>
                        <p class="mt-15"> 123 Main Street, St. NW Ste, <br/>
                            1 Washington, DC,USA. </p>
                    </div>
                    <div class="col-sm-4 pb-xs-30"><i class="ion-ios-email icon-circle pos-s"></i><a
                                href="mailto:Construc@support.com" class="mt-15 i-block">medical@support.com</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Map Section -->
    <div class="map">
        <div id="map"></div>
    </div>
    <!-- Map Section -->
    <div class="container contact-form pt-80 pt-xs-60 mt-up">
        <div class="row">
            <div class="col-sm-12">
                <h4>GET IN TOUCH</h4>
                <p> Nullam dictum felis eu pede mollis pretium. </p>
                <!-- Contact FORM -->
                <form class="contact-form mt-45" id="contact">
                    <!-- IF MAIL SENT SUCCESSFULLY -->
                    <div id="success">
                        <div role="alert" class="alert alert-success"><strong>Thanks</strong> for using our template.
                            Your message has been sent.
                        </div>
                    </div>
                    <!-- END IF MAIL SENT SUCCESSFULLY -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-field">
                                <input class="input-sm form-full" id="name" type="text" name="form-name"
                                       placeholder="Your Name">
                            </div>
                            <div class="form-field">
                                <input class="input-sm form-full" id="email" type="text" name="form-email"
                                       placeholder="Email">
                            </div>
                            <div class="form-field">
                                <input class="input-sm form-full" id="sub" type="text" name="form-subject"
                                       placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-field">
                                <textarea class="form-full" id="message" rows="7" name="form-message"
                                          placeholder="Your Message"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-30">
                            <button class="btn-text" type="button" id="submit" name="button"> Send Message</button>
                        </div>
                    </div>
                </form>
                <!-- END Contact FORM -->
            </div>
        </div>
    </div>
</section>
<!-- Contact Section -->
<!-- FOOTER -->
<footer id="footer">
    <div id="footer-widgets" class="container style-1">
        <div class="row">
            <div class="col-md-4">
                <div class="widget widget_text">
                    <h2 class="widget-title"><span>ABOUT US</span></h2>
                    <div class="textwidget"><a href="index1.html" class="footer-logo"> <img
                                    src="assets/images/footer-logo.png" alt="Awesome Logo"> </a>
                        <p>Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit
                            eget. Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean
                            suscipit ege Aenean suscipit eget mi act fermentum phasellus.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget widget_links">
                    <h2 class="widget-title"><span>COMPANY LINKS</span></h2>
                    <ul class="wprt-links clearfix col2">
                        <li><a href="contact.html#">History</a></li>
                        <li><a href="contact.html#">Services</a></li>
                        <li><a href="contact.html#">Team &amp; Awards</a></li>
                        <li><a href="contact.html#">Delivery Methods</a></li>
                        <li><a href="contact.html#">Community</a></li>
                        <li><a href="contact.html#">Safety</a></li>
                        <li><a href="contact.html#">News &amp; Events</a></li>
                        <li><a href="contact.html#">Sustainability</a></li>
                        <li><a href="contact.html#">FAQ</a></li>
                        <li><a href="contact.html#">Portfolio</a></li>
                        <li><a href="contact.html#">Contact Us</a></li>
                        <li><a href="contact.html#">Shop</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget widget_information">
                    <h2 class="widget-title"><span>CONTACT INFO</span></h2>
                    <ul>
                        <li class="address clearfix"><span class="hl">Address:</span> <span class="text">123 Main Street, St. NW Ste, 1 Washington, DC,USA.</span>
                        </li>
                        <li class="phone clearfix"><span class="hl">Phone:</span> <span class="text">+56 (0) 012 345 6789</span>
                        </li>
                        <li class="email clearfix"><span class="hl">E-mail:</span> <span class="text">business@support.com</span>
                        </li>
                    </ul>
                </div>
                <div class="widget widget_socials">
                    <div class="socials"><a target="_blank" href="contact.html#"><i class="fa fa-twitter"></i></a> <a
                                target="_blank" href="contact.html#"><i class="fa fa-facebook"></i></a> <a
                                target="_blank" href="contact.html#"><i class="fa fa-google-plus"></i></a> <a
                                target="_blank" href="contact.html#"><i class="fa fa-pinterest"></i></a> <a
                                target="_blank" href="contact.html#"><i class="fa fa-dribbble"></i></a></div>
                </div>
            </div>
        </div>
    </div>
    <div id="bottom" class="clearfix style-1">
        <div id="bottom-bar-inner" class="wprt-container">
            <div class="bottom-bar-inner-wrap">
                <div class="bottom-bar-content">
                    <div id="copyright">Construction TEMPLATE © DESIGN BY Construction.</div>
                    <!-- /#copyright -->
                </div>
                <!-- /.bottom-bar-content -->
                <div class="bottom-bar-menu">
                    <ul class="bottom-nav">
                        <li><a href="contact.html#/">HISTORY</a></li>
                        <li><a href="contact.html#/">FAQ</a></li>
                        <li><a href="contact.html#/">EVENTS</a></li>
                    </ul>
                </div>
                <!-- /.bottom-bar-menu -->
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->
</div>
<!-- Site Wraper End -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<!-- Easing Effect Js -->
<script src="assets/js/plugin/jquery.easing.js" type="text/javascript"></script>
<!-- bootstrap Js -->
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<!-- carousel Js -->
<script src="assets/js/plugin/owl.carousel.js" type="text/javascript"></script>
<!-- imagesloaded Js -->
<script src="assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
<!-- masonry,isotope Effect Js -->
<script src="assets/js/isotope.pkgd.min.js" type="text/javascript"></script>
<script src="assets/js/masonry.pkgd.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.appear.js" type="text/javascript"></script>
<!-- parallax Js -->
<script src="assets/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyCZBaoSnwTf8ZvIndQqwOdMVutkMdlEM4Q&callback=initMap"></script>
<!-- Mail Function Js -->
<script src="assets/js/mail.js" type="text/javascript"></script>
<!-- custom Js -->
<script src="assets/js/custom.js" type="text/javascript"></script>
<!-- google maps -->
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZBaoSnwTf8ZvIndQqwOdMVutkMdlEM4Q&callback=initMap"-->
<!--        type="text/javascript"></script>-->
</body>
</html>