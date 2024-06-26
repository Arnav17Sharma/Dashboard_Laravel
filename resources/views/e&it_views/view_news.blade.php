@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT | News')
@section('content')
<section class="page-header" style="height: 30vh;">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top: 50px;">
            <h2>News</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Notice Board</a></li>
                <li><span>/</span></li>
                <li>News</li>
            </ul>
        </div>
    </div>
</section>

@include('e&it_views.include.updates')

<section class="department-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="department-details__left">
                    <div class="department-details__download">
                        <h3 class="department-details__download-title">NEWS</h3>
                        <ul class="department-details__download-list list-unstyled">
                            @foreach($all_notices as $news)
                            <li>
                                <div class="department-details__download-content">

                                    <div class="department-details__download-text">
                                        <p>{{ $news->title }}</p>
                                    </div>
                                </div>
                                <div class="department-details__download-btn-box">
                                    <span>{{ $news->created_at }}</span>
                                    <a href="{{ url('/view_notice/'.$news->id) }}" class="department-details__download-btn thm-btn">View</a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @include('e&it_views.include.sidebar_notice_board')
        </div>
    </div>
</section>
@include('e&it_views.include.table')
@endsection