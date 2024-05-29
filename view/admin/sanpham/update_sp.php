<?php
include 'boxleft.php';
if (is_array($result)) {
    extract($result);
    $idsp = $id;
    $mota_sp = $mo_ta;
}
$imgpath = "../../upload/" . $anh_sp;
if (is_file($imgpath)) {
    $hinh_sp = "<img src='" . $imgpath . "' height='80' width='100' > ";
}
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
            <form id="quickForm" action="index.php?act=update_sp" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label>Danh mục sản phẩm </label>
                        <select class="form-control" name="iddm">
                            <?php
                            foreach ($listdm as $value) {
                                extract($value);
                                if ($id_dm == $id) {
                                    echo '  <option value="' . $id . '" selected>' . $ten_dm . '</option>';
                                } else {
                                    echo '  <option value="' . $id . '">' . $ten_dm . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="tensp" value="<?= $ten_sp ?>">
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputFile">Hình ảnh</label>
                            <div class="custom-file" style="display:flex; gap: 500px; align-items: center;">
                                <input type="file" name="anhsp" class="custom-file-input" id="exampleInputFile" value="<?= $hinh_sp ?>" style="float:left;">
                                <div> <?= $hinh_sp ?></div>
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kích thước</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="size" value="<?= $size_sp ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Màu Sắc</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="mausac" value="<?= $mau_sac ?>">
                    </div>
                    
                     <div class="form-group">
                        <label for="exampleInputPassword1">Giá sp</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Giá sản phẩm" name="giasp" value="<?= $gia_sp ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Ngày Nhập</label>
                        <input type="date" class="form-control" id="exampleInputPassword1" value="<?= $ngay_nhap ?>" name="ngaynhap">
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea class="form-control" rows="3" value="" name="mota"><?= $mota_sp ?></textarea>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <input type="hidden" name="idsp" value="<?php if (isset($idsp) &&  $idsp > 0) echo $idsp ?>">
                    <input type="submit" class="btn btn-primary" value="Cập Nhập" name="capnhat">
                    <button type="reset" class="btn btn-primary">Nhập lại</button>
                    <a href="index.php?act=list_sp"> <input type="button" class="btn btn-primary" value="Danh sách"></a>
                </div>
            </form>
        </div>
    </section>
    <!-- /.content -->
</div>