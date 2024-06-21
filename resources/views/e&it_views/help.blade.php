@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT')
@section('content')
<section class="page-header" style="height: 30vh;">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top: 50px;">
            <h2>Help</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Home</a></li>
                <li><span>/</span></li>
                <li>Help</li>
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
                        <h3 class="department-details__title">Help</h3>
                    </div>
                    <div class="faq-one__right mt-3">
                        <h5 class="mt-2">Viewing different file formats</h5>
                        <hr>
                        <div class="table-responsive">
                            <table class="table cart-table text-center">
                                <thead>
                                    <tr>
                                        <th style="font-size:14px;padding-bottom: 10px;" class="font-weight-bold">
                                            Document Type</th>
                                        <th style="font-size:14px;padding-bottom: 10px;" class="font-weight-bold">
                                            Download</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="line-height: 16px;">
                                        <td style="font-size:14px;padding-top: 10px;padding-bottom: 10px;">Portable
                                            Document Format (P.D.F.) content</td>
                                        <td style="font-size:14px;padding-top: 10px;padding-bottom: 10px;"><a
                                                href="https://get.adobe.com/reader/otherversions/">Adobe Acrobat
                                                Reader</a></td>
                                    </tr>
                                    <tr style="line-height: 16px;">
                                        <td style="font-size:14px;padding-top: 10px;padding-bottom: 10px;">Word files
                                        </td>
                                        <td style="font-size:14px;padding-top: 10px;padding-bottom: 10px;"><a
                                                href="https://www.microsoft.com/en-us/download/">Word Viewer Microsoft
                                                Office Compatibility Pack for Word (for 2007 version)</a></td>
                                    </tr>
                                    <tr style="line-height: 16px;">
                                        <td style="font-size:14px;padding-top: 10px;padding-bottom: 10px;">Excel files
                                        </td>
                                        <td style="font-size:14px;padding-top: 10px;padding-bottom: 10px;"><a
                                                href="https://www.microsoft.com/en-us/download/"> Excel Viewer Microsoft
                                                Office Compatibility Pack for Excel (for 2007 version)</a></td>
                                    </tr>
                                    <tr style="line-height: 16px;">
                                        <td style="font-size:14px;padding-top: 10px;padding-bottom: 10px;">PowerPoint
                                            presentations</td>
                                        <td style="font-size:14px;padding-top: 10px;padding-bottom: 10px;"><a
                                                href="https://www.microsoft.com/en-us/download/">PowerPoint Viewer
                                                Microsoft Office Compatibility Pack for PowerPoint (for 2007
                                                version)</a></td>
                                    </tr>
                                    <tr style="line-height: 16px;">
                                        <td style="font-size:14px;padding-top: 10px;padding-bottom: 10px;">Flash content
                                        </td>
                                        <td style="font-size:14px;padding-top: 10px;padding-bottom: 10px;"><a
                                                href="https://get.adobe.com/flashplayer/">Adobe Flash Player(Other
                                                Government website that opens in a new window)</a></td>
                                    </tr>
                                    <tr style="line-height: 16px;">
                                        <td style="font-size:14px;padding-top: 10px;padding-bottom: 10px;">Audio Files
                                        </td>
                                        <td style="font-size:14px;padding-top: 10px;padding-bottom: 10px;"><a
                                                href="https://www.microsoft.com/en-in/download/windows-media-player-details.aspx">Windows
                                                Media Player</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h5 class="mt-4">Accessibility Help</h5>
                        <hr>
                        <p>
                            Use the accessibility options provided by this Website to control the screen display. These
                            options allow increasing the text spacing, changing the text size and colour scheme for
                            clear visibility and better readability.
                        </p>

                        <h5 class="mt-4">Text Size Icons</h5>
                        <hr>
                        <p>
                            Following different options are provided in the form of icons which are available on the top
                            of each page:
                        </p>
                        <img src="" alt="">
                        <p style="line-height: 10px;"> Increase text size Increase text size: Allows to increase the
                            text size up to one level.</p>
                        <img src="" alt="">
                        <p style="line-height: 10px;"> Decrease font size/Decrease text size: Allows to decrease the
                            text size up to one level</p>
                        <img src="" alt="">
                        <p style="line-height: 10px;"> Normal text size: Allows to set default text size</p>

                        <h5 class="mt-4">Changing the Colour Scheme</h5>
                        <hr>
                        <p>
                            Changing the colour scheme refers to applying a suitable background and text colour that
                            ensures clear readability. There are three options provided to change the colour scheme.
                            These are:
                        </p>
                        <img src="" alt="">
                        <p style="line-height: 10px;"> Default contrast scheme</p>
                        <img src="" alt="">
                        <p style="line-height: 10px;"> Yellow text on Grey background</p>
                        <img src="" alt="">
                        <p style="line-height: 10px;"> Yellow text on black backgroundYellow text on black background
                        </p>
                        <br>
                        <p>
                            <b>Note:</b>
                            Changing the colour scheme does not affect the images on the screen.
                        </p>
                    </div>
                </div>
            </div>
            <!--Feature Four Single End-->
            <!--Feature Four Single Start-->

            @include('e&it_views.include.footer_sidebar')


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

@endsection