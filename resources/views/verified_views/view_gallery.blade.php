@extends('verified_views.layout')
@section('title', 'View Gallery')
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
            <h5 class="m-b-10">View Gallery</h5>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Gallery</a></li>
            <li class="breadcrumb-item">View Gallery</li>
        </ul>
    </div>
    <div class="page-header-right ms-auto">
        <div class="page-header-right-items">
            <!-- <div class="d-flex d-md-none">
                <a href="javascript:void(0)" class="page-header-right-close-toggle">
                    <i class="feather-arrow-left me-2"></i>
                    <span>Back</span>
                </a>
            </div> -->
            <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                <!-- <a href="javascript:void(0);" class="btn btn-light-brand successAlertMessage">
                    <i class="feather-layers me-2"></i>
                    <span>Save as Draft</span>
                </a> -->
                @if(auth()->user()->role_id == 1)
                <a href="{{ route('add_gallery') }}" class="btn btn-primary">
                    <i class="feather-folder me-2"></i>
                    <span>Add Gallery</span>
                </a>
                @endif

                @if(auth()->user()->role_id == 2)
                <a href="{{ route('add_gallery') }}" class="btn btn-primary">
                    <i class="feather-folder me-2"></i>
                    <span>Add Proposal</span>
                </a>
                @endif
            </div>
        </div>
        <div class="d-md-none d-flex align-items-center">
            <a href="javascript:void(0)" class="page-header-right-open-toggle">
                <i class="feather-align-right fs-20"></i>
            </a>
        </div>
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
        @if($galleries)
        @foreach($galleries as $gallery)
        <div class="col-xxl-4 col-lg-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset($gallery->thumbnail); }}" style="height: 18rem;object-fit: cover;" alt="Card image cap">
                <div class="card-body text-center ">
                    <h5 class="card-title">{{ $gallery->g_name }}</h5>
                    <p class="card-text">{{ $gallery->created_at }}</p>
                    <a href="{{ url('/admin/view_gallery/'.$gallery->g_id) }}" class="btn btn-primary col-6 ms-auto me-auto">View</a>
                </div>
            </div>
        </div>
        @endforeach
        @endif
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