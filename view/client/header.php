<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/presiden/presiden/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Nov 2023 14:48:14 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Presiden – Fashion eCommerce HTML Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../../thu_vien/asset/img/favicon.ico">

    <!-- CSS 
    ========================= -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!--bootstrap min css-->
    <link rel="stylesheet" href="../../thu_vien/asset/css/bootstrap.min.css">
    <!--owl carousel min css-->
    <link rel="stylesheet" href="../../thu_vien/asset/css/owl.carousel.min.css">
    <!--slick min css-->
    <link rel="stylesheet" href="../../thu_vien/asset/css/slick.css">
    <!--magnific popup min css-->
    <link rel="stylesheet" href="../../thu_vien/asset/css/magnific-popup.css">
    <!--font awesome css-->
    <link rel="stylesheet" href="../../thu_vien/asset/css/font.awesome.css">
    <!--ionicons min css-->
    <link rel="stylesheet" href="../../thu_vien/asset/css/ionicons.min.css">
    <!--material design min css-->
    <link rel="stylesheet" href="../../thu_vien/asset/css/material.design.min.css">
    <!--animate css-->
    <link rel="stylesheet" href="../../thu_vien/asset/css/animate.css">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="../../thu_vien/asset/css/jquery-ui.min.css">
    <!--slinky menu css-->
    <link rel="stylesheet" href="../../thu_vien/asset/css/slinky.menu.css">
    <!--plugins css-->
    <link rel="stylesheet" href="../../thu_vien/asset/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="../../thu_vien/asset/css/style.css">

    <!--modernizr min js here-->
    <script src="../../thu_vien/asset/js/vendor/modernizr-3.7.1.min.js"></script>
    <style>
        .momo input{
            width:150px;
            background-color: lightcoral;
            color: #ffffff;
        }

        .quenmk:hover {
            color: #252525;
            font-weight: 700;
        }

        .xoa_cmt {
            color: black;
            font-weight: 700;
            float: right;
            padding-right: 20px;

        }

        .xoa_cmt:hover {
            color: #09c6ab;
        }

        .dangnhap {
            width: 100px;
            margin-right: 30px;
        }

        .dangnhap:hover {
            background-color: #09c6ab;
            color: #fff;
        }

        .dangki:hover {
            background-color: #09c6ab;
            color: #fff;
        }

        .giohang {
            line-height: 44px;
            width: 40px;
            height: 40px;
            text-align: center;
            font-size: 16px;
            background: #ffffff;
            display: block;
            border: none;
            transition: ease .3s all;
            translate: 60px;

        }

        .giohang:hover {
            color: #09c6ab;

        }

        .single_product:hover .action_links button {
            transform: translateX(0);
            transform: translateX(-60px);
        }

        .xoacard {
            background: #252525;
            border: 0;
            color: #ffffff;
            display: inline-block;
            font-size: 12px;
            font-weight: 500;
            height: 38px;
            line-height: 18px;
            padding: 10px 15px;
            text-transform: uppercase;
            cursor: pointer;
            border-radius: 3px;
        }

        .xoacard:hover {
            background-color: #09c6ab;
            color: #fff;
        }
        .abcd:hover{
          background-color: #09c6ab;

        }
    </style>
</head>

