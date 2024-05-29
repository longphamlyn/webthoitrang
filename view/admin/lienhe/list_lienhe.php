<?php
include 'boxleft.php';
?>
<div class="content-wrapper">
  <div class="card" style="border: 1px solid gray;  width: 98%; margin: 10px auto;">
    <div class="card-header border-0">
      <h3>Danh sách liên hệ </h3>
    </div>
    <div class="card-body table-responsive p-0">
      <table class="table table-striped table-valign-middle">
        <thead>
          <tr>
            <th>ID</th>
            <th>Tên Khách hàng</th>
            <th>Nội Dung</th>
            <th>Trạng Thái </th>
        
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($list_lh as $value) {
            extract($value);
            $linkupdate = "index.php?act=sua_lh&idlh=" . $id;
            $linkdelete = "index.php?act=xoa_lh&idlh=" . $id;
            if (isset($value['trang_thai']) && $value['trang_thai']) {
              $tt = $value['trang_thai'];
          } else {
              $tt = 0;
          }
          $ttlh = status_contact($tt);
          ?>
            <tr>
              <td><?= $id ?></td>
              <td><?= $ho_ten ?></td>
              <td><?= $noi_dung ?></td>
              <td><?= $ttlh ?></td>
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