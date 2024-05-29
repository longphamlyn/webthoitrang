<?php 
function  inser_chucvu($tenchuvu, $mota, $trangthai){
    $sql= "insert into chuc_vu(ten_chucvu,mo_ta,trang_thai) values('$tenchuvu','$mota','$trangthai')";
    pdo_execute($sql);
    
}

function loadall_chucvu(){
    $sql= "select * from chuc_vu order by id desc";
    $listchucvu = pdo_query($sql);
    return $listchucvu;

}


function load_one_cv($id){
    $sql = "SELECT * FROM chuc_vu where id=" .$id;
    $cv = pdo_query_one($sql);
    return $cv;
}

function update_chucvu($id,$tenchuvu, $mota, $trangthai){
    $sql = "update chuc_vu set ten_chucvu='".$tenchuvu."',mo_ta='".$mota."',trang_thai='".$trangthai."'where id=".$id;
    pdo_execute($sql);
}
function delete_chucvu($id){
    $sql = "delete from chuc_vu where id=".$id;
     pdo_execute($sql);
}
?>