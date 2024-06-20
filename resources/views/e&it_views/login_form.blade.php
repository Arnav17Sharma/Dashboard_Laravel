@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT | News')
@section('content')
<section class="page-header" style="height: 30vh;">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top: 50px;">
            <h2>Login</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Home</a></li>
                <li><span>/</span></li>
                <li>Login</li>
            </ul>
        </div>
    </div>
</section>

@include('e&it_views.include.updates')

<section class="contact-one">
    <!-- <div class="contact-one__bg" style="background-image: url(user_assets/images/backgrounds/contact-one-bg.png);"> -->
    <div class="contact-one__bg">
    </div>
    <div class="container">
        @if($errors->any())
        <div class="col-12 mt-4">
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        </div>
        @endif
        @if(session()->has('error'))
        <div class="col-8 alert alert-danger ms-auto me-auto mt-4">{{session('error')}}</div>
        @endif
        @if(session()->has('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif
        <div class="section-title text-center mt-4">
            <div class="section-title__icon">
                <span class="fa fa-star" style="color: #0b66c2;"></span>
            </div>
            <span class="section-title__tagline">Chhattisgarh Infotech Promotion Society</span>
            <h2 class="section-title__title">Login</h2>
        </div>
        <div class="contact-one__form-box">
            <form action="{{ route('login_post') }}" method="POST" class="contact-one__form">
                @csrf
                <div class="column">
                    <div class="col-xl-6 mx-auto">
                        <div class="contact-one__input-box">
                            <input type="email" placeholder="Email" name="email">
                        </div>
                    </div>
                    <div class="col-xl-6 mx-auto">
                        <div class="contact-one__input-box">
                            <input type="text" placeholder="Password" name="password"
                                style="-webkit-text-security: disc;text-security: disc;">
                        </div>
                    </div>
                    <div class="contact-one__btn-box">
                        <input type="submit" class="thm-btn contact-one__btn" value="Login">
                    </div>
            </form>
        </div>
    </div>
</section>
@endsection