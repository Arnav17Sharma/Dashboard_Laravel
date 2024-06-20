@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT')
@section('content')
    <section class="page-header" style="height: 30vh;">

    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Bharatnet Project</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Chips Activity</a></li>
                <li><span>/</span></li>
                <li>Bharatnet Project</li>
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
                                    <h4>BharatNet Project-</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">

                                        <li>
                                            This is the most important scheme to be developed by the state government in
                                            the form of telecom infrastructure. In which 5987 gram panchayats have to be
                                            connected by laying optical fiber cable of 32 thousand km. Approval has been
                                            given for the implementation of BharatNet Phase-II project in the state at a
                                            cost of Rs. 2155.26 crore. The financial provision is being made available
                                            by USOF, Department of Telecommunications, Government of India. The work of
                                            providing connectivity to 4104 gram panchayats of the state in the first
                                            phase and 5987 gram panchayats in the second phase has been started.

                                            Chhattisgarh is the only state in India where connectivity is being provided
                                            using Ring method and IP/MPLS technology.

                                            State Network Operation Center (S-NOK) has been set up at Nava Raipur for
                                            review and monitoring of Phase II of BharatNet project. Chhattisgarh is the
                                            first state in the country, where the work of review, evaluation and
                                            monitoring has been started after completing the construction of S-Nok. So
                                            far, about 23027 km of optical fiber cable has been laid under the scheme
                                            and the work of laying optical fiber cable has been completed in more than
                                            4652 gram panchayats.Tax has been linked to S-Nok.

                                            In the reported year, about 6772 km of optical fiber cable was laid and more
                                            than 1080 gram panchayats have completed the work of laying optical fiber
                                            cable and have been connected to S-NOK.

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