<body>

    <!--header area start-->

    <!--offcanvas menu area start-->

    <!--offcanvas menu area end-->

    <header>
        <div class="main_header">
            <div class="header_container sticky-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="index.php"><img src="../../upload/<?= $all_hethong[0]['logo_cuahang'] ?>" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="header_container_right">
                                <!--main menu start-->
                                <div class="main_menu menu_position">
                                    <nav>
                                        <ul>
                                            <li><a class="active" href="index.php">Trang chủ</a>

                                            </li>
                                            <li class="mega_items"><a href="index.php?act=sanpham">Sản Phẩm<i class="fa fa-angle-down"></i></a>
                                                <div class="mega_menu">
                                                    <ul class="mega_menu_inner">
                                                        <li><a href="#">Danh mục sản phẩm</a>
                                                            <?php

                                                            foreach ($all_dm as  $value) {
                                                                extract($value);

                                                                $link = "index.php?act=sanpham&iddm=" . $id;
                                                                echo '<ul>
                                                        <li><a href="' . $link . '">' . $ten_dm . '</a></li> 
                                                        </ul>';
                                                            }
                                                            ?>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="index.php?act=tintuc">Tin Tức </a>
                                                <!-- <ul class="sub_menu pages">
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="services.html">services</a></li>
                                                    <li><a href="faq.html">Frequently Questions</a></li>
                                                    <li><a href="index.php?act=lienhe">contact</a></li>
                                                    <li><a href="login.html">login</a></li>
                                                    <li><a href="404.html">Error 404</a></li>
                                                </ul> -->
                                            </li>
                                            <!-- <li><a href="about.html">about Us</a></li> -->
                                            <li><a href="index.php?act=add_lh"> Liên hệ</a></li>
                                            <?php
                                            if (!isset($_SESSION['user'])) {
                                            ?>
                                                <li><a href="index.php?act=dangnhap_tk"> Đăng Nhập</a></li>

                                            <?php
                                            }
                                            ?>


                                        </ul>
                                    </nav>
                                </div>
                                <!--main menu end-->
                                <div class="header_right_info">
                                    <ul>
                                        <li class="search_box"><a href="javascript:void(0)"><img src="../../thu_vien/asset/img/icon/icon-search.png" alt=""></a>
                                            <div class="search_widget">
                                                <form action="index.php?act=sanpham" method="post">
                                                    <input name="timkiem" placeholder="Tìm kiếm sản phẩm ..." type="text">
                                                    <input style=" position: absolute;top: 0; right: 0; width: 50px;height: auto;border: 0; background: #09c6ab;color: #fff;font-size: 14px;padding: 0;" type="submit" name="smb"></input>
                                                </form>
                                            </div>
                                        </li>
                                        <li class="header_account"><a href="javascript:void(0)"><img src="../../thu_vien/asset/img/icon/icon-account.png" alt=""></a>
                                            <div class="dropdown_account">
                                                <div class="dropdown_account-list">
                                                    <ul>
                                                        <?php
                                                        if (isset($_SESSION['user']['id']) and $_SESSION['user']['id'] > 0) {
                                                        ?>
                                                            <li><a href="#">user: <?= $_SESSION['user']['ho_ten'] ?></a></li>
                                                            <li><a href="index.php?act=edit_tk">Tài Khoản</a></li>
                                                            <li><a href="index.php?act=giohang">Giỏ Hàng</a></li>
                                                            <li><a href="index.php?act=thanhtoan">Thanh toán</a></li>
                                                            <li><a href="index.php?act=logout">Logout</a></li>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <li><a href="index.php?act=edit_tk">Tài Khoản</a></li>
                                                            <li><a href="index.php?act=giohang">Giỏ Hàng</a></li>
                                                            <li><a href="index.php?act=thanhtoan">Thanh toán</a></li>
                                                        <?php
                                                        }


                                                        ?>


                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mini_cart_wrapper">

                                            <a href="javascript:void(0)"><img src="../../thu_vien/asset/img/icon/icon-cart.png" alt="">

                                                <span class="item_count" id="totalProduct"></span>

                                            </a>

                                            <!--mini cart-->
                                            <div class="mini_cart">
                                                <div class="cart_gallery">
                                                    <?php
                                                    $tongtien = 0;
                                                    $i = 0;
                                                    $thanhtien = 0;

                                                    foreach ($_SESSION['mycard'] as $card) {
                                                        $hinh = $card['hinhsp'];
                                                        $tensp = $card['tensp'];
                                                        $soluong = $card['soluong'];
                                                        $giasp = $card['giasp'];
                                                        $thanhtien = $card['soluong'] * $card['giasp'];
                                                        $tongtien += $thanhtien;
                                                        $linkdelete = "index.php?act=deletecard&id_card=" . $i;
                                                        echo '   <div class="cart_item">
                                                        <div class="cart_img">
                                                            <a href="#"><img style="width: 80px; height: 100px;" src="../../upload/' . $hinh . '" alt=""></a>
                                                        </div>
                                                        <div class="cart_info">
                                                            <a href="#">' . $tensp . '</a>
                                                            <p>' . $soluong . ' x <span> ' . $giasp . ' </span></p>
                                                        </div>
                                                        <div class="cart_remove">
                                                            <a href="' . $linkdelete . '"><i class="fa fa-times-circle"></i></a>
                                                        </div>
                                                    </div>';
                                                        $i += 1;
                                                    }
                                                    ?>
                                                </div>
                                                <div class="mini_cart_table">
                                                    <div class="cart_table_border">
                                                        <div class="cart_total">
                                                            <span>Tổng tiền:</span>
                                                            <span class="price"><?= $tongtien ?></span>
                                                        </div>
                                                        <!-- <div class="cart_total mt-10">
                                                            <span>tot:</span>
                                                      
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <div class="mini_cart_footer">
                                                    <div class="cart_button">
                                                        <a href="index.php?act=giohang"><i class="fa fa-shopping-cart"></i>Giỏ Hàng</a>
                                                    </div>
                                                    <div class="cart_button">
                                                        <a href="index.php?act=thanhtoan"><i class="fa fa-sign-in"></i> Thanh Toán</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--mini cart end-->
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>