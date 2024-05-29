<?php
include './boxleft.php';
if(is_array($listhethong)) {
    extract($listhethong);
}
$anhlogo = "../../upload/".  $logo_cuahang;
if (is_file($anhlogo)) {
    $logo = "<img src='" . $anhlogo . "' height='100px'>";
}else{
    $logo="no photo";
  }

?>
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="card card-primary" style="width: 70%; margin-left: 200px;">
            <div class="card-header">
                <h3 class="card-title">Cập Nhập thông tin hệ thống</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" method="POST" enctype="multipart/form-data" action="index.php?act=update_hethong">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên cửa hàng </label><br>
                        <input type="text" name="ten_cuahang" class="form-control" id="exampleInputPassword1" value="<?php if(isset($ten_cuahang)&&($ten_cuahang!="")) echo $ten_cuahang ;?>">
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="text" name="sdt_cuahang" class="form-control" id="exampleInputPassword1" value="<?php if(isset($sdt_cuahang)&&($sdt_cuahang!="")) echo $sdt_cuahang ;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email của hàng</label>
                        <input type="text" name="email_cuahang" class="form-control" id="exampleInputPassword1"
                        value="<?php if(isset($email_cuahang)&&($email_cuahang!="")) echo $email_cuahang ;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Địa chỉ</label>
                        <input type="text" name="diachi_cuahang" class="form-control" id="exampleInputPassword1"
                        value="<?php if(isset($diachi_cuahang)&&($diachi_cuahang!="")) echo $diachi_cuahang ;?>">
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputFile"> logo của hàng</label>
                            <?php echo "<br>" ?> 
                         <?=$logo?>  
                         <?php echo "<br><br>" ?>  
                         <div class="custom-file">
                            
                                <input type="file" class="custom-file-input" id="exampleInputFile" name="logo_cuahang">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
                    </div>

                    
                    <div class="form-group">
<label for="exampleInputPassword1">Số Fax</label>
                        <input type="text" name="so_fax" class="form-control" id="exampleInputPassword1"
                        value="<?php if(isset($so_fax)&&($so_fax!="")) echo $so_fax ;?>">
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id ;?>">
                    <input type="submit" name="capnhat_ht" class="btn btn-primary" value="Cập nhật">
                    <button type="reset" class="btn btn-primary">Nhập lại</button>
                    <a href="index.php?act=list_hethong"> <input type="button" class="btn btn-primary"
                            value="Danh sách"></a>
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