@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT')
@section('content')
    <section class="page-header" style="height: 30vh;">

    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>E-Distric Project</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Chips Activity</a></li>
                <li><span>/</span></li>
                <li>Achievement</li>
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
                                    <h4>E-District Project-</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">

                                        <li>
                                            The main objective of this project is to make online delivery of citizen
                                            centric services of the state government. Under the e-district project,
                                            services like various certificates, public grievances and right to
                                            information, public distribution system, pension, land revenue, registration
                                            in employment centers etc. have been included, all these services have been
                                            included in public service centers, choice centers and general The service
                                            is being provided by the centres. Citizens have also been provided the
                                            facility to submit their applications to the concerned department through
                                            mobile app/state portal (www.cgstate.gov.in). Apart from this, the facility
                                            of providing e-district services from local offices near their homes has
                                            been started so that citizens can get services conveniently and they do not
                                            need to go to the district headquarters.
                                            At present 132 services of various departments are available online on the
                                            e-district portal (full page). Through this, more than 172.86 lakh online
                                            applications have been received so far, out of which 161.66 lakh
                                            applications have been rejected.
                                            <br>
                                        The list of major services to be provided under the e-District project is as
                                            follows -
                                            <li>Certificates - Income, domicile, caste certificate, marriage etc.</li>
                                            <li>License - Gomasta License and Renewal, Food Vendor License.</li>
                                            <li>Social Welfare Schemes - Old Age Pension, Social Security Pension,</li>
                                            <li>Disability Pension, Widow Pension etc.</li>
                                            <li>Revenue Services (Agriculture Land/Converted, Nazul)</li>
                                            <li>Revenue Service, Agricultural Land / Converted - Demarcation, Conversion,</li>
                                            <li>For Research Potential, For Loan Book, RBC 6 (4)</li>
                                            <li>Revenue Service Nazul - Demarcation, Transition, Nazul Patta Renewal, Nazul</li>
                                            <li>Patta Clearance</li>
                                            <li>Land use information.</li>
                                            <li>For shop and establishment registration.</li>
                                            <li>License for business.</li>
                                            <li>Copy of Marks List.</li>
                                            <li>Registration of Self Help Groups/Cooperative Societies.</li>
                                            <li>Transfer and Character Certificate for Government Engineering/Polytechnic
                                            College.</li>
                                            <li>Application for assistance to victims of natural calamities.</li>
                                            Complaint/Right to Information</li>
                                        
                                        <br>
                                        For the convenience of the citizens, integration of the e-district portal has
                                        been done with the digital locker, so that the certificates issued through the
                                        e-district portal can also be kept safe in the digital locker of the citizens.
                                        Simultaneously, integration has also been done with UMANG Mobile App (Nd.Ch. The
                                        major achievements in the year reported under the scheme are as follows-
                                        Civil services are being provided by operating 12368 Public Service
                                        Centers/Common Service Centers in all the districts/tehsils of the state.
                                        In the year reported by the Public Service Centers, more than 25 lakh 21
                                        thousand citizens have been benefited from various government services.
                                        For the convenience of citizens, the facility of applying for marriage
                                        permission and granting permission has been added in the lockdown on the
                                        e-district portal.
                                        No Objection Certificate services of Forest Department have been added on the
                                        e-district portal, which is now available online on the portal for the
                                        convenience of the citizens.
                                        From now onwards, permanent and temporary firecracker license, petrol pump
                                        license and cinema hall license can also be obtained online sitting at home for
                                        providing services to the citizens during the Kovid period. Along with this, the
                                        service of trade license for hotels has also been started.



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