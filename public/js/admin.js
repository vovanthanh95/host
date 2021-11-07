$(document).ready(function(){
//load data table category---------------------------------------------------
  var t = $("#category-table").DataTable({
    "ajax": {
            "url": "./../Admin/AjaxCategory",
            "dataSrc": ""
        },
    "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All"]],
    "columns": [
    {"data":null,"title": "STT"},
    {"data":"category","title": "DANH MỤC"},
    {"data":"create_at","title": "NGÀY TẠO"},
    {"data":"edit_at","title": "NGÀY SỬA"},
    {
     "data": null,
     "mRender": function (row) { return '<button class="btn btn-info btn-sm" onclick="editCategory('+ row.id + ',\'' + row.category + '\')"> Sửa </button><button class="btn btn-info btn-sm" onclick="deleteCategory('+ row.id +',\'' + row.category + '\')"> Xóa </button>'; }
   }
 ]
});

t.on( 'order.dt search.dt', function () {
    t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
        cell.innerHTML = i+1;
    } );
} ).draw();


});

//edit Category--------------------------------------------------------------------------
function editCategory(id, name){
  $("#form_edit_category").show();
  $("#btn_add_category").hide();
  $("#name_edit_category").val(name);
  $("#name_edit_category").attr("idrow",id);

}

//delete Category--------------------------------------------------------------------------------
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

//add category-----------------------------------------------------------------------------------
$(document).ready(function(){
  //button add category click
$("#btn_add_category").click(function(){
  $("#form_add_category").show();
  $("#btn_add_category").hide();
})

//button cancel category onclick-----------------------------------------------------------------
$("#cancel_category").click(function(){
  $("#form_add_category").hide();
  $("#btn_add_category").show();
})

//button Thêm-------------------------------------------------------------------------------------
$("#success_category").click(function(){
  let name = $("#name_category").val();
  $.ajax({
    url: "./../Admin/addCategory",
    type: "post",
    datatype:"text",
    data: {name_category: name},
    success: function(result){
      alert(result);
      $("#category-table").DataTable().ajax.reload();
      $("#form_add_category").hide();
      $("#btn_add_category").show();
    }
}
  );
})
//button sửa category-----------------------------------------------------------------------------------
$("#cancel_edit_category").click(function(){
  $("#form_edit_category").hide();
  $("#btn_add_category").show();
})
//button sửa-------------------------------------------------------------------------------------
$("#success_edit_category").click(function(){
  let name = $("#name_edit_category").val();
  let id = $("#name_edit_category").attr("idrow");
  $.ajax({
    url: "./../Admin/editCategory",
    type: "post",
    datatype:"text",
    data: {name_category: name, id: id},
    success: function(result){
      alert(result);
      $("#category-table").DataTable().ajax.reload();
      $("#form_edit_category").hide();
      $("#btn_add_category").show();
    }
}
  );
})

//-------------------ready function------------------------------------------------------------------
});
