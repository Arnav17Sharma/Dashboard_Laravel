@extends('verified_views.layout')
@section('title', 'Calendar')
@section('csslinks')
<!--! END:  Apps Title-->
<!--! BEGIN: Favicon-->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico'); }}" />
<!--! END: Favicon-->
<!--! BEGIN: Bootstrap CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css'); }}" />
<!--! END: Bootstrap CSS-->
<!--! BEGIN: Vendors CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/vendors.min.css'); }}" />
<link type="text/css" rel="stylesheet" href="{{ asset('assets/vendors/css/tui-calendar.min.css'); }}">
<link type="text/css" rel="stylesheet" href="{{ asset('assets/vendors/css/tui-theme.min.css'); }}">
<link type="text/css" rel="stylesheet" href="{{ asset('assets/vendors/css/tui-time-picker.min.css'); }}">
<link type="text/css" rel="stylesheet" href="{{ asset('assets/vendors/css/tui-date-picker.min.css'); }}">
<!--! END: Vendors CSS-->
<!--! BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme.min.css');}}" />
<!--! END: Custom CSS-->
<!--! HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries !-->
<!--! WARNING: Respond.js doesn"t work if you view the page via file: !-->
<!--[if lt IE 9]>
    <script src="https:oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https:oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
@endsection

@section('content')
<div class="page-header">
    <div class="page-header-left d-flex align-items-center">
        <div class="page-header-title">
            <h5 class="m-b-10">Calendar</h5>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Calendar</li>
        </ul>
    </div>
