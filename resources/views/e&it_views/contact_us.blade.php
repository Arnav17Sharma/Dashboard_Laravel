@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT | Home')
@section('content')
<section class="page-header" style="height: 30vh;">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Contact Us</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Home</a></li>
                <li><span>/</span></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</section>


<section class="contact-page">
    <div class="container">
        <div class="contact-page__top">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="section-title text-left">
                        <div class="section-title__icon">
                            <span class="fa fa-star"></span>
                        </div>
                        <h2 class="section-title__title">Get in touch now</h2>
                    </div>
                    <div class="contact-one__form-box">
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
                        <form action="{{ route('view_message_id_post') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="contact-one__input-box">
                                        <input type="text" placeholder="Your Name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-one__input-box">
                                        <input type="email" placeholder="Email Address" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-one__input-box text-message-box">
                                        <textarea name="message" placeholder="Write Comment"></textarea>
                                    </div>
                                    <div class="contact-one__btn-box">
                                        <input type="submit" class="thm-btn contact-one__btn" value="Message">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="result"></div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-page__right">
                        <div class="section-title text-left">
                            <div class="section-title__icon">
                                <span class="fa fa-star"></span>
                            </div>
                            <h2 class="section-title__title">Contact Us</h2>
                        </div>
                        <!-- <p class="contact-page__text">Lorem ipsum dolor sit amet, consectetur notted adipis not
                                    icing elit sed do eiusmod tempor incididunt.</p> -->
                        <ul class="list-unstyled contact-page__contact-list">
                            <li>
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="content">
                                    <p>Have any Question?</p>
                                    <h4><a href="tel:+917714014158">+91 (771) 4014158 /4023123</a>
                                    </h4>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <p>Write Email</p>
                                    <h4><a href="mailto:ceochips@nic.in">ceochips@nic.in</a></h4>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-address-card"></i>
                                </div>
                                <div class="content">
                                    <p>Visit Anytime</p>
                                    <h4>3rd Floor, State Data Centre Building,
                                        Opp. <br>New Circuit House,
                                        Civil Lines, Raipur</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>



<section class="team-one team-page">
    <div class="container">
        <div class="team-one__inner">
            <div class="row">
                <!--Team One Single Start-->
                <div class="col-xl-4 col-lg-4">
                    <div class="team-one__single">

                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('eit_assets/images/people/cm.jpg'); }}" style="height:319px;">
                            </div>
                        </div>
                        <div class="team-one__content">
                            <h3 class="team-one__name"><a href="team-details.html">Shri Vishnu Dev Say</a></h3>
                            <p class="team-one__sub-title">Honourable Chief Minister<br> Chhattisgarh</p>

                        </div>
                    </div>
                </div>
                <!--Team One Single End-->


                <!--Team One Single Start-->
                <div class="col-xl-4 col-lg-4">
                    <div class="team-one__single">

                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('eit_assets/images/people/niharika_barikh.jpg'); }}"
                                    style="height:319px;">
                            </div>
                        </div>
                        <div class="team-one__content">
                            <h3 class="team-one__name"><a href="team-details.html">Niharika Barik Singh</a></h3>
                            <p class="team-one__sub-title">Principal Secretary (Department of Electronics & Information
                                Technology)</p>

                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="col-xl-4 col-lg-4">
                    <div class="team-one__single">
                        <!-- <div class="team-one__shape-4">
                                    <img src="assets/images/shapes/team-one-shape-4.png" alt="">
                                </div> -->
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('eit_assets/images/people/RiteshKumarAgarwal_IAS.jpg'); }}"
                                    style="height:319px;">
                            </div>
                        </div>
                        <div class="team-one__content">
                            <h3 class="team-one__name"><a href="team-details.html">Mr. Ritesh Kumar Agarwal (IAS)</a>
                            </h3>
                            <p class="team-one__sub-title">Joint Secretary (Department of Electronics & Information
                                Technology)</p>
                            <!--  <div class="team-one__social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div> -->
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
            </div>
        </div>
    </div>
</section>

@endsection