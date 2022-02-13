<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ادمین</title>
    <link rel="shortcut icon" href="static/images/logo.png" />
    <script src="static/js/jquery.js"></script>
    <script src="static/js/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="static/css/jquery-ui.min.css">
    <script src="static/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/ad.css">
    <script src="static/js/ad.js"></script>
</head>
<body>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left" style="height: 80px;background-color: black;">
        <p id="logout">خروج</p>
        <p style="width: 200px;font-family: 'A Iranian Sans';color: green;height: 50px;line-height: 50px;display: inline-block;margin-left: 15px;">دسترسی ادمین</p>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;margin-bottom: 100px;display: none;" id="setting_div">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;background-color: #696bd4;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);">
            <img src="static/images/setting.png" alt="NOT FOUND" style="height: 25px;width: 25px;display: inline-block;margin-right: 10px;margin-top: -3px;">
            <p style="line-height: 50px;font-family: 'A Iranian Sans';color: black;font-weight: bold;display: inline-block;">تنظیمات</p>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;margin-top: 25px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: white;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;display: inline-block;">
                            <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">تنظیمات عمومی</p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 2px;background: linear-gradient(to left,transparent,black,transparent);"></div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;padding: 0;">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 100px;">
                                <input name="address_setting" id="address_setting" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="text" style="height: 40px;border: none;border-radius: 10px;background-color: lightgray;font-family: 'A Iranian Sans';color: black;font-size: 15px;margin-top: 30px;">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 100px;">
                                <p style="line-height: 100px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">آدرس</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;padding: 0;">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 100px;">
                                <input name="phone_setting" id="phone_setting" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="text" style="height: 40px;border: none;border-radius: 10px;background-color: lightgray;font-family: 'A Iranian Sans';color: black;font-size: 15px;margin-top: 30px;">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 100px;">
                                <p style="line-height: 100px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">تلفن</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;padding: 0;">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 100px;">
                                <input name="delete_one_choose_setting" id="delete_one_choose_setting" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="text" style="height: 40px;border: none;border-radius: 10px;background-color: lightgray;font-family: 'A Iranian Sans';color: black;font-size: 15px;margin-top: 30px;">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 100px;">
                                <p style="line-height: 100px;font-family: 'A Iranian Sans';font-weight: bold;color: black;direction: rtl;">حذف یک گزینه (سکه)</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;padding: 0;">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 100px;">
                                <input name="delete_two_choose_setting" id="delete_two_choose_setting" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="text" style="height: 40px;border: none;border-radius: 10px;background-color: lightgray;font-family: 'A Iranian Sans';color: black;font-size: 15px;margin-top: 30px;">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 100px;">
                                <p style="line-height: 100px;font-family: 'A Iranian Sans';font-weight: bold;color: black;direction: rtl;">حذف دو گزینه (سکه)</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;padding: 0;">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 100px;">
                                <input name="go_to_next_level_setting" id="go_to_next_level_setting" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="text" style="height: 40px;border: none;border-radius: 10px;background-color: lightgray;font-family: 'A Iranian Sans';color: black;font-size: 15px;margin-top: 30px;">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 100px;">
                                <p style="line-height: 100px;font-family: 'A Iranian Sans';font-weight: bold;color: black;direction: rtl;">رفتن به مرحله بعد (قلب)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center" style="height: auto;margin-top: 25px;margin-bottom: 25px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: white;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.7);padding: 20px;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;display: inline-block;">
                            <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;direction: rtl;">تنظیمات سکه (قیمت ها بر حسب تومان)</p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 2px;background: linear-gradient(to left,transparent,black,transparent);"></div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;padding: 0;">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 100px;">
                                    <input name="coin_100" id="coin_100" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="text" style="height: 40px;border: none;border-radius: 10px;background-color: lightgray;font-family: 'A Iranian Sans';color: black;font-size: 15px;margin-top: 30px;">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 100px;">
                                    <p style="line-height: 100px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">قیمت 100 سکه</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;padding: 0;">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 100px;">
                                    <input name="coin_500" id="coin_500" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="text" style="height: 40px;border: none;border-radius: 10px;background-color: lightgray;font-family: 'A Iranian Sans';color: black;font-size: 15px;margin-top: 30px;">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 100px;">
                                    <p style="line-height: 100px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">قیمت 500 سکه</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;padding: 0;">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 100px;">
                                    <input name="coin_1000" id="coin_1000" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="text" style="height: 40px;border: none;border-radius: 10px;background-color: lightgray;font-family: 'A Iranian Sans';color: black;font-size: 15px;margin-top: 30px;">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 100px;">
                                    <p style="line-height: 100px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">قیمت 1000 سکه</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;padding: 0;">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 100px;">
                                    <input name="coin_2000" id="coin_2000" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="text" style="height: 40px;border: none;border-radius: 10px;background-color: lightgray;font-family: 'A Iranian Sans';color: black;font-size: 15px;margin-top: 30px;">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 100px;">
                                    <p style="line-height: 100px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">قیمت 2000 سکه</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center" style="height: auto;margin-top: 25px;margin-bottom: 25px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: white;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.7);padding: 20px;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;display: inline-block;">
                            <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;direction: rtl;">تنظیمات قلب (قیمت ها بر حسب تومان)</p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 2px;background: linear-gradient(to left,transparent,black,transparent);"></div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;padding: 0;">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 100px;">
                                    <input name="heart_3" id="heart_3" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="text" style="height: 40px;border: none;border-radius: 10px;background-color: lightgray;font-family: 'A Iranian Sans';color: black;font-size: 15px;margin-top: 30px;">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 100px;">
                                    <p style="line-height: 100px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">قیمت 3 قلب</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;padding: 0;">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 100px;">
                                    <input name="heart_5" id="heart_5" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="text" style="height: 40px;border: none;border-radius: 10px;background-color: lightgray;font-family: 'A Iranian Sans';color: black;font-size: 15px;margin-top: 30px;">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 100px;">
                                    <p style="line-height: 100px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">قیمت 5 قلب</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;padding: 0;">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 100px;">
                                    <input name="heart_10" id="heart_10" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="text" style="height: 40px;border: none;border-radius: 10px;background-color: lightgray;font-family: 'A Iranian Sans';color: black;font-size: 15px;margin-top: 30px;">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 100px;">
                                    <p style="line-height: 100px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">قیمت 10 قلب</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;padding: 0;">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 100px;">
                                    <input name="heart_20" id="heart_20" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="text" style="height: 40px;border: none;border-radius: 10px;background-color: lightgray;font-family: 'A Iranian Sans';color: black;font-size: 15px;margin-top: 30px;">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 100px;">
                                    <p style="line-height: 100px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">قیمت 20 قلب</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;margin-top: 25px;margin-bottom: 25px;">
                    <button id="change_setting" style="height: 50px;background-color: green;width: 200px;font-family: 'A Iranian Sans';color: white;font-size: 15px;border: none;margin-top: 5px;box-shadow: 0 8px 16px 0 rgba(1,1,1,.7);">ویرایش</button>
                </div>
            </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;margin-bottom: 100px;display: none;" id="category_div">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;background-color: #696bd4;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.7);position: relative;">
            <img src="static/images/category.png" alt="NOT FOUND" style="height: 20px;width: 20px;display: inline-block;margin-right: 10px;margin-top: -3px;">
            <p style="line-height: 50px;font-family: 'A Iranian Sans';color: black;font-weight: bold;display: inline-block;">دسته بندی</p>
            <img src="static/images/add.png" alt="NOT FOUND" style="position: absolute;width: 30px;height: 30px;right: 30px;top: 10px;cursor:pointer;" id="add_category_image">
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;" id="category_list"></div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding-top: 15px;padding-bottom: 15px;display: none;" id="category_page_frame">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                <p style="line-height: 50px;font-family: 'A Iranian Sans';color: black;">رفتن به صفحه</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding-top: 15px;padding-bottom: 15px;" id="category_page_content"></div>
        </div>
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 text-center" style="height: 100px;margin-top: 50px;margin-bottom: 50px;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);background-image: url('static/images/error_background_1.jpg');background-repeat: no-repeat;background-size: cover;display: none;" id="error_category">
            <p style="line-height: 100px;font-family: 'A Iranian Sans';font-weight: bold;font-size: 15px;color: white;">دسته بندی وجود ندارد</p>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;margin-bottom: 100px;display: none;" id="question_div">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;background-color: #696bd4;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);position: relative;">
            <img src="static/images/question.png" alt="NOT FOUND" style="height: 25px;width: 25px;display: inline-block;margin-right: 10px;margin-top: -3px;">
            <p style="line-height: 50px;font-family: 'A Iranian Sans';color: black;font-weight: bold;display: inline-block;">سوالات</p>

            <img src="static/images/search.png" alt="NOT FOUND" style="position: absolute;width: 30px;height: 30px;right: 80px;top: 10px;cursor:pointer;" id="search_question_image">
            <img src="static/images/add.png" alt="NOT FOUND" style="position: absolute;width: 30px;height: 30px;right: 30px;top: 10px;cursor:pointer;" id="add_question_image">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;" id="question_list"></div>

        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 text-center" style="height: 100px;margin-top: 50px;margin-bottom: 50px;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);background-image: url('static/images/error_background_1.jpg');background-repeat: no-repeat;background-size: cover;display: none;" id="error_question">
            <p style="line-height: 100px;font-family: 'A Iranian Sans';font-weight: bold;font-size: 15px;color: white;">سوالی وجود ندارد</p>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding-top: 15px;padding-bottom: 15px;display: none;" id="question_page_frame">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                <p style="line-height: 50px;font-family: 'A Iranian Sans';color: black;">رفتن به صفحه</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding-top: 15px;padding-bottom: 15px;" id="question_page_content"></div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;margin-bottom: 100px;display: none;" id="lottery_div">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;background-color: #696bd4;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);position: relative;">
            <img src="static/images/lottery.png" alt="NOT FOUND" style="height: 25px;width: 25px;display: inline-block;margin-right: 10px;margin-top: -3px;">
            <p style="line-height: 50px;font-family: 'A Iranian Sans';color: black;font-weight: bold;display: inline-block;">قرعه کشی</p>
            <img src="static/images/lottery1.png" alt="NOT FOUND" style="position: absolute;width: 30px;height: 30px;right: 30px;top: 10px;cursor:pointer;" id="lottery_image">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;" id="lottery_list"></div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding-top: 15px;padding-bottom: 15px;display: none;" id="lottery_page_frame">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                <p style="line-height: 50px;font-family: 'A Iranian Sans';color: black;">رفتن به صفحه</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding-top: 15px;padding-bottom: 15px;" id="lottery_page_content"></div>
        </div>
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 text-center" style="height: 100px;margin-top: 50px;margin-bottom: 50px;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);background-image: url('static/images/error_background_1.jpg');background-repeat: no-repeat;background-size: cover;display: none;" id="error_lottery">
            <p style="line-height: 100px;font-family: 'A Iranian Sans';font-weight: bold;font-size: 15px;color: white;">قرعه کشی انجام نشده است</p>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;margin-bottom: 100px;display: none;" id="user_div">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;background-color: #696bd4;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.7);position: relative;">
            <img src="static/images/user1.png" alt="NOT FOUND" style="height: 20px;width: 20px;display: inline-block;margin-right: 10px;margin-top: -3px;">
            <p style="line-height: 50px;font-family: 'A Iranian Sans';color: black;font-weight: bold;display: inline-block;">کاربران</p>
            <img src="static/images/search.png" alt="NOT FOUND" style="position: absolute;width: 30px;height: 30px;right: 30px;top: 10px;cursor:pointer;" id="search_user_image">
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;" id="user_list"></div>


        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 text-center" style="height: 100px;margin-top: 50px;margin-bottom: 50px;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);background-image: url('static/images/error_background_1.jpg');background-repeat: no-repeat;background-size: cover;display: none;" id="error_user">
            <p style="line-height: 100px;font-family: 'A Iranian Sans';font-weight: bold;font-size: 15px;color: white;">کاربری وجود ندارد</p>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding-top: 15px;padding-bottom: 15px;display: none;" id="user_page_frame">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                <p style="line-height: 50px;font-family: 'A Iranian Sans';color: black;">رفتن به صفحه</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding-top: 15px;padding-bottom: 15px;" id="user_page_content"></div>
        </div>

    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;margin-bottom: 100px;" id="analyse_div">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;background-color: #696bd4;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.7);">
            <img src="static/images/analyse.png" alt="NOT FOUND" style="height: 25px;width: 25px;display: inline-block;margin-right: 10px;margin-top: -3px;">
            <p style="line-height: 50px;font-family: 'A Iranian Sans';color: black;font-weight: bold;display: inline-block;">آمار سایت</p>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;margin-top: 25px;margin-bottom: 25px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: white;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.7);padding: 20px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;display: inline-block;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">آمار بازدید یک هفته اخیر</p>
                    </div>
                    <div id="chartContainer1" style="height: 400px; width: 100%;display: inline-block;"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center" style="height: auto;margin-top: 25px;margin-bottom: 25px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: white;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.7);padding: 47px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 48px;">
                            <p style="line-height: 48px;font-family: 'A Iranian Sans';font-weight: bold;color: black;font-size: 18px;">تعداد دسته بندی ها</p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 2px;background: linear-gradient(to left,transparent,black,transparent);"></div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                            <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;font-size: 18px;direction: rtl;" id="total_categorys"></p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 48px;">
                            <p style="line-height: 48px;font-family: 'A Iranian Sans';font-weight: bold;color: black;font-size: 18px;">تعداد کل سوالات</p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 2px;background: linear-gradient(to left,transparent,black,transparent);"></div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                            <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;font-size: 18px;direction: rtl;" id="total_questions"></p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 48px;">
                            <p style="line-height: 48px;font-family: 'A Iranian Sans';font-weight: bold;color: black;font-size: 18px;">تعداد کل کاربران</p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 2px;background: linear-gradient(to left,transparent,black,transparent);"></div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                            <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;font-size: 18px;" id="total_users"></p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 48px;">
                            <p style="line-height: 48px;font-family: 'A Iranian Sans';font-weight: bold;color: black;font-size: 18px;">مجموع درآمد سایت</p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 2px;background: linear-gradient(to left,transparent,black,transparent);"></div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                            <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;font-size: 18px;direction: rtl;" id="total_pay"> <span>تومان</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center" style="height: auto;margin-top: 25px;margin-bottom: 25px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: white;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.7);padding: 20px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;display: inline-block;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;direction: rtl;">10 کاربر برتر</p>
                    </div>
                    <div id="chartContainer3" style="height: 400px; width: 100%;display: inline-block;"></div>
                </div>
            </div>
        </div>

    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="position: fixed;bottom: 0;background-color: black;height: 100px;z-index: 3;">
       <center>
           <div style="height: 60px;background-color: white;border-radius: 10px;width: 950px;margin-top: 20px;padding: 0;position: relative;">
               <p class="menu_item" style="left: 10px;" id="analyse_icon">آمار سایت</p>
               <p class="menu_item" style="left: 165px" id="user_icon">کاربران</p>
               <p class="menu_item" style="left: 320px;" id="lottery_icon">قرعه کشی</p>
               <p class="menu_item" style="left: 475px" id="question_icon">سوالات</p>
               <p class="menu_item" style="left: 630px" id="category_icon">دسته بندی</p>
               <p class="menu_item" style="left: 785px;" id="setting_icon">تنظیمات</p>
               <div id="delimiter"></div>
           </div>
       </center>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="position: fixed;top: 0;bottom: 0;right: 0;left: 0;background-color: rgba(0,0,0,.99);z-index: 5;overflow-y: scroll;display: none;" id="search_user_div">
        <img class="close_icon" src="static/images/close1.png" alt="NOT FOUND" id="close_search_user">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 text-center" style="height: auto;padding: 0;background: linear-gradient(to left,#47d0a6,#1ed0bd);padding-top: 25px;padding-bottom: 10px;margin-top: 100px;margin-bottom: 100px;" id="search_user_content">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">جستجوی کاربران</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 2px;background:linear-gradient(to left,transparent,black,transparent);"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;margin-top: 25px;">
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">جستجو بر اساس</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                    <select id="search_user_item" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-weight: bold;font-family: 'A Iranian Sans';color: black;border: none;outline: none;height: 40px;margin-top: 5px;background-image: none;-webkit-appearance: none;border: none; text-align: center;text-align-last: center;horiz-align: center;-ms-text-combine-horizontal: none;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);">
                        <option value="name">نام</option>
                        <option value="phone">شماره تلفن</option>
                        <option value="email">ایمیل</option>
                        <option value="ip">ip</option>
                        <option value="level">سطح</option>
                    </select>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">جستجو بر اساس</p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">مقدار جستجو</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                    <input id="search_user_text" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-weight: bold;font-family: 'A Iranian Sans';color: black;border: none;outline: none;height: 40px;margin-top: 5px;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">مقدار جستجو</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;">
                <button id="search_user">جستجو <span><img src="static/images/search.png" alt="NOT FOUND" style="height: 15px;width: 15px;"></span></button>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="position: fixed;top: 0;bottom: 0;right: 0;left: 0;background-color: rgba(0,0,0,.99);z-index: 5;overflow-y: scroll;display: none;" id="search_question_div">
        <img class="close_icon" src="static/images/close1.png" alt="NOT FOUND" id="close_search_question">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 text-center" style="height: auto;padding: 0;background: linear-gradient(to left,#47d0a6,#1ed0bd);padding-top: 25px;padding-bottom: 10px;margin-top: 100px;margin-bottom: 100px;" id="search_question_content">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">جستجوی سوالات</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 2px;background:linear-gradient(to left,transparent,black,transparent);"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;margin-top: 25px;">
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">جستجو بر اساس</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                    <select id="search_question_item" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-weight: bold;font-family: 'A Iranian Sans';color: black;border: none;outline: none;height: 40px;margin-top: 5px;background-image: none;-webkit-appearance: none;border: none; text-align: center;text-align-last: center;horiz-align: center;-ms-text-combine-horizontal: none;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);">
                        <option value="content">سوال</option>
                        <option value="correct_choose">گزینه صحیح</option>
                        <option value="level">سطح</option>
                        <option value="category">دسته بندی</option>
                        <option value="status">وضعیت</option>
                    </select>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">جستجو بر اساس</p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">مقدار جستجو</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                    <input id="search_question_text" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-weight: bold;font-family: 'A Iranian Sans';color: black;border: none;outline: none;height: 40px;margin-top: 5px;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">مقدار جستجو</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;">
                <button id="search_question_button">جستجو <span><img src="static/images/search.png" alt="NOT FOUND" style="height: 15px;width: 15px;"></span></button>
            </div>
        </div>
    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="position: fixed;top: 0;bottom: 0;right: 0;left: 0;background-color: rgba(0,0,0,.99);z-index: 5;overflow-y: scroll;display: none;" id="lottery_div_dialog">
        <img class="close_icon" src="static/images/close1.png" alt="NOT FOUND" id="close_lottery">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 text-center" style="height: auto;padding: 0;background: linear-gradient(to left,#47d0a6,#1ed0bd);padding-top: 25px;padding-bottom: 10px;margin-top: 100px;margin-bottom: 100px;" id="lottery_content">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">قرعه کشی</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 2px;background:linear-gradient(to left,transparent,black,transparent);"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;margin-top: 25px;">
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">هفته</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                    <input id="lottery_week_input" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-weight: bold;font-family: 'A Iranian Sans';color: black;border: none;outline: none;height: 40px;margin-top: 5px;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">هفته</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;">
                <button id="lottery">قرعه کشی <span><img src="static/images/lottery.png" alt="NOT FOUND" style="height: 15px;width: 15px;"></span></button>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="position: fixed;top: 0;bottom: 0;right: 0;left: 0;background-color: rgba(0,0,0,.99);z-index: 5;overflow-y: scroll;display: none;" id="add_category_div">
        <img class="close_icon" src="static/images/close1.png" alt="NOT FOUND" id="close_add_category">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 text-center" style="height: auto;padding: 0;background: linear-gradient(to left,#47d0a6,#1ed0bd);padding-top: 25px;padding-bottom: 10px;margin-top: 100px;margin-bottom: 100px;" id="add_category_content">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">افزودن دسته بندی</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 2px;background:linear-gradient(to left,transparent,black,transparent);"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;margin-top: 25px;">
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">نام دسته بندی</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                    <input id="name_category_add" name="name_category_add" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-weight: bold;font-family: 'A Iranian Sans';color: black;border: none;outline: none;height: 40px;margin-top: 5px;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">نام دسته بندی</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;margin-top: 25px;">
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">تصویر</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                    <input id="file_category_add" name="file_category_add" type="file" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-weight: bold;font-family: 'A Iranian Sans';color: black;border: none;outline: none;height: 40px;margin-top: 5px;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);background-color: white;padding-top: 10px;">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">تصویر</p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;">
                <button id="add_category_button">افزودن <span><img src="static/images/edit.png" alt="NOT FOUND" style="height: 15px;width: 15px;"></span></button>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="position: fixed;top: 0;bottom: 0;right: 0;left: 0;background-color: rgba(0,0,0,.99);z-index: 5;overflow-y: scroll;display: none;" id="edit_category_div">
        <img class="close_icon" src="static/images/close1.png" alt="NOT FOUND" id="close_edit_category">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 text-center" style="height: auto;padding: 0;background: linear-gradient(to left,#47d0a6,#1ed0bd);padding-top: 25px;padding-bottom: 10px;margin-top: 100px;margin-bottom: 100px;" id="edit_category_content">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">ویرایش دسته بندی</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 2px;background:linear-gradient(to left,transparent,black,transparent);"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;margin-top: 25px;">
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">نام دسته بندی</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                    <input id="name_category_edit" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-weight: bold;font-family: 'A Iranian Sans';color: black;border: none;outline: none;height: 40px;margin-top: 5px;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">نام دسته بندی</p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;">
                <button id="edit_category_button">ویرایش <span><img src="static/images/edit.png" alt="NOT FOUND" style="height: 15px;width: 15px;"></span></button>
            </div>
        </div>
    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="position: fixed;top: 0;bottom: 0;right: 0;left: 0;background-color: rgba(0,0,0,.99);z-index: 5;overflow-y: scroll;display: none;" id="add_question_div">
        <img class="close_icon" src="static/images/close1.png" alt="NOT FOUND" id="close_add_question">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 text-center" style="height: auto;padding: 0;background: linear-gradient(to left,#47d0a6,#1ed0bd);padding-top: 25px;padding-bottom: 10px;margin-top: 100px;margin-bottom: 100px;" id="add_question_content">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">افزودن سوال</p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 2px;background:linear-gradient(to left,transparent,black,transparent);"></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;margin-top: 25px;">
                    <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">سوال</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                        <input name="content_question_add" id="content_question_add" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-weight: bold;font-family: 'A Iranian Sans';color: black;border: none;outline: none;height: 40px;margin-top: 5px;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">سوال</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                    <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه اول</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                        <input name="choose_1_question_add" id="choose_1_question_add" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-weight: bold;font-family: 'A Iranian Sans';color: black;border: none;outline: none;height: 40px;margin-top: 5px;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه اول</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                    <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه دوم</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                        <input name="choose_2_question_add" id="choose_2_question_add" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-weight: bold;font-family: 'A Iranian Sans';color: black;border: none;outline: none;height: 40px;margin-top: 5px;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه دوم</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                    <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه سوم</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                        <input name="choose_3_question_add" id="choose_3_question_add" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-weight: bold;font-family: 'A Iranian Sans';color: black;border: none;outline: none;height: 40px;margin-top: 5px;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه سوم</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                    <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه چهارم</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                        <input name="choose_4_question_add" id="choose_4_question_add" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-weight: bold;font-family: 'A Iranian Sans';color: black;border: none;outline: none;height: 40px;margin-top: 5px;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه چهارم</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                    <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه صحیح</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                        <select name="correct_choose_question_add" id="correct_choose_question_add" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-weight: bold;font-family: 'A Iranian Sans';color: black;border: none;outline: none;height: 40px;margin-top: 5px;background-image: none;-webkit-appearance: none;border: none; text-align: center;text-align-last: center;horiz-align: center;-ms-text-combine-horizontal: none;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه صحیح</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                    <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">تصویر</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                        <input name="file_question_add" id="file_question_add" type="file" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-weight: bold;font-family: 'A Iranian Sans';color: black;border: none;outline: none;height: 40px;margin-top: 5px;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);padding-top: 10px;background-color: white;">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">تصویر</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                    <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">دسته بندی</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                        <select name="category_question_add" id="category_question_add" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-weight: bold;font-family: 'A Iranian Sans';color: black;border: none;outline: none;height: 40px;margin-top: 5px;background-image: none;-webkit-appearance: none;border: none; text-align: center;text-align-last: center;horiz-align: center;-ms-text-combine-horizontal: none;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);"></select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">دسته بندی</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                    <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">سطح</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                        <select name="level_question_add" id="level_question_add" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-weight: bold;font-family: 'A Iranian Sans';color: black;border: none;outline: none;height: 40px;margin-top: 5px;background-image: none;-webkit-appearance: none;border: none; text-align: center;text-align-last: center;horiz-align: center;-ms-text-combine-horizontal: none;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);">
                            <option value="1">آسان</option>
                            <option value="2">متوسط</option>
                            <option value="3">سخت</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">سطح</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                    <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">وضعیت نمایش</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                        <select name="status_question_add" id="status_question_add" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-weight: bold;font-family: 'A Iranian Sans';color: black;border: none;outline: none;height: 40px;margin-top: 5px;background-image: none;-webkit-appearance: none;border: none; text-align: center;text-align-last: center;horiz-align: center;-ms-text-combine-horizontal: none;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);">
                            <option value="1">نمایش دادن</option>
                            <option value="0">مخفی کردن</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">وضعیت نمایش</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;">
                    <button id="add_question_button">افزودن <span><img src="static/images/plus.png" alt="NOT FOUND" style="height: 15px;width: 15px;"></span></button>
                </div>
            </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="position: fixed;top: 0;bottom: 0;right: 0;left: 0;background-color: rgba(0,0,0,.99);z-index: 5;overflow-y: scroll;display: none;" id="edit_question_div">
        <img class="close_icon" src="static/images/close1.png" alt="NOT FOUND" id="close_edit_question">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 text-center" style="height: auto;padding: 0;background: linear-gradient(to left,#47d0a6,#1ed0bd);padding-top: 25px;padding-bottom: 10px;margin-top: 100px;margin-bottom: 100px;" id="edit_question_content">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">ویرایش سوال</p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 2px;background:linear-gradient(to left,transparent,black,transparent);"></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;margin-top: 25px;">
                    <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">سوال</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                        <input name="content_question_edit" id="content_question_edit" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-weight: bold;font-family: 'A Iranian Sans';color: black;border: none;outline: none;height: 40px;margin-top: 5px;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">سوال</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                    <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه اول</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                        <input name="choose_1_question_edit" id="choose_1_question_edit" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-weight: bold;font-family: 'A Iranian Sans';color: black;border: none;outline: none;height: 40px;margin-top: 5px;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه اول</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                    <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه دوم</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                        <input name="choose_2_question_edit" id="choose_2_question_edit" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-weight: bold;font-family: 'A Iranian Sans';color: black;border: none;outline: none;height: 40px;margin-top: 5px;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه دوم</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                    <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه سوم</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                        <input name="choose_3_question_edit" id="choose_3_question_edit" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-weight: bold;font-family: 'A Iranian Sans';color: black;border: none;outline: none;height: 40px;margin-top: 5px;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه سوم</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                    <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه چهارم</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                        <input name="choose_4_question_edit" id="choose_4_question_edit" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-weight: bold;font-family: 'A Iranian Sans';color: black;border: none;outline: none;height: 40px;margin-top: 5px;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه چهارم</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                    <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه صحیح</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                        <select name="correct_choose_question_edit" id="correct_choose_question_edit" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-weight: bold;font-family: 'A Iranian Sans';color: black;border: none;outline: none;height: 40px;margin-top: 5px;background-image: none;-webkit-appearance: none;border: none; text-align: center;text-align-last: center;horiz-align: center;-ms-text-combine-horizontal: none;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه صحیح</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                    <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">تصویر</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                        <input name="file_question_edit" id="file_question_edit" type="file" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-weight: bold;font-family: 'A Iranian Sans';color: black;border: none;outline: none;height: 40px;margin-top: 5px;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);padding-top: 10px;background-color: white;">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">تصویر</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                    <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">دسته بندی</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                        <select name="category_question_edit" id="category_question_edit" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-weight: bold;font-family: 'A Iranian Sans';color: black;border: none;outline: none;height: 40px;margin-top: 5px;background-image: none;-webkit-appearance: none;border: none; text-align: center;text-align-last: center;horiz-align: center;-ms-text-combine-horizontal: none;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);">
                            <option value="گردشگری و جغرافیا">گردشگری و جغرافیا</option>
                            <option value="اطلاعات عمومی">اطلاعات عمومی</option>
                            <option value="ورزشی">ورزشی</option>
                            <option value="راهنمایی و رانندگی">راهنمایی و رانندگی</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">دسته بندی</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                    <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">سطح</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                        <select name="level_category_edit" id="level_category_edit" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-weight: bold;font-family: 'A Iranian Sans';color: black;border: none;outline: none;height: 40px;margin-top: 5px;background-image: none;-webkit-appearance: none;border: none; text-align: center;text-align-last: center;horiz-align: center;-ms-text-combine-horizontal: none;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);">
                            <option value="1">آسان</option>
                            <option value="2">متوسط</option>
                            <option value="3">سخت</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">سطح</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                    <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">وضعیت نمایش</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                        <select name="status_question_edit" id="status_question_edit" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-weight: bold;font-family: 'A Iranian Sans';color: black;border: none;outline: none;height: 40px;margin-top: 5px;background-image: none;-webkit-appearance: none;border: none; text-align: center;text-align-last: center;horiz-align: center;-ms-text-combine-horizontal: none;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);">
                            <option value="0">مخفی کردن</option>
                            <option value="1">نمایش دادن</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">وضعیت نمایش</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;">
                    <button id="edit_question_button">ویرایش <span><img src="static/images/edit.png" alt="NOT FOUND" style="height: 15px;width: 15px;"></span></button>
                </div>
            </div>
    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="position: fixed;top: 0;bottom: 0;right: 0;left: 0;background-color: rgba(0,0,0,.99);z-index: 5;overflow-y: scroll;display: none;" id="detail_question_div">
        <img class="close_icon" src="static/images/close1.png" alt="NOT FOUND" id="close_detail_question">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 text-center" style="height: auto;padding: 0;background: linear-gradient(to left,#47d0a6,#1ed0bd);padding-top: 25px;padding-bottom: 10px;margin-top: 100px;margin-bottom: 100px;" id="detail_question_content">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">جزئیات سوال</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 2px;background:linear-gradient(to left,transparent,black,transparent);"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;margin-top: 25px;margin-bottom: 25px;">
                <img id="img_detail_question" src="static/images/not-fount.png" alt="NOT FOUND" style="height: 150px;width: 170px;">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">سوال</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: auto;">
                    <p id="content_detail_question" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_detail" style="direction: rtl;"></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">سوال</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه اول</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                    <p id="choose_1_detail_question" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_detail"></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه اول</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه دوم</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: auto;">
                    <p id="choose_2_detail_question" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_detail"></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه دوم</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه سوم</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: auto;">
                    <p id="choose_3_detail_question" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_detail"></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه سوم</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه چهارم</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: auto;">
                    <p id="choose_4_detail_question" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_detail"></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه چهارم</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه صحیح</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                    <p id="correct_choose_detail_question" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_detail"></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">گزینه صحیح</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">دسته بندی</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                    <p id="category_detail_question" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_detail"></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">دسته بندی</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">سطح</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                    <p id="level_detail_question" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_detail"></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">سطح</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">وضعیت نمایش</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                    <p id="status_detail_question" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_detail"></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">وضعیت نمایش</p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;margin-top: 25px;margin-bottom: 25px;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center">
                    <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">تعداد پاسخ درست</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: auto;">
                        <p id="correct_answer_detail_question" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_detail" style="direction: rtl;background-color: green;"></p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">تعداد پاسخ درست</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center">
                    <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">تعداد پاسخ غلط</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: auto;">
                        <p id="mistake_answer_detail_question" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_detail" style="direction: rtl;background-color: red;"></p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">تعداد پاسخ غلط</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="position: fixed;top: 0;bottom: 0;right: 0;left: 0;background-color: rgba(0,0,0,.99);z-index: 5;overflow-y: scroll;display: none;" id="detail_user_div">
        <img class="close_icon" src="static/images/close1.png" alt="NOT FOUND" id="close_detail_user">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 text-center" style="height: auto;padding: 0;background: linear-gradient(to left,#47d0a6,#1ed0bd);padding-top: 25px;padding-bottom: 10px;margin-top: 100px;margin-bottom: 100px;" id="detail_user_content">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">جزئیات کاربر</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 2px;background:linear-gradient(to left,transparent,black,transparent);"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">تعداد پاسخ های صحیح</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: auto;">
                    <p id="correct_answer_detail_user" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_detail" style="background-color: green;"></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">تعداد پاسخ های صحیح</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">تعداد پاسخ های غلط</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                    <p id="mistake_answer_detail_user" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_detail" style="background-color: red;"></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">تعداد پاسخ های غلط</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">ایمیل</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: auto;">
                    <p id="email_detail_user" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_detail"></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">ایمیل</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">شماره تلفن</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: auto;">
                    <p id="phone_detail_user" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_detail"></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">شماره تلفن</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">ip</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: auto;">
                    <p id="ip_detail_user" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_detail"></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">ip</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">زمان عضویت</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                    <p id="time_register_detail_user" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_detail" style="direction: ltr;"></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">زمان عضویت</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="position: fixed;top: 0;bottom: 0;right: 0;left: 0;background-color: rgba(0,0,0,.99);z-index: 5;overflow-y: scroll;display: none;" id="detail_lottery_div">
        <img class="close_icon" src="static/images/close1.png" alt="NOT FOUND" id="close_detail_lottery">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 text-center" style="height: auto;padding: 0;background: linear-gradient(to left,#47d0a6,#1ed0bd);padding-top: 25px;padding-bottom: 10px;margin-top: 100px;margin-bottom: 100px;" id="detail_lottery_content">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">جزئیات قرعه کشی</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 2px;background:linear-gradient(to left,transparent,black,transparent);"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;margin-top: 25px;">
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">هفته</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: auto;">
                    <p id="week_detail_lottery" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_detail"></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">هفته</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">زمان قرعه کشی</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 50px;">
                    <p id="time_detail_lottery" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_detail"></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">زمان قرعه کشی</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                    <p style="line-height: 50px;font-family: 'A Iranian Sans';font-weight: bold;color: black;">برندگان</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;">
                <p id="winner_1_detail_lottery" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_detail"></p>
                <p id="winner_2_detail_lottery" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_detail"></p>
                <p id="winner_3_detail_lottery" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_detail"></p>
            </div>
        </div>
    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="confirm_div">
        <p id="no">خیر</p>
        <p id="yes">بله</p>
        <p id="confirm_text"></p>
        <img src="static/images/general.png" alt="NOT FOUND" style="height: 40px;width: 40px;display: inline-block;margin-top: -5px;margin-left: 10px;">
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 0;position: fixed;z-index: 60000;bottom: -1px;transition: all .3s ease-in-out;background: linear-gradient(to left,#18782e,#24b344)" id="success_collapse">
        <img src="static/images/success.gif" alt="NOT FOUND" style="height: 50px;width: 50px;display: inline-block;margin-right: 10px;margin-top: -5px;">
        <p id="success_text" style="line-height: 100px;font-weight: bold;color: white;font-size: 15px;font-family: 'A Iranian Sans';display: inline-block;"></p>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 0;position: fixed;z-index: 60000;bottom: -8px;transition: all .3s ease-in-out;background: linear-gradient(to left,#841912,#bb241a)" id="error_collapse">
        <img src="static/images/cancel.png" alt="NOT FOUND" style="height: 50px;width: 50px;display: inline-block;margin-right: 10px;margin-top: -5px;">
        <p id="error_text" style="line-height: 100px;font-weight: bold;color: white;font-size: 15px;font-family: 'A Iranian Sans';display: inline-block;"></p>
    </div>

    <script>
        window.onload = function () {
            function numberWithCommas(x) {
                return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
            $.ajax({
                type:'POST',
                url:'ajax_admin/text_analytics/',
                data:{'is_admin':'admin'},
                success:function (response) {
                    if (response != false){
                        var s = response.split("*");

                        $("#total_categorys").text(s[0]);
                        $("#total_questions").text(s[1]);
                        $("#total_users").text(s[2]);
                        if (s[3] == 0){
                            $("#total_pay").text("هیچ درآمدی وجود ندارد");

                        }else{
                            $("#total_pay").text(s[3] + " تومان ");
                        }


                        $("#total_users").text(
                            numberWithCommas($("#total_users").text())
                        )
                        $("#total_categorys").text(
                            numberWithCommas($("#total_categorys").text())
                        )
                        $("#total_questions").text(
                            numberWithCommas($("#total_questions").text())
                        )
                        $("#total_pay").text(
                            numberWithCommas($("#total_pay").text())
                        )
                        $('.user_price').each(function(i, obj) {
                            $(this).text(
                                numberWithCommas($(this).text())
                            )
                        });

                    }
                },
                error:function () {

                }
            })

            var user_label = [];
            var user_level = [];
            $.ajax({
                type:'POST',
                url:'ajax_admin/get_top_soccer/',
                data:{'is_admin':'admin'},
                success:function (response) {
                    if (response != false){
                        var s = response.split("*");
                        for (var i = 0; i < s.length; i++) {
                            var p = s[i].split("/");
                            user_label[i] = p[0];
                            user_level[i] = p[1];
                        }


                        var chart3 = new CanvasJS.Chart("chartContainer3", {
                            animationEnabled: true,

                            title:{
                                text:""
                            },
                            axisX:{
                                interval: 1
                            },
                            axisY2:{
                                interlacedColor: "white",
                                gridColor: "white",
                                title: ""
                            },
                            data: [{
                                type: "bar",
                                name: "companies",
                                axisYType: "secondary",
                                color: "#696bd4",
                                dataPoints: [
                                    { y: parseInt(user_level[9]), label: user_label[9] },
                                    { y: parseInt(user_level[8]), label: user_label[8] },
                                    { y: parseInt(user_level[7]), label: user_label[7] },
                                    { y: parseInt(user_level[6]), label: user_label[6] },
                                    { y: parseInt(user_level[5]), label: user_label[5] },
                                    { y: parseInt(user_level[4]), label: user_label[4] },
                                    { y: parseInt(user_level[3]), label: user_label[3] },
                                    { y: parseInt(user_level[2]), label: user_label[2] },
                                    { y: parseInt(user_level[1]), label: user_label[1] },
                                    { y: parseInt(user_level[0]), label: user_label[0] }
                                ]
                            }]
                        });
                        chart3.render();
                    }
                },
                error:function () {

                }
            })


            $.ajax({
                type:'POST',
                url:'ajax_admin/get_days_in_week/',
                data:{'is_admin':'admin'},
                success:function (response) {
                    if (response != false){
                        day = response.split("*");

                        $.ajax({
                            type:'POST',
                            url:'ajax_admin/get_analytics/',
                            data:{'is_admin':'admin'},
                            success:function (response) {
                                if (response != false){
                                    views = response.split("&");
                                    var chart1 = new CanvasJS.Chart("chartContainer1", {
                                        animationEnabled: true,
                                        theme: "light2",
                                        title:{
                                            text: ""
                                        },
                                        axisY: {
                                            title: ""
                                        },
                                        data: [{
                                            type: "column",
                                            showInLegend: true,
                                            legendMarkerColor: "grey",
                                            legendText: "",
                                            dataPoints: [
                                                { y: parseInt(views[6]), label: day[6] },
                                                { y: parseInt(views[5]),  label: day[5] },
                                                { y: parseInt(views[4]),  label: day[4] },
                                                { y: parseInt(views[3]),  label: day[3] },
                                                { y: parseInt(views[2]),  label: day[2] },
                                                { y: parseInt(views[1]), label: day[1] },
                                                { y: parseInt(views[0]),  label: day[0] }
                                            ]
                                        }]
                                    });
                                    chart1.render();
                                }
                            },
                            error:function () {

                            }
                        })

                    }
                },
                error:function () {

                }
            })


        }
    </script>
    <script src="static/js/canvasjs.min.js"></script>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="position: fixed;top: 0;right: 0;top: 0;bottom: 100px;z-index: 50000;background-color: rgba(255,255,255,.9);display: none;" id="load_div">
        <img src="static/images/load1.gif" alt="NOT FOUND" style="position:absolute; margin: 0;position: absolute;top: 35%;-ms-transform: translateY(-40%);transform: translateY(-40%);left: 50%;-ms-transform: translateX(-50%);transform: translateX(-50%);width: 150px;height: 150px;">
    </div>
</body>
</html>