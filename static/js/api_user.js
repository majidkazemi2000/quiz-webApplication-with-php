$(document).ready(function () {
    $("#load_div").show();

    $("#copy").click(function () {

        $(this).css({
            'transform':'rotate(360deg)'
        })
        $("#success_message").css({
            'bottom':'0px'
        })
        setTimeout(function () {
            $("#success_message").css({
                'bottom':'-101px'
            })
            $("#copy").css({
                'transform':'rotate(0deg)'
            })
        },2000)

        var copyText = document.getElementById("key");
        copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");

    })

    $(".document_icon").click(function () {
        $("#info_div").hide();
        $("#buy_div").hide();
        $("#document_div").show('fade');
    })
    $(".info_icon").click(function () {
        $("#document_div").hide();
        $("#buy_div").hide();
        $("#info_div").show('fade');
    })
    $(".buy_icon").click(function () {
        $("#info_div").hide();
        $("#document_div").hide();
        $("#buy_div").show('fade');
    })

    get_info();
    function get_info(){
        $.ajax({
            type:'POST',
            url:'../ajax_api/get_user_info/',
            data: {'api':'api'},
            success:function (response) {
                if (response != false){
                    $("#load_div").hide('fade');
                    var s = response.split("*");
                    $("#name").text(s[0]);
                    $("#email").text(s[1]);
                    $("#price").text(s[2]);
                    $("#sum_buy").text(s[3]);
                    $("#key").val(s[4]);

                    $("#demo1").gauge(parseInt(s[6]), {
                        min: 0,
                        max: parseInt(s[5]),
                        unit: "",
                        color: "#47d0a6",
                        colorAlpha: 12,
                        bgcolor: "white",
                        type: "default"
                    });
                }
            },
            error:function () {

            }
        })
    }

    $(".logout").click(function () {
        $.ajax({
            type: 'POST',
            url:'../ajax_api/logout/',
            data:{'api':'api'},
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
