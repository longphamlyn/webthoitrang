<?php
include './boxleft.php';
if (is_array($cv )) {
    extract($cv);
}
?>
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="card card-primary" style="width: 70%; margin-left: 200px;">
            <div class="card-header">
                <h3 class="card-title">Cập nhập chức vụ</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" method="POST" enctype="multipart/form-data" action="index.php?act=update_chucvu">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Chức vụ</label><br>
                        <input type="text" name="ten_chucvu" class="form-control" id="exampleInputPassword1" value="<?php if (isset($ten_chucvu) && ($ten_chucvu != "")) echo $ten_chucvu; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">mô tả</label>
                        <input type="text" name="mo_ta" class="form-control" id="exampleInputPassword1" value="<?php if (isset($mo_ta) && ($mo_ta != "")) echo $mo_ta; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Trạng thái</label>
                        <input type="text" name="trang_thai" class="form-control" id="exampleInputPassword1" value="<?php if (isset($trang_thai) && ($trang_thai != "")) echo $trang_thai; ?>">
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
                        <input type="submit" name="capnhat_chuc_vu" class="btn btn-primary" value="Cập nhật">
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