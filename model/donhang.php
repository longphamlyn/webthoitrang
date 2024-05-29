<?php

function load_list_hoadon()
{
    $sql = "select hoa_don.*,hoa_don.trang_thai,count(chitiet_hd.so_luong) as sodon from hoa_don
    join chitiet_hd on hoa_don.id=chitiet_hd.id_hd
    GROUP by hoa_don.id
    order by hoa_don.id desc";
    $list = pdo_query($sql);
    return $list;
}

function delete_donhang($id)
{
    $sql = "delete from hoa_don where id=" . $id;
    pdo_execute($sql);
}

function update_trangthai($id, $trangthai)
{
    $sql = "UPDATE hoa_don SET trang_thai='$trangthai' WHERE id=$id;";
    pdo_execute($sql);
}

function load_sl_order()
{
    $sql = "select count(chitiet_hd.id) as sl from chitiet_hd ";
    $count_order = pdo_query($sql);
    return $count_order;
}

//client

function tongdonhang()
{
    $tongtien = 0;
    $tong = 0;
    if ($_SESSION['khuyenmai'] != []) {
        $phantram = $_SESSION['khuyenmai']['phan_tram'];
    } else {
        $phantram = 0;
    }
    foreach ($_SESSION['mycard'] as $cart) {
        $thanhtien = $cart['soluong'] * $cart['giasp'];
        $tongtien += $thanhtien;
        $tong = $tongtien - ($tongtien * $phantram / 100);
    }
    return $tong;
}

function  inser_bill($id_km, $iduser, $tongdonhang, $ngaydathang, $name, $addr, $sdt, $email, $ghichu, $pttt)
{
    $sql = "insert into hoa_don(id_km,id_user,ngay_dat,tong_hd,ten_kh,dia_chi,sdt,email,ghi_chu,pt_thanhtoan) values('$id_km','$iduser','$ngaydathang','$tongdonhang','$name','$addr','$sdt','$email','$ghichu','$pttt')";
    return pdo_execute_return_lastIsertID($sql);
}

function  insert_cart($soluong, $dongia, $thanhtien, $idsp, $idhd)
{
    $sql = "insert into chitiet_hd(so_luong,don_gia,thanh_tien,id_sp,id_hd) values('$soluong','$dongia','$thanhtien','$idsp','$idhd')";
    pdo_execute($sql);
}

function load_one_hdct($id_hd)
{
    $sql = "select * from hoa_don where id=$id_hd";
    $bill = pdo_query_one($sql);
    return $bill;
}

function load_all_cthd($id_cthd)
{
    $sql = "select chitiet_hd.*,sanpham.ten_sp,sanpham.mau_sac,sanpham.size_sp,hoa_don.tong_hd,hoa_don.trang_thai from chitiet_hd
     join sanpham on chitiet_hd.id_sp=sanpham.id
     join hoa_don on chitiet_hd.id_hd=hoa_don.id  where hoa_don.id=$id_cthd";
    $cthd = pdo_query($sql);
    return $cthd;
}

function loadAll_hd($id_user)
{
    $sql = "select hoa_don.*,sum(chitiet_hd.so_luong) as so_item from hoa_don
    join chitiet_hd on hoa_don.id=chitiet_hd.id_hd
    where hoa_don.id_user=$id_user
    GROUP by hoa_don.id
    order by hoa_don.id desc";
    $list = pdo_query($sql);
    return $list;
}

function load_one_hd($id_hd)
{
    $sql = "select * from hoa_don where id=$id_hd";
    $bill = pdo_query_one($sql);
    return $bill;
}

function trangthai_donhang($trangthai)
{
    switch ($trangthai) {
        case '0':
            $stt = "Đơn hàng mới";
            break;
        case '1':
            $stt = "Đang chuẩn bị";
            break;
        case '2':
            $stt = "Đang Giao";
            break;
        case '3':
            $stt = "Hoàn tất giao hàng";
            break;
        case '4':
            $stt = "Hủy đơn hàng";
            break;
        case '5':
            $stt = "Đã nhận hàng";
            break;
    }
    return $stt;
}
