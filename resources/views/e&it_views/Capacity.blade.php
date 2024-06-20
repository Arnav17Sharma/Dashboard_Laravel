@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT')
@section('content')
    <section class="page-header" style="height: 30vh;">

    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Capacity Development Program</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Chips Activity</a></li>
                <li><span>/</span></li>
                <li>Capacity Development Program</li>
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
                                    <h4>Capacity Development Program-</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">

                                        <li>
                                            Skilled human resource is most important to work in the field of
                                            e-governance and information technology. The government has understood the
                                            importance of this infrastructure and has taken the initiative to work for
                                            human resource development. Under which the State e-Governance Mission team
                                            has been constituted in the state by the Government of India, which has 6
                                            members.
                                            <br>
                                            <div class="paddd" style="margin-top:16px;margin-bottom:16px">
                                            <h6> Computer and e-governance training institute in Chhattisgarh Academy of
                                            Administration-</h6>
                                            </div>
                                            This institute has been started in the year 2013 in the Academy of
                                            Administration, Raipur from the financial source of the state government.
                                            The main objective of this institute is that basic training of computer
                                            operation should be given to the employees up to the block level of the
                                            state and training sessions and workshops of experts should be organized on
                                            the subject of e-governance to the officials of the state so that they can
                                            use the e-governance system of their department. Get involved with experts
                                            in governance projects. In this institute, no training has been done in the
                                            reported year due to Kovid-19.

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