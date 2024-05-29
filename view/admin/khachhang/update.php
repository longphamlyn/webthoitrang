<?php
include 'boxleft.php';
if (is_array( $load_one_kh)) {
    extract( $load_one_kh);
    $idkh=$id;
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="card card-primary" style="width: 70%; margin-left: 200px;">
      <div class="card-header">
        <h3 class="card-title">Cập Nhật Khách Hàng </h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form id="quickForm" action="index.php?act=update" method="POST">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">user name </label>
            <input type="text" name="user" class="form-control" id="exampleInputEmail1" value="<?=$user_name?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">password</label>
            <input type="text" name="pass" class="form-control" id="exampleInputPassword1"  value="<?=$pass?>">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Họ và tên</label>
            <input type="text" name="fullname" class="form-control" id="exampleInputPassword1"  value="<?=$ho_ten?>">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Ngày Sinh</label>
            <input type="date" name="date" class="form-control" id="exampleInputPassword1"  value="<?=$ngay_sinh?>">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Địa chỉ</label>
            <input type="text" name="addr" class="form-control" id="exampleInputPassword1"  value="<?=$dia_chi?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputPassword1"  value="<?=$email?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Số Điện Thoại</label>
            <input type="number" name="sdt" class="form-control" id="exampleInputPassword1"  value="<?=$sdt?>">
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        <input type="hidden" name="idkh" value="<?php if (isset($idkh) &&  $idkh > 0) echo $idkh ?>">
          <input type="submit" name="capnhat" class="btn btn-primary" value="Cập Nhập">
          <button type="reset" class="btn btn-primary">Nhập lại</button>
          <a href="index.php?act=list_kh"> <input type="button" class="btn btn-primary" value="Danh sách"></a>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </section>
  <!-- /.content -->

</div>