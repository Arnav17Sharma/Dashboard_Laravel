@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT | Home')
@section('content')
<section class="page-header">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -10rem;">
    </div>
    
    <div class="container">
        <div class="page-header__inner">
            <h2>{{ $curr_gallery->g_name }}</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Created at {{ $curr_gallery->created_at }}</a></li>
                <li><span>/</span></li>
                <li>{{ count($all_photos) }} images</li>
            </ul>
        </div>
    </div>
</section>

<section class="mt-5">
    <div class="container">
        
        <div class="wow fadeInUp animated">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="footer-widget__column footer-widget__gallery">
                    <ul class="footer-widget__gallery-list list-unstyled mx-auto justify-content-center">
                        @foreach($all_photos as $photo)
                        <li>
                            <div class="footer-widget__gallery-img" style="width: 15rem;">
                                <img src="{{ asset($photo->p_url); }}" alt="" style="height: 17rem; object-fit: cover;">
                                <a href="{{ asset($photo->p_url); }}"
                                    class="img-popup"></a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection