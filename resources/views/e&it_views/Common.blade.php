@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT')
@section('content')
    <section class="page-header" style="height: 30vh;">

    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Common Service Center</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Chips Activity</a></li>
                <li><span>/</span></li>
                <li>Common Service Center</li>
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
                                    <h4>Common Service Center</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">

                                        <li>
                                            24,860 Common Service Centers / Public Service Centers have been established
                                            in urban and rural areas of the state, which are providing civic services,
                                            business services and various internet based public utility services to the
                                            local residents. So far 59,84,306 online services have been provided
                                            successfully from these centers, the total cost of which is Rs. 175 crores.
                                            The main objective of starting these centers is to provide online public
                                            utility services to the citizens near their homes in remote areas. Common
                                            Service Center and Public Service Center also do other work in their
                                            business. For providing government services at these centers, the service
                                            recipient has to pay the service charges fixed by the government to the
                                            public servants or rural choice agents. Under the scheme, Gramin Lok Seva
                                            Kendras have been established in 11 thousand 654 gram panchayats. 126 types
                                            of government services being provided through public service centers have
                                            also been started in about 07 thousand common service centers. Apart from
                                            this, about 300 types of business services are also being provided through
                                            Common Service Centers. Under Khubchand Baghel Health Insurance Scheme, 1
                                            crore 6 lakh beneficiaries have been registered through common service
                                            centers in the state. By making more than 13 thousand Common Service Centers
                                            as Bank Mitras (DGPay Services), services like withdrawal, deposit, opening
                                            of new accounts etc. are being provided to rural citizens near their
                                            residence. By doing more than 15 lakh transactions by these bank friends
                                            till now, Rs. 300 crore has been paid. Apart from this, 20 lakh people have
                                            been registered under Pradhan Mantri Digital Saksharta Abhiyan, out of which
                                            digital literacy certificates have been provided to 16 lakh people. The
                                            department has provided benefits of various schemes to the laborers by
                                            registering 54 lakh laborers through common service centers. Under Tele-law
                                            service, 42 thousand people have got legal advice through Common Service
                                            Center.



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