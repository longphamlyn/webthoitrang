<?php
function insertsp($tensp, $img_name, $giasp, $size, $mau, $ngaynhap, $mota, $trangthai, $iddm)
{
    $sql = "INSERT INTO sanpham(ten_sp,anh_sp,size_sp,mau_sac,gia_sp,ngay_nhap,mo_ta,trang_thai,id_dm) VALUES('$tensp','$img_name','$size','$mau','$giasp','$ngaynhap','$mota','$trangthai','$iddm')";
    pdo_execute($sql);
}

function price()
{
    $sql = "SELECT * FROM price_search where status=1";
    $result = pdo_query($sql);
    return $result;
}


function load_list_sp($keyw, $iddm)
{

    $sql = "select sanpham.* from sanpham where 1 ";
    if ($keyw != "") {
        $sql .= " AND ten_sp LIKE '%" . $keyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " AND id_dm = " . $iddm . "";
    }

    if (isset($_GET['price'])) {
        $price = $_GET['price'];
        //dùng để tách giấu và giá tiền thành những chữ con trả về 1 mảng từ string ban đầu
        $range = preg_split('[\s]', $price);


        //$range chứa các chữ con tương ứng(còn dc gọi là 1 mảng )
        $from = 0;
        $to = 0;
        if ($range[0] == "Từ") {
            $from = $range[1];
        } else {
            $range1 = preg_split('[\-]', $range[0]);
            $from = $range1[0];
            $to = $range1[1];
        }
        $from *= 1000;
        $to *= 1000;
        if ($to == 0) {
            $sql .= " AND gia_sp>=$from";
        } else {
            $sql .= " AND gia_sp>=$from and gia_sp<=$to";
        }
    }
    $sql .= " order by sanpham.id desc ";
    $listsp = pdo_query($sql);
    return $listsp;
}

function delete_sp($idsp)
{
    $sql = "delete from sanpham where id=" . $idsp;
    $result = pdo_execute($sql);
}

function load_one_sp($id)
{
    $sql = "SELECT sanpham.*,danh_muc.ten_dm,danh_muc.id as dm_id from sanpham 
    join danh_muc on sanpham.id_dm = danh_muc.id where sanpham.id = $id";
    $spct = pdo_query_one($sql);
    return $spct;
}

function update_sp($itemUpdate)
{
    if (!$itemUpdate['img']) {
        $sql = "UPDATE sanpham SET ten_sp=:tensp, gia_sp=:giasp, ngay_nhap=:ngaynhap, size_sp=:size, mau_sac=:mau, mo_ta=:mota, id_dm=:iddm WHERE id=:id";
    } else {
        $sql = "UPDATE sanpham SET ten_sp=:tensp, anh_sp=:img, gia_sp=:giasp, ngay_nhap=:ngaynhap, size_sp=:size, mau_sac=:mau, mo_ta=:mota, id_dm=:iddm WHERE id=:id";
    }
    pdo_execute_v2($sql, $itemUpdate);
}


//trên giao diện 
function load_list_sp_noibat()
{
    $sql = "select * from sanpham order by luot_xem desc";
    $list = pdo_query($sql);
    return $list;
}

function load_sp_cungloai($id, $iddm)
{
    $sql = "select * from sanpham where id_dm = $iddm and id <> $id";
    $result = pdo_query($sql);
    return $result;
}

function load_sl_sp()
{
    $sql = "select count(sanpham.id) as sl from sanpham ";
    $count_sp = pdo_query($sql);
    return $count_sp;
}
//update luot xem 
function update_view($idsp)
{
    $sql = "update sanpham set luot_xem = luot_xem + 1 where id=" . $idsp;
    pdo_execute($sql);
}

//phân trang 
function phantrang_sp()
{
    $sp_of_onepage = 0;
}
