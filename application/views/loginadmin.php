<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="static/images/logo.png" />
    <title>صفحه ورود</title>
    <script src="static/js/jquery.js"></script>
    <script src="static/js/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="static/css/jquery-ui.min.css">
    <script src="static/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/login.css">
    <script src="static/js/login.js"></script>
</head>
<body>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="position: fixed;top: 0;bottom: 0;right: 0;left: 0;background: linear-gradient(to right,#7dffdd 50%,white 50%);">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 text-center" style="height: 500px;box-shadow: 0 8px 16px 0 rgba(0,0,0,.7);padding: 0;" id="login_div">
            <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center" style="height: 500px;padding-top: 120px;">
                <div>
                    <p style="font-family: 'B Yekan';color: black;font-size: 18px;display: inline-block;">صفحه ورود ادمین</p>
                </div>
                <img src="static/images/finger_print.png" alt="NOT FOUND" style="height: 200px;width: 200px;">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 500px;">
                <img src="static/images/window.png" alt="NOT FOUND" style="height: 150px;width: 150px;">
                <p style="font-family: 'B Yekan';font-size: 18px;color: black;">خوش آمدید</p>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                        <center>
                            <p id="username_label">نام کاربری</p>
                        </center>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                        <input autocomplete="off" id="username" type="text" placeholder="نام کاربری">
                        <center>
                            <div id="username_devider"></div>
                        </center>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                        <center>
                            <p id="password_label">رمز عبور</p>
                        </center>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                        <input autocomplete="off" id="password" type="password" placeholder="رمز عبور">
                        <center>
                            <div id="password_devider"></div>
                        </center>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;">
                    <img src="static/images/login.png" alt="NOT FOUND" id="login">
                </div>
            </div>

        </div>
    </div>

</body>
</html>