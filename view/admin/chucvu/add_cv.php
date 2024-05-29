<?php
include 'boxleft.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="card card-primary" style="width: 70%; margin-left: 200px;">
            <div class="card-header">
                <h3 class="card-title">Thêm chức vụ</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Chức vụ</label><br>
                        <input type="text" name="ten_chucvu" class="form-control" id="exampleInputPassword1" placeholder="chức vụ">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">mô tả</label>
                        <input type="text" name="mo_ta" class="form-control" id="exampleInputPassword1" placeholder="mô tả">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Trạng thái</label>
                        <input type="text" name="trang_thai" class="form-control" id="exampleInputPassword1" placeholder="trạng thái">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <input type="submit" name="them_chuc_vu" class="btn btn-primary" value="Thêm Mới">
                    <button type="reset" class="btn btn-primary">Nhập lại</button>
                    <a href="index.php?act=list_cv"> <input type="button" class="btn btn-primary" value="Danh sách"></a>
                </div>
                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?>
            </form>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>