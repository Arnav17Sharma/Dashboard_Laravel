@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT')
@section('content')
    <section class="page-header" style="height: 30vh;">

    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Integrated Proactive e-Governance Project (II)</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Chips Activity</a></li>
                <li><span>/</span></li>
                <li>Integrated Proactive e-Governance Project (II)</li>
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
                                    <h4>Integrated Proactive e-Governance Project (II)-</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">

                                        <li>
                                            In the present system operated for the delivery of services from Government
                                            to Citizen (G2C), Government to Business (G2B) and Government to Government
                                            (G2G) common-citizens have to face many problems. Citizens have to get
                                            repeated verification of identity cards/documents issued by the government
                                            for different services. Due to this, there is a delay in the delivery of
                                            many services like benefits / grants etc. to the beneficiaries, application
                                            approval takes more time, to get the benefits of the services, one has to
                                            travel to the headquarters. In the present system, the government also has
                                            to face many problems. Different delivery arrangements for each service add
                                            up to cost and also take more time.<pre></pre>
                                          
                                            In view of the above problems, a unique initiative is being taken by the
                                            state government using the latest information and communication technology
                                            to build an active and efficient citizen service delivery system. In order
                                            to bring e-governance system to the homes of citizens of the entire state,
                                            especially those living in rural areas, the state government has approved
                                            the “Integrated Proactive E-Governance” project (P) in the reported year. In
                                            this scheme, a web portal will be created, through which pro-active delivery
                                            of civil services of all the departments will be done.
                                            The main objective of the scheme is to develop a system for common citizens
                                            in which all the facilities related to delivery of services are provided to
                                            the applicant in a pro-active manner like One Portal, One App, One Link, One
                                            Login, One Complaint, One Place. To do. The government wants to provide all
                                            facilities to both the parties at one place for speedy delivery of citizen
                                            services.



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