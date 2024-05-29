 <!--breadcrumbs area start-->
 <div class="breadcrumbs_area">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="breadcrumb_content">
                     <ul>
                         <li><a href="index.php">Trang chủ</a></li>
                         <li>Tin Tức </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--breadcrumbs area end-->

 <!--blog area start-->
 <div class="blog_page_section mt-57">
     <div class="container">
         <div class="row">
             <div class="col-lg-9 col-md-12">
                 <div class="blog_wrapper">
                     <div class="blog_header">
                         <h1>Tổng Hợp Tin Tức</h1>
                     </div>
                     <div class="row">



                         <!-- stars news -->
                         <?php
                            foreach ($list_news as $list) {
                                extract($list);
                                $link = "index.php?act=chitiettintuc&idnews=" . $id;
                            ?>
                             <div class="col-lg-6 col-md-6">
                                 <article class="single_blog">
                                     <figure>
                                         <div class="blog_thumb">
                                             <a href="<?= $link ?>"><img style="width: 342px;height: 235px;" src="../../upload/<?= $anh_tin_tuc ?>" alt=""></a>
                                         </div>
                                         <figcaption class="blog_content">
                                             <h4 style="width: 340px; font-size: 14px;" class="post_title"><a href="<?= $link ?>"><?= $list['tieu_de'] ?></a></h4>
                                             <p style="width: 340px; text-align: justify;" class="post_desc"><?= $list['mo_ta'] ?></p>
                                             <footer class="btn_more">
                                                 <a href="<?= $link ?>"> Đọc thêm... <i class="zmdi zmdi-long-arrow-right"></i></a>
                                             </footer>
                                         </figcaption>
                                     </figure>
                                 </article>
                             </div>
                         <?php
                            }
                            ?>

                         <!-- end news -->
                     </div>
                 </div>
             </div>
             <div class="col-lg-3 col-md-12">
                 <div class="blog_sidebar_widget">
                     <div class="widget_list widget_search">
                         <div class="widget_title">
                             <h3>Tìm kiếm</h3>
                         </div>
                         <form action="index.php?act=tintuc" method="post">
                             <input placeholder="Search..." type="text" name="keyw">
                             <button type="submit" name="smb">Tìm kiếm</button>
                         </form>
                     </div>

                     <div class="widget_list widget_post">
                         <div class="widget_title">
                             <h3>Tin tức theo ngày</h3>
                         </div>
                         <!-- stars news  -->

                          <?php
                            foreach ($list_date as $tintuc) {
                                extract($tintuc);
                                $link = "index.php?act=chitiettintuc&idnews=" . $id; 
                            ?>
                               <div class="post_wrapper">
                                   <div >
                                       <a href="<?=$link?>"><img style="width:400px;height: 80px;" src="../../upload/<?=$anh_tin_tuc?>"></a>
                                   </div>
                                   <div class="post_info">
                                       <h4 style="font-size: 11px;padding-top: 10px;padding-left:5px;"><a href="<?=$link?>"><?=$tieu_de?></a></h4>
                                       <span style="font-size: 11px;padding-top: 10px;padding-left:5px;"><?=$ngay_dang?></span>
                                   </div>
                               </div>
                           <?php
                            }
                            ?>

                         <!-- ends news  -->
                     </div>


                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--blog area end-->

 <!--blog pagination area start-->
 <div class="blog_pagination">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="pagination">
                     <ul>
                         <li class="current">1</li>
                         <li><a href="#">2</a></li>
                         <li><a href="#">3</a></li>
                         <li class="next"><a href="#">next</a></li>
                         <li><a href="#">>></a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--blog pagination area end-->

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