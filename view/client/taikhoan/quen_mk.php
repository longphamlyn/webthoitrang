
 <!--breadcrumbs area start-->
 <div class="breadcrumbs_area">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="breadcrumb_content">
                     <ul>
                         <li><a href="index.php">home</a></li>
                         <li>My account</li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--breadcrumbs area end-->

 <!-- customer login start -->
 <div class="customer_login mt-60">
     <div class="container">
         <div class="row">
             <!--login area start-->
             <div class="col-lg-6 col-md-6">
                 <div class="account_form">
                     <h2>Quên mật khẩu</h2>
                     <form action="index.php?act=quen_mk" method="post">
                         <p>

                             <label>email của bạn <span>*</span></label>
                             <input type="email" name="email" placeholder="Nhập email...">
                         </p>
                         <div >
                           <input class="dangnhap" style="width: 150px; margin-left: 350px;"  type="submit" name="gui" value="Gửi">
                         </div>
                         <?php
                                if (isset($thongbao_email) && ($thongbao_email) != "") {
                                    echo "<font color='red'>". $thongbao_email."</font>";
                                }
                        ?>
                     </form>
                 </div>
             </div>
             <!--login area start-->

             <!--register area start-->
             <div class="col-lg-6 col-md-6">
                 <div class="account_form register">
                     <h2>Đổi mật khẩu</h2>
                     <form action="index.php?act=change_mk" method="POST">
                     <p>
                             <label>Mật khẩu cũ<span>*</span></label>
                             
                             <input type="text" name="mk_old" value="<?php if(isset($mk)&&($mk!="")) echo $mk?>">
                         </p>
                         <p>
                             <label>Mật khẩu mới<span>*</span></label>
                             <input type="password" name="pass" placeholder="Mật khẩu mới...">
                         </p>
                         <div >
                             <?php
                                if (isset($thongbao_ud) && ($thongbao_ud) != "") {
                                    echo $thongbao_ud;
                                }
                                ?>
                                <input type="hidden" name="idmk" value="<?php if(isset($id)&&($id!="")) echo $id ;?>">
                               <input  style="width: 150px; margin-left: 350px;" class="dangki" type="submit"  name="capnhatmk" value="Cập nhập">

                         </div>

                     </form>
                 </div>
             </div>
             <!--register area end-->
         </div>
     </div>
 </div>
 <!-- customer login end -->

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