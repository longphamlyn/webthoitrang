 <!--breadcrumbs area start-->
 <div class="breadcrumbs_area">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="breadcrumb_content">
                     <ul>
                         <li><a href="index.php">home</a></li>
                         <li>Chi tiết sản phẩm</li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--breadcrumbs area end-->

 <!--product details start-->
 <div class="product_details variable_product mt-60 mb-60">
     <div class="container">
         <div class="row">
             <div class="col-lg-6 col-md-6">
                 <div class="product-details-tab">
                     <div id="img-1" class="zoomWrapper single-zoom">
                         <a href="#">
                             <img id="zoom1" src="../../upload/<?= $chitiet_sp['anh_sp'] ?>" data-zoom-image="../../upload/<?= $chitiet_sp['anh_sp'] ?>" alt="big-1">
                         </a>
                     </div>

                 </div>
             </div>
             <div class="col-lg-6 col-md-6">
                 <div class="product_d_right">
                     <form action="index.php?act=giohang" method="POST">
                         <h1><a href="#"><?= $chitiet_sp['ten_sp'] ?></a></h1>

                         <div class=" product_ratting">
                             <ul>
                                 <li><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li class="review"><a href="#"> (Đánh giá khách hàng) </a></li>
                             </ul>

                         </div>
                         <div class="price_box">
                             <span class="current_price"><?= number_format($chitiet_sp['gia_sp']) ?><b>đ</b></span>
                             <!-- <span class="old_price">$80.00</span> -->
                         </div>
                         <div class="product_desc">
                             <p> <?= $chitiet_sp['mo_ta'] ?> </p>
                         </div>
                         <div class="product_variant size">
                             <label>Màu Sắc:</label>
                             <b><?= $chitiet_sp['mau_sac'] ?></b>
                         </div>

                         <div class="product_variant size">
                             <label>size:</label>
                             <b><?= $chitiet_sp['size_sp'] ?></b>
                         </div>
                         <div class="product_variant quantity">
                             <label>Số lượng</label>
                             <input  style="width: 40px;text-align: center;" min="1" max="99" value="1" type="text" name="soluong">

                         </div>
                         <div class="product_variant quantity">
                             <input type="hidden" name="id" value="<?= $chitiet_sp['id'] ?>">
                             <input type="hidden" name="name" value="<?= $chitiet_sp['ten_sp'] ?>">
                             <input type="hidden" name="price" value="<?= $chitiet_sp['gia_sp'] ?>">
                             <input type="hidden" name="img" value="<?= $chitiet_sp['anh_sp'] ?>">
                             <input type="hidden" name="mau" value="<?= $chitiet_sp['mau_sac'] ?>">
                             <input type="hidden" name="size" value="<?= $chitiet_sp['size_sp'] ?>">
                             <input class="abcd" style="font-size: 16px;background-color:#09c6ab ;" type="submit" name="addcard" value="Thêm giỏ hàng">
                             <!-- <button class="button" type=""><a href="index.php?act=thanhtoan">thanh toán</a></button> -->
                         </div>


                     </form>

                     <div class="product_d_meta">

                         <span>danh mục: <a href="index.php?act=sanphamct&idsp="><?= $chitiet_sp['ten_dm'] ?></a></span>
                     </div>
                     <div class="priduct_social">
                         <ul>
                             <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i> Like</a></li>
                             <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a></li>

                         </ul>
                     </div>
                 </div>
             </div>

         </div>
     </div>
 </div>
 <!--product details end-->

 <!--product info start-->
 <div class="product_d_info mb-60">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="product_d_inner">
                     <div class="product_info_button">
                         <ul class="nav" role="tablist">

                             <li>
                                 <a data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Bình luận</a>
                             </li>
                         </ul>
                     </div>
                     <div class="tab-content">


                         <div class="tab-pane fade" id="reviews" role="tabpanel">
                             <div class="reviews_wrapper">

                                 <?php
                                    foreach ($cmt as $ds_cmt) {
                                        extract($ds_cmt);
                                        $link = "index.php?act=sanphamct&idsp=$id_sp";
                                        echo ' <div class="reviews_comment_box">
                                 <div class="comment_thmb">
                                     <img src="../../thu_vien/asset/img/blog/comment2.jpg" alt="">
                                 </div>
                                 <div class="comment_text">
                                     <div class="reviews_meta">
                                         <p><strong>' . $namekh . '</strong>- ' . $ngay_cmt . '</p>
                                         <span>' . $noi_dung . '</span>
                                     </div>
                                  
                                 </div>
                             
                             </div>';
                                    }
                                    ?>
                                 <!-- nd cmt -->

                                 <div class="comment_title">
                                     <h2>Thêm 1 bình luận </h2>

                                 </div>
                                 <?php
                                    if (isset($_SESSION['user']['id']) and $_SESSION['user']['id'] > 0) {
                                    ?>
                                     <div style="background-color: #ffffff;" class="product_review_form">
                                         <form action="index.php?act=sanphamct&idsp=<?= $chitiet_sp['id'] ?>" method="post">
                                             <div class="row">
                                                 <div class="col-12">
                                                     <label for="review_comment">Bình Luận </label>
                                                     <input type="hidden" name="idpro" value="<?= $chitiet_sp['id'] ?>">
                                                     <textarea name="noidung" id="review_comment"></textarea>
                                                 </div>
                                             </div>
                                             <div class="cmt">

                                                 <input style="width:100px;height: 40px ;border: none;background: #252525; color: #ffffff;text-transform: uppercase;font-weight: 500;padding: 5px 15px 3px;display: block;-webkit-transition: 0.3s;transition: 0.3s;cursor: pointer;margin-top: 20px;border-radius: 5px;font-size: 13px;" name="binhluan" type="submit" value="Bình luận">
                                             </div>
                                         </form>
                                     </div>
                                 <?php
                                    } else {
                                    ?>

                                     <p style="color: red; padding-top: 10px;">Đăng nhập để bình luận !</p>
                                 <?php

                                    }

                                    ?>
                                 <!-- form cmt -->

                                 <!-- end form cmt -->
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--product info end-->
 <!--product area start-->
 <section class="product_area upsell_products">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="section_title">
                     <h2>Có Thể Bạn Sẽ Thích </h2>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="product_carousel product_column4 owl-carousel">
                 <!-- sp cùng loại -->
                 <?php
                    foreach ($sp_cungloai  as $sp_cl) {
                        extract($sp_cl);
                        $link = "index.php?act=sanphamct&idsp=" . $id;
                    ?>
                     <div class="col-lg-3">
                         <article class="single_product">
                             <figure>
                                 <div class="product_thumb">
                                     <a class="primary_img" href="<?= $link ?>"><img src="../../upload/<?= $anh_sp ?>" alt=""></a>

                                     <div class="action_links">
                                         <ul>
                                             <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>
                                 <figcaption class="product_content">
                                     <div class="product_content-header">
                                         <h4 class="product_name"><a href="<?= $link ?>"><?= $ten_sp ?></a></h4>
                                         <div class="wishlist-btn">
                                             <a href="<?= $link ?>"><i class="zmdi zmdi-favorite-outline"></i></a>
                                         </div>
                                     </div>
                                     <div class="product_price_rating">
                                         <div class="price_box">
                                             <span class="current_price"><?= $gia_sp ?></span>
                                         </div>
                                     </div>
                                 </figcaption>
                             </figure>
                         </article>
                     </div>

                 <?php
                    }
                    ?>

                 <!-- end sp cung loai -->
             </div>
         </div>
     </div>
 </section>
 <!--product area end-->