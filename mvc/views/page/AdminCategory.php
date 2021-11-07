<div class="card card-primary" id="form_add_category" style="display:none">
  <div class="card-header">
    <h3 class="card-title">THÊM MỚI DANH MỤC</h3>
  </div>
  <div class="card-body">
    <div class="form-group">
      <label for="exampleInputEmail1">Tên danh mục</label>
      <input type="text" class="form-control" id="name_category" placeholder="tên danh mục">
    </div>
  </div>
  <div class="card-footer">
    <button class="btn btn-primary" id="success_category">Thêm</button>
    <button class="btn btn-primary" id="cancel_category">Hủy</button>
  </div>
</div>
<button class="btn btn-primary" id="btn_add_category"><i class="fas fa-plus-circle"></i></button>
<div class="card card-primary" id="form_edit_category" style="display:none">
  <div class="card-header">
    <h3 class="card-title">SỬA DANH MỤC</h3>
  </div>
  <div class="card-body">
    <div class="form-group">
      <label>Tên danh mục</label>
      <input type="text" class="form-control" id="name_edit_category">
    </div>
  </div>
  <div class="card-footer">
    <button class="btn btn-primary" id="success_edit_category">Sửa</button>
    <button class="btn btn-primary" id="cancel_edit_category">Hủy</button>
  </div>
</div>

<table id="category-table" class="table table-bordered table-hover">
</table>
