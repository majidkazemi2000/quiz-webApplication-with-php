<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="static/images/logo.png" />
    <title>مسابقه هیجانی برد و باخت</title>
    <script src="static/js/jquery.js"></script>
    <script src="static/js/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="static/css/jquery-ui.min.css">
    <script src="static/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/animate.min.css"/>
    <link rel="stylesheet" href="static/css/index.css">
    <script src="static/js/index.js"></script>
</head>
<body>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="header">
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 text-center" id="header_content">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 80px;padding: 0;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 80px;">
                    <div style="height: 40px;margin-top: 15px;position: relative;width: 100px;margin-top: 22px;">

                        <?php
                            if (isset($_SESSION['user_id']) && isset($_SESSION['user_name']) && isset($_SESSION['user_ip'])){
                                ?>
                                <a id="users" href="user"><?php echo $_SESSION['user_name'];?></a>

                        <?php
                            }else{
                                ?>
                                <a id="users" href="register">کاربران</a>
                        <?php
                            }
                        ?>
                        <div id="bottom"></div>
                        <div id="top"></div>
                        <div id="left"></div>
                        <div id="right"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 80px;">
                    <p
                        <?php
                        if (isset($_SESSION['user_id']) && isset($_SESSION['user_name']) && isset($_SESSION['user_ip'])){
                        ?>
                            id="start_match"
                        <?php
                        }else{
                        ?>
                            id="go_to_register"
                        <?php
                        }
                    ?>>شروع مسابقه</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 400px;padding: 0;">
                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-12 text-center" style="height: 400px;">
                    <img src="static/images/logo.png" alt="NOT FOUND" style="height: 100px;margin-top: 60px;">
                    <p id="match">مسابقه اینترنتی برد و باخت</p>
                    <p id="win">لذت برنده شدن اونم با جایزه خیلی حال میده !</p>
                    <p id="reward">به همراه جوایز نقدی</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-7 hidden-xs text-center" style="height: 400px;padding: 0;">
                    <img src="static/images/empty.png" alt="NOT FOUND" style="height: 100%;width: 100%;">
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;position: absolute;top: 600px;z-index: 1;">
        <img id="arrow" src="static/images/arrow.gif" alt="NOT FOUND" style="height: 100px;width: 100px;cursor: pointer;">
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 120px;background: linear-gradient(to left,#47d0a6,#1ed0bd);"></div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;background: linear-gradient(to left,#47d0a6,#1ed0bd);padding-top: 50px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding-top: 20px;padding-bottom: 20px;">
            <p class="head_text">در مسابقات ما شرکت کنید</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs text-right" style="height: auto;">
            <img src="static/images/mobile.png" alt="NOT FOUND" style="height: 400px;width: 230px;margin-top: 25px;transform: rotate(5deg)">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center" style="height: auto;padding-top: 20px;padding-bottom: 20px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center match_item_left">
                <p class="col-lg-10 col-md-9 col-sm-9 col-xs-9 text-right match_item_p_left">ادبیات و ضرب المثل</p>
                <img class="col-lg-2 col-md-3 col-sm-3 col-xs-3 text-left" src="static/images/book.png" alt="NOT FOUND">
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center match_item_left">
                <p class="col-lg-10 col-md-9 col-sm-9 col-xs-9 text-right match_item_p_left">سیاسی و اجتماعی</p>
                <img class="col-lg-2 col-md-3 col-sm-3 col-xs-3 text-left" src="static/images/conference.png" alt="NOT FOUND">
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center match_item_left">
                <p class="col-lg-10 col-md-9 col-sm-9 col-xs-9 text-right match_item_p_left">تصویری</p>
                <img class="col-lg-2 col-md-3 col-sm-3 col-xs-3 text-left" src="static/images/image.png" alt="NOT FOUND">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center match_item_left">
                <p class="col-lg-10 col-md-9 col-sm-9 col-xs-9 text-right match_item_p_left">ریاضی و هوش</p>
                <img class="col-lg-2 col-md-3 col-sm-3 col-xs-3 text-left" src="static/images/math.png" alt="NOT FOUND">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center match_item_left">
                <p class="col-lg-10 col-md-9 col-sm-9 col-xs-9 text-right match_item_p_left">راهنمایی و رانندگی</p>
                <img class="col-lg-2 col-md-3 col-sm-3 col-xs-3 text-left" src="static/images/driving.png" alt="NOT FOUND">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center match_item_left">
                <p class="col-lg-10 col-md-9 col-sm-9 col-xs-9 text-right match_item_p_left">کنکور</p>
                <img class="col-lg-2 col-md-3 col-sm-3 col-xs-3 text-left" src="static/images/lamp.png" alt="NOT FOUND">
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center" style="height: auto;padding-top: 20px;padding-bottom: 20px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center match_item_right">
                <p class="col-lg-10 col-md-9 col-sm-9 col-xs-9 text-right match_item_p_right">اطلاعات عمومی</p>
                <img class="col-lg-2 col-md-3 col-sm-3 col-xs-3 text-left" src="static/images/general.png" alt="NOT FOUND">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center match_item_right">
                <p class="col-lg-10 col-md-9 col-sm-9 col-xs-9 text-right match_item_p_right">جغرافیا و گردشگری</p>
                <img class="col-lg-2 col-md-3 col-sm-3 col-xs-3 text-left" src="static/images/geography.png" alt="NOT FOUND">
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center match_item_right">
                <p class="col-lg-10 col-md-9 col-sm-9 col-xs-9 text-right match_item_p_right">تاریخ و دفاع مقدس</p>
                <img class="col-lg-2 col-md-3 col-sm-3 col-xs-3 text-left" src="static/images/history.png" alt="NOT FOUND">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center match_item_right">
                <p class="col-lg-10 col-md-9 col-sm-9 col-xs-9 text-right match_item_p_right">ورزشی</p>
                <img class="col-lg-2 col-md-3 col-sm-3 col-xs-3 text-left" src="static/images/sport.png" alt="NOT FOUND">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center match_item_right">
                <p class="col-lg-10 col-md-9 col-sm-9 col-xs-9 text-right match_item_p_right">هنر و نمایش</p>
                <img class="col-lg-2 col-md-3 col-sm-3 col-xs-3 text-left" src="static/images/art.png" alt="NOT FOUND">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center match_item_right">
                <p class="col-lg-10 col-md-9 col-sm-9 col-xs-9 text-right match_item_p_right">احکام</p>
                <img class="col-lg-2 col-md-3 col-sm-3 col-xs-3 text-left" src="static/images/mosque.png" alt="NOT FOUND">
            </div>
        </div>
    </div>



    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 120px;background: linear-gradient(to left,#47d0a6,#1ed0bd);"></div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding:0;padding-top: 20px;padding-bottom: 20px;">
            <p class="head_text">از API ما استفاده کنید</p>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding: 0;height: auto;">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center" style="height: auto;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center option_api_div">
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
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center option_api_div">
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
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center option_api_div">
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

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="api">
                <a href="api/register">ثبت نام</a>
            </div>

        </div>
    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="about">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center" style="height: auto;margin-top: 25px;margin-bottom: 25px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="info_lottery">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 350px;margin-top: 25px;z-index: 4;">
                    <img src="static/images/banner1.jpg" alt="NOT FOUND" style="width: 100%;height: 100%;">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding: 0;height: 150px;padding-top: 30px;z-index: 4;">
                    <center>
                        <p class="about">هر ماه به قید قرعه بین 100 نفر اول قرعه کشی صورت میگیرد و به هر کدام از برندگان از طرف ما جایزه نقدی 500,000 ریالی تقدیم می شود.</p>
                    </center>
                </div>
                <div id="skin_lottery"></div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center" style="height: auto;margin-top: 25px;margin-bottom: 25px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="info_place">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 350px;margin-top: 25px;z-index: 4;">
                    <img src="static/images/banner2.jpg" alt="NOT FOUND" style="width: 100%;height: 100%;">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding: 0;height: 150px;padding-top: 30px;z-index: 4;">
                    <center>
                        <p class="about">کاربران شرکت کننده در مسابقه بر اساس امتیازشان رتبه بندی می شوند .</p>
                    </center>
                </div>
                <div id="skin_place"></div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="add">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
            <p id="address">آدرس ما : لرستان - دورود - خیابان جماران</p>
            <p id="phone">تلفن ما : 09305243680</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: auto;padding-top: 100px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;padding: 0;">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 100px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;padding: 0;">
                        <img src="static/images/namad1.png" alt="NOT FOUND" style="height: 100%;width: auto;">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 100px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;padding: 0;">
                        <img src="static/images/namad2.png" alt="NOT FOUND" style="height: 100%;width: auto;">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 100px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;padding: 0;">
                        <img src="static/images/namad3.png" alt="NOT FOUND" style="height: 100%;width: auto;">
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="developer">
                <p>طراحی و توسعه توسط مجید کاظمی</p>
            </div>
        </div>
    </div>

    <div id="page"></div>
    <div id="select_div">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="select_box">
            <img src="static/images/close1.png" alt="NOT FOUND" id="close_select">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center section_select">
                <p>انتخاب بازی</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="category_list"></div>
        </div>
    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="go_to_login_div">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: auto;padding-top: 50px;">
            <a href="register">ورود / ثبت نام</a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: auto;">
            <p>برای شروع مسابقه ثبت نام کنید</p>
            <img src="static/images/user_admin.png" alt="NOT FOUND">
        </div>
    </div>
</body>
</html>