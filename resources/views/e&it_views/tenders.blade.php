@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT | Tenders')
@section('content')
<section class="page-header" style="height: 30vh;">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top: 50px;">
            <h2>Tenders</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Notice Board</a></li>
                <li><span>/</span></li>
                <li>Tenders</li>
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
                        <h3 class="department-details__download-title">TENDER</h3>
                        <ul class="department-details__download-list list-unstyled">
                            <li>
                                <div class="department-details__download-content">

                                    <div class="department-details__download-text">
                                        <p>Annual summary of active tax increment financing</p>
                                    </div>
                                </div>
                                <div class="department-details__download-btn-box">
                                    <span>3.9KB</span>
                                    <a href="#" class="department-details__download-btn thm-btn">Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="department-details__download-content">

                                    <div class="department-details__download-text">
                                        <p>When an unknown printer took a galley of type</p>
                                    </div>
                                </div>
                                <div class="department-details__download-btn-box">
                                    <span>3.9KB</span>
                                    <a href="#" class="department-details__download-btn thm-btn">Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="department-details__download-content">

                                    <div class="department-details__download-text">
                                        <p>Annual summary of active tax increment financing</p>
                                    </div>
                                </div>
                                <div class="department-details__download-btn-box">
                                    <span>3.9KB</span>
                                    <a href="#" class="department-details__download-btn thm-btn">Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="department-details__download-content">

                                    <div class="department-details__download-text">
                                        <p>When an unknown printer took a galley of type</p>
                                    </div>
                                </div>
                                <div class="department-details__download-btn-box">
                                    <span>3.9KB</span>
                                    <a href="#" class="department-details__download-btn thm-btn">Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="department-details__download-content">

                                    <div class="department-details__download-text">
                                        <p>Annual summary of active tax increment financing</p>
                                    </div>
                                </div>
                                <div class="department-details__download-btn-box">
                                    <span>3.9KB</span>
                                    <a href="#" class="department-details__download-btn thm-btn">Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="department-details__download-content">

                                    <div class="department-details__download-text">
                                        <p>When an unknown printer took a galley of type</p>
                                    </div>
                                </div>
                                <div class="department-details__download-btn-box">
                                    <span>3.9KB</span>
                                    <a href="#" class="department-details__download-btn thm-btn">Download</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 mt-5">
                <div class="department-details__right">
                    <h3 class="department-details__download-title">NOTICE BOARD</h3>
                    <div class="department-details__services-box">
                        <ul class="department-details__services-list list-unstyled">
                            <li>
                                <a href="#">Your Government<span class="fa fa-arrow-right"></span></a>
                            </li>
                            <li>
                                <a href="#">Jobs & Unemployment<span class="fa fa-arrow-right"></span></a>
                            </li>
                            <li>
                                <a href="#">Business & Industrials<span class="fa fa-arrow-right"></span></a>
                            </li>
                            <li>
                                <a href="#">Roads & Transportation<span class="fa fa-arrow-right"></span></a>
                            </li>
                            <li>
                                <a href="#">Art & Culture<span class="fa fa-arrow-right"></span></a>
                            </li>
                            <li>
                                <a href="#">Policing & Crimes<span class="fa fa-arrow-right"></span></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@include('e&it_views.include.table')
@endsection