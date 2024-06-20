@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT')
@section('content')
    <section class="page-header" style="height: 30vh;">

    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>State Portal Project</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Chips Activity</a></li>
                <li><span>/</span></li>
                <li>State Portal Project</li>
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
                                    <h4>State Portal Project-</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">

                                        <li> In order to bring uniformity in the web portals of the departments
                                            operating in the state and to increase the citizen facilities in the state
                                            portal, a new state portal is being created. The website of seven
                                            departments has also been made on the theme of this State Portal-
                                            1. SP Office Raipur,
                                            2. Energy Department
                                            3. Department of Parliamentary Affairs
                                            4. Registration and Stamp
                                            5. Haj Committee
                                            6. Labor Department
                                            7. Panchayat and Social Welfare Department

                                            The purpose of the State Portal is as follows-
                                            Separate login facility will be provided for other departments in the
                                            proposed state portal. The option of posting will be provided to the
                                            department so that the department can publish its information in the main
                                            page of the State Portal also. The latest published notice board and
                                            department wise notice board will appear in the portal. District population,
                                            district wise information of tehsils will also be displayed, along with
                                            information about important links related to civil services will be
                                            provided. The website will have a provision to nominate one State
                                            Administrator and one Department Administrator. The

                                            State Administrator will act as a Super Admin for the website which will
                                            have access to the departmental login.

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