<?php
include './boxleft.php';
?>
<div class="content-wrapper">
  <div class="card" style="border: 1px solid gray;  width: 98%; margin: 10px auto;">
    <div class="card-header border-0">
      <h3>Danh sách thông tin hệ thống </h3>
      <div style="float: right;">
        <?php
        if (isset($_SESSION['user']['id_chucvu']) && ($_SESSION['user']['id_chucvu'] < 2)) {
        ?>
          <!-- <a href="index.php?act=add_hethong"> <input type="button" class="btn btn-primary" value="Nhập thêm"></a> -->
        <?php
        }
        ?>

      </div>
    </div>
    <div class="card-body table-responsive p-0">
      <table class="table table-striped table-valign-middle">
        <thead>
          <tr>
            <th>ID hệ thống</th>
            <th>Tên cửa hàng</th>
            <th>SĐT</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Logo</th>
            <th>Fax</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($listhethong as $hethong) {
            extract($hethong);
            $suahethong = "index.php?act=sua_ht&id=" . $id;
            $xoahethong = "index.php?act=xoa_ht&id=" . $id;
            $anhlogo = "../../upload/" .  $logo_cuahang;
            if (is_file($anhlogo)) {
              $logo = "<img src='" . $anhlogo . "' height='60px' width='100px'>";
            } else {
              $logo = "no photo";
            }
          ?>
            <tr>
              <td><?= $id ?></td>
              <td><?= $ten_cuahang ?></td>
              <td><?= $sdt_cuahang ?></td>
              <td><?= $email_cuahang ?></td>
              <td><?= $diachi_cuahang ?></td>
              <td><?= $logo ?></td>
              <td><?= $so_fax ?></td>
              <?php
              if (isset($_SESSION['user']['id_chucvu']) && ($_SESSION['user']['id_chucvu'] < 2)) {
              ?>
                <td>
                  <a href="<?= $suahethong ?>" class="btn btn-primary" style="margin-right: 30px;">
                    <i class="bi bi-pencil-fill"></i>
                    Edit
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
</div>