<?php
include './boxleft.php';
if (is_array($banner)) {
    extract($banner);
}
$anhbanner = "../../upload/" . $hinh_anh;
if (is_file($anhbanner)) {
    $anhbn = "<img src='" . $anhbanner . "' height='100px'>";
} else {
    $anhbn = "no photo";
}
?>
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="card card-primary" style="width: 70%; margin-left: 200px;">
            <div class="card-header">
                <h3 class="card-title">Cập nhật baner</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" method="POST" enctype="multipart/form-data" action="index.php?act=update_banner">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ảnh banner </label><br>
                        <?php echo "<br>" ?>
                        <?= $anhbn ?>
                        <?php echo "<br><br>" ?>
                        <input type="file" name="hinh_anh">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tên banner</label>
                        <input type="text" name="ten" class="form-control" id="exampleInputPassword1" value="<?php if (isset($ten) && ($ten != "")) echo $ten; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">link</label>
                        <input type="text" name="link" class="form-control" id="exampleInputPassword1" value="<?php if (isset($link) && ($link != "")) echo $link; ?>">
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea class="form-control" name="mo_ta" rows="3" placeholder="Enter ..."><?= $mo_ta ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Trạng thái</label>
                        <input type="text" name="trang_thai" class="form-control" id="exampleInputPassword1" value="<?php if (isset($trang_thai) && ($trang_thai != "")) echo $trang_thai; ?>">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0))
                                                                echo $id; ?>">
                    <input type="submit" name="capnhat_banner" class="btn btn-primary" value="Cập nhật">
                    <button type="reset" class="btn btn-primary">Nhập lại</button>
                    <a href="index.php?act=list_baner"> <input type="button" class="btn btn-primary" value="Danh sách"></a>
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