</div>
<div class="main-content d-flex">
    <!-- [ Content Sidebar ] start -->
    <div class="content-sidebar content-sidebar-xl ps ps--active-y" data-scrollbar-target="#psScrollbarInit">
        <div class="content-sidebar-header bg-white sticky-top hstack justify-content-between">
            <h4 class="fw-bolder mb-0">Calendar</h4>
            <a href="javascript:void(0);" class="app-sidebar-close-trigger d-flex">
                <i class="feather-x"></i>
            </a>
        </div>
        <div class="content-sidebar-header">
            <a href="javascript:void(0);" id="btn-new-schedule" class="btn btn-primary w-100" data-toggle="modal">
                <i class="feather-calendar me-2"></i>
                <span>New Event</span>
            </a>
        </div>
        <div class="content-sidebar-body">
            <div id="lnb-calendars" class="lnb-calendars">
                <div class="lnb-calendars-item">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="viewAllSchedules" value="all"
                            checked="checked">
                        <label class="custom-control-label c-pointer" for="viewAllSchedules">
                            <span class="fs-13 fw-semibold lh-lg" style="margin-top: -2px">View All
                                Schedules</span>
                        </label>
                    </div>
                </div>
                <div id="calendarList" class="lnb-calendars-d1">
                    <div class="lnb-calendars-item"><label><input type="checkbox"
                                class="tui-full-calendar-checkbox-round" value="1" checked=""><span
                                style="border-color: #5485e4; background-color: #5485e4;"></span><span>Office</span></label>
                    </div>
                    <div class="lnb-calendars-item"><label><input type="checkbox"
                                class="tui-full-calendar-checkbox-round" value="2" checked=""><span
                                style="border-color: #25b865; background-color: #25b865;"></span><span>Family</span></label>
                    </div>
                    <div class="lnb-calendars-item"><label><input type="checkbox"
                                class="tui-full-calendar-checkbox-round" value="3" checked=""><span
                                style="border-color: #d13b4c; background-color: #d13b4c;"></span><span>Friend</span></label>
                    </div>
                    <div class="lnb-calendars-item"><label><input type="checkbox"
                                class="tui-full-calendar-checkbox-round" value="4" checked=""><span
                                style="border-color: #17a2b8; background-color: #17a2b8;"></span><span>Travel</span></label>
                    </div>
                    <div class="lnb-calendars-item"><label><input type="checkbox"
                                class="tui-full-calendar-checkbox-round" value="5" checked=""><span
                                style="border-color: #e49e3d; background-color: #e49e3d;"></span><span>Privete</span></label>
                    </div>
                    <div class="lnb-calendars-item"><label><input type="checkbox"
                                class="tui-full-calendar-checkbox-round" value="6" checked=""><span
                                style="border-color: #5856d6; background-color: #5856d6;"></span><span>Holidays</span></label>
                    </div>
                    <div class="lnb-calendars-item"><label><input type="checkbox"
                                class="tui-full-calendar-checkbox-round" value="7" checked=""><span
                                style="border-color: #3dc7be; background-color: #3dc7be;"></span><span>Company</span></label>
                    </div>
                    <div class="lnb-calendars-item"><label><input type="checkbox"
                                class="tui-full-calendar-checkbox-round" value="8" checked=""><span
                                style="border-color: #475e77; background-color: #475e77;"></span><span>Birthdays</span></label>
                    </div>
                </div>
            </div>
            <h2 class="px-4 fs-10 fw-bold text-uppercase my-4 text-muted text-spacing-1 text-truncate-1-line">
                Events &amp; Schedules</h2>
            <!--! BEGIN: [Events] !-->
            <div class="p-4 border-top c-pointer single-item schedule-item">
                <div class="d-flex align-items-start">
                    <div
                        class="wd-50 ht-50 bg-soft-success text-success lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date">
                        <span class="fs-18 fw-bold mb-1 d-block">17</span>
                        <span class="fs-10 text-semibold text-uppercase d-block">Dec</span>
                    </div>
                    <div class="ms-3 schedule-body">
                        <div class="text-dark">
                            <h6 class="fw-bold my-1 text-truncate-1-line">Company Standup Meeting</h6>
                            <span class="fs-11 fw-normal text-muted">8:00am - 9:00am, Engineering Room</span>
                            <p class="fs-12 fw-normal text-muted my-3 text-truncate-2-line">Lorem ipsum quia
                                dolor sit amet, consectetur, adipisci velit, abore et dolore magnam aliquam
                                quaerat voluptatem.</p>
                        </div>
                        <div class="img-group lh-0 ms-3 justify-content-start">
                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" title="" data-bs-original-title="Janette Dalton">
                                <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                            </a>
                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" title="" data-bs-original-title="Michael Ksen">
                                <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                            </a>
                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" title="" data-bs-original-title="Socrates Itumay">
                                <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                            </a>
                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" title="" data-bs-original-title="Marianne Audrey">
                                <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                            </a>
                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" title="" data-bs-original-title="Marianne Audrey">
                                <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                            </a>
                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" title="" data-bs-original-title="Explorer More">
                                <i class="feather-more-horizontal"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--! BEGIN: [Events] !-->
            <div class="p-4 border-top c-pointer single-item schedule-item">
                <div class="d-flex align-items-start">
                    <div
                        class="wd-50 ht-50 bg-soft-warning text-warning lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date">
                        <span class="fs-18 fw-bold mb-1 d-block">30</span>
                        <span class="fs-10 text-semibold text-uppercase d-block">Dec</span>
                    </div>
                    <div class="ms-3 schedule-body">
                        <div class="text-dark">
                            <h6 class="fw-bold my-1 text-truncate-1-line">Web Design Presentation</h6>
                            <span class="fs-11 fw-normal text-muted">2:00pm - 5:00pm, Virtual Platform</span>
                            <p class="fs-12 fw-normal text-muted my-3 text-truncate-2-line">Lorem ipsum quia
                                dolor sit amet, consectetur, adipisci velit, abore et dolore magnam aliquam
                                quaerat voluptatem.</p>
                        </div>
                        <div class="img-group lh-0 ms-3 justify-content-start">
                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" title="" data-bs-original-title="Janette Dalton">
                                <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                            </a>
                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" title="" data-bs-original-title="Michael Ksen">
                                <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                            </a>
                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" title="" data-bs-original-title="Socrates Itumay">
                                <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                            </a>
                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" title="" data-bs-original-title="Marianne Audrey">
                                <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                            </a>
                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" title="" data-bs-original-title="Marianne Audrey">
                                <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                            </a>
                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" title="" data-bs-original-title="Explorer More">
                                <i class="feather-more-horizontal"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--! BEGIN: [Events] !-->
            <div class="p-4 border-top c-pointer single-item schedule-item">
                <div class="d-flex align-items-start">
                    <div
                        class="wd-50 ht-50 bg-soft-primary text-primary lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date">
                        <span class="fs-18 fw-bold mb-1 d-block">21</span>
                        <span class="fs-10 text-semibold text-uppercase d-block">Dec</span>
                    </div>
                    <div class="ms-3 schedule-body">
                        <div class="text-dark">
                            <h6 class="fw-bold my-1 text-truncate-1-line">Standup Design Presentation</h6>
                            <span class="fs-11 fw-normal text-muted">2:00pm - 5:00pm, Virtual Platform</span>
                            <p class="fs-12 fw-normal text-muted my-3 text-truncate-2-line">Lorem ipsum quia
                                dolor sit amet, consectetur, adipisci velit, abore et dolore magnam aliquam
                                quaerat voluptatem.</p>
                        </div>
                        <div class="img-group lh-0 ms-3 justify-content-start">
                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" title="" data-bs-original-title="Janette Dalton">
                                <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                            </a>
                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" title="" data-bs-original-title="Michael Ksen">
                                <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                            </a>
                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" title="" data-bs-original-title="Socrates Itumay">
                                <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                            </a>
                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" title="" data-bs-original-title="Marianne Audrey">
                                <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                            </a>
                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" title="" data-bs-original-title="Marianne Audrey">
                                <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                            </a>
                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" title="" data-bs-original-title="Explorer More">
                                <i class="feather-more-horizontal"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--! BEGIN: [Events] !-->
            <div class="p-4 border-top c-pointer single-item schedule-item">
                <div class="d-flex align-items-start">
                    <div
                        class="wd-50 ht-50 bg-soft-danger text-danger lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date">
                        <span class="fs-18 fw-bold mb-1 d-block">14</span>
                        <span class="fs-10 text-semibold text-uppercase d-block">Dec</span>
                    </div>
                    <div class="ms-3 schedule-body">
                        <div class="text-dark">
                            <h6 class="fw-bold my-1 text-truncate-1-line">Company Start Concept</h6>
                            <span class="fs-11 fw-normal text-muted">8:00am - 9:00am, Engineering Room</span>
                            <p class="fs-12 fw-normal text-muted my-3 text-truncate-2-line">Lorem ipsum quia
                                dolor sit amet, consectetur, adipisci velit, abore et dolore magnam aliquam
                                quaerat voluptatem.</p>
                        </div>
                        <div class="img-group lh-0 ms-3 justify-content-start">
                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" title="" data-bs-original-title="Janette Dalton">
                                <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                            </a>
                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" title="" data-bs-original-title="Michael Ksen">
                                <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                            </a>
                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" title="" data-bs-original-title="Socrates Itumay">
                                <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                            </a>
                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" title="" data-bs-original-title="Marianne Audrey">
                                <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                            </a>
                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" title="" data-bs-original-title="Marianne Audrey">
                                <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                            </a>
                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" title="" data-bs-original-title="Explorer More">
                                <i class="feather-more-horizontal"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 616px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 268px;"></div>
        </div>
    </div>
    <!-- [ Content Sidebar  ] end -->
    <!-- [ Main Area  ] start -->
    <div class="content-area ps ps--active-y" data-scrollbar-target="#psScrollbarInit">
        <div class="content-area-header sticky-top">
            <div class="page-header-left d-flex align-items-center gap-2">
                <a href="javascript:void(0);" class="app-sidebar-open-trigger me-2">
                    <i class="feather-align-left fs-20"></i>
                </a>
                <div id="menu" class="d-flex align-items-center justify-content-between">
                    <div class="d-flex calendar-action-btn">
                        <div class="dropdown me-1">
                            <button id="dropdownMenu-calendarType" class="dropdown-toggle calendar-dropdown-btn"
                                type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                data-bs-offset="0,17">
                                <i id="calendarTypeIcon" class="calendar-icon feather feather-grid fs-12 me-1"></i>
                                <span id="calendarTypeName">Monthly</span>
                            </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu-calendarType">
                                <li role="presentation">
                                    <div class="dropdown-item c-pointer" role="menuitem" data-action="toggle-daily">
                                        <i class="feather-list calendar-icon me-3"></i>
                                        <span>Daily</span>
                                    </div>
                                </li>
                                <li role="presentation">
                                    <div class="dropdown-item c-pointer" role="menuitem" data-action="toggle-weekly">
                                        <i class="feather-umbrella calendar-icon me-3"></i>
                                        <span>Weekly</span>
                                    </div>
                                </li>
                                <li role="presentation">
                                    <div class="dropdown-item c-pointer" role="menuitem" data-action="toggle-weeks2">
                                        <i class="feather-sliders calendar-icon me-3"></i>
                                        <span>Weeks (2)</span>
                                    </div>
                                </li>
                                <li role="presentation">
                                    <div class="dropdown-item" role="menuitem" data-action="toggle-weeks3">
                                        <i class="feather-framer calendar-icon me-3"></i>
                                        <span>Weeks (3)</span>
                                    </div>
                                </li>
                                <li role="presentation">
                                    <div class="dropdown-item c-pointer" role="menuitem" data-action="toggle-monthly">
                                        <i class="feather-grid calendar-icon me-3"></i>
                                        <span>Monthly</span>
                                    </div>
                                </li>
                                <li role="presentation" class="dropdown-divider"></li>
                                <li role="presentation">
                                    <div class="dropdown-item" role="menuitem" data-action="toggle-workweek">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input chalendar-checkbox"
                                                id="viewWeekendsSchedules" value="toggle-workweek" checked="checked">
                                            <label class="custom-control-label c-pointer" for="viewWeekendsSchedules">
                                                <span class="fs-12 fw-bold">Show Weekends</span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li role="presentation">
                                    <div class="dropdown-item" role="menuitem" data-action="toggle-start-day-1">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input chalendar-checkbox"
                                                id="viewStartSchedules" value="toggle-start-day-1">
                                            <label class="custom-control-label c-pointer" for="viewStartSchedules">
                                                <span class="fs-12 fw-bold">Start Week on Monday</span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li role="presentation">
                                    <div class="dropdown-item" role="menuitem" data-action="toggle-narrow-weekend">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input chalendar-checkbox"
                                                id="viewNarrowerSchedules" value="toggle-narrow-weekend">
                                            <label class="custom-control-label c-pointer" for="viewNarrowerSchedules">
                                                <span class="fs-12 fw-bold">Narrower than weekdays</span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="menu-navi d-none d-sm-flex">
                            <button type="button" class="move-today" data-action="move-today">
                                <i class="feather-clock calendar-icon me-1 fs-12" data-action="move-today"></i>
                                <span>Today</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-header-right ms-auto">
                <div class="hstack gap-2">
                    <div id="renderRange" class="render-range d-none d-sm-flex">31.05.24</div>
                    <div class="btn-group gap-1 menu-navi" role="group">
                        <button type="button" class="avatar-text avatar-md move-day" data-action="move-prev">
                            <i class="feather-chevron-left fs-12" data-action="move-prev"></i>
                        </button>
                        <button type="button" class="avatar-text avatar-md move-day" data-action="move-next">
                            <i class="feather-chevron-right fs-12" data-action="move-next"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-area-body p-0">
            <div id="tui-calendar-init">
                <div class="tui-full-calendar-layout tui-view-1 tui-view-9 tui-view-14 tui-view-17"
                    style="background-color: white;">
                    <div class="tui-full-calendar-month tui-view-4 tui-view-5 tui-full-calendar-vlayout-container">
                        <div class="tui-view-7" data-panel-index="0" style="height: 31px;">
                            <div class="tui-full-calendar-month-dayname"
                                style="border-top: 1px solid #ebebf3; height: 31px; font-size: 12px; background-color: inherit; text-align: left; font-weight: normal;">
                                <div class="tui-full-calendar-month-dayname-item" style="position: absolute;
                width: 14.285714285714286%;
                left: 0%;
                padding-left: 10px;
                padding-right: 0;
                line-height: 31px;
                border-right: none;
                ">
                                    <span class="tui-full-calendar-holiday-sun" style="color: #d13b4c;">
                                        Sun
                                    </span>
                                </div>
                                <div class="tui-full-calendar-month-dayname-item" style="position: absolute;
                width: 14.285714285714286%;
                left: 14.285714285714286%;
                padding-left: 10px;
                padding-right: 0;
                line-height: 31px;
                border-right: none;
                ">
                                    <span class="" style="color: #475e77;">
                                        Mon
                                    </span>
                                </div>
                                <div class="tui-full-calendar-month-dayname-item" style="position: absolute;
                width: 14.285714285714286%;
                left: 28.571428571428573%;
                padding-left: 10px;
                padding-right: 0;
                line-height: 31px;
                border-right: none;
                ">
                                    <span class="" style="color: #475e77;">
                                        Tue
                                    </span>
                                </div>
                                <div class="tui-full-calendar-month-dayname-item" style="position: absolute;
                width: 14.285714285714286%;
                left: 42.85714285714286%;
                padding-left: 10px;
                padding-right: 0;
                line-height: 31px;
                border-right: none;
                ">
                                    <span class="" style="color: #475e77;">
                                        Wed
                                    </span>
                                </div>
                                <div class="tui-full-calendar-month-dayname-item" style="position: absolute;
                width: 14.285714285714286%;
                left: 57.142857142857146%;
                padding-left: 10px;
                padding-right: 0;
                line-height: 31px;
                border-right: none;
                ">
                                    <span class="" style="color: #475e77;">
                                        Thu
                                    </span>
                                </div>
                                <div class="tui-full-calendar-month-dayname-item" style="position: absolute;
                width: 14.285714285714286%;
                left: 71.42857142857143%;
                padding-left: 10px;
                padding-right: 0;
                line-height: 31px;
                border-right: none;
                ">
                                    <span class="" style="color: #475e77;">
                                        Fri
                                    </span>
                                </div>
                                <div class="tui-full-calendar-month-dayname-item" style="position: absolute;
                width: 14.285714285714286%;
                left: 85.71428571428572%;
                padding-left: 10px;
                padding-right: 0;
                line-height: 31px;
                ">
                                    <span class="tui-full-calendar-holiday-sat" style="color: #475e77;">
                                        Sat
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="tui-view-8" data-panel-index="1" data-auto-height="true" style="height: 915.2px;">
                            <div class="tui-full-calendar-month-week-item" style="height: 16.6667%;">
                                <div class="tui-full-calendar-weekday tui-view-51">
                                    <div class="tui-full-calendar-weekday-border" style="
    border-top: 1px solid #ebebf3;
