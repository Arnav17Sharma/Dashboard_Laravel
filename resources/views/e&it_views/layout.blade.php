<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> @yield('title') </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('eit_assets/images/favicons/apple-touch-icon.png'); }}" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('eit_assets/images/favicons/favicon-32x32.png'); }}" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('eit_assets/images/favicons/favicon-16x16.png'); }}" />
    <link rel="manifest" href="{{ asset('eit_assets/images/favicons/site.webmanifest'); }}" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('eit_assets/vendors/bootstrap/css/bootstrap.min.css'); }}" />
    <link rel="stylesheet" href="{{ asset('eit_assets/vendors/animate/animate.min.css'); }}" />
    <link rel="stylesheet" href="{{ asset('eit_assets/vendors/animate/custom-animate.css'); }}" />
    <link rel="stylesheet" href="{{ asset('eit_assets/vendors/fontawesome/css/all.min.css'); }}" />
    <link rel="stylesheet" href="{{ asset('eit_assets/vendors/jarallax/jarallax.css'); }}" />
    <link rel="stylesheet" href="{{ asset('eit_assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css'); }}" />
    <link rel="stylesheet" href="{{ asset('eit_assets/vendors/nouislider/nouislider.min.css'); }}" />
    <link rel="stylesheet" href="{{ asset('eit_assets/vendors/nouislider/nouislider.pips.css'); }}" />
    <link rel="stylesheet" href="{{ asset('eit_assets/vendors/odometer/odometer.min.css'); }}" />
    <link rel="stylesheet" href="{{ asset('eit_assets/vendors/swiper/swiper.min.css'); }}" />
    <link rel="stylesheet" href="{{ asset('eit_assets/vendors/govity-icons/style.css'); }}">
    <link rel="stylesheet" href="{{ asset('eit_assets/vendors/tiny-slider/tiny-slider.min.css'); }}" />
    <link rel="stylesheet" href="{{ asset('eit_assets/vendors/reey-font/stylesheet.css'); }}" />
    <link rel="stylesheet" href="{{ asset('eit_assets/vendors/owl-carousel/owl.carousel.min.css'); }}" />
    <link rel="stylesheet" href="{{ asset('eit_assets/vendors/owl-carousel/owl.theme.default.min.css'); }}" />
    <link rel="stylesheet" href="{{ asset('eit_assets/vendors/bxslider/jquery.bxslider.css'); }}" />
    <link rel="stylesheet" href="{{ asset('eit_assets/vendors/bootstrap-select/css/bootstrap-select.min.css'); }}" />
    <link rel="stylesheet" href="{{ asset('eit_assets/vendors/vegas/vegas.min.css'); }}" />
    <link rel="stylesheet" href="{{ asset('eit_assets/vendors/jquery-ui/jquery-ui.css'); }}" />
    <link rel="stylesheet" href="{{ asset('eit_assets/vendors/timepicker/timePicker.css'); }}" />
    <link rel="stylesheet" href="{{ asset('eit_assets/vendors/nice-select/nice-select.css'); }}" />
    <link rel="stylesheet" href="{{ asset('eit_assets/css/govity-g.css'); }}" />
    <link rel="stylesheet" href="{{ asset('eit_assets/css/govity-responsive.css'); }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
    .offering-one {
        position: relative;
        display: block;
        padding-top: 100px;
        z-index: 1;
        padding-bottom: 60px;
    }

    .search {
        padding: 6px;
        margin-right: -6px;
    }

    .h-list {
        font-size: .9em;
    }

    .h-list li {
        display: inline-block;
    }

    .h-list li::after {
        content: "|";
        padding: 0 4px;
    }

    .h-list li:last-child::after {
        content: "";
        padding: 0 4px;
    }

    .marquee {
        background-color: #ddd;
        width: 500px;
        margin: 0 auto;
        overflow: hidden;
        white-space: nowrap;
    }

    .marquee span {
        display: inline-block;
        font-size: 20px;
        position: relative;
        left: 100%;
        animation: marquee 8s linear infinite;
    }

    .marquee:hover span {
        animation-play-state: paused;
    }

    .marquee span:nth-child(1) {
        animation-delay: 0s;
    }

    .marquee span:nth-child(2) {
        animation-delay: 0.8s;
    }

    .marquee span:nth-child(3) {
        animation-delay: 1.6s;
    }

    .marquee span:nth-child(4) {
        animation-delay: 2.4s;
    }

    .marquee span:nth-child(5) {
        animation-delay: 3.2s;
    }

    @keyframes marquee {
        0% {
            left: 100%;
        }

        100% {
            left: -100%;
        }
    }
    </style>
</head>

