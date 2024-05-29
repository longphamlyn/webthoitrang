<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">Trang chủ</a></li>
                        <li>Tài Khoản</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->
<!-- my account start  -->
<section class="main_content_area">
    <div class="container">
        <div class="account_dashboard">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button">
                        <ul role="tablist" class="nav flex-column dashboard-list">
                            <li> <a href="#orders" data-bs-toggle="tab" class="nav-link active">Đơn hàng</a></li>
                            <li><a href="#account-details" data-bs-toggle="tab" class="nav-link">Thông tin tài khoản</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content">
                        <div class="tab-pane fade show active" id="dashboard">
                            <h3>Lịch sử đơn hàng</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Đơn hàng</th>
                                            <th>Ngày đặt</th>
                                            <th>Tổng đơn</th>
                                            <th>Trạng thái</th>
                                            <th>Chi tiết</th>
                                            <th>More</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($list_donhang as $donhang) {
                                            extract($donhang);
                                            $link = "index.php?act=chitiet_donhang&idhd=" . $id;
                                            $links = "index.php?act=huydonhang&idhd=" . $id;
                                            $link_final = "index.php?act=nhanhang&idhd=" . $id;
                                            if (isset($donhang['trang_thai']) && $donhang['trang_thai']) {
                                                $tt = $donhang['trang_thai'];
                                            } else {
                                                $tt = 0;
                                            }
                                            $ttdh = trangthai_donhang($tt);
                                        ?>
                                            <tr>
                                                <td>MHD-0<?= $id ?></td>
                                                <td><?= $ngay_dat ?></td>
                                                <td><?= number_format($tong_hd)  ?> <b>Với</b> <?= $so_item ?> Sản phẩm </td>
                                                <td><span class="success"><?= $ttdh ?></span></td>
                                                <td><a href="<?= $link ?>" class="view">Xem</a></td>
                                                <?php
                                                if (isset($donhang['trang_thai']) && $donhang['trang_thai'] != 2 && $donhang['trang_thai'] != 3 && $donhang['trang_thai'] != 4 && $donhang['trang_thai'] != 5) {
                                                ?>
                                                    <td><a href="<?= $links ?>"><button>Hủy</button></a></td>
                                                <?php
                                                }
                                                ?>
                                                <!-- nhanhang -->
                                                <?php
                                                if (isset($donhang['trang_thai']) && $donhang['trang_thai'] !=0 && $donhang['trang_thai'] !=1 && $donhang['trang_thai'] != 4 && $donhang['trang_thai'] != 5) {
                                                ?>
                                                    <td><a href="<?= $link_final ?>">Đã nhận</a></td>
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
                        <div class="tab-pane" id="account-details">
                            <h3 style="padding-top: 60px;">Chi tiết tài khoản </h3>
                            <div class="login">
                                <div class="login_form_container">
                                    <div class="account_login_form">
                                        <form action="index.php?act=edit_tk" method="post">
                                           
                                            <label>Tài Khoản</label>
                                            <input type="text" name="user" value="<?php if (isset($user_name) && ($user_name != "")) echo $user_name; ?>">
                                            <label>Mật khẩu</label>
                                            <input type="text" name="pass" value="<?php if (isset($pass) && ($pass != "")) echo $pass; ?>">
                                            <label>Họ và Tên</label>
                                            <input type="text" name="fullname" value="<?php if (isset($ho_ten) && ($ho_ten != "")) echo $ho_ten; ?>">
                                            <label>Ngày Sinh</label>
                                            <input type="date" placeholder="MM/DD/YYYY" name="date" value="<?php if (isset($ngay_sinh) && ($ngay_sinh != "")) echo $ngay_sinh; ?>">
                                            <label>Số Điện thoại</label>
                                            <input type="text" name="sdt" value="<?php if (isset($sdt) && ($sdt != "")) echo $sdt ?>">
                                            <label>Email</label>
                                            <input type="text" name="email" value="<?php if (isset($email) && ($email != "")) echo $email; ?>">
                                            <label>Địa chỉ</label>
                                            <input type="Text" name="addr" value="<?php if (isset($dia_chi) && ($dia_chi != "")) echo $dia_chi; ?>">
                                            <br>
                                            <div class="save_button primary_btn default_button">
                                                <input class="dangki" name="capnhat" style="width: 150px; " type="submit" value="Cập nhật">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- my account end   -->
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