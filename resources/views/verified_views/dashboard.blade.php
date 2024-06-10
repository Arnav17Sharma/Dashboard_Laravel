@extends('verified_views.layout')
@section('title', 'Dashboard')
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
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/daterangepicker.min.css');}}" />
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
            <h5 class="m-b-10">Dashboard</h5>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Dashboard</li>
        </ul>
    </div>
</div>
<div class="main-content">
@if($errors->any())
    <div class="col-12">
        @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
        @endforeach
    </div>
    @endif
    @if(session()->has('error'))
    <div class="col-8 alert alert-danger ms-auto me-auto">{{session('error')}}</div>
    @endif
    @if(session()->has('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <div class="row">
        <div class="col-xxl-3 col-lg-3 col-md-6">
            <div class="card stretch stretch-full">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between mb-4">
                        <div class="d-flex gap-4 align-items-center">
                            <div class="avatar-text avatar-lg bg-gray-200">
                                <i class="feather-dollar-sign"></i>
                            </div>
                            <div>
                                <div class="fs-4 fw-bold text-dark"><span class="counter">45</span>/<span
                                        class="counter">76</span></div>
                                <h3 class="fs-13 fw-semibold text-truncate-1-line">Invoices Awaiting Payment</h3>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="">
                            <i class="feather-more-vertical"></i>
                        </a>
                    </div>
                    <div class="pt-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);"
                                class="fs-12 fw-medium text-muted text-truncate-1-line">Invoices Awaiting </a>
                            <div class="w-100 text-end">
                                <span class="fs-12 text-dark">$5,569</span>
                                <span class="fs-11 text-muted">(56%)</span>
                            </div>
                        </div>
                        <div class="progress mt-2 ht-3">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 56%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [Invoices Awaiting Payment] end -->
        <!-- [Converted Leads] start -->
        <div class="col-xxl-3 col-lg-3 col-md-6">
            <div class="card stretch stretch-full">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between mb-4">
                        <div class="d-flex gap-4 align-items-center">
                            <div class="avatar-text avatar-lg bg-gray-200">
                                <i class="feather-cast"></i>
                            </div>
                            <div>
                                <div class="fs-4 fw-bold text-dark"><span class="counter">48</span>/<span
                                        class="counter">86</span></div>
                                <h3 class="fs-13 fw-semibold text-truncate-1-line">Converted Leads</h3>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="">
                            <i class="feather-more-vertical"></i>
                        </a>
                    </div>
                    <div class="pt-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);"
                                class="fs-12 fw-medium text-muted text-truncate-1-line">Converted Leads </a>
                            <div class="w-100 text-end">
                                <span class="fs-12 text-dark">52 Completed</span>
                                <span class="fs-11 text-muted">(63%)</span>
                            </div>
                        </div>
                        <div class="progress mt-2 ht-3">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 63%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [Converted Leads] end -->
        <!-- [Projects In Progress] start -->
        <div class="col-xxl-3 col-lg-3 col-md-6">
            <div class="card stretch stretch-full">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between mb-4">
                        <div class="d-flex gap-4 align-items-center">
                            <div class="avatar-text avatar-lg bg-gray-200">
                                <i class="feather-briefcase"></i>
                            </div>
                            <div>
                                <div class="fs-4 fw-bold text-dark"><span class="counter">16</span>/<span
                                        class="counter">20</span></div>
                                <h3 class="fs-13 fw-semibold text-truncate-1-line">Projects In Progress</h3>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="">
                            <i class="feather-more-vertical"></i>
                        </a>
                    </div>
                    <div class="pt-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);"
                                class="fs-12 fw-medium text-muted text-truncate-1-line">Projects In Progress </a>
                            <div class="w-100 text-end">
                                <span class="fs-12 text-dark">16 Completed</span>
                                <span class="fs-11 text-muted">(78%)</span>
                            </div>
                        </div>
                        <div class="progress mt-2 ht-3">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 78%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [Projects In Progress] end -->
        <!-- [Conversion Rate] start -->
        <div class="col-xxl-3 col-lg-3 col-md-6">
            <div class="card stretch stretch-full">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between mb-4">
                        <div class="d-flex gap-4 align-items-center">
                            <div class="avatar-text avatar-lg bg-gray-200">
                                <i class="feather-activity"></i>
                            </div>
                            <div>
                                <div class="fs-4 fw-bold text-dark"><span class="counter">46.59</span>%</div>
                                <h3 class="fs-13 fw-semibold text-truncate-1-line">Conversion Rate</h3>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="">
                            <i class="feather-more-vertical"></i>
                        </a>
                    </div>
                    <div class="pt-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);" class="fs-12 fw-medium text-muted text-truncate-1-line">
                                Conversion Rate </a>
                            <div class="w-100 text-end">
                                <span class="fs-12 text-dark">$2,254</span>
                                <span class="fs-11 text-muted">(46%)</span>
                            </div>
                        </div>
                        <div class="progress mt-2 ht-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 46%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xxl-8 col-lg-8 col-md-6">
            <div class="card stretch-full">
                <div class="card-header">
                    <h5 class="card-title">Latest Leads</h5>
                    <div class="card-header-action">
                        <div class="card-header-btn">
                            <div data-bs-toggle="tooltip" title="" data-bs-original-title="Delete">
                                <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger"
                                    data-bs-toggle="remove"> </a>
                            </div>
                            <div data-bs-toggle="tooltip" title="" data-bs-original-title="Refresh">
                                <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning"
                                    data-bs-toggle="refresh"> </a>
                            </div>
                            <div data-bs-toggle="tooltip" title="" data-bs-original-title="Maximize/Minimize">
                                <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success"
                                    data-bs-toggle="expand"> </a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown"
                                data-bs-offset="25, 25">
                                <div data-bs-toggle="tooltip" title="" data-bs-original-title="Options">
                                    <i class="feather-more-vertical"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="feather-at-sign"></i>New</a>
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="feather-calendar"></i>Event</a>
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="feather-bell"></i>Snoozed</a>
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="feather-trash-2"></i>Deleted</a>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="feather-settings"></i>Settings</a>
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="feather-life-buoy"></i>Tips &amp; Tricks</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body custom-card-action p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr class="border-b">
                                    <th scope="row">Users</th>
                                    <th>Proposal</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar-image">
                                                <img src="assets/images/avatar/2.png" alt="" class="img-fluid">
                                            </div>
                                            <a href="javascript:void(0);">
                                                <span class="d-block">Archie Cantones</span>
                                                <span
                                                    class="fs-12 d-block fw-normal text-muted">arcie.tones@gmail.com</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-gray-200 text-dark">Sent</span>
                                    </td>
                                    <td>11/06/2023 10:53</td>
                                    <td>
                                        <span class="badge bg-soft-success text-success">Completed</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar-image">
                                                <img src="assets/images/avatar/3.png" alt="" class="img-fluid">
                                            </div>
                                            <a href="javascript:void(0);">
                                                <span class="d-block">Holmes Cherryman</span>
                                                <span
                                                    class="fs-12 d-block fw-normal text-muted">golms.chan@gmail.com</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-gray-200 text-dark">New</span>
                                    </td>
                                    <td>11/06/2023 10:53</td>
                                    <td>
                                        <span class="badge bg-soft-primary text-primary">In Progress </span>
                                    </td>
                                    <td class="text-end">
                                        <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar-image">
                                                <img src="assets/images/avatar/4.png" alt="" class="img-fluid">
                                            </div>
                                            <a href="javascript:void(0);">
                                                <span class="d-block">Malanie Hanvey</span>
                                                <span
                                                    class="fs-12 d-block fw-normal text-muted">lanie.nveyn@gmail.com</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-gray-200 text-dark">Sent</span>
                                    </td>
                                    <td>11/06/2023 10:53</td>
                                    <td>
                                        <span class="badge bg-soft-success text-success">Completed</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar-image">
                                                <img src="assets/images/avatar/5.png" alt="" class="img-fluid">
                                            </div>
                                            <a href="javascript:void(0);">
                                                <span class="d-block">Kenneth Hune</span>
                                                <span
                                                    class="fs-12 d-block fw-normal text-muted">nneth.une@gmail.com</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-gray-200 text-dark">Returning</span>
                                    </td>
                                    <td>11/06/2023 10:53</td>
                                    <td>
                                        <span class="badge bg-soft-warning text-warning">Not Interested</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar-image">
                                                <img src="assets/images/avatar/6.png" alt="" class="img-fluid">
                                            </div>
                                            <a href="javascript:void(0);">
                                                <span class="d-block">Valentine Maton</span>
                                                <span
                                                    class="fs-12 d-block fw-normal text-muted">alenine.aton@gmail.com</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-gray-200 text-dark">Sent</span>
                                    </td>
                                    <td>11/06/2023 10:53</td>
                                    <td>
                                        <span class="badge bg-soft-success text-success">Completed</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                        <li>
                            <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                        </li>
                        <li><a href="javascript:void(0);" class="active">1</a></li>
                        <li><a href="javascript:void(0);">2</a></li>
                        <li>
                            <a href="javascript:void(0);"><i class="bi bi-dot"></i></a>
                        </li>
                        <li><a href="javascript:void(0);">8</a></li>
                        <li><a href="javascript:void(0);">9</a></li>
                        <li>
                            <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-lg-4 col-md-6">
            <div class="card stretch-full">
                <div class="card-body">
                    <div class="mb-2">
                        <label class="form-label">To <span class="text-danger">*</span></label>
                        <select class="form-select form-control select2-hidden-accessible" data-select2-selector="user"
                            data-select2-id="select2-data-20-zfoq" tabindex="-1" aria-hidden="true">
                            <option value="alex@outlook.com" data-user="1" data-select2-id="select2-data-22-82a1">
                                alex@outlook.com</option>
                            <option value="john.deo@outlook.com" data-user="2">john.deo@outlook.com</option>
                            <option value="green.cutte@outlook.com" data-user="3">green.cutte@outlook.com</option>
                            <option value="nancy.elliot@outlook.com" data-user="4">nancy.elliot@outlook.com</option>
                            <option value="mar.audrey@gmail.com" data-user="5">mar.audrey@gmail.com</option>
                            <option value="erna.serpa@outlook.com" data-user="6">erna.serpa@outlook.com</option>
                            <option value="green.cutte@outlook.com" data-user="7">green.cutte@outlook.com</option>
                            <option value="nancy.elliot@outlook.com" data-user="8">nancy.elliot@outlook.com</option>
                            <option value="mar.audrey@gmail.com" data-user="9">mar.audrey@gmail.com</option>
                            <option value="erna.serpa@outlook.com" data-user="10">erna.serpa@outlook.com</option>
                            <option value="mar.audrey@gmail.com" data-user="11">mar.audrey@gmail.com</option>
                            <option value="erna.serpa@outlook.com" data-user="12">erna.serpa@outlook.com</option>
                        </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr"
                            data-select2-id="select2-data-21-97ab" style="width: 532px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                                    aria-labelledby="select2-xoyh-container"
                                    aria-controls="select2-xoyh-container"><span class="select2-selection__rendered"
                                        id="select2-xoyh-container" role="textbox" aria-readonly="true"
                                        title="alex@outlook.com"><span class="hstack gap-3"> <img
                                                src="./../assets/images/avatar/1.png" class="avatar-image avatar-sm">
                                            alex@outlook.com</span></span><span class="select2-selection__arrow"
                                        role="presentation"><b role="presentation"></b></span></span></span><span
                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                    <div>
                        <label class="form-label">Address <span class="text-danger">*</span></label>
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <input type="text" class="form-control mb-2" placeholder="Address Line 1">
                            </div>
                            <div class="col-lg-6 mb-4">
                                <input type="text" class="form-control" placeholder="Address Line 2">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <label class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Emial">
                        </div>
                        <div class="col-lg-6 mb-4">
                            <label class="form-label">Phone <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Phone">
                        </div>
                    </div>
                    <div class="row mt-2 mb-2">
                        <input class="col-lg-6 row mb-2 ms-auto me-auto btn btn-primary ms-" type="submit" id="commentSwitch">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('jsscripts')
<script src="{{ asset('assets/vendors/js/vendors.min.js'); }}"></script>
<!-- vendors.min.js {always must need to be top} -->
<script src="{{ asset('assets/vendors/js/daterangepicker.min.js'); }}"></script>
<script src="{{ asset('assets/vendors/js/apexcharts.min.js'); }}"></script>
<script src="{{ asset('assets/vendors/js/circle-progress.min.js'); }}"></script>
<!--! END: Vendors JS !-->
<!--! BEGIN: Apps Init  !-->
<script src="{{ asset('assets/js/common-init.min.js'); }}"></script>
<script src="{{ asset('assets/js/dashboard-init.min.js'); }}"></script>
<!--! END: Apps Init !-->
<!--! BEGIN: Theme Customizer  !-->
<script src="{{ asset('assets/js/theme-customizer-init.min.js'); }}"></script>
<!--! END: Theme Customizer !-->
@endsection