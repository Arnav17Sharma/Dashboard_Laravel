<section class="event-three" style=" background-image:url('eit_assets/images/backgrounds/department-one-bg.png');">
    <div class="container">
        <div class="row ">

            <div class="col-xl-4 col-lg-5">
                <div class="department-details__right" style="height: 40vh;">
                    <div class="row mb-3">
                        <div class="col-6">
                            <h3><b>TENDERS</b></h3>
                        </div>
                        <div class="col-6">
                            <a style="float: right;margin-right: 20px;" href="{{ route('eit_view_tenders') }}">
                                <p style="text-decoration: underline;">Read more...</p>
                            </a>
                        </div>
                    </div>
                    <div class="department-details__services-box">
                        <ul class="department-details__services-list list-unstyled">
                            @foreach ($total_tenders as $notice_new)
                            @php
                            if(strlen($notice_new->title) > 40) {
                            $notice_new->title = substr($notice_new->title, 0, 40) . '...';
                            }
                            @endphp
                            <li>
                                <a style="height: 8vh;overflow:hidden;"
                                    href="{{ url('/view_notice/'.$notice_new->id) }}">{{ $notice_new->title }}<i
                                        class="fa fa-arrow-right"></i></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-5">
                <div class="department-details__right" style="height: 40vh;">
                    <div class="row mb-3">
                        <div class="col-6">
                            <h3><b>NEWS</b></h3>
                        </div>
                        <div class="col-6">
                            <a style="float: right;margin-right: 20px;" href="{{ route('eit_view_news') }}">
                                <p style="text-decoration: underline;">Read more...</p>
                            </a>
                        </div>
                    </div>
                    <div class="department-details__services-box">
                        <ul class="department-details__services-list list-unstyled">
                            @foreach ($total_news as $notice_new)
                            @php
                            if(strlen($notice_new->title) > 40) {
                            $notice_new->title = substr($notice_new->title, 0, 40) . '...';
                            }
                            @endphp
                            <li>
                                <a style="height: 8vh;overflow:hidden;"
                                    href="{{ url('/view_notice/'.$notice_new->id) }}">{{ $notice_new->title }}<i
                                        class="fa fa-arrow-right"></i></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-5">
                <div class="department-details__right" style="height: 40vh;">
                    <div class="row mb-3">
                        <div class="col-6">
                            <h3><b>CIRCULARS</b></h3>
                        </div>
                        <div class="col-6">
                            <a style="float: right;margin-right: 20px;" href="{{ route('eit_view_circulars') }}">
                                <p style="text-decoration: underline;">Read more...</p>
                            </a>
                        </div>
                    </div>
                    <div class="department-details__services-box">
                        <ul class="department-details__services-list list-unstyled">
                            @foreach ($total_circulars as $notice_new)
                            @php
                            if(strlen($notice_new->title) > 40) {
                            $notice_new->title = substr($notice_new->title, 0, 40) . '...';
                            }
                            @endphp
                            <li>
                                <a style="height: 8vh;overflow:hidden;"
                                    href="{{ url('/view_notice/'.$notice_new->id) }}">{{ $notice_new->title }}<i
                                        class="fa fa-arrow-right"></i></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>