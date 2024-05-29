<?php
function load_cmt()
{
    $sql ="SELECT binh_luan.*,tai_khoan.ho_ten as namekh,sanpham.ten_sp as tensp FROM binh_luan
    JOIN tai_khoan on binh_luan.id_user=tai_khoan.id
    JOIN sanpham on binh_luan.id_sp=sanpham.id order by binh_luan.id desc";
    $result = pdo_query($sql);
    return $result;
}

// function load_all_cmt(){
//     $sql= "select * from binh_luan join sanpham on binh_luan.id_sp = sanpham.id join tai_khoan on binh_luan.id_user = tai_khoan.id order by binh_luan.id desc ";
//     $result = pdo_query($sql);
//     return $result;
// }

function delete_cmt($id)
{
    $sql = "delete from binh_luan where id=" . $id;
    $result = pdo_execute($sql);
}

// function load_all_cmt($idpr)
// {
//     $sql = "SELECT * FROM binhluan";
//     if ($idpr > 0) {
//         $sql .= " AND idpro='" . $idpr . "'";
//     }
//     $sql .= " ORDER BY id desc";
//     $result = pdo_query($sql);
//     return $result;
// }
function load_cmt_sp($id_sp)
{
    $sql ="SELECT binh_luan.*,tai_khoan.ho_ten as namekh,sanpham.ten_sp as tensp FROM binh_luan
    JOIN tai_khoan on binh_luan.id_user=tai_khoan.id
    JOIN sanpham on binh_luan.id_sp=sanpham.id
    where sanpham.id = $id_sp 
    order by binh_luan.id desc";
    $result = pdo_query($sql);
    return $result;
}



function insert_cmt($idpro, $iduser, $noidung, $date)
{
    $sql = "insert into binh_luan(noi_dung,ngay_cmt,id_user,id_sp) values('$noidung','$date','$iduser','$idpro')";
    pdo_execute($sql);
}

function delete_cmt_kh($id,$idsp)
{
    $sql = "delete from binh_luan where id= $id and id_sp= $idsp";
    $result = pdo_execute($sql);
}
?>