@extends('verified_views.layout')
@section('title', 'Add Notice/Tender')
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
            <h5 class="m-b-10">Add Notice/Tender</h5>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Notices & Tenders</a></li>
            <li class="breadcrumb-item">Add Notice/Tender</li>
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
        <div class="col-xxl-7 col-md-6 ms-auto me-auto" data-select2-id="select2-data-6-ktob">
            <div class="card stretch-full" data-select2-id="select2-data-5-p6zd">
                <div class="card-body" data-select2-id="select2-data-4-c1qo">
                    <form action="{{ route('add_notice_board_post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4 mx-auto" data-select2-id="select2-data-3-81zl">
                            <label class="form-label">Type<span class="text-danger">*</span></label>
                            <select class="form-control select2-hidden-accessible" data-select2-selector="status"
                                tabindex="-1" aria-hidden="true" name="type" style="text-transform: capitalize;">

                                @foreach ($all_types as $type)
                                    <option value="{{ $type->id }}">{{ $type->type }}</option>
                                @endforeach
                                

                                <!-- <option value="1" data-bg="bg-danger" selected="" data-select2-id="select2-data-48-8kfe">Admin</option> -->
                                <!-- <option value="2" data-bg="bg-warning" data-select2-id="select2-data-174-a4dr">Notice
                                </option>
                                <option value="3" data-bg="bg-success" data-select2-id="select2-data-175-qeys">Tender
                                </option> -->
                            </select>
                        </div>
                        <div class="row">
                            <div class="mb-4">
                                <label class="form-label">Title<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Full Name" name="title">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-4">
                                <label class="form-label">Department <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Email" name="department">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-4">
                                <label class="form-label">URL <span class="text-success">(Optional)</span></label>
                                <input type="text" class="form-control" placeholder="Email" name="url">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-4">
                                <label class="form-label">Attachments <span class="text-danger">*</span></label>
                                <input name="files[]" class="form-control" type="file" multiple>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <input class="col-lg-6 row ms-auto me-auto btn btn-primary" type="submit"
                                id="commentSwitch">
                        </div>
                    </form>
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