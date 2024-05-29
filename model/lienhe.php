<?php
function load_list_lh()
{
    $sql = "select lien_he.*,tai_khoan.ho_ten from lien_he join tai_khoan on lien_he.id_user = tai_khoan.id where 1";
    $sql .= " order by lien_he.id desc limit 0,9";
    $listkm = pdo_query($sql);
    return $listkm;
}


function load_one_lh($id)
{
    $sql = "select lien_he.*,tai_khoan.ho_ten from lien_he join tai_khoan on lien_he.id_user = tai_khoan.id where lien_he.id = $id";
    $result = pdo_query_one($sql);
    return $result;
}

function update_lh($trangthai, $id)
{
    $sql = "update lien_he set trang_thai='$trangthai' where id=$id";
    pdo_execute($sql);
}

function delete_lh($idlh)
{
    $sql = "delete from lien_he where id=" . $idlh;
    $result = pdo_execute($sql);
}

function insertlh($noidung, $idkh)
{
    $sql = "INSERT INTO lien_he(noi_dung,id_user) VALUES('$noidung','$idkh')";
    pdo_execute($sql);
}

function status_contact($status){
    switch ($status) {
        case '0':
            $stt = "Phản hồi mới";
            break;
        case '1':
            $stt = "Đã phản hồi";
            break;
    }
    return $stt;
}