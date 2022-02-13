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
    <script src="static/js/circular-countdown.min.js"></script>
    <link rel="stylesheet" href="static/css/animate.min.css">
    <link rel="stylesheet" href="static/css/quiz.css">
    <script src="static/js/quiz.js"></script>
</head>
<body>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center timer_div">
        <div class="timer"></div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center main">
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 hidden-xs text-center" id="quiz_content">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center" style="height: auto;padding: 0;background-color: #696bd4;">
                <div class="col-lg-4 col-md-6 col-sm-6 text-center" style="height: 80px;padding: 0;">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 80px;">
                        <p class="level_user"></p>
                        <img src="static/images/level.png" alt="NOT FOUND" class="level_img">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 80px;">
                        <p class="coin_user"></p>
                        <img src="static/images/coin.png" class="user_coin_img" alt="NOT FOUND">
                        <img src="static/images/plus.png" alt="NOT FOUND" class="add_coin">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 80px;">
                        <p class="heart_user"></p>
                        <img src="static/images/heart.png" class="user_heart_img" alt="NOT FOUND">
                        <img src="static/images/plus.png" alt="NOT FOUND" class="add_heart" style="right: 17px">
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-6 text-right" style="height: 80px;">
                    <p class="user_name"><?php
                        if (isset($_SESSION['user_name']) && $_SESSION['user_name'] != ""){
                            echo $_SESSION['user_name'];
                        }else{
                            echo "";
                        } ?></p>
                    <img src="static/images/user.png" alt="NOT FOUND" class="user_img">
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-4 text-center" style="height: auto;padding: 0;padding-top: 60px;">
                <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs text-center" style="height: auto;margin-top: 50px;" id="img_div">
                    <img src="static/images/not-found.png" alt="NOT FOUND" class="hidden-sm img_question" style="height: 300px;width: 300px;margin-top: -50px;">
                    <img src="static/images/not-found.png" alt="NOT FOUND" class="hidden-lg hidden-md img_question" style="height: 200px;width: 200px;margin-top: -25px;">
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-8 text-center" style="height: auto;padding: 0;padding-top: 20px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="min-height: 70px;height: auto;padding-top: 20px;">
                    <p id="content" class="content"></p>
                </div>
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" id="img_div">
                    <img src="static/images/img1.png" alt="NOT FOUND" class="img_question">
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose_content choose_level_1">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose_sub">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center choose_sub_2">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose">
                                <p class="choose-2-1"></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center choose_sub_2">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose">
                                <p class="choose-1-1"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose_sub">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center choose_sub_2">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose">
                                <p class="choose-4-1"></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center choose_sub_2">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose">
                                <p class="choose-3-1"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose_content choose_level_2">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose_sub">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center choose_sub_2">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose">
                                <p class="choose-2-2"></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center choose_sub_2">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose">
                                <p class="choose-1-2"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose_sub">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center choose_sub_2">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose">
                                <p class="choose-4-2"></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center choose_sub_2">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose">
                                <p class="choose-3-2"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose_content choose_level_3">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose_sub">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center choose_sub_2">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose">
                                <p class="choose-2-3"></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center choose_sub_2">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose">
                                <p class="choose-1-3"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose_sub">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center choose_sub_2">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose">
                                <p class="choose-4-3"></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center choose_sub_2">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose">
                                <p class="choose-3-3"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose_content choose_level_4">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose_sub">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center choose_sub_2">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose">
                                <p class="choose-2-4"></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center choose_sub_2">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose">
                                <p class="choose-1-4"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose_sub">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center choose_sub_2">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose">
                                <p class="choose-4-4"></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center choose_sub_2">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose">
                                <p class="choose-3-4"></p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center help_1">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center help_content">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center help help_nextlevel_1">
                            <p class="help_text">رفتن به مرحله بعدی</p>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center count_help">
                                <p class="next_level_setting"></p>
                                <img src="static/images/heart.png" alt="NOT FOUND">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center help_content">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center help help_deletetwo_1">
                            <p class="help_text">حذف دو گزینه غلط</p>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center count_help">
                                <p class="delete_two_setting"></p>
                                <img src="static/images/coin.png" alt="NOT FOUND">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center help_content">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center help help_deleteone_1">
                            <p class="help_text">حذف یک گزینه غلط</p>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center count_help">
                                <p class="delete_one_setting"></p>
                                <img src="static/images/coin.png" alt="NOT FOUND">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center help_2">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center help_content">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center help help_nextlevel_2">
                            <p class="help_text">رفتن به مرحله بعدی</p>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center count_help">
                                <p class="next_level_setting"></p>
                                <img src="static/images/heart.png" alt="NOT FOUND">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center help_content">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center help help_deletetwo_2">
                            <p class="help_text">حذف دو گزینه غلط</p>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center count_help">
                                <p class="delete_two_setting"></p>
                                <img src="static/images/coin.png" alt="NOT FOUND">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center help_content">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center help help_deleteone_2">
                            <p class="help_text">حذف یک گزینه غلط</p>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center count_help">
                                <p class="delete_one_setting"></p>
                                <img src="static/images/coin.png" alt="NOT FOUND">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center help_3">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center help_content">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center help help_nextlevel_3">
                            <p class="help_text">رفتن به مرحله بعدی</p>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center count_help">
                                <p class="next_level_setting"></p>
                                <img src="static/images/heart.png" alt="NOT FOUND">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center help_content">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center help help_deletetwo_3">
                            <p class="help_text">حذف دو گزینه غلط</p>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center count_help">
                                <p class="delete_two_setting"></p>
                                <img src="static/images/coin.png" alt="NOT FOUND">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center help_content">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center help help_deleteone_3">
                            <p class="help_text">حذف یک گزینه غلط</p>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center count_help">
                                <p class="delete_one_setting"></p>
                                <img src="static/images/coin.png" alt="NOT FOUND">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center help_4">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center help_content">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center help help_nextlevel_4">
                            <p class="help_text">رفتن به مرحله بعدی</p>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center count_help">
                                <p class="next_level_setting"></p>
                                <img src="static/images/heart.png" alt="NOT FOUND">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center help_content">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center help help_deletetwo_4">
                            <p class="help_text">حذف دو گزینه غلط</p>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center count_help">
                                <p class="delete_two_setting"></p>
                                <img src="static/images/coin.png" alt="NOT FOUND">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center help_content">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center help help_deleteone_4">
                            <p class="help_text">حذف یک گزینه غلط</p>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center count_help">
                                <p class="delete_one_setting"></p>
                                <img src="static/images/coin.png" alt="NOT FOUND" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 text-center" style="height: 100px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center level_div">
                    <center>
                        <div class="level_1"></div>
                        <div class="level_2"></div>
                        <div class="level_3"></div>
                        <div class="level_4"></div>
                    </center>
                </div>
            </div>
        </div>
        <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" style="position: fixed;top: 0;bottom: 0;left: 0;right: 0;z-index: 400;padding: 0;overflow-y: scroll;">
            <div class="col-xs-12 text-center" style="height: auto;padding: 0;background-color: #696bd4;">
                <div class="col-xs-4 text-center" style="height: 50px;">
                    <p style="line-height: 50px;" class="level_user"></p>
                    <img src="static/images/level.png" alt="NOT FOUND" class="level_img">
                </div>
                <div class="col-xs-4 text-center" style="height: 50px;">
                    <p style="line-height: 50px;" class="coin_user"></p>
                    <img src="static/images/coin.png" class="user_coin_img" alt="NOT FOUND">
                    <img src="static/images/plus.png" alt="NOT FOUND" class="add_coin" style="right: -5px;top: 10px;">
                </div>
                <div class="col-xs-4 text-center" style="height: 50px;">
                    <p style="line-height: 50px;" class="heart_user"></p>
                    <img src="static/images/heart.png" class="user_heart_img" alt="NOT FOUND">
                    <img src="static/images/plus.png" alt="NOT FOUND" class="add_heart" style="right: 5px;top: 10px;">
                </div>
            </div>
            <div class="col-xs-12 text-center" style="height: auto;padding: 0;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding-top: 25px;padding-bottom: 25px;">
                    <p class="content" style="box-shadow: none;font-size: 12px;background-color: transparent;color: black;font-family: 'A Iranian Sans';font-weight: bold;"></p>
                </div>
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center" id="img_div" style="margin-top: -10px;height: auto;">
                    <img src="static/images/img1.png" alt="NOT FOUND" class="img_question" style="height: 120px;width: 120px;">
                </div>

                <div class="col-xs-12 text-center choose_content choose_level_1" style="display: block;">
                    <div class="col-xs-12 text-center choose_sub" style="padding: 0;">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center choose_sub_2" style="height: 30px;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose" style="height: 30px;">
                                <p class="choose-2-1" style="font-size: 12px;line-height: 30px;"></p>
                            </div>
                        </div>
                        <div class="col-xs-12 text-center choose_sub_2" style="height: 30px;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose" style="height: 30px;">
                                <p class="choose-1-1" style="font-size: 12px;line-height: 30px;"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 text-center choose_sub">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center choose_sub_2" style="height: 30px;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose" style="height: 30px;">
                                <p class="choose-4-1" style="font-size: 12px;line-height: 30px;"></p>
                            </div>
                        </div>
                        <div class="col-xs-12 text-center choose_sub_2" style="height: 30px;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose" style="height: 30px;">
                                <p class="choose-3-1" style="font-size: 12px;line-height: 30px;"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 text-center choose_content choose_level_2">
                    <div class="col-xs-12 text-center choose_sub" style="padding: 0;">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center choose_sub_2" style="height: 30px;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose" style="height: 30px;">
                                <p class="choose-2-2" style="font-size: 12px;line-height: 30px;"></p>
                            </div>
                        </div>
                        <div class="col-xs-12 text-center choose_sub_2" style="height: 30px;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose" style="height: 30px;">
                                <p class="choose-1-2" style="font-size: 12px;line-height: 30px;"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 text-center choose_sub">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center choose_sub_2" style="height: 30px;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose" style="height: 30px;">
                                <p class="choose-4-2" style="font-size: 12px;line-height: 30px;"></p>
                            </div>
                        </div>
                        <div class="col-xs-12 text-center choose_sub_2" style="height: 30px;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose" style="height: 30px;">
                                <p class="choose-3-2" style="font-size: 12px;line-height: 30px;"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 text-center choose_content choose_level_3">
                    <div class="col-xs-12 text-center choose_sub" style="padding: 0;">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center choose_sub_2" style="height: 30px;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose" style="height: 30px;">
                                <p class="choose-2-3" style="font-size: 12px;line-height: 30px;"></p>
                            </div>
                        </div>
                        <div class="col-xs-12 text-center choose_sub_2" style="height: 30px;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose" style="height: 30px;">
                                <p class="choose-1-3" style="font-size: 12px;line-height: 30px;"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 text-center choose_sub">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center choose_sub_2" style="height: 30px;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose" style="height: 30px;">
                                <p class="choose-4-3" style="font-size: 12px;line-height: 30px;"></p>
                            </div>
                        </div>
                        <div class="col-xs-12 text-center choose_sub_2" style="height: 30px;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose" style="height: 30px;">
                                <p class="choose-3-3" style="font-size: 12px;line-height: 30px;"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 text-center choose_content choose_level_4">
                    <div class="col-xs-12 text-center choose_sub" style="padding: 0;">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center choose_sub_2" style="height: 30px;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose" style="height: 30px;">
                                <p class="choose-2-4" style="font-size: 12px;line-height: 30px;"></p>
                            </div>
                        </div>
                        <div class="col-xs-12 text-center choose_sub_2" style="height: 30px;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose" style="height: 30px;">
                                <p class="choose-1-4" style="font-size: 12px;line-height: 30px;"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 text-center choose_sub">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center choose_sub_2" style="height: 30px;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose" style="height: 30px;">
                                <p class="choose-4-4" style="font-size: 12px;line-height: 30px;"></p>
                            </div>
                        </div>
                        <div class="col-xs-12 text-center choose_sub_2" style="height: 30px;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center choose" style="height: 30px;">
                                <p class="choose-3-4" style="font-size: 12px;line-height: 30px;"></p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xs-12 text-center help_1" style="display: block;margin-top: -25px;">
                    <div class="col-xs-4 text-center help_content" style="height: auto;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center help help_nextlevel_1" style="height: auto;height: 80px;padding: 0;">
                            <p class="help_text" style="font-size: 10px;">مرحله بعدی</p>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center count_help" style="margin-top: -15px;">
                                <p class="next_level_setting"></p>
                                <img src="static/images/heart.png" alt="NOT FOUND">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 text-center help_content" style="height: auto;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center help help_deletetwo_1" style="height: auto;height: 80px;padding: 0;">
                            <p class="help_text" style="font-size: 10px;">حذف دو گزینه</p>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center count_help" style="margin-top: -15px;">
                                <p class="delete_two_setting"></p>
                                <img src="static/images/coin.png" alt="NOT FOUND">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 text-center help_content" style="height: auto;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center help help_deleteone_1" style="height: auto;height: 80px;padding: 0;">
                            <p class="help_text" style="font-size: 10px;">حذف یک گزینه</p>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center count_help" style="margin-top: -15px;">
                                <p class="delete_one_setting"></p>
                                <img src="static/images/coin.png" alt="NOT FOUND">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 text-center help_2" style="margin-top: -25px;">
                    <div class="col-xs-4 text-center help_content" style="height: auto;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center help help_nextlevel_2" style="height: auto;height: 80px;padding: 0;">
                            <p class="help_text" style="font-size: 10px;">مرحله بعدی</p>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center count_help" style="margin-top: -15px;">
                                <p class="next_level_setting"></p>
                                <img src="static/images/heart.png" alt="NOT FOUND">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 text-center help_content" style="height: auto;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center help help_deletetwo_2" style="height: auto;height: 80px;padding: 0;">
                            <p class="help_text" style="font-size: 10px;">حذف دو گزینه</p>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center count_help" style="margin-top: -15px;">
                                <p class="delete_two_setting"></p>
                                <img src="static/images/coin.png" alt="NOT FOUND">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 text-center help_content" style="height: auto;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center help help_deleteone_2" style="height: auto;height: 80px;padding: 0;">
                            <p class="help_text" style="font-size: 10px;">حذف یک گزینه</p>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center count_help" style="margin-top: -15px;">
                                <p class="delete_one_setting"></p>
                                <img src="static/images/coin.png" alt="NOT FOUND">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 text-center help_3" style="margin-top: -25px;">
                    <div class="col-xs-4 text-center help_content" style="height: auto;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center help help_nextlevel_3" style="height: auto;height: 80px;padding: 0;">
                            <p class="help_text" style="font-size: 10px;">مرحله بعدی</p>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center count_help" style="margin-top: -15px;">
                                <p class="next_level_setting"></p>
                                <img src="static/images/heart.png" alt="NOT FOUND">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 text-center help_content" style="height: auto;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center help help_deletetwo_3" style="height: auto;height: 80px;padding: 0;">
                            <p class="help_text" style="font-size: 10px;">حذف دو گزینه</p>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center count_help" style="margin-top: -15px;">
                                <p class="delete_two_setting"></p>
                                <img src="static/images/coin.png" alt="NOT FOUND">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 text-center help_content" style="height: auto;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center help help_deleteone_3" style="height: auto;height: 80px;padding: 0;">
                            <p class="help_text" style="font-size: 10px;">حذف یک گزینه</p>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center count_help" style="margin-top: -15px;">
                                <p class="delete_one_setting"></p>
                                <img src="static/images/coin.png" alt="NOT FOUND">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 text-center help_4" style="margin-top: -25px;">
                    <div class="col-xs-4 text-center help_content" style="height: auto;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center help help_nextlevel_4" style="height: auto;height: 80px;padding: 0;">
                            <p class="help_text" style="font-size: 10px;">مرحله بعدی</p>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center count_help" style="margin-top: -15px;">
                                <p class="next_level_setting"></p>
                                <img src="static/images/heart.png" alt="NOT FOUND">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 text-center help_content" style="height: auto;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center help help_deletetwo_4" style="height: auto;height: 80px;padding: 0;">
                            <p class="help_text" style="font-size: 10px;">حذف دو گزینه</p>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center count_help" style="margin-top: -15px;">
                                <p class="delete_two_setting"></p>
                                <img src="static/images/coin.png" alt="NOT FOUND">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 text-center help_content" style="height: auto;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center help help_deleteone_4" style="height: auto;height: 80px;padding: 0;">
                            <p class="help_text" style="font-size: 10px;">حذف یک گزینه</p>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center count_help" style="margin-top: -15px;">
                                <p class="delete_one_setting"></p>
                                <img src="static/images/coin.png" alt="NOT FOUND">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 text-center" style="height: auto;background-color: rgba(0,0,0,.9);position: absolute;bottom: 0;height: 90px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center level_div">
                    <center>
                        <div class="level_1" style="margin-top: 5px;"></div>
                        <div class="level_2" style="margin-top: 5px;"></div>
                        <div class="level_3" style="margin-top: 5px;"></div>
                        <div class="level_4" style="margin-top: 5px;"></div>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <div id="success_match">
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center" id="success_content">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="success_header">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 150px;position: absolute;top: -75px;">
                    <center>
                        <img src="static/images/success.gif" alt="NOT FOUND" style="height: 150px;width: 150px">
                    </center>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 200px;padding: 0;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;">
                    <p id="success_text"><span>تبریک !</span> شما به مرحله بعد راه یافتید</p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;">
                    <center>
                        <p id="update_level">مرحله بعد</p>
                    </center>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;padding: 0;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 100px;">
                    <p class="user_place_success">رتبه شما <span id="user_place_success"></span></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 100px;">
                    <p id="user_level_success"></p>
                    <img src="static/images/level.png" alt="NOT FOUND" id="level_img_success">
                </div>
            </div>
        </div>
    </div>
    <div id="fail_match">
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center" id="error_content">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="error_header"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 200px;padding: 0;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;">
                    <p id="error_text"><span>اوه !</span> شما شکست خوردید</p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;">
                    <center>
                        <p id="retry_play">دوباره بازی کن</p>
                    </center>
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


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="count_down">
        <center>
            <p>شروع مسابقه ...</p>
        </center>
        <div class="timer1"></div>
    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;background:linear-gradient(to left,#32ba18,#268c12,#144b0a);position: fixed;bottom: -101px;z-index: 40000;transition: all .3s ease-in-out;" id="success_pay">
        <p style="direction: rtl;font-family: 'A Iranian Sans';font-size: 15px;color: white;line-height: 100px;display: inline-block;">خرید با موفقیت انجام شد .</p>
        <img src="static/images/success.gif" alt="NOT FOUND" style="height: 40px;width: 40px;margin-top: -5px;display: inline-block;">
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;background:linear-gradient(to left,#c94f18,#a03f13,#a00f12);position: fixed;bottom: -101px;z-index: 40000;transition: all .3s ease-in-out;" id="error_pay">
        <p style="direction: rtl;font-family: 'A Iranian Sans';font-size: 15px;color: white;line-height: 100px;display: inline-block;">خطایی رخ داده است .</p>
        <img src="static/images/cancel.png" alt="NOT FOUND" style="height: 40px;width: 40px;margin-top: -5px;display: inline-block;">
    </div>
</body>
</html>