$(document).ready(function () {
    function just_persian(str) {
        var p = /^[\u0600-\u06FF\s]+$/;
        if (!p.test(str)) {
            return false
        }
        return true;
    }
    var height = $(window).height();
    var content = $("#register_content").height();
    var margin_err =( height - content ) / 2;
    $("#register_content").css({
        'marginTop':margin_err
    })
    $("#sign_in_icon").click(function () {
        $("#delimiter").css({
            'left':'170px'
        })
        $("#sign_in_div").show('fade');
        $("#sign_up_div").hide();
        $("#text").text("ورود کاربران");
    })
    $("#sign_up_icon").click(function () {
        $("#delimiter").css({
            'left':'10px'
        })
        $("#sign_up_div").show('fade');
        $("#sign_in_div").hide();
        $("#text").text("ثبت نام کاربران");
    })


    $("#username").focus(function () {
        $("#username_label").css({
            'top':'-10px',
            'color':'#696bd4'
        })
        $("#username_devider").css({
            'width':'300px'
        })
    })
    $("#username").blur(function () {
        if ($("#username").val() == ""){
            $("#username_label").css({
                'top':'15px',
                'color':'black'
            })
            $("#username_devider").css({
                'width':'0px'
            })
        }

    })
    $("#password").focus(function () {
        $("#password_label").css({
            'top':'-10px',
            'color':'#696bd4'
        })
        $("#password_devider").css({
            'width':'300px'
        })
    })
    $("#password").blur(function () {
        if ($("#password").val() == ""){
            $("#password_label").css({
                'top':'15px',
                'color':'black'
            })
            $("#password_devider").css({
                'width':'0px'
            })
        }
    })
    $("#name").focus(function () {
        $("#name_label").css({
            'top':'-10px',
            'color':'#696bd4'
        })
        $("#name_devider").css({
            'width':'300px'
        })
    })
    $("#name").blur(function () {
        if ($("#name").val() == ""){
            $("#name_label").css({
                'top':'15px',
                'color':'black'
            })
            $("#name_devider").css({
                'width':'0px'
            })
        }
    })

    $("#phone").focus(function () {
        $("#phone_label").css({
            'top':'-10px',
            'color':'#696bd4'
        })
        $("#phone_devider").css({
            'width':'300px'
        })
    })
    $("#phone").blur(function () {
        if ($("#phone").val() == ""){
            $("#phone_label").css({
                'top':'15px',
                'color':'black'
            })
            $("#phone_devider").css({
                'width':'0px'
            })
        }
    })


    $("#email").focus(function () {
        $("#email_label").css({
            'top':'-10px',
            'color':'#696bd4'
        })
        $("#email_devider").css({
            'width':'300px'
        })
    })
    $("#email").blur(function () {
        if ($("#email").val() == ""){
            $("#email_label").css({
                'top':'15px',
                'color':'black'
            })
            $("#email_devider").css({
                'width':'0px'
            })
        }
    })

    $("#pass").focus(function () {
        $("#pass_label").css({
            'top':'-10px',
            'color':'#696bd4'
        })
        $("#pass_devider").css({
            'width':'300px'
        })
    })
    $("#pass").blur(function () {
        if ($("#pass").val() == ""){
            $("#pass_label").css({
                'top':'15px',
                'color':'black'
            })
            $("#pass_devider").css({
                'width':'0px'
            })
        }
    })





    $("#login").prop("disabled",true);
    var one=false;
    var two=false;

    $("#username").keyup(function () {
        var username = $("#username").val().trim();
        $("#username").val(username);
        if (username.length > 5){
            if (!isNaN(username)){
                if (username.length == 11 && username != "" && username.startsWith("09")){
                    one = true;
                    if (one && two){
                        $("#login").prop("disabled",false);
                    }else{
                        $("#login").prop("disabled",true);
                    }
                }else{
                    one = false ;
                    $("#login").prop("disabled",true);
                }
            }else if (isNaN(username)){
                if (!just_persian(username) && username != "" && username.length < 64 && username.includes("@") && username.includes(".") && !username.startsWith("@") && !username.startsWith(".") && !username.endsWith("@") && !username.endsWith(".")) {
                    one = true;
                    if (one && two){
                        $("#login").prop("disabled",false);
                    }else{
                        $("#login").prop("disabled",true);
                    }
                }else{
                    one = false;
                    $("#login").prop("disabled",true);
                }
            }
        }else{
            one = false;
            $("#login").prop("disabled",true);
        }
    })
    $("#password").keyup(function () {
        var password = $("#password").val().trim();
        $("#password").val(password);
        if (!just_persian(password) && password.length >= 4 && password != ""){
            two = true;
            if (one && two){
                $("#login").prop("disabled",false);
            }else{
                $("#login").prop("disabled",true);
            }
        }else{
            two = false;
            $("#login").prop("disabled",true);
        }
    })

    if (one && two){
        $("#login").prop("disabled",false);
    }else{
        $("#login").prop("disabled",true);
    }

    $("#login").click(function () {
        var username = $("#username").val().trim();
        var password = $("#password").val().trim();

        if (password.length >= 4 && !just_persian(password) && password != ""){

            if (!isNaN(username)){

                if (username.length != 11 || username == "" || !username.startsWith("09")) {
                    username = "";
                    password = "";
                }
            }else if (isNaN(username)){
                if (just_persian(username) || username == "" || username.length > 32 || !username.includes("@") || !username.includes(".") || username.startsWith("@") || username.startsWith(".") || username.endsWith("@") || username.endsWith(".")) {
                    username = "";
                    password = "";
                }

            }

            if (username != "" && password != ""){
                $.ajax({
                    type:'POST',
                    url:'ajax_register/sign_in/',
                    data:{'username':username,'password':password,'user':'user'},
                    success:function (response) {
                        if (response == false){
                            $("#success_content_login").show('slide');
                            setTimeout(function () {
                                window.location = window.location;
                            },4000)
                        }
                    },
                    error:function () {

                    }

                })



            }

        }




    })






    $("#sign_up").prop("disabled",true);
    var one_sign_up=false;
    var two_sign_up=false;
    var three_sign_up=false;
    var four_sign_up=false;


    $("#name").keyup(function () {
        var name = $("#name").val();
        if (just_persian(name) && name.length > 5 && name != "" && isNaN(name)){
            one_sign_up = true;
            if (one_sign_up && two_sign_up && three_sign_up && four_sign_up){
                $("#sign_up").prop("disabled",false);
            }else{
                $("#sign_up").prop("disabled",true);
            }
        }else{
            one_sign_up = false;
            $("#sign_up").prop("disabled",true);
        }
    })
    $("#email").keyup(function () {
        var email = $("#email").val().trim();
        $("#email").val(email);
        if (!just_persian(email) && email.length > 5 && email != "" && isNaN(email) && email.includes("@") && email.includes(".") && !email.startsWith("@") && !email.startsWith(".") && !email.endsWith("@") && !email.endsWith(".")){
            four_sign_up = true;
            if (one_sign_up && two_sign_up && three_sign_up && four_sign_up){
                $("#sign_up").prop("disabled",false);
            }else{
                $("#sign_up").prop("disabled",true);
            }

        }else{
            four_sign_up = false;
            $("#sign_up").prop("disabled",true);
        }
    })
    $("#phone").keyup(function () {
        var phone = $("#phone").val().trim();
        $("#phone").val(phone);
        if (phone.length == 11 && phone != "" && !isNaN(phone) && phone.startsWith("09")){
            two_sign_up = true;
            if (one_sign_up && two_sign_up && three_sign_up && four_sign_up){
                $("#sign_up").prop("disabled",false);
            }else{
                $("#sign_up").prop("disabled",true);
            }
        }else{
            two_sign_up = false;
            $("#sign_up").prop("disabled",true);
        }
    })
    $("#pass").keyup(function () {
        var password = $("#pass").val().trim();
        $("#pass").val(password);
        if (!just_persian(password) && password.length >= 4 && password != ""){
            three_sign_up = true;
            if (one_sign_up && two_sign_up && three_sign_up && four_sign_up){
                $("#sign_up").prop("disabled",false);
            }else{
                $("#sign_up").prop("disabled",true);
            }
        }else{
            three_sign_up = false;
            $("#sign_up").prop("disabled",true);
        }
    })

    if (one_sign_up && two_sign_up && three_sign_up && four_sign_up){
        $("#sign_up").prop("disabled",false);
    }else{
        $("#sign_up").prop("disabled",true);
    }

    $("#sign_up").click(function () {

        var name = $("#name").val().trim();
        var phone = $("#phone").val().trim();
        var password = $("#pass").val().trim();
        var email = $("#email").val().trim();

        if (one_sign_up && two_sign_up && three_sign_up && four_sign_up){
            if (name.length > 5 && isNaN(name) && just_persian(name) && phone.length == 11 && !isNaN(phone) && email.length > 5 && isNaN(email) && email.includes("@") && email.includes(".") && !just_persian(email) && password.length >=4 && !just_persian(password) && name.length < 32 && password.length < 16 && email.length < 32 && !email.startsWith("@") && !email.startsWith(".") && !email.endsWith("@") && !email.endsWith(".")){
                $.ajax({
                    type:'POST',
                    url:'ajax_register/sign_up/',
                    data:{'name':name,'phone':phone,'email':email,'password':password,'user':'user'},
                    success:function (response) {
                        if (response == false){
                            $("#success_content").show('slide');
                            setTimeout(function () {
                                window.location = window.location;
                            },4000)

                        }
                    },
                    error:function () {

                    }
                })



            }
        }


    })

})
