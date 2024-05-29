<?php
include 'boxleft.php';
 is_array( $one_km );
 extract( $one_km );
 $idkm=$id;
 $mota_km=$mo_ta;
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
      <form id="quickForm" action="index.php?act=update_km" method="POSt">
        <div class="card-body">
          <div class="form-group">
            <label>Tên sản Phẩm</label>
            <select class="form-control" name="id_sp">
              <?php
              foreach ($listsp as $value) {
                extract($value);
                if ($id_sp == $id) {
                    echo '  <option value="' . $id . '" selected>' . $ten_sp . '</option>';
                } else {
                    echo '  <option value="' . $id . '">' . $ten_sp . '</option>';
                }
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">mã khuyến mại</label>
            <input type="text" name="makm" class="form-control" id="exampleInputPassword1" value="<?=$ma_km?>">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Tên khuyến mại </label><br>
            <input type="text" name="tenkm" class="form-control" id="exampleInputPassword1" value="<?=$ten_km?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Phần trăm khuyến mại</label>
            <input type="number" name="phantram" class="form-control" id="exampleInputPassword1" value="<?=$phan_tram?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">ngày bắt đầu</label>
            <input type="date" name="ngaybd" class="form-control" id="exampleInputPassword1" value="<?=$bat_dau?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">ngày kết thúc</label>
            <input type="date" name="ngaykt" class="form-control" id="exampleInputPassword1" value="<?=$ket_thuc?>">
          </div>
          <div class="form-group">
            <label>Mô tả</label>
            <textarea name="mota" class="form-control" rows="3" placeholder="Enter ..."><?= $mota_km?></textarea>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
          <input type="hidden" name="idkm" value="<?php if (isset($idkm) &&  $idkm > 0) echo $idkm ?>">
            <input type="submit" name="capnhat" class="btn btn-primary" value="Cập Nhật">
            <button type="reset" class="btn btn-primary">Nhập lại</button>
            <a href="index.php?act=list_khuyenmai"> <input type="button" class="btn btn-primary" value="Danh sách"></a>
          </div>
      </form>
    </div>
    <!-- /.card -->


  </section>
  <!-- /.content -->

</div>