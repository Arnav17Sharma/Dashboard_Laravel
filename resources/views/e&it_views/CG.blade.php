@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT')
@section('content')
    <section class="page-header" style="height: 30vh;">

    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>CG Tika Web Portal</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Chips Activity</a></li>
                <li><span>/</span></li>
                <li>CG Tika Web Portal</li>
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
                                    <h4> CG Tika web portal-</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">

                                        <li>
                                            Launched the CG Tika web portal to ensure a convenient way for all the
                                            people of the age group of 18 to 44 to get vaccinated against corona. This
                                            web portal was developed in-house by Chips under the BuildNext project, in
                                            which Along with online registration, a person without mobile can also get
                                            vaccinated by registering himself with the help of help desks set up by the
                                            district administration at other places including panchayats, urban bodies
                                            and municipal corporations. The CG Tika web portal of the Government of
                                            Chhattisgarh has been prepared keeping in mind the social and geographical
                                            conditions of the citizens.
                                            <br>
                                            73 lakh 74 thousand 668 citizens have registered for vaccination through CG
                                            Tika web portal. By scheduling 14 lakh 68 thousand 473 citizens, 12 lakh 17
                                            thousand 421 citizens were successfully vaccinated.


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