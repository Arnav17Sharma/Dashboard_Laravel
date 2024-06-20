@extends('user_views.layout')
@section('title', 'Home')
@section('csslinks')
<!-- favicons Icons -->
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('user_assets/images/favicons/apple-touch-icon.png'); }}" />
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('user_assets/images/favicons/favicon-32x32.png'); }}" />
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('user_assets/images/favicons/favicon-16x16.png'); }}" />
<link rel="manifest" href="{{ asset('user_assets/images/favicons/site.webmanifest'); }}" />
<meta name="description" content="govity HTML 5 Template " />
<!-- fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="{{ asset('user_assets/vendors/bootstrap/css/bootstrap.min.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/animate/animate.min.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/animate/custom-animate.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/fontawesome/css/all.min.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/jarallax/jarallax.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/nouislider/nouislider.min.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/nouislider/nouislider.pips.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/odometer/odometer.min.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/swiper/swiper.min.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/govity-icons/style.css'); }}">
<link rel="stylesheet" href="{{ asset('user_assets/vendors/tiny-slider/tiny-slider.min.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/reey-font/stylesheet.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/owl-carousel/owl.carousel.min.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/owl-carousel/owl.theme.default.min.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/bxslider/jquery.bxslider.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/bootstrap-select/css/bootstrap-select.min.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/vegas/vegas.min.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/jquery-ui/jquery-ui.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/timepicker/timePicker.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/nice-select/nice-select.css'); }}" />
<!-- template styles -->
<link rel="stylesheet" href="{{ asset('user_assets/css/govity.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/css/govity-responsive.css'); }}" />
@endsection

@section('content')
    <section class="page-header" style="height: 30vh;">

    <div class="page-header-bg" style="background-image: url(user_assets/images/backgrounds/page-header-bg.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Gallery</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li>Gallery</li>
            </ul>
        </div>
    </div>
</section>

<section class="mt-3">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__icon">
                <span class="fa fa-star"></span>
            </div>
            <span class="section-title__tagline">Our Gallery</span>
            <h2 class="section-title__title">Explore state government <br> gallery</h2>
        </div>
        <div class="row">
            @foreach($galleries as $gallery)
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp animated">
                <div class="department-two__single">
                    <div class="department-two__img-box">
                        <div class="department-two__img" style="width:15rem; height:20rem;">
                        <a href="{{ url('/gallery/'.$gallery->g_id) }}"><img style="height:20rem;object-fit:cover;" src="{{($gallery->thumbnail)}}" alt=""></a>
                        </div>
                        <div class="department-two__content">
                            <h3 class="department-two__title"><a href="{{ url('/gallery/'.$gallery->g_id) }}">{{ $gallery->g_name }}</a></h3>
                        </div>
                        <div class="department-two__content-two">
                            <h3 class="department-two__title-two"><a href="{{ url('/gallery/'.$gallery->g_id) }}">{{ $gallery->g_name }}</a></h3>
                            <p class="">created on {{ $gallery->created_at }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

@section('jsscripts')
<script src="{{ asset('user_assets/vendors/jquery/jquery-3.6.0.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/bootstrap/js/bootstrap.bundle.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/jarallax/jarallax.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/jquery-appear/jquery.appear.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/jquery-validate/jquery.validate.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/nouislider/nouislider.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/odometer/odometer.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/swiper/swiper.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/tiny-slider/tiny-slider.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/wnumb/wNumb.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/wow/wow.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/isotope/isotope.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/countdown/countdown.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/owl-carousel/owl.carousel.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/bxslider/jquery.bxslider.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/bootstrap-select/js/bootstrap-select.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/vegas/vegas.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/jquery-ui/jquery-ui.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/timepicker/timePicker.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/circleType/jquery.circleType.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/circleType/jquery.lettering.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/nice-select/jquery.nice-select.min.js'); }}"></script>




<!-- template js -->
<script src="{{ asset('user_assets/js/govity.js'); }}"></script>
@endsection