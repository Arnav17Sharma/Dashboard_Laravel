@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT')
@section('content')
    <section class="page-header" style="height: 30vh;">

    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Payment Application in Godhan Nyay Yojana</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Chips Activity</a></li>
                <li><span>/</span></li>
                <li>Payment Application in Godhan Nyay Yojana</li>
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
                                    <h4>Payment Application in Godhan Nyay Yojana-</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">

                                        <li>
                                            Under the BuildNext project, a website and mobile app have been created by
                                            Chips to make online the entire process of beneficiary registration, dung
                                            purchase, vermi compost production and sale, scheme monitoring and
                                            beneficiary payment for the ambitious Godan Nyay scheme of the state
                                            government. As a result, dung vendors of the state are getting online
                                            payment at home and detailed information is being received regarding the
                                            scheme. Till the month of December 2021, a total of 2 lakh 77 thousand 242
                                            dung vendors have been registered and about 58 lakh quintals of cow dung has
                                            been purchased. About 52 lakh quintals of cow dung has been purchased till
                                            December through the app developed by Chips. Self-help groups have also been
                                            linked with cow dung vendors through the app. Also, through this app,
                                            arrangements have been made for making vermi compost from cow dung and for
                                            sale. Country's reputed I.T. The organization Elates Technomedia has
                                            received the National Level Award “Award of Excellence” in the Digital
                                            Governance category.
                                            <br>
                                            In the reported year, 'Gauthan Map' (Gauthan Multi-Activity and Livelihood
                                            Management) mobile app has been developed by CHIP for management of cattle.
                                            Through this app, complete details of Gothan, quantity of cow dung
                                            purchased, pasture and paradan details, information of self-help group,
                                            infrastructure etc., will be available on just one click.
                                            <br>
                                            Developed in-house by CHIPs, this app will have a Gothan wise database of
                                            Gothans operating across the state, which will contain details of resources,
                                            activities, beneficiaries and services etc. available in Gothano. Digital
                                            mapping of Gothanas will be done through Geo-tagging which will provide
                                            continuous accounting of resources of Gauthanas. A database of multi
                                            activities conducted by Self Help Groups will be prepared in each Gothan.
                                            This framework will enable precise monitoring of the key indices of Gothano.
                                            This will bring economic benefits at the grassroots level and the accounts
                                            of the beneficiaries will be available
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