"></div>
                                    <div class="tui-full-calendar-weekday-grid">
                                        <div class="tui-full-calendar-weekday-grid-line tui-full-calendar-holiday-sun tui-full-calendar-near-month-day tui-full-calendar-extra-date"
                                            style="width:14.285714285714286%; left:0%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: rgba(255, 64, 64, 0.4);"><span
                                                        class="tui-full-calendar-weekday-grid-date">28</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: rgba(255, 64, 64, 0.4);"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day tui-full-calendar-extra-date"
                                            style="width:14.285714285714286%; left:14.285714285714286%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: rgba(51, 51, 51, 0.4);"><span
                                                        class="tui-full-calendar-weekday-grid-date">29</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: rgba(51, 51, 51, 0.4);"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day tui-full-calendar-extra-date"
                                            style="width:14.285714285714286%; left:28.571428571428573%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: rgba(51, 51, 51, 0.4);"><span
                                                        class="tui-full-calendar-weekday-grid-date">30</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: rgba(51, 51, 51, 0.4);"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:42.85714285714286%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #475e77;"><span
                                                        class="tui-full-calendar-weekday-grid-date">1</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #475e77;"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:57.142857142857146%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #475e77;"><span
                                                        class="tui-full-calendar-weekday-grid-date">2</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #475e77;"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:71.42857142857143%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #475e77;"><span
                                                        class="tui-full-calendar-weekday-grid-date">3</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #475e77;"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line tui-full-calendar-holiday-sat tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:85.71428571428572%; background-color: inherit; font-size: 14px;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #475e77;"><span
                                                        class="tui-full-calendar-weekday-grid-date">4</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #475e77;"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tui-full-calendar-weekday-schedules">


                                        <div data-id="25" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-25
            
            " style="top:34px;left:85.71428571428572%;width:14.285714285714286%;height:0px;
                margin-top:2px">
                                            <div data-schedule-id="ce9f1c8b-965a-5682-9e42-98bbf60236e3"
                                                data-calendar-id="2" class="tui-full-calendar-weekday-schedule " style="height:24px; line-height:24px; border-radius: 3px;
                    margin-left: 8px;
                    margin-right: 8px;
                    color:#25b865; background-color:#25b865; border-color:#25b865;
                    ">
                                                <span class="tui-full-calendar-weekday-schedule-title"
                                                    data-title="Bu fuctohuk vekwowa." title="Bu fuctohuk vekwowa."><span
                                                        class="calendar-font-icon ic-user-b"></span> Bu fuctohuk
                                                    vekwowa.</span>
                                                <span class="tui-full-calendar-weekday-resize-handle handle-y"
                                                    style="line-height: 24px;">&nbsp;</span>
                                            </div>
                                        </div>



                                        <div data-id="23" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-23
            
            " style="top:34px;left:14.285714285714286%;width:14.285714285714286%;height:0px;
                margin-top:2px">
                                            <div data-schedule-id="9a1efe8b-1dbc-5788-8e4b-eac6ff328d52"
                                                data-calendar-id="1"
                                                class="tui-full-calendar-weekday-schedule tui-full-calendar-weekday-schedule-time"
                                                style="height:24px; line-height:24px; ">
                                                <span class="tui-full-calendar-weekday-schedule-bullet" style="top: 8px;
                                background:#5485e4
                            "></span>
                                                <span class="tui-full-calendar-weekday-schedule-title" style="
                                color:
                            " data-title="Filleiji evuwovjut vikotej."
                                                    title="Filleiji evuwovjut vikotej."><strong>18:00</strong>
                                                    <span class="calendar-font-icon ic-readonly-b"></span>
                                                    Filleiji evuwovjut vikotej.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tui-full-calendar-month-week-item" style="height: 16.6667%;">
                                <div class="tui-full-calendar-weekday tui-view-52">
                                    <div class="tui-full-calendar-weekday-border" style="
    border-top: 1px solid #ebebf3;
