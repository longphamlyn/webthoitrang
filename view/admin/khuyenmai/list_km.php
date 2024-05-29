<?php
include './boxleft.php';
?>
<div class="content-wrapper">
  <div class="card" style="border: 1px solid gray;  width: 98%; margin: 10px auto;">
    <div class="card-header border-0">
      <h3>Danh sách khuyến mại </h3>
      <div class="search">
        <form action="index.php?act=list_khuyenmai" method="post" style="display: flex;">
          <input type="text" name="keyw" style="width: 150px; height: 30px;">
          <input type="submit" name="ok" value="Tìm kiếm">
        </form>
        <div style="float: right;">
          <a href="index.php?act=add_khuyenmai"> <input type="button" class="btn btn-primary" value="Nhập thêm"></a>
        </div>
      </div>
    </div>
    <div class="card-body table-responsive p-0">
      <table class="table table-striped table-valign-middle">
        <thead>
          <tr>
            <th>ID KM</th>
            <th>tên sản phẩm</th>
            <th>Mã Khuyến Mại</th>
            <th>Tên Khuyến Mại</th>
            <th>Phần Trăm %</th>
            <th>Bắt đầu</th>
            <th>Kết thúc</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($listkm as  $value) {
            extract($value);
            $linkupdate = "index.php?act=sua_km&idkm=" . $id;
            $linkdelete = "index.php?act=xoa_km&idkm=" . $id;
          ?>
            <tr>
              <td><?= $id ?></td>
              <td><?= $ten_sp ?></td>
              <td><?= $ma_km ?></td>
              <td><?= $ten_km ?></td>
              <td><?= $phan_tram ?></td>
              <td><?= $bat_dau ?></td>
              <td><?= $ket_thuc ?></td>
              <?php
              if (isset($_SESSION['user']['id_chucvu']) && ($_SESSION['user']['id_chucvu'] < 2)) {
              ?>
                <td>
                  <a href="<?= $linkupdate ?>" class="btn btn-primary" style="margin-right: 30px;">
                    <i class="bi bi-pencil-fill"></i>
                    Edit
                  </a>
                  <a href="<?= $linkdelete ?>" class="btn btn-primary">
                    <i class="bi bi-trash3-fill"></i>
                    Xóa
                  </a>
                </td>
              <?php
              }

              ?>

            </tr>

          <?php
          }

          ?>


        </tbody>
      </table>
    </div>
  </div>
  <!-- /.card -->


</div>