$(document).ready(function () {

    $("#load_div").show();
    var height = $(window).height();
    var content = $("#user_content").height();
    var margin = (height-content)/2;
    if (content > height){
        $("#user_content").css({
            'marginTop':'50px',
            'marginBottom':'50px'
        })
    }else{
        $("#user_content").css({
            'marginTop':margin
        })
    }
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
    $("#add_coin").click(function () {
        $("#add_coin_div").show('fade');
    })

    $("#close_add_heart").click(function () {
        $("#add_heart_div").hide('fade');
    })
    $("#add_heart").click(function () {
        $("#add_heart_div").show('fade');
    })


    $(".logout").click(function () {
        $.ajax({
            type:'POST',
            url: 'ajax_register/logout/',
            data: {'user':'user'},
            success:function (response) {
                window.location=window.location;
            },
            error:function () {

            }
        })
    })
    get_info();
    function get_info() {
        $.ajax({
            type:'POST',
            url:'ajax_register/get_user_info/',
            data:{'user':'user'},
            success:function (response) {
                if (response != false){
                    setTimeout(function () {
                        $("#load_div").hide('fade');
                        $("#user_content").addClass('animate__animated');
                        $("#user_content").addClass('animate__zoomInDown');
                    },2000)
                    var s = response.split("*");
                    $("#user_level").text(s[0]);
                    $("#user_coin").text(s[1]);
                    $("#user_heart").text(s[2]);
                    $("#correct_answer_user").text(s[3]);
                    $("#mistake_answer_user").text(s[4]);
                    $("#phone_user").text(s[5]);
                    $("#email_user").text(s[6]);
                    $("#all_user").text(s[7]);
                    $("#place_user").text(s[8]);
                }
            },
            error:function () {

            }
        })
    }


    $.ajax({
        type:'POST',
        url:'ajax_quiz/get_setting/',
        data:{'is_admin':'admin'},
        success:function (response) {
            if (response != false){
                var arr = response.split("*");

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
})
