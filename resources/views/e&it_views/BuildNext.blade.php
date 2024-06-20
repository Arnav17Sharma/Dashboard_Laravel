@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT')
@section('content')
    <section class="page-header" style="height: 30vh;">

    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>BuildNext Project</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Chips Activity</a></a></li>
                <li><span>/</span></li>
                <li>BuildNext Project</li>
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
                                    <h4>BuildNext Project -</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">

                                        <li> Various public welfare schemes are run by various departments of the state
                                            government. In order to directly benefit the beneficiaries of these
                                            services, services such as portals, websites and mobile apps are developed
                                            by the departments through chips. At present, the work of making websites
                                            and mobile apps is done by outsourcing. This process is time consuming, more
                                            costly, more vendor dependency, less quality and no control over
                                            website/mobile app etc. For these reasons and to increase the economy in
                                            government expenditure, the BuildNext project has been prepared. The
                                            duration of the project will be three years from the financial year 2020-21.
                                            <br>

                                            The BuildNext project aims to build a dedicated, technical know-how and
                                            content team to build portals, websites and mobile apps in chips. The main
                                            objectives of the scheme are as follows -
                                            <br>
                                            <ul>
                                                <li>To provide all facilities at one place for making portal, website
                                                    and mobile
                                                    app for all the departments / agencies / corporations / divisions
                                                    etc. of
                                                    the state.</li>
                                                <li>Ending the outsourced practice.</li>

                                                <li>To bring down the government expenditure by 30-35 percent while
                                                    bringing
                                                    economy in cost.</li>

                                                <li>To further improve the quality of benefit distribution of public
                                                    welfare
                                                    schemes.</li>
                                                Development of websites and mobile apps according to the guidelines of
                                                the
                                                Central / State Government.
                                        </li>

                                        <li>Development of websites and mobile apps according to the need of the plans
                                            by doing adequate study.</li>
                                        <li>Under the project, monthly honorarium of 35 human resources has been
                                            proposed by the state government on the basis of monthly honorarium of
                                            approved posts in the setup of chips.</li>
                                        </ul>
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