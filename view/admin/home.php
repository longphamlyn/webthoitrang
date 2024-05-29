<?php
include './boxleft.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
        <?php
            foreach ($sl_order as $value) {
              extract($value);
              echo '<h3>'.$sl.' oder</h3>';
            }
            ?>
          
          <p>Tổng đơn hàng</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="index.php?act=list_don_hang" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>
            <?php
            foreach ($sl_sp as $value) {
              extract($value);
              echo ' ' . $sl . '<sup style="font-size: 20px">sản phẩm</sup></h3>';
            }
            ?>
            <p>Tổng sản phẩm</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="index.php?act=list_sp_bt" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <?php
          foreach ($sl_kh as $value) {
            extract($value);
            echo ' <h3>' . $sl . ' user</h3>';
          }
          ?>

          <p>Tổng khách hàng</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="index.php?act=list_kh" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <?php
          foreach ($sl_news as $value) {
            extract($value);
            echo '  <h3>' . $sl . ' bài viết</h3>';
          }
          ?>
          <p>Tổng bài viết</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="index.php?act=list_news" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->
</div>