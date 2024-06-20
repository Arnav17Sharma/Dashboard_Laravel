@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT')
@section('content')
    <section class="page-header" style="height: 30vh;">

    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Chhattisgarh Haat Project</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Chips Activity</a></li>
                <li><span>/</span></li>
                <li>Chhattisgarh Haat Project</li>
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
                                    <h4>Chhattisgarh Haat Project-</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">

                                        <li>
                                            CG Haat web portal was constructed in April 2020 under the BuildNext project
                                            for civic amenities in the face of the COVID-19 pandemic. This portal is
                                            proving to be very useful for citizens facing difficulty in buying/selling
                                            fruits and vegetables in the current global COVID-19 pandemic. Due to this,
                                            both the buyer and seller of vegetables and fruits are getting mutual
                                            benefit. Any citizen can register as buyer or seller through mobile number.
                                            Nodal officer has been appointed through the district administration to
                                            verify and approve the application.
                                            The main objective of this portal is to reduce the journey of corona
                                            transmission through home access service. When almost all the businesses in
                                            the country are almost closed, small businessmen of Chhattisgarh are getting
                                            livelihood by continuing their business through this portal. Within a short
                                            span of time, the number of registered Buyers/Sellers/Commodity/Delivery
                                            Boys on this portal is continuously increasing. This facility has started in
                                            149 cities of all 28 districts of the state. There are more than 19 thousand
                                            registered citizens. There are more than 2866 registered sellers of fresh
                                            fruits and green vegetables. Through this scheme, online home access service
                                            of medicines has been started in Raipur Municipal Corporation area. There
                                            are more than 140 registered medical vendors.


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