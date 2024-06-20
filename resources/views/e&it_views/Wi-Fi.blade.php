@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT')
@section('content')
    <section class="page-header" style="height: 30vh;">

    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Wi-Fi City Project</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Chips Activity</a></li>
                <li><span>/</span></li>
                <li>Wi-Fi City Project</li>
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
                            <!-- <span class="fa fa-tasks"></span> -->
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
                                            The use of telecommunications and information technology has increased in
                                            Chhattisgarh. In order to provide benefits of government services to
                                            citizens, it is necessary that internet facility should be provided smoothly
                                            in the state, only then citizens will be able to get benefits of government
                                            services. Internet service delivery through Wi-Fi connectivity is simpler
                                            than other methods. With this, internet facility can be provided in any area
                                            without wire.

                                            Generally, access points are set up to provide Wi-Fi to a particular area.
                                            Wi-Fi connectivity can be achieved on all laptops, mobiles, computers,
                                            tablets or other devices with Wi-Fi facility within an area of 150 square
                                            feet. While internet facility provided by cable benefits limited space and
                                            user, Wi-Fi connectivity provides internet facility to a wide area and wide
                                            users.

                                            State's Chief Minister's residence office, Mahanadi Bhawan, Indravati Bhawan
                                            and other identified government and public places have been made free Wi-Fi
                                            zones. Apart from this, Wi-Fi facility has also been provided to 50
                                            government colleges of the state, which has been operated and maintained
                                            during the year.


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