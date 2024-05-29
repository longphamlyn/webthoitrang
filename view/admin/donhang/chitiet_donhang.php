<?php
include './boxleft.php';
isset( $ist_dh);
extract( $ist_dh);

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="invoice p-3 mb-3" style="border: 1px solid gray;  width: 98%; margin: 10px auto;">

    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h4>
          <i class="fas fa-globe"></i> CHi tiết đơn hàng
        </h4>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <address>
          <strong>Tên khách hàng: </strong><?php if (isset( $ist_dh['ten_kh']) && ($ist_dh['ten_kh'] != "")) echo $ist_dh['ten_kh']?><br>
          <strong>Address: </strong> <?php if (isset( $ist_dh['dia_chi']) && ($ist_dh['dia_chi'] != "")) echo $ist_dh['dia_chi']?><br>
          <strong>Phone: </strong> <?php if (isset( $ist_dh['sdt']) && ($ist_dh['sdt'] != "")) echo $ist_dh['sdt']?><br>
          <strong>Email: </strong> <?php if (isset( $ist_dh['email']) && ($ist_dh['email'] != "")) echo $ist_dh['email']?><br>
        </address>
      </div>
      <!-- /.col -->
      <div style="margin-top: 10px;" class="col-sm-4 invoice-col">
        <b>Mã Khuyến Mại:# MKM-0<?php if (isset( $ist_dh['id_km']) && ($ist_dh['id_km'] != "")) echo $ist_dh['id_km']?></b><br>
        <b>Mã HD:</b>HD-<?php if (isset( $ist_dh['id']) && ($ist_dh['id'] != "")) echo $ist_dh['id']?><br>
       
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Id hdct</th>
              <th>Tên SP</th>
              <th>Màu Sắc</th>
              <th>Size</th>
              <th>Số lượng</th>
              <th>Đơn giá</th>
              <th>Thành tiền</th>
              <th>Trạng thái</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $tong_tien=0;
            $tien_km=0;
            foreach ($cthd as $value) {
              extract($value);
              $linkupdate = "index.php?act=update_ctdh&idcthd=" . $id;
              $ttdh = trangthai_donhang(  $trang_thai);
              echo '<tr>
                        <td>' . $id . '</td>
                        <td>' . $ten_sp . '</td>
                        <td>' . $mau_sac . '</td>
                        <td>' . $size_sp . '</td>
                        <td>' . $so_luong . '</td>
                        <td>' . number_format($don_gia) . '</td>
                        <td>' . number_format($thanh_tien) . '</td>
                        <td>' . $ttdh . '</td>
                      </tr>
                     ';
             
            }
            ?>
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
        <p class="lead">Payment Methods:</p>
        <img src="../../thu_vien/dist/img/credit/visa.png" alt="Visa">
        <img src="../../thu_vien/dist/img/credit/mastercard.png" alt="Mastercard">
        <img src="../../thu_vien/dist/img/credit/american-express.png" alt="American Express">
        <img src="../../thu_vien/dist/img/credit/paypal2.png" alt="Paypal">
      </div>
      <!-- /.col -->
      <div class="col-6">
      
        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Tổng Tiền:</th>
              <td><?=$tong_hd?></td>
            </tr>
            <tr>
              <th>Số Tiền Phải Trả:</th>
              <td><?= $tong_hd?></td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- this row will not appear when printing -->
    <div class="row no-print">

      <div class="col-12">
        <a href="index.php?act=list_don_hang"> <button type="submit" class="btn btn-success float-right">Danh Sách
          </button></a>
      </div>
    </div>
  </div>
</div>