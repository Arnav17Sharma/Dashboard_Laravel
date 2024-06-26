@extends('verified_views.layout')
@section('title', 'Reports')
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
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/dataTables.bs5.min.css'); }}">
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
            <h5 class="m-b-10">Reports</h5>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Reports</li>
        </ul>
    </div>
</div>
<div class="main-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card stretch stretch-full">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <div id="leadList_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">

                            <div class="row dt-row">
                                <div class="col-sm-12">
                                    <table class="table table-hover dataTable no-footer" id="leadList"
                                        aria-describedby="leadList_info">
                                        <thead>
                                            <tr>
                                                <th class="wd-30 sorting sorting_asc" tabindex="0"
                                                    aria-controls="leadList" rowspan="1" colspan="1"
                                                    aria-sort="ascending" aria-label="
                                                    
                                                        
                                                            
                                                            
                                                        
                                                    
                                                : activate to sort column descending" style="width: 30px;">
                                                    <div class="btn-group mb-1">
                                                        <div class="custom-control custom-checkbox ms-1">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="checkAllLead">
                                                            <label class="custom-control-label"
                                                                for="checkAllLead"></label>
                                                        </div>
                                                    </div>
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="leadList" rowspan="1"
                                                    colspan="1" aria-label="Lead: activate to sort column ascending"
                                                    style="width: 138.375px;">Lead</th>
                                                <th class="sorting" tabindex="0" aria-controls="leadList" rowspan="1"
                                                    colspan="1" aria-label="Email: activate to sort column ascending"
                                                    style="width: 168.725px;">Email</th>
                                                <th class="sorting" tabindex="0" aria-controls="leadList" rowspan="1"
                                                    colspan="1" aria-label="Source: activate to sort column ascending"
                                                    style="width: 82.45px;">Source</th>
                                                <th class="sorting" tabindex="0" aria-controls="leadList" rowspan="1"
                                                    colspan="1" aria-label="Phone: activate to sort column ascending"
                                                    style="width: 92.625px;">Phone</th>
                                                <th class="sorting" tabindex="0" aria-controls="leadList" rowspan="1"
                                                    colspan="1" aria-label="Date: activate to sort column ascending"
                                                    style="width: 133.512px;">Date</th>
                                                <th class="sorting" tabindex="0" aria-controls="leadList" rowspan="1"
                                                    colspan="1" aria-label="Status: activate to sort column ascending"
                                                    style="width: 128.913px;">Status</th>
                                                <th class="text-end sorting" tabindex="0" aria-controls="leadList"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Actions: activate to sort column ascending"
                                                    style="width: 68px;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>










                                            <tr class="single-item odd">
                                                <td class="sorting_1">
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox"
                                                                id="checkBox_1">
                                                            <label class="custom-control-label"
                                                                for="checkBox_1"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="leads-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md">
                                                            <img src="assets/images/avatar/1.png" alt=""
                                                                class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Alexandra Della</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-mail.html">alex.della@outlook.com</a></td>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-facebook"></i>
                                                        </div>
                                                        <a href="javascript:void(0);">Facebook</a>
                                                    </div>
                                                </td>
                                                <td><a href="tel:">(375) 9632 548</a></td>
                                                <td>2023-04-05, 00:05PM</td>
                                                <td>
                                                    <select class="form-control select2-hidden-accessible"
                                                        data-select2-selector="status"
                                                        data-select2-id="select2-data-1-6fav" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="primary" data-bg="bg-primary">New</option>
                                                        <option value="warning" data-bg="bg-warning">Working</option>
                                                        <option value="success" data-bg="bg-success">Qualified</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                        <option value="teal" data-bg="bg-teal">Customer</option>
                                                        <option value="indigo" data-bg="bg-indigo" selected=""
                                                            data-select2-id="select2-data-3-exjs">Contacted</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="leads-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md"
                                                                data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN"
                                                                        href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i
                                                                            class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item even">
                                                <td class="sorting_1">
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox"
                                                                id="checkBox_2">
                                                            <label class="custom-control-label"
                                                                for="checkBox_2"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="leads-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md bg-warning text-white">N
                                                        </div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Nancy Elliot</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-mail.html">nancy.elliot@outlook.com</a></td>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-facebook"></i>
                                                        </div>
                                                        <a href="javascript:void(0);">Facebook</a>
                                                    </div>
                                                </td>
                                                <td><a href="tel:"> (375) 8523 456</a></td>
                                                <td>2023-04-06, 02:52PM</td>
                                                <td>
                                                    <select class="form-control select2-hidden-accessible"
                                                        data-select2-selector="status"
                                                        data-select2-id="select2-data-4-fdlg" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="primary" data-bg="bg-primary">New</option>
                                                        <option value="warning" data-bg="bg-warning">Working</option>
                                                        <option value="success" data-bg="bg-success">Qualified</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                        <option value="teal" data-bg="bg-teal" selected=""
                                                            data-select2-id="select2-data-6-w4iu">Customer</option>
                                                        <option value="indigo" data-bg="bg-indigo">Contacted</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="leads-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md"
                                                                data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN"
                                                                        href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i
                                                                            class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item odd">
                                                <td class="sorting_1">
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox"
                                                                id="checkBox_3">
                                                            <label class="custom-control-label"
                                                                for="checkBox_3"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="leads-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md">
                                                            <img src="assets/images/avatar/2.png" alt=""
                                                                class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Green Cute</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-mail.html">green.cute@outlook.com</a></td>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-twitter"></i>
                                                        </div>
                                                        <a href="javascript:void(0);">Twitter</a>
                                                    </div>
                                                </td>
                                                <td><a href="tel:"> (845) 9632 874</a></td>
                                                <td>2023-04-08, 08:34PM</td>
                                                <td>
                                                    <select class="form-control select2-hidden-accessible"
                                                        data-select2-selector="status"
                                                        data-select2-id="select2-data-7-c8yb" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="primary" data-bg="bg-primary">New</option>
                                                        <option value="warning" data-bg="bg-warning">Working</option>
                                                        <option value="success" data-bg="bg-success">Qualified</option>
                                                        <option value="danger" data-bg="bg-danger" selected=""
                                                            data-select2-id="select2-data-9-hz8x">Declined</option>
                                                        <option value="teal" data-bg="bg-teal">Customer</option>
                                                        <option value="indigo" data-bg="bg-indigo">Contacted</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="leads-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md"
                                                                data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN"
                                                                        href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i
                                                                            class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item even">
                                                <td class="sorting_1">
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox"
                                                                id="checkBox_4">
                                                            <label class="custom-control-label"
                                                                for="checkBox_4"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="leads-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md bg-teal text-white">H</div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Henry Leach</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-mail.html">henry.leach@outlook.com</a></td>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-instagram"></i>
                                                        </div>
                                                        <a href="javascript:void(0);">Instagram</a>
                                                    </div>
                                                </td>
                                                <td><a href="tel:"> (258) 9514 657</a></td>
                                                <td>2023-04-10, 05:25PM</td>
                                                <td>
                                                    <select class="form-control select2-hidden-accessible"
                                                        data-select2-selector="status"
                                                        data-select2-id="select2-data-10-08pg" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="primary" data-bg="bg-primary">New</option>
                                                        <option value="warning" data-bg="bg-warning">Working</option>
                                                        <option value="success" data-bg="bg-success" selected=""
                                                            data-select2-id="select2-data-12-g4t1">Qualified</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                        <option value="teal" data-bg="bg-teal">Customer</option>
                                                        <option value="indigo" data-bg="bg-indigo">Contacted</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="leads-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md"
                                                                data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN"
                                                                        href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i
                                                                            class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item odd">
                                                <td class="sorting_1">
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox"
                                                                id="checkBox_5">
                                                            <label class="custom-control-label"
                                                                for="checkBox_5"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="leads-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md">
                                                            <img src="assets/images/avatar/3.png" alt=""
                                                                class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Marianne Audrey</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-mail.html">marine.adrey@outlook.com</a></td>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-linkedin"></i>
                                                        </div>
                                                        <a href="javascript:void(0);">Linkedin</a>
                                                    </div>
                                                </td>
                                                <td><a href="tel:"> (456) 6547 524</a></td>
                                                <td>2023-04-12, 12:02PM</td>
                                                <td>
                                                    <select class="form-control select2-hidden-accessible"
                                                        data-select2-selector="status"
                                                        data-select2-id="select2-data-13-eynk" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="primary" data-bg="bg-primary">New</option>
                                                        <option value="warning" data-bg="bg-warning" selected=""
                                                            data-select2-id="select2-data-15-ch0y">Working</option>
                                                        <option value="success" data-bg="bg-success">Qualified</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                        <option value="teal" data-bg="bg-teal">Customer</option>
                                                        <option value="indigo" data-bg="bg-indigo">Contacted</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="leads-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md"
                                                                data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN"
                                                                        href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i
                                                                            class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item even">
                                                <td class="sorting_1">
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox"
                                                                id="checkBox_6">
                                                            <label class="custom-control-label"
                                                                for="checkBox_6"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="leads-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md bg-warning text-white">N
                                                        </div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Nancy Elliot</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-mail.html">nancy.elliot@outlook.com</a></td>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-instagram"></i>
                                                        </div>
                                                        <a href="javascript:void(0);">Instagram</a>
                                                    </div>
                                                </td>
                                                <td><a href="tel:"> (375) 8523 456</a></td>
                                                <td>2023-04-15, 02:40PM</td>
                                                <td>
                                                    <select class="form-control select2-hidden-accessible"
                                                        data-select2-selector="status"
                                                        data-select2-id="select2-data-16-jwxw" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="primary" data-bg="bg-primary" selected=""
                                                            data-select2-id="select2-data-18-pyuo">New</option>
                                                        <option value="warning" data-bg="bg-warning">Working</option>
                                                        <option value="success" data-bg="bg-success">Qualified</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                        <option value="teal" data-bg="bg-teal">Customer</option>
                                                        <option value="indigo" data-bg="bg-indigo">Contacted</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="leads-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md"
                                                                data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN"
                                                                        href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i
                                                                            class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item odd">
                                                <td class="sorting_1">
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox"
                                                                id="checkBox_7">
                                                            <label class="custom-control-label"
                                                                for="checkBox_7"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="leads-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md">
                                                            <img src="assets/images/avatar/4.png" alt=""
                                                                class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Cute Green</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-mail.html">cute.green@outlook.com</a></td>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-github"></i>
                                                        </div>
                                                        <a href="javascript:void(0);">Github</a>
                                                    </div>
                                                </td>
                                                <td><a href="tel:"> (632) 5486 662</a></td>
                                                <td>2023-04-25, 03:42PM</td>
                                                <td>
                                                    <select class="form-control select2-hidden-accessible"
                                                        data-select2-selector="status"
                                                        data-select2-id="select2-data-19-z8vz" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="primary" data-bg="bg-primary">New</option>
                                                        <option value="warning" data-bg="bg-warning">Working</option>
                                                        <option value="success" data-bg="bg-success">Qualified</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                        <option value="teal" data-bg="bg-teal">Customer</option>
                                                        <option value="indigo" data-bg="bg-indigo" selected=""
                                                            data-select2-id="select2-data-21-on3u">Contacted</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="leads-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md"
                                                                data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN"
                                                                        href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i
                                                                            class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item even">
                                                <td class="sorting_1">
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox"
                                                                id="checkBox_8">
                                                            <label class="custom-control-label"
                                                                for="checkBox_8"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="leads-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md bg-success text-white">H
                                                        </div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Leach Henry</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-mail.html">leach.henry@outlook.com</a></td>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-facebook"></i>
                                                        </div>
                                                        <a href="javascript:void(0);">Facebook</a>
                                                    </div>
                                                </td>
                                                <td><a href="tel:"> (951) 5478 884</a></td>
                                                <td>2023-04-14, 03:32PM</td>
                                                <td>
                                                    <select class="form-control select2-hidden-accessible"
                                                        data-select2-selector="status"
                                                        data-select2-id="select2-data-22-4ep1" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="primary" data-bg="bg-primary">New</option>
                                                        <option value="warning" data-bg="bg-warning">Working</option>
                                                        <option value="success" data-bg="bg-success">Qualified</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                        <option value="teal" data-bg="bg-teal" selected=""
                                                            data-select2-id="select2-data-24-j37z">Customer</option>
                                                        <option value="indigo" data-bg="bg-indigo">Contacted</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="leads-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md"
                                                                data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN"
                                                                        href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i
                                                                            class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item odd">
                                                <td class="sorting_1">
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox"
                                                                id="checkBox_9">
                                                            <label class="custom-control-label"
                                                                for="checkBox_9"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="leads-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md">
                                                            <img src="assets/images/avatar/5.png" alt=""
                                                                class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Audrey Marianne</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-mail.html">adrey.marine@outlook.com</a></td>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-linkedin"></i>
                                                        </div>
                                                        <a href="javascript:void(0);">Linkedin</a>
                                                    </div>
                                                </td>
                                                <td><a href="tel:"> (556) 2457 586</a></td>
                                                <td>2023-04-20, 01:47PM</td>
                                                <td>
                                                    <select class="form-control select2-hidden-accessible"
                                                        data-select2-selector="status"
                                                        data-select2-id="select2-data-25-6gyp" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="primary" data-bg="bg-primary">New</option>
                                                        <option value="warning" data-bg="bg-warning">Working</option>
                                                        <option value="success" data-bg="bg-success">Qualified</option>
                                                        <option value="danger" data-bg="bg-danger" selected=""
                                                            data-select2-id="select2-data-27-cstg">Declined</option>
                                                        <option value="teal" data-bg="bg-teal">Customer</option>
                                                        <option value="indigo" data-bg="bg-indigo">Contacted</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="leads-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md"
                                                                data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN"
                                                                        href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i
                                                                            class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item even">
                                                <td class="sorting_1">
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox"
                                                                id="checkBox_10">
                                                            <label class="custom-control-label"
                                                                for="checkBox_10"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="leads-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md bg-primary text-white">E
                                                        </div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Elliot Nancy</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-mail.html">elliot.nancy@outlook.com</a></td>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-twitter"></i>
                                                        </div>
                                                        <a href="javascript:void(0);">Twitter</a>
                                                    </div>
                                                </td>
                                                <td><a href="tel:"> (554) 2478 663</a></td>
                                                <td>2023-04-22, 02:12PM</td>
                                                <td>
                                                    <select class="form-control select2-hidden-accessible"
                                                        data-select2-selector="status"
                                                        data-select2-id="select2-data-28-ribg" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="primary" data-bg="bg-primary">New</option>
                                                        <option value="warning" data-bg="bg-warning">Working</option>
                                                        <option value="success" data-bg="bg-success" selected=""
                                                            data-select2-id="select2-data-30-8a3i">Qualified</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                        <option value="teal" data-bg="bg-teal">Customer</option>
                                                        <option value="indigo" data-bg="bg-indigo">Contacted</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="leads-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md"
                                                                data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN"
                                                                        href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i
                                                                            class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
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
<script src="{{ asset('assets/vendors/js/dataTables.min.js'); }}"></script>
<script src="{{ asset('assets/vendors/js/dataTables.bs5.min.js'); }}"></script>
<script src="{{ asset('assets/vendors/js/select2.min.js'); }}"></script>
<script src="{{ asset('assets/vendors/js/select2-active.min.js'); }}"></script>
<!--! END: Vendors JS !-->
<!--! BEGIN: Apps Init  !-->
<script src="{{ asset('assets/js/common-init.min.js'); }}"></script>
<script src="{{ asset('assets/js/leads-init.min.js'); }}"></script>
<!--! END: Apps Init !-->
<!--! BEGIN: Theme Customizer  !-->
<script src="{{ asset('assets/js/theme-customizer-init.min.js'); }}"></script>
<!--! END: Theme Customizer !-->
@endsection