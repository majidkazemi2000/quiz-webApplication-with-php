$(document).ready(function () {

    $("#header").addClass('animate__animated');
    $("#header").addClass('animate__zoomInDown');

    $('#arrow').click(function(){
        $('html, body').animate({scrollTop : 700},500);
        return false;
    });


    $(window).scroll(function() {
        var height = $(window).scrollTop();
        if (height >= 650){
            $(".match_item_right").addClass('animate__animated');
            $(".match_item_right").addClass('animate__swing');
            $(".match_item_left").addClass('animate__animated');
            $(".match_item_left").addClass('animate__swing');
        }
    });
    $("#info_lottery").hover(function () {
        $("#skin_lottery").show('slide');
    },function () {
        $("#skin_lottery").hide('slide');
    })
    $("#info_place").hover(function () {
        $("#skin_place").show('slide');
    },function () {
        $("#skin_place").hide('slide');
    })

    var window_height = $(window).height();
    var margin = (window_height-$("#select_div").height())/2;
    $("#select_div").css({
        'marginTop':margin
    })
    $("#start_match").click(function () {
        $("#page").css({
            'height': '300%',
            'width': '300%',
            'bottom':'-50%',
            'left':'-100%',
            'right':'0',
        })
        setTimeout(function () {
            $("#select_div").show('fade');
        },400)
    })
    $("#close_select").hover(function () {
        $("#close_select").attr("src","static/images/close2.png");
    },function () {
        $("#close_select").attr("src","static/images/close1.png");
    })

    $("#close_select").click(function () {
        $("#select_div").hide('fade');
        setTimeout(function () {
            $("#page").css({
                'width': '0',
                'height': '0',
                'bottom': '0',
                'left': '50%'
            })
        },200)
    })

    $(".match_item").click(function () {
        $(this).css({
            'backgroundColor':'black'
        })
        var href = $(this).attr("href");

    })

    $("#users").hover(function () {
        $("#top").css({
            'right':'0'
        })
        $("#bottom").css({
            'right':'0'
        })
        $("#left").css({
            'top':'0'
        })
        $("#right").css({
            'top':'0'
        })
    },function () {
        $("#top").css({
            'right':'100px'
        })
        $("#bottom").css({
            'right':'100px'
        })
        $("#left").css({
            'top':'40px'
        })
        $("#right").css({
            'top':'40px'
        })
    })

    $("#go_to_register").click(function () {
        $("#go_to_login_div").css({
            'height':'140px',
            'bottom':'0'
        })
    })



    get_category();
    function get_category() {
        $.ajax({
            type:'POST',
            url:'ajax_quiz/get_category/',
            data:{'user':'user'},
            success:function (response) {
                if (response != false){
                    $("#category_list").html(response);


                    $(".match_item").click(function () {
                        var id = $(this).attr("href");
                        $.ajax({
                            type: 'POST',
                            url: 'ajax_quiz/start_match/',
                            data: {'user':'user','category':id},
                            success:function (response) {
                                if (response){
                                    window.open('http://localhost/quiz/contest','window','toolbar=no, menubar=no, resizable=yes');
                                }
                            },
                            error:function () {

                            }
                        })
                    })
                }
            },
            error:function () {

            }

        })
    }
})