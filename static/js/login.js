$(document).ready(function () {
    var margin = ($(window).height()-$("#login_div").height())/2;
    $("#login_div").css({
        'marginTop':margin
    })
    $("#username").focus(function () {
        $("#username").attr("placeholder","");
        $("#username_label").show('fade');
        $("#username_devider").css({
            'width':'250px'
        })
    })
    $("#username").blur(function () {
        $("#username").attr("placeholder","نام کاربری");
        $("#username_label").hide();
        $("#username_devider").css({
            'width':'0px'
        })
    })
    $("#password").focus(function () {
        $("#password").attr("placeholder","");
        $("#password_label").show('fade');
        $("#password_devider").css({
            'width':'250px'
        })
    })
    $("#password").blur(function () {
        $("#password").attr("placeholder","رمز عبور");
        $("#password_label").hide();
        $("#password_devider").css({
            'width':'0px'
        })
    })


    $("#login").click(function () {

        var username = $("#username").val();
        var password = $("#password").val();
        if (username.length >= 4 && password.length >=4){
            $.ajax({
                type:'POST',
                url:'ajax_login_admin/sign_in/',
                data:{'is_admin':'admin','username':username,'password':password},
                success:function (response) {
                    if (response){
                        window.location=window.location;
                    }else{
                        $("#username").addClass('anim');
                        $("#password").addClass('anim');
                        $("#username").css({
                            'backgroundColor':'#ff5b5b'
                        })
                        $("#password").css({
                            'backgroundColor':'#ff5b5b'
                        })
                        setTimeout(function () {
                            $("#username").removeClass('anim');
                            $("#password").removeClass('anim');
                            $("#username").css({
                                'backgroundColor':'lightgray'
                            })
                            $("#password").css({
                                'backgroundColor':'lightgray'
                            })
                        },500)
                    }
                },
                error:function () {

                }
            })
        }

    })
})
