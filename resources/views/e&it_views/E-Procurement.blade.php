@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT')
@section('content')
    <section class="page-header" style="height: 30vh;">

    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>e-Procurement Project</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Chips Activity</a></li>
                <li><span>/</span></li>
                <li>e-Procurement Project</li>
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
                                    <h4>Wi-Fi City Project-</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">

                                        <li>
                                            E-procurement means the supply of any work, service or commodity through
                                            electronic means. In this, facilities like indent management, e-tendering,
                                            contract management, vendor management, MIS, e-auction and e-payment have
                                            been provided through electronic means. E-procurement saves money, time and
                                            human labor and the procurement process is simple, transparent, quality and
                                            accurate.
                                            <br>
                                            In the second phase of the new technology based e-procurement project in the
                                            last years, integrated e-procurement project has been done as an end-to-end
                                            solution from the beginning of the procurement process. This new project ERP
                                            is based. The project is linked to multiple payment gateways, in which the
                                            tenderer has to make online payment/refund of processing fee and advance
                                            security fund. The project is Secure Socket Layer certified, which certifies
                                            the security standards of the software. The functional and safety testing
                                            work of this project has been successfully done twice by the
                                            Standardization, Testing and Quality Certification Organization of the
                                            Government of India.
                                            <br>
                                            At present, 149 Departments/Corporations/Mandals/Institutions of the State
                                            have been registered for carrying out tenders under the E-Procurement
                                            Project. Out of these, tender related work is being done regularly by more
                                            than 125 departments / corporations / divisions / institutions. Under the
                                            e-procurement project, more than 19500 tenderers have been registered so far
                                            and 72,200 tenders have been issued, with a total cost of Rs 2.86 lakh
                                            crore.

                                            All the tender related services were operated continuously through the
                                            e-procurement project even in the odd circumstances of the Kovid period.
                                            During the period of lockdown due to outbreak of Novel Kovid-19, a total of
                                            646 tenders from various departments in which more than 10 tenders related
                                            to Novel Kovid-19 like Rapid Testing Kits, PPE Suits, N95 Masks and other
                                            important related to medical supplies.

                                            All the tenders were successfully completed. Through this system,
                                            Chhattisgarh has procured rapid testing kits at the lowest rates in the
                                            country.

                                            In the reported year, more than 2,900 tenderers have been registered and
                                            more than 11,656 tenders have been issued, the total cost of which is about
                                            94478 crores and 41 new departments and their agencies were connected with
                                            the e-procurement project.


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