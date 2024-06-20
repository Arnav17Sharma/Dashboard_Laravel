@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT')
@section('content')
    <section class="page-header" style="height: 30vh;">

    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Chhattisgarh Darpan Portal</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Chips Activity</a></li>
                <li><span>/</span></li>
                <li>Chhattisgarh Darpan Portal</li>
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
                                    <h4>Chhattisgarh-Darpan Project-</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">

                                        <li>
                                            This portal is one of the innovative initiatives taken by CHIPS under the
                                            BuildNext project in the Covid era. Seven flagship schemes launched by the
                                            state government to realize the dreams of Father of the Nation Mahatma
                                            Gandhi, namely  Chief Minister Health Scheme, Chief Minister Haat Bazar
                                            Clinic Yojna, Chief Minister Urban Slum Hospital Yojna, Chief Minister Ward
                                            Office and Narwa, Garwa, Gurwa, Mukhyamantri Darpan website and real time
                                            updation mobile app were developed for monitoring of schemes like Bari etc.
                                            Chief Minister Darpan website and real time updation mobile app has been
                                            launched by the country's reputed IT institute Elites Technomedia, New Delhi
                                            under the category 'Digital India Initiative' by identifying the innovations
                                            done in the government IT sector for the convenience of citizens during the
                                            period of Kovid-19. “Elites Excellence Awards-2020”.
                                            <br>
                                            Through this portal, the citizens are getting real project data and
                                            information, as a result of which the state administration has moved towards
                                            no paper and real time monitoring system. The data of these schemes can be
                                            uploaded at village/city level. Live photos and videos can be uploaded in
                                            real time. The details of the beneficiaries are also available on the
                                            portal. All this data is available to citizens and state government
                                            officials alike. With this scheme, on one hand it will be possible to review
                                            and monitor the progress directly from the Chief Minister's Secretariat
                                            through Mukhyamantri Darpan Portal and Mobile App, on the other hand all
                                            this information will be available to the common citizens on real time. In
                                            Darpan, every type of information of all the major schemes has been made
                                            available along with the data.

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