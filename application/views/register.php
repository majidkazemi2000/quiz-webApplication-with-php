<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ورود / عضویت</title>
    <link rel="shortcut icon" href="static/images/logo.png" />
    <script src="static/js/jquery.js"></script>
    <script src="static/js/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="static/css/jquery-ui.min.css">
    <script src="static/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/animate.min.css">
    <link rel="stylesheet" href="static/css/register.css">
    <script src="static/js/register.js"></script>

</head>
<body>

    <div class="main">
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center" id="register_content">
            <div id="success_content">
                <img src="static/images/succ.gif" alt="NOT FOUND">
                <p>ثبت نام انجام شد</p>
            </div>
            <div id="success_content_login">
                <img src="static/images/succ.gif" alt="NOT FOUND">
                <p>ورود انجام شد</p>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" id="img_left">
                <p id="text">ورود کاربران</p>
                <img src="static/images/finger_print1.png" alt="NOT FOUND">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 500px;padding: 0;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;margin-top: 25px;">
                    <center>
                        <div id="sign_div">
                            <div id="delimiter"></div>
                            <div id="sign_up_icon">
                                <p>ثبت نام</p>
                            </div>
                            <div id="sign_in_icon">
                                <p>ورود</p>
                            </div>
                        </div>
                    </center>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="sign_in_div">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                        <center>
                            <div style="height: 50px;width: 300px;position: relative;">
                                <input id="username" type="text">
                                <div id="username_devider"></div>
                                <p id="username_label">ایمیل یا شماره تلفن</p>
                            </div>
                        </center>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;margin-top: 15px;">
                        <center>
                            <div style="height: 50px;width: 300px;position: relative;">
                                <input id="password" type="password">
                                <div id="password_devider"></div>
                                <p id="password_label">رمز عبور</p>
                            </div>
                        </center>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;">
                        <img id="login" src="static/images/login.png" alt="NOT FOUND">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="sign_up_div">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                        <center>
                            <div style="height: 50px;width: 300px;position: relative;">
                                <input id="name" type="text">
                                <div id="name_devider"></div>
                                <p id="name_label">نام و نام خانوادگی</p>
                            </div>
                        </center>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;margin-top: 15px;">
                        <center>
                            <div style="height: 50px;width: 300px;position: relative;">
                                <input id="email" type="text">
                                <div id="email_devider"></div>
                                <p id="email_label">ایمیل</p>
                            </div>
                        </center>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;margin-top: 15px;">
                        <center>
                            <div style="height: 50px;width: 300px;position: relative;">
                                <input id="phone" type="text">
                                <div id="phone_devider"></div>
                                <p id="phone_label">شماره تلفن</p>
                            </div>
                        </center>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;margin-top: 15px;">
                        <center>
                            <div style="height: 50px;width: 300px;position: relative;">
                                <input id="pass" type="password">
                                <div id="pass_devider"></div>
                                <p id="pass_label">رمز عبور</p>
                            </div>
                        </center>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;">
                        <img id="sign_up" src="static/images/login.png" alt="NOT FOUND">
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>