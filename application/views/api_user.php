<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>کاربران</title>
    <link rel="shortcut icon" href="../static/images/logo.png" />
    <script src="../static/js/jquery.js"></script>
    <script src="../static/js/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="../static/css/jquery-ui.min.css">
    <script src="../static/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../static/css/bootstrap.min.css">
    <script src="../static/js/jquery.gauge.js"></script>
    <link rel="stylesheet" href="../static/css/api_user.css">
    <script src="../static/js/api_user.js"></script>
</head>
<body>

    <div id="main_div">
        <div class="col-lg-11 col-md-11 col-sm-11 col-xs-12 text-center main_content">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="info_div">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center info_head">
                    <p>مشخصات کاربر</p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center line"></div>


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 100px;">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right answer_label">
                                <p id="email"></p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right question_label">
                                <p style="">ایمیل</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 100px;padding: 0;">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right answer_label">
                                <p id="name"></p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right question_label">
                                <p>نام و نام خانوادگی</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 100px;">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right answer_label" style="height: 100px;">
                                <p style="direction: rtl;"><span id="sum_buy"></span> تومان </p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right question_label">
                                <p>مجموع خرید</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 100px;padding: 0;">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right answer_label">
                                <p id="price"></p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right question_label">
                                <p>نوع اشتراک</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center line"></div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;margin-bottom: 25px;">
                            <center>
                                <p class="key_head">APP-KEY</p>
                                <input id="key" readonly>
                                <img src="../static/images/copy.png" alt="NOT FOUND" title="copy" id="copy">
                            </center>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center line"></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center chart_div">
                        <p>تعداد درخواست ها</p>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center chart">
                            <canvas id="demo1" width="200" height="200"></canvas>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="document_div">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right document_content">
                    <ol style="direction: rtl;">
                        <li>برای دریافت سوالات , ابتدا باید دسته بندی ها را دریافت کنید .</li>
                        <li>برای دریافت دسته بندی ها باید آدرس <span style="background-color: white;color: black;padding: 5px 10px;font-size: 20px;">http://localhost/quiz/api/category/APP-KEY</span> را وارد کنید .</li>
                        <li>سپس برای دریافت سوالات آدرس <span style="background-color: white;color: black;padding: 5px 10px;font-size: 20px;">http://localhost/quiz/api/question/CATEGORY-ID/LEVEL/PAGE/APP-KEY</span> را وارد کنید .</li>
                        <li>متغیر اول که id هر کدام از دسته بندی ها می باشد .</li>
                        <li>متغیر دوم سطح سوالات می باشد .</li>
                        <li>سوالات در سه سطح آسان (1) و متوسط (2) و سخت (3) دسته بندی شده اند که باید مقدار عددی هر سطح را وارد نمایید .</li>
                        <li>به علت تعداد زیاد سوالات و استفاده ی راحت تر , آن ها را سفحه بندی کرده ایم . در هر درخواست شما 12 سوال به شما بر می گردد .</li>
                    </ol>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="buy_div">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding: 0;height: auto;padding-top: 50px;">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center" style="height: auto;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center option_api_div" style="background: linear-gradient(to left,#6d4911,#68320d);">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 400px;padding: 0;">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;padding: 0;">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 100px;">
                                        <p class="price_request">30,000 تومان</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 100px;">
                                        <p class="price_request">1,000 درخواست</p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center api_option">
                                    <ul style="direction: rtl;">
                                        <li class="option_api_text">دسترسی به بیش از 12,000 سوال</li>
                                        <li class="option_api_text">دسترسی به بیش از 10 نوع دسته بندی</li>
                                        <li class="option_api_text">استفاده از فرمت json</li>
                                        <li class="option_api_text">استفاده آسان و راحت از api</li>
                                        <li class="option_api_text">...</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center" style="height: auto;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center option_api_div" style="background: linear-gradient(to left,#8baea1,#aeaeac);">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 400px;padding: 0;">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;padding: 0;">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 100px;">
                                        <p class="price_request">50,000 تومان</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 100px;">
                                        <p class="price_request">10,000 درخواست</p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center api_option">
                                    <ul style="direction: rtl;">
                                        <li class="option_api_text">دسترسی به بیش از 12,000 سوال</li>
                                        <li class="option_api_text">دسترسی به بیش از 10 نوع دسته بندی</li>
                                        <li class="option_api_text">استفاده از فرمت json</li>
                                        <li class="option_api_text">استفاده آسان و راحت از api</li>
                                        <li class="option_api_text">...</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center" style="height: auto;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center option_api_div" style="background: linear-gradient(to left,#ffd544,#c0a033);">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 400px;padding: 0;">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;padding: 0;">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 100px;">
                                        <p class="price_request">100,000 تومان</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 100px;">
                                        <p class="price_request">20,000 درخواست</p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center api_option">
                                    <ul style="direction: rtl;">
                                        <li class="option_api_text">دسترسی به بیش از 12,000 سوال</li>
                                        <li class="option_api_text">دسترسی به بیش از 10 نوع دسته بندی</li>
                                        <li class="option_api_text">استفاده از فرمت json</li>
                                        <li class="option_api_text">استفاده آسان و راحت از api</li>
                                        <li class="option_api_text">...</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center menu_div_small">
            <div class="col-xs-3 text-center logout_div_big">
                <img src="../static/images/off.png" alt="NOT FOUND" class="logout">
            </div>
            <div class="col-xs-3 text-center menu_item_big">
                <p class="info_icon">مشخصات</p>
            </div>
            <div class="col-xs-3 text-center menu_item_big">
                <p class="buy_icon">خرید اشتراک</p>
            </div>
            <div class="col-xs-3 text-center menu_item_big">
                <p class="document_icon">مستندات</p>
            </div>

        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs text-center menu_div_big">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center user_img_div">
                <img src="../static/images/user.png" alt="NOT FOUND">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center menu_item_small">
                <p class="info_icon">مشخصات</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center menu_item_small">
                <p class="buy_icon">خرید اشتراک</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center menu_item_small">
                <p class="document_icon">مستندات</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center logout_div_small">
                <img src="../static/images/off.png" alt="NOT FOUND" class="logout">
            </div>

        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="load_div">
        <img src="../static/images/loading2.gif" alt="NOT FOUND">
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="success_message">
        <p>کپی شد</p>
    </div>

</body>
</html>
