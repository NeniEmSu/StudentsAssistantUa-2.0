$(document).ready(function () {

    $(".hideme").animate({

        'opacity': '1'

    }, 1000);


    var sessionvar = $("#sessionvar").attr("data-msg");

    $('#exam').modal({
        backdrop: 'static'
    }).show('show');

    var sub;
    $(".sublist li").click(function () {

        sub = $(this).attr("id");
        var user = $("#sessionvar").attr("data-msg");

        $(".sublist li").removeClass('activesub').css({
            'color': '#333'
        });
        $(this).addClass('activesub').css({

            'color': '#ffa500'
        });

        $.ajax({

            url: "work/attempt.php",
            method: "POST",
            data: {
                sub: sub,
                user: user
            },
            success: function (data) {

                $("#sessionvar").html('');

            }

        });

        $(".start_attempt").click(function () {

            $("#exam").hide();

            if (sub == 'dsa' || sub == 'dm' || sub == 'coa') {

                window.location = 'question.php?sub=' + sub + '&&user=' + sessionvar + '&&page=' + 1;
            } else {
                $(".sublist li").addClass('text-danger').html('Choose subject first');
            }

        });

    });



    var question;
    var sub;

    $(".invalid").click(function () {

        sub = $("#pageno").attr("data-sub");

        $(".result_question").each(function () {

            visibility = $(this).attr("data-visible");

            if (visibility == 'visible') {

                question = $(this).attr("id");

                $.ajax({

                    url: "work/invalid.php",
                    method: "POST",
                    data: {
                        question: question,
                        sub: sub
                    },
                    success: function (data) {

                        $(".invalid_qu").html(data);
                    }

                });
            }

            $(".question-btn").each(function () {

                var id = $(this).attr("data-id");

                if (question == id) {

                    $(this).css({

                        'background': 'red',
                        'color': '#fff'

                    });

                }

            });

        });



    });

    $(".bookmark").click(function () {

        var visibility;

        $(".result_question").each(function () {

            visibility = $(this).attr("data-visible");

            if (visibility == 'visible') {

                question = $(this).attr("id");

            }

        });

        $(".question-btn").each(function () {

            var id = $(this).attr("data-id");

            if (question == id) {

                $(this).css({

                    'background': '#ffff33',
                    'color': '#333'

                });

            }

        });

    });




    $(".radiobtn").click(function () {

        var answer = $(this).val();
        $(this).attr("checked", "checked");

        $(".save").click(function () {

            var visibility;

            sub = $("#pageno").attr("data-sub");
            var user = $("#pageno").attr("data-user");

            $(".result_question").each(function (index) {

                visibility = $(this).attr("data-visible");

                if (visibility == 'visible') {

                    question = $(this).attr("id");
                    $(".radiobtn[checked != checked]").filter("[name = " + index + "]").attr("disabled", "disabled");

                    $.ajax({

                        url: "work/answer.php",
                        method: "POST",
                        data: {
                            question: question,
                            answer: answer,
                            sub: sub,
                            user: user
                        },
                        success: function (data) {

                            $(".invalid_qu").html(data);
                        }

                    });
                }

            });

            $(".question-btn").each(function () {

                var id = $(this).attr("data-id");

                if (question == id) {

                    $(this).css({

                        'background': '#76EE00',
                        'color': '#333'

                    });

                }

            });

        });

    });




    $(".result_question").hide();
    $(".result_question").first().show();
    $(".next").attr("data-next", "1");

    var divid;
    $(".question-btn").click(function () {

        $(".invalid_qu").html('');
        var id = $(this).attr("data-id");

        $(".result_question").each(function () {

            divid = $(this).attr("id");

            if (id == divid) {

                $(".result_question").attr('data-visible', 'hide').hide();
                $(this).attr('data-visible', 'visible').show();


            }

        });

    });

    $(".next").click(function () {

        $(".result_question").each(function (index) {

            var visibility = $(this).attr("data-visible");

            if (visibility == 'visible') {

                if (index == 19) {

                    $(".next").attr("data-next", "0");

                } else {

                    $(".next").attr("data-next", index + 1);
                }

            }

        });

        $(".result_question").each(function () {

            var nextdiv = $(".next").attr("data-next");

            var id = $(this).attr("id");

            if (nextdiv == id) {

                $(".result_question").attr('data-visible', 'hide').hide();
                $(this).next().attr('data-visible', 'visible').show();
                console.log(nextdiv);

            }
        });

    });

    $(".prev").click(function () {

        $(".invalid_qu").html('');
        var visibility;

        $(".result_question").each(function (index) {

            visibility = $(this).attr("data-visible");

            if (visibility == 'visible') {

                if (index != 0) {
                    $(".result_question").attr('data-visible', 'hide').hide();
                }

                $(this).prev().attr('data-visible', 'visible').show();
            }

        });

    });


    $(".activate").click(function () {

        var id = $(this).attr("id");

        $.ajax({

            url: "work/modal.php",
            method: "POST",
            data: {
                id: id
            },
            success: function (data) {

                $(".modal-result").html(data);
                $("#myModal").modal('show');

            }

        });

    });

    $(".delete").click(function () {

        var id = $(this).attr("id");

        $.ajax({

            url: "work/delete.php",
            method: "POST",
            data: {
                id: id
            },
            success: function (data) {

                $(".modal-result").html(data);
                $("#myModal").modal('show');

            }

        });

    });


    var marks = $("#marks").attr("data-marks");

    var marksloose = 20 - marks;

    var canvas = document.getElementById("chart");


    var ctx = canvas.getContext("2d");
    var data = [

        {
            value: 5 * marks,
            color: "#76EE00",
            hightlight: "#66CD00",
            label: "Marks Obtained"
        },

        {
            value: 100 - (5 * marks),
            color: "#ff6666",
            hightlight: "#ff4c4c",
            label: "Marks Loosed"

        }
    ]

    var piechart = new Chart(ctx).Pie(data);

    if (marksloose > marks) {

        $(".resultexam p").css({

            'color': '#ff4c4c'

        }).html('OOPS! You are failed.Your Score is ' + marks);

    } else if (marks >= marksloose) {

        $(".resultexam p").css({

            'color': '#76ee00'

        }).html('Congrates ! You are passed.Your Score is ' + marks);


    }

});



//10sec = 15000
//3600694
sub = $("#pageno").attr("data-sub");

var now = new Date().getTime();
var countDownDate = now + 3600694;

// Update the count down every 1 second
var x = setInterval(function () {

    // Get todays date and time
    now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    document.getElementById("hour").innerHTML = hours + "h";
    document.getElementById("min").innerHTML = minutes + "m";
    document.getElementById("sec").innerHTML = seconds + "s";

    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        window.location = "result.php?action=logout";
    }
}, 1000);