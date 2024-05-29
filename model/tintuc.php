<?php
function inser_tintuc($tieude, $noidung, $filename, $ngaydang, $mota)
{
    $sql = "insert into tin_tuc(tieu_de,noi_dung,anh_tin_tuc,ngay_dang,mo_ta) values('$tieude','$noidung','$filename','$ngaydang','$mota')";
    pdo_execute($sql);
}

function loadall_tintuc()
{
    $sql = "select * from tin_tuc order by id desc";
    $listtintuc = pdo_query($sql);
    return $listtintuc;
}


function load_one_tt($id)
{
    $sql = "SELECT * FROM tin_tuc where id=" . $id;
    $tt = pdo_query_one($sql);
    return $tt;
}

function update_tintuc($tieude, $noidung, $filename, $ngaydang, $mota, $id)
{
    $sql = "update tin_tuc set tieu_de='" . $tieude . "',noi_dung='" . $noidung . "',anh_tin_tuc='" . $filename . "',ngay_dang='" . $ngaydang . "',mo_ta='" . $mota . "'where id=" . $id;
    pdo_execute($sql);
}
function delete_tintuc($id)
{
    $sql = "delete from tin_tuc where id=" . $id;
    pdo_execute($sql);
}

function load_sl_baiviet()
{
    $sql = "select count(tin_tuc.id) as sl from tin_tuc ";
    $count_news = pdo_query($sql);
    return $count_news;
}


function load_list_news($keyw)
{
    $sql = "select * from tin_tuc where 1 ";
    if ($keyw != "") {
        $sql .= " AND tieu_de LIKE '%" . $keyw . "%'";
    }

    $sql .= " order by tin_tuc.id desc limit 0,9";
    $listsp = pdo_query($sql);
    return $listsp;
}

function load_list_news_byDate()
{
    $sql = "select * from tin_tuc order by ngay_dang desc";
    $listtintuc = pdo_query($sql);
    return $listtintuc;
}