@extends('layout')
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
    <h1>Sample Text</h1>
    <h1>Sample Text</h1>
    <h1>Sample Text</h1>
    <h1>Sample Text</h1>
    <h1>Sample Text</h1>
    <h1>Sample Text</h1>
    <h1>Sample Text</h1>
    <h1>Sample Text</h1>
    <h1>Sample Text</h1>
    <h1>Sample Text</h1>
    <h1>Sample Text</h1>
    <h1>Sample Text</h1>
    <h1>Sample Text</h1>
    <h1>Sample Text</h1>
    <h1>Sample Text</h1>
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