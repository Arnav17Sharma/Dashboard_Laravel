@extends('verified_views.layout')
@section('title', 'Tenders')
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
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/select2.min.css'); }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/select2-theme.min.css'); }}">
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
            <h5 class="m-b-10">Tenders</h5>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Tenders</li>
        </ul>
    </div>
</div>
<div class="main-content">
    <div class="row">
        <!--! BEGIN: [Profile] !-->
        <div class="col-xxl-4 col-lg-4 col-md-6">
            <div class="card stretch stretch-full">
                <div class="card-body">
                    <div class="mb-4 text-center">
                        <div class="wd-150 ht-150 mx-auto mb-3 position-relative">
                            <div class="avatar-image wd-150 ht-150 border border-5 border-gray-3">
                                <img src="assets/images/avatar/1.png" alt="" class="img-fluid">
                            </div>
                            <div class="wd-10 ht-10 text-success rounded-circle position-absolute translate-middle" style="top: 76%; right: 10px">
                                <i class="bi bi-patch-check-fill"></i>
                            </div>
                        </div>
                        <div class="mb-4">
                            <a href="javascript:void(0);" class="fs-14 fw-bold d-block"> Alexandra Della</a>
                            <a href="javascript:void(0);" class="fs-12 fw-normal text-muted d-block">alex.della@outlook.com</a>
                        </div>
                        
                    </div>
                    <ul class="list-unstyled mb-2">
                        <li class="hstack justify-content-between mb-4">
                            <span class="text-muted fw-medium hstack gap-3"><i class="feather-map-pin"></i>Location</span>
                            <a href="javascript:void(0);" class="float-end">California, USA</a>
                        </li>
                        <li class="hstack justify-content-between mb-4">
                            <span class="text-muted fw-medium hstack gap-3"><i class="feather-phone"></i>Phone</span>
                            <a href="javascript:void(0);" class="float-end">+01 (375) 2589 645</a>
                        </li>
                        <li class="hstack justify-content-between mb-0">
                            <span class="text-muted fw-medium hstack gap-3"><i class="feather-mail"></i>Email</span>
                            <a href="javascript:void(0);" class="float-end">alex.della@outlook.com</a>
                        </li>
                    </ul>
                    <div class="mx-auto d-flex gap-2 text-center pt-4">
                        <!-- <a href="javascript:void(0);" class="w-50 btn btn-light-brand">
                            <i class="feather-trash-2 me-2"></i>
                            <span>Delete</span>
                        </a> -->
                        <a href="{{ route('tenderprofile') }}" class="btn btn-primary mt-2 d-inline-block mx-auto">
                            <i class="feather-user"></i>
                            <span>View Profile</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--! END: [Profile] !-->
        <!--! BEGIN: [Profile] !-->
        <div class="col-xxl-4 col-lg-4 col-md-6">
            <div class="card stretch stretch-full">
                <div class="card-body">
                    <div class="mb-4 text-center">
                        <div class="wd-150 ht-150 mx-auto mb-3 position-relative">
                            <div class="avatar-image wd-150 ht-150 border border-5 border-gray-3">
                                <img src="assets/images/avatar/1.png" alt="" class="img-fluid">
                            </div>
                            <div class="wd-10 ht-10 text-success rounded-circle position-absolute translate-middle" style="top: 76%; right: 10px">
                                <i class="bi bi-patch-check-fill"></i>
                            </div>
                        </div>
                        <div class="mb-4">
                            <a href="javascript:void(0);" class="fs-14 fw-bold d-block"> Alexandra Della</a>
                            <a href="javascript:void(0);" class="fs-12 fw-normal text-muted d-block">alex.della@outlook.com</a>
                        </div>
                        
                    </div>
                    <ul class="list-unstyled mb-2">
                        <li class="hstack justify-content-between mb-4">
                            <span class="text-muted fw-medium hstack gap-3"><i class="feather-map-pin"></i>Location</span>
                            <a href="javascript:void(0);" class="float-end">California, USA</a>
                        </li>
                        <li class="hstack justify-content-between mb-4">
                            <span class="text-muted fw-medium hstack gap-3"><i class="feather-phone"></i>Phone</span>
                            <a href="javascript:void(0);" class="float-end">+01 (375) 2589 645</a>
                        </li>
                        <li class="hstack justify-content-between mb-0">
                            <span class="text-muted fw-medium hstack gap-3"><i class="feather-mail"></i>Email</span>
                            <a href="javascript:void(0);" class="float-end">alex.della@outlook.com</a>
                        </li>
                    </ul>
                    <div class="mx-auto d-flex gap-2 text-center pt-4">
                        <!-- <a href="javascript:void(0);" class="w-50 btn btn-light-brand">
                            <i class="feather-trash-2 me-2"></i>
                            <span>Delete</span>
                        </a> -->
                        <a href="{{ route('tenderprofile') }}" class="btn btn-primary mt-2 d-inline-block mx-auto">
                            <i class="feather-user"></i>
                            <span>View Profile</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--! END: [Profile] !-->
        <!--! BEGIN: [Profile] !-->
        <div class="col-xxl-4 col-lg-4 col-md-6">
            <div class="card stretch stretch-full">
                <div class="card-body">
                    <div class="mb-4 text-center">
                        <div class="wd-150 ht-150 mx-auto mb-3 position-relative">
                            <div class="avatar-image wd-150 ht-150 border border-5 border-gray-3">
                                <img src="assets/images/avatar/1.png" alt="" class="img-fluid">
                            </div>
                            <div class="wd-10 ht-10 text-success rounded-circle position-absolute translate-middle" style="top: 76%; right: 10px">
                                <i class="bi bi-patch-check-fill"></i>
                            </div>
                        </div>
                        <div class="mb-4">
                            <a href="javascript:void(0);" class="fs-14 fw-bold d-block"> Alexandra Della</a>
                            <a href="javascript:void(0);" class="fs-12 fw-normal text-muted d-block">alex.della@outlook.com</a>
                        </div>
                        
                    </div>
                    <ul class="list-unstyled mb-2">
                        <li class="hstack justify-content-between mb-4">
                            <span class="text-muted fw-medium hstack gap-3"><i class="feather-map-pin"></i>Location</span>
                            <a href="javascript:void(0);" class="float-end">California, USA</a>
                        </li>
                        <li class="hstack justify-content-between mb-4">
                            <span class="text-muted fw-medium hstack gap-3"><i class="feather-phone"></i>Phone</span>
                            <a href="javascript:void(0);" class="float-end">+01 (375) 2589 645</a>
                        </li>
                        <li class="hstack justify-content-between mb-0">
                            <span class="text-muted fw-medium hstack gap-3"><i class="feather-mail"></i>Email</span>
                            <a href="javascript:void(0);" class="float-end">alex.della@outlook.com</a>
                        </li>
                    </ul>
                    <div class="mx-auto d-flex gap-2 text-center pt-4">
                        <!-- <a href="javascript:void(0);" class="w-50 btn btn-light-brand">
                            <i class="feather-trash-2 me-2"></i>
                            <span>Delete</span>
                        </a> -->
                        <a href="{{ route('tenderprofile') }}" class="btn btn-primary mt-2 d-inline-block mx-auto">
                            <i class="feather-user"></i>
                            <span>View Profile</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--! END: [Profile] !-->
    </div>
</div>
@endsection

@section('jsscripts')
<script src="{{ asset('assets/vendors/js/vendors.min.js'); }}"></script>
<!-- vendors.min.js {always must need to be top} -->
<script src="{{ asset('assets/vendors/js/circle-progress.min.js'); }}"></script>
<script src="{{ asset('assets/vendors/js/select2.min.js'); }}"></script>
<script src="{{ asset('assets/vendors/js/select2-active.min.js'); }}"></script>
<!--! END: Vendors JS !-->
<!--! BEGIN: Apps Init  !-->
<script src="{{ asset('assets/js/common-init.min.js'); }}"></script>
<script src="{{ asset('assets/js/widgets-lists-init.min.js'); }}"></script>
<!--! END: Apps Init !-->
<!--! BEGIN: Theme Customizer  !-->
<script src="{{ asset('assets/js/theme-customizer-init.min.js'); }}"></script>
<!--! END: Theme Customizer !-->
@endsection