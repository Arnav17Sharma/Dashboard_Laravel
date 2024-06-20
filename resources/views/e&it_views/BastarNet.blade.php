@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT')
@section('content')
    <section class="page-header" style="height: 30vh;">

    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>BastarNet Project</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Chips Activity</a></li>
                <li><span>/</span></li>
                <li>BastarNet Project</li>
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
                                    <h4>Bastar-Net Project-</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">

                                        <li>
                                            Due to Naxal problem, low population density, high forest area, and
                                            inaccessibility in some areas of Bastar, it is an area with low internet
                                            connectivity. For all these reasons, Bastar-Net project has been
                                            implemented. In which Bastar's 'Digital Information Highway' has been
                                            prepared.

                                            Under the scheme, 836 km long optical fiber cable has been laid in the seven
                                            districts of Bastar. It provides uninterrupted connectivity using the ring
                                            method. This connectivity increased the telecom density of the area. Voice
                                            and data services are being exchanged through this network. This gives a
                                            boost to entrepreneurship in the area. The cost of this scheme is 65.31
                                            crores.

                                            The following benefits have been received in Bastar region from the scheme-

                                            Mobile and internet connectivity has been made available to remote areas.
                                            The network has been obtained to streamline health services, educational
                                            work, development work and police services.

                                            This has given impetus to digital payments in the rural economy.

                                            The students of remote forest areas like Dantewada and Sukma have also got
                                            the benefit of internet.

                                            The availability of internet through the scheme has provided equal
                                            opportunities to the youth of Bastar to compete at the national level.

                                            Under the scheme, uninterrupted internet connectivity service has been
                                            started in seven districts and 11 tehsil headquarters of Bastar division. In
                                            the reported year, 1742 video conferences have been successfully organized
                                            in Bastar division through this network and the uptime of internet
                                            connectivity service was 95 percent.


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