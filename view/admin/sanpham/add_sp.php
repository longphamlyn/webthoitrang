<?php
include 'boxleft.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">

    <!-- jquery validation -->
    <div class="card card-primary" style="width: 70%; margin-left: 200px;">
      <div class="card-header">
        <h3 class="card-title">Thêm sản phẩm</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form id="quickForm" action="#" method="POST" enctype="multipart/form-data">
        <div class="card-body">
          <div class="form-group">
            <label>Danh mục sản phẩm </label>
            <select class="form-control" name="iddm">
              <?php
              foreach ($list_dm as $value) {
                extract($value);
                echo '<option value="' . $id . '">' . $ten_dm . '</option>';
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tên sản phẩm</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tên sản phẩm" name="tensp">
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="exampleInputFile">Hình ảnh</label>
              <div class="custom-file">
                <input type="file" name="anhsp" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Kích thước</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="kích thước..." name="size">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Màu sắc</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Màu sắc ..." name="mausac">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Giá sp</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Giá sản phẩm" name="giasp">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Ngày Nhập</label>
            <input type="date" class="form-control" id="exampleInputPassword1" placeholder="ngày nhập sản phẩm" name="ngaynhap">
          </div>
          <div class="form-group">
            <label>Trạng thái</label>
            <select class="form-control" name="trangthai">
              <option>Hiển thị</option>
              <option>Ẩn</option>
            </select>
          </div>
          <div class="form-group">
            <label>Mô tả</label>
            <textarea class="form-control" rows="3" placeholder="Enter ..." name="mota"></textarea>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <input type="submit" class="btn btn-primary" value="Thêm Mới" name="themmoi">
          <button type="reset" class="btn btn-primary">Nhập lại</button>
          <a href="index.php?act=list_sp"> <input type="button" class="btn btn-primary" value="Danh sách"></a>
        </div>
      </form>
    </div>
  </section>
  <!-- /.content -->

</div>