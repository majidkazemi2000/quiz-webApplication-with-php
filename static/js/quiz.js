$(document).ready(function () {
    function disableF5(e) { if ((e.which || e.keyCode) == 116) e.preventDefault(); };
    $(document).on("keydown", disableF5);

    var height = $(window).height();
    var content = $("#quiz_content").height();
    var err_content = $("#error_content").height();
    if (content > height){
        $("#quiz_content").css({
            'marginTop':'50px',
            'marginBottom':'50px'
        })
    }else{
        var margin =( height - content ) / 2;
        $("#quiz_content").css({
            'marginTop':margin
        })
    }
    var margin_err =( height - err_content ) / 2;
    $("#error_content").css({
        'marginTop':margin_err
    })
    $("#success_content").css({
        'marginTop':margin_err
    })
    $("#close_add_coin").hover(function () {
        $("#close_add_coin").attr("src","static/images/close2.png");
    },function () {
        $("#close_add_coin").attr("src","static/images/close1.png");
    })

    $("#close_add_heart").hover(function () {
        $("#close_add_heart").attr("src","static/images/close2.png");
    },function () {
        $("#close_add_heart").attr("src","static/images/close1.png");
    })

    $("#close_add_coin").click(function () {
        $("#add_coin_div").hide('fade');
    })
    $(".add_coin").click(function () {
        $("#add_coin_div").show('fade');
    })

    $("#close_add_heart").click(function () {
        $("#add_heart_div").hide('fade');
    })
    $(".add_heart").click(function () {
        $("#add_heart_div").show('fade');
    })


    $.ajax({
        type:'POST',
        url:'ajax_quiz/get_setting/',
        data:{'is_admin':'admin'},
        success:function (response) {
            if (response != false){
                var arr = response.split("*");
                $(".delete_one_setting").text(arr[0]);
                $(".delete_two_setting").text(arr[1]);
                $(".next_level_setting").text(arr[2]);

                var type_G = "";
                var count_G = 0;

                $(".add_coin_item").click(function () {
                    var s = $(this).attr("about");
                    var ss = s.split("_");
                    $(".add_coin_item").css({
                        'boxShadow':'0 8px 16px 0 rgba(0,0,0,.7)',
                        'background':'#696bd4',
                        'borderColor':'transparent'
                    })
                    $(this).css({
                        'boxShadow':'none',
                        'background':'linear-gradient(to left,#47d0a6,#1ed0bd)',
                        'borderColor':'#696bd4'
                    })

                    var type = ss[0];
                    var value = ss[1];
                    if (type == 'coin'){
                        type_G = "coin";
                        if (value == '100'){
                            $("#coin_price_text").text(arr[3]);
                            $("#coin_price_div").css({
                                'bottom':'70px',
                                'height':'30px'
                            });
                            count_G = 100;
                        }else if (value == '500'){
                            $("#coin_price_text").text(arr[4]);
                            $("#coin_price_div").css({
                                'bottom':'70px',
                                'height':'30px'
                            });
                            count_G = 500;
                        }else if (value == '1000'){
                            $("#coin_price_text").text(arr[5]);
                            $("#coin_price_div").css({
                                'bottom':'70px',
                                'height':'30px'
                            });
                            count_G = 1000;
                        }else if (value == '2000'){
                            $("#coin_price_text").text(arr[6]);
                            $("#coin_price_div").css({
                                'bottom':'70px',
                                'height':'30px'
                            });
                            count_G = 2000;
                        }else {
                            count_G = 0;
                            type_G = "";
                        }
                    }else if (type == 'heart'){
                        type_G = "heart";
                        if (value == '3'){
                            $("#heart_price_text").text(arr[7]);
                            $("#heart_price_div").css({
                                'bottom':'70px',
                                'height':'30px'
                            });
                            count_G = 3;
                        }else if (value == '5'){
                            $("#heart_price_text").text(arr[8]);
                            $("#heart_price_div").css({
                                'bottom':'70px',
                                'height':'30px'
                            });
                            count_G = 5;
                        }else if (value == '10'){
                            $("#heart_price_text").text(arr[9]);
                            $("#heart_price_div").css({
                                'bottom':'70px',
                                'height':'30px'
                            });
                            count_G = 10;
                        }else if (value == '20'){
                            $("#heart_price_text").text(arr[10]);
                            $("#heart_price_div").css({
                                'bottom':'70px',
                                'height':'30px'
                            });
                            count_G = 20;
                        }else {
                            type_G = "";
                            count_G = 0;
                        }
                    }
                })


                $("#buy_coin").click(function () {
                    if (type_G == "coin" && count_G != 0 && !isNaN(count_G) && count_G != ""){
                        $.ajax({
                            type:'POST',
                            url:'ajax_pay/pay/',
                            data:{'pay':'pay','type':type_G,'count':count_G},
                            success:function (response) {
                                if (response){
                                    get_info();
                                    $("#add_coin_div").addClass('animate__animated');
                                    $("#add_coin_div").addClass('animate__backOutUp');
                                    $("#add_coin_div").hide('fade');
                                    $("#success_pay").css({
                                        'bottom':'0px'
                                    })
                                    setTimeout(function () {
                                        $("#success_pay").css({
                                            'bottom':'-101px'
                                        })
                                        $("#add_coin_div").removeClass('animate__animated');
                                        $("#add_coin_div").removeClass('animate__backOutUp');
                                    },2000)
                                }else{
                                    $("#error_pay").css({
                                        'bottom':'0px'
                                    })
                                    setTimeout(function () {
                                        $("#error_pay").css({
                                            'bottom':'-101px'
                                        })
                                    },2000)
                                }
                            },
                            error:function () {
                                $("#error_pay").css({
                                    'bottom':'0px'
                                })
                                setTimeout(function () {
                                    $("#error_pay").css({
                                        'bottom':'-101px'
                                    })
                                },2000)
                            }
                        })
                    }
                })
                $("#buy_heart").click(function () {
                    if (type_G == "heart" && count_G != 0 && !isNaN(count_G) && count_G != ""){
                        $.ajax({
                            type:'POST',
                            url:'ajax_pay/pay/',
                            data:{'pay':'pay','type':type_G,'count':count_G},
                            success:function (response) {
                                if (response){
                                    get_info();
                                    $("#add_heart_div").addClass('animate__animated');
                                    $("#add_heart_div").addClass('animate__backOutUp');
                                    $("#add_heart_div").hide('fade');
                                    $("#success_pay").css({
                                        'bottom':'0px'
                                    })
                                    setTimeout(function () {
                                        $("#success_pay").css({
                                            'bottom':'-101px'
                                        })
                                        $("#add_heart_div").removeClass('animate__animated');
                                        $("#add_heart_div").removeClass('animate__backOutUp');
                                    },2000)
                                }else{
                                    $("#error_pay").css({
                                        'bottom':'0px'
                                    })
                                    setTimeout(function () {
                                        $("#error_pay").css({
                                            'bottom':'-101px'
                                        })
                                    },2000)
                                }
                            },
                            error:function () {
                                $("#error_pay").css({
                                    'bottom':'0px'
                                })
                                setTimeout(function () {
                                    $("#error_pay").css({
                                        'bottom':'-101px'
                                    })
                                },2000)
                            }
                        })
                    }
                })



            }
        },
        error:function () {

        }
    })




    var win_val = false;
    get_info();
    function get_info() {
        $.ajax({
            type:'POST',
            url:'ajax_quiz/get_user_info/',
            data:{'user':'user'},
            success:function (response) {
                if (response != false){
                    var s = response.split("*");
                    $(".level_user").text(s[0]);
                    $(".coin_user").text(s[1]);
                    $(".heart_user").text(s[2]);
                }
            },
            error:function () {

            }
        })
    }

    $("#update_level").click(function () {
        retry();
    })
    $("#retry_play").click(function () {
        retry();
    })

    function retry(){
        $.ajax({
            type:'POST',
            url:'ajax_quiz/retry/',
            data:{'user':'user'},
            success:function (response) {
                if (response){
                    window.location = window.location;
                    window.close();
                }
            },
            error:function () {

            }
        })
    }


    var q1,q2,q3,q4;

    $.ajax({
        type:'POST',
        url:'ajax_quiz/get_question/',
        data:{'user':'user'},
        success:function (response) {
            if (response != false){
                var s = JSON.parse(response);
                q1 = s[0];
                q2 = s[1];
                q3 = s[2];
                q4 = s[3];
            }
        },
        error:function () {

        },
        async:false
    })

    level_1(q1);

    function level_1(qu1) {

        $(".choose_level_1").show('fade');
        $(".help_1").show('fade');

        if (qu1.img == ""){
            $(".img_question").attr("src","static/images/not-found.png");
        }else{
            $(".img_question").attr("src","static/images/question/"+qu1.img);
        }
        $(".content").text(qu1.content);
        $(".choose-1-1").text(qu1.choose_1);
        $(".choose-2-1").text(qu1.choose_2);
        $(".choose-3-1").text(qu1.choose_3);
        $(".choose-4-1").text(qu1.choose_4);
        var question = qu1.id;
        var answer = qu1.correct_choose;

        $(".choose-1-1").click(function () {
            if (parseInt(answer) == 1){
                $(".level_2").css({
                    'width':'20px',
                    'height':'20px',
                    'backgroundColor':'green'
                })
                ans(question,'1')
                level_2(q2);
            }else{
                ans(question,'0')
                $("#fail_match").show('fade');
            }
        })
        $(".choose-2-1").click(function () {
            if (parseInt(answer) == 2){
                $(".level_2").css({
                    'width':'20px',
                    'height':'20px',
                    'backgroundColor':'green'
                })
                ans(question,'1');
                level_2(q2);
            }else{
                ans(question,'0');
                $("#fail_match").show('fade');
            }
        })
        $(".choose-3-1").click(function () {
            if (parseInt(answer) == 3){
                $(".level_2").css({
                    'width':'20px',
                    'height':'20px',
                    'backgroundColor':'green'
                })
                ans(question,'1');
                level_2(q2);
            }else{
                ans(question,'0');
                $("#fail_match").show('fade');
            }
        })
        $(".choose-4-1").click(function () {
            if (parseInt(answer) == 4){
                $(".level_2").css({
                    'width':'20px',
                    'height':'20px',
                    'backgroundColor':'green'
                })
                ans(question,'1');
                level_2(q2);
            }else{
                ans(question,'0');
                $("#fail_match").show('fade');
            }
        })


        $(".help_deleteone_1").click(function () {
            $.ajax({
                type:'POST',
                url:'ajax_quiz/help/',
                data:{'user':'user','type':'1','question':question,'ans':answer},
                success:function (response) {
                    if (response != false){
                        $(".choose-"+response+"-1").css({
                            'backgroundColor':'red'
                        })
                        get_info();
                    }else{
                        $(".user_coin_img").addClass('animate__animated');
                        $(".user_coin_img").addClass('animate__heartBeat');
                        setTimeout(function () {
                            $(".user_coin_img").removeClass('animate__animated');
                            $(".user_coin_img").removeClass('animate__heartBeat');
                        },2000)
                    }
                },
                error:function () {

                }
            })
        })
        $(".help_deletetwo_1").click(function () {
            $.ajax({
                type:'POST',
                url:'ajax_quiz/help/',
                data:{'user':'user','type':'2','question':question,'ans':answer},
                success:function (response) {
                    if (response != false){
                        var s = response.split("/");
                        $(".choose-"+s[0]+"-1").css({
                            'backgroundColor':'red'
                        })
                        $(".choose-"+s[1]+"-1").css({
                            'backgroundColor':'red'
                        })
                        get_info();
                    }else{
                        $(".user_coin_img").addClass('animate__animated');
                        $(".user_coin_img").addClass('animate__heartBeat');
                        setTimeout(function () {
                            $(".user_coin_img").removeClass('animate__animated');
                            $(".user_coin_img").removeClass('animate__heartBeat');
                        },2000)
                    }
                },
                error:function () {

                }
            })
        })
        $(".help_nextlevel_1").click(function () {
            $.ajax({
                type:'POST',
                url:'ajax_quiz/help/',
                data:{'user':'user','type':'3','question':question,'ans':answer},
                success:function (response) {
                    if (response){
                        win();
                    }else{
                        $(".user_heart_img").addClass('animate__animated');
                        $(".user_heart_img").addClass('animate__heartBeat');
                        setTimeout(function () {
                            $(".user_heart_img").removeClass('animate__animated');
                            $(".user_heart_img").removeClass('animate__heartBeat');
                        },2000)
                    }
                },
                error:function () {

                }
            })
        })
    }
    function level_2(qu2) {

        $(".choose_level_1").hide();
        $(".help_1").hide();
        $(".choose_level_2").show('fade');
        $(".help_2").show('fade');

        if (qu2.img == ""){
            $(".img_question").attr("src","static/images/not-found.png");
        }else{
            $(".img_question").attr("src","static/images/question/"+qu2.img);
        }
        $(".content").text(qu2.content);
        $(".choose-1-2").text(qu2.choose_1);
        $(".choose-2-2").text(qu2.choose_2);
        $(".choose-3-2").text(qu2.choose_3);
        $(".choose-4-2").text(qu2.choose_4);
        var question = qu2.id;
        var answer = qu2.correct_choose;


        $(".choose-1-2").click(function () {
            if (parseInt(answer) == 1){
                $(".level_3").css({
                    'width':'20px',
                    'height':'20px',
                    'backgroundColor':'green'
                })
                ans(question,'1');
                level_3(q3);
            }else{
                ans(question,'0');
                $("#fail_match").show('fade');
            }
        })
        $(".choose-2-2").click(function () {
            if (parseInt(answer) == 2){
                $(".level_3").css({
                    'width':'20px',
                    'height':'20px',
                    'backgroundColor':'green'
                })
                ans(question,'1');
                level_3(q3);
            }else{
                ans(question,'0');
                $("#fail_match").show('fade');
            }
        })
        $(".choose-3-2").click(function () {
            if (parseInt(answer) == 3){
                $(".level_3").css({
                    'width':'20px',
                    'height':'20px',
                    'backgroundColor':'green'
                })
                ans(question,'1');
                level_3(q3);
            }else{
                ans(question,'0');
                $("#fail_match").show('fade');
            }
        })
        $(".choose-4-2").click(function () {
            if (parseInt(answer) == 4){
                $(".level_3").css({
                    'width':'20px',
                    'height':'20px',
                    'backgroundColor':'green'
                })
                ans(question,'1');
                level_3(q3);
            }else{
                ans(question,'0');
                $("#fail_match").show('fade');
            }
        })


        $(".help_deleteone_2").click(function () {
            $.ajax({
                type:'POST',
                url:'ajax_quiz/help/',
                data:{'user':'user','type':'1','question':question,'ans':answer},
                success:function (response) {
                    if (response != false){
                        $(".choose-"+response+"-2").css({
                            'backgroundColor':'red'
                        })
                        get_info();
                    }else{
                        $(".user_coin_img").addClass('animate__animated');
                        $(".user_coin_img").addClass('animate__heartBeat');
                        setTimeout(function () {
                            $(".user_coin_img").removeClass('animate__animated');
                            $(".user_coin_img").removeClass('animate__heartBeat');
                        },2000)
                    }
                },
                error:function () {

                }
            })
        })
        $(".help_deletetwo_2").click(function () {
            $.ajax({
                type:'POST',
                url:'ajax_quiz/help/',
                data:{'user':'user','type':'2','question':question,'ans':answer},
                success:function (response) {
                    if (response != false){
                        var s = response.split("/");

                        $(".choose-"+s[0]+"-2").css({
                            'backgroundColor':'red'
                        })
                        $(".choose-"+s[1]+"-2").css({
                            'backgroundColor':'red'
                        })
                        get_info();
                    }else{
                        $(".user_coin_img").addClass('animate__animated');
                        $(".user_coin_img").addClass('animate__heartBeat');
                        setTimeout(function () {
                            $(".user_coin_img").removeClass('animate__animated');
                            $(".user_coin_img").removeClass('animate__heartBeat');
                        },2000)
                    }
                },
                error:function () {

                }
            })
        })
        $(".help_nextlevel_2").click(function () {
            $.ajax({
                type:'POST',
                url:'ajax_quiz/help/',
                data:{'user':'user','type':'3','question':question,'ans':answer},
                success:function (response) {
                    if (response){
                        win();
                    }else{
                        $(".user_heart_img").addClass('animate__animated');
                        $(".user_heart_img").addClass('animate__heartBeat');
                        setTimeout(function () {
                            $(".user_heart_img").removeClass('animate__animated');
                            $(".user_heart_img").removeClass('animate__heartBeat');
                        },2000)
                    }
                },
                error:function () {

                }
            })
        })
    }
    function level_3(qu3) {

        $(".choose_level_2").hide();
        $(".help_2").hide();
        $(".choose_level_3").show('fade');
        $(".help_3").show('fade');


        if (qu3.img == ""){
            $(".img_question").attr("src","static/images/not-found.png");
        }else{
            $(".img_question").attr("src","static/images/question/"+qu3.img);
        }
        $(".content").text(qu3.content);
        $(".choose-1-3").text(qu3.choose_1);
        $(".choose-2-3").text(qu3.choose_2);
        $(".choose-3-3").text(qu3.choose_3);
        $(".choose-4-3").text(qu3.choose_4);
        var question = qu3.id;
        var answer = qu3.correct_choose;


        $(".choose-1-3").click(function () {
            if (parseInt(answer) == 1){
                $(".level_4").css({
                    'width':'20px',
                    'height':'20px',
                    'backgroundColor':'green'
                })
                ans(question,'1');
                level_4(q4);
            }else{
                ans(question,'0');
                $("#fail_match").show('fade');
            }
        })
        $(".choose-2-3").click(function () {
            if (parseInt(answer) == 2){
                $(".level_4").css({
                    'width':'20px',
                    'height':'20px',
                    'backgroundColor':'green'
                })
                ans(question,'1');
                level_4(q4);
            }else{
                ans(question,'0');
                $("#fail_match").show('fade');
            }
        })
        $(".choose-3-3").click(function () {
            if (parseInt(answer) == 3){
                $(".level_4").css({
                    'width':'20px',
                    'height':'20px',
                    'backgroundColor':'green'
                })
                ans(question,'1');
                level_4(q4);
            }else{
                ans(question,'0');
                $("#fail_match").show('fade');
            }
        })
        $(".choose-4-3").click(function () {
            if (parseInt(answer) == 4){
                $(".level_4").css({
                    'width':'20px',
                    'height':'20px',
                    'backgroundColor':'green'
                })
                ans(question,'1');
                level_4(q4);
            }else{
                ans(question,'0');
                $("#fail_match").show('fade');
            }
        })


        $(".help_deleteone_3").click(function (){
            $.ajax({
                type:'POST',
                url:'ajax_quiz/help/',
                data:{'user':'user','type':'1','question':question,'ans':answer},
                success:function (response) {
                    if (response != false){
                        $(".choose-"+response+"-3").css({
                            'backgroundColor':'red'
                        })
                        get_info();
                    }else{
                        $(".user_coin_img").addClass('animate__animated');
                        $(".user_coin_img").addClass('animate__heartBeat');
                        setTimeout(function () {
                            $(".user_coin_img").removeClass('animate__animated');
                            $(".user_coin_img").removeClass('animate__heartBeat');
                        },2000)
                    }
                },
                error:function () {

                }
            })
        })
        $(".help_deletetwo_3").click(function () {
            $.ajax({
                type:'POST',
                url:'ajax_quiz/help/',
                data:{'user':'user','type':'2','question':question,'ans':answer},
                success:function (response) {
                    if (response != false){
                        var s = response.split("/");

                        $(".choose-"+s[0]+"-3").css({
                            'backgroundColor':'red'
                        })
                        $(".choose-"+s[1]+"-3").css({
                            'backgroundColor':'red'
                        })
                        get_info();
                    }else{
                        $(".user_coin_img").addClass('animate__animated');
                        $(".user_coin_img").addClass('animate__heartBeat');
                        setTimeout(function () {
                            $(".user_coin_img").removeClass('animate__animated');
                            $(".user_coin_img").removeClass('animate__heartBeat');
                        },2000)
                    }
                },
                error:function () {

                }
            })
        })
        $(".help_nextlevel_3").click(function () {
            $.ajax({
                type:'POST',
                url:'ajax_quiz/help/',
                data:{'user':'user','type':'3','question':question,'ans':answer},
                success:function (response) {
                    if (response){
                        win();
                    }else{
                        $(".user_heart_img").addClass('animate__animated');
                        $(".user_heart_img").addClass('animate__heartBeat');
                        setTimeout(function () {
                            $(".user_heart_img").removeClass('animate__animated');
                            $(".user_heart_img").removeClass('animate__heartBeat');
                        },2000)
                    }
                },
                error:function () {

                }
            })
        })
    }
    function level_4(qu4) {

        $(".choose_level_3").hide();
        $(".help_3").hide();
        $(".choose_level_4").show('fade');
        $(".help_4").show('fade');

        if (qu4.img == ""){
            $(".img_question").attr("src","static/images/not-found.png");
        }else{
            $(".img_question").attr("src","static/images/question/"+qu4.img);
        }
        $(".content").text(qu4.content);
        $(".choose-1-4").text(qu4.choose_1);
        $(".choose-2-4").text(qu4.choose_2);
        $(".choose-3-4").text(qu4.choose_3);
        $(".choose-4-4").text(qu4.choose_4);
        var question = qu4.id;
        var answer = qu4.correct_choose;


        $(".choose-1-4").click(function () {
            if (parseInt(answer) == 1){
                ans(question,'1');
                win();
            }else{
                ans(question,'0');
                $("#fail_match").show('fade');
            }
        })
        $(".choose-2-4").click(function () {
            if (parseInt(answer) == 2){
                ans(question,'1');
                win();
            }else{
                ans(question,'0');
                $("#fail_match").show('fade');
            }
        })
        $(".choose-3-4").click(function () {
            if (parseInt(answer) == 3){
                ans(question,'1');
                win();
            }else{
                ans(question,'0');
                $("#fail_match").show('fade');
            }
        })
        $(".choose-4-4").click(function () {
            if (parseInt(answer) == 4){
                ans(question,'1');
                win();
            }else{
                ans(question,'0');
                $("#fail_match").show('fade');
            }
        })


        $(".help_deleteone_4").click(function () {
            $.ajax({
                type:'POST',
                url:'ajax_quiz/help/',
                data:{'user':'user','type':'1','question':question,'ans':answer},
                success:function (response) {
                    if (response != false){
                        $(".choose-"+response+"-4").css({
                            'backgroundColor':'red'
                        })
                        get_info();
                    }else{
                        $(".user_coin_img").addClass('animate__animated');
                        $(".user_coin_img").addClass('animate__heartBeat');
                        setTimeout(function () {
                            $(".user_coin_img").removeClass('animate__animated');
                            $(".user_coin_img").removeClass('animate__heartBeat');
                        },2000)
                    }
                },
                error:function () {

                }
            })
        })
        $(".help_deletetwo_4").click(function () {
            $.ajax({
                type:'POST',
                url:'ajax_quiz/help/',
                data:{'user':'user','type':'2','question':question,'ans':answer},
                success:function (response) {
                    if (response != false){
                        var s = response.split("/");
                        $(".choose-"+s[0]+"-4").css({
                            'backgroundColor':'red'
                        })
                        $(".choose-"+s[1]+"-4").css({
                            'backgroundColor':'red'
                        })
                        get_info();
                    }else{
                        $(".user_coin_img").addClass('animate__animated');
                        $(".user_coin_img").addClass('animate__heartBeat');
                        setTimeout(function () {
                            $(".user_coin_img").removeClass('animate__animated');
                            $(".user_coin_img").removeClass('animate__heartBeat');
                        },2000)
                    }
                },
                error:function () {

                }
            })
        })
        $(".help_nextlevel_4").click(function () {
            $.ajax({
                type:'POST',
                url:'ajax_quiz/help/',
                data:{'user':'user','type':'3','question':question,'ans':answer},
                success:function (response) {
                    if (response){
                        win();
                    }else{
                        $(".user_heart_img").addClass('animate__animated');
                        $(".user_heart_img").addClass('animate__heartBeat');
                        setTimeout(function () {
                            $(".user_heart_img").removeClass('animate__animated');
                            $(".user_heart_img").removeClass('animate__heartBeat');
                        },2000)
                    }
                },
                error:function () {

                }
            })
        })
    }


    function win(){
        $.ajax({
            type:'POST',
            url:'ajax_quiz/complete/',
            data:{'user':'user'},
            success:function (response) {
                if (response){
                    var s = response.split("/");
                    $("#user_place_success").text(s[1]);
                    $("#user_level_success").text(s[0]);
                    $("#success_match").show('fade');
                    win_val = true;
                }
            },
            error:function () {

            }
        })
    }
    function ans(question,type){
        $.ajax({
            type:'POST',
            url:'ajax_quiz/update_answer/',
            data:{'user':'user','question':question,'type':type},
            success:function (response) {
            },
            error:function () {
            }
        })
    }

    $('.timer1').circularCountDown({
        size: 200,
        borderSize:20,
        colorCircle: '#696bd4',
        background: 'transparent',
        fontFamily: 'sans-serif',
        fontColor: '#696bd4',
        fontSize: 20,
        delayToFadeIn: 0,
        delayToFadeOut: 0,
        reverseLoading: true,
        reverseRotation: true,
        duration: {
            hours: 0,
            minutes: 0,
            seconds: 3
        },
        beforeStart: function(){},
        end: function(){
            $("#count_down").hide('fade');
            $('.timer').circularCountDown({
                size: 60,
                borderSize:8,
                colorCircle: '#696bd4',
                background: 'transparent',
                fontFamily: 'sans-serif',
                fontColor: '#696bd4',
                fontSize: 18,
                delayToFadeIn: 0,
                delayToFadeOut: 0,
                reverseLoading: false,
                reverseRotation: false,
                duration: {
                    hours: 0,
                    minutes: 0,
                    seconds: 40
                },
                beforeStart: function(){},
                end: function(){
                    if (!win_val){
                        $("#fail_match").show('fade');
                        setTimeout(function () {
                            retry();
                        },3000)
                    }
                }
            });

        }
    });
})
