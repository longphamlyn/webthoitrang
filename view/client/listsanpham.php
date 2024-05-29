  <?php
    ?>
  <!--breadcrumbs area start-->
  <div class="breadcrumbs_area">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="breadcrumb_content">
                      <ul>
                          <li><a href="index.php">trang chủ</a></li>
                          <li>Danh sách sản phẩm</li>
                     
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--breadcrumbs area end-->

  <!--shop  area start-->
  <div class="shop_area shop_reverse mt-60 mb-60">
      <div class="container">
          <div class="row">
              <div class="col-lg-3 col-md-12">
                  <!--sidebar widget start-->
                  <aside class="sidebar_widget">
                      <div class="widget_inner">
                          <div class="widget_list widget_color">
                              <h3>Tìm sản phẩm theo danh mục</h3>
                              <ul>
                                
                                      <?php
                                        foreach ($all_dm as $dm_sp) {
                                            extract($dm_sp);
                                            $link = "index.php?act=sanpham&iddm=" . $id;
                                            echo ' <li>
                                    <li><a href="' . $link . '">' . $ten_dm . '</a></li>
                                    
                                </li>';
                                        }
                                        ?>

                          

                              </ul>
                          </div>

                          <div class="widget_list widget_color">
                              <h3>Tìm sản phẩm theo giá </h3>
                              <ul>
                                  <?php
                                    foreach ($search as $value) {
                                        extract($value);
                                    ?>
                                      <li>
                                          <a href="index.php?act=sanpham&price=<?=$range_price?>"><?=$range_price?></a>
                                      </li>

                                  <?php
                                    }

                                    ?>



                              </ul>
                          </div>

                      </div>
                  </aside>
                  <!--sidebar widget end-->
              </div>
              <div class="col-lg-9 col-md-12">
                  <!--shop wrapper start-->
                  <!--shop toolbar start-->
                  <div class="shop_toolbar_wrapper">
                      <div class="shop_toolbar_btn">

                          <button data-role="grid_3" type="button" class="active btn-grid-3" data-bs-toggle="tooltip" title="3"></button>

                          <button data-role="grid_4" type="button" class=" btn-grid-4" data-bs-toggle="tooltip" title="4"></button>

                          <button data-role="grid_list" type="button" class="btn-list" data-bs-toggle="tooltip" title="List"></button>
                      </div>

                      <div class="page_amount">
                          <?php
                            foreach ($count_sp as $value) {
                                extract($value);
                                echo '  <p>tổng sản phẩm ' . $sl . '</p> ';
                            }
                            ?>

                      </div>
                  </div>
                  <!--shop toolbar end-->
                  <div class="row shop_wrapper">
                      <?php
                        foreach ($all_sp as $value) {
                            extract($value);
                            $link = "index.php?act=sanphamct&idsp=" . $id;
                        ?>
                          <div class="col-lg-4 col-md-4 col-12 ">
                              <article class="single_product">
                                  <figure>
                                      <form action="index.php?act=giohang" method="post">
                                          <div class="product_thumb">
                                              <a class="primary_img" href="<?= $link ?>"><img src="../../upload/<?= $anh_sp ?>" alt=""></a>

                                              <div class="action_links">

                                                  <input type="hidden" name="id" value="<?= $id ?>">
                                                  <input type="hidden" name="name" value="<?= $ten_sp ?>">
                                                  <input type="hidden" name="price" value="<?= $gia_sp ?>">
                                                  <input type="hidden" name="img" value="<?= $anh_sp ?>">
                                                  <input type="hidden" name="mau" value="<?= $mau_sac ?>">
                                                  <input type="hidden" name="size" value="<?= $size_sp ?>">
                                                  <button type="submit" name="addcard" class="giohang"><i class="zmdi zmdi-shopping-cart"></i></button>

                                              </div>
                                          </div>
                                          <div class="product_content grid_content">
                                              <div class="product_content-header">
                                                  <h4 class="product_name"><a href="<?= $link ?>"><?= $ten_sp ?></a></h4>
                                                  <div class="wishlist-btn">
                                                      <a href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                  </div>
                                              </div>
                                              <div class="product_price_rating">
                                                  <div class="price_box">
                                                      <span class="current_price"><?= number_format($gia_sp) ?><b>đ</b></span>
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
                                          </div>
                                          <div class="product_content list_content">
                                              <h4 class="product_name"><a href="index.php?act=chitietsanpham"><?= $ten_sp ?></a></h4>
                                              <div class="product_desc">
                                                  <p><?= $mo_ta ?></p>
                                              </div>
                                              <div class="product_price_rating">
                                                  <div class="price_box">
                                                      <span class="current_price"><?= $gia_sp ?></span>
                                                  </div>
                                              </div>
                                          </div>
                                      </form>
                                  </figure>
                              </article>
                          </div>


                      <?php
                        }

                        ?>

                  </div>
                  <div class="shop_toolbar t_bottom">
                      <div class="pagination">
                          <ul>
                        
                              <li class="current"><a href="index.php?act=sanpham&per_page=9&page=1">1</a></li>
                              <li><a href="index.php?act=sanpham&per_page=9&page=2">2</a></li>
                              <li><a href="index.php?act=sanpham&per_page=9&page=3">3</a></li>
                              <li class="next"><a href="#">next</a></li>
                              <li><a href="#">>></a></li>
                          </ul>
                      </div>
                  </div>
                  <!--shop toolbar end-->
                  <!--shop wrapper end-->
              </div>
          </div>
      </div>
  </div>