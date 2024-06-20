@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT')
@section('content')
    <section class="page-header" style="height: 30vh;">

    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Statewide Area Network Project</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Chips Activity</a></li>
                <li><span>/</span></li>
                <li>Statewide Area Network Project</li>
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
                            <div class="accrodion-title"style="margin-top:16px; margin-bottom:16px;">
                                    <h4>State Wide Area Network-</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">

                                        <li> The project is currently run from the state budget.
                                            It is the main infrastructure of the state, which plays an active role in
                                            providing network for information technology and e-governance services.
                                            Intranet network has been established in the state under the State Wide Area
                                            Network, through which data, audio and video are transferred from one place
                                            to another. Under this scheme, SWAN Management Centres have been set up at
                                            State Headquarters, 28 District Headquarters and 124 Block Headquarters.
                                            Through these centres connectivity has been given to government offices and
                                            institutions through radio frequency and lease lines, from where data is
                                            being transferred. Connectivity is being provided at the speed of 100 Mbps
                                            up to the district level by connecting SWAN to the National Knowledge
                                            Network of the Government of India. MPLS to all management centers of Swan
                                            Project. Connected through connectivity. Under this, video conferencing
                                            facility has been developed in 500 places simultaneously in remote areas of
                                            the state. Due to which video conferencing facility has been developed in
                                            all development blocks, district offices and juvenile courts under Women and
                                            Child Development Department and telemedicine work has been done in selected
                                            health centers.

                                            The services of State Wide Area Network were used by 1450 government offices
                                            in the reported year. The network of SWAN project has been very useful in
                                            the difficult circumstances of the Kovid period and this network has played
                                            a very commendable role in maintaining health and other services. Under
                                            this, more than 2695 video conferences were held during the reported period.
                                            After the lockdown, all the cabinet meetings and 355 meetings were organized
                                            by the Chief Minister's Secretariat from the Swan Project Network itself.
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