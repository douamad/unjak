<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>UNJAK | Union Nationale des Jeunes Actifs de Kédougou</title>

        <!-- responsive meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- master stylesheet -->
        <link rel="stylesheet" href="{{ asset('front/css/style.css') }} ">
        <!-- responsive stylesheet -->
        <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }} ">



    </head>
<body>


@include('front.layouts.top-bar')

@include('front.layouts.header')

@include('front.layouts.main-menu')


{{--@include('front.layouts.breadcumb')--}}

<section class="blog-home sec-padding blog-page">
    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>
</section>





<footer class="footer sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer-widget about-widget">
                    <a href="#">
                        <img src="{{ asset('img/unjak-logo2.jpg') }}" alt="Awesome Image"/>
                    </a>
                    <p>Lorem ipsum dolor sit amet, eu me evert laboramus, iudico </p>
                    <ul class="contact">
                        <li><i class="fa fa-map-marker"></i> <span>60 Grant Ave. Carteret NJ 0708</span></li>
                        <li><i class="fa fa-phone"></i> <span>(880) 1723801729</span></li>
                        <li><i class="fa fa-envelope-o"></i> <span>example@gmail.com</span></li>
                    </ul>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-6">
                <div class="footer-widget quick-links">
                    <h3 class="title">Pages</h3>
                    <ul>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="causes-grid.html">Causes</a></li>
                        <li><a href="events-grid.html">Events</a></li>
                        <li><a href="faq.html">Faq</a></li>
                        <li><a href="blog-style-two.html">Archives</a></li>
                        <li><a href="blog-style-one.html">News</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 latest-post col-sm-6">
                <div class="footer-widget latest-post">
                    <h3 class="title">Latest News</h3>
                    <ul>
                        <li>
                            <span class="border"></span>
                            <div class="content">
                                <a href="blog-details.html">If you need a crown or lorem an implant you will pay it </a>
                                <span>July 2, 2014</span>
                            </div>
                        </li>
                        <li>
                            <span class="border"></span>
                            <div class="content">
                                <a href="blog-details.html">If you need a crown or lorem an implant you will pay it </a>
                                <span>July 2, 2014</span>
                            </div>
                        </li>
                        <li>
                            <span class="border"></span>
                            <div class="content">
                                <a href="blog-details.html">If you need a crown or lorem an implant you will pay it </a>
                                <span>July 2, 2014</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="footer-widget contact-widget">
                    <h3 class="title">Contact Form</h3>
                    <form action="inc/sendemail.php" class="contact-form" id="footer-cf">
                        <input type="text" name="name"  placeholder="Full Name">
                        <input type="text" name="email" placeholder="Email Address" >
                        <textarea name="message" placeholder="Your Message"></textarea>
                        <button type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>


<section class="footer-bottom">
    <div class="container text-center">
        <p>Theme Created By <a href="#">TEMPLATE PATH</a> with love</p>
    </div>
</section>


<!-- main jQuery -->
<script src="{{ asset('front/js/jquery-1.11.1.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<!-- bx slider -->
<script src="{{ asset('front/js/jquery.bxslider.min.js') }}"></script>
<!-- owl carousel -->
<script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
<!-- validate -->
<script src="{{ asset('front/js/validate.js') }}"></script>
<!-- mixit up -->
<script src="{{ asset('front/js/jquery.mixitup.min.js') }}"></script>
<!-- fancybox -->
<script src="{{ asset('front/js/jquery.fancybox.pack.js') }}"></script>
<!-- easing -->
<script src="{{ asset('front/js/jquery.easing.min.js') }}"></script>
<!-- circle progress -->
<script src="{{ asset('front/js/circle-progress.js') }}"></script>
<!-- appear js -->
<script src="{{ asset('front/js/jquery.appear.js') }}"></script>
<!-- count to -->
<script src="{{ asset('front/js/jquery.countTo.js') }}"></script>
<!-- gmap helper -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<!-- gmap main script -->
<script src="{{ asset('front/js/gmap.js') }}"></script>

<!-- isotope script -->
<script src="{{ asset('front/js/isotope.pkgd.min.js') }}"></script>
<!-- jQuery ui js -->
<script src="{{ asset('front/js/jquery-ui-1.11.4/jquery-ui.js') }}"></script>


<!-- thm custom script -->
<script src="{{ asset('front/js/custom.js') }}"></script>



</body>
</html>