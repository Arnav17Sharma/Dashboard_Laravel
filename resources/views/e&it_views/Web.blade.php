@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT')
@section('content')
    <section class="page-header" style="height: 30vh;">

    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Web Portal and Mobile App for Quantifiable Data Commission</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Chips Activity</a></li>
                <li><span>/</span></li>
                <li>Web Portal and Mobile App for Quantifiable Data Commission</li>
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
                                    <h4>Web portal and mobile app for quantifiable data commission -</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">

                                        <li>
                                            In-house mobile app and web portal has been developed by CHIPs under the
                                            BuildNext project for the calculation of OBC and economically weaker
                                            sections in the population of the state. The mobile app 'CGQDC' (WFC)
                                            prepared by Chips for calculation is available in the Chips Play Store,
                                            which can be downloaded and uploaded in the prescribed format. Apart from
                                            this, information can also be entered in the Choice Center through the web
                                            portal Prunbahukbandapada.
                                            <br>
                                            For the survey, 5549 supervisors have been appointed in the entire state,
                                            out of which 1103 supervisors have been appointed in urban areas and 4446
                                            supervisors in gram panchayat areas. For registration, four login options
                                            have been given in the app – Aadhar card, ration card number, mobile number
                                            of the head of the ration card or mobile number of the applicant. After
                                            login, the information related to the applicant will have to be uploaded in
                                            the form of the app. The uploaded information will be automatically
                                            forwarded to the supervisor appointed for the ward of the concerned
                                            applicant's Gram Panchayat, Nagar Panchayat or urban body. The authorized
                                            supervisor will verify the same. After that the data will be saved in the
                                            server. This data will be helpful in the calculation of Other Backward
                                            Classes and Economically Weaker Sections of the state.
                                            <br>

                                            A total of 1,16,27,354 people have been registered through this web portal
                                            and mobile app since September 1, 1,08,07,021 from other backward classes
                                            and 8,20,333 from economically weaker sections. The entire Chhattisgarh has
                                            been included in the survey. After the completion of the survey, the final
                                            list will be published by the Gram Panchayat and the urban body. This app
                                            has been developed in-house by Chips and its maintenance and operation is
                                            also being done in-house.




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