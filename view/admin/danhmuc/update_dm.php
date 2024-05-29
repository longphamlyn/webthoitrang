<?php
include './boxleft.php';
if (is_array($danhmuc)) {
  extract($danhmuc);
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="card card-primary" style="width: 70%; margin-left: 200px;">
      <div class="card-header">
        <h3 class="card-title">cập nhập danh mục sản phẩm</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form id="quickForm" action="index.php?act=update_dm" method="POST">
        <div class="card-body">
          <div class="form-group">
            <label>Tên danh mục</label>
            <input type="text" name="ten_dm" class="form-control" id="exampleInputPassword1"  value="<?php if (isset($ten_dm) && !empty($ten_dm)) echo $ten_dm ?>">
          </div>
          <div class="form-group">
            <label>Mô tả</label>
            <textarea class="form-control" rows="3" name="mota"><?php if (isset($mo_ta) && !empty($mo_ta)) echo $mo_ta ?></textarea>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        <input type="hidden" name="id" value="<?php if (isset( $id) &&  $id > 0) echo $id ?>">
          <input type="submit" class="btn btn-primary" value="Cập nhập" name="capnhap">
          <button type="reset" class="btn btn-primary">Nhập lại</button>
          <a href="index.php?act=list_dm"> <input type="button" class="btn btn-primary" value="Danh sách"></a>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </section>
  <!-- /.content -->

</div>