<!-- <button class="btn btn-primary" id="btn-add-category"><i class="fas fa-plus-circle"></i></button>
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
</div> -->


<!-- --------------------------------------------------------------------------------- -->
<div class="category-content">
  <!-- --------------------------------------------------------------------------------- -->
  <div class="edit-group" id="edit-group-category">
    <div class="edit-title">
      <p>thông báo</p>
    </div>
    <div class="edit-content">
      <input type="text" name="" value="" id="edit-name-category" placeholder=" ">
      <label>tên danh mục</label>
    </div>
    <div class="edit-error">
      <p id="edit-error"></p>
    </div>
    <div class="edit-action">
      <button class="btn btn-outline-success btn-add" id="edit-success-category" type="button" name="button">Sửa</button>
      <button class="btn btn-outline-danger btn-cancell" id="edit-cancel-category" type="button" name="button">Hủy</button>
    </div>
  </div>

  <!-- --------------------------------------------------------------------------------- -->
  <div class="add-group" id="add-group-category">
    <div class="add-title">
      <p>thông báo</p>
    </div>
    <div class="add-content">
      <input type="text" name="" value="" id="name-category" placeholder=" ">
      <label>tên danh mục</label>
    </div>
    <div class="add-error">
      <p id="add-error"></p>
    </div>
    <div class="add-action">
      <button class="btn btn-outline-success btn-add" id="success-category" type="button" name="button">Thêm</button>
      <button class="btn btn-outline-danger btn-cancell" id="cancel-category" type="button" name="button">Hủy</button>
    </div>
  </div>

  <!-- ------------------------------------------------------------------------------------ -->
  <button class="btn btn-outline-primary btn-sm" id="btn-add-category">Thêm Mới</button>
  <table id="category-table" class="table table-bordered table-hover category-table">
  </table>
</div>
