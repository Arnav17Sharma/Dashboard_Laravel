<header class="main-header">
    <nav class="main-menu">
        <div class="main-menu__wrapper">
            <div class="main-menu__wrapper-inner">
                <div class="main-menu__logo">
                    <a href="{{ route('home') }}"><img src="user_assets/images/resources/logo-1.png" alt=""></a>
                </div>
                <div class="main-menu__top">
                    <div class="main-menu__top-inner">
                        <div class="main-menu__top-left">
                            <div class="main-menu__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="main-menu__top-right">
                            <ul class="list-unstyled main-menu__contact-list">
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div class="text">
                                        <p>Open hours: Mon - Fri 8.00 am - 6.00 pm</p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-unstyled main-menu__top-menu">
                                <li><a href="about.html">Council</a></li>
                                <li><a href="about.html">Government</a></li>
                                <li><a href="contact.html">Complaints</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="main-menu__bottom">
                    <div class="main-menu__bottom-inner">
                        <div class="main-menu__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class=""> <!-- current -->
                                    <a href="{{ route('home') }}">Home </a>
                                </li>
                                <li class=""> <!-- current -->
                                    <a href="{{ route('all_gallery') }}">Gallery</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="our-history.html">Our history</a></li>
                                        <li><a href="team.html">Team</a></li>
                                        <li><a href="team-details.html">Team details</a></li>
                                        <li><a href="portfolio.html">Portfolio</a></li>
                                        <li><a href="portfolio-details.html">Portfolio details</a></li>
                                        <li><a href="events.html">Events</a></li>
                                        <li><a href="event-details.html">Event details</a></li>
                                        <li><a href="pricing.html">Pricing</a></li>
                                        <li><a href="faq.html">FAQs</a></li>
                                        <li><a href="404.html">404 error</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="our-services.html">Services</a></li>
                                        <li><a href="building-permission.html">Building permission</a></li>
                                        <li><a href="driving-license.html">Driving license</a></li>
                                        <li><a href="report-polution.html">Report polution</a></li>
                                        <li><a href="parking-permission.html">Parking permission</a></li>
                                        <li><a href="tax-return.html">Tax return</a></li>
                                        <li><a href="birth-certificate.html">Birth certificate</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Departments</a>
                                    <ul class="sub-menu">
                                        <li><a href="departments.html">Departments</a></li>
                                        <li><a href="department-details.html">Department details</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#">News</a>
                                    <ul class="sub-menu">
                                        <li><a href="news.html">News</a></li>
                                        <li><a href="news-sidebar.html">News sidebar</a></li>
                                        <li><a href="news-details.html">News details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop-details.html">Shop details</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="main-menu__right">
                            <div class="main-menu__call">
                                <div class="main-menu__call-icon">
                                    <span class="icon-telephone"></span>
                                </div>
                                <div class="main-menu__call-content">
                                    <p class="main-menu__call-sub-title">Call Anytime</p>
                                    <h5 class="main-menu__call-number"><a href="tel:9212340800">+92 (1234)
                                            0800</a></h5>
                                </div>
                            </div>
                            <div class="main-menu__search-box">
                                <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                            </div>
                            <div class="language-switcher">
                                <div class="dropdown bootstrap-select"><select class="selectpicker">
                                        <option
                                            data-content="<span class='lang-en'><img src='user_assets/images/lang-flag/en.png' alt=''>English</span>"
                                            value="en" selected="">English</option>
                                        <option
                                            data-content="<span class='lang-fr'><img src='user_assets/images/lang-flag/fr.png' alt=''>French</span>"
                                            value="fr">French
                                        </option>

                                        <option
                                            data-content="<span class='lang-it'><img src='user_assets/images/lang-flag/it.png' alt=''>Italian</span>"
                                            value="it">
                                            Italian</option>
                                    </select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light"
                                        data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-1"
                                        aria-haspopup="listbox" aria-expanded="false" title="English">
                                        <div class="filter-option">
                                            <div class="filter-option-inner">
                                                <div class="filter-option-inner-inner"><span class="lang-en"><img
                                                            src="user_assets/images/lang-flag/en.png" alt="">English</span>
                                                </div>
                                            </div>
                                        </div>
                                    </button>
                                    <div class="dropdown-menu ">
                                        <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
                                            <ul class="dropdown-menu inner show" role="presentation"></ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            @if(auth()->user())
                            <div class="main-menu__btn-box">
                                <a href="{{ route('dashboard') }}" class="thm-btn main-menu__btn">Dashboard</a>
                                <a href="{{ route('logout') }}" class="thm-btn main-menu__btn" style="background-color:#d9534f; width:auto; padding:10px;">
                                    <i class="feather-log-out"></i>
                                    <!-- <span>Logout</span> -->
                                </a>
                            </div>
                            @endif
                            @if(!auth()->user())
                            <div class="main-menu__btn-box">
                                <a href="{{ route('login') }}" class="thm-btn main-menu__btn">Login</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content">
        <div class="main-menu__wrapper">
            <div class="main-menu__wrapper-inner">
                <div class="main-menu__logo">
                    <a href="index.html"><img src="user_assets/images/resources/logo-1.png" alt=""></a>
                </div>
                <div class="main-menu__top">
                    <div class="main-menu__top-inner">
                        <div class="main-menu__top-left">
                            <div class="main-menu__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="main-menu__top-right">
                            <ul class="list-unstyled main-menu__contact-list">
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div class="text">
                                        <p>Open hours: Mon - Fri 8.00 am - 6.00 pm</p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-unstyled main-menu__top-menu">
                                <li><a href="about.html">Council</a></li>
                                <li><a href="about.html">Government</a></li>
                                <li><a href="contact.html">Complaints</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="main-menu__bottom">
                    <div class="main-menu__bottom-inner">
                        <div class="main-menu__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="dropdown megamenu current">
                                    <a href="index.html">Home </a>
                                    <ul>
                                        <li class="current">
                                            <section class="home-showcase">
                                                <div class="container">
                                                    <div class="home-showcase__inner">
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <div class="home-showcase__item">
                                                                    <div class="home-showcase__image">
                                                                        <img src="user_assets/images/home-showcase/home-showcase-1-1.jpg"
                                                                            alt="">
                                                                        <div class="home-showcase__buttons">
                                                                            <a href="index.html"
                                                                                class="thm-btn home-showcase__buttons__item">Multi
                                                                                Page</a>
                                                                            <a href="index-one-page.html"
                                                                                class="thm-btn home-showcase__buttons__item">One
                                                                                Page</a>
                                                                        </div>
                                                                        <!-- /.home-showcase__buttons -->
                                                                    </div><!-- /.home-showcase__image -->
                                                                    <h3 class="home-showcase__title">Home
                                                                        Page
                                                                        01</h3>
                                                                    <!-- /.home-showcase__title -->
                                                                </div><!-- /.home-showcase__item -->
                                                            </div><!-- /.col-lg-3 -->
                                                            <div class="col-lg-3">
                                                                <div class="home-showcase__item">
                                                                    <div class="home-showcase__image">
                                                                        <img src="user_assets/images/home-showcase/home-showcase-1-2.jpg"
                                                                            alt="">
                                                                        <div class="home-showcase__buttons">
                                                                            <a href="index2.html"
                                                                                class="thm-btn home-showcase__buttons__item">Multi
                                                                                Page</a>
                                                                            <a href="index2-one-page.html"
                                                                                class="thm-btn home-showcase__buttons__item">One
                                                                                Page</a>
                                                                        </div>
                                                                        <!-- /.home-showcase__buttons -->
                                                                    </div><!-- /.home-showcase__image -->
                                                                    <h3 class="home-showcase__title">Home
                                                                        Page
                                                                        02
                                                                    </h3><!-- /.home-showcase__title -->
                                                                </div><!-- /.home-showcase__item -->
                                                            </div><!-- /.col-lg-3 -->
                                                            <div class="col-lg-3">
                                                                <div class="home-showcase__item">
                                                                    <div class="home-showcase__image">
                                                                        <img src="user_assets/images/home-showcase/home-showcase-1-3.jpg"
                                                                            alt="">
                                                                        <div class="home-showcase__buttons">
                                                                            <a href="index3.html"
                                                                                class="thm-btn home-showcase__buttons__item">Multi
                                                                                Page</a>
                                                                            <a href="index3-one-page.html"
                                                                                class="thm-btn home-showcase__buttons__item">One
                                                                                Page</a>
                                                                        </div>
                                                                        <!-- /.home-showcase__buttons -->
                                                                    </div><!-- /.home-showcase__image -->
                                                                    <h3 class="home-showcase__title">Home
                                                                        Page
                                                                        03
                                                                    </h3><!-- /.home-showcase__title -->
                                                                </div><!-- /.home-showcase__item -->
                                                            </div><!-- /.col-lg-3 -->
                                                            <div class="col-lg-3">
                                                                <div class="home-showcase__item">
                                                                    <div class="home-showcase__image">
                                                                        <img src="user_assets/images/home-showcase/home-showcase-1-4.jpg"
                                                                            alt="">
                                                                        <div class="home-showcase__buttons">
                                                                            <a href="index-dark.html"
                                                                                class="thm-btn home-showcase__buttons__item">View
                                                                                Page</a>
                                                                        </div>
                                                                        <!-- /.home-showcase__buttons -->
                                                                    </div><!-- /.home-showcase__image -->
                                                                    <h3 class="home-showcase__title">Home
                                                                        Page
                                                                        04
                                                                    </h3><!-- /.home-showcase__title -->
                                                                </div><!-- /.home-showcase__item -->
                                                            </div><!-- /.col-lg-3 -->
                                                        </div><!-- /.row -->
                                                    </div><!-- /.home-showcase__inner -->

                                                </div><!-- /.container -->
                                            </section>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="our-history.html">Our history</a></li>
                                        <li><a href="team.html">Team</a></li>
                                        <li><a href="team-details.html">Team details</a></li>
                                        <li><a href="portfolio.html">Portfolio</a></li>
                                        <li><a href="portfolio-details.html">Portfolio details</a></li>
                                        <li><a href="events.html">Events</a></li>
                                        <li><a href="event-details.html">Event details</a></li>
                                        <li><a href="pricing.html">Pricing</a></li>
                                        <li><a href="faq.html">FAQs</a></li>
                                        <li><a href="404.html">404 error</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="our-services.html">Services</a></li>
                                        <li><a href="building-permission.html">Building permission</a></li>
                                        <li><a href="driving-license.html">Driving license</a></li>
                                        <li><a href="report-polution.html">Report polution</a></li>
                                        <li><a href="parking-permission.html">Parking permission</a></li>
                                        <li><a href="tax-return.html">Tax return</a></li>
                                        <li><a href="birth-certificate.html">Birth certificate</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Departments</a>
                                    <ul class="sub-menu">
                                        <li><a href="departments.html">Departments</a></li>
                                        <li><a href="department-details.html">Department details</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#">News</a>
                                    <ul class="sub-menu">
                                        <li><a href="news.html">News</a></li>
                                        <li><a href="news-sidebar.html">News sidebar</a></li>
                                        <li><a href="news-details.html">News details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop-details.html">Shop details</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="main-menu__right">
                            <div class="main-menu__call">
                                <div class="main-menu__call-icon">
                                    <span class="icon-telephone"></span>
                                </div>
                                <div class="main-menu__call-content">
                                    <p class="main-menu__call-sub-title">Call Anytime</p>
                                    <h5 class="main-menu__call-number"><a href="tel:9212340800">+92 (1234)
                                            0800</a></h5>
                                </div>
                            </div>
                            <div class="main-menu__search-box">
                                <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                            </div>
                            <div class="language-switcher">
                                <div class="dropdown bootstrap-select"><select class="selectpicker">
                                        <option
                                            data-content="<span class='lang-en'><img src='user_assets/images/lang-flag/en.png' alt=''>English</span>"
                                            value="en" selected="">English</option>
                                        <option
                                            data-content="<span class='lang-fr'><img src='user_assets/images/lang-flag/fr.png' alt=''>French</span>"
                                            value="fr">French
                                        </option>

                                        <option
                                            data-content="<span class='lang-it'><img src='user_assets/images/lang-flag/it.png' alt=''>Italian</span>"
                                            value="it">
                                            Italian</option>
                                    </select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light"
                                        data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-2"
                                        aria-haspopup="listbox" aria-expanded="false" title="English">
                                        <div class="filter-option">
                                            <div class="filter-option-inner">
                                                <div class="filter-option-inner-inner"><span class="lang-en"><img
                                                            src="user_assets/images/lang-flag/en.png" alt="">English</span>
                                                </div>
                                            </div>
                                        </div>
                                    </button>
                                    <div class="dropdown-menu ">
                                        <div class="inner show" role="listbox" id="bs-select-2" tabindex="-1">
                                            <ul class="dropdown-menu inner show" role="presentation"></ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="main-menu__btn-box">
                                <a href="{{ route('login') }}" class="thm-btn main-menu__btn">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.sticky-header__content -->
</div>