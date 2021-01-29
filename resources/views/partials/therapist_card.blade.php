<div id="current-page" data-page="{{ $therapists->currentPage() }}"></div>

<div class="col-lg-4 col-md-6 px-md-2 mb16 " style="margin-bottom: 16px">
    <div class="recommendation-card">
        <img src="{{ asset('assets/images/search/recommendation-card-bg.svg') }}"
             class="recommended-image">
        <div class="recommendation-content">
            <div class="text-white fbold fz16">لا أعرف كيفية</div>
            <div class="text-white fbold fz16">اختيار المعالج المناسب؟</div>
        </div>
        <div class="mt32 mb32 d-flex justify-content-center">
            <div class="recommendation-btn pointer fz14 pr32 pl32 pt8 pb8">
                ترشيحات شيزلونج
            </div>
        </div>
    </div>
</div>
@foreach($therapists as $key => $therapist)
    <div class="col-lg-4 col-md-6 px-md-2 mb16 " style="margin-bottom: 16px">

    <div class="doctor-card">
        <div class="therapist-details ">
            <div class="profile-pic-container">
                <a><img class="pic img pointer online" src="{{ $therapist->avatar }}"></a>
            </div>
            <div class="profile-details text-md-center text-center sm-ml16">
                <div class="mt8 d-flex align-items-center justify-content-center">
                    <div class="fz16 text-blue name">{{ $therapist->name }}</div>
                </div>
                <div class="title mt8">{{ $therapist->title }}</div>
                <div class="rate">
                    <div class="rating-container pointer">
                        <div class="rating_container">
                            <div class="yellow_stars">
                                <span class="fa fa-star" style="color: yellow;"></span>
                                <span
                                    class="fa fa-star" style="color: yellow;"></span>
                                <span
                                    class="fa fa-star" style="color: yellow;"></span>
                                <span
                                    class="fa fa-star" style="color: yellow;"></span>
                                <span
                                    class="fa fa-star" style="color: yellow;"></span>
                            </div>
                        </div>
                    </div>
                    <div class="rate-value">4.92</div>
                    (<span class="rate-count">226 تقييم</span>)
                </div>
            </div>
            <div class="speciality fmedium mt8">
                @if($therapist->mainSpec)
                    متخصص فى
                    {{ $therapist->mainSpec }}
                @endif
            </div>
            <div class="session-details">
                <span class="fees">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 51 26" style="width: 20px;">
                        <defs>
                            <style>.cls-1-fees {
                                    fill: #3da8c0;
                                }

                                .cls-2-fees, .cls-3-fees {
                                    fill: #fff;
                                }

                                .cls-3-fees {
                                    stroke: #fff;
                                    stroke-width: 0.8px;
                                }

                                .cls-3-fees, .cls-4-fees {
                                    stroke-miterlimit: 10;
                                }

                                .cls-4-fees {
                                    fill: none;
                                    stroke: #3da8c0;
                                }
                            </style>
                        </defs>
                        <title>Egp</title>
                        <g
                            id="Layer_2" data-name="Layer 2"><g
                                id="Layer_1-2" data-name="Layer 1"><rect
                                    class="cls-1-fees" x="0.5" y="0.5"
                                    width="50" height="25" rx="2"
                                    ry="2"></rect><path class="cls-2-fees"
                                                        d="M49.49.5a1,1,0,0,1,1,1v5.4a4.91,4.91,0,0,1-.86.08A5.63,5.63,0,0,1,44,1.36,4.91,4.91,0,0,1,44.09.5Z"></path><path
                                    class="cls-2-fees"
                                    d="M7,1.36A5.63,5.63,0,0,1,1.36,7,4.91,4.91,0,0,1,.5,6.91V1.84A1.34,1.34,0,0,1,1.84.5H6.91A4.91,4.91,0,0,1,7,1.36Z"></path><path
                                    class="cls-2-fees"
                                    d="M50.5,18.79V24.3a1.2,1.2,0,0,1-1.2,1.2H44.13A6.34,6.34,0,0,1,44,24.34a5.63,5.63,0,0,1,5.63-5.63A4.11,4.11,0,0,1,50.5,18.79Z"></path><path
                                    class="cls-2-fees"
                                    d="M7,24.34a6.34,6.34,0,0,1-.12,1.16H1.37a.87.87,0,0,1-.87-.87V18.79a4.11,4.11,0,0,1,.86-.08A5.63,5.63,0,0,1,7,24.34Z"></path><circle
                                    class="cls-2-fees" cx="41.5" cy="13"
                                    r="2"></circle><circle
                                    class="cls-2-fees" cx="9.5" cy="13"
                                    r="2"></circle><path class="cls-3-fees"
                                                         d="M19.54,13.25h-3v2.93h3.38v.88H15.5V8.94h4.22v.88H16.51v2.57h3Z"></path><path
                                    class="cls-3-fees"
                                    d="M28.15,16.7a7.1,7.1,0,0,1-2.4.44,3.91,3.91,0,0,1-2.92-1.07,4.27,4.27,0,0,1-1.09-3A4,4,0,0,1,26,8.86a4.71,4.71,0,0,1,2,.37l-.25.85A4,4,0,0,0,26,9.74,3,3,0,0,0,22.81,13c0,2.06,1.19,3.28,3,3.28a3.14,3.14,0,0,0,1.34-.22V13.64H25.57V12.8h2.58Z"></path><path
                                    class="cls-3-fees"
                                    d="M30.69,9a10.75,10.75,0,0,1,1.94-.16,3.12,3.12,0,0,1,2.19.68,2.19,2.19,0,0,1,.68,1.69A2.46,2.46,0,0,1,34.9,13a3.18,3.18,0,0,1-2.39.89,3.35,3.35,0,0,1-.81-.07v3.25h-1Zm1,3.91a3.23,3.23,0,0,0,.83.09c1.22,0,2-.62,2-1.74s-.73-1.59-1.84-1.59a3.88,3.88,0,0,0-.95.09Z"></path><rect
                                    class="cls-4-fees" x="0.5" y="0.5"
                                    width="50" height="25" rx="2" ry="2"></rect></g></g>
                    </svg>
                    جنيه 260
                </span>
                <span class="sessions">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 54" style="width: 20px;">
                        <defs>
                            <style>
                                .cls-1-video {
                                    fill: #3da8c0;
                                }

                                .cls-2-video {
                                    fill: #f4794c;
                                }</style>
                        </defs>
                        <title>session</title>
                        <g
                            id="Layer_2" data-name="Layer 2"><g
                                id="Layer_1-2" data-name="Layer 1"><path
                                    class="cls-1-video"
                                    d="M5.46,26.88v-18A1.68,1.68,0,0,1,7.92,7.36L25.3,16.48l17.32,9a1.65,1.65,0,0,1,0,2.88l-17.32,9L7.92,46.4a1.68,1.68,0,0,1-2.46-1.47Z"></path><path
                                    class="cls-2-video"
                                    d="M4.13,2a2.11,2.11,0,0,1,1,.25l22,11.56L48.94,25.17a2.11,2.11,0,0,1,0,3.66L27.16,40.19l-22,11.56A2.12,2.12,0,0,1,2,49.89V4.11A2.12,2.12,0,0,1,4.13,2m0-2h0A4.13,4.13,0,0,0,0,4.11V49.89A4.13,4.13,0,0,0,4.13,54a4,4,0,0,0,1.92-.48L28.09,42,49.86,30.6l0,0,0,0a4.1,4.1,0,0,0,0-7.12l0,0,0,0L28.09,12,6.05.48A4,4,0,0,0,4.13,0Z"></path></g></g>
                    </svg>
                    800+ جلسة
                </span>
            </div>
        </div>
        <div class="buttons">
            <div id="reserve-now-btn" class="book fz14 fz-rtl13" onclick="get_profile()">الحجز الان</div>
            <div class="view-profile fz-rtl12">عرض الصفحة الشخصية</div>
        </div>
    </div>
    </div>
@endforeach
