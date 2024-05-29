    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">Trang chủ</a></li>
                            <li>Liên Hệ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--contact map start-->
    <div class="contact_map mt-60">
       <div class="map-area">
          <div id="googleMap"><iframe  src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d251637.95196238213!2d105.6189045!3d9.779349!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1700764544637!5m2!1svi!2s" width="1500" height="450" style="border:0; padding-left: 20px;"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
       </div>
    </div>
    <!--contact map end-->
    
    <!--contact area start-->
    <div class="contact_area">
        <div class="container">   
            <div class="row">
                <div class="col-lg-6 col-md-12">
                   <div class="contact_message content">
                        <h3>Liên Hệ</h3>    
                         <p style="text-align: justify;width: 485px;">Sự rõ ràng cũng là một quá trình năng động tuân theo những thói quen luôn thay đổi của người đọc.
                        Thật đáng ngạc nhiên khi lưu ý rằng văn học Gothic, thứ mà ngày nay chúng ta cho là ít rõ ràng,
                        đã có trước các hình thức văn học của con người như thế nào. kéo theo sự thay đổi trong thói
                        quen của độc giả. Thật đáng ngạc nhiên khi nhận thấy làm thế nào</p>
                        <ul>
                            <li><i class="fa fa-fax"></i>  Address :<?=$all_hethong[1]['diachi_cuahang']?></li>
                            <li><i class="fa fa-phone"></i> <a href="#"><?=$all_hethong[1]['email_cuahang']?></a></li>
                            <li><i class="fa fa-envelope-o"></i><a href="tel:0(1234)567890"><?=$all_hethong[1]['sdt_cuahang']?></a>  </li>
                        </ul>             
                    </div> 
                </div>
                <div class="col-lg-6 col-md-12">
                   <div class="contact_message form">
                        <h3>Hãy cho chúng tôi biết mong muốn của bạn </h3>   
                        <form  action="index.php?act=add_lh" method="POST" >
                            <p>  
                               <label>Tên khách hàng</label>
                                <input name="name" value="<?php if (isset($_SESSION['user']['ho_ten']) and $_SESSION['user']['ho_ten']!="") echo $_SESSION['user']['ho_ten'] ?>" type="text"> 
                            </p>
                          
                            <div class="contact_textarea">
                                <label>  Tin nhắn của bạn</label>
                                <textarea placeholder="Nội dung *" name="noidung"  class="form-control2" ></textarea>     
                            </div> 
                            <?php
                            if (isset($_SESSION['user']) and $_SESSION['user']) {
                                ?>
                                <button type="submit" name="gui"> Gửi</button>
                            <?php 
                            } else{
                                ?>
                                <p style="color: red;">*Bạn hãy đăng nhập để gửi liên hệ với chúng tôi !</p>
                                <?php
                            }
                            ?>
                           <?php
                            if (isset($thongbao) && ($thongbao) != "") {
                                echo $thongbao;
                            }
                            ?>  
                            <p class="form-messege"></p>
                        </form> 

                    </div> 
                </div>
            </div>
        </div>    
    </div>

    <!--contact area end-->

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