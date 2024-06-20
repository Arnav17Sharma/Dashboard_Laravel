@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT')
@section('content')
    <section class="page-header" style="height: 30vh;">

    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Aadhar Authentication System</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Chips Activity</a></li>
                <li><span>/</span></li>
                <li>Aadhar Authentication System</li>
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
                                    <h4>Aadhaar Registration and Authentication Services-</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">

                                        <li>
                                            The Aadhaar User Agency, being operated by the Unique Identification
                                            Authority of India (PPI), is being used by Chips to authenticate the
                                            beneficiaries of various schemes under the state with Aadhaar. Due to this,
                                            only the eligible beneficiaries of government schemes are getting the
                                            benefits of the schemes. The Department of Electronics and Information
                                            Technology is acting as the Registrar and Chips Registration Agency for
                                            Aadhaar Enrollment and Updation. Along with this, Chips is acting as a
                                            consumer authentication agency for Aadhaar authentication services.

                                            <br>
                                            Aadhar registration and updating work is being done by establishing
                                            permanent Aadhaar registration centers in government offices. About 11.55
                                            lakh children in the age group of zero to five years, about 68.94 lakh
                                            children in the age group of five to eighteen and about 02 crore 08 lakh in
                                            the age group of above eighteen years i.e. total about 02 crore 89 lakh
                                            people have been registered.
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