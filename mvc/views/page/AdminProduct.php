<div class="product-content">
  <!-- ------------------alert--------------------------------------------------------------- -->
  <div class="remove-group" id="remove-group-product">
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
      <button class="btn btn-outline-success remove-btn-delete" id="remove-success-product" type="button" name="button">Xóa</button>
      <button class="btn btn-outline-danger remove-btn-cancell" id="remove-cancel-product" type="button" name="button">Hủy</button>
    </div>
  </div>
  <!-- --------------------------------------------------------------------------------- -->
  <div class="group-product" id="group-product">
    <div class="title-product">
      <p>thông báo</p>
    </div>
    <div class="content-product">
      <input type="text" name="" value="" id="name-product" class="name-product" placeholder=" ">
      <label class="label-name">tên sản phẩm</label>
      <input type="text" name="" value="" id="price-product" class="price-product"placeholder=" ">
      <label class="label-price">giá</label>
    </div>
    <div class="content-product">
      <input type="text" name="" value="" id="quantity-product" placeholder=" ">
      <label class="label-quantity">số lượng</label>
      <select class="seclect-category" id="seclect-category" name="">
      </select>
    </div>
  <div class="content-product">
    <label for="image-product" class="label-image">image</label>
    <label for="image-product" class="label-image1">image11111</label>
    <input type="text" form="image-product" name="" value="" class="imagex-product" id="imagex-product" placeholder=" ">
    <input type="file" enctype="multipart/form-data" name="" value="" class="image-product" id="image-product" placeholder=" ">
  </div>
  <div class="content-product">
    <textarea id="description-product"name="name" placeholder=" "></textarea>
    <label class="label-description">mô tả</label>
  </div>
  <div class="content-product">
    <textarea id="other-product" name="name" placeholder=" "></textarea>
    <label class="label-other">other</label>
  </div>
    <div class="error-product">
      <p id="error-product"></p>
    </div>
    <div class="action-product">
      <button class="btn btn-outline-success btn-add" id="success-product" type="button" name="button">Thêm</button>
      <button class="btn btn-outline-danger btn-cancell" id="cancel-product" type="button" name="button">Hủy</button>
    </div>
  </div>

  <!-- ------------------------------------------------------------------------------------ -->
  <button class="btn btn-outline-primary btn-sm" id="btn-add-product">Thêm Mới</button>
  <table id="product-table" class="table table-bordered table-hover product-table">
  </table>
</div>
