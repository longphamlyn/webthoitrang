<?php 
function  inser_banner($filename, $ten_banner, $linkbanner, $mota, $trangthai){
    $sql= "insert into baner(ten,hinh_anh,link,mo_ta,trang_thai) values('$ten_banner','$filename','$linkbanner','$mota','$trangthai')";
    pdo_execute($sql);
    
}

function loadall_banner(){
    $sql= "select * from baner order by id desc";
    $listbanner = pdo_query($sql);
    return $listbanner;

}


function load_one_bn($id){
    $sql = "SELECT * FROM baner where id=" .$id;
    $bn = pdo_query_one($sql);
    return $bn;
}

function update_banner($id,$ten_banner, $filename,  $linkbanner, $mota, $trangthai){
    $sql = "update baner set ten='".$ten_banner."',hinh_anh='".$filename."',link='".$linkbanner."',mo_ta='".$mota."',trang_thai='".$trangthai."'where id=".$id;
    pdo_execute($sql);
}
function delete_banner($id){
    $sql = "delete from baner where id=".$id;
     pdo_execute($sql);
}
?>