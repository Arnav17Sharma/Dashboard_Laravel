@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT')
@section('content')
    <section class="page-header" style="height: 30vh;">

    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>CG Camp Portal</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Chips Activity</a></li>
                <li><span>/</span></li>
                <li>CG Camp Portal</li>
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
                                    <h4>CG Camp Portal-</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">

                                        <li>
                                            Developed under the e-Samiksha project, this portal is an online advanced
                                            platform for monitoring the priority schemes of the state government. In
                                            this portal, all the major schemes of the state with the highest priority of
                                            the government are to be included. At present, online monitoring of Godhan
                                            Nyay Yojana, Mukhyamantri Haat Bazar Clinic Yojna, Chief Minister Suposhan
                                            Abhiyan, CG E-District, Chief Minister Urban Slum Health Scheme, Narva,
                                            Garuwa, Ghurva, Bari Yojana will be done. Through the CG Camp Portal, the
                                            progress of priority schemes of any district for different time periods,
                                            comparative assessment of the progress of the districts can be done. This
                                            integrated dashboard will have real time information on major schemes of the
                                            state. Through this, the work of implementation and monitoring of schemes
                                            will be done.
                                            <br>
                                            Public Grievance Portal has been prepared for redressal of grievances of
                                            general public in CG Camp Portal. Any person can register his complaint
                                            online on the Public Grievance Portal. Common citizens can register their
                                            complaints by registering through the portal. District wise, department wise
                                            information will be available on the dashboard for information, diagnosis
                                            and monitoring of complaints.
                                            <br>

                                          




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