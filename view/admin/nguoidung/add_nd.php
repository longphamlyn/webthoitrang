<?php
include 'boxleft.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="card card-primary" style="width: 70%; margin-left: 200px;">
      <div class="card-header">
        <h3 class="card-title">Thêm Người Dùng </h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form id="quickForm" method="POST">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">user name </label>
            <input type="text" name="user" class="form-control" id="exampleInputEmail1" placeholder="user name">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">password</label>
            <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="passwork">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Họ và tên</label>
            <input type="text" name="fullname" class="form-control" id="exampleInputPassword1" placeholder="Họ Và tên">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Ngày Sinh</label>
            <input type="date" name="date" class="form-control" id="exampleInputPassword1" placeholder="Ngày Sinh của bạn ">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Địa chỉ</label>
            <input type="text" name="addr" class="form-control" id="exampleInputPassword1" placeholder="Tên danh mục sản phẩm">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Số Điện Thoại</label>
            <input type="number" name="sdt" class="form-control" id="exampleInputPassword1" placeholder="Số điện thoại">
          </div>
          <div class="form-group">
            <label>Chức vụ</label>
            <select class="form-control" name="idcv">
              <?php
              foreach ($list_cv as $value) {
                extract($value);
                echo'<option value="'.$id.'">'.$ten_chucvu.'</option>';
              }
              ?>
            </select>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <input type="submit" name="themmoi" class="btn btn-primary" value="Thêm Mới">
          <button type="reset" class="btn btn-primary">Nhập lại</button>
          <a href="index.php?act=list_nd"> <input type="button" class="btn btn-primary" value="Danh sách"></a>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </section>
  <!-- /.content -->

</div>