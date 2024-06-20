@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT')
@section('content')
    <section class="page-header" style="height: 30vh;">

    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Central Project Monitoring Unit Project</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Chips Activity</a></li>
                <li><span>/</span></li>
                <li>Central Project Monitoring Unit Project</li>
            </ul>
        </div>
    </div>
</section>



<section class="feature-four">
    <div class="container">
        <div class="row">
            <!--Feature Four Single Start-->
            <div class="col-xl-8 col-lg-8">
                <div class="department-details__left">
                    <div class="department-details__icon-and-title">
                        <div class="department-details__icon">
                            <span class="fa fa-tasks"></span>
                        </div>

                    </div>
                    <div class="faq-one__right mt-3">
                        <div class="accrodion-grp " data-grp-name="">

                            <div class="accrodion active">
                                <div class="accrodion-title" style="margin-top:16px; margin-bottom:16px;">
                                    <h4>Central Project Monitoring Unit Project-</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">

                                        <li> A centralized project management system has been created to assist the
                                            government in appraisal and review of infrastructure projects, which will
                                            provide necessary assistance in carrying out work-flow based management of
                                            the projects being run in the departments and in continuous monitoring of
                                            physical and financial progress and decision-making. will be received.
                                            Review and evaluation of infrastructure projects is being done in Public
                                            Works Department, Nava Raipur Atal Municipal Development Authority,
                                            Chhattisgarh Road Development Corporation, Chhattisgarh State Electricity
                                            Distribution Company Limited and Chhattisgarh State Power Transmission
                                            Company Limited.
                                            <br>
                                            Centralized Project Management System has been designed and planned as per
                                            the requirement of the departments. The budget, location, stages of its
                                            implementation, information of stakeholders are included for the projects
                                            operated by this system. A mobile-app has been developed for the measurement
                                            book, through which the actual location (latitude-longitude) of the
                                            structures under construction and the measurement book are entered with
                                            pictures. Monitoring of projects is being done at all levels through
                                            dashboard.
                                        </li>


                                    </div><!-- /.inner -->
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
            z@include('e&it_views.include.chips_activity_sidebar')

        </div>
    </div>
</section>
@endsection