$(document).ready(function(){

  $('#category-table').DataTable({
    "ajax": {
            "url": "./../Admin/AjaxCategory",
            "dataSrc": ""
        },
    "columns": [
    {"data":"id", "title": "STT"},
    {"data":"category","title": "DANH MỤC"},
    {"data":"create_at","title": "NGÀY TẠO"},
    {"data":"edit_at","title": "NGÀY SỬA"},
    {
     "data": null,
     "mRender": function (o) { return '<button class="btn btn-info btn-sm"> Sửa </button><button class="btn btn-info btn-sm"> Xóa </button>'; }
    }
  ]
});
});
