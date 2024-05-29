<?php
include './boxleft.php';
is_array($load_one_lh);
extract($load_one_lh);
$idlh=$id;
$ttlh = status_contact($trang_thai);
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="card card-primary" style="width: 70%; margin-left: 200px;">
      <div class="card-header">
        <h3 class="card-title">cập nhập liên hệ khách hàng</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form id="quickForm" action="index.php?act=update_lh" method="POST">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputPassword1">Tên Khách Hàng</label>
            <input type="text" name="ten_bn" class="form-control" id="exampleInputPassword1" value="<?=$ho_ten?>">
          </div>

          <div class="form-group">
            <label>Nội Dung</label>
            <textarea class="form-control" rows="3" placeholder="Enter ..."><?=$noi_dung?></textarea>
          </div>
          <div class="form-group">
            <label>Trạng thái</label>
            <select class="form-control" name="trangthai">
            <option value="0"><?=$ttlh?></option>
              <option value="1">Đã phản hồi</option>
             
            </select>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <input type="hidden" name="idlh" value="<?php if (isset($idlh) &&  $idlh > 0) echo $idlh ?>">
          <input type="submit" name="capnhat" class="btn btn-primary" value="Cập Nhập">
          <button type="reset" class="btn btn-primary">Nhập lại</button>
          <a href="index.php?act=list_lienhe"> <input type="button" class="btn btn-primary" value="Danh sách"></a>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </section>
  <!-- /.content -->

</div>