"></div>
                                    <div class="tui-full-calendar-weekday-grid">
                                        <div class="tui-full-calendar-weekday-grid-line tui-full-calendar-holiday-sun tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:0%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #d13b4c;"><span
                                                        class="tui-full-calendar-weekday-grid-date">5</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #d13b4c;"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:14.285714285714286%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #475e77;"><span
                                                        class="tui-full-calendar-weekday-grid-date">6</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #475e77;"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:28.571428571428573%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #475e77;"><span
                                                        class="tui-full-calendar-weekday-grid-date">7</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #475e77;"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:42.85714285714286%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #475e77;"><span
                                                        class="tui-full-calendar-weekday-grid-date">8</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #475e77;"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:57.142857142857146%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #475e77;"><span
                                                        class="tui-full-calendar-weekday-grid-date">9</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #475e77;"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:71.42857142857143%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #475e77;"><span
                                                        class="tui-full-calendar-weekday-grid-date">10</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #475e77;"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line tui-full-calendar-holiday-sat tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:85.71428571428572%; background-color: inherit; font-size: 14px;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #475e77;"><span
                                                        class="tui-full-calendar-weekday-grid-date">11</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #475e77;"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tui-full-calendar-weekday-schedules">


                                        <div data-id="43" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-43
            
            " style="top:34px;left:57.142857142857146%;width:42.85714285714286%;height:0px;
                margin-top:2px">
                                            <div data-schedule-id="8cfd6aca-18f3-5978-abe1-a7756a9e821c"
                                                data-calendar-id="8" class="tui-full-calendar-weekday-schedule " style="height:24px; line-height:24px; border-radius: 3px;
                    margin-left: 8px;
                    margin-right: 8px;
                    color:#475e77; background-color:#475e77; border-color:#475e77;
                    ">
                                                <span class="tui-full-calendar-weekday-schedule-title"
                                                    data-title="Vetvovna hoecuke jetbikje."
                                                    title="Vetvovna hoecuke jetbikje."><span
                                                        class="calendar-font-icon ic-user-b"></span> Vetvovna
                                                    hoecuke jetbikje.</span>
                                                <span class="tui-full-calendar-weekday-resize-handle handle-y"
                                                    style="line-height: 24px;">&nbsp;</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tui-full-calendar-month-week-item" style="height: 16.6667%;">
                                <div class="tui-full-calendar-weekday tui-view-53">
                                    <div class="tui-full-calendar-weekday-border" style="
    border-top: 1px solid #ebebf3;
