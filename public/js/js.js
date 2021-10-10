$(document).ready(function () {
    $("#UserName").keyup(
            function () {

                $.ajax({
                    url : "./../user/checkUser",
                    type : "post",
                    dataType:"text",
                    data : {
                         fname : $("#UserName").val()
                    },
                    success : function (result){
                        $("#result").html(result);
                    }
                });
            }
    );
});

var socket = io.connect( 'http://localhost:3003' );
