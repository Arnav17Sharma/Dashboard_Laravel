@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT | Who\'s Who')
@section('content')
<section class="page-header" style="height: 30vh;">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top: 50px;">
            <h2>Who's Who</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><span>/</span></li>
                <li>Who's Who</li>
            </ul>
        </div>
    </div>
</section>

@include('e&it_views.include.updates')

<section class="feature-four">
    <div class="container">
        <div class="row">
            <!--Feature Four Single Start-->
            <div class="col-xl-8 col-lg-8">
                <div class="department-details__left">
                    <div class="department-details__icon-and-title">
                        <div class="department-details__icon">
                            <span class="fa fa-suitcase"></span>
                        </div>
                        <h3 class="department-details__title">Who's Who</h3>
                    </div>
                    <div class="faq-one__right mt-3">
                        <div class="table-responsive">
                            <table class="table cart-table text-center">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold">Name</th>
                                        <th class="font-weight-bold">Designation</th>
                                        <th class="font-weight-bold">Present Address/<br>Room no at ministry</th>
                                        <th class="font-weight-bold">Office-Telephone number/Fax Number</th>
                                        <!-- <th class="font-weight-bold">Resident address/Email</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Niharika Barik Singh</td>
                                        <td>Principal Secretary (ENIT)</td>
                                        <td>S-03/10</td>
                                        <td>0771-2510363, 2510366</td>
                                        <!-- <td>D-1/5, Officers Colony, Devendra Nagar, Raipur</td> -->
                                    </tr>
                                    <tr>
                                        <td>Ritesh Kumar Agarwal</td>
                                        <td>Joint Secretary</td>
                                        <td>S-03/48</td>
                                        <td>0771-2510150</td>
                                        <!-- <td>D-2/40, New Officers Colony, Devendra Nagar, Raipur</td> -->
                                    </tr>
                                    <tr>
                                        <td>Devlal Bharti</td>
                                        <td>Upper Secretary, IT Dept.</td>
                                        <td>AD-03/28</td>
                                        <td>+91 9425215662</td>
                                        <!-- <td>G-6/213, GAD Complex, Kabir Nagar, Raipur</td> -->
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- <table class="table text-center">
                            <thead>
                                <tr>
                                    <th class="font-weight-bold">Name</th>
                                    <th class="font-weight-bold">Designation</th>
                                    <th class="font-weight-bold">Present Address/<br>Room no at ministry</th>
                                    <th class="font-weight-bold">Office-Telephone number/Fax Number</th>
                                    <th class="font-weight-bold">Resident address/Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Shri Subrat Sahoo </td>
                                    <td>Additional Chief Secretary</td>
                                    <td>M-05/11</td>
                                    <td>0771-2221311, 2510793</td>
                                    <td>D-1/5, Officers Colony, Devendra Nagar, Raipur</td>
                                </tr>
                                <tr>
                                    <td>Shri Sameer Vishnoi </td>
                                    <td>Special Secretary</td>
                                    <td>S-03/40</td>
                                    <td>0771-2510330</td>
                                    <td>D-2/40, New Officers Colony, Devendra Nagar, Raipur</td>
                                </tr>
                                <tr>
                                    <td>Mr. K. K. Gautam </td>
                                    <td>Upper Secretary</td>
                                    <td>M-05/01</td>
                                    <td>0771-2510794</td>
                                    <td>G-6/213, GAD Complex, Kabir Nagar, Raipur</td>
                                </tr>
                            </tbody>
                        </table> -->

                    </div>
                </div>
            </div>
            <!--Feature Four Single End-->
            <!--Feature Four Single Start-->
            @include('e&it_views.include.sidebar_notice_board')
            <!--Feature Four Single End-->
            <!--Feature Four Single Start-->
            <!-- <div class="col-xl-4 col-lg-4">
                <div class="department-details__download">
                    <h3 class="department-details__download-title">Achievements &amp; Awards</h3>
                    <ul class="department-details__download-list list-unstyled">
                        <li>
                            <div class="department-details__download-content">
                                <div class="department-details__download-icon"><span class="fa fa-trophy"></span></div>
                                <div class="department-details__download-text">
                                    <p>Annual Award for excellence</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="department-details__download-content">
                                <div class="department-details__download-icon"><span class="fa fa-trophy"></span></div>
                                <div class="department-details__download-text">
                                    <p>Annual Award for excellence</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="department-details__download-content">
                                <div class="department-details__download-icon"><span class="fa fa-trophy"></span></div>
                                <div class="department-details__download-text">
                                    <p>Annual Award for excellence</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="department-details__download-content">
                                <div class="department-details__download-icon"><span class="fa fa-trophy"></span></div>
                                <div class="department-details__download-text">
                                    <p>Annual Award for excellence</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="department-details__download-content">
                                <div class="department-details__download-icon"><span class="fa fa-trophy"></span></div>
                                <div class="department-details__download-text">
                                    <p>Annual Award for excellence</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> -->
            <!--Feature Four Single End-->
        </div>
    </div>
</section>

@include('e&it_views.include.table')
@endsection