<body class="custom-cursor">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>
    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper" id="wrapper">
        @include('e&it_views.include.header')
        @yield('content')

        <section class="brand-one brand-two">
            <div class="container">
                <div class="brand-one__carousel thm-owl__carousel owl-theme owl-carousel owl-loaded owl-drag"
                    data-owl-options="{
                    &quot;items&quot;: 3,
                    &quot;margin&quot;: 30,
                    &quot;smartSpeed&quot;: 700,
                    &quot;loop&quot;:true,
                    &quot;autoplay&quot;: 6000,
                    &quot;nav&quot;:false,
                    &quot;dots&quot;:false,
                    &quot;navText&quot;: [&quot;<span class=\&quot;fa fa-angle-left\&quot;></span>&quot;,&quot;<span class=\&quot;fa fa-angle-right\&quot;></span>&quot;],
                    &quot;responsive&quot;:{
                        &quot;0&quot;:{
                            &quot;items&quot;:1
                        },
                        &quot;768&quot;:{
                            &quot;items&quot;:3
                        },
                        &quot;992&quot;:{
                            &quot;items&quot;: 5
                        }
                    }
                }">
                    <!--Brand One Single-->

                    <!--Brand One Single-->

                    <!--Brand One Single-->

                    <!--Brand One Single-->

                    <!--Brand One Single-->




                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(-2112px, 0px, 0px); transition: all 0.7s ease 0s; width: 3456px;">
                            <div class="owl-item cloned" style="width: 162px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="{{ asset('eit_assets/images/brand/brand-1-4.jpg'); }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 162px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="{{ asset('eit_assets/images/brand/brand-1-5.jpg'); }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 162px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="{{ asset('eit_assets/images/brand/brand-1-6.jpg'); }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 162px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="{{ asset('eit_assets/images/brand/brand-1-7.jpg'); }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 162px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="{{ asset('eit_assets/images/brand/brand-1-8.jpg'); }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 162px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="{{ asset('eit_assets/images/brand/brand-1-1.png'); }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 162px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="{{ asset('eit_assets/images/brand/brand-1-2.png'); }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 162px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="{{ asset('eit_assets/images/brand/brand-1-3.jpg'); }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 162px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="{{ asset('eit_assets/images/brand/brand-1-4.jpg'); }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 162px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="{{ asset('eit_assets/images/brand/brand-1-5.jpg'); }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 162px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="{{ asset('eit_assets/images/brand/brand-1-6.jpg'); }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 162px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="{{ asset('eit_assets/images/brand/brand-1-7.jpg'); }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 162px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="{{ asset('eit_assets/images/brand/brand-1-8.jpg'); }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned active" style="width: 162px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="{{ asset('eit_assets/images/brand/brand-1-1.png'); }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned active" style="width: 162px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="{{ asset('eit_assets/images/brand/brand-1-2.png'); }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned active" style="width: 162px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="{{ asset('eit_assets/images/brand/brand-1-3.jpg'); }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 162px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="{{ asset('eit_assets/images/brand/brand-1-4.jpg'); }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 162px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="{{ asset('eit_assets/images/brand/brand-1-5.jpg'); }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                                class="fa fa-angle-left"></span></button><button type="button" role="presentation"
                            class="owl-next"><span class="fa fa-angle-right"></span></button></div>
                    <div class="owl-dots disabled"></div>
                </div>
                <!-- If we need navigation buttons -->
            </div>
        </section>

        @include('e&it_views.include.footer')
    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="{{ asset('eit_assets/images/cg-logo.svg'); }}"
                        width="94" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@govity.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top" style="display: inline;"><i
            class="fa fa-arrow-right"></i></a>
    <!-- /.mobile-nav__wrapper -->
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-arrow-right"></i></a>
    <script>
    let cont = document.getElementById("wrapper");
    let nav = document.getElementById("navbar");
    function goHome(size) {
        // Set value of the parameter as fontSize
        cont.style.fontSize = size;
        nav.style.fontSize = size;
    }
    </script>
    <script src="{{ asset('eit_assets/vendors/jquery/jquery-3.6.0.min.js'); }}"></script>
    <script src="{{ asset('eit_assets/vendors/bootstrap/js/bootstrap.bundle.min.js'); }}"></script>
    <script src="{{ asset('eit_assets/vendors/jarallax/jarallax.min.js'); }}"></script>
    <script src="{{ asset('eit_assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js'); }}"></script>
    <script src="{{ asset('eit_assets/vendors/jquery-appear/jquery.appear.min.js'); }}"></script>
    <script src="{{ asset('eit_assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js'); }}"></script>
    <script src="{{ asset('eit_assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js'); }}"></script>
    <script src="{{ asset('eit_assets/vendors/jquery-validate/jquery.validate.min.js'); }}"></script>
    <script src="{{ asset('eit_assets/vendors/nouislider/nouislider.min.js'); }}"></script>
    <script src="{{ asset('eit_assets/vendors/odometer/odometer.min.js'); }}"></script>
    <script src="{{ asset('eit_assets/vendors/swiper/swiper.min.js'); }}"></script>
    <script src="{{ asset('eit_assets/vendors/tiny-slider/tiny-slider.min.js'); }}"></script>
    <script src="{{ asset('eit_assets/vendors/wnumb/wNumb.min.js'); }}"></script>
    <script src="{{ asset('eit_assets/vendors/wow/wow.js'); }}"></script>
    <script src="{{ asset('eit_assets/vendors/isotope/isotope.js'); }}"></script>
    <script src="{{ asset('eit_assets/vendors/countdown/countdown.min.js'); }}"></script>
    <script src="{{ asset('eit_assets/vendors/owl-carousel/owl.carousel.min.js'); }}"></script>
    <script src="{{ asset('eit_assets/vendors/bxslider/jquery.bxslider.min.js'); }}"></script>
    <script src="{{ asset('eit_assets/vendors/bootstrap-select/js/bootstrap-select.min.js'); }}"></script>
    <script src="{{ asset('eit_assets/vendors/vegas/vegas.min.js'); }}"></script>
    <script src="{{ asset('eit_assets/vendors/jquery-ui/jquery-ui.js'); }}"></script>
    <script src="{{ asset('eit_assets/vendors/timepicker/timePicker.js'); }}"></script>
    <script src="{{ asset('eit_assets/vendors/circleType/jquery.circleType.js'); }}"></script>
    <script src="{{ asset('eit_assets/vendors/circleType/jquery.lettering.min.js'); }}"></script>
    <script src="{{ asset('eit_assets/vendors/nice-select/jquery.nice-select.min.js'); }}"></script>
    <script src="{{ asset('eit_assets/js/govity.js'); }}"></script>
</body>

</html>