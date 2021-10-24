$(document).ready(function () {
    $("#UserName").keyup(
            function () {
                $.ajax({
                    url : "./../User/checkUser",
                    type : "post",
                    dataType:"text",
                    data : {
                         username : $("#UserName").val()
                    },
                    success : function (result){
                        $("#resultUser").html(result);
                    }
                });
            }
    );

    $("#Email").keyup(
            function () {
                $.ajax({
                    url : "./../User/checkEmail",
                    type : "post",
                    dataType:"text",
                    data : {
                         email : $("#Email").val()
                    },
                    success : function (result){
                        $("#resultEmail").html(result);
                    }
                });
            }
    );
});
