<?php
//tren trang quan tri 
function insertdm($tendm, $mota)
{
    $sql="insert into danh_muc(ten_dm, mo_ta) values('$tendm','$mota')";
    pdo_execute($sql);
}

function load_list_dm()
{
    $sql = "SELECT * FROM danh_muc  ";
    $listdm = pdo_query($sql);
    return $listdm;
}


function load_one_dm($iddm)
{
    $sql = "SELECT * FROM danh_muc where id=" . $iddm;
    $danhmuc = pdo_query_one($sql);
    return $danhmuc;
}

function update_dm($tendm, $id, $mota)
{
  $sql="UPDATE danh_muc SET ten_dm='$tendm', mo_ta='$mota' WHERE id='$id'";
  pdo_execute($sql);
}

function delete_dm($id)
{
    $sql = "delete from danh_muc where id=" . $id;
    pdo_execute($sql);
}

//treen trang clients
function load_ten_dm($iddm){
    if ($iddm>0) {
        $sql="select * from danh_muc where id=".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $name;
    }else {
        return "";
    }
  
}
