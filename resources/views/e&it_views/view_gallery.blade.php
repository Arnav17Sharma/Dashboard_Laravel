@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT | Photo Gallery')
@section('content')
<section class="page-header" style="height: 30vh;">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top: 50px;">
            <h2>Photo Gallery</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Home</a></li>
                <li><span>/</span></li>
                <li>Photo Gallery</li>
            </ul>
        </div>
    </div>
</section>

@include('e&it_views.include.updates')

<section class="mt-5">
    <div class="container">
        <div class="row">
            @foreach($galleries as $gallery)
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp animated">
                <div class="department-two__single">
                    <div class="department-two__img-box">
                        <div class="department-two__img" style="width:17rem; height:20rem;">
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