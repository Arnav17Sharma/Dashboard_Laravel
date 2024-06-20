@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT | Notice')
@section('content')

<section class="page-header" style="height: 30vh;">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top: 50px;">
            <h2>Notice</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Notice Board</a></li>
                <li><span>/</span></li>
                <li>Notice</li>
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
                        <h3 class="department-details__title">Notice</h3>
                    </div>
                    <div class="faq-one__right mt-3">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h3>{{ $notice->title }}</h3>
                                    <hr>
                                    <h6>Type -
                                        @foreach ($types as $type)
                                        @if ($type->id == $notice->type)
                                        {{ $type->type }}
                                        @endif
                                        @endforeach
                                    </h6>
                                    <h6>Date - {{ $notice->created_at }}</h6>
                                    <h6>Dept. - {{ $notice->department }}</h6>
                                    <hr>
                                    <h6>Attachments/URLs</h6>
                                    <p class="mt-3">
                                    <ul>
                                        @if (is_null($notice->url))
                                        @foreach ($attachments as $attachment)
                                        <li>
                                            @php
                                            $l = explode("/", $attachment->attachment_url);
                                            $fileName = end($l);
                                            @endphp
                                            <a href="{{ url($attachment->attachment_url) }}"
                                                target="_block">{{$fileName}}</a>
                                        </li>
                                        @endforeach
                                        @else
                                        <a href="{{ url($notice->url) }}" target="_block">{{$notice->url}}</a>
                                        @endif
                                    </ul>
                                    </p>
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
                    <h3 class="department-details__download-title">Notice &amp; Awards</h3>
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