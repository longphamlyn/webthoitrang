<!--breadcrumbs a
    rea start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.php">Trang chủ</a></li>
                        <li>Giỏ hàng</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->
<!--shopping cart area start -->
<div class="shopping_cart_area mt-60">
    <div class="container">
        <form>
            <div class="row">
                <form>
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Xóa</th>
                                            <th class="product_thumb">Ảnh sản phẩm</th>
                                            <th class="product_name">Tên sản phẩm </th>
                                            <th class="product-price">Size </th>
                                            <th class="product-price">Màu sắc </th>
                                            <th class="product-price">Giá Sản phẩm</th>
                                            <th class="product_quantity">Số lượng</th>
                                            <th class="product_total">Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $tienphaitra = 0;
                                        $tongtien = 0;
                                        $i = 0;
                                        $thanhtien = 0;
                                        foreach ($_SESSION['mycard'] as $card) {
                                            $id = $card['id'];
                                            $hinh = $card['hinhsp'];
                                            $tensp = $card['tensp'];
                                            $soluong = $card['soluong'];
                                            $giasp = $card['giasp'];
                                            $sizesp = $card['size'];
                                            $mausp = $card['mausp'];
                                            $thanhtien = $card['giasp'] * $card['soluong'];
                                            $tongtien += $thanhtien;
                                            $linkdelete = "index.php?act=deletecard&id_card=" . $i;
                                            if (isset($phantramkm) && ($phantramkm != "")) {
                                                $tienkm = $tongtien * $phantramkm / 100;
                                                $tienphaitra = $tongtien - $tienkm;
                                            } else {
                                                $tienkm = 0;
                                                $tienphaitra = $tongtien;
                                            }
                                        ?>
                                            <tr>
                                                <td class="product_remove"><a href="<?= $linkdelete ?>"><i class="fa fa-trash-o"></i></a></td>
                                                <td class="product_thumb"><a href="#"><img src="../../upload/<?= $hinh ?>" alt=""></a></td>
                                                <td class="product_name"><a href="#"><?= $tensp ?></a></td>
                                                <td class="product-price"><a href="#"><?= $sizesp ?></a></td>
                                                <td class="product-price"><a href="#"><?= $mausp ?></a></td>
                                                <td class="product-price"><?= number_format($giasp) ?><b>đ</b></td>

                                                <td class="product_quantity">
                                                    <a href="index.php?act=trugiohang&idsp=<?= $id ?>"><i class="bi bi-dash"></i></a>
                                                    <?= $soluong ?>
                                                    <a href="index.php?act=conggiohang&idsp=<?= $id ?>"><i class="bi bi-plus"></i></a>

                                                </td>
                                                <td class="product_total"><?= number_format($thanhtien) ?><b>đ</b></td>
                                            </tr>
                                        <?php
                                            $i += 1;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart_submit">
                                <a href="index.php?act=deletecard"> <input type="button" value="xóa" class="xoacard"></a>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!--coupon code area start-->
            <div class="coupon_area">
                <div class="row">
                    <div class="col-lg-6 col-md-6">

                        <div class="coupon_code left">

                            <form action="#" method="POST">
                                <input type="hidden" name="makm" placeholder="Coupon code">
                                <div>
                                    <input type="hidden" name="up" value="nhap"></input>
                                </div>
                            </form>
                        </div>
                        <div class="coupon_code left">
                            <h3>Khuyến Mại</h3>
                            <div class="coupon_inner">
                                <form action="index.php?act=khuyenmai" method="post">
                                    <p>
                                        <label>Nhập mã khuyến mại <span>*</span></label>
                                        <input type="text" name="makm" placeholder="Mã khuyến mại...">
                                    </p>
                                    <div>
                                        <input class="dangnhap" type="submit" name="guikm" value="Xác nhận">
                                    </div>
                                    <?php
                                    if (isset($thongbao_email) && ($thongbao_email) != "") {
                                        echo "<font color='red'>" . $thongbao_email . "</font>";
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code right">
                            <h3>Tổng tiền</h3>
                            <div class="coupon_inner">
                                <div class="cart_subtotal">
                                    <p>Tổng tiền</p>
                                    <p class="cart_amount"><?= number_format($tongtien) ?><b>đ</b></p>
                                </div>
                                <div class="cart_subtotal ">
                                    <p>Khuyến mại (<?php if (isset($phantramkm) && ($phantramkm != "")) echo $phantramkm ?>%)</p>
                                    <p class="cart_amount"><span>:</span><?php if (isset($tienkm) && ($tienkm != "")) echo number_format($tienkm) ?><b>đ</b></p>
                                </div>
                                <div class="cart_subtotal">
                                    <p>Tổng tiền phải trả</p>
                                    <p class="cart_amount"><?= number_format($tienphaitra) ?><b>đ</b></p>
                                </div>
                                <div class="checkout_btn">
                                    <a href="index.php?act=thanhtoan">Thanh toán đơn hàng </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--coupon code area end-->
        </form>
    </div>
</div>
<!--shopping cart area end -->
<!--brand area start-->
<div class="brand_area color_five">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="brand_container owl-carousel">
                    <div class="single_brand">
                        <a href="#"><img src="../../thu_vien/asset/img/brand/brand1.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="../../thu_vien/asset/img/brand/brand2.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="../../thu_vien/asset/img/brand/brand3.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="../../thu_vien/asset/img/brand/brand4.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="../../thu_vien/asset/img/brand/brand5.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="../../thu_vien/asset/img/brand/brand6.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="../../thu_vien/asset/img/brand/brand2.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--brand area end-->