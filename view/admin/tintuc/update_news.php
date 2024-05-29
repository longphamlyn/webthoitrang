<?php
include './boxleft.php';
if (is_array($tintuc)) {
    extract($tintuc);
}

$anhtintuc = "../../upload/" . $anh_tin_tuc;
if (is_file($anhtintuc)) {
    $anhtt = "<img src='" . $anhtintuc . "' height='100px'>";
} else {
    $anhtt = "no photo";
}
?>
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="card card-primary" style="width: 70%; margin-left: 200px;">
            <div class="card-header">
                <h3 class="card-title">Cập nhật tin tức</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" method="POST" enctype="multipart/form-data" action="index.php?act=updatett">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tiêu đề </label><br>
                        <input type="text" name="tieu_de" class="form-control" id="exampleInputPassword1" value="<?php if (isset($tieu_de) && ($tieu_de != "")) echo $tieu_de; ?>">
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputFile">Hình Ảnh</label>
                            <?php echo "<br>" ?>
                            <?= $anhtt ?>
                            <?php echo "<br><br>" ?>
                            <div class="custom-file">

                                <input type="file" class="custom-file-input" id="exampleInputFile" name="anh_tin_tuc">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Ngày đăng</label>
                        <input type="date" name="ngay_dang" class="form-control" id="exampleInputPassword1" value="<?php if (isset($ngay_dang) && ($ngay_dang != "")) echo $ngay_dang; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mô tả</label>
                        <input type="text" name="mota" class="form-control" id="exampleInputPassword1" value="<?php if (isset($mo_ta) && ($mo_ta != "")) echo $mo_ta; ?>">
                    </div>
                    <div class="form-group">
                        <label>Nội Dung</label>
                        <textarea class="form-control" rows="3" name="noi_dung" value="sjdjjd"><?= $noi_dung ?></textarea>
                    </div>


                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
                    <input type="submit" name="capnhat_tin_tuc" class="btn btn-primary" value="Cập nhật">
                    <button type="reset" class="btn btn-primary">Nhập lại</button>
                    <a href="index.php?act=list_news"> <input type="button" class="btn btn-primary" value="Danh sách"></a>
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