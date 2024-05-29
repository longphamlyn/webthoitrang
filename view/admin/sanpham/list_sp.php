<?php
include 'boxleft.php';
?>
<div class="content-wrapper">


  <div class="card" style="border: 1px solid gray;  width: 98%; margin: 10px auto;">
    <div class="card-header border-0">
      <h3>Danh sách sản phẩm </h3>
      <div class="search">
        <form action="index.php?act=list_sp" method="post" style="display: flex;">
          <input type="text" name="keyw" style="width: 150px; height: 30px;">
          <select name="iddm" id="" style="width: 60px; height: 30px;">
            <option value="0" selected>tất cả</option>
            <?php
            foreach ($listdm as  $value) {
              extract($value);
              echo '  <option value="' . $id . '">' . $ten_dm . '</option>';
            }
            ?>
          </select>
          <input type="submit" name="listok" value="Tìm kiếm">
        </form>
        <div style="float: right;">
          <a href="index.php?act=add_sp"> <input type="button" class="btn btn-primary" value="Nhập thêm"></a>
        </div>
      </div>

    </div>

    <div class="card-body table-responsive p-0">
      <table class="table table-striped table-valign-middle">
        <thead>
          <tr>
            <th>mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Ảnh sản Phẩm</th>
            <th>Size</th>
            <th>Màu sắc</th>
            <th>Giá Sản phẩm</th>
            <th>Ngày Nhập</th>


          </tr>
        </thead>
        <tbody>

          <?php
          foreach ($listsp  as $list_sp) {
            extract($list_sp);
            $linkupdate = "index.php?act=sua_sp&idsp=" . $id;
            $linkdelete = "index.php?act=xoa_sp&idsp=" . $id;
            $imgpath = "../../upload/" . $anh_sp;
            if (is_file($imgpath)) {
              $hinh_sp = "<img src='" . $imgpath . "' height='60' width='80'> ";
            }
          ?>
            <tr>
              <td><?= $id ?></td>
              <td><?= $ten_sp ?></td>
              <td><?= $hinh_sp ?></td>
              <td><?= $size_sp ?></td>
              <td><?= $mau_sac ?></td>
              <td><?= $gia_sp ?></td>
              <td><?= $ngay_nhap ?></td>
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
                    xóa
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