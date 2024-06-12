@extends('verified_views.layout')
@section('title', 'Add Member')
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
            <h5 class="m-b-10">Add Gallery</h5>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Gallery</a></li>
            <li class="breadcrumb-item">Add Gallery</li>
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
        <div class="col-xxl-10 col-md-10 ms-auto me-auto" data-select2-id="select2-data-6-ktob">
            <div class="card stretch-full" data-select2-id="select2-data-5-p6zd">
                <div class="card-body" data-select2-id="select2-data-4-c1qo">
                    <form action="{{ route('add_gallery_post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-4">
                                <label class="form-label">Gallery Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Full Name" name="name">
                            </div>
                        </div>
                        <section class="step-body mt-2 body current" id="project-create-steps-p-6" role="tabpanel"
                            aria-labelledby="project-create-steps-h-6" aria-hidden="false" style="left: 0px;">
                            <div>
                                <div class="mb-2">
                                <label class="form-label">Gallery Thumbnail File<span class="text-danger">*</span></label>
                                </div>
                                <div class="mb-4 ms-auto me-auto">
                                    <label for="choose-file" class="text-center" id="choose-file-label">
                                    <img src="{{ asset('assets/images/file-icons/png.png'); }}" class="img-fluid wd-30 ht-30" alt="">    
                                    Upload Document </label>
                                    <input name="thumbnail" type="file" id="choose-file" accept="image/png, image/gif, image/jpeg, image/jpg">
                                </div>
                            </div>
                        </section>
                        <div class="row mb-2">
                            <input class="col-lg-6 col-sm-6 row ms-auto me-auto btn btn-primary" type="submit"
                                id="commentSwitch">
                        </div>
                    </form>
                </div>
            </div>
        </div>
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