"></div>
                                    <div class="tui-full-calendar-weekday-grid">
                                        <div class="tui-full-calendar-weekday-grid-line tui-full-calendar-holiday-sun tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:0%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #d13b4c;"><span
                                                        class="tui-full-calendar-weekday-grid-date">12</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #d13b4c;"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:14.285714285714286%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #475e77;"><span
                                                        class="tui-full-calendar-weekday-grid-date">13</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #475e77;"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:28.571428571428573%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #475e77;"><span
                                                        class="tui-full-calendar-weekday-grid-date">14</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #475e77;"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:42.85714285714286%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #475e77;"><span
                                                        class="tui-full-calendar-weekday-grid-date">15</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #475e77;"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:57.142857142857146%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #475e77;"><span
                                                        class="tui-full-calendar-weekday-grid-date">16</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #475e77;"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:71.42857142857143%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #475e77;"><span
                                                        class="tui-full-calendar-weekday-grid-date">17</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #475e77;"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line tui-full-calendar-holiday-sat tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:85.71428571428572%; background-color: inherit; font-size: 14px;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #475e77;"><span
                                                        class="tui-full-calendar-weekday-grid-date">18</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #475e77;"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tui-full-calendar-weekday-schedules">


                                        <div data-id="44" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-44
            
            " style="top:34px;left:28.571428571428573%;width:42.85714285714286%;height:0px;
                margin-top:2px">
                                            <div data-schedule-id="786563cf-6531-5f35-8e8a-99e8fc24ad4c"
                                                data-calendar-id="8" class="tui-full-calendar-weekday-schedule " style="height:24px; line-height:24px; border-radius: 3px;
                    margin-left: 8px;
                    margin-right: 8px;
                    color:#475e77; background-color:#475e77; border-color:#475e77;
                    ">
                                                <span class="tui-full-calendar-weekday-schedule-title"
                                                    data-title="Ada fekob etdus." title="Ada fekob etdus."><span
                                                        class="calendar-font-icon ic-location-b"></span> Ada
                                                    fekob etdus.</span>
                                                <span class="tui-full-calendar-weekday-resize-handle handle-y"
                                                    style="line-height: 24px;">&nbsp;</span>
                                            </div>
                                        </div>


                                        <div data-id="35" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-35
            
            " style="top:60px;left:28.571428571428573%;width:14.285714285714286%;height:0px;
                margin-top:2px">
                                            <div data-schedule-id="3848acdc-5918-5a3a-9c39-2c46bc8846b1"
                                                data-calendar-id="5"
                                                class="tui-full-calendar-weekday-schedule tui-full-calendar-weekday-schedule-time"
                                                style="height:24px; line-height:24px; ">
                                                <span class="tui-full-calendar-weekday-schedule-bullet" style="top: 8px;
                                background:#e49e3d
                            "></span>
                                                <span class="tui-full-calendar-weekday-schedule-title" style="
                                color:
                            " data-title="Kafve lordotuz facuw." title="Kafve lordotuz facuw."><strong>13:30</strong>
                                                    <span class="calendar-font-icon ic-lock-b"></span>
                                                    Private</span>
                                            </div>
                                        </div>



                                        <div data-id="28" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-28
            
            " style="top:34px;left:14.285714285714286%;width:14.285714285714286%;height:0px;
                margin-top:2px">
                                            <div data-schedule-id="648074a5-ac39-5389-a9af-3ba8712997e7"
                                                data-calendar-id="3"
                                                class="tui-full-calendar-weekday-schedule tui-full-calendar-weekday-schedule-time"
                                                style="height:24px; line-height:24px; ">
                                                <span class="tui-full-calendar-weekday-schedule-bullet" style="top: 8px;
                                background:#d13b4c
                            "></span>
                                                <span class="tui-full-calendar-weekday-schedule-title" style="
                                color:
                            " data-title="Vupgijve go pade." title="Vupgijve go pade."><strong>01:30</strong> <span
                                                        class="calendar-font-icon ic-user-b"></span> Vupgijve go
                                                    pade.</span>
                                            </div>
                                        </div>



                                        <div data-id="37" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-37
            
            " style="top:60px;left:14.285714285714286%;width:14.285714285714286%;height:0px;
                margin-top:2px">
                                            <div data-schedule-id="c10c81ce-6582-56ad-9687-18a0e081aa36"
                                                data-calendar-id="6"
                                                class="tui-full-calendar-weekday-schedule tui-full-calendar-weekday-schedule-time"
                                                style="height:24px; line-height:24px; ">
                                                <span class="tui-full-calendar-weekday-schedule-bullet" style="top: 8px;
                                background:#5856d6
                            "></span>
                                                <span class="tui-full-calendar-weekday-schedule-title" style="
                                color:
                            " data-title="Zi unazukuf pav." title="Zi unazukuf pav."><strong>15:00</strong> <span
                                                        class="calendar-font-icon ic-user-b"></span> Zi unazukuf
                                                    pav.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tui-full-calendar-month-week-item" style="height: 16.6667%;">
                                <div class="tui-full-calendar-weekday tui-view-54">
                                    <div class="tui-full-calendar-weekday-border" style="
    border-top: 1px solid #ebebf3;
