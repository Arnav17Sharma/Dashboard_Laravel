@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT')
@section('content')
    <section class="page-header" style="height: 30vh;">

    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Digital Secretariat Project</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Chips Activity</a></li>
                <li><span>/</span></li>
                <li>Digital Secretariat Project</li>
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
                            <!-- <span class="fa fa-tasks"></span> -->
                        </div>

                    </div>
                    <div class="faq-one__right mt-3">
                        <div class="accrodion-grp " data-grp-name="">

                            <div class="accrodion active">
                                <div class="accrodion-title" style="margin-top:16px; margin-bottom:16px;">
                                    <h4>Wi-Fi City Project-</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">

                                        <li>
                                            To make the work of the State Secretariat effective and transparent under
                                            the project, 'Online Less Paper' methodology has been developed. Digital
                                            work operations have been started through this project in most of the
                                            departments of the state. More than 1000 employees/officers of all
                                            departments of the Ministry have been trained in the implementation of
                                            Digital Secretariat Project. It has been made mandatory for the
                                            employees/officers of the ministry by implementing the online methodology of
                                            holiday module, immovable property details and annual confidential report in
                                            all the departments of the ministry. Apart from this, arrangements have also
                                            been made for technical support and helpdesk for the employees/officers of
                                            the departments in the ministry. Access to mail, receipts and leave has been
                                            given through the advanced mobile app of the application of this project.
                                            This project has also been expanded to other government offices of the state
                                            like State Forest Office, Pradhan Mantri Awas Yojana (Rural), Raipur Smart
                                            City and National Rural Livelihood Mission etc. Under the project, 6367
                                            leave applications, 23 immovable property details, 951 annual confidential
                                            reports, 3701 file transfers and 21405 postal transfers were successfully
                                            conducted and edited through Digital Secretariat software in the reported
                                            year.


                                        </li>


                                    </div><!-- /.inner -->
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>

            @include('e&it_views.include.chips_activity_sidebar')
        </div>
    </div>
</section>
@endsection