@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT | Home')
@section('content')
<section class="page-header" style="height: 30vh;">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top: 50px;">
            <h2>Departmental Activities</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><span>/</span></li>
                <li>Departmental Activities</li>
            </ul>
        </div>
    </div>
</section>

@include('e&it_views.include.updates')

<section class="feature-four">
    <div class="container">
        <div class="row">
            <!--Feature Four Single Start-->
            <div class="col-xl-8 col-lg-8">
                <div class="department-details__left">
                    <div class="department-details__icon-and-title">
                        <div class="department-details__icon">
                            <span class="fa fa-suitcase"></span>
                        </div>
                        <h3 class="department-details__title">Departmental Activities</h3>
                    </div>
                    <div class="faq-one__right mt-3">

                        <p>
                            The basic objective of the activities of the department in the state is to establish
                            infrastructure for telecommunication and information technology in the state, in which a
                            better environment is created for the industries and through the services of e-governance,
                            speedy and quality services can be provided to the common man of the state. Can you Many
                            projects have been implemented by the department through chips.
                        </p>

                    </div>
                </div>
            </div>
            <!--Feature Four Single End-->
            <!--Feature Four Single Start-->
            @include('e&it_views.include.sidebar_notice_board')
            <!--Feature Four Single End-->
            <!--Feature Four Single Start-->
            <!-- <div class="col-xl-4 col-lg-4">
                <div class="department-details__download">
                    <h3 class="department-details__download-title">Achievements &amp; Awards</h3>
                    <ul class="department-details__download-list list-unstyled">
                        <li>
                            <div class="department-details__download-content">
                                <div class="department-details__download-icon"><span class="fa fa-trophy"></span></div>
                                <div class="department-details__download-text">
                                    <p>Annual Award for excellence</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="department-details__download-content">
                                <div class="department-details__download-icon"><span class="fa fa-trophy"></span></div>
                                <div class="department-details__download-text">
                                    <p>Annual Award for excellence</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="department-details__download-content">
                                <div class="department-details__download-icon"><span class="fa fa-trophy"></span></div>
                                <div class="department-details__download-text">
                                    <p>Annual Award for excellence</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="department-details__download-content">
                                <div class="department-details__download-icon"><span class="fa fa-trophy"></span></div>
                                <div class="department-details__download-text">
                                    <p>Annual Award for excellence</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="department-details__download-content">
                                <div class="department-details__download-icon"><span class="fa fa-trophy"></span></div>
                                <div class="department-details__download-text">
                                    <p>Annual Award for excellence</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> -->
            <!--Feature Four Single End-->
        </div>
    </div>
</section>

@include('e&it_views.include.table')
@endsection