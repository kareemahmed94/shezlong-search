@extends('layouts.master')
@section('content')

    {{--    header sterpper--}}
    <div class="therapist-header">
        <div class="steps">
            <div class="container">
                <div class="row animated slideInDown">
                    <div class="col-md-12 step-title">3 خطوات نحو
                        حياة افضل
                    </div>
                    <div class="col-md-2 offset-md-2 step active">اختار المعالج</div>
                    <div class="col-md-1 line"></div>
                    <div class="col-md-2 step">حدد التاريخ والوقت</div>
                    <div class="col-md-1 line"></div>
                    <div class="col-md-2 step">أكمل عملية الدفع</div>
                </div>
            </div>
        </div>
    </div>

    {{--    search--}}
    <div class="search-bar">
        <div class="container">
            <div class="row text-dark1 search-inputs-container">
                <div class="col-md-3 col-5 offset-md-3">
                    <div class="input-group search-icon">
                        <span class="input-group-text">
                            <img src="{{ asset('assets/images/search/search-icon.svg') }}">
                        </span>

                        <input type="text" class="form-control" placeholder="بحث بأسم المعالج">
                    </div>
                </div>
                <div class="col-md-3 col-3 no-sm-p">
                    <div class=" search-icon">
                        <select class="form-select" aria-label="Categories"
                                style="border: 1px solid #ced4da!important;">
                            <option selected>جميع التخصصات</option>
                            <option value="1">مشاكل الأطفال</option>
                            <option value="2">مشاكل المراهقة</option>
                            <option value="3">الاكتئاب</option>
                            <option value="3">القلق والوسواس</option>
                            <option value="3">استشارات الزواج / مشاكل العلاقات</option>
                            <option value="3">اضطرابات الفصام</option>
                            <option value="3">الإدمان</option>
                            <option value="3">المشاكل الجنسية</option>
                            <option value="3">مشاكل الشيخوخة</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 col-4 no-sm-p">
                    <div class="input-group search-icon">
                        <span class="input-group-text">
                            <img src="{{ asset('assets/images/search/sort-icon.svg') }}">
                            <span class="fz16 w110 d-md-block d-none">رتب حسب</span>
                        </span>
                        <select class="form-select" aria-label="Sort Select">
                            <option selected>اختر</option>
                            <option value="1">السعر : من الأقل للأعلى</option>
                            <option value="2">السعر : من الأعلى للأقل</option>
                            <option value="3">الأعلى تقييم</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    content--}}
    <div class="search-results-filters mb60">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 d-none d-md-block">
                    <div class="filters-container bg-white">
                        <div role="button"
                             class="filters-header d-flex align-items-center justify-content-between bg-blue text-white pt8 pb8 pr16 pl16 rounded-top sm-no-border-radius ng-star-inserted">
                            <span class="fz20">التصنيف</span><span class="fz14 pointer">مسح التصنيف</span></div>
                        <div class="filters-body pr16 pl16 pt20 pb100 fz14 ng-star-inserted">
                            <div class="filter mb32 mt16 d-md-none d-block">
                                <mat-select role="combobox" aria-autocomplete="none" aria-haspopup="true"
                                            class="mat-select form-control fz16 ng-tns-c163-5 ng-untouched ng-pristine ng-valid ng-star-inserted"
                                            placeholder="جميع التخصصات" aria-labelledby=" mat-select-value-9"
                                            id="mat-select-8" tabindex="0" aria-expanded="false" aria-required="false"
                                            aria-disabled="false" aria-invalid="false">
                                    <div cdk-overlay-origin="" class="mat-select-trigger ng-tns-c163-5">
                                        <div class="mat-select-value ng-tns-c163-5" id="mat-select-value-9"><span
                                                class="mat-select-value-text ng-tns-c163-5 ng-star-inserted"><span
                                                    class="ng-tns-c163-5 ng-star-inserted">جميع التخصصات</span>
                                                </span></div>
                                        <div class="mat-select-arrow-wrapper ng-tns-c163-5">
                                            <div class="mat-select-arrow ng-tns-c163-5"></div>
                                        </div>
                                    </div></mat-select></div>
                            <div class="filter">
                                <div class="text-blue d-flex align-items-center">
                                    <svg-icon src="assets/images/search/time.svg" class="mr8 filter-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"
                                             style="width: 25px;">
                                            <defs>
                                                <style>.cls-1-clock {
                                                        fill: #3da8c0;
                                                    }

                                                    .cls-2-clock, .cls-3-clock {
                                                        fill: none;
                                                        stroke: #fff;
                                                        stroke-miterlimit: 10;
                                                        stroke-width: 2px;
                                                    }

                                                    .cls-3-clock {
                                                        stroke-linecap: round;
                                                    }</style>
                                            </defs>
                                            <title>time</title>
                                            <g id="Layer_2" data-name="Layer 2">
                                                <g id="Layer_1-2" data-name="Layer 1">
                                                    <circle class="cls-1-clock" cx="25" cy="25" r="25"></circle>
                                                    <polyline class="cls-2-clock"
                                                              points="25 11.21 25 25.44 37.85 31.29"></polyline>
                                                    <line class="cls-3-clock" x1="25" y1="4.24" x2="25"
                                                          y2="5.61"></line>
                                                    <line class="cls-3-clock" x1="25" y1="45.15" x2="25"
                                                          y2="46.52"></line>
                                                    <line class="cls-3-clock" x1="46.14" y1="25.38" x2="44.77"
                                                          y2="25.38"></line>
                                                    <line class="cls-3-clock" x1="5.23" y1="25.38" x2="3.86"
                                                          y2="25.38"></line>
                                                    <line class="cls-3-clock" x1="39.95" y1="10.43" x2="38.98"
                                                          y2="11.4"></line>
                                                    <line class="cls-3-clock" x1="11.02" y1="39.36" x2="10.05"
                                                          y2="40.32"></line>
                                                    <line class="cls-3-clock" x1="39.95" y1="40.32" x2="38.98"
                                                          y2="39.36"></line>
                                                    <line class="cls-3-clock" x1="11.02" y1="11.4" x2="10.05"
                                                          y2="10.43"></line>
                                                </g>
                                            </g>
                                        </svg>
                                    </svg-icon>
                                    <span class="fz14">المواعيد المتاحة والمدة </span></div>
                                <div class="d-flex align-items-center mt16"><span class="mr15 text-dark1"><mat-checkbox
                                            class="mat-checkbox mat-accent" id="mat-checkbox-1"><label
                                                class="mat-checkbox-layout" for="mat-checkbox-1-input"><div
                                                    class="mat-checkbox-inner-container"><input type="checkbox"
                                                                                                class="mat-checkbox-input cdk-visually-hidden"
                                                                                                id="mat-checkbox-1-input"
                                                                                                tabindex="0"
                                                                                                aria-checked="false"><div
                                                        matripple=""
                                                        class="mat-ripple mat-checkbox-ripple mat-focus-indicator"><div
                                                            class="mat-ripple-element mat-checkbox-persistent-ripple"></div></div><div
                                                        class="mat-checkbox-frame"></div><div
                                                        class="mat-checkbox-background"><svg version="1.1"
                                                                                             focusable="false"
                                                                                             viewBox="0 0 24 24"
                                                                                             xml:space="preserve"
                                                                                             class="mat-checkbox-checkmark"><path
                                                                fill="none" stroke="white" d="M4.1,12.7 9,17.6 20.3,6.3"
                                                                class="mat-checkbox-checkmark-path"></path></svg><div
                                                            class="mat-checkbox-mixedmark"></div></div></div><span
                                                    class="mat-checkbox-label"><span
                                                        style="display: none;">&nbsp;</span>اليوم</span></label></mat-checkbox></span>
                                    <mat-checkbox class="mat-checkbox mat-accent" id="mat-checkbox-2"><label
                                            class="mat-checkbox-layout" for="mat-checkbox-2-input">
                                            <div class="mat-checkbox-inner-container"><input type="checkbox"
                                                                                             class="mat-checkbox-input cdk-visually-hidden"
                                                                                             id="mat-checkbox-2-input"
                                                                                             tabindex="0"
                                                                                             aria-checked="false">
                                                <div matripple=""
                                                     class="mat-ripple mat-checkbox-ripple mat-focus-indicator">
                                                    <div
                                                        class="mat-ripple-element mat-checkbox-persistent-ripple"></div>
                                                </div>
                                                <div class="mat-checkbox-frame"></div>
                                                <div class="mat-checkbox-background">
                                                    <svg version="1.1" focusable="false" viewBox="0 0 24 24"
                                                         xml:space="preserve" class="mat-checkbox-checkmark"><path
                                                            fill="none" stroke="white" d="M4.1,12.7 9,17.6 20.3,6.3"
                                                            class="mat-checkbox-checkmark-path"></path></svg>
                                                    <div class="mat-checkbox-mixedmark"></div>
                                                </div>
                                            </div>
                                            <span class="mat-checkbox-label"><span style="display: none;">&nbsp;</span>هذا الاسبوع</span></label>
                                    </mat-checkbox>
                                </div>
                            </div>
                            <div class="filter mt16">
                                <div class="filter-name text-dark1 fz14">متاح من : اختر ميعاد</div>
                                <input class="mat-datepicker-input form-control mt8 ng-untouched ng-pristine ng-valid"
                                       placeholder="اختر تاريخ" aria-haspopup="dialog"
                                       data-mat-calendar="mat-datepicker-0">
                                <mat-datepicker></mat-datepicker>
                                <div class="filter-name text-dark1 fz14 mt8">متاح إلى: اختر ميعاد</div>
                                <input class="mat-datepicker-input form-control mt8 ng-untouched ng-pristine"
                                       placeholder="اختر تاريخ" disabled="" aria-haspopup="dialog"
                                       data-mat-calendar="mat-datepicker-1">
                                <mat-datepicker></mat-datepicker></div>
                            <div class="filter mt16">
                                <div class="filter-name text-dark2 fz14"> Duration:</div>
                                <div class="mt8"><span class="mr15 text-dark1"><mat-checkbox
                                            class="mat-checkbox mat-accent" id="mat-checkbox-3"><label
                                                class="mat-checkbox-layout" for="mat-checkbox-3-input"><div
                                                    class="mat-checkbox-inner-container"><input type="checkbox"
                                                                                                class="mat-checkbox-input cdk-visually-hidden"
                                                                                                id="mat-checkbox-3-input"
                                                                                                tabindex="0"
                                                                                                aria-checked="false"><div
                                                        matripple=""
                                                        class="mat-ripple mat-checkbox-ripple mat-focus-indicator"><div
                                                            class="mat-ripple-element mat-checkbox-persistent-ripple"></div></div><div
                                                        class="mat-checkbox-frame"></div><div
                                                        class="mat-checkbox-background"><svg version="1.1"
                                                                                             focusable="false"
                                                                                             viewBox="0 0 24 24"
                                                                                             xml:space="preserve"
                                                                                             class="mat-checkbox-checkmark"><path
                                                                fill="none" stroke="white" d="M4.1,12.7 9,17.6 20.3,6.3"
                                                                class="mat-checkbox-checkmark-path"></path></svg><div
                                                            class="mat-checkbox-mixedmark"></div></div></div><span
                                                    class="mat-checkbox-label"><span
                                                        style="display: none;">&nbsp;</span>30 دقيقة</span></label></mat-checkbox></span>
                                    <mat-checkbox class="mat-checkbox mat-accent" id="mat-checkbox-4"><label
                                            class="mat-checkbox-layout" for="mat-checkbox-4-input">
                                            <div class="mat-checkbox-inner-container"><input type="checkbox"
                                                                                             class="mat-checkbox-input cdk-visually-hidden"
                                                                                             id="mat-checkbox-4-input"
                                                                                             tabindex="0"
                                                                                             aria-checked="false">
                                                <div matripple=""
                                                     class="mat-ripple mat-checkbox-ripple mat-focus-indicator">
                                                    <div
                                                        class="mat-ripple-element mat-checkbox-persistent-ripple"></div>
                                                </div>
                                                <div class="mat-checkbox-frame"></div>
                                                <div class="mat-checkbox-background">
                                                    <svg version="1.1" focusable="false" viewBox="0 0 24 24"
                                                         xml:space="preserve" class="mat-checkbox-checkmark"><path
                                                            fill="none" stroke="white" d="M4.1,12.7 9,17.6 20.3,6.3"
                                                            class="mat-checkbox-checkmark-path"></path></svg>
                                                    <div class="mat-checkbox-mixedmark"></div>
                                                </div>
                                            </div>
                                            <span class="mat-checkbox-label"><span style="display: none;">&nbsp;</span>60 Min </span></label>
                                    </mat-checkbox>
                                </div>
                            </div>
                            <div class="filter mt35">
                                <div class="d-flex align-items-center text-blue d-flex align-items-center">
                                    <svg-icon src="assets/images/search/Gender.svg" class="mr8 filter-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20.377"
                                             viewBox="0 0 22 20.377" style="width: 25px;">
                                            <g id="Group_2045" data-name="Group 2045"
                                               transform="translate(-93.121 -242.053)">
                                                <g id="Group_2040" data-name="Group 2040"
                                                   transform="translate(93.449 253.554)">
                                                    <g id="Group_2038" data-name="Group 2038"
                                                       transform="translate(0 1.057)">
                                                        <path id="Path_2188" data-name="Path 2188"
                                                              d="M95.306,276.3l-1.376-3.714a.419.419,0,1,1,.786-.291l1.086,2.931,3.027-1.1a.419.419,0,1,1,.287.787Z"
                                                              transform="translate(-93.904 -272.018)"
                                                              fill="#3da8c0"></path>
                                                    </g>
                                                    <g id="Group_2039" data-name="Group 2039"
                                                       transform="translate(1.311 0)">
                                                        <path id="Path_2189" data-name="Path 2189"
                                                              d="M97.45,274.6a.419.419,0,0,1-.38-.6l1.991-4.269a.419.419,0,1,1,.759.354l-1.99,4.269A.42.42,0,0,1,97.45,274.6Z"
                                                              transform="translate(-97.031 -269.496)"
                                                              fill="#3da8c0"></path>
                                                    </g>
                                                </g>
                                                <g id="Group_2044" data-name="Group 2044"
                                                   transform="translate(93.121 242.053)">
                                                    <path id="Path_2190" data-name="Path 2190"
                                                          d="M113.977,246.036a6.527,6.527,0,0,0-10-2.367,6.557,6.557,0,1,0-.244,10.073,6.591,6.591,0,0,0,4.313,1.615,6.551,6.551,0,0,0,5.928-9.32Zm-12.493,7.544a5.3,5.3,0,1,1,1.582-9.032,6.542,6.542,0,0,0-.2,8.281A5.306,5.306,0,0,1,101.484,253.58Zm11.53-2.965a5.286,5.286,0,0,1-8.367,2.25,6.592,6.592,0,0,0,.964-1.492,6.545,6.545,0,0,0-.767-6.79,5.294,5.294,0,0,1,8.17,6.032Z"
                                                          transform="translate(-93.121 -242.053)" fill="#3da8c0"></path>
                                                    <g id="Group_2041" data-name="Group 2041"
                                                       transform="translate(21.271 20.377)">
                                                        <path id="Path_2191" data-name="Path 2191" d="M143.877,290.675"
                                                              transform="translate(-143.877 -290.675)" fill="none"
                                                              stroke="#3da8c0" stroke-linecap="round"
                                                              stroke-miterlimit="10" stroke-width="2"></path>
                                                    </g>
                                                    <g id="Group_2042" data-name="Group 2042"
                                                       transform="translate(16.936 11.56)">
                                                        <path id="Path_2192" data-name="Path 2192"
                                                              d="M136.475,275.884a.418.418,0,0,1-.38-.242l-2.522-5.408a.419.419,0,0,1,.76-.355l2.522,5.408a.419.419,0,0,1-.38.6Z"
                                                              transform="translate(-133.533 -269.638)"
                                                              fill="#3da8c0"></path>
                                                    </g>
                                                    <g id="Group_2043" data-name="Group 2043"
                                                       transform="translate(15.465 13.186)">
                                                        <path id="Path_2193" data-name="Path 2193"
                                                              d="M130.443,277.012a.419.419,0,0,1-.177-.8l5.7-2.657a.419.419,0,1,1,.355.759l-5.7,2.657A.414.414,0,0,1,130.443,277.012Z"
                                                              transform="translate(-130.023 -273.517)"
                                                              fill="#3da8c0"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </svg-icon>
                                    <span class="fz14">الجنس</span></div>
                                <div class="mt12">
                                    <mat-checkbox value="male" class="mat-checkbox mr30 mat-accent" id="mat-checkbox-5">
                                        <label class="mat-checkbox-layout" for="mat-checkbox-5-input">
                                            <div class="mat-checkbox-inner-container"><input type="checkbox"
                                                                                             class="mat-checkbox-input cdk-visually-hidden"
                                                                                             id="mat-checkbox-5-input"
                                                                                             tabindex="0" value="male"
                                                                                             aria-checked="false">
                                                <div matripple=""
                                                     class="mat-ripple mat-checkbox-ripple mat-focus-indicator">
                                                    <div
                                                        class="mat-ripple-element mat-checkbox-persistent-ripple"></div>
                                                </div>
                                                <div class="mat-checkbox-frame"></div>
                                                <div class="mat-checkbox-background">
                                                    <svg version="1.1" focusable="false" viewBox="0 0 24 24"
                                                         xml:space="preserve" class="mat-checkbox-checkmark"><path
                                                            fill="none" stroke="white" d="M4.1,12.7 9,17.6 20.3,6.3"
                                                            class="mat-checkbox-checkmark-path"></path></svg>
                                                    <div class="mat-checkbox-mixedmark"></div>
                                                </div>
                                            </div>
                                            <span class="mat-checkbox-label"><span style="display: none;">&nbsp;</span>ذكر</span></label>
                                    </mat-checkbox>
                                    <mat-checkbox value="female" class="mat-checkbox mat-accent" id="mat-checkbox-6">
                                        <label class="mat-checkbox-layout" for="mat-checkbox-6-input">
                                            <div class="mat-checkbox-inner-container"><input type="checkbox"
                                                                                             class="mat-checkbox-input cdk-visually-hidden"
                                                                                             id="mat-checkbox-6-input"
                                                                                             tabindex="0" value="female"
                                                                                             aria-checked="false">
                                                <div matripple=""
                                                     class="mat-ripple mat-checkbox-ripple mat-focus-indicator">
                                                    <div
                                                        class="mat-ripple-element mat-checkbox-persistent-ripple"></div>
                                                </div>
                                                <div class="mat-checkbox-frame"></div>
                                                <div class="mat-checkbox-background">
                                                    <svg version="1.1" focusable="false" viewBox="0 0 24 24"
                                                         xml:space="preserve" class="mat-checkbox-checkmark"><path
                                                            fill="none" stroke="white" d="M4.1,12.7 9,17.6 20.3,6.3"
                                                            class="mat-checkbox-checkmark-path"></path></svg>
                                                    <div class="mat-checkbox-mixedmark"></div>
                                                </div>
                                            </div>
                                            <span class="mat-checkbox-label"><span style="display: none;">&nbsp;</span>أنثي</span></label>
                                    </mat-checkbox>
                                </div>
                            </div>
                            <div class="filter mt35">
                                <div class="d-flex align-items-center text-blue d-flex align-items-center">
                                    <svg-icon src="assets/images/search/Rating.svg" class="mr8 filter-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 47.74"
                                             style="width: 25px;">
                                            <defs>
                                                <style>.cls-1-star {
                                                        fill: #3da8c0;
                                                    }</style>
                                            </defs>
                                            <title>rating</title>
                                            <g id="Layer_2" data-name="Layer 2">
                                                <g id="Layer_1-2" data-name="Layer 1">
                                                    <path class="cls-1-star"
                                                          d="M17.12,14.61,23.94.6a1.08,1.08,0,0,1,1.93,0l7,13.93a1.06,1.06,0,0,0,.81.59l15.42,2.15a1.08,1.08,0,0,1,.61,1.83L38.58,30a1.1,1.1,0,0,0-.3,1L41,46.31a1.08,1.08,0,0,1-1.56,1.14L25.62,40.28a1.07,1.07,0,0,0-1,0L10.87,47.61a1.07,1.07,0,0,1-1.56-1.12l2.55-15.37a1.09,1.09,0,0,0-.32-.95L.33,19.36a1.08,1.08,0,0,1,.59-1.84l15.4-2.32A1,1,0,0,0,17.12,14.61Z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </svg-icon>
                                    <span class="fz14">التقييم</span></div>
                                <div class="mt12 d-flex align-items-center">
                                    <cli-rating-filter>
                                        <fieldset class="rating"><input type="radio" value="5"
                                                                        name="undefined_rating"><label title="Rocks!">5
                                                stars</label><input type="radio" value="4"
                                                                    name="undefined_rating"><label title="Pretty good">4
                                                stars</label><input type="radio" value="3"
                                                                    name="undefined_rating"><label title="Meh">3
                                                stars</label><input type="radio" value="2"
                                                                    name="undefined_rating"><label title="Kinda bad">2
                                                stars</label><input type="radio" value="1"
                                                                    name="undefined_rating"><label
                                                title="Sucks big time">1 star</label></fieldset>
                                    </cli-rating-filter>
                                    <span class="text-dark1 fz14 ml16">و ما فوق</span></div>
                            </div>
                            <div class="filter mt35">
                                <div class="d-flex align-items-center text-blue d-flex align-items-center">
                                    <svg-icon src="assets/images/search/language.svg" class="mr8 filter-icon">
                                        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50"
                                             style="width: 25px;">
                                            <defs>
                                                <style>.cls-1 {
                                                        fill: none;
                                                    }

                                                    .cls-2-lang {
                                                        clip-path: url(#clip-path);
                                                    }

                                                    .cls-3-lang, .cls-5-lang {
                                                        fill: #3da8c0;
                                                    }

                                                    .cls-3-lang {
                                                        stroke: #3da8c0;
                                                        stroke-miterlimit: 10;
                                                    }

                                                    .cls-4-lang {
                                                        fill: #fff;
                                                    }</style>
                                                <clipPath id="clip-path">
                                                    <circle class="cls-1" cx="25" cy="25" r="25"></circle>
                                                </clipPath>
                                            </defs>
                                            <title>language</title>
                                            <g class="cls-2-lang">
                                                <g class="cls-2-lang">
                                                    <circle class="cls-3-lang" cx="25" cy="25" r="25"></circle>
                                                    <g class="cls-2-lang">
                                                        <path class="cls-4-lang"
                                                              d="M6.67,28.36h.92a2.45,2.45,0,0,0,.35.1L9,28.6a.2.2,0,0,1,.18.2h0a.2.2,0,0,0,.07.16l.19.16a1.65,1.65,0,0,0,.36.14h0l.56.22.24.09,0,0,.2.13a.34.34,0,0,1,.09.09.58.58,0,0,1,.19.28.43.43,0,0,1,0,.29l0,.1a.46.46,0,0,0,.14.12c.1.06.19.08.24.11s0,0,.24.1l.33.13.46.14a2.79,2.79,0,0,0,.59.13h.07a2.46,2.46,0,0,1,.3.16l.22.11s0,0,.15.11a.63.63,0,0,0,.18.16.2.2,0,0,1,.09.13l.08.43a.2.2,0,0,1,0,.13l-.09.17-.06.07-.22.16-.17.11-.14.1a.13.13,0,0,0-.06.07l-.07.11a.36.36,0,0,0,0,.1v.23l-.06.52v.21a.17.17,0,0,1,0,.07l-.13.39a.51.51,0,0,1-.1.2,1.22,1.22,0,0,1-.18.15,1,1,0,0,1-.24.18c-.09,0-.51.15-.51.15s-.15-.13-.26.09a3.41,3.41,0,0,1-.24.41l0,.05-1.12,1.32a.3.3,0,0,0,0,.1.11.11,0,0,1,0,.05c0,.07-.33.26-.37.31a4.81,4.81,0,0,1-.51.76,2.27,2.27,0,0,0-.35.27A1.14,1.14,0,0,1,9,39a1.08,1.08,0,0,0-.35.3l-.46,1a.22.22,0,0,0,0,.16.73.73,0,0,1,0,.16c0,.06-.15,0-.26.31a3.12,3.12,0,0,0-.14.59.16.16,0,0,1,0,.08.55.55,0,0,0-.08.18c0,.05.34.28.4.35l.1.14a.17.17,0,0,1,0,.13v.08a.21.21,0,0,1-.23.2l-.76-.07h0c-.11,0-.65-.19-.68-.29a3.38,3.38,0,0,1-.17-.68c0-.14.06-.53,0-.6s.06-.41,0-.46,0-.28,0-.33a.74.74,0,0,1,0-.34c.05-.09,0-.25.09-.34a2.2,2.2,0,0,0,.13-.34l.11-.42s0-.09,0-.2a6.36,6.36,0,0,0,.09-.68c0-.22,0-.64.06-.83s0-.4.07-.53A1.7,1.7,0,0,1,7,36.16a2.56,2.56,0,0,0,.15-.62c0-.27.09-.65.09-.74s0-.19,0-.29a.22.22,0,0,0-.07-.17l-.26-.22h0l-.75-.79,0,0a5,5,0,0,1-.43-.77,5.1,5.1,0,0,0-.16-.7,1.63,1.63,0,0,1-.19-.5,3.67,3.67,0,0,1,0-.88l.2-.11a.19.19,0,0,0,.11-.12l.14-.4a3.15,3.15,0,0,0,.17-.59A3.4,3.4,0,0,1,6,28.76a.14.14,0,0,1,0-.06l.1-.17,0,0,0,0a.21.21,0,0,1,.16-.08Z"></path>
                                                        <path class="cls-4-lang"
                                                              d="M7.24,11.52a.58.58,0,0,1,.19,0l.86.33,1.54.54a.54.54,0,0,1,.37.51v1.14a.53.53,0,0,0,.09.3c.17.26.54.82.65,1l.87,1.69a.57.57,0,0,0,.49.3h0a.55.55,0,0,0,.55-.55V16.6a.56.56,0,0,1,.18-.41l.44-.39a.34.34,0,0,0,.09-.12.3.3,0,0,1,.1-.09l.29-.17a6.58,6.58,0,0,1,.66-.37c.15-.05.22-.05.42-.12s.66-.17.76-.2,0,0,.25-.12l.58-.39c.1-.07.18-.05.18-.29v-.61a.53.53,0,0,1,.07-.28v0a.85.85,0,0,1,.16-.17l.36-.25a.58.58,0,0,0,.17-.18,2,2,0,0,0,.18-.38c0-.08-.22-.42-.22-.61s-.15-.57,0-.76a6.69,6.69,0,0,1,.52-.57c.07-.07.17-.1.22-.24s.39-.4.17-.49-.25-.2-.42-.13-.37.13-.49.18.2,0-.12,0H17a.64.64,0,0,1-.24-.05l-.18-.09c-.08,0-.28-.19-.35-.23l0,0L16,8.91a.5.5,0,0,0-.34-.07c-.08,0-.18,0-.21,0s-.05-.12-.42-.12H13.54c-.37,0-.23,0-.62,0s-.22-.12-.51,0,.07,0-.54.13a4.57,4.57,0,0,1-.76.15l-1,.16H10a1.42,1.42,0,0,0-.44,0,6,6,0,0,0-1.08.68l-.08.06a1.8,1.8,0,0,1-.36.33c-.1,0-.2.1-.17.2s-.29.29-.29.29,0,.13-.23.13-.46-.08-.53,0l-.08.1a.23.23,0,0,0,0,.29c.12.15.17.22.27.25Z"></path>
                                                        <path class="cls-4-lang"
                                                              d="M-10.53,18.91a.51.51,0,0,0,.51,0,4.77,4.77,0,0,0,.63-.29c.11-.07.55-.66.66-.77l.08-.09s0,0,.06,0l1.13-.32h.4a.13.13,0,0,0,.08,0,.63.63,0,0,1,.31,0,3.47,3.47,0,0,1,.84.4h0l.62.32a.1.1,0,0,1,0,0l.53.73h0l.32.4h0l.18.18s-.51-.29.11.19l.62.47h0c.06.07.39.45.33.62a2.2,2.2,0,0,0,.13.85.13.13,0,0,1,0,.06l0,.22v.85a1.17,1.17,0,0,0,.22.63l.19.26a.18.18,0,0,0,.07.05l.88.35h0a2.65,2.65,0,0,0,.44.85l.58.76,0,0,.24.21h0l.15.16s0,0,.06,0a2.21,2.21,0,0,1,.81.43c.3.3.37.41.48.52a.73.73,0,0,0,.25.16l.07,0a.58.58,0,0,1,.31.08c.25.11.51.29.62.25s.19-.18.26,0a1.38,1.38,0,0,0,.59.48,1.13,1.13,0,0,1,.22.11.2.2,0,0,0,.13,0c.06,0,.17,0,.2.21s.18.69.29.72.37.16.55.2l.72.21a.15.15,0,0,0,.18-.13V29.2a.14.14,0,0,0-.14-.15H4.91s.1.15,0-.25-.2-.83-.2-.83.12.12.12,0v-.25a.14.14,0,0,0-.13-.15.23.23,0,0,1-.11,0,2.36,2.36,0,0,0-.54,0,.14.14,0,0,1-.15-.14v-.19c0-.12-.12-.34,0-.42a.68.68,0,0,0,.2-.25A.14.14,0,0,0,4,26.33H4a.32.32,0,0,1-.2-.08c-.08-.08-.23-.17-.37.08s-.36.59-.39.66l0,.07a1.14,1.14,0,0,1-.49-.1c-.15-.09-.57-.39-.57-.46v-.83c0-.06-.08-.24,0-.3l.82-.61a.16.16,0,0,1,.09,0h.22a.18.18,0,0,0,.13,0s.09-.05.24-.05a5,5,0,0,1,.88,0,.15.15,0,0,0,.13,0,.18.18,0,0,1,.14,0l.49.48a.12.12,0,0,1,0,.1v.16a.16.16,0,0,0,.17.16h0a.17.17,0,0,0,.14-.14.87.87,0,0,0,0-.34l-.16-.49a.39.39,0,0,1,0-.12c0-.07-.14-.25,0-.34a1.1,1.1,0,0,0,.24-.27.1.1,0,0,1,0,0l.26-.14.05,0a4,4,0,0,1,.35-.42c.17-.17.17-.25.29-.34A4.44,4.44,0,0,0,7,22.41,2.3,2.3,0,0,0,7.31,22l.27-.41a.37.37,0,0,1,.13-.12.13.13,0,0,1,.08,0H7.9a.62.62,0,0,0,.46-.12c.25-.17,0-.2.59-.34a3.94,3.94,0,0,1,.82-.15h.33l.67-.21a.14.14,0,0,0,.05-.24l-.44-.45s0,0,0-.06-.08-.32-.14-.53-.43-.53-.52-.6l-.06,0-.45-.1a.15.15,0,0,1-.09-.06A2,2,0,0,1,8.83,18c0-.12-.06-.42-.06-.45a.66.66,0,0,0-.2-.28,3.15,3.15,0,0,0-.46,0,.3.3,0,0,1-.13,0H8a.15.15,0,0,1-.07-.2,6.28,6.28,0,0,1,.37-.67l.29-.32,0,0,.26-.21s0,0,0,0L9,15.63H9l.09-.13-.19-.25v0l-.16-.15h0c-.07-.05-.61-.42-.76-.51a2.83,2.83,0,0,1-.51-.34A4.44,4.44,0,0,0,7,13.79c-.09-.09-.23-.2-.34-.29s-.32-.25-.39-.31-.63-.44-.66-.49l-.09-.1v-.07s.23-.67.28-.8V11a.19.19,0,0,1,0-.1.8.8,0,0,1,.34-.28c.41-.22.21-.33.55-.37a8.57,8.57,0,0,0,1.14-.22c.11,0,.47.31.6-.19a3.78,3.78,0,0,1,.43-.95H7.58a2.09,2.09,0,0,0-.69,0c-.36.08-.21-.39-1.63,0a17.18,17.18,0,0,0-1.86.44c-.44.18-1,.29-1.32.44s-.33,0-.59.18l-.55.3a6.7,6.7,0,0,0-.7.44c-.11.07-.07.18-.59.26s.41-.67-.88.07l-1.54.89a.16.16,0,0,0-.07.16.14.14,0,0,1-.05.13,2.54,2.54,0,0,0-.18.83,8.91,8.91,0,0,1-.57.69l0,0-.18.38a.14.14,0,0,1-.11.09l-.84.1c-.26,0-.33-.08-.55,0a4.62,4.62,0,0,1-.91.22h-.08a.39.39,0,0,0-.22-.06c-.12,0-.32-.2-.4-.29a.21.21,0,0,0-.11,0h-3.22c-.05,0-.18,0-.24.05s.18,0-.08.11l-.25.14-.16.09a.16.16,0,0,0-.07.15.84.84,0,0,1,0,.43,1.64,1.64,0,0,0,0,.77l.14.84a.1.1,0,0,0,0,.07l.55.55a.12.12,0,0,0,.1.05c.14,0,.47,0,.53.22s.09.29.12.39a.12.12,0,0,1,0,.14l-.28.26,0,0a2.52,2.52,0,0,0-.41.22"></path>
                                                        <path class="cls-4-lang"
                                                              d="M50,12.28h.06s.64.2,0,.29-1.24.06-1.35.11-.27.33.13.48a2.35,2.35,0,0,0,.63.15l.24,0a.9.9,0,0,1,.27.22.21.21,0,0,0,.15.07c.22,0,.64.06.72.08a3.07,3.07,0,0,1,.34,0c.08,0,.28.06.34.1l.26.14h0l.22.08h0c.14,0,1.39.36,1.52.36a4.83,4.83,0,0,1,.57-.11l.66,0h.07l.68.13.1,0a.88.88,0,0,0,.23.14,4,4,0,0,1,.46.24s.57.26.71.33l.08,0,.09,0c.1,0,.21-.13.3.07"></path>
                                                        <path class="cls-4-lang"
                                                              d="M50.88,17.15c0,.1-.07.2-.1.28a.24.24,0,0,1-.22.15,4.37,4.37,0,0,1-.6,0l-.17,0H48.57a.24.24,0,0,0-.2.09l0,.06a1.11,1.11,0,0,1-.3.31c-.11.05.24-.26-.22.11s-.66.5-.7.55-.2.22,0,.26a2.54,2.54,0,0,0,.42.07H48c.07,0,.09,0,.16,0a2.34,2.34,0,0,1,.41.11.25.25,0,0,1,.17.2l.06.32a.21.21,0,0,1,0,.08s0,.11,0,.24,0,.48,0,.63a5.17,5.17,0,0,0,.15.53v.13a.26.26,0,0,0,.11.24s.11,0,.11.07a.38.38,0,0,1-.08.31.86.86,0,0,1-.37.29.24.24,0,0,0-.12.14,1.59,1.59,0,0,0-.11.34,1,1,0,0,1,0,.3c0,.13,0,.18-.26.29s-.64.06-.92.32,0,.05-.27.25-.23.61-.74.37a2.06,2.06,0,0,1-.81-.82.49.49,0,0,1,0-.11.48.48,0,0,0-.11-.3,1.62,1.62,0,0,1-.23-.42c0-.1-.48-.09-.77-.08a.26.26,0,0,0-.24.26v.51a.33.33,0,0,0,0,.14l0,.07a.19.19,0,0,1,0,.08l.12.48h0l.31,1a.17.17,0,0,1,0,.12,1,1,0,0,1-.23.55,6.49,6.49,0,0,1-1,.32l0,0-.42.17h0l-.86.43a.25.25,0,0,0-.12.13l-.13.3a.25.25,0,0,0,0,.26.65.65,0,0,0,.28.23c.22.08.15-.59.22.08a8.13,8.13,0,0,1-.12,1.74.24.24,0,0,1-.13.18l-.38.22a.26.26,0,0,1-.31,0l-1.3-1.33a.22.22,0,0,1-.05-.08A7.7,7.7,0,0,0,39.25,27a13,13,0,0,0-1.64-1.84s-.28-.37-.42.07a5.9,5.9,0,0,0-.37,1.33,5.47,5.47,0,0,1-.07.95c0,.35-.1.8-.13,1.06a.25.25,0,0,1-.23.22c-.62.06-.7-.2-1-.47a17.77,17.77,0,0,1-1.24-2.05v0L34,25.9a.24.24,0,0,0-.17-.14l-.37-.1a.24.24,0,0,1-.11-.06s-.12-.05-.35,0l-.37.15-.34.14a.26.26,0,0,0-.15.26,1.27,1.27,0,0,1,0,.48c-.06.21-1.09.79-1.23.87l0,0-.78.3a.25.25,0,0,0-.16.23v0a.25.25,0,0,0,.25.25h.61a.26.26,0,0,1,.26.26v.23a.26.26,0,0,1-.16.23,1.87,1.87,0,0,0-.67.41c-.22.27-.73.93-.73.93a2.1,2.1,0,0,1-.67.54.24.24,0,0,0-.14.23v1.9a.36.36,0,0,1,0,.1l-.23.54a.2.2,0,0,0,0,.11.41.41,0,0,1-.19.37,1.73,1.73,0,0,0-.43.38.24.24,0,0,0,0,.29l0,.07a.19.19,0,0,0,.06.07.19.19,0,0,1,.06.12.27.27,0,0,1-.13.3c-.15.11-.28.13-.35.29a5.29,5.29,0,0,0-.28.65.93.93,0,0,1-.14.36,2.32,2.32,0,0,1-.21.26c-.05.06,0,.09-.24.19s-.55.16-.62.2a2,2,0,0,1-.5.14c-.13,0-.57,0-.64,0s-.42.13-.53-.23A10.55,10.55,0,0,0,23.71,36a7,7,0,0,1-.44-1.07c0-.16,0-.46,0-.84a4.74,4.74,0,0,1,0-.77c0-.19.17-.46.17-.69a5,5,0,0,0,0-.55.85.85,0,0,0-.19-.49c-.16-.28-.38-.46-.38-.52a.5.5,0,0,0,0-.38c-.09-.22,0-.44-.28-.65s-.44-.33-.62-.47.55-.1-.19-.15a4.66,4.66,0,0,0-1.14-.06,2.48,2.48,0,0,1-.38.12c-.28.07-.22.05-.79,0a2.43,2.43,0,0,1-1.09-.25c-.22-.12-.22,0-.42-.4a5.33,5.33,0,0,1-.24-.59c-.06-.11-.11-1.61-.13-2a.27.27,0,0,1,.08-.18,5.5,5.5,0,0,0,.62-.73,7.53,7.53,0,0,1,.44-.75,3,3,0,0,1,.41-.65,5.07,5.07,0,0,0,.4-.42s.13-.13.07-.2-.24-.06-.29-.28a4.23,4.23,0,0,0-.11-.9.6.6,0,0,1,.05-.55.24.24,0,0,1,.2-.11,5,5,0,0,1,.78,0c.07,0,.26.13.29,0a2.19,2.19,0,0,0,0-.57s0,.09-.13-.13a2.27,2.27,0,0,1-.23-.34.26.26,0,0,1,0-.21l0-.06a.23.23,0,0,1,.14-.15c.07,0,.09-.07-.36-.12-.72-.07-.39-.07-.55-.07s-.06.27-.17,0-.37-.66-.33-.94a1.27,1.27,0,0,1,.37-.94,4.53,4.53,0,0,1,.84-.7c.3-.18.08-.62.43-.25s.6.31.6.77.06.27,0,.7-.21,1,0,1,.06.18.46,0,.94-.55.92-.88A9.51,9.51,0,0,0,22,17.22c-.05-.24-.2-.37,0-.51s.37,0,.63-.43.25-.11.34-.2A9.52,9.52,0,0,1,23.86,15c.37-.33.26-.3.61-.46a10.25,10.25,0,0,1,1-.39c.44-.16.3-.14.44-.16s1.49.27,1.49.27.74.15.81.19l.15.09a.26.26,0,0,1,.1.13l.07.24,0,.06a1.81,1.81,0,0,0,.18.23c.1.07-.11.17.35.13a4.16,4.16,0,0,0,1.2-.3l.44-.27a.28.28,0,0,0,.12-.16,2.11,2.11,0,0,0,0-.21c0-.09.16.11.07-.31s-.15-.48-.13-.61a2.66,2.66,0,0,1,.41-.83c.14-.14,0-.27.4-.42s-.55.15.74-.29a5.26,5.26,0,0,1,1.84-.34.25.25,0,0,1,.23.16c0,.11.09.26,0,.27a1.65,1.65,0,0,0-.48.22c-.22.13-.42.13-.64.28a4.73,4.73,0,0,1-.72.38c-.42.2-.82.76-.75.81l.15.09.07,0,.13,0,1.44.6h0a.25.25,0,0,0,.32-.16c.11-.38.35-1,.35-1l.12-.34a.17.17,0,0,1,.23-.12,2.73,2.73,0,0,1,.5.4.25.25,0,0,0,.25,0l1.42-.44h0L38,12.37a8.25,8.25,0,0,1,.76-.37l.66-.07.39-.06a.89.89,0,0,0,.24-.09.25.25,0,0,0,0-.43,2.32,2.32,0,0,0-.5-.29,5.13,5.13,0,0,1-.48-.2,1.49,1.49,0,0,1-.48-.2,1.28,1.28,0,0,1-.17-.44.81.81,0,0,1,.22-.35c.1-.07-.12,0,.1-.07s.35,0,.47,0a1.52,1.52,0,0,1,.56.12c.11,0,.84.35,1,.43a9,9,0,0,1,.73.81l0,0,.27.27a.2.2,0,0,1,.06.12s.07.14.32.17l.91.14a.25.25,0,0,1,.21.21c0,.15,0,.33,0,.35s-.48.09-.51.15l-.2.28.21,0h0l1.08-.05c.05,0,.18.27.25.27a1.68,1.68,0,0,0,.32-.07c.22-.06,1-.17,1-.17s.2-.05.27.11-.22.19.19.5a2.39,2.39,0,0,0,1.16.33h.28a.25.25,0,0,0,.22-.15l.07-.12a.57.57,0,0,0,0-.43c-.07-.18-.18-.43-.24-.56a.25.25,0,0,1,0-.17l.1-.41a.25.25,0,0,1,.24-.19,1.48,1.48,0,0,1,.37,0"></path>
                                                        <path class="cls-4-lang"
                                                              d="M47.32,33.28a1.28,1.28,0,0,0-.15.24c0,.06-.09.2-.09.2l.48.27h0l.1.06H48s0,.06,0,0,.26-.62.26-.65a.62.62,0,0,1,0-.31c.06-.13.05-.23.09-.29s0-.11.12-.12,0-.16.12.06.58,1,.58,1,0,0,0,.05a.65.65,0,0,1,0,.31.37.37,0,0,0,0,.16s.15.15.15.15l.07,0,.7.35.2.35.19.27a.1.1,0,0,1,.05.06l.06.16v.16l.2.4a.54.54,0,0,1-.11.32c-.11.12-.24.25-.24.36s0,.15,0,.22a.31.31,0,0,1-.1.21c-.09.08-.2,0-.32.21s-.17.25-.17.32,0,.06,0,.12,0,.26,0,.29.07.1-.08.11-.59,0-.59.11a.18.18,0,0,0,.06.12s.08,0,.12.11.18.49.19.52a.57.57,0,0,1,0,.14s.13.07,0,.11a3.56,3.56,0,0,1-.63.06,4.53,4.53,0,0,0-.3-.69,2,2,0,0,0-.45-.45l-.53-.25s-.06-.45-.13-.49l-.32-.14c-.07,0,0,0-.17-.1a2.28,2.28,0,0,0-.32-.19c-.09,0-.52-.19-.57-.21s.06,0-.11,0a3.17,3.17,0,0,0-.44.06c-.3,0-.47.06-.47.06l-.31,0-.27.27a2.46,2.46,0,0,1-.41.22,2.48,2.48,0,0,1-.33,0c-.11,0-.2,0-.27,0s-.25.38-.35-.11a3.6,3.6,0,0,1-.11-.8c0-.06.18.12,0-.28a7.3,7.3,0,0,1-.31-.9s-.27,0,0-.37,0-.37.49-.57.49-.26.7-.35l.45-.21.37-.23a3.24,3.24,0,0,0,.3-.23.44.44,0,0,1,.23-.15l.24-.07s-.08.22.15-.09.18-.28.34-.34.42-.13.56-.16a1.61,1.61,0,0,1,.41-.08l.28.06a.21.21,0,0,1,.11.16c0,.11.09.2,0,.23Z"></path>
                                                    </g>
                                                </g>
                                            </g>
                                            <path class="cls-5-lang"
                                                  d="M25,1A24,24,0,1,1,1,25,24,24,0,0,1,25,1m0-1A25,25,0,1,0,50,25,25,25,0,0,0,25,0Z"></path>
                                        </svg>
                                    </svg-icon>
                                    <span class="fz14">اللغة والبلد</span></div>
                                <div class="mt12">
                                    <mat-select role="combobox" aria-autocomplete="none" aria-haspopup="true"
                                                multiple=""
                                                class="mat-select form-control ng-tns-c163-3 mat-select-empty mat-select-multiple"
                                                placeholder="اختار اللغة" aria-labelledby=" mat-select-value-5"
                                                id="mat-select-4" tabindex="0" aria-expanded="false"
                                                aria-required="false" aria-disabled="false" aria-invalid="false">
                                        <div cdk-overlay-origin="" class="mat-select-trigger ng-tns-c163-3">
                                            <div class="mat-select-value ng-tns-c163-3" id="mat-select-value-5"><span
                                                    class="mat-select-placeholder ng-tns-c163-3 ng-star-inserted">اختار اللغة</span>
                                                </div>
                                            <div class="mat-select-arrow-wrapper ng-tns-c163-3">
                                                <div class="mat-select-arrow ng-tns-c163-3"></div>
                                            </div>
                                        </div></mat-select>
                                </div>
                                <div class="mt12">
                                    <mat-select role="combobox" aria-autocomplete="none" aria-haspopup="true"
                                                multiple=""
                                                class="mat-select form-control ng-tns-c163-4 mat-select-empty mat-select-multiple"
                                                placeholder="اخنار البلد" aria-labelledby=" mat-select-value-7"
                                                id="mat-select-6" tabindex="0" aria-expanded="false"
                                                aria-required="false" aria-disabled="false" aria-invalid="false">
                                        <div cdk-overlay-origin="" class="mat-select-trigger ng-tns-c163-4">
                                            <div class="mat-select-value ng-tns-c163-4" id="mat-select-value-7"><span
                                                    class="mat-select-placeholder ng-tns-c163-4 ng-star-inserted">اخنار البلد</span>
                                                </div>
                                            <div class="mat-select-arrow-wrapper ng-tns-c163-4">
                                                <div class="mat-select-arrow ng-tns-c163-4"></div>
                                            </div>
                                        </div></mat-select>
                                </div>
                            </div>
                            <div class="filter mt35">
                                <div class="d-flex align-items-center text-blue d-flex align-items-center">
                                    <svg-icon class="mr8 filter-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 51 26"
                                             style="width: 25px;">
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
                                                    }</style>
                                            </defs>
                                            <title>Egp</title>
                                            <g id="Layer_2" data-name="Layer 2">
                                                <g id="Layer_1-2" data-name="Layer 1">
                                                    <rect class="cls-1-fees" x="0.5" y="0.5" width="50" height="25"
                                                          rx="2" ry="2"></rect>
                                                    <path class="cls-2-fees"
                                                          d="M49.49.5a1,1,0,0,1,1,1v5.4a4.91,4.91,0,0,1-.86.08A5.63,5.63,0,0,1,44,1.36,4.91,4.91,0,0,1,44.09.5Z"></path>
                                                    <path class="cls-2-fees"
                                                          d="M7,1.36A5.63,5.63,0,0,1,1.36,7,4.91,4.91,0,0,1,.5,6.91V1.84A1.34,1.34,0,0,1,1.84.5H6.91A4.91,4.91,0,0,1,7,1.36Z"></path>
                                                    <path class="cls-2-fees"
                                                          d="M50.5,18.79V24.3a1.2,1.2,0,0,1-1.2,1.2H44.13A6.34,6.34,0,0,1,44,24.34a5.63,5.63,0,0,1,5.63-5.63A4.11,4.11,0,0,1,50.5,18.79Z"></path>
                                                    <path class="cls-2-fees"
                                                          d="M7,24.34a6.34,6.34,0,0,1-.12,1.16H1.37a.87.87,0,0,1-.87-.87V18.79a4.11,4.11,0,0,1,.86-.08A5.63,5.63,0,0,1,7,24.34Z"></path>
                                                    <circle class="cls-2-fees" cx="41.5" cy="13" r="2"></circle>
                                                    <circle class="cls-2-fees" cx="9.5" cy="13" r="2"></circle>
                                                    <path class="cls-3-fees"
                                                          d="M19.54,13.25h-3v2.93h3.38v.88H15.5V8.94h4.22v.88H16.51v2.57h3Z"></path>
                                                    <path class="cls-3-fees"
                                                          d="M28.15,16.7a7.1,7.1,0,0,1-2.4.44,3.91,3.91,0,0,1-2.92-1.07,4.27,4.27,0,0,1-1.09-3A4,4,0,0,1,26,8.86a4.71,4.71,0,0,1,2,.37l-.25.85A4,4,0,0,0,26,9.74,3,3,0,0,0,22.81,13c0,2.06,1.19,3.28,3,3.28a3.14,3.14,0,0,0,1.34-.22V13.64H25.57V12.8h2.58Z"></path>
                                                    <path class="cls-3-fees"
                                                          d="M30.69,9a10.75,10.75,0,0,1,1.94-.16,3.12,3.12,0,0,1,2.19.68,2.19,2.19,0,0,1,.68,1.69A2.46,2.46,0,0,1,34.9,13a3.18,3.18,0,0,1-2.39.89,3.35,3.35,0,0,1-.81-.07v3.25h-1Zm1,3.91a3.23,3.23,0,0,0,.83.09c1.22,0,2-.62,2-1.74s-.73-1.59-1.84-1.59a3.88,3.88,0,0,0-.95.09Z"></path>
                                                    <rect class="cls-4-fees" x="0.5" y="0.5" width="50" height="25"
                                                          rx="2" ry="2"></rect>
                                                </g>
                                            </g>
                                        </svg>
                                    </svg-icon>
                                    <span class="fz14">تكلفة الجلسة (جنيه)</span></div>
                                <div class="mt12 fz12 fees-filter ng-star-inserted">
                                    <div class="p4 brs2 mr12 mt8 d-inline-block pointer bg-off-white text-dark1"> Less
                                        than 150
                                    </div>
                                    <div class="p4 brs2 mr12 mt8 d-inline-block pointer bg-off-white text-dark1"> From
                                        150 To 200
                                    </div>
                                    <div class="p4 brs2 mr12 mt8 d-inline-block pointer bg-off-white text-dark1"> From
                                        200 To 300
                                    </div>
                                    <div class="p4 brs2 mr12 mt8 d-inline-block pointer bg-off-white text-dark1"> From
                                        300 to 500
                                    </div>
                                    <div class="p4 brs2 mr12 mt8 d-inline-block pointer bg-off-white text-dark1"> Above
                                        500
                                    </div>
                                </div></div>
                        </div></div>
                </div>
                <div class="col-lg-9 col-md-8 sm-mt10">
                    <div class="row">
                        <div class="col-12"></div>
                        <div class="col-12 ng-star-inserted">
                            <div class="row mx-md-n2 row-eq-height">
                                <div class="col-lg-4 col-md-6 px-md-2 mb16 ng-star-inserted">
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
                                    </div></div>
                                <div class="col-lg-4 col-md-6 px-md-2 mb16 doctor-card-container ng-star-inserted">
                                    <cli-shezlong-profile>
                                        <div class="doctor-card animated zoomIn ng-star-inserted">
                                            <div class="therapist-details pl10 pr10 pt16 pb16 sm-p16 d-md-block d-flex">
                                                <div class="profile-pic-container"><a><img
                                                            default="assets/images/search/therapistmale.svg"
                                                            class="pic img pointer online"
                                                            src="https://scontent.shezlong.com/therapist_profile_pictures/71005-8d1c0f5cb4f2b0b5d729e07b81a07b48.jpg"></a>
                                                </div>
                                                <div class="profile-details text-md-center text-center sm-ml16">
                                                    <div class="mt8 d-flex align-items-center justify-content-center">
                                                        <div class="fz16 text-blue name"> بسمه محمود</div>
                                                    </div>
                                                    <div class="title mt8"> معالج نفسي </div>
                                                    <div
                                                        class="rate mt5 d-flex align-items-center justify-content-center">
                                                        <div class="rating-container position-realtive pointer">
                                                            <cli-shezlong-rating _nghost-serverapp-c109="">
                                                                <div _ngcontent-serverapp-c109=""
                                                                     class="rating_continer">
                                                                    <div _ngcontent-serverapp-c109=""
                                                                         class="yellow_stars" style="width: 98.4%;">
                                                                        <span _ngcontent-serverapp-c109=""
                                                                              class="fa fa-star text-yellow star ng-star-inserted"></span><span
                                                                            _ngcontent-serverapp-c109=""
                                                                            class="fa fa-star text-yellow star ng-star-inserted"></span><span
                                                                            _ngcontent-serverapp-c109=""
                                                                            class="fa fa-star text-yellow star ng-star-inserted"></span><span
                                                                            _ngcontent-serverapp-c109=""
                                                                            class="fa fa-star text-yellow star ng-star-inserted"></span><span
                                                                            _ngcontent-serverapp-c109=""
                                                                            class="fa fa-star text-yellow star ng-star-inserted"></span>
                                                                        </div>
                                                                    <div _ngcontent-serverapp-c109=""
                                                                         class="grey_starts"><span
                                                                            _ngcontent-serverapp-c109=""
                                                                            class="fa fa-star text-grey star ng-star-inserted"></span><span
                                                                            _ngcontent-serverapp-c109=""
                                                                            class="fa fa-star text-grey star ng-star-inserted"></span><span
                                                                            _ngcontent-serverapp-c109=""
                                                                            class="fa fa-star text-grey star ng-star-inserted"></span><span
                                                                            _ngcontent-serverapp-c109=""
                                                                            class="fa fa-star text-grey star ng-star-inserted"></span><span
                                                                            _ngcontent-serverapp-c109=""
                                                                            class="fa fa-star text-grey star ng-star-inserted"></span>
                                                                        </div>
                                                                </div>
                                                            </cli-shezlong-rating>
                                                            <div class="rating-details-container p8">
                                                                </div>
                                                        </div>
                                                        <div class="fz12 mr5">4.92</div>
                                                        (<span class="text-dark1 fz12">226 تقييم</span>)
                                                    </div>
                                                    <div class="speciality fmedium mt8">متخصص فى اضطراب قلق
                                                        الفراق، القلق العام، الرهاب الاجتماعي , العلاقات
                                                        </div>
                                                    <div class="mt15"><span class="fees ng-star-inserted"><svg-icon
                                                                class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                  viewBox="0 0 51 26"
                                                                                  style="width: 20px;"><defs><style>.cls-1-fees {
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
                                                                            }</style></defs><title>Egp</title><g
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
                                                                                width="50" height="25" rx="2"
                                                                                ry="2"></rect></g></g></svg></svg-icon> جنيه 260 </span>
                                                        <span class="sessions ml30 sm-ml16"><svg-icon
                                                                src="assets/images/profile/Video-Session.svg"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 52 54" style="width: 20px;"><defs><style>.cls-1-video {
                                                                                fill: #3da8c0;
                                                                            }

                                                                            .cls-2-video {
                                                                                fill: #f4794c;
                                                                            }</style></defs><title>session</title><g
                                                                        id="Layer_2" data-name="Layer 2"><g
                                                                            id="Layer_1-2" data-name="Layer 1"><path
                                                                                class="cls-1-video"
                                                                                d="M5.46,26.88v-18A1.68,1.68,0,0,1,7.92,7.36L25.3,16.48l17.32,9a1.65,1.65,0,0,1,0,2.88l-17.32,9L7.92,46.4a1.68,1.68,0,0,1-2.46-1.47Z"></path><path
                                                                                class="cls-2-video"
                                                                                d="M4.13,2a2.11,2.11,0,0,1,1,.25l22,11.56L48.94,25.17a2.11,2.11,0,0,1,0,3.66L27.16,40.19l-22,11.56A2.12,2.12,0,0,1,2,49.89V4.11A2.12,2.12,0,0,1,4.13,2m0-2h0A4.13,4.13,0,0,0,0,4.11V49.89A4.13,4.13,0,0,0,4.13,54a4,4,0,0,0,1.92-.48L28.09,42,49.86,30.6l0,0,0,0a4.1,4.1,0,0,0,0-7.12l0,0,0,0L28.09,12,6.05.48A4,4,0,0,0,4.13,0Z"></path></g></g></svg></svg-icon> 800+ جلسة
                                                            </span></div>
                                                </div>
                                            </div>
                                            <div class="buttons">
                                                <div class="book fz14 fz-rtl13">الحجز الان</div>
                                                <div class="view-profile fz-rtl12">عرض الصفحة الشخصية</div>
                                            </div>
                                        </div></cli-shezlong-profile>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 ng-star-inserted"></div></div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('script')
@stop
