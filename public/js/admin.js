$(document).ready(function(){
//load data table category---------------------------------------------------
  var t = $("#category-table").DataTable({
    "scrollX": false,
    "ajax": {
            "url": "./../Admin/AjaxCategory",
            "dataSrc": ""
        },
        "oLanguage": {
        "oAria": {
            "sSortAscending": ": activate to sort column ascending",
            "sSortDescending": ": activate to sort column descending"
        },
        "oPaginate": {
            "sFirst": "Trang đầu",
            "sLast": "Trang cuối",
            "sNext": "Tiếp",
            "sPrevious": "Lùi"
        },
        "sEmptyTable": "Không có dữ liệu",
        "sInfo": "hiển thị từ _START_ đến _END_ của _TOTAL_ danh mục",
        "sInfoEmpty": "không có danh mục nào",
        "sInfoFiltered": "(lọc từ _MAX_ danh mục)",
        "sInfoPostFix": "",
        "sDecimal": "",
        "sThousands": ",",
        "sLengthMenu": "_MENU_",
        "sLoadingRecords": "Loading...",
        "sProcessing": "Processing...",
        "sSearch": "",
        "sSearchPlaceholder": "Tìm kiếm",
        "sUrl": "",
        "sZeroRecords": "không tìm thấy dữ liệu"
     },
    "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All"]],
    "columns": [
    {"data":null,"title": "STT"},
    {"data":"category","title": "DANH MỤC"},
    {"data":"create_at","title": "NGÀY TẠO"},
    {"data":"edit_at","title": "NGÀY SỬA"},
    {
     "data": null,
     "mRender": function (row) { return '<button class="btn btn-outline-success btn-sm" onclick="editCategory('+ row.id + ',\'' + row.category + '\')"> Sửa </button><button class="btn btn-outline-danger btn-sm" onclick="deleteCategory('+ row.id +',\'' + row.category + '\')"> Xóa </button>'; }
   }
 ]
});

t.on( 'order.dt search.dt', function () {
    t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
        cell.innerHTML = i+1;
    } );
} ).draw();


});

//edit button table Category--------------------------------------------------------------------------
function editCategory(id, name){
  $("#edit-group-category").show();
  $("#edit-name-category").val(name);
  $("#edit-name-category").attr("idrow",id);

}

//delete button table Category--------------------------------------------------------------------------------
function deleteCategory(id,category){
  let conf = confirm('bạn có muốn xóa danh mục ' + category + ' không');
  if(conf){
    $.ajax({
      url: "./../Admin/deleteCategory",
      type: "post",
      datatype: "text",
      data: {idcategory: id},
      success: function (result){
        //load data table
        $("#category-table").DataTable().ajax.reload();
        console.log(result);
      }
    }
    );
  }else{
    return;
  }
}

//-----------------------------------------------------------------------------------
$(document).ready(function(){
  //button add category click
$("#btn-add-category").click(function(){
  $("#add-group-category").show();
  $("#btn-add-category").hide();
})

//button cancel on form category onclick-----------------------------------------------------------------
$("#cancel-category").click(function(){
  $("#add-group-category").hide();
  $("#btn-add-category").show();
})

//button Thêm on form category-------------------------------------------------------------------------------------
$("#edit-success-category").click(function(){
  let name = $("#name-category").val();
  $.ajax({
    url: "./../Admin/addCategory",
    type: "post",
    datatype:"text",
    data: {name_category: name},
    success: function(result){
      $("#name-category").val("")
      $("#add-error").text(result);
      $("#category-table").DataTable().ajax.reload();
    }
}
  );
})
//button sửa category-----------------------------------------------------------------------------------
$("#cancel_edit_category").click(function(){
  $("#form_edit_category").hide();
  $("#btn_add_category").show();
})
//button sửa on form edit click-------------------------------------------------------------------------------------
$("#edit-success-category").click(function(){
  let name = $("#edit-name-category").val();
  let id = $("#edit-name-category").attr("idrow");
  $.ajax({
    url: "./../Admin/editCategory",
    type: "post",
    datatype:"text",
    data: {name_category: name, id: id},
    success: function(result){
      $("#edit-name-category").val("")
      $("#category-table").DataTable().ajax.reload();
      $("#edit-error").text(result);
    }
}
  );
})
//button cancel on form edit onclick-----------------------------------------------------------------
$("#edit-cancel-category").click(function(){
  $("#edit-group-category").hide();
})

// kiểm tra tên danh mục nhập vào có hợp lệ không
$("#name-category").keyup(
        function () {
            $.ajax({
                url : "./../Admin/checkNameCategory",
                type : "post",
                dataType:"text",
                data : {
                     name : $("#name-category").val()
                },
                success : function (result){
                  console.log(result);
                  $("#add-error").text(result);
                }
            });
        }
);
//admin login ajax-------------------------------------------------------------------------------------
$("#login-success").click(function(){
  let name = $("#login-user").val();
  let pass = $("#login-pass").val();
console.log(name);
console.log(pass);
  $.ajax({
    url: "./../mvc/Admin/adminLogin",
    type: "post",
    datatype:"text",
    data: {name: name, pass: pass },
    success: function(result){
      console.log(result);
    }
}
  );
})
//-------------------ready function------------------------------------------------------------------
});
