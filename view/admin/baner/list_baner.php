<?php
include './boxleft.php';
?>
<div class="content-wrapper">


    <div class="card">
        <div class="card-header border-0">
            <h3>Danh sách banner </h3>
            <div style="float: right;">
                <a href="index.php?act=add_baner"> <input type="button" class="btn btn-primary" value="Nhập thêm"></a>
            </div>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
                <thead>
                    <tr>
                        <th>ID </th>
                        <th>Tên banner</th>
                        <th>Ảnh banner</th>
                        <th>link</th>
                        <th>Mô Tả</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listbanner as $banner) {
                        extract($banner);
                        $suatbanner = "index.php?act=sua_bn&id=" . $id;
                        $xoatbanner = "index.php?act=xoa_bn&id=" . $id;
                        $anhbanner = "../../upload/" .  $hinh_anh;
                        if (is_file($anhbanner)) {
                            $anhbn = "<img src='" . $anhbanner . "' height='80px'width=150px>";
                        } else {
                            $anhbn = "no photo";
                        }
                    ?>
                        <tr>
                            <td> <?=$id?> </td>
                            <td><?=$ten?></td>
                            <td><?=$anhbn?></td>
                            <td style="width: 200px; height: auto;"><a href="' . $link . '"><?=$link?></a></td>
                            <td> <?=$mo_ta?></td>
                           
                           
                                <?php
                                if (isset($_SESSION['user']['id_chucvu']) && ($_SESSION['user']['id_chucvu']<2)) {
                                  ?>
                                   <td>
                                    <a href="<?=$suatbanner?>" class="btn btn-primary" style="margin-right: 30px;">
                                    <i class="bi bi-pencil-fill"></i>
                                    Edit
                                </a>
                                <a href="<?=$xoatbanner?>" class="btn btn-primary">
                                    <i class="bi bi-trash3-fill"></i>
                                    Xóa
                                </a>
                                </td>
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
    <!-- /.card -->
</div>