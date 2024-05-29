    <!--slider area start-->
    <main>
        <section class="slider_section">

            <div class="slider_area slider_one_area owl-carousel">
                <?php
                foreach ($all_baner as  $value) {
                    extract($value);

                ?>

                    <div class="single_slider d-flex align-items-center" data-bgimg="../../upload/<?= $hinh_anh ?>">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-7" style="margin-left: 500px;">
                                    <div class="slider_content content_left">
                                        <h1><?= $ten ?></h1>
                                        <h2><?= $mo_ta ?></h2>
                                        <a class="button" href="<?= $link ?>">XEM THÊM</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php

                }

                ?>
            </div>
        </section>
        <!--slider area end-->

        <!--banner area start-->

        <!--banner area end-->

        <!--product area start-->
        <div class="product_area mb-62" style="padding-top: 100px;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-header">
                            <div class="section_title">
                                <h2>Sản Phẩm Mới Nhất</h2>
                                <p>Những sản phẩm mới nhất tại cửa hàng và xu thế thời trang hiện đại</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="men" role="tabpanel">
                        <div class="row">
                            <div class="product_carousel product_column4 owl-carousel">
                                <!-- one sp -->
                                <?php
                                foreach ($all_sp as $value) {
                                    extract($value);
                                    $link = "index.php?act=sanphamct&idsp=" . $id;
                                ?>
                                    <div class="col-lg-3">
                                        <article class="single_product">
                                            <figure>
                                                <form action="index.php?act=giohang" method="post">
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="<?= $link ?>"><img src="../../upload/<?= $anh_sp ?>" alt=""></a>

                                                        <div class="action_links">
                                                            <ul>
                                                                <input type="hidden" name="id" value="<?= $id ?>">
                                                                <input type="hidden" name="name" value="<?= $ten_sp ?>">
                                                                <input type="hidden" name="price" value="<?= $gia_sp ?>">
                                                                <input type="hidden" name="img" value="<?= $anh_sp ?>">
                                                                <input type="hidden" name="mau" value="<?= $mau_sac ?>">
                                                                <input type="hidden" name="size" value="<?= $size_sp ?>">
                                                                <button type="submit" name="addcard" class="giohang"><i class="zmdi zmdi-shopping-cart"></i></button>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <div class="product_content-header">
                                                            <h4 class="product_name"><a href="<?= $link ?>"><?= $ten_sp ?></a></h4>
                                                            <div class="wishlist-btn">

                                                            </div>
                                                        </div>
                                                        <div class="product_price_rating">
                                                            <div class="price_box">
                                                                <span class="current_price">$<?= number_format($gia_sp) ?></span>
                                                            </div>
                                                            <div class="product_rating">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </form>
                                            </figure>
                                        </article>
                                    </div>

                                <?php
                                }
                                ?>

                                <!-- end one sp  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--product area end-->

        <!--banner Màu cam-->
        <div class="banner_fullwidth mb-70" data-bgimg="../../thu_vien/asset/img/bg/banner5.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-text">
                            <h3>NHÀ THIẾT KẾ ĐẶC BIỆT</h3>
                            <h2>handbags and wallets</h2>
                            <p>Cửa hàng túi xách thời trang chất lượng cao Narita số 1 ở Campuchia cung cấp chất lượng cao nhất với giá tốt nhất</p>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--banner fullwidth end-->

        <!--product area start-->
        <div class="product_area mb-62">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title">
                            <h2>SẢN PHẨM NỔI BẬT</h2>
                            <p>Những sản phẩm được yêu thích nhiều nhất gần đây </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="product_carousel product_column4 owl-carousel">
                        <?php
                        foreach ($sp_noibat as $sp_nb) {
                            extract($sp_nb);
                            $link = "index.php?act=sanphamct&idsp=" . $id;
                        ?>

                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <form action="index.php?act=giohang" method="post">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="<?= $link ?>"><img src="../../thu_vien/asset/img/product/<?= $anh_sp ?>" alt=""></a>

                                                <div class="action_links">
                                                    <ul>
                                                        <input type="hidden" name="id" value="<?= $id ?>">
                                                        <input type="hidden" name="name" value="<?= $ten_sp ?>">
                                                        <input type="hidden" name="price" value="<?= $gia_sp ?>">
                                                        <input type="hidden" name="img" value="<?= $anh_sp ?>">
                                                        <input type="hidden" name="mau" value="<?= $mau_sac ?>">
                                                        <input type="hidden" name="size" value="<?= $size_sp ?>">
                                                        <button type="submit" name="addcard" class="giohang"><i class="zmdi zmdi-shopping-cart"></i></button>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_content-header">
                                                    <h4 class="product_name"><a href="<?= $link ?>"><?= $ten_sp ?></a></h4>
                                                    <div class="wishlist-btn">

                                                    </div>
                                                </div>
                                                <div class="product_price_rating">
                                                    <div class="price_box">
                                                        <span class="current_price">$<?= number_format($gia_sp)  ?></span>
                                                    </div>
                                                    <div class="product_rating">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </form>
                                    </figure>
                                </article>
                            </div>

                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
        <!--product area end-->

        <!--bannr maug xám-->
        
        <!--instagram area end-->

        <!--tin tức mới-->
        <section class="blog_section mb-62">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title">
                            <h2 style="padding-top: 50px;">TIN TỨC MỚI Nhất</h2>
                            <p>Bạn có muốn trình bày bài viết một cách tốt nhất để làm nổi bật những khoảnh khắc thú vị của tin tức của mình.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="blog_carousel blog_column3 owl-carousel">
                        <!-- one news -->
                        <?php
                        foreach ($all_news as $value) {
                            extract($value);
                            $link = "index.php?act=chitiettintuc&idnews=" . $id;
                        ?>

                            <div class="col-lg-3">
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a  href="<?= $link ?>"><img style="width: 362px; height: 264px;"  src="../../upload/<?= $anh_tin_tuc ?>" alt=""></a>
                                        </div>
                                        <figcaption class="blog_content">
                                            <h4 class="post_title"><a href="<?= $link ?>"><?= $value['tieu_de'] ?></a></h4>
                                            <div class="articles_date">
                                                <span><?= $ngay_dang ?></span>

                                            </div>
                                            <p class="post_desc"><?= $mo_ta ?></p>
                                            <footer class="btn_more">
                                                <a href="<?= $link ?>"> Xem Thêm</a>
                                            </footer>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                        <?php
                        }

                        ?>
                        <!--  -->
                        <!-- end one new -->
                    </div>
                </div>
            </div>
        </section>
        <!--blog area end-->

        <!--brand area start-->
        <div class="brand_area">
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
                                <a href="#"><img src="../../thu_vien/asset/img/brand/brand2.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--brand area end-->
    </main>