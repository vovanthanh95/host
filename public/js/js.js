$(document).ready(function () {
    $("#UserName").keyup(
            function () {
                $.ajax({
                    url : "./../User/checkUser",
                    type : "post",
                    dataType:"text",
                    data : {
                         fname : $("#UserName").val()
                    },
                    success : function (result){
                        $("#resultUser").html(result);
                    }
                });
            }
    );
});
