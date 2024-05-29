<?php 
function inser_hethong($tencuahang, $sdtcuahang, $email, $diachi, $filename,$sofax){
    $sql= "insert into he_thong(ten_cuahang,sdt_cuahang,email_cuahang,diachi_cuahang,logo_cuahang,so_fax) values('$tencuahang','$sdtcuahang','$email','$diachi','$filename','$sofax')";
    pdo_execute($sql);
    
}

function loadall_hethong(){
    $sql= "select * from he_thong order by id desc";
    $listtintuc = pdo_query($sql);
    return $listtintuc;

}
function load_one_hethong($id){
    $sql = "SELECT * FROM he_thong where id=" .$id;
    $ht = pdo_query_one($sql);
    return $ht;
}
function update_hethong($id,$tencuahang, $sdtcuahang,$diachi, $filename, $email,  $sofax){
    $sql = "update he_thong set ten_cuahang='".$tencuahang."',sdt_cuahang='".$sdtcuahang."',diachi_cuahang='".$diachi."',logo_cuahang='".$filename."',email_cuahang='".$email."',so_fax='".$sofax."' where id=".$id;
    pdo_execute($sql);
}
function delete_hethong($id){
    $sql = "delete from he_thong where id=".$id;
     pdo_execute($sql);
}
?>