
    <div class="black-bg profile-background" onclick="hide_profile()"></div>
    <div class="profile-review-container" >
        <div class="row">
            <div class="offset-md-2 col-md-9">
                <div class="row">
                    <div class="col-md-4 text-center no-p">
                        <img class="doctor-pic"
                             src="https://scontent.shezlong.com/therapist_profile_pictures/71005-8d1c0f5cb4f2b0b5d729e07b81a07b48.jpg">
                        <i class="fa fa-times mr10 mt10 float-right close_btn"></i>
                    </div>
                    <div class="col-md-8 no-p">
                        <div class="text-center profile-details">
                            <div class="doctor-name"> بسمه محمود</div>
                            <div class="doctor-title">معالج نفسي</div>
                            <div style="font-size: 12px;margin-top: 5px;color: #212529;">
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
                                (226 تقييم )
                            </div>
                            <div class="doctor-speciality">تخصص : اضطراب قلق الفراق،
                                القلق العام، الرهاب الاجتماعي and العلاقات
                            </div>
                            <div class="session-details">
                                <i class="far fa-money-bill-alt" style="color: green"></i>
                                <span style="margin-left: 10px"> جنيه 260/ 30 دقيقة
                                </span> - <span style="margin-right: 10px"> جنيه 400/ 60 دقيقة
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row" style="margin: 0;">
                    <div id="this-week-btn" class="col-6 date-type active pointer" onclick="change_type(event)"> This Week</div>
                    <div id="calendar-btn" class="col-6 date-type pointer" onclick="change_type(event)">
                        Calender
                    </div>
                </div>
                <div class="appointments-block row">
                    <div class="col-12" style="margin:20px">
                        <div class="d-flex justify-content-around" style="font-size: 14px">
                            <span style="font-weight: bold">برجاء اختيار موعد</span>
                            <span class="text-right">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14.998"
                                 height="15" viewBox="0 0 14.998 15" style="width: 18px;"><defs><style>.a {
                                            fill: #4d4d4f;
                                        }</style></defs><g transform="translate(-0.004)"><g
                                        transform="translate(0.004)"><path class="a"
                                                                           d="M21.111,4.982l-.224.071-1.2.106-.338.539-.245-.078-.951-.858-.138-.446-.185-.476-.6-.536-.705-.138-.016.323.691.674.338.4-.38.2-.309-.091-.464-.193.016-.374-.608-.25-.2.879-.613.139.061.49.8.154.138-.784.659.1.307.18h.492l.337.674.892.905L18.6,6.94l-.72-.092-1.243.628-.9,1.074-.117.476h-.321l-.6-.276-.582.276.145.614.253-.292.445-.014-.031.551.369.108.368.413.6-.169.687.108.8.214.4.047.675.766,1.3.766-.843,1.61-.89.413-.338.92-1.287.859-.137.5A7.49,7.49,0,0,0,21.111,4.982Z"
                                                                           transform="translate(-7.384 -1.655)"></path><path
                                            class="a"
                                            d="M8.365,15.355l-.546-1.013.5-1.045-.5-.15-.563-.565L6.009,12.3l-.414-.866v.514H5.412L4.337,10.494V9.3L3.55,8.016,2.3,8.239H1.456l-.424-.278.541-.429-.54.125A7.49,7.49,0,0,0,7.5,18.936a7.851,7.851,0,0,0,.941-.065l-.078-.909s.344-1.349.344-1.4S8.365,15.355,8.365,15.355Z"
                                            transform="translate(-0.004 -3.936)"></path><path class="a"
                                                                                              d="M4.667,2.418,6,2.233,6.614,1.9l.691.2,1.1-.061.378-.594.551.091L10.677,1.4,11.046,1l.52-.348L12.3.761,12.571.72A7.475,7.475,0,0,0,3.6,2.727h0ZM9.7.746l.766-.422.492.284-.712.542-.68.068-.306-.2ZM7.428.807l.338.141L8.208.807l.241.418-1.022.268-.491-.287S7.417.9,7.428.807Z"
                                                                                              transform="translate(-1.881)"></path></g></g>
                                </svg>
                            جميع المواعيد (Africa/Cairo)
                        </span>
                        </div>
                        <div id="appointments-block" class="appointments">
                            @for($x = 0; $x <6 ; $x++)
                                <div class="appointments-item">
                                    <div class="item-title">
                                        غداً <span>(29/1 )</span>
                                    </div>
                                    <div class="item-details pointer">
                                    <span>
                                       <svg
                                           xmlns="http://www.w3.org/2000/svg"
                                           xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 30 30"
                                           class="icon" style="width: 18px;"><defs><style>.cls-1-60min, .cls-3-60min, .cls-7-60min {
                                                       fill: none;
                                                   }

                                                   .cls-2-60min {
                                                       fill: #fff;
                                                   }

                                                   .cls-3-60min, .cls-7-60min {
                                                       stroke: #666669;
                                                   }

                                                   .cls-4-60min {
                                                       clip-path: url(#clip-path);
                                                   }

                                                   .cls-5-60min {
                                                       fill: #ccc;
                                                   }

                                                   .cls-6-60min {
                                                       fill: #666669;
                                                   }

                                                   .cls-7-60min {
                                                       stroke-linecap: round;
                                                       stroke-linejoin: round;
                                                       stroke-width: 0.8px;
                                                   }</style><clipPath id="clip-path"><rect class="cls-1-60min"
                                                                                           width="30"
                                                                                           height="30"></rect></clipPath></defs><title>60 Min</title><g
                                               id="Layer_2" data-name="Layer 2"><g id="Layer_1-2"
                                                                                   data-name="Layer 1"><g
                                                       id="Group_312" data-name="Group 312"><g id="Group_310"
                                                                                               data-name="Group 310"><g
                                                               id="Group_307" data-name="Group 307"><g
                                                                   id="Ellipse_30" data-name="Ellipse 30"><circle
                                                                       class="cls-2-60min" cx="15" cy="15"
                                                                       r="15"></circle><circle class="cls-3-60min"
                                                                                               cx="15" cy="15"
                                                                                               r="14.25"></circle></g><g
                                                                   class="cls-4-60min"><g id="Mask_Group_11"
                                                                                          data-name="Mask Group 11"><g
                                                                           id="Path_144" data-name="Path 144"><path
                                                                               class="cls-5-60min"
                                                                               d="M15,29.25A14.25,14.25,0,1,1,29.25,15,14.26,14.26,0,0,1,15,29.25Z"></path><path
                                                                               class="cls-6-60min"
                                                                               d="M15,1.5A13.5,13.5,0,1,0,28.5,15,13.52,13.52,0,0,0,15,1.5M15,0A15,15,0,1,1,0,15,15,15,0,0,1,15,0Z"></path></g></g></g></g><g
                                                               id="Group_306" data-name="Group 306"><path
                                                                   id="Path_129" data-name="Path 129"
                                                                   class="cls-6-60min"
                                                                   d="M26,14.11h-.51a.52.52,0,1,0,0,1H26a.52.52,0,1,0,0-1Z"></path><path
                                                                   id="Path_130" data-name="Path 130"
                                                                   class="cls-6-60min"
                                                                   d="M3.76,14.11H3.24a.52.52,0,0,0,0,1h.52a.52.52,0,1,0,0-1Z"></path><path
                                                                   id="Path_131" data-name="Path 131"
                                                                   class="cls-6-60min"
                                                                   d="M22.31,6.21l-.37.37a.52.52,0,1,0,.73.73h0L23,6.94a.52.52,0,0,0-.73-.73Z"></path><path
                                                                   id="Path_132" data-name="Path 132"
                                                                   class="cls-6-60min"
                                                                   d="M6.58,21.94l-.37.36a.53.53,0,0,0,0,.74.52.52,0,0,0,.73,0l.37-.37a.52.52,0,1,0-.73-.73Z"></path><path
                                                                   id="Path_133" data-name="Path 133"
                                                                   class="cls-6-60min"
                                                                   d="M22.67,21.94a.52.52,0,1,0-.73.73h0l.36.37A.52.52,0,1,0,23,22.3Z"></path><path
                                                                   id="Path_134" data-name="Path 134"
                                                                   class="cls-6-60min"
                                                                   d="M6.94,6.21a.52.52,0,0,0-.73.73l.37.37a.52.52,0,1,0,.73-.73Z"></path></g></g><g
                                                           id="Group_311" data-name="Group 311">
                                                                <line id="Line_3"
                                                                      data-name="Line 3"
                                                                      class="cls-7-60min"
                                                                      x1="13.51"
                                                                      y1="16.62"
                                                                      x2="9.37"
                                                                      y2="16.62"></line>
                                                                <line
                                                                    id="Line_4" data-name="Line 4" class="cls-7-60min"
                                                                    x1="15.06" y1="15.06" x2="15.06" y2="9.38"></line>
                                                                <circle
                                                                    id="Ellipse_32" data-name="Ellipse 32"
                                                                    class="cls-7-60min" cx="15.06" cy="16.62"
                                                                    r="1.55"></circle></g></g></g></g>
                                            </svg>
                                        <div class="appointment-item-duration">
                                            <div style="font-size: 14px">60</div>
                                            <div style="font-size: 10px">دقيقة</div>
                                        </div>
                                    </span>
                                        <span class="appointment-item-from"><div>١٢:٠٠ ص</div><div>٠١:٠٠ ص</div>
                                    </span>
                                        <span class="appointment-item-to">إلى</span>
                                    </div>
                                    <div class="item-details pointer">
                                    <span>
                                       <svg
                                           xmlns="http://www.w3.org/2000/svg"
                                           xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 30 30"
                                           class="icon" style="width: 18px;"><defs><style>.cls-1-60min, .cls-3-60min, .cls-7-60min {
                                                       fill: none;
                                                   }

                                                   .cls-2-60min {
                                                       fill: #fff;
                                                   }

                                                   .cls-3-60min, .cls-7-60min {
                                                       stroke: #666669;
                                                   }

                                                   .cls-4-60min {
                                                       clip-path: url(#clip-path);
                                                   }

                                                   .cls-5-60min {
                                                       fill: #ccc;
                                                   }

                                                   .cls-6-60min {
                                                       fill: #666669;
                                                   }

                                                   .cls-7-60min {
                                                       stroke-linecap: round;
                                                       stroke-linejoin: round;
                                                       stroke-width: 0.8px;
                                                   }</style><clipPath id="clip-path"><rect class="cls-1-60min"
                                                                                           width="30"
                                                                                           height="30"></rect></clipPath></defs><title>60 Min</title><g
                                               id="Layer_2" data-name="Layer 2"><g id="Layer_1-2"
                                                                                   data-name="Layer 1"><g
                                                       id="Group_312" data-name="Group 312"><g id="Group_310"
                                                                                               data-name="Group 310"><g
                                                               id="Group_307" data-name="Group 307"><g
                                                                   id="Ellipse_30" data-name="Ellipse 30"><circle
                                                                       class="cls-2-60min" cx="15" cy="15"
                                                                       r="15"></circle><circle class="cls-3-60min"
                                                                                               cx="15" cy="15"
                                                                                               r="14.25"></circle></g><g
                                                                   class="cls-4-60min"><g id="Mask_Group_11"
                                                                                          data-name="Mask Group 11"><g
                                                                           id="Path_144" data-name="Path 144"><path
                                                                               class="cls-5-60min"
                                                                               d="M15,29.25A14.25,14.25,0,1,1,29.25,15,14.26,14.26,0,0,1,15,29.25Z"></path><path
                                                                               class="cls-6-60min"
                                                                               d="M15,1.5A13.5,13.5,0,1,0,28.5,15,13.52,13.52,0,0,0,15,1.5M15,0A15,15,0,1,1,0,15,15,15,0,0,1,15,0Z"></path></g></g></g></g><g
                                                               id="Group_306" data-name="Group 306"><path
                                                                   id="Path_129" data-name="Path 129"
                                                                   class="cls-6-60min"
                                                                   d="M26,14.11h-.51a.52.52,0,1,0,0,1H26a.52.52,0,1,0,0-1Z"></path><path
                                                                   id="Path_130" data-name="Path 130"
                                                                   class="cls-6-60min"
                                                                   d="M3.76,14.11H3.24a.52.52,0,0,0,0,1h.52a.52.52,0,1,0,0-1Z"></path><path
                                                                   id="Path_131" data-name="Path 131"
                                                                   class="cls-6-60min"
                                                                   d="M22.31,6.21l-.37.37a.52.52,0,1,0,.73.73h0L23,6.94a.52.52,0,0,0-.73-.73Z"></path><path
                                                                   id="Path_132" data-name="Path 132"
                                                                   class="cls-6-60min"
                                                                   d="M6.58,21.94l-.37.36a.53.53,0,0,0,0,.74.52.52,0,0,0,.73,0l.37-.37a.52.52,0,1,0-.73-.73Z"></path><path
                                                                   id="Path_133" data-name="Path 133"
                                                                   class="cls-6-60min"
                                                                   d="M22.67,21.94a.52.52,0,1,0-.73.73h0l.36.37A.52.52,0,1,0,23,22.3Z"></path><path
                                                                   id="Path_134" data-name="Path 134"
                                                                   class="cls-6-60min"
                                                                   d="M6.94,6.21a.52.52,0,0,0-.73.73l.37.37a.52.52,0,1,0,.73-.73Z"></path></g></g><g
                                                           id="Group_311" data-name="Group 311">
                                                                <line id="Line_3"
                                                                      data-name="Line 3"
                                                                      class="cls-7-60min"
                                                                      x1="13.51"
                                                                      y1="16.62"
                                                                      x2="9.37"
                                                                      y2="16.62"></line>
                                                                <line
                                                                    id="Line_4" data-name="Line 4" class="cls-7-60min"
                                                                    x1="15.06" y1="15.06" x2="15.06" y2="9.38"></line>
                                                                <circle
                                                                    id="Ellipse_32" data-name="Ellipse 32"
                                                                    class="cls-7-60min" cx="15.06" cy="16.62"
                                                                    r="1.55"></circle></g></g></g></g>
                                            </svg>
                                        <div class="appointment-item-duration">
                                            <div style="font-size: 14px">60</div>
                                            <div style="font-size: 10px">دقيقة</div>
                                        </div>
                                    </span>
                                        <span class="appointment-item-from"><div>١٢:٠٠ ص</div><div>٠١:٠٠ ص</div>
                                    </span>
                                        <span class="appointment-item-to">إلى</span>
                                    </div>
                                    <div class="item-details pointer">
                                    <span>
                                       <svg
                                           xmlns="http://www.w3.org/2000/svg"
                                           xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 30 30"
                                           class="icon" style="width: 18px;"><defs><style>.cls-1-60min, .cls-3-60min, .cls-7-60min {
                                                       fill: none;
                                                   }

                                                   .cls-2-60min {
                                                       fill: #fff;
                                                   }

                                                   .cls-3-60min, .cls-7-60min {
                                                       stroke: #666669;
                                                   }

                                                   .cls-4-60min {
                                                       clip-path: url(#clip-path);
                                                   }

                                                   .cls-5-60min {
                                                       fill: #ccc;
                                                   }

                                                   .cls-6-60min {
                                                       fill: #666669;
                                                   }

                                                   .cls-7-60min {
                                                       stroke-linecap: round;
                                                       stroke-linejoin: round;
                                                       stroke-width: 0.8px;
                                                   }</style><clipPath id="clip-path"><rect class="cls-1-60min"
                                                                                           width="30"
                                                                                           height="30"></rect></clipPath></defs><title>60 Min</title><g
                                               id="Layer_2" data-name="Layer 2"><g id="Layer_1-2"
                                                                                   data-name="Layer 1"><g
                                                       id="Group_312" data-name="Group 312"><g id="Group_310"
                                                                                               data-name="Group 310"><g
                                                               id="Group_307" data-name="Group 307"><g
                                                                   id="Ellipse_30" data-name="Ellipse 30"><circle
                                                                       class="cls-2-60min" cx="15" cy="15"
                                                                       r="15"></circle><circle class="cls-3-60min"
                                                                                               cx="15" cy="15"
                                                                                               r="14.25"></circle></g><g
                                                                   class="cls-4-60min"><g id="Mask_Group_11"
                                                                                          data-name="Mask Group 11"><g
                                                                           id="Path_144" data-name="Path 144"><path
                                                                               class="cls-5-60min"
                                                                               d="M15,29.25A14.25,14.25,0,1,1,29.25,15,14.26,14.26,0,0,1,15,29.25Z"></path><path
                                                                               class="cls-6-60min"
                                                                               d="M15,1.5A13.5,13.5,0,1,0,28.5,15,13.52,13.52,0,0,0,15,1.5M15,0A15,15,0,1,1,0,15,15,15,0,0,1,15,0Z"></path></g></g></g></g><g
                                                               id="Group_306" data-name="Group 306"><path
                                                                   id="Path_129" data-name="Path 129"
                                                                   class="cls-6-60min"
                                                                   d="M26,14.11h-.51a.52.52,0,1,0,0,1H26a.52.52,0,1,0,0-1Z"></path><path
                                                                   id="Path_130" data-name="Path 130"
                                                                   class="cls-6-60min"
                                                                   d="M3.76,14.11H3.24a.52.52,0,0,0,0,1h.52a.52.52,0,1,0,0-1Z"></path><path
                                                                   id="Path_131" data-name="Path 131"
                                                                   class="cls-6-60min"
                                                                   d="M22.31,6.21l-.37.37a.52.52,0,1,0,.73.73h0L23,6.94a.52.52,0,0,0-.73-.73Z"></path><path
                                                                   id="Path_132" data-name="Path 132"
                                                                   class="cls-6-60min"
                                                                   d="M6.58,21.94l-.37.36a.53.53,0,0,0,0,.74.52.52,0,0,0,.73,0l.37-.37a.52.52,0,1,0-.73-.73Z"></path><path
                                                                   id="Path_133" data-name="Path 133"
                                                                   class="cls-6-60min"
                                                                   d="M22.67,21.94a.52.52,0,1,0-.73.73h0l.36.37A.52.52,0,1,0,23,22.3Z"></path><path
                                                                   id="Path_134" data-name="Path 134"
                                                                   class="cls-6-60min"
                                                                   d="M6.94,6.21a.52.52,0,0,0-.73.73l.37.37a.52.52,0,1,0,.73-.73Z"></path></g></g><g
                                                           id="Group_311" data-name="Group 311">
                                                                <line id="Line_3"
                                                                      data-name="Line 3"
                                                                      class="cls-7-60min"
                                                                      x1="13.51"
                                                                      y1="16.62"
                                                                      x2="9.37"
                                                                      y2="16.62"></line>
                                                                <line
                                                                    id="Line_4" data-name="Line 4" class="cls-7-60min"
                                                                    x1="15.06" y1="15.06" x2="15.06" y2="9.38"></line>
                                                                <circle
                                                                    id="Ellipse_32" data-name="Ellipse 32"
                                                                    class="cls-7-60min" cx="15.06" cy="16.62"
                                                                    r="1.55"></circle></g></g></g></g>
                                            </svg>
                                        <div class="appointment-item-duration">
                                            <div style="font-size: 14px">60</div>
                                            <div style="font-size: 10px">دقيقة</div>
                                        </div>
                                    </span>
                                        <span class="appointment-item-from"><div>١٢:٠٠ ص</div><div>٠١:٠٠ ص</div>
                                    </span>
                                        <span class="appointment-item-to">إلى</span>
                                    </div>
                                    <div class="item-details pointer">
                                    <span>
                                       <svg
                                           xmlns="http://www.w3.org/2000/svg"
                                           xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 30 30"
                                           class="icon" style="width: 18px;"><defs><style>.cls-1-60min, .cls-3-60min, .cls-7-60min {
                                                       fill: none;
                                                   }

                                                   .cls-2-60min {
                                                       fill: #fff;
                                                   }

                                                   .cls-3-60min, .cls-7-60min {
                                                       stroke: #666669;
                                                   }

                                                   .cls-4-60min {
                                                       clip-path: url(#clip-path);
                                                   }

                                                   .cls-5-60min {
                                                       fill: #ccc;
                                                   }

                                                   .cls-6-60min {
                                                       fill: #666669;
                                                   }

                                                   .cls-7-60min {
                                                       stroke-linecap: round;
                                                       stroke-linejoin: round;
                                                       stroke-width: 0.8px;
                                                   }</style><clipPath id="clip-path"><rect class="cls-1-60min"
                                                                                           width="30"
                                                                                           height="30"></rect></clipPath></defs><title>60 Min</title><g
                                               id="Layer_2" data-name="Layer 2"><g id="Layer_1-2"
                                                                                   data-name="Layer 1"><g
                                                       id="Group_312" data-name="Group 312"><g id="Group_310"
                                                                                               data-name="Group 310"><g
                                                               id="Group_307" data-name="Group 307"><g
                                                                   id="Ellipse_30" data-name="Ellipse 30"><circle
                                                                       class="cls-2-60min" cx="15" cy="15"
                                                                       r="15"></circle><circle class="cls-3-60min"
                                                                                               cx="15" cy="15"
                                                                                               r="14.25"></circle></g><g
                                                                   class="cls-4-60min"><g id="Mask_Group_11"
                                                                                          data-name="Mask Group 11"><g
                                                                           id="Path_144" data-name="Path 144"><path
                                                                               class="cls-5-60min"
                                                                               d="M15,29.25A14.25,14.25,0,1,1,29.25,15,14.26,14.26,0,0,1,15,29.25Z"></path><path
                                                                               class="cls-6-60min"
                                                                               d="M15,1.5A13.5,13.5,0,1,0,28.5,15,13.52,13.52,0,0,0,15,1.5M15,0A15,15,0,1,1,0,15,15,15,0,0,1,15,0Z"></path></g></g></g></g><g
                                                               id="Group_306" data-name="Group 306"><path
                                                                   id="Path_129" data-name="Path 129"
                                                                   class="cls-6-60min"
                                                                   d="M26,14.11h-.51a.52.52,0,1,0,0,1H26a.52.52,0,1,0,0-1Z"></path><path
                                                                   id="Path_130" data-name="Path 130"
                                                                   class="cls-6-60min"
                                                                   d="M3.76,14.11H3.24a.52.52,0,0,0,0,1h.52a.52.52,0,1,0,0-1Z"></path><path
                                                                   id="Path_131" data-name="Path 131"
                                                                   class="cls-6-60min"
                                                                   d="M22.31,6.21l-.37.37a.52.52,0,1,0,.73.73h0L23,6.94a.52.52,0,0,0-.73-.73Z"></path><path
                                                                   id="Path_132" data-name="Path 132"
                                                                   class="cls-6-60min"
                                                                   d="M6.58,21.94l-.37.36a.53.53,0,0,0,0,.74.52.52,0,0,0,.73,0l.37-.37a.52.52,0,1,0-.73-.73Z"></path><path
                                                                   id="Path_133" data-name="Path 133"
                                                                   class="cls-6-60min"
                                                                   d="M22.67,21.94a.52.52,0,1,0-.73.73h0l.36.37A.52.52,0,1,0,23,22.3Z"></path><path
                                                                   id="Path_134" data-name="Path 134"
                                                                   class="cls-6-60min"
                                                                   d="M6.94,6.21a.52.52,0,0,0-.73.73l.37.37a.52.52,0,1,0,.73-.73Z"></path></g></g><g
                                                           id="Group_311" data-name="Group 311">
                                                                <line id="Line_3"
                                                                      data-name="Line 3"
                                                                      class="cls-7-60min"
                                                                      x1="13.51"
                                                                      y1="16.62"
                                                                      x2="9.37"
                                                                      y2="16.62"></line>
                                                                <line
                                                                    id="Line_4" data-name="Line 4" class="cls-7-60min"
                                                                    x1="15.06" y1="15.06" x2="15.06" y2="9.38"></line>
                                                                <circle
                                                                    id="Ellipse_32" data-name="Ellipse 32"
                                                                    class="cls-7-60min" cx="15.06" cy="16.62"
                                                                    r="1.55"></circle></g></g></g></g>
                                            </svg>
                                        <div class="appointment-item-duration">
                                            <div style="font-size: 14px">60</div>
                                            <div style="font-size: 10px">دقيقة</div>
                                        </div>
                                    </span>
                                        <span class="appointment-item-from"><div>١٢:٠٠ ص</div><div>٠١:٠٠ ص</div>
                                    </span>
                                        <span class="appointment-item-to">إلى</span>
                                    </div>
                                    <div class="item-details pointer">
                                    <span>
                                       <svg
                                           xmlns="http://www.w3.org/2000/svg"
                                           xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 30 30"
                                           class="icon" style="width: 18px;"><defs><style>.cls-1-60min, .cls-3-60min, .cls-7-60min {
                                                       fill: none;
                                                   }

                                                   .cls-2-60min {
                                                       fill: #fff;
                                                   }

                                                   .cls-3-60min, .cls-7-60min {
                                                       stroke: #666669;
                                                   }

                                                   .cls-4-60min {
                                                       clip-path: url(#clip-path);
                                                   }

                                                   .cls-5-60min {
                                                       fill: #ccc;
                                                   }

                                                   .cls-6-60min {
                                                       fill: #666669;
                                                   }

                                                   .cls-7-60min {
                                                       stroke-linecap: round;
                                                       stroke-linejoin: round;
                                                       stroke-width: 0.8px;
                                                   }</style><clipPath id="clip-path"><rect class="cls-1-60min"
                                                                                           width="30"
                                                                                           height="30"></rect></clipPath></defs><title>60 Min</title><g
                                               id="Layer_2" data-name="Layer 2"><g id="Layer_1-2"
                                                                                   data-name="Layer 1"><g
                                                       id="Group_312" data-name="Group 312"><g id="Group_310"
                                                                                               data-name="Group 310"><g
                                                               id="Group_307" data-name="Group 307"><g
                                                                   id="Ellipse_30" data-name="Ellipse 30"><circle
                                                                       class="cls-2-60min" cx="15" cy="15"
                                                                       r="15"></circle><circle class="cls-3-60min"
                                                                                               cx="15" cy="15"
                                                                                               r="14.25"></circle></g><g
                                                                   class="cls-4-60min"><g id="Mask_Group_11"
                                                                                          data-name="Mask Group 11"><g
                                                                           id="Path_144" data-name="Path 144"><path
                                                                               class="cls-5-60min"
                                                                               d="M15,29.25A14.25,14.25,0,1,1,29.25,15,14.26,14.26,0,0,1,15,29.25Z"></path><path
                                                                               class="cls-6-60min"
                                                                               d="M15,1.5A13.5,13.5,0,1,0,28.5,15,13.52,13.52,0,0,0,15,1.5M15,0A15,15,0,1,1,0,15,15,15,0,0,1,15,0Z"></path></g></g></g></g><g
                                                               id="Group_306" data-name="Group 306"><path
                                                                   id="Path_129" data-name="Path 129"
                                                                   class="cls-6-60min"
                                                                   d="M26,14.11h-.51a.52.52,0,1,0,0,1H26a.52.52,0,1,0,0-1Z"></path><path
                                                                   id="Path_130" data-name="Path 130"
                                                                   class="cls-6-60min"
                                                                   d="M3.76,14.11H3.24a.52.52,0,0,0,0,1h.52a.52.52,0,1,0,0-1Z"></path><path
                                                                   id="Path_131" data-name="Path 131"
                                                                   class="cls-6-60min"
                                                                   d="M22.31,6.21l-.37.37a.52.52,0,1,0,.73.73h0L23,6.94a.52.52,0,0,0-.73-.73Z"></path><path
                                                                   id="Path_132" data-name="Path 132"
                                                                   class="cls-6-60min"
                                                                   d="M6.58,21.94l-.37.36a.53.53,0,0,0,0,.74.52.52,0,0,0,.73,0l.37-.37a.52.52,0,1,0-.73-.73Z"></path><path
                                                                   id="Path_133" data-name="Path 133"
                                                                   class="cls-6-60min"
                                                                   d="M22.67,21.94a.52.52,0,1,0-.73.73h0l.36.37A.52.52,0,1,0,23,22.3Z"></path><path
                                                                   id="Path_134" data-name="Path 134"
                                                                   class="cls-6-60min"
                                                                   d="M6.94,6.21a.52.52,0,0,0-.73.73l.37.37a.52.52,0,1,0,.73-.73Z"></path></g></g><g
                                                           id="Group_311" data-name="Group 311">
                                                                <line id="Line_3"
                                                                      data-name="Line 3"
                                                                      class="cls-7-60min"
                                                                      x1="13.51"
                                                                      y1="16.62"
                                                                      x2="9.37"
                                                                      y2="16.62"></line>
                                                                <line
                                                                    id="Line_4" data-name="Line 4" class="cls-7-60min"
                                                                    x1="15.06" y1="15.06" x2="15.06" y2="9.38"></line>
                                                                <circle
                                                                    id="Ellipse_32" data-name="Ellipse 32"
                                                                    class="cls-7-60min" cx="15.06" cy="16.62"
                                                                    r="1.55"></circle></g></g></g></g>
                                            </svg>
                                        <div class="appointment-item-duration">
                                            <div style="font-size: 14px">60</div>
                                            <div style="font-size: 10px">دقيقة</div>
                                        </div>
                                    </span>
                                        <span class="appointment-item-from"><div>١٢:٠٠ ص</div><div>٠١:٠٠ ص</div>
                                    </span>
                                        <span class="appointment-item-to">إلى</span>
                                    </div>
                                    <div class="item-details pointer">
                                    <span>
                                       <svg
                                           xmlns="http://www.w3.org/2000/svg"
                                           xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 30 30"
                                           class="icon" style="width: 18px;"><defs><style>.cls-1-60min, .cls-3-60min, .cls-7-60min {
                                                       fill: none;
                                                   }

                                                   .cls-2-60min {
                                                       fill: #fff;
                                                   }

                                                   .cls-3-60min, .cls-7-60min {
                                                       stroke: #666669;
                                                   }

                                                   .cls-4-60min {
                                                       clip-path: url(#clip-path);
                                                   }

                                                   .cls-5-60min {
                                                       fill: #ccc;
                                                   }

                                                   .cls-6-60min {
                                                       fill: #666669;
                                                   }

                                                   .cls-7-60min {
                                                       stroke-linecap: round;
                                                       stroke-linejoin: round;
                                                       stroke-width: 0.8px;
                                                   }</style><clipPath id="clip-path"><rect class="cls-1-60min"
                                                                                           width="30"
                                                                                           height="30"></rect></clipPath></defs><title>60 Min</title><g
                                               id="Layer_2" data-name="Layer 2"><g id="Layer_1-2"
                                                                                   data-name="Layer 1"><g
                                                       id="Group_312" data-name="Group 312"><g id="Group_310"
                                                                                               data-name="Group 310"><g
                                                               id="Group_307" data-name="Group 307"><g
                                                                   id="Ellipse_30" data-name="Ellipse 30"><circle
                                                                       class="cls-2-60min" cx="15" cy="15"
                                                                       r="15"></circle><circle class="cls-3-60min"
                                                                                               cx="15" cy="15"
                                                                                               r="14.25"></circle></g><g
                                                                   class="cls-4-60min"><g id="Mask_Group_11"
                                                                                          data-name="Mask Group 11"><g
                                                                           id="Path_144" data-name="Path 144"><path
                                                                               class="cls-5-60min"
                                                                               d="M15,29.25A14.25,14.25,0,1,1,29.25,15,14.26,14.26,0,0,1,15,29.25Z"></path><path
                                                                               class="cls-6-60min"
                                                                               d="M15,1.5A13.5,13.5,0,1,0,28.5,15,13.52,13.52,0,0,0,15,1.5M15,0A15,15,0,1,1,0,15,15,15,0,0,1,15,0Z"></path></g></g></g></g><g
                                                               id="Group_306" data-name="Group 306"><path
                                                                   id="Path_129" data-name="Path 129"
                                                                   class="cls-6-60min"
                                                                   d="M26,14.11h-.51a.52.52,0,1,0,0,1H26a.52.52,0,1,0,0-1Z"></path><path
                                                                   id="Path_130" data-name="Path 130"
                                                                   class="cls-6-60min"
                                                                   d="M3.76,14.11H3.24a.52.52,0,0,0,0,1h.52a.52.52,0,1,0,0-1Z"></path><path
                                                                   id="Path_131" data-name="Path 131"
                                                                   class="cls-6-60min"
                                                                   d="M22.31,6.21l-.37.37a.52.52,0,1,0,.73.73h0L23,6.94a.52.52,0,0,0-.73-.73Z"></path><path
                                                                   id="Path_132" data-name="Path 132"
                                                                   class="cls-6-60min"
                                                                   d="M6.58,21.94l-.37.36a.53.53,0,0,0,0,.74.52.52,0,0,0,.73,0l.37-.37a.52.52,0,1,0-.73-.73Z"></path><path
                                                                   id="Path_133" data-name="Path 133"
                                                                   class="cls-6-60min"
                                                                   d="M22.67,21.94a.52.52,0,1,0-.73.73h0l.36.37A.52.52,0,1,0,23,22.3Z"></path><path
                                                                   id="Path_134" data-name="Path 134"
                                                                   class="cls-6-60min"
                                                                   d="M6.94,6.21a.52.52,0,0,0-.73.73l.37.37a.52.52,0,1,0,.73-.73Z"></path></g></g><g
                                                           id="Group_311" data-name="Group 311">
                                                                <line id="Line_3"
                                                                      data-name="Line 3"
                                                                      class="cls-7-60min"
                                                                      x1="13.51"
                                                                      y1="16.62"
                                                                      x2="9.37"
                                                                      y2="16.62"></line>
                                                                <line
                                                                    id="Line_4" data-name="Line 4" class="cls-7-60min"
                                                                    x1="15.06" y1="15.06" x2="15.06" y2="9.38"></line>
                                                                <circle
                                                                    id="Ellipse_32" data-name="Ellipse 32"
                                                                    class="cls-7-60min" cx="15.06" cy="16.62"
                                                                    r="1.55"></circle></g></g></g></g>
                                            </svg>
                                        <div class="appointment-item-duration">
                                            <div style="font-size: 14px">60</div>
                                            <div style="font-size: 10px">دقيقة</div>
                                        </div>
                                    </span>
                                        <span class="appointment-item-from"><div>١٢:٠٠ ص</div><div>٠١:٠٠ ص</div>
                                    </span>
                                        <span class="appointment-item-to">إلى</span>
                                    </div>

                                </div>
                            @endfor
                        </div>
                        <div id="calendar-block" style="display: none">
                            <div id='wrap'>
                                <div id='calendar'></div>
                                <div style='clear:both'></div>
                            </div>
                        </div>
                        <button id="booking-session-btn" class="reserve-now" >احجز الأن</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>

    function change_type(event) {
        if (event.target.id == 'calendar-btn') {
            $("#this-week-btn").removeClass("active");
            $("#calendar-btn").addClass("active");
            $("#calendar-block").show();
            $("#appointments-block").hide();
        } else {
            $("#calendar-btn").removeClass("active");
            $("#this-week-btn").addClass("active");
            $("#calendar-block").hide();
            $("#appointments-block").show();
        }
    }
    $(document).ready(function () {


        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        /*  className colors

        className: default(transparent), important(red), chill(pink), success(green), info(blue)

        */


        /* initialize the external events
        -----------------------------------------------------------------*/

        $('#external-events div.external-event').each(function() {

            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
                title: $.trim($(this).text()) // use the element's text as the event title
            };

            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true,      // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });

        });


        /* initialize the calendar
        -----------------------------------------------------------------*/

        $('#calendar').fullCalendar({
            start: new Date(),
            monthNames: ['يناير','فبراير','مارس','إبريل','مايو','يونيو','يوليو','أغسطس','سبتمبر','أكتوبر','نوفمبر','ديسمبر'],
            monthNamesShort: ['يناير','فبراير','مارس','إبريل','مايو','يونيو','يوليو','أغسطس','سبتمبر','أكتوبر','نوفمبر','ديسمبر'],
            dayNames: ['الأحد','الإثنين','الثلاثاء','الأربعاء','الخميس','الجمعة','السبت'],
            dayNamesShort: ['الأحد','الإثنين','الثلاثاء','الأربعاء','الخميس','الجمعة','السبت'],
        });


    });

</script>
