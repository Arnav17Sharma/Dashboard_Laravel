@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT | Home')
@section('content')
<section class="page-header" style="height: 30vh;">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top: 50px;">
            <h2>Acts & Rules</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><span>/</span></li>
                <li>Acts & Rules</li>
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
                        <h3 class="department-details__title">Acts & Rules</h3>
                    </div>
                    <div class="faq-one__right mt-3">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Policy related topics enunciated in the department</h4>
                                </div>
                                <div class="accrodion-content"
                                    style="display: none;text-align: justify;text-justify: inter-word;">
                                    <div class="inner">
                                        <p>
                                        <ol>
                                            <li>Unique Identification Scheme (Aadhaar)</li>
                                            <li>Use of information technology to improve civil services.</li>
                                            <li>Establishment of software technology parks and other similar
                                                institutions.</li>
                                            <li>Development of Geographic Information System and its proper use in all
                                                departments.</li>
                                            <li>Organizing seminars, workshops, conferences etc. related to information
                                                technology.</li>
                                            <li>Coordination for the implementation of state's information technology
                                                policy and action plans.</li>
                                            <li>Consultancy regarding information technology programs and schemes in
                                                various departments doing.</li>
                                            <li>Policy promotion and assistance related to electronic hardware and
                                                semiconductor manufacturing.</li>
                                            <li>Coordinating with information technology institutions and organizations
                                                located in India and abroad.</li>
                                            <li>To develop the state as a suitable market for promoting investment
                                                related to information technology sector</li>
                                            <li>To make computerized automation system in all the departments of the
                                                state government, urban and rural and local bodies.</li>
                                            <li>To promote the development of information technology in the state and
                                                implement the work plan of information technology in the socio-economic
                                                field.</li>
                                            <li>All matters relating to services to which the Department relates (except
                                                those allotted to the Finance Department and General Administration
                                                Department).</li>
                                            <li>Establishment of rural internet and other internet based information
                                                systems, including establishment of information booths (kiosks) for
                                                various services.</li>
                                            <li>To encourage and promote research and development work related to
                                                information technology, which includes increasing the use of Hindi in
                                                information technology.</li>
                                            <li>To create awareness among the general public to ensure complete and
                                                cost-effective use of information technology and to remove doubts
                                                related to information technology.</li>
                                            <li>For manpower planning and human resource development in various
                                                departments as mentioned above Objectives (especially information
                                                technology related) support activities</li>
                                            <li>Promotion of information technology activities relating to dissemination
                                                of data and multi-media traffic through optical fiber cables,
                                                telecommunication channels, wireless and satellite.</li>
                                            <li>To establish coordination and network between investors, industry /
                                                business organizations and financial institutions for the development of
                                                information technology in the public and private sector.</li>
                                            <li>Coordinating between all the departments of the state government, urban
                                                and rural local bodies for regional and inter-regional promotion of
                                                information technology and giving guidelines for facilitating
                                                information technology and its wide dissemination</li>
                                        </ol>
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Acts of the Department</h4>
                                </div>
                                <div class="accrodion-content" style="display: none;">
                                    <div class="inner">
                                        <p>
                                        <ol>
                                            <li>Chhattisgarh Aadhaar (Targeted Delivery of Financial and Other
                                                Subsidies, Benefits and Services and Protection of Information) Act
                                                2018.</li>
                                        </ol>
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Various policies of the department </h4>
                                </div>
                                <div class="accrodion-content" style="display: none;">
                                    <div class="inner">
                                        <p>
                                        <ol>
                                            <li>Policy on retention and preservation of electronic records by the
                                                departments of the Government of Chhattisgarh.</li>
                                            <li>Digital Signature Usage Policy.</li>
                                            <li>Internet and e-mail usage policy.</li>
                                            <li>Declaring vulnerable information infrastructure.</li>
                                            <li>Declaring the vulnerable information infrastructure as a secure system.
                                            </li>
                                            <li>Policy for use of Government to Government (G2G) video conferencing.
                                            </li>
                                            <li>Policy on Investment in Electronics, Information Technology and
                                                Information Technology Enabled Services, 2014-19.</li>
                                            <li>Chhattisgarh's Right Way Policy, 2015 to develop telecommunication
                                                infrastructure.</li>
                                            <li>Innovation and Entrepreneurship Development Policy, 2015.</li>
                                            <li>Open Application Program Interface (API) for Government of Chhattisgarh.
                                                The above criteria and policies are available on full-screen.</li>
                                        </ol>
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
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