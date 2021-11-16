<div class="product-content">
  <!-- ------------------alert--------------------------------------------------------------- -->
  <div class="remove-group" id="remove-group-category">
    <div class="remove-title">
      <p>thông báo</p>
    </div>
    <div class="remove-content">
      <label id="remove-content"></label>
    </div>
    <div class="remove-error">
      <p id="remove-error"></p>
    </div>
    <div class="remove-action">
      <button class="btn btn-outline-success remove-btn-delete" id="remove-success-category" type="button" name="button">Xóa</button>
      <button class="btn btn-outline-danger remove-btn-cancell" id="remove-cancel-category" type="button" name="button">Hủy</button>
    </div>
  </div>
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
  <div class="add-group-product" id="add-group-product">
    <div class="add-title-product">
      <p>thông báo</p>
    </div>
    <div class="add-content-product">
      <input type="text" name="" value="" id="name-product" class="name-product" placeholder=" ">
      <label class="label-name">tên sản phẩm</label>
      <input type="text" name="" value="" id="name-product" class="price-product"placeholder=" ">
      <label class="label-price">giá</label>
    </div>
    <div class="add-content-product">
      <input type="text" name="" value="" id="name-product" placeholder=" ">
      <label class="label-quantity">số lượng</label>
      <select class="" name="" value="2">
        <option value="">vsmart</option>
        <option value="">oppo</option>
        <option value="">nokia</option>
      </select>
    </div>
  <div class="add-content-product">
    <label for="image-product" class="label-image">image</label>
    <label for="image-product" class="label-image1">image11111</label>
    <input type="text" form="image-product" name="" value="" class="imagex-product" id="imagex-product" placeholder=" ">
    <input type="file" enctype="multipart/form-data" name="" value="" class="image-product" id="image-product" placeholder=" ">
  </div>
  <div class="add-content-product">
    <textarea name="name" placeholder=" "></textarea>
    <label class="label-description">mô tả</label>
  </div>
  <div class="add-content-product">
    <textarea name="name" placeholder=" "></textarea>
    <label class="label-other">other</label>
  </div>
    <div class="add-error-product">
      <p id="add-error-product"></p>
    </div>
    <div class="add-action-product">
      <button class="btn btn-outline-success btn-add" id="success-product" type="button" name="button">Thêm</button>
      <button class="btn btn-outline-danger btn-cancell" id="cancel-product" type="button" name="button">Hủy</button>
    </div>
  </div>

  <!-- ------------------------------------------------------------------------------------ -->
  <button class="btn btn-outline-primary btn-sm" id="btn-add-product">Thêm Mới</button>
  <table id="product-table" class="table table-bordered table-hover product-table">
  </table>
</div>
