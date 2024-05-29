<?php
include 'boxleft.php';
?>
<div class="content-wrapper">
  <div class="card" style="border: 1px solid gray;  width: 98%; margin: 10px auto;">
    <div class="card-header border-0">
      <h3>Danh sách danh mục sản phẩm </h3>

      <div style="float: right;">
        <a href="index.php?act=add_dm"> <input type="button" class="btn btn-primary" value="Nhập thêm"></a>
      </div>
    </div>
    <div class="card-body table-responsive p-0">
      <table class="table table-striped table-valign-middle">
        <thead>
          <tr>
            <th>ID danh mục</th>
            <th>Tên danh mục</th>
            <th>Mô tả</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($list_dm as $listdm) {
            extract($listdm);
            $linkupdate = "index.php?act=sua_dm&iddm=" . $id;
            $linkdelete = "index.php?act=xoa_dm&iddm=" . $id;
          ?>
            <tr>
              <td><?= $id ?></td>
              <td><?= $ten_dm ?></td>
              <td><?= $mo_ta ?></td>
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