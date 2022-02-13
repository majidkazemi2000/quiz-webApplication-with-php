$(document).ready(function () {

    function just_persian(str) {
        var p = /^[\u0600-\u06FF\s]+$/;
        if (!p.test(str)) {
            return false
        }
        return true;
    }

    var page_height = $(window).height();
    var margin = (page_height-500)/2;
    $("#register_content").css({
        'marginTop':margin
    })

    $("#sign_up_lebel").click(function () {
        $("#delimiter").css({
            'right':'100px'
        })
        $("#sign_in_div").hide();
        $("#email_div").show('fade');
    })
    $("#sign_in_lebel").click(function () {
        $("#delimiter").css({
            'right':'0px'
        })
        $("#email_div").hide();
        $("#sign_in_div").show('fade');
    })

    $("#sign_in_btn").prop("disabled",true);
    var sign_in_one = false;
    var sign_in_two = false;
    $("#username").keyup(function () {
        var email = $("#username").val().trim();
        $("#username").val(email);
        if (!just_persian(email) && email.length > 5 && email != "" && isNaN(email) && email.includes("@") && email.includes(".") && !email.startsWith("@") && !email.startsWith(".") && !email.endsWith("@") && !email.endsWith(".")){
            sign_in_one = true;
            if (sign_in_one && sign_in_two){
                $("#sign_in_btn").prop("disabled",false);
            }else{
                $("#sign_in_btn").prop("disabled",true);
            }

        }else{
            sign_in_one = false;
            $("#sign_in_btn").prop("disabled",true);
        }
    })
    $("#password").keyup(function () {
        var phone = $("#password").val().trim();
        $("#password").val(phone);
        if (phone.length >= 4 && phone != "" && !just_persian(phone)){
            sign_in_two = true;
            if (sign_in_one && sign_in_two){
                $("#sign_in_btn").prop("disabled",false);
            }else{
                $("#sign_in_btn").prop("disabled",true);
            }
        }else{
            sign_in_two = false;
            $("#sign_in_btn").prop("disabled",true);
        }
    })
    if (sign_in_one && sign_in_two){
        $("#sign_in_btn").prop("disabled",false);
    }else{
        $("#sign_in_btn").prop("disabled",true);
    }
    $("#sign_in_btn").click(function () {

        if (sign_in_one && sign_in_two){
            $("#sign_in_btn").attr("value","لطفا منتظر بمانید ...");
            $("#sign_in_btn").prop("disabled",true);

            var email = $("#username").val();
            var password = $("#password").val();
            $.ajax({
                type:'POST',
                url:'../ajax_api/sign_in/',
                data:{'api':'api','username':email,'password':password},
                success:function (response) {
                    $("#sign_in_btn").attr("value","ورود");
                    if (response){
                        $("#page_frame").css({
                            'width':'200%',
                            'height':'200%',
                            'right':'0',
                            'bottom':'0',
                            'top':'-25%'
                        })
                        setTimeout(function () {
                            $("#success_content_sign_in").show('fade');
                            $("#img_finger").attr("src","../static/images/finger_print2.png");
                        },300)
                        setTimeout(function () {
                            window.location = window.location;
                        },3000)
                    }else{
                        $("#username").addClass('anim');
                        $("#password").addClass('anim');
                        $("#username").css({
                            'backgroundColor':'#ff553e'
                        })
                        $("#password").css({
                            'backgroundColor':'#ff553e'
                        })
                        setTimeout(function () {
                            $("#username").removeClass('anim');
                            $("#password").removeClass('anim');
                            $("#username").css({
                                'backgroundColor':'white'
                            })
                            $("#password").css({
                                'backgroundColor':'white'
                            })
                        },2000)
                    }
                },
                error:function () {
                    $("#error_sign_in").show('shake');
                    $("#error_sign_in_text").text(response);
                }
            })

        }
    })


    $(".input").focus(function () {
        $(this).css({
            'boxShadow':'0 0 0 0 rgba(0,0,0,.1)',
            'borderColor':'black'
        })
    })
    $(".input").blur(function () {
        $(this).css({
            'boxShadow':'0 8px 16px 0 rgba(0,0,0,.7)',
            'borderColor':'#1ed0bd'
        })
    })

    var code;
    var emaill;

    $("#send_code").prop("disabled",true);
    $("#email").keyup(function () {
        var email = $("#email").val().trim();
        $("#email").val(email);

        if (!just_persian(email) && email.length > 5 && email != "" && isNaN(email) && email.includes("@") && email.includes(".") && !email.startsWith("@") && !email.startsWith(".") && !email.endsWith("@") && !email.endsWith(".")){
            $("#send_code").prop("disabled",false);
        }else{
            $("#send_code").prop("disabled",true);
        }

    })
    $("#send_code").click(function () {
        var email = $("#email").val();
        if (!just_persian(email) && email.length > 5 && email != "" && isNaN(email) && email.includes("@") && email.includes(".") && !email.startsWith("@") && !email.startsWith(".") && !email.endsWith("@") && !email.endsWith(".")) {
            $("#send_code").html("<img src='../static/images/load3.gif' style='height: 30px;width: 30px;margin-top: 5px;'>");
            emaill = email;
            $.ajax({
                type:'POST',
                url: '../ajax_code/sendcode/',
                data: {'api':'api','email':email},
                success:function (response) {
                    $("#send_code").text("ارسال کد تایید");
                    if (response != false){
                        $("#email_div").hide()
                        $("#code_div").show('fade');
                        code = response;
                    }
                },
                error:function () {
                    $("#send_code").text("ارسال کد تایید");

                }
            })
        }
    })
    $("#confirm_code").keyup(function () {
        var codee = $(this).val().trim();
        if (!isNaN(codee) && codee.length > 0){
            $("#confirm_code").val(codee);
            var length = codee.length*20;
            var w = 100-length;
            var background1 = 'linear-gradient(to right,#696bd4 '+length+'%,white '+w+'%)';
            var background2 = 'linear-gradient(to left,white '+w+'%,#696bd4 '+length+'%)';
            if (length < 50){
                $(this).css({
                    'background':background2
                })
            }else{
                $(this).css({
                    'background':background1
                })
            }
            if ($(this).val().length == 5){

                if (code == codee){
                    $("#confirm_code").css({
                        'background':'#16991f'
                    })
                    setTimeout(function () {
                        $("#confirm_code").css({
                            'background':background1
                        })
                        $("#code_div").hide();
                        $("#sign_up_div").show('fade');
                    },2000)
                }else{
                    $("#confirm_code").addClass('anim');
                    $("#confirm_code").css({
                        'background':'#ff553e'
                    })
                    setTimeout(function () {
                        $("#confirm_code").removeClass('anim');
                        $("#confirm_code").css({
                            'background':background1
                        })
                    },2000)

                }
            }
        }else{
            $("#confirm_code").val('');
            $(this).css({
                'background':'white'
            })
        }
    })

    $("#sign_up").prop("disabled",true);
    var one_sign_up=false;
    var two_sign_up=false;
    $("#name").keyup(function () {
        var name = $("#name").val();
        if (just_persian(name) && name.length > 5 && name != "" && isNaN(name)){
            one_sign_up = true;
            if (one_sign_up && two_sign_up){
                $("#sign_up").prop("disabled",false);
            }else{
                $("#sign_up").prop("disabled",true);
            }
        }else{
            one_sign_up = false;
            $("#sign_up").prop("disabled",true);
        }
    })
    $("#pass").keyup(function () {
        var password = $("#pass").val().trim();
        $("#pass").val(password);
        if (!just_persian(password) && password.length >= 4 && password != ""){
            two_sign_up = true;
            if (one_sign_up && two_sign_up){
                $("#sign_up").prop("disabled",false);
            }else{
                $("#sign_up").prop("disabled",true);
            }
        }else{
            two_sign_up = false;
            $("#sign_up").prop("disabled",true);
        }
    })

    if (one_sign_up && two_sign_up){
        $("#sign_up").prop("disabled",false);
    }else{
        $("#sign_up").prop("disabled",true);
    }

    $("#sign_up").click(function () {

        var name = $("#name").val().trim();
        var password = $("#pass").val().trim();
        var email = emaill;

        if (one_sign_up && two_sign_up){
            if (name.length > 5 && isNaN(name) && just_persian(name) && email.length > 5 && isNaN(email) && email.includes("@") && email.includes(".") && !just_persian(email) && password.length >=4 && !just_persian(password) && name.length < 32 && password.length < 16 && email.length < 32 && !email.startsWith("@") && !email.startsWith(".") && !email.endsWith("@") && !email.endsWith(".")){
                $.ajax({
                    type:'POST',
                    url:'../ajax_api/sign_up/',
                    data:{'api':'api','name':name,'email':emaill,'password':password},
                    success:function (response) {
                        if (response){
                            $("#page_frame").css({
                                'width':'200%',
                                'height':'200%',
                                'right':'0',
                                'bottom':'0',
                                'top':'-25%'
                            })
                            setTimeout(function () {
                                $("#success_content_sign_up").show('fade');
                                $("#img_finger").attr("src","../static/images/finger_print2.png");
                            },300)
                            setTimeout(function () {
                                window.location = window.location;
                            },3000)
                        }else{
                            $("#name").addClass('anim');
                            $("#pass").addClass('anim');
                            $("#name").css({
                                'backgroundColor':'#ff553e'
                            })
                            $("#pass").css({
                                'backgroundColor':'#ff553e'
                            })
                            setTimeout(function () {
                                $("#name").removeClass('anim');
                                $("#pass").removeClass('anim');
                                $("#name").css({
                                    'backgroundColor':'white'
                                })
                                $("#pass").css({
                                    'backgroundColor':'white'
                                })
                            },2000)
                        }
                    },
                    error:function () {
                    }
                })
            }
        }
    })
})
