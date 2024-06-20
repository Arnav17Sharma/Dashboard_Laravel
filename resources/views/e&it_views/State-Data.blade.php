@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT')
@section('content')
    <section class="page-header" style="height: 30vh;">

    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>State Data Center</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Chips Activity</a></li>
                <li><span>/</span></li>
                <li>State Data Center</li>
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
                                    <h4>State Data Center-</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">

                                        <li> The State Data Center operated by the State Government is operating for the
                                            last 9 years. In this data center, the data of many departments,
                                            institutions and services of the state is stored in one place. This data is
                                            used by the departments by grading them as per the requirement. Presently 49
                                            racks are installed in the data center, in which servers of 38 departments
                                            have been installed and 175 applications and websites are being hosted. It
                                            belongs to the data center two tier category. The Disaster Recovery Center
                                            of this data center is at National Data Center New Delhi, in which real time
                                            data transfer and storage takes place. This is the ISO for data center
                                            service. 20000 and ISO for security 27001:2013 has been certified. Presently
                                            the security checks of websites prepared by various departments are being
                                            done by authorized agencies of Government of India. At present, the data of
                                            e-governance services and websites of many departments are being stored in
                                            it. The up-time of State Data Center is 99.749 percent. The capital
                                            expenditure of the state government has come down by the successful
                                            implementation of the state data center, as well as the operational
                                            expenditure of the e-governance schemes is also being reduced by the
                                            excellent functioning of the data center. The proposed data center will have
                                            its own cloud in which the security operation center will also be sponsored.
                                            This will give a boost to the technical infrastructure of the state.

                                            The State Data Center is providing secure and uninterrupted infrastructure
                                            for the applications and websites of various important departments for the
                                            smooth implementation of government-to-government and government-to-citizen
                                            services in the state. In view of the increase in the number of employees
                                            working from home and the increase in video teleconferences during the
                                            lockdown period of the Corona era, the technical team of the data center is
                                            continuously working to protect against cyber criminals. Following are some
                                            of the major works done by the State Data Center for the cooperation of the
                                            beneficiaries and ensuring the availability of services and business
                                            continuity from
                                            the point of view of Kovid-19-

                                            Paramedical by officers from residence office by Hon'ble Chief Minister
                                            during lockdown
                                            Uninterrupted video conferencing facility has been provided for the
                                            convenience of the staff, doctors and stakeholders and to engage the
                                            participants from various fields.

                                            Virtual Private Network in view of the need for work from home during
                                            lockdown
                                            (touch) Secure remote access is provided.

                                            Continuous monitoring of schemes of all important departments like Godhan
                                            Nyay, Patel Commission, Adhiyan Tuhar Doori, Dial 112, Crime and Criminal
                                            Tracking Network System, Public Distribution System, services of Health
                                            Department etc. established from State Data Center and provided necessary
                                            technical assistance. is going.

                                            In order to ensure availability of important information, orders and
                                            information to all the employees, necessary technical support is being
                                            provided for the operation of the Chhattisgarh State Portal and Digital
                                            Secretariat Project, the official website of Chhattisgarh.
                                            The web portal operated by the Public Relations Department is also
                                            maintained through this data center for uploading news, videos and photos of
                                            all the districts of the state.

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