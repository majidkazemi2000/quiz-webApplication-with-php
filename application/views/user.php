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
    <link rel="stylesheet" href="static/css/user.css">
    <script src="static/js/user.js"></script>
    <link rel="stylesheet" href="static/css/animate.min.css"/>

</head>
<body>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center main">
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 text-center" id="user_content">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: #696bd4;padding: 0;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                    <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-right user">
                        <p class="user_name"><?php echo $_SESSION['user_name'];?></p>
                        <img class="logout" src="static/images/off.png" alt="NOT FOUND">
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 80px;padding: 0;">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 80px;">
                            <p id="user_level">10</p>
                            <img src="static/images/level.png" alt="NOT FOUND" class="level_img">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 80px;">
                            <p id="user_coin">120</p>
                            <img src="static/images/coin.png" alt="NOT FOUND" class="img_user">
                            <img src="static/images/plus.png" alt="NOT FOUND" id="add_coin">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 80px;">
                            <p id="user_heart">2</p>
                            <img src="static/images/heart.png" alt="NOT FOUND" class="img_user">
                            <img src="static/images/plus.png" alt="NOT FOUND" id="add_heart" style="right: 17px;">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-6 hidden-xs text-right user">
                        <p class="user_name"><?php echo $_SESSION['user_name'];?></p>
                        <img class="logout" src="static/images/off.png" alt="NOT FOUND">
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center" style="height: 100px;">
                            <p class="txt">ایمیل : <span id="email_user">majidkazemi@gmail.com</span></p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center" style="height: 100px;">
                            <p class="txt">شماره تلفن : <span id="phone_user">09128768898</span></p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center" style="height: 100px;">
                            <p class="txt">تعداد پاسخ های صحیح : <span id="correct_answer_user">64</span></p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center" style="height: 100px;">
                            <p class="txt">تعداد پاسخ های غلط : <span id="mistake_answer_user">12</span></p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;padding: 0;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;">
                            <p class="txt">رتبه شما در میان <span id="all_user">3243</span> کاربر <span id="place_user">24</span> است .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="add_coin_div">
        <img src="static/images/close1.png" alt="NOT FOUND" id="close_add_coin">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 text-center skin"></div>
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 text-center" style="height: auto;position: absolute;top: 100px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background: linear-gradient(to left,#47d0a6,#1ed0bd);box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center add_coin_item" about="coin_100">
                        <img src="static/images/coin.png" alt="NOT FOUND">
                        <p>خرید 100 سکه</p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center add_coin_item" about="coin_500">
                        <img src="static/images/coin.png" alt="NOT FOUND">
                        <p>خرید 500 سکه</p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center add_coin_item" about="coin_1000">
                        <img src="static/images/coin.png" alt="NOT FOUND">
                        <p>خرید 1000 سکه</p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center add_coin_item" about="coin_2000">
                        <img src="static/images/coin.png" alt="NOT FOUND">
                        <p>خرید 2000 سکه</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 text-center" id="coin_price_div">
            <p class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-10 col-xs-10 col-xs-offset-1 text-center"><span id="coin_price_text"></span> تومان</p>
        </div>
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 text-center buy_div">
            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-10 col-xs-10 col-xs-offset-1 text-center" id="buy_coin">
                <p>خرید</p>
                <img src="static/images/basket.png" alt="NOT FOUND">
            </div>
        </div>
    </div>
    <div id="add_heart_div">
        <img src="static/images/close1.png" alt="NOT FOUND" id="close_add_heart">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 text-center" style="height: 500px;background-image: url('static/images/heart_background_1.jpg');background-size: auto;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);position: absolute;bottom: 0;"></div>
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 text-center" style="height: auto;position: absolute;top: 100px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background: linear-gradient(to left,#47d0a6,#1ed0bd);box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center add_coin_item" about="heart_3">
                        <img src="static/images/heart.png" alt="NOT FOUND">
                        <p>خرید 3 قلب</p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center add_coin_item" about="heart_5">
                        <img src="static/images/heart.png" alt="NOT FOUND">
                        <p>خرید 5 قلب</p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center add_coin_item" about="heart_10">
                        <img src="static/images/heart.png" alt="NOT FOUND">
                        <p>خرید 10 قلب</p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center add_coin_item" about="heart_20">
                        <img src="static/images/heart.png" alt="NOT FOUND">
                        <p>خرید 20 قلب</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 text-center" id="heart_price_div">
            <p class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-10 col-xs-10 col-xs-offset-1 text-center"><span id="heart_price_text"></span> تومان</p>
        </div>
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 text-center buy_div">
            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-10 col-xs-10 col-xs-offset-1 text-center" id="buy_heart">
                <p>خرید</p>
                <img src="static/images/basket.png" alt="NOT FOUND">
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;background:linear-gradient(to left,#32ba18,#268c12,#144b0a);position: fixed;bottom: -101px;z-index: 400;transition: all .3s ease-in-out;" id="success_pay">
        <p style="direction: rtl;font-family: 'A Iranian Sans';font-size: 15px;color: white;line-height: 100px;display: inline-block;">خرید با موفقیت انجام شد .</p>
        <img src="static/images/success.gif" alt="NOT FOUND" style="height: 40px;width: 40px;margin-top: -5px;display: inline-block;">
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;background:linear-gradient(to left,#c94f18,#a03f13,#a00f12);position: fixed;bottom: -101px;z-index: 400;transition: all .3s ease-in-out;" id="error_pay">
        <p style="direction: rtl;font-family: 'A Iranian Sans';font-size: 15px;color: white;line-height: 100px;display: inline-block;">خطایی رخ داده است .</p>
        <img src="static/images/cancel.png" alt="NOT FOUND" style="height: 40px;width: 40px;margin-top: -5px;display: inline-block;">
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="position: fixed;top: 0;right: 0;top: 0;bottom: 0;z-index: 50000;background-color: white;display: none;padding: 0;" id="load_div">
        <img src="static/images/loading6.gif" alt="NOT FOUND" style="width: 100%;height: 100%;">
    </div>

</body>
</html>
