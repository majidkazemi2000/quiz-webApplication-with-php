<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ورود / عضویت</title>
    <link rel="shortcut icon" href="../static/images/logo.png" />
    <script src="../static/js/jquery.js"></script>
    <script src="../static/js/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="../static/css/jquery-ui.min.css">
    <script src="../static/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../static/css/bootstrap.min.css">
    <script src="../static/js/reg_api.js"></script>
    <link rel="stylesheet" href="../static/css/reg_api.css">
</head>
<body>
    <div class="main_div">
        <div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-10 col-sm-offset-1 col-xs-12 text-center" id="register_content">
            <div id="page_frame"></div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center" style="height: 500px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center succ" id="success_content_sign_up">
                    <p>ثبت نام با موفقیت انجام شد</p>
                    <img src="../static/images/success.gif" alt="NOT FOUND">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center succ" id="success_content_sign_in">
                    <p>ورود با موفقیت انجام شد</p>
                    <img src="../static/images/success.gif" alt="NOT FOUND">
                </div>


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center main_select">
                    <div class="col-lg-10 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 text-center main_select_2">
                        <center>
                            <div class="select_content">
                                <div id="delimiter"></div>
                                <div id="sign_in_lebel">
                                    <p>ورود</p>
                                </div>
                                <div id="sign_up_lebel">
                                    <p>ثبت نام</p>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center reg_div" style="display: block;" id="sign_in_div">
                    <div class="col-lg-12 col-md-12 col-xs-12 text-center reg_div_type_1">
                        <div class="div_input_type_1" style="top: 30px;">
                            <p style="padding-right: 30px;" id="label_email">ایمیل</p>
                        </div>
                        <input id="username" class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-1 col-xs-9 text-center input" type="text" style="margin-top: 30px;">
                    </div>
                    <div class="col-lg-12 col-md-12 col-xs-12 text-center reg_div_type_1">
                        <div class="div_input_type_1" style="top: 10px;">
                            <p style="padding-right: 20px;" id="label_password">رمز عبور</p>
                        </div>
                        <input id="password" class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-1 col-xs-9 text-center input" type="password">
                    </div>
                    <div class="col-lg-12 col-md-12 col-xs-12 text-center reg_div_type_2">
                        <input id="sign_in_btn" class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-8 col-xs-offset-2 text-center" type="submit" value="ورود" style="direction: rtl;">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center reg_div" id="email_div">
                    <div class="col-lg-12 col-md-12 col-xs-12 text-center reg_div_type_1">
                        <div class="div_input_type_1" style="top: 50px;">
                            <p style="padding-right: 30px;">ایمیل</p>
                        </div>
                        <input id="email" class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-1 col-xs-9 text-center input" type="text" style="margin-top: 50px;">
                    </div>
                    <div class="col-lg-12 col-md-12 col-xs-12 text-center reg_div_type_2">
                        <input id="send_code" class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-9 text-center" type="submit" value="ارسال کد تایید">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center reg_div" id="code_div">
                    <div class="col-lg-12 col-md-12 col-xs-12 text-center reg_div_type_3">
                        <div class="div_input_type_1" style="top: 30px;">
                            <p style="padding-right: 20px;">کد تایید</p>
                        </div>
                        <input id="confirm_code" class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-1 col-xs-9 text-center input" type="text" style="margin-top: 30px;">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center reg_div" id="sign_up_div">
                    <div class="col-lg-12 col-md-12 col-xs-12 text-center reg_div_type_1">
                        <div class="div_input_type_1" style="top: 30px;">
                            <p style="padding-right: 35px;">نام</p>
                        </div>
                        <input id="name" class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-1 col-xs-9 text-center input" type="text" style="margin-top: 30px;">
                    </div>
                    <div class="col-lg-12 col-md-12 col-xs-12 text-center reg_div_type_1">
                        <div class="div_input_type_1" style="top: 10px;">
                            <p style="padding-right: 20px;">رمز عبور</p>
                        </div>
                        <input id="pass" class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-1 col-xs-9 text-center input" type="password">
                    </div>
                    <div class="col-lg-12 col-md-12 col-xs-12 text-center reg_div_type_2">
                        <input id="sign_up" class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-8 col-xs-offset-2 text-center" type="submit" value="ثبت نام">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 hidden-sm hidden-xs text-center finger_div">
                <div class="finger_model"></div>
                <img src="../static/images/finger_print.png" alt="NOT FOUND" id="img_finger">
            </div>
        </div>
    </div>

</body>
</html>