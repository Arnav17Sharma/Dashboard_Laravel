@extends('verified_views.layout')
@section('title', 'View Message')
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
<form action="{{ route('view_members') }}" method="POST">
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">View Message</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Messages</a></li>
                <li class="breadcrumb-item">View Message</li>
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
            <div class="">
                <div class="card stretch stretch-full">
                    <div class="card-body">
                        <div class="text-align-left">
                            <div class="">
                                <h4 class="card-title">Sender Name: {{ $message_data->sender_name }}</h5>
                                <h4 class="card-title">Sender Email: {{ $message_data->sender_email }}</h5>
                                <h4 class="">Date: {{ $message_data->created_at }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-header">
                        <h5 class="card-title">Content</h5>
                    </div>
                    <div class="card-body">
                        <p style="text-align: justify;">
                            {{ $message_data->content }}
                        </p>
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