"></div>
                                    <div class="tui-full-calendar-weekday-grid">
                                        <div class="tui-full-calendar-weekday-grid-line tui-full-calendar-holiday-sun tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:0%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #d13b4c;"><span
                                                        class="tui-full-calendar-weekday-grid-date">19</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #d13b4c;"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:14.285714285714286%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #475e77;"><span
                                                        class="tui-full-calendar-weekday-grid-date">20</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #475e77;"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:28.571428571428573%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #475e77;"><span
                                                        class="tui-full-calendar-weekday-grid-date">21</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #475e77;"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:42.85714285714286%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #475e77;"><span
                                                        class="tui-full-calendar-weekday-grid-date">22</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #475e77;"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:57.142857142857146%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #475e77;"><span
                                                        class="tui-full-calendar-weekday-grid-date">23</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #475e77;"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:71.42857142857143%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #475e77;"><span
                                                        class="tui-full-calendar-weekday-grid-date">24</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #475e77;"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line tui-full-calendar-holiday-sat tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:85.71428571428572%; background-color: inherit; font-size: 14px;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #475e77;"><span
                                                        class="tui-full-calendar-weekday-grid-date">25</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #475e77;"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tui-full-calendar-weekday-schedules">


                                        <div data-id="42" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-42
            
            " style="top:34px;left:0%;width:14.285714285714286%;height:0px;
                margin-top:2px">
                                            <div data-schedule-id="5e518cc3-5d6a-507c-8136-46b1fc3233ee"
                                                data-calendar-id="8"
                                                class="tui-full-calendar-weekday-schedule tui-full-calendar-weekday-schedule-time"
                                                style="height:24px; line-height:24px; ">
                                                <span class="tui-full-calendar-weekday-schedule-bullet" style="top: 8px;
                                background:#475e77
                            "></span>
                                                <span class="tui-full-calendar-weekday-schedule-title" style="
                                color:
                            " data-title="Wumsu etozlat vonococ." title="Wumsu etozlat vonococ."><strong>04:30</strong>
                                                    <span class="calendar-font-icon ic-user-b"></span> Wumsu
                                                    etozlat vonococ.</span>
                                            </div>
                                        </div>



                                        <div data-id="24" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-24
            
            " style="top:60px;left:0%;width:14.285714285714286%;height:0px;
                margin-top:2px">
                                            <div data-schedule-id="8c73a24d-fc65-5d30-9c9c-7bafc765fe49"
                                                data-calendar-id="2"
                                                class="tui-full-calendar-weekday-schedule tui-full-calendar-weekday-schedule-time"
                                                style="height:24px; line-height:24px; ">
                                                <span class="tui-full-calendar-weekday-schedule-bullet" style="top: 8px;
                                background:#25b865
                            "></span>
                                                <span class="tui-full-calendar-weekday-schedule-title" style="
                                color:
                            " data-title="Nolerofe ju fidah." title="Nolerofe ju fidah."><strong>17:30</strong> <span
                                                        class="calendar-font-icon ic-repeat-b"></span> Nolerofe
                                                    ju fidah.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tui-full-calendar-month-week-item" style="height: 16.6667%;">
                                <div class="tui-full-calendar-weekday tui-view-55">
                                    <div class="tui-full-calendar-weekday-border" style="
    border-top: 1px solid #ebebf3;
