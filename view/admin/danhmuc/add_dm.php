<?php
include './boxleft.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
          <div class="card card-primary" style="width: 70%; margin-left: 200px;">
            <div class="card-header">
              <h3 class="card-title">Thêm danh mục sản phẩm</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" action="#" method="POST">
              <div class="card-body">
                <div class="form-group">
                  <label >Tên danh mục</label>
                  <input type="text" name="ten_dm" class="form-control" id="exampleInputPassword1" placeholder="Tên danh mục sản phẩm">
                </div>
                <div class="form-group">
                  <label>Mô tả</label>
                  <textarea class="form-control" rows="3" name="mota" placeholder="Enter ..."></textarea>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="Thêm Mới" name="themmoi">
                <button type="reset" class="btn btn-primary">Nhập lại</button>
                <a href="index.php?act=list_dm"> <input type="button" class="btn btn-primary" value="Danh sách"></a>
              </div>
            </form>
          </div>
          <!-- /.card -->
  </section>
  <!-- /.content -->

</div>