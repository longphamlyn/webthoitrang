<?php
include 'boxleft.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="card card-primary" style="width: 70%; margin-left: 200px;">
            <div class="card-header">
                <h3 class="card-title">Thêm tin tức</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label  for="exampleInputEmail1">Tiêu đề </label><br>
                        <input  type="text" name="tieu_de" class="form-control" id="exampleInputPassword1" placeholder="Tiêu đề">
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputFile">Hình Ảnh</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile" name="anh_tin_tuc">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Ngày đăng</label>
                        <input type="date" name="ngay_dang" class="form-control" id="exampleInputPassword1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea class="form-control" rows="3" placeholder="nội dung ..." name="mota"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Nội Dung</label>
                        <textarea class="form-control" rows="3" placeholder="nội dung ..." name="noi_dung"></textarea>
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <input type="submit" name="them_tin_tuc" class="btn btn-primary" value="Thêm Mới">
                    <button type="reset" class="btn btn-primary">Nhập lại</button>
                    <a href="index.php?act=list_news"> <input type="button" class="btn btn-primary" value="Danh sách"></a>
                </div>
                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?>
            </form>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->

</div>