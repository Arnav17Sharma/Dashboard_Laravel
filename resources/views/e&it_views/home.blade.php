@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT | Home')
@section('content')
<section class="main-slider-three">
    <div class="main-slider-three__carousel owl-carousel owl-theme thm-owl__carousel owl-loaded owl-drag"
        data-owl-options="{&quot;loop&quot;: true, &quot;items&quot;: 1, &quot;navText&quot;: [&quot;&quot;,&quot;&quot;], &quot;margin&quot;: 0, &quot;dots&quot;: false, &quot;nav&quot;: false, &quot;animateOut&quot;: &quot;slideOutDown&quot;, &quot;animateIn&quot;: &quot;fadeIn&quot;, &quot;active&quot;: true, &quot;smartSpeed&quot;: 1000, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 7000, &quot;autoplayHoverPause&quot;: false}">

        <div class="owl-stage-outer">
            <div class="owl-stage"
                style="transform: translate3d(-2056px, 0px, 0px); transition: all 0s ease 0s; width: 5140px;">
                <div class="owl-item cloned" style="width: 1028px;">
                    <div class="item main-slider-three__slide-1">
                        <div class="main-slider-three__bg"
                            style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});">
                        </div><!-- /.slider-one__bg -->
                        <div class="container">
                            <div class="main-slider-three__content">
                                <p class="main-slider-three__sub-title">Welcome to the official website of</p>
                                <h2 class="main-slider-three__title">Department of E&amp;IT <br> Chhattisgarh</h2>
                                <div class="main-slider-three__btn-box">
                                    <a href="#aboutus" class="main-slider-three__btn thm-btn">Know More</a>
                                </div>
                                <div class="main-slider-three__weather-box">
                                    <div class="about-three__services-box">
                                        <h3 class="about-three__services-title">Key Projects</h3>
                                        <ul class="about-three__services-list list-unstyled">
                                            <li><a href="{{ route('e&it_views.State-Data') }}"><i class="fa fa-angle-right"></i>State
                                                    Data Center</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>CG SWAN</a>
                                            </li>
                                            <li><a href="{{ route('e&it_views.Geographic') }}"><i
                                                        class="fa fa-angle-right"></i>GIS</a></li>
                                            <li><a href="{{ route('e&it_views.Incubator') }}"><i class="fa fa-angle-right"></i> 36
                                                    Inc</a></li>
                                            <li><a href="{{ route('e&it_views.E') }}"><i
                                                        class="fa fa-angle-right"></i>eDistrict</a></li>
                                            <li><a href="{{ route('e&it_views.Wi-Fi') }}"><i class="fa fa-angle-right"></i>Wifi
                                                    City</a></li>
                                            <li><a href="#"><i
                                                        class="fa fa-angle-right"></i>SLCM</a></li>
                                        </ul>
                                        <div class="about-three__btn-box">
                                            <a href="{{ route('e&it_views.chips_activity') }}" class="about-three__btn thm-btn">Discover
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"></button><button
                type="button" role="presentation" class="owl-next"></button></div>
        <div class="owl-dots disabled"></div>
    </div>
</section>

@include('e&it_views.include.updates')

<section class="feature-four">
    <div class="container">
        <div class="row">
            <!--Feature Four Single Start-->
            <div class="col-xl-4 col-lg-4 mt-5" id="aboutus">
                <div class="department-details__left">
                    <div class="department-details__icon-and-title">
                        <div class="department-details__icon">
                            <span class=""><i class="fa-solid fa-suitcase"></i></span>
                        </div>
                        <h3 class="department-details__title">About us</h3>
                    </div>
                    <p class="department-details__text-1">The Electronics & IT Department of Chhattisgarh aims to enhance civil services through technology, foster investment in the IT sector, and develop digital infrastructure. It focuses on GIS, rural internet systems, and promoting research, particularly in using Hindi in IT. The department coordinates IT policy implementation, organizes related events, and ensures comprehensive IT adoption across government departments. It also facilitates collaboration between investors, industries, and financial institutions, while promoting public awareness and human resource development in IT.</p>
                    <p class="department-details__text-2">The Electronics & IT Department of Chhattisgarh enhances civil services, promotes IT investment, and develops digital infrastructure and public awareness.</p>
                </div>
            </div>
            <!--Feature Four Single End-->
            <!--Team One Single Start-->
            <div class="col-xl-4 col-lg-4 mt-5">
                    <div class="team-one__single">

                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('eit_assets/images/people/cm.jpg'); }}" style="height:319px;">
                            </div>
                        </div>
                        <div class="team-one__content">
                            <h3 class="team-one__name"><a href="team-details.html">Shri Vishnu Dev Say</a></h3>
                            <p class="team-one__sub-title">Honourable Chief Minister<br> Chhattisgarh</p>

                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
            <!--Feature Four Single Start-->
            @include('e&it_views.include.sidebar_notice_board')
            <!--Feature Four Single End-->
        </div>
    </div>
</section>

<section class="department-one">
    <div class="department-one__bg" style="background-image: url({{ asset('eit_assets/images/backgrounds/department-one-bg.png'); }});">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="department-one__inner">
                    <div class="section-title text-center">
                        <div class="section-title__icon">
                            <span class="fa fa-star"></span>
                        </div>
                        <span class="section-title__tagline">Organizational Info</span>
                        <h2 class="section-title__title">Explore Parts of Department</h2>
                    </div>
                    <ul class="department-one__list list-unstyled">
                        <li class="department-one__single">
                            <div class="department-one__content">
                                <h3 class="department-one__title"><a href="{{ route('e&it_views.about_chips') }}">CH<i>i</i>PS</a></h3>
                                <div class="department-one__icon">
                                    <span class=""><i class="fa fa-building"></i></span>
                                </div>
                            </div>
                        </li>
                        <li class="department-one__single">
                            <div class="department-one__content">
                                <h3 class="department-one__title"><a href="{{ route('e&it_views.State-Data') }}">SDC</a></h3>
                                <div class="department-one__icon">
                                    <span class="fa fa-suitcase"></span>
                                </div>
                            </div>
                        </li>
                        <li class="department-one__single">
                            <div class="department-one__content">
                                <h3 class="department-one__title"><a href="{{ route('e&it_views.BharatNet') }}">Bharatnet</a></h3>
                                <div class="department-one__icon">
                                    <span class="fa fa-industry"></span>
                                </div>
                            </div>
                        </li>
                        <li class="department-one__single">
                            <div class="department-one__content">
                                <h3 class="department-one__title"><a href="{{ route('e&it_views.Geographic') }}">GIS</a></h3>
                                <div class="department-one__icon">
                                    <span class="fa fa-globe"></span>
                                </div>
                            </div>
                        </li>
                        <li class="department-one__single">
                            <div class="department-one__content">
                                <h3 class="department-one__title"><a href="{{ route('e&it_views.chips_activity') }}">Explore All</a></h3>
                                <div class="department-one__icon">
                                    <span class="fa fa-arrow-right"></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


@include('e&it_views.include.table')
@endsection