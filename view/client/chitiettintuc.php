   <!--breadcrumbs area start-->
   <div class="breadcrumbs_area">
       <div class="container">
           <div class="row">
               <div class="col-12">
                   <div class="breadcrumb_content">
                       <ul>
                           <li><a href="index.html">home</a></li>
                           <li>blog details</li>
                       </ul>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!--breadcrumbs area end-->

   <!--blog body area start-->
   <div class="blog_details mt-57">
       <div class="container">
           <div class="row">
               <?php
                if (isset($chitiet_news)) {
                    extract($chitiet_news);
                }
                ?>
               <div class="col-lg-9 col-md-12">
                   <!--blog grid area start-->
                   <div class="blog_wrapper">
                       <article class="single_blog">
                           <figure>
                               <div class="post_header">
                                   <h3 class="post_title"><?= $tieu_de ?></h3>
                                   <div class="blog_meta">
                                       <span class="meta_date">On : <a style="color: black;" href="#"><?= $ngay_dang ?></a></span>
                                   </div>
                               </div>
                               <div class="blog_thumb">
                                   <a href="#"><img style="width: 850px; height: 520px;" src="../../upload/<?= $anh_tin_tuc ?>" alt=""></a>
                               </div>
                               <figcaption class="blog_content">
                                   <div class="post_content">
                                       <p><?= $noi_dung ?></p>
                                   </div>
                                   <div class="entry_content">



                                   </div>
                               </figcaption>
                           </figure>
                       </article>
                       <div class="related_posts">
                           <h3>Có Thể Bạn Quan Tâm</h3>
                           <div class="row">

                               <div class="col-lg-4 col-md-6">
                                   <article class="single_related">
                                       <figure>
                                           <div class="related_thumb">
                                               <img src="../../thu_vien/asset/img/blog/blog5.jpg" alt="">
                                           </div>
                                           <figcaption class="related_content">
                                               <h4><a href="#">Maecenas ultricies</a></h4>
                                               <div class="blog_meta">
                                                   <span class="meta_date"> August 05, 2021 </span>
                                               </div>
                                           </figcaption>
                                       </figure>
                                   </article>
                               </div>
                           </div>
                       </div>



                   </div>
                   <!--blog grid area start-->
               </div>
               <div class="col-lg-3 col-md-12">
                   <div class="blog_sidebar_widget">
                       <div class="widget_list widget_search">
                           <div class="widget_title">
                               <h3>Tìm kiếm</h3>
                           </div>
                           <form action="#">
                               <input placeholder="Search..." type="text">
                               <button type="submit">Tìm kiếm</button>
                           </form>
                       </div>

                       <div class="widget_list widget_post">
                           <div class="widget_title">
                               <h3>Tin tức theo ngày</h3>
                           </div>
                           <?php
                            foreach ($list as $value) {
                                extract($value);
                                $link = "index.php?act=chitiettintuc&idnews=" . $id;
                            ?>
                               <div class="post_wrapper">
                                   <div>
                                       <a href="<?= $link ?>"><img style="width:400px;height: 80px;" src="../../upload/<?= $anh_tin_tuc ?>" alt=""></a>
                                   </div>
                                   <div class="post_info">
                                       <h4 style="font-size: 11px;padding-top: 10px;padding-left:5px;"><a href="<?= $link ?>"><?= $tieu_de ?></a></h4>
                                       <span style="font-size: 11px;padding-top: 10px;padding-left:5px;"><?= $ngay_dang ?></span>
                                   </div>
                               </div>
                           <?php
                            }
                            ?>

                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!--blog section area end-->

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