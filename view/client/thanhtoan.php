  <!--breadcrumbs area start-->
  <div class="breadcrumbs_area">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="breadcrumb_content">
                      <ul>
                          <li><a href="index.html">Trang chủ</a></li>
                          <li>Kiểm tra đơn hàng</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--breadcrumbs area end-->
  <!--Checkout page section-->
  <div class="Checkout_section mt-60">
      <div class="container">
          <div class="row">
              <div class="col-12">
              </div>
          </div>
          <div class="checkout_form">
              <form action="index.php?act=ht_donhang" method="POST">
                  <div class="row">
                      <div class="col-lg-6 col-md-6">
                          <h3>Thông tin khách hàng</h3>
                          <div class="row">
                              <div class="col-12 mb-20">
                                  <label>Tên khách hàng</label>
                                  <input type="text" name="name" value="<?php if (isset($_SESSION['user']['ho_ten']) and $_SESSION['user']['ho_ten'] != "") echo $_SESSION['user']['ho_ten'] ?>">
                              </div>

                              <div class="col-12 mb-20">
                                  <label>Địa chỉ khách hàng <span>*</span></label>
                                  <input placeholder="Địa chỉ ..." type="text" name="addr" value="<?php if (isset($_SESSION['user']['dia_chi']) and $_SESSION['user']['dia_chi'] != "") echo $_SESSION['user']['dia_chi'] ?>">
                              </div>

                              <div class="col-lg-6 mb-20">
                                  <label>Số điện thoại<span>*</span></label>
                                  <input type="text" name="sdt" value="<?php if (isset($_SESSION['user']['sdt']) and $_SESSION['user']['sdt'] != "") echo $_SESSION['user']['sdt'] ?>">

                              </div>
                              <div class="col-lg-6 mb-20">
                                  <label> Địa chỉ email <span>*</span></label>
                                  <input type="text" placeholder="Email..." name="email" value="<?php if (isset($_SESSION['user']['email']) and $_SESSION['user']['email'] != "") echo $_SESSION['user']['email'] ?>">

                              </div>
                              <div class="col-12">
                                  <div class="order-notes">
                                      <label for="order_note">Ghi chú khách hàng</label>
                                      <textarea id="order_note" placeholder="Ghi chú..." name="ghichu"></textarea>
                                  </div>
                              </div>
                              <div class="card-body1">
                                  <b>*Vui lòng kiểm tra lại đơn hàng và địa chỉ giao hàng của bạn! Xin cám ơn.</b>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                          <h3>Đơn hàng của bạn</h3>
                          <div class="order_table table-responsive">
                              <table>
                                  <thead>
                                      <tr>
                                          <th>Sản phẩm</th>
                                          <th>Thành tiền</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        if (is_array($_SESSION['mycard'])) {

                                            $tongtien = 0;
                                            $thanhtien = 0;
                                            foreach ($_SESSION['mycard'] as  $card) {
                                                $hinh = $card['hinhsp'];
                                                $tensp = $card['tensp'];
                                                $soluong = $card['soluong'];
                                                $giasp = $card['giasp'];
                                                $thanhtien = $card['giasp'] * $card['soluong'];
                                                $tongtien += $thanhtien;
                                        ?>
                                              <tr>
                                                  <td> <?= $tensp ?><strong> × <?= $soluong ?></strong></td>
                                                  <td><?= number_format($thanhtien) ?></td>
                                              </tr>
                                      <?php
                                            }
                                        }
                                        ?>
                                  </tbody>
                                  <tfoot>
                                      <tr>
                                          <th>Tổng tiền</th>
                                          <td><?= number_format($tongtien) ?></td>
                                      </tr>

                                      <?php
                                        if (isset($_SESSION['khuyenmai']['phan_tram']) and $_SESSION['khuyenmai']['phan_tram'] != "") {
                                        ?>
                                          <tr>
                                              <input type="hidden" name="idkm" value="<?= $_SESSION['khuyenmai']['id'] ?>">
                                              <th>Khuyến mại: <?php echo $_SESSION['khuyenmai']['phan_tram'] ?>(%)</th>
                                              <td><strong><?= number_format($tongtien * $_SESSION['khuyenmai']['phan_tram'] / 100) ?></strong></td>
                                          </tr>
                                          <tr class="order_total">
                                              <th>Còn Lại</th>
                                              <td><strong><?= number_format($tongtien - ($tongtien * $_SESSION['khuyenmai']['phan_tram']) / 100) ?></strong></td>
                                          </tr>
                                      <?php
                                        }
                                        ?>

                                  </tfoot>
                              </table>
                          </div>


                          <?php
                            if (isset($_SESSION['mycard']) && $_SESSION['mycard'] != []) {
                            ?>
                              <div class="panel-default">
                                  <h4>Phương thức thanh toán</h4>
                                  <label><input id="payment_defult" type="radio" value="Trả tiền mặt" name="pttt"> Thanh toán khi nhận hàng</label>
                                  <!-- <label><input id="payment_defult" type="radio" value="2" name="pttt"> Thanh toán momo</label> -->
                              </div>
                              <!-- <div onclick="handlePayment()">Thanh toan</div> -->
                              <div class="order_button">
                                  <input style="width: 150px;border: 0,5px solid black;margin-left:404px ;" class="dangnhap" type="submit" name="dathang" value="Hoàn tất "></input>
                              </div>
                          <?php
                            } else {
                            ?>
                              <p style="color: red;"> * Bạn chưa chọn sản phẩm để thanh toán !</p>
                          <?php
                            }

                            ?>

                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
  <!--Checkout page section end-->

  <!--brand area start-->
  <div class="brand_area color_five">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="brand_container owl-carousel">
                      <div class="single_brand">
                          <a href="#"><img src="assets/img/brand/brand1.png" alt=""></a>
                      </div>
                      <div class="single_brand">
                          <a href="#"><img src="assets/img/brand/brand2.png" alt=""></a>
                      </div>
                      <div class="single_brand">
                          <a href="#"><img src="assets/img/brand/brand3.png" alt=""></a>
                      </div>
                      <div class="single_brand">
                          <a href="#"><img src="assets/img/brand/brand4.png" alt=""></a>
                      </div>
                      <div class="single_brand">
                          <a href="#"><img src="assets/img/brand/brand5.png" alt=""></a>
                      </div>
                      <div class="single_brand">
                          <a href="#"><img src="assets/img/brand/brand6.png" alt=""></a>
                      </div>
                      <div class="single_brand">
                          <a href="#"><img src="assets/img/brand/brand2.png" alt=""></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--brand area end-->