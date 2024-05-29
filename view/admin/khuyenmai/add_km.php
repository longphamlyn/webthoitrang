<?php
include 'boxleft.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="card card-primary" style="width: 70%; margin-left: 200px;">
      <div class="card-header">
        <h3 class="card-title">Thêm khuyến mai</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form id="quickForm" action="#" method="POSt">
        <div class="card-body">
          <div class="form-group">
            <label>Tên sản Phẩm</label>
            <select class="form-control" name="id_sp">
              <?php
              foreach ($listsp as $value) {
                extract($value);
                echo '<option value="' . $id . '">' . $ten_sp . '</option>';
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">mã khuyến mại</label>
            <input type="text" name="makm" class="form-control" id="exampleInputPassword1" placeholder="Mã khuyến mãi">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Tên khuyến mại </label><br>
            <input type="text" name="tenkm" class="form-control" id="exampleInputPassword1" placeholder="tên khuyến mãi">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Phần trăm khuyến mại</label>
            <input type="number" name="phantram" class="form-control" id="exampleInputPassword1" placeholder="% khuyến mãi">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">ngày bắt đầu</label>
            <input type="date" name="ngaybd" class="form-control" id="exampleInputPassword1" placeholder="ngày bắt đầu">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">ngày kết thúc</label>
            <input type="date" name="ngaykt" class="form-control" id="exampleInputPassword1" placeholder="ngày kết thúc">
          </div>
          <div class="form-group">
            <label>Mô tả</label>
            <textarea name="mota" class="form-control" rows="3" placeholder="Enter ..."></textarea>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <input type="submit" name="themmoi" class="btn btn-primary" value="Thêm Mới">
            <button type="reset" class="btn btn-primary">Nhập lại</button>
            <a href="index.php?act=list_khuyenmai"> <input type="button" class="btn btn-primary" value="Danh sách"></a>
          </div>
      </form>
    </div>
    <!-- /.card -->


  </section>
  <!-- /.content -->

</div>