@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT')
@section('content')
    <section class="page-header" style="height: 30vh;">

    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>e-Samiksha</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Chips Activity</a></li>
                <li><span>/</span></li>
                <li>e-Samiksha</li>
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
                                    <h4> Chief Minister e-Samiksha Project - "Inclusive Solutions"</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">

                                        <li>
                                            'Dashboard' is being developed under Mukhyamantri e-Samiksha Project for
                                            'inclusive solution' in the form of user interface with a vision to make
                                            processing and handling of large data of important schemes of the state
                                            simple and readable. This dashboard is being created digitally to track the
                                            flow involved in a process, initiative or activity.
                                            <br>
                                            To achieve the same goal of progress and development, many activities are
                                            conducted simultaneously in the state. In such circumstances, for the smooth
                                            implementation of all the activities, the digital dashboard becomes very
                                            important in keeping the Hon'ble Chief Minister and all the officers of the
                                            Chief Minister's Secretariat aware of the activities and providing the real
                                            situation information immediately. Through the digital 'Chhattisgarh
                                            Dashboard', the top-level decision makers will be continuously updated on
                                            the progress of all the activities with just one click and will also be able
                                            to provide their important suggestions instantly. As a result, the real
                                            status of progress can be seen by the top level decision makers in the state
                                            at an appropriate time and necessary action can also be taken easily with
                                            speed.
                                            <br>
                                            The envisaged 'Dashboard' will help in setting up a mechanism to monitor and
                                            evaluate the performance of state's major projects, departmental issues, key
                                            development indices of the state, etc. Alerts will be included in the
                                            'Chhattisgarh Dashboard'. At the appropriate time and prompt corrective
                                            action can be taken by the apex level on the issues of delay, violation,
                                            deviation etc. in the operation of the schemes.




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