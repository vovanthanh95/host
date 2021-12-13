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

    //load danh sách sản phẩm ra trang chủ
    $.ajax({
      url:"./../mvc/Admin/AjaxProduct",
      type: "post",
      dataType: "text",
      success: function(result){
        let data = JSON.parse(result);
        console.log(data);
        $("#list-products").empty();
        $.each(data, function(i, data){
          let text = '<li>'+
            '<div class="item">'+
              '<a href="#">'+
                '<img src="./public/images/products/' + data.productimage + '" alt="">'+
                '<p class="name-product">' + data.productname + '</p>'+
              '</a>'+
              '<div class="info">'+
                '<p class="price"> giá: '+ data.productprice +' VNĐ </p>'+
                '<p class="status"> Còn Hàng </p>'+
              '</div>'+
            '</div>'+
          '</li>';
          $("#list-products").append(text);
        })

      }
    });

});
