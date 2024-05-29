<?php
include 'boxleft.php';
?>
<div class="content-wrapper">
    <div class="card" style="border: 1px solid gray;  width: 98%; margin: 10px auto;">
        <div class="card-header border-0">
            <h3>Danh sách khách hàng </h3>
            <div class="search">
                <form action="index.php?act=list_kh" method="post" style="display: flex;">
                    <input type="text" name="keyw" style="width: 150px; height: 30px;">
                    <input type="submit" name="ok" value="Tìm kiếm">
                </form>
                <div style="float: right;">
                <?php
                    if (isset($_SESSION['user']['id_chucvu']) && ($_SESSION['user']['id_chucvu'] < 2)) {
                    ?>
                        <a href="index.php?act=add_kh"> <input type="button" class="btn btn-primary" value="Nhập thêm"></a>
                    <?php
                    }
                    ?>
                   
                </div>
            </div>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
                <thead>
                    <tr>
                        <th>ID user</th>
                        <th>User name</th>
                        <th>password</th>
                        <th>Họ và Tên</th>
                        <th>Ngày Sinh</th>
                        <th>Địa Chỉ</th>
                        <th>Email</th>
                        <th>SĐT</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($list_user as $list) {
                        extract($list);
                        $linkupdate = "index.php?act=sua_tt_khachhang&idkh=" . $id;
                        $linkdelete = "index.php?act=xoa_tt_khachhang&idkh=" . $id;
                    ?>
                        <tr>
                            <td><?= $id ?></td>
                            <td><?= $user_name ?></td>
                            <td><?= $pass ?></td>
                            <td><?= $ho_ten ?></td>
                            <td><?= $ngay_sinh ?></td>
                            <td style="width: 100px; height: auto;"><?= $dia_chi ?> </td>
                            <td><?= $email ?></td>
                            <td><?= $sdt ?></td>
                            <?php
                            if (isset($_SESSION['user']['id_chucvu']) && ($_SESSION['user']['id_chucvu'] < 2)) {
                            ?>
                                <td>
                                    <a href="<?= $linkupdate ?>" class="btn btn-primary" style="margin-right: 30px;">
                                        <i class="bi bi-pencil-fill"></i>
                                        Edit
                                    </a>
                                    <a href="<?= $linkdelete ?>" class="btn btn-primary">
                                        <i class="bi bi-trash3-fill"></i>
                                        xóa
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