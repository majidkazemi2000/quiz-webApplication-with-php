$(document).ready(function () {
    function just_persian(str) {
        var p = /^[\u0600-\u06FF\s]+$/;
        if (!p.test(str)) {
            return false
        }
        return true;
    }


    $("#analyse_icon").click(function () {
        $("#delimiter").css({
            'left':'10px'
        })
        $("#analyse_div").show('fade');
        $("#user_div").hide();
        $("#setting_div").hide();
        $("#lottery_div").hide();
        $("#category_div").hide();
        $("#question_div").hide();
    })
    $("#user_icon").click(function () {
        $("#delimiter").css({
            'left':'165px'
        })
        $("#user_div").show('fade');
        $("#analyse_div").hide();
        $("#setting_div").hide();
        $("#lottery_div").hide();
        $("#category_div").hide();
        $("#question_div").hide();
    })
    $("#lottery_icon").click(function () {
        $("#delimiter").css({
            'left':'320px'
        })
        $("#lottery_div").show('fade');
        $("#analyse_div").hide();
        $("#user_div").hide();
        $("#setting_div").hide();
        $("#category_div").hide();
        $("#question_div").hide();
    })
    $("#question_icon").click(function () {
        $("#delimiter").css({
            'left':'475px'
        })
        $("#question_div").show('fade');
        $("#analyse_div").hide();
        $("#user_div").hide();
        $("#setting_div").hide();
        $("#lottery_div").hide();
        $("#category_div").hide();
    })
    $("#category_icon").click(function () {
        $("#delimiter").css({
            'left':'630px'
        })
        $("#category_div").show('fade');
        $("#analyse_div").hide();
        $("#user_div").hide();
        $("#setting_div").hide();
        $("#lottery_div").hide();
        $("#question_div").hide();
    })
    $("#setting_icon").click(function () {
        $("#delimiter").css({
            'left':'785px'
        })
        $("#setting_div").show('fade');
        $("#analyse_div").hide();
        $("#user_div").hide();
        $("#lottery_div").hide();
        $("#category_div").hide();
        $("#question_div").hide();
    })

    $(".close_icon").hover(function () {
        $(".close_icon").attr("src","static/images/close2.png");
    },function () {
        $(".close_icon").attr("src","static/images/close1.png");
    })

    $("#search_user_image").click(function () {
        $("#search_user_div").show('fade');
    })
    $("#close_search_user").click(function () {
        $("#search_user_div").hide('fade');
    })
    $("#search_question_image").click(function () {
        $("#search_question_div").show('fade');
    })
    $("#close_search_question").click(function () {
        $("#search_question_div").hide('fade');
    })
    $(".detail_question_icon").click(function () {
        $("#detail_question_div").show('fade');
    })
    $("#close_detail_question").click(function () {
        $("#detail_question_div").hide('fade');
    })

    $("#add_question_image").click(function () {
        $("#add_question_div").show('fade');
    })
    $("#close_add_question").click(function () {
        $("#add_question_div").hide('fade');
    })

    $("#add_category_image").click(function () {
        $("#add_category_div").show('fade');
    })
    $("#close_add_category").click(function () {
        $("#add_category_div").hide('fade');
    })

    $("#lottery_image").click(function () {
        $("#lottery_div_dialog").show('fade');
    })
    $("#close_lottery").click(function () {
        $("#lottery_div_dialog").hide('fade');
    })

    $(".edit_question_icon").click(function () {
        $("#edit_question_div").show('fade');
    })
    $("#close_edit_question").click(function () {
        $("#edit_question_div").hide('fade');
    })

    $(".edit_category_icon").click(function () {
        $("#edit_category_div").show('fade');
    })
    $("#close_edit_category").click(function () {
        $("#edit_category_div").hide('fade');
    })

    $(".detail_user_icon").click(function () {
        $("#detail_user_div").show('fade');
    })
    $("#close_detail_user").click(function () {
        $("#detail_user_div").hide('fade');
    })
    $(".detail_lottery_icon").click(function () {
        $("#detail_lottery_div").show('fade');
    })
    $("#close_detail_lottery").click(function () {
        $("#detail_lottery_div").hide('fade');
    })

    fill_select_category();
    function fill_select_category(){
        $.ajax({
            type:'POST',
            url:'ajax_admin/get_categorys_select/',
            data:{'is_admin':'admin'},
            success:function (response) {
                if (response != false){
                    $("#category_question_add").html(response);
                    $("#category_question_edit").html(response);
                }
            },
            error:function () {

            }
        })
    }

    $("#search_question_button").click(function () {
        var search_item = $("#search_question_item").val();
        var search_text = $("#search_question_text").val();
        $("#search_user_text").val("");
        if ((search_item == "content" || search_item == "correct_choose" || search_item == "level" || search_item == "category" || search_item == "status") && search_text != ""){
            $("#search_question_div").hide();
            search_question(search_item,search_text,1);
        }
    })
    $("#search_user").click(function () {
        var search_item = $("#search_user_item").val();
        var search_text = $("#search_user_text").val();
        $("#search_user_text").val("");

        if ((search_item == "name" || search_item == "phone" || search_item == "email" || search_item == "level" || search_item == "ip") && search_text != ""){
            $("#search_user_div").hide();
            search_user(search_item,search_text,1);
        }
    })
    $("#add_question_button").click(function () {
        var content = $("#content_question_add").val();
        var files = $('#file_question_add')[0].files[0];
        var choose1 = $("#choose_1_question_add").val();
        var choose2 = $("#choose_2_question_add").val();
        var choose3 = $("#choose_3_question_add").val();
        var choose4 = $("#choose_4_question_add").val();
        var correct_choose = $("#correct_choose_question_add").val();
        var category = $("#category_question_add").val();
        var level = $("#level_question_add").val();
        var status = $("#status_question_add").val();

        var fd = new FormData();

        fd.append('is_admin','admin');
        fd.append('content_question_add',content);
        fd.append('choose_1_question_add',choose1);
        fd.append('choose_2_question_add',choose2);
        fd.append('choose_3_question_add',choose3);
        fd.append('choose_4_question_add',choose4);
        fd.append('correct_choose_question_add',correct_choose);
        fd.append('category_question_add',category);
        fd.append('level_question_add',level);
        fd.append('status_question_add',status);
        fd.append('file_question_add',files);


        $.ajax({
            url: 'ajax_admin/add_question/',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
                if (response){
                    $("#content_question_add").val("");
                    $('#file_question_add').val("");
                    $("#choose_1_question_add").val("");
                    $("#choose_2_question_add").val("");
                    $("#choose_3_question_add").val("");
                    $("#choose_4_question_add").val("");
                    $("#correct_choose_question_add").val("");
                    $("#level_question_add").val("1");
                    $("#status_question_add").val("1");

                    $("#add_question_div").hide();
                    get_question(1);
                    $("#success_text").text("سوال مورد نظر اضافه شد");
                    $("#success_collapse").css({
                        'bottom':'0',
                        'height':'100px'
                    })
                    setTimeout(function () {
                        $("#success_collapse").css({
                            'bottom':'-1px',
                            'height':'0'
                        })
                    },2000)
                }else{
                    $("#error_text").text("خطایی رخ داده است");
                    $("#error_collapse").css({
                        'bottom':'0',
                        'height':'100px'
                    })
                    setTimeout(function () {
                        $("#error_collapse").css({
                            'bottom':'-8px',
                            'height':'0'
                        })
                    },2000)
                }
            },
        });
    })
    $("#add_category_button").click(function () {
        var name = $("#name_category_add").val();
        var fd = new FormData();
        var files = $('#file_category_add')[0].files[0];
        fd.append('file_category_add',files);
        fd.append('name_category_add',name);
        fd.append('is_admin',"admin");
        $.ajax({
            url: 'ajax_admin/add_category/',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
                if (response){
                    $("#name_category_add").val("");
                    $("#file_category_add").val("");
                    get_category(1);
                    $("#add_category_div").hide();
                    $("#success_text").text("دسته بندی مورد نظر اضافه شد");
                    $("#success_collapse").css({
                        'bottom':'0',
                        'height':'100px'
                    })
                    setTimeout(function () {
                        $("#success_collapse").css({
                            'bottom':'-1px',
                            'height':'0'
                        })
                    },2000)


                }else{
                    $("#error_text").text("خطایی رخ داده است");
                    $("#error_collapse").css({
                        'bottom':'0',
                        'height':'100px'
                    })
                    setTimeout(function () {
                        $("#error_collapse").css({
                            'bottom':'-8px',
                            'height':'0'
                        })
                    },2000)
                }
            },
        });
    })

    get_question(1);
    get_user(1);
    get_category(1);
    get_lottery(1);

    get_setting();

    function get_setting() {
        $("#load_div").show();
        $.ajax({
            type:'POST',
            url:'ajax_admin/get_all_setting/',
            data:{'is_admin':'admin'},
            success:function (response) {
                $("#load_div").hide('fade');
                if (response){
                    var s = response.split("*");
                    $("#address_setting").val(s[0]);
                    $("#phone_setting").val(s[1]);
                    $("#delete_one_choose_setting").val(s[2]);
                    $("#delete_two_choose_setting").val(s[3]);
                    $("#go_to_next_level_setting").val(s[4]);
                    $("#coin_100").val(s[5]);
                    $("#coin_500").val(s[6]);
                    $("#coin_1000").val(s[7]);
                    $("#coin_2000").val(s[8]);
                    $("#heart_3").val(s[9]);
                    $("#heart_5").val(s[10]);
                    $("#heart_10").val(s[11]);
                    $("#heart_20").val(s[12]);
                }
            },
            error:function () {

            }
        })
    }

    function get_category(page=1) {
        $("#load_div").show();
        $.ajax({
            type:'POST',
            url:'ajax_admin/get_all_category/',
            data:{'is_admin':'admin','page':page},
            success:function (response) {
                $("#load_div").hide('fade');
                $("#category_page_content").html("");
                if (response){
                    var s = response.split("*");
                    var number_of_category = parseInt(s[0]);
                    $("#error_category").hide();
                    $("#category_list").html(s[1]);
                    if (number_of_category > 1){
                        $("#category_page_frame").show();
                        for (var i = number_of_category ; i >= 1 ; i--){
                            if (page == i){
                                $("#category_page_content").append("<p class='category_page' style='background-color: gray;' href='"+i+"'>"+i+"</p>");
                            }else{
                                $("#category_page_content").append("<p class='category_page' href='"+i+"'>"+i+"</p>");
                            }
                        }


                        $(".category_page").click(function () {
                            var p = $(this).attr("href");
                            if (p != "" && !isNaN(p) && p.length < 12){
                                get_category(p);
                            }
                        })
                    }else{
                        $("#category_page_frame").hide();
                        $("#category_page_content").html("");
                    }
                }else{
                    $("#category_list").html("");
                    $("#category_page_frame").hide();
                    $("#error_category").show('fade');
                    $("#category_page_content").html("");
                }

                $(".edit_category_icon").click(function () {
                    var id = $(this).attr("href");
                    if (id != "" && !isNaN(id) && id.length < 12){
                        $.ajax({
                            type:'POST',
                            url:'ajax_admin/get_category/',
                            data:{'is_admin':'admin','id':id},
                            success:function (response) {
                                if (response != false){
                                    $("#name_category_edit").val(response);
                                    $("#edit_category_div").show('fade');

                                    $("#edit_category_button").click(function () {
                                        var name_cat = $("#name_category_edit").val();
                                        $.ajax({
                                            type:'POST',
                                            url:'ajax_admin/edit_category/',
                                            data:{'is_admin':'admin','name':name_cat,'id':id},
                                            success:function (response) {
                                                if (response){
                                                    $("#edit_category_div").hide();
                                                    get_category(1);
                                                    $("#success_text").text("دسته بندی مورد نظر ویرایش شد");
                                                    $("#success_collapse").css({
                                                        'bottom':'0',
                                                        'height':'100px'
                                                    })
                                                    setTimeout(function () {
                                                        $("#success_collapse").css({
                                                            'bottom':'-1px',
                                                            'height':'0'
                                                        })
                                                    },2000)
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
                $(".delete_category_icon").click(function () {
                    var id = $(this).attr("href");
                    if (id != "" && !isNaN(id) && id.length < 12){
                        $.ajax({
                            type:'POST',
                            url:'ajax_admin/delete_category/',
                            data:{'is_admin':'admin','id':id},
                            success:function (response) {
                                if (response != false){
                                    get_category(1);
                                    $("#success_text").text("دسته بندی مورد نظر حذف شد");
                                    $("#success_collapse").css({
                                        'bottom':'0',
                                        'height':'100px'
                                    })
                                    setTimeout(function () {
                                        $("#success_collapse").css({
                                            'bottom':'-1px',
                                            'height':'0'
                                        })
                                    },2000)
                                }
                            },
                            error:function () {

                            }
                        })
                    }
                })
            },
            error:function () {
                $("#load_div").hide('fade');
                $("#category_page_frame").hide();
                $("#error_category").show('fade');
                $("#category_page_content").html("");
            }
        })
    }
    function search_question(search_item,search_text,page) {
        $("#load_div").show();
        $.ajax({
            type:'POST',
            url:'ajax_admin/search_question/',
            data:{'is_admin':'admin','page':page,'search_item':search_item,'search_text':search_text},
            success:function (response) {
                $("#load_div").hide('fade');
                $("#question_page_content").html("");
                if (response){
                    var s = response.split("*");
                    var number_of_page = parseInt(s[0]);
                    $("#error_question").hide();
                    $("#question_list").html(s[1]);
                    if (number_of_page > 1){
                        $("#question_page_frame").show();
                        for (var i = number_of_page ; i >= 1 ; i--){
                            if (page == i){
                                $("#question_page_content").append("<p class='question_page' style='background-color: gray;' href='"+i+"'>"+i+"</p>");
                            }else{
                                $("#question_page_content").append("<p class='question_page' href='"+i+"'>"+i+"</p>");
                            }
                        }

                        $(".question_page").click(function () {
                            var p = $(this).attr("href");
                            if (p != "" && !isNaN(p) && p.length < 12){
                                search_question(search_item,search_text,p);
                            }
                        })
                    }else{
                        $("#question_page_frame").hide();
                        $("#question_page_content").html("");
                    }



                    $(".delete_question_icon").click(function () {
                        var id = $(this).attr("href");
                        if (id != "" && !isNaN(id) && id.length < 12){
                            $.ajax({
                                type:'POST',
                                url:'ajax_admin/delete_question/',
                                data:{'is_admin':'admin','id':id},
                                success:function (response) {
                                    if (response != false){
                                        get_question(1);
                                        $("#success_text").text("سوال مورد نظر حذف شد");
                                        $("#success_collapse").css({
                                            'bottom':'0',
                                            'height':'100px'
                                        })
                                        setTimeout(function () {
                                            $("#success_collapse").css({
                                                'bottom':'-1px',
                                                'height':'0'
                                            })
                                        },2000)
                                    }
                                },
                                error:function () {

                                }
                            })
                        }
                    })
                    $(".edit_question_icon").click(function () {
                        var id = $(this).attr("href");

                        if (id != "" && !isNaN(id) && id.length < 12){
                            $.ajax({
                                type:'POST',
                                url:'ajax_admin/get_question/',
                                data:{'is_admin':'admin','id':id},
                                success:function (response) {
                                    if (response != false){
                                        var s = response.split("*");
                                        $("#content_question_edit").val(s[1]);
                                        $("#choose_1_question_edit").val(s[2]);
                                        $("#choose_2_question_edit").val(s[3]);
                                        $("#choose_3_question_edit").val(s[4]);
                                        $("#choose_4_question_edit").val(s[5]);
                                        $("#correct_choose_question_edit").val(s[6]);
                                        $("#category_question_edit").val(s[7]);
                                        $("#level_category_edit").val(s[14]);
                                        $("#status_question_edit").val(s[13]);

                                        $("#edit_question_div").show('fade');

                                        $("#edit_question_button").click(function () {

                                            var content = $("#content_question_edit").val();
                                            var files = $('#file_question_edit')[0].files[0];
                                            var choose1 = $("#choose_1_question_edit").val();
                                            var choose2 = $("#choose_2_question_edit").val();
                                            var choose3 = $("#choose_3_question_edit").val();
                                            var choose4 = $("#choose_4_question_edit").val();
                                            var correct_choose = $("#correct_choose_question_edit").val();
                                            var category = $("#category_question_edit").val();
                                            var level = $("#level_category_edit").val();
                                            var status = $("#status_question_edit").val();

                                            var fd = new FormData();

                                            fd.append('is_admin','admin');
                                            fd.append('id',id);
                                            fd.append('content_question_edit',content);
                                            fd.append('choose_1_question_edit',choose1);
                                            fd.append('choose_2_question_edit',choose2);
                                            fd.append('choose_3_question_edit',choose3);
                                            fd.append('choose_4_question_edit',choose4);
                                            fd.append('correct_choose_question_edit',correct_choose);
                                            fd.append('category_question_edit',category);
                                            fd.append('level_question_edit',level);
                                            fd.append('status_question_edit',status);
                                            fd.append('file_question_edit',files);

                                            $.ajax({
                                                url: 'ajax_admin/edit_question/',
                                                type: 'post',
                                                data: fd,
                                                contentType: false,
                                                processData: false,
                                                success: function(response){
                                                    if (response){
                                                        $("#edit_question_div").hide();
                                                        get_question(1);
                                                        $("#success_text").text("سوال مورد نظر ویرایش شد");
                                                        $("#success_collapse").css({
                                                            'bottom':'0',
                                                            'height':'100px'
                                                        })
                                                        setTimeout(function () {
                                                            $("#success_collapse").css({
                                                                'bottom':'-1px',
                                                                'height':'0'
                                                            })
                                                            window.location=window.location;
                                                        },2000)
                                                    }
                                                },
                                            });
                                        })
                                    }
                                },
                                error:function () {

                                }
                            })
                        }
                    })
                    $(".detail_question_icon").click(function () {
                        var id = $(this).attr("href");
                        if (id != "" && !isNaN(id) && id.length < 12){
                            $.ajax({
                                type:'POST',
                                url:'ajax_admin/get_question/',
                                data:{'is_admin':'admin','id':id},
                                success:function (response) {
                                    if (response != false){
                                        var s = response.split("*");
                                        $("#img_detail_question").attr("src",s[0]);
                                        $("#content_detail_question").text(s[1]);
                                        $("#choose_1_detail_question").text(s[2]);
                                        $("#choose_2_detail_question").text(s[3]);
                                        $("#choose_3_detail_question").text(s[4]);
                                        $("#choose_4_detail_question").text(s[5]);
                                        $("#correct_choose_detail_question").text(s[6]);
                                        $("#category_detail_question").text(s[15]);
                                        $("#level_detail_question").text(s[8]);
                                        $("#level_detail_question").css({'backgroundColor':s[10]});
                                        $("#correct_answer_detail_question").text(s[11]);
                                        $("#mistake_answer_detail_question").text(s[12]);
                                        $("#status_detail_question").text(s[9]);

                                        $("#detail_question_div").show('fade');




                                    }
                                },
                                error:function () {

                                }
                            })
                        }
                    })
                }else{
                    $("#question_list").html("");
                    $("#question_page_frame").hide();
                    $("#error_question").show('fade');
                    $("#question_page_content").html("");
                }
            },
            error:function () {
                $("#load_div").hide('fade');
                $("#question_page_frame").hide();
                $("#error_question").show('fade');
                $("#question_page_content").html("");
            }
        })
    }
    function get_user(page=1) {
        $("#load_div").show();
        $.ajax({
            type:'POST',
            url:'ajax_admin/get_all_user/',
            data:{'is_admin':'admin','page':page},
            success:function (response) {
                $("#load_div").hide('fade');
                $("#user_page_content").html("");
                if (response){
                    var s = response.split("*");
                    var number_of_user = parseInt(s[0]);
                    $("#error_user").hide();
                    $("#user_list").html(s[1]);
                    if (number_of_user > 1){
                        $("#user_page_frame").show();
                        for (var i = number_of_user ; i >= 1 ; i--){
                            if (page == i){
                                $("#user_page_content").append("<p class='user_page' style='background-color: gray;' href='"+i+"'>"+i+"</p>");
                            }else{
                                $("#user_page_content").append("<p class='user_page' href='"+i+"'>"+i+"</p>");
                            }
                        }

                        $(".user_page").click(function () {
                            var p = $(this).attr("href");
                            if (p != "" && !isNaN(p) && p.length < 12){
                                get_user(p);
                            }
                        })
                    }else{
                        $("#user_page_frame").hide();
                        $("#user_page_content").html("");
                    }

                    $(".detail_user_icon").click(function () {
                        var id = $(this).attr("href");
                        if (id != "" && !isNaN(id) && id.length < 12){
                            $.ajax({
                                type:'POST',
                                url:'ajax_admin/get_user/',
                                data:{'is_admin':'admin','id':id},
                                success:function (response) {
                                    if (response != false){
                                        var s = response.split("*");
                                        $("#correct_answer_detail_user").text(s[0]);
                                        $("#mistake_answer_detail_user").text(s[1]);
                                        $("#email_detail_user").text(s[2]);
                                        $("#phone_detail_user").text(s[3]);
                                        $("#ip_detail_user").text(s[4]);
                                        $("#time_register_detail_user").text(s[5]);
                                        $("#detail_user_div").show('fade');
                                    }
                                },
                                error:function () {

                                }
                            })
                        }
                    })
                    $(".delete_user_icon").click(function () {
                        var id = $(this).attr("href");
                        if (id != "" && !isNaN(id) && id.length < 12){
                            $.ajax({
                                type:'POST',
                                url:'ajax_admin/delete_user/',
                                data:{'is_admin':'admin','id':id},
                                success:function (response) {
                                    if (response != false){
                                        get_user(1);
                                        $("#success_text").text("کاربر مورد نظر حذف شد");
                                        $("#success_collapse").css({
                                            'bottom':'0',
                                            'height':'100px'
                                        })
                                        setTimeout(function () {
                                            $("#success_collapse").css({
                                                'bottom':'-1px',
                                                'height':'0'
                                            })
                                        },2000)
                                    }
                                },
                                error:function () {

                                }
                            })
                        }
                    })

                }else{
                    $("#user_list").html("");
                    $("#load_div").hide('fade');
                    $("#user_page_frame").hide();
                    $("#error_user").show('fade');
                    $("#user_page_content").html("");
                }
            },
            error:function () {
                $("#user_page_frame").hide();
                $("#error_user").show('fade');
                $("#user_page_content").html("");
            }
        })
    }
    function get_question(page = 1) {
        $("#load_div").show();
        $.ajax({
            type:'POST',
            url:'ajax_admin/get_all_question/',
            data:{'is_admin':'admin','page':page},
            success:function (response) {
                $("#load_div").hide('fade');
                $("#question_page_content").html("");
                if (response){
                    var s = response.split("*");
                    var number_of_page = parseInt(s[0]);
                    $("#error_question").hide();
                    $("#question_list").html(s[1]);
                    if (number_of_page > 1){
                        $("#question_page_frame").show();
                        for (var i = number_of_page ; i >= 1 ; i--){
                            if (page == i){
                                $("#question_page_content").append("<p class='question_page' style='background-color: gray;' href='"+i+"'>"+i+"</p>");
                            }else{
                                $("#question_page_content").append("<p class='question_page' href='"+i+"'>"+i+"</p>");
                            }
                        }
                        $(".question_page").click(function () {
                            var p = $(this).attr("href");
                            if (p != "" && !isNaN(p) && p.length < 12){
                                get_question(p);
                            }
                        })
                    }else{
                        $("#question_page_frame").hide();
                        $("#question_page_content").html("");
                    }

                    $(".delete_question_icon").click(function () {
                        var id = $(this).attr("href");
                        if (id != "" && !isNaN(id) && id.length < 12){
                            $.ajax({
                                type:'POST',
                                url:'ajax_admin/delete_question/',
                                data:{'is_admin':'admin','id':id},
                                success:function (response) {
                                    if (response != false){
                                        get_question(1);
                                        $("#success_text").text("سوال مورد نظر حذف شد");
                                        $("#success_collapse").css({
                                            'bottom':'0',
                                            'height':'100px'
                                        })
                                        setTimeout(function () {
                                            $("#success_collapse").css({
                                                'bottom':'-1px',
                                                'height':'0'
                                            })
                                        },2000)
                                    }
                                },
                                error:function () {

                                }
                            })
                        }
                    })

                    $(".edit_question_icon").click(function () {
                        var id = $(this).attr("href");

                        if (id != "" && !isNaN(id) && id.length < 12){
                            $.ajax({
                                type:'POST',
                                url:'ajax_admin/get_question/',
                                data:{'is_admin':'admin','id':id},
                                success:function (response) {
                                    if (response != false){
                                        var s = response.split("*");
                                        $("#content_question_edit").val(s[1]);
                                        $("#choose_1_question_edit").val(s[2]);
                                        $("#choose_2_question_edit").val(s[3]);
                                        $("#choose_3_question_edit").val(s[4]);
                                        $("#choose_4_question_edit").val(s[5]);
                                        $("#correct_choose_question_edit").val(s[6]);
                                        $("#category_question_edit").val(s[7]);
                                        $("#level_category_edit").val(s[14]);
                                        $("#status_question_edit").val(s[13]);

                                        $("#edit_question_div").show('fade');

                                        $("#edit_question_button").click(function () {

                                            var content = $("#content_question_edit").val();
                                            var files = $('#file_question_edit')[0].files[0];
                                            var choose1 = $("#choose_1_question_edit").val();
                                            var choose2 = $("#choose_2_question_edit").val();
                                            var choose3 = $("#choose_3_question_edit").val();
                                            var choose4 = $("#choose_4_question_edit").val();
                                            var correct_choose = $("#correct_choose_question_edit").val();
                                            var category = $("#category_question_edit").val();
                                            var level = $("#level_category_edit").val();
                                            var status = $("#status_question_edit").val();

                                            var fd = new FormData();

                                            fd.append('is_admin','admin');
                                            fd.append('id',id);
                                            fd.append('content_question_edit',content);
                                            fd.append('choose_1_question_edit',choose1);
                                            fd.append('choose_2_question_edit',choose2);
                                            fd.append('choose_3_question_edit',choose3);
                                            fd.append('choose_4_question_edit',choose4);
                                            fd.append('correct_choose_question_edit',correct_choose);
                                            fd.append('category_question_edit',category);
                                            fd.append('level_question_edit',level);
                                            fd.append('status_question_edit',status);
                                            fd.append('file_question_edit',files);

                                            $.ajax({
                                                url: 'ajax_admin/edit_question/',
                                                type: 'post',
                                                data: fd,
                                                contentType: false,
                                                processData: false,
                                                success: function(response){
                                                    if (response){
                                                        $("#edit_question_div").hide();
                                                        get_question(1);
                                                        $("#success_text").text("سوال مورد نظر ویرایش شد");
                                                        $("#success_collapse").css({
                                                            'bottom':'0',
                                                            'height':'100px'
                                                        })
                                                        setTimeout(function () {
                                                            $("#success_collapse").css({
                                                                'bottom':'-1px',
                                                                'height':'0'
                                                            })
                                                            window.location=window.location;
                                                        },2000)
                                                    }
                                                },
                                            });
                                        })
                                    }
                                },
                                error:function () {

                                }
                            })
                        }
                    })

                    $(".detail_question_icon").click(function () {
                        var id = $(this).attr("href");
                        if (id != "" && !isNaN(id) && id.length < 12){
                            $.ajax({
                                type:'POST',
                                url:'ajax_admin/get_question/',
                                data:{'is_admin':'admin','id':id},
                                success:function (response) {
                                    if (response != false){
                                        var s = response.split("*");
                                        $("#img_detail_question").attr("src",s[0]);
                                        $("#content_detail_question").text(s[1]);
                                        $("#choose_1_detail_question").text(s[2]);
                                        $("#choose_2_detail_question").text(s[3]);
                                        $("#choose_3_detail_question").text(s[4]);
                                        $("#choose_4_detail_question").text(s[5]);
                                        $("#correct_choose_detail_question").text(s[6]);
                                        $("#category_detail_question").text(s[15]);
                                        $("#level_detail_question").text(s[8]);
                                        $("#level_detail_question").css({'backgroundColor':s[10]});
                                        $("#correct_answer_detail_question").text(s[11]);
                                        $("#mistake_answer_detail_question").text(s[12]);
                                        $("#status_detail_question").text(s[9]);
                                        $("#detail_question_div").show('fade');
                                    }
                                },
                                error:function () {

                                }
                            })
                        }
                    })

                }else{
                    $("#question_page_frame").hide();
                    $("#error_question").show('fade');
                    $("#question_page_content").html("");
                    $("#question_list").html("");
                }
            },
            error:function () {
                $("#load_div").hide('fade');
                $("#question_page_frame").hide();
                $("#error_question").show('fade');
                $("#question_page_content").html("");
            }
        })
    }
    function search_user(search_item,search_text,page = 1) {
        $("#user_list").html("");
        $("#user_page_content").html("");
        $("#load_div").show();
        $.ajax({
            type:'POST',
            url:'ajax_admin/search_user/',
            data:{'is_admin':'admin','page':page,'search_item':search_item,'search_text':search_text},
            success:function (response) {
                $("#load_div").hide('fade');
                $("#user_page_content").html("");
                if (response){
                    var s = response.split("*");
                    var number_of_user = parseInt(s[0]);
                    $("#error_user").hide();
                    $("#user_list").html(s[1]);
                    if (number_of_user > 1){
                        $("#user_page_frame").show();
                        for (var i = number_of_user ; i >= 1 ; i--){
                            if (page == i){
                                $("#user_page_content").append("<p class='user_page' style='background-color: gray;' href='"+i+"'>"+i+"</p>");
                            }else{
                                $("#user_page_content").append("<p class='user_page' href='"+i+"'>"+i+"</p>");
                            }
                        }

                        $(".user_page").click(function () {
                            var p = $(this).attr("href");
                            if (p != "" && !isNaN(p) && p.length < 12){
                                search_user(search_item,search_text,p);
                            }
                        })
                    }else{
                        $("#user_page_frame").hide();
                        $("#user_page_content").html("");
                    }

                    $(".detail_user_icon").click(function () {
                        var id = $(this).attr("href");
                        if (id != "" && !isNaN(id) && id.length < 12){
                            $.ajax({
                                type:'POST',
                                url:'ajax_admin/get_user/',
                                data:{'is_admin':'admin','id':id},
                                success:function (response) {
                                    if (response != false){
                                        var s = response.split("*");
                                        $("#correct_answer_detail_user").text(s[0]);
                                        $("#mistake_answer_detail_user").text(s[1]);
                                        $("#email_detail_user").text(s[2]);
                                        $("#phone_detail_user").text(s[3]);
                                        $("#ip_detail_user").text(s[4]);
                                        $("#time_register_detail_user").text(s[5]);
                                        $("#detail_user_div").show('fade');
                                    }
                                },
                                error:function () {

                                }
                            })
                        }
                    })
                    $(".delete_user_icon").click(function () {
                        var id = $(this).attr("href");
                        if (id != "" && !isNaN(id) && id.length < 12){
                            $.ajax({
                                type:'POST',
                                url:'ajax_admin/delete_user/',
                                data:{'is_admin':'admin','id':id},
                                success:function (response) {
                                    if (response != false){
                                        get_user(1);
                                        $("#success_text").text("کاربر مورد نظر حذف شد");
                                        $("#success_collapse").css({
                                            'bottom':'0',
                                            'height':'100px'
                                        })
                                        setTimeout(function () {
                                            $("#success_collapse").css({
                                                'bottom':'-1px',
                                                'height':'0'
                                            })
                                        },2000)
                                    }
                                },
                                error:function () {

                                }
                            })
                        }
                    })
                }else{
                    $("#load_div").hide('fade');
                    $("#user_page_frame").hide();
                    $("#error_user").show('fade');
                    $("#user_page_content").html("");
                    $("#user_list").html("");
                }
            },
            error:function () {
                $("#user_page_frame").hide();
                $("#error_user").show('fade');
                $("#user_page_content").html("");
            }
        })
    }

    function get_lottery(page=1) {
        $("#load_div").show();
        $.ajax({
            type:'POST',
            url:'ajax_admin/get_all_lottery/',
            data:{'is_admin':'admin','page':page},
            success:function (response) {
                $("#load_div").hide('fade');
                $("#lottery_page_content").html("");
                if (response){
                    var s = response.split("*");
                    var number_of_lottery = parseInt(s[0]);
                    $("#error_lottery").hide();
                    $("#lottery_list").html(s[1]);
                    if (number_of_lottery > 1){
                        $("#lottery_page_frame").show();
                        for (var i = number_of_lottery ; i >= 1 ; i--){
                            if (page == i){
                                $("#lottery_page_content").append("<p class='lottery_page' style='background-color: gray;' href='"+i+"'>"+i+"</p>");
                            }else{
                                $("#lottery_page_content").append("<p class='lottery_page' href='"+i+"'>"+i+"</p>");
                            }
                        }

                        $(".lottery_page").click(function () {
                            var p = $(this).attr("href");
                            if (p != "" && !isNaN(p) && p.length < 12){
                                get_lottery(p);
                            }
                        })

                    }else{
                        $("#lottery_page_frame").hide();
                        $("#lottery_page_content").html("");
                    }

                    $(".detail_lottery_icon").click(function () {
                        var id = $(this).attr("href");
                        $.ajax({
                            type:'POST',
                            url:'ajax_admin/get_lottery/',
                            data:{'is_admin':'admin','id':id},
                            success:function (response) {
                                if (response != false){
                                    var s = response.split("*");
                                    $("#detail_lottery_div").show('fade');
                                    $("#week_detail_lottery").text(s[0]);
                                    $("#time_detail_lottery").text(s[1]);
                                    $("#winner_1_detail_lottery").text(s[2]);
                                    $("#winner_2_detail_lottery").text(s[3]);
                                    $("#winner_3_detail_lottery").text(s[4]);
                                }
                            },
                            error:function () {

                            }
                        })
                    })

                }else{
                    $("#load_div").hide('fade');
                    $("#lottery_page_frame").hide();
                    $("#error_lottery").show('fade');
                    $("#lottery_page_content").html("");
                    $("#lottery_list").html("");
                }
            },
            error:function () {
                $("#lottery_page_frame").hide();
                $("#error_lottery").show('fade');
                $("#lottery_page_content").html("");
            }
        })
    }

    $("#lottery").click(function () {
        var week = $("#lottery_week_input").val();
        if (!isNaN(week) && week != ""){
            $.ajax({
                type:'POST',
                url:'ajax_admin/do_lottery/',
                data:{'is_admin':'admin','week':week},
                success:function (response) {
                    $("#lottery_div_dialog").hide();
                    $("#lottery_week_input").val("");
                    get_lottery(1);
                    if (response){
                        $("#success_text").text("قرعه کشی با موفقیت انجام شد");
                        $("#success_collapse").css({
                            'bottom':'0',
                            'height':'100px'
                        })
                        setTimeout(function () {
                            $("#success_collapse").css({
                                'bottom':'-1px',
                                'height':'0'
                            })
                        },2000)
                    }else{
                        $("#error_text").text("خطایی رخ داده است . لطفا دوباره تلاش کنید");
                        $("#error_collapse").css({
                            'bottom':'0',
                            'height':'100px'
                        })
                        setTimeout(function () {
                            $("#error_collapse").css({
                                'bottom':'-8px',
                                'height':'0'
                            })
                        },2000)
                    }
                },
                error:function () {

                }
            })
        }
    })


    $("#change_setting").click(function () {
        var address = $("#address_setting").val();
        var phone = $("#phone_setting").val();
        var delete_one = $("#delete_one_choose_setting").val();
        var delete_two = $("#delete_two_choose_setting").val();
        var next_level = $("#go_to_next_level_setting").val();
        var coin_100 = $("#coin_100").val();
        var coin_500 = $("#coin_500").val();
        var coin_1000 = $("#coin_1000").val();
        var coin_2000 = $("#coin_2000").val();
        var heart_3 = $("#heart_3").val();
        var heart_5 = $("#heart_5").val();
        var heart_10 = $("#heart_10").val();
        var heart_20 = $("#heart_20").val();

        if (!isNaN(coin_100) && !isNaN(coin_1000) && !isNaN(coin_500) && !isNaN(coin_1000) && !isNaN(coin_2000) && !isNaN(heart_3) && !isNaN(heart_5) && !isNaN(heart_10) && !isNaN(heart_20) && !isNaN(delete_one) && !isNaN(delete_two) && !isNaN(next_level) && isNaN(address)){
            $.ajax({
                type:'POST',
                url:'ajax_admin/edit_setting/',
                data:{'is_admin':'admin','address_setting':address,'phone_setting':phone,'delete_one_choose_setting':delete_one,'delete_two_choose_setting':delete_two,'go_to_next_level_setting':next_level,
                    'coin_100_setting':coin_100,'coin_500_setting':coin_500,'coin_1000_setting':coin_1000,'coin_2000_setting':coin_2000,
                    'heart_3_setting':heart_3,'heart_5_setting':heart_5,'heart_10_setting':heart_10,'heart_20_setting':heart_20
                },
                success:function (response) {
                    get_setting();

                    if (response){
                        $("#success_text").text("ویرایش با موفقیت انجام شد");
                        $("#success_collapse").css({
                            'bottom':'0',
                            'height':'100px'
                        })
                        setTimeout(function () {
                            $("#success_collapse").css({
                                'bottom':'-1px',
                                'height':'0'
                            })
                        },2000)
                    }else{
                        $("#error_text").text("خطایی رخ داده است . لطفا دوباره تلاش کنید");
                        $("#error_collapse").css({
                            'bottom':'0',
                            'height':'100px'
                        })
                        setTimeout(function () {
                            $("#error_collapse").css({
                                'bottom':'-8px',
                                'height':'0'
                            })
                        },2000)
                    }
                },
                error:function () {

                }
            })

        }
    })

    $("#logout").click(function () {
        $.ajax({
            type:'POST',
            url:'ajax_login_admin/logout/',
            data:{'is_admin':'admin'},
            success:function (response) {
                if (response){
                    window.location = window.location;
                }
            },
            error:function () {

            }
        })
    })

})