"></div>
                                    <div class="tui-full-calendar-weekday-grid">
                                        <div class="tui-full-calendar-weekday-grid-line tui-full-calendar-holiday-sun tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:0%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #d13b4c;"><span
                                                        class="tui-full-calendar-weekday-grid-date">26</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #d13b4c;"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:14.285714285714286%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #475e77;"><span
                                                        class="tui-full-calendar-weekday-grid-date">27</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #475e77;"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:28.571428571428573%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #475e77;"><span
                                                        class="tui-full-calendar-weekday-grid-date">28</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #475e77;"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:42.85714285714286%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #475e77;"><span
                                                        class="tui-full-calendar-weekday-grid-date">29</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #475e77;"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day"
                                            style="width:14.285714285714286%; left:57.142857142857146%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #475e77;"><span
                                                        class="tui-full-calendar-weekday-grid-date">30</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #475e77;"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day tui-full-calendar-today"
                                            style="width:14.285714285714286%; left:71.42857142857143%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: #475e77;"><span
                                                        class="tui-full-calendar-weekday-grid-date tui-full-calendar-weekday-grid-date-decorator">31</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: #475e77;"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line tui-full-calendar-holiday-sat tui-full-calendar-near-month-day tui-full-calendar-extra-date"
                                            style="width:14.285714285714286%; left:85.71428571428572%; background-color: inherit; font-size: 14px;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: rgba(51, 51, 51, 0.4);"><span
                                                        class="tui-full-calendar-weekday-grid-date">1</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: rgba(51, 51, 51, 0.4);"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tui-full-calendar-weekday-schedules">


                                        <div data-id="31" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-31
            
            " style="top:34px;left:14.285714285714286%;width:14.285714285714286%;height:0px;
                margin-top:2px">
                                            <div data-schedule-id="4b350229-63fa-5cd4-8f3c-0feac9eb39c3"
                                                data-calendar-id="4"
                                                class="tui-full-calendar-weekday-schedule tui-full-calendar-weekday-schedule-time"
                                                style="height:24px; line-height:24px; ">
                                                <span class="tui-full-calendar-weekday-schedule-bullet" style="top: 8px;
                                background:#17a2b8
                            "></span>
                                                <span class="tui-full-calendar-weekday-schedule-title" style="
                                color:
                            " data-title="Ahnid fiw co." title="Ahnid fiw co."><strong>02:30</strong> <span
                                                        class="calendar-font-icon ic-readonly-b"></span> Ahnid
                                                    fiw co.</span>
                                            </div>
                                        </div>



                                        <div data-id="34" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-34
            
            " style="top:34px;left:57.142857142857146%;width:14.285714285714286%;height:0px;
                margin-top:2px">
                                            <div data-schedule-id="6afd9e9f-b1df-592e-86bc-64b0a1de8aea"
                                                data-calendar-id="5"
                                                class="tui-full-calendar-weekday-schedule tui-full-calendar-weekday-schedule-time"
                                                style="height:24px; line-height:24px; ">
                                                <span class="tui-full-calendar-weekday-schedule-bullet" style="top: 8px;
                                background:#e49e3d
                            "></span>
                                                <span class="tui-full-calendar-weekday-schedule-title" style="
                                color:
                            " data-title="Emger neoh tujarud." title="Emger neoh tujarud."><strong>20:30</strong> <span
                                                        class="calendar-font-icon ic-location-b"></span> Emger
                                                    neoh tujarud.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tui-full-calendar-month-week-item" style="height: 16.6667%;">
                                <div class="tui-full-calendar-weekday tui-view-56">
                                    <div class="tui-full-calendar-weekday-border" style="
    border-top: 1px solid #ebebf3;
"></div>
                                    <div class="tui-full-calendar-weekday-grid">
                                        <div class="tui-full-calendar-weekday-grid-line tui-full-calendar-holiday-sun tui-full-calendar-near-month-day tui-full-calendar-extra-date"
                                            style="width:14.285714285714286%; left:0%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: rgba(255, 64, 64, 0.4);"><span
                                                        class="tui-full-calendar-weekday-grid-date">2</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: rgba(255, 64, 64, 0.4);"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day tui-full-calendar-extra-date"
                                            style="width:14.285714285714286%; left:14.285714285714286%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: rgba(51, 51, 51, 0.4);"><span
                                                        class="tui-full-calendar-weekday-grid-date">3</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: rgba(51, 51, 51, 0.4);"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day tui-full-calendar-extra-date"
                                            style="width:14.285714285714286%; left:28.571428571428573%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: rgba(51, 51, 51, 0.4);"><span
                                                        class="tui-full-calendar-weekday-grid-date">4</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: rgba(51, 51, 51, 0.4);"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day tui-full-calendar-extra-date"
                                            style="width:14.285714285714286%; left:42.85714285714286%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: rgba(51, 51, 51, 0.4);"><span
                                                        class="tui-full-calendar-weekday-grid-date">5</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: rgba(51, 51, 51, 0.4);"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day tui-full-calendar-extra-date"
                                            style="width:14.285714285714286%; left:57.142857142857146%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: rgba(51, 51, 51, 0.4);"><span
                                                        class="tui-full-calendar-weekday-grid-date">6</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: rgba(51, 51, 51, 0.4);"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day tui-full-calendar-extra-date"
                                            style="width:14.285714285714286%; left:71.42857142857143%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: rgba(51, 51, 51, 0.4);"><span
                                                        class="tui-full-calendar-weekday-grid-date">7</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: rgba(51, 51, 51, 0.4);"></span>
                                            </div>
                                        </div>
                                        <div class="tui-full-calendar-weekday-grid-line tui-full-calendar-holiday-sat tui-full-calendar-near-month-day tui-full-calendar-extra-date"
                                            style="width:14.285714285714286%; left:85.71428571428572%; background-color: inherit; font-size: 14px;
        ">
                                            <div class="tui-full-calendar-weekday-grid-header">
                                                <span style="color: rgba(51, 51, 51, 0.4);"><span
                                                        class="tui-full-calendar-weekday-grid-date">8</span></span>
                                            </div>
                                            <div class="tui-full-calendar-weekday-grid-footer">
                                                <span style="color: rgba(51, 51, 51, 0.4);"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tui-full-calendar-weekday-schedules">


                                        <div data-id="33" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-33
            
            " style="top:34px;left:57.142857142857146%;width:42.85714285714286%;height:0px;
                margin-top:2px">
                                            <div data-schedule-id="b711cc62-48f1-5b2f-a726-792cb0478cbc"
                                                data-calendar-id="5" class="tui-full-calendar-weekday-schedule " style="height:24px; line-height:24px; border-radius: 3px;
                    margin-left: 8px;
                    margin-right: 8px;
                    color:#e49e3d; background-color:#e49e3d; border-color:#e49e3d;
                    ">
                                                <span class="tui-full-calendar-weekday-schedule-title"
                                                    data-title="Ce poucjo absetla." title="Ce poucjo absetla."><span
                                                        class="calendar-font-icon ic-location-b"></span> Ce
                                                    poucjo absetla.</span>
                                                <span class="tui-full-calendar-weekday-resize-handle handle-y"
                                                    style="line-height: 24px;">&nbsp;</span>
                                            </div>
                                        </div>


                                        <div data-id="32" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-32
            
            " style="top:60px;left:71.42857142857143%;width:14.285714285714286%;height:0px;
                margin-top:2px">
                                            <div data-schedule-id="4cd15324-455c-5732-8a13-3f7dc15ebdb0"
                                                data-calendar-id="4" class="tui-full-calendar-weekday-schedule " style="height:24px; line-height:24px; border-radius: 3px;
                    margin-left: 8px;
                    margin-right: 8px;
                    color:#17a2b8; background-color:#17a2b8; border-color:#17a2b8;
                    ">
                                                <span class="tui-full-calendar-weekday-schedule-title"
                                                    data-title="Jerup sew bis." title="Jerup sew bis."><span
                                                        class="calendar-font-icon ic-readonly-b"></span> Jerup
                                                    sew bis.</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tui-full-calendar-floating-layer tui-view-10"
                        style="display: none; position: absolute;"></div>
                    <div class="tui-full-calendar-floating-layer tui-view-15"
                        style="display: none; position: absolute;"></div>
                    <div class="tui-full-calendar-floating-layer tui-view-18"
                        style="display: none; position: absolute;"></div>
                </div>
            </div>
        </div>
        <!-- [ Footer ] start -->
        <footer class="footer">
            <p class="fs-11 text-muted fw-medium text-uppercase mb-0 copyright">
                <span>Copyright ©</span>
                <script>
                document.write(new Date().getFullYear());
                </script>2024
            </p>
            <div class="d-flex align-items-center gap-4">
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Help</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Terms</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Privacy</a>
            </div>
        </footer>
        <!-- [ Footer ] end -->
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 616px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 351px;"></div>
        </div>
    </div>
    <!-- [ Content Area ] end -->
</div>
<!-- [ Main Content ] end -->
@endsection

@section('jsscripts')
<!--! ================================================================ !-->
<!--! [End] Theme Customizer !-->
<!--! ================================================================ !-->
<!--! ================================================================ !-->
<!--! Footer Script !-->
<!--! ================================================================ !-->
<!--! BEGIN: Vendors JS !-->
<script src="{{ asset('assets/vendors/js/vendors.min.js'); }}"></script>
<!-- vendors.min.js {always must need to be top} -->
<script src="assets/vendors/js/tui-code-snippet.min.js"></script>
<script src="{{ asset('assets/vendors/js/tui-time-picker.min.js'); }}"></script>
<script src="{{ asset('assets/vendors/js/tui-date-picker.min.js'); }}"></script>
<script src="{{ asset('assets/vendors/js/moment.min.js'); }}"></script>
<script src="{{ asset('assets/vendors/js/chance.min.js'); }}"></script>
<script src="assets/vendors/js/tui-calendar.min.js"></script>
<script src="{{ asset('assets/vendors/js/tui-calendars.min.js'); }}"></script>
<script src="{{ asset('assets/vendors/js/tui-schedules.min.js'); }}"></script>
<script src="{{ asset('assets/vendors/js/tui-calendar-init.min.js'); }}"></script>
<!--! END: Vendors JS !-->
<!--! BEGIN: Apps Init  !-->
<script src="{{ asset('assets/js/common-init.min.js'); }}"></script>
<script src="{{ asset('assets/js/apps-calendar-init.min.js'); }}"></script>
<!--! END: Apps Init !-->
<!--! BEGIN: Theme Customizer  !-->
<script src="{{ asset('assets/js/theme-customizer-init.min.js'); }}"></script>
<!--! END: Theme Customizer !-->
@endsection