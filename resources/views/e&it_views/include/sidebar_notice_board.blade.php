<div class="col-xl-4 col-lg-5 mt-5">
    <div class="department-details__right">
        <div class="row mb-3">
            <div class="col-7">
                <h3><b>NOTICE BOARD</b></h3>
            </div>
            <div class="col-5">
                <a style="float: right;margin-right: 20px;" href="{{ route('eit_view_notice_board') }}">
                    <p style="text-decoration: underline;">Read more...</p>
                </a>
            </div>
        </div>
        <div class="department-details__services-box">
            <ul class="department-details__services-list list-unstyled">
                @foreach ($notices as $notice_new)
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