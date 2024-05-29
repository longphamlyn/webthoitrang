<?php
function insert_km($makm, $tenkm, $phantram, $ngaybd, $ngaykt, $mota, $idsp)
{
    $sql = "INSERT INTO khuyen_mai(ma_km,ten_km,phan_tram,bat_dau,ket_thuc,mo_ta,id_sp) VALUES('$makm','$tenkm','$phantram','$ngaybd','$ngaykt','$mota','$idsp')";
    pdo_execute($sql);
}

function load_list_km($keyw)
{
    $sql = "select khuyen_mai.*,sanpham.ten_sp from khuyen_mai join sanpham on khuyen_mai.id_sp = sanpham.id where 1";
    if ($keyw != "") {
        $sql .= " AND ten_km LIKE '%" . $keyw . "%'";
    }
    $sql .= " order by khuyen_mai.id desc limit 0,9";
    $listkm = pdo_query($sql);
    return $listkm;
}


function load_one_km($id)
{
    $sql = "select * from khuyen_mai where id = $id";
    $result = pdo_query_one($sql);
    return $result;
}


function update_km($makm, $tenkm, $phantram, $ngaybd, $ngaykt, $mota, $idsp,$id)
{
    $sql = "update khuyen_mai set ma_km='$makm', ten_km='$tenkm', phan_tram='$phantram', bat_dau='$ngaybd', ket_thuc='$ngaykt', mo_ta='$mota', id_sp='$idsp' where id=$id";
    pdo_execute($sql);
}


function delete_km($idsp)
{
    $sql = "delete from khuyen_mai where id=" . $idsp;
    $result = pdo_execute($sql);
}

function check_makm($makm)
{
    $sql = "select * from khuyen_mai where ma_km='".$makm."'";
    $result = pdo_query_one($sql);
    return $result; 
}

?>