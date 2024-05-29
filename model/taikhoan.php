<?php
// quan tri khach hang
function insert_tk_kh($user, $pass, $hoten, $ngaysinh, $diachi, $email, $sdt)
{
    $sql = "insert into tai_khoan(user_name,pass,ho_ten,ngay_sinh,sdt,email,dia_chi) values('$user','$pass','$hoten','$ngaysinh','$sdt','$email','$diachi')";
    pdo_execute($sql);
}

function load_list_ttkh($keyw)
{
    $sql = "select * from tai_khoan where id_chucvu = '0'";
    if ($keyw != "") {
        $sql .= " AND ho_ten LIKE '%" . $keyw . "%'";
    }
    $sql .= " order by id desc limit 0,9";
    $list_ttkh = pdo_query($sql);
    return $list_ttkh;
}

function load_one_kh($idkh)
{
    $sql = "SELECT * FROM tai_khoan where id=" . $idkh;
    $khachhang = pdo_query_one($sql);
    return  $khachhang;
}

function update_tt_kh($id, $user, $pass, $hoten, $ngaysinh, $diachi, $email, $sdt)
{
    $sql = "update tai_khoan set user_name='$user',pass='$pass',ho_ten='$hoten',ngay_sinh='$ngaysinh',dia_chi='$diachi',email='$email',sdt='$sdt' where id=$id";
    pdo_execute($sql);
}

function delete_tk_kh($id)
{
    $sql = "delete from tai_khoan where id=" . $id;
    $result = pdo_execute($sql);
}
// quan tri người dùng

function load_list_cv()
{
    $sql = "select * from chuc_vu order by id desc";
    $list_cv = pdo_query($sql);
    return $list_cv;
}

function insert_tt_nd($user, $pass, $hoten, $ngaysinh, $diachi, $email, $sdt, $idcv)
{
    $sql = "insert into tai_khoan(user_name,pass,ho_ten,ngay_sinh,sdt,email,dia_chi,id_chucvu) values('$user','$pass','$hoten','$ngaysinh','$sdt','$email','$diachi','$idcv')";
    pdo_execute($sql);
}

function load_list_ttnd($keyw)
{
    $sql = "select tk.*, cv.ten_chucvu from tai_khoan as tk  join chuc_vu as cv
        on tk.id_chucvu = cv.id where cv.ten_chucvu LIKE '%admin%' or cv.ten_chucvu LIKE '%nhân viên%'";
    if ($keyw != "") {
        $sql .= " AND ho_ten LIKE '%" . $keyw . "%'";
    }
    $sql .= " order by tk.id desc limit 0,9";
    $list_ttkh = pdo_query($sql);
    return $list_ttkh;
}

function load_one_nd($idnd)
{
    $sql = "SELECT tai_khoan.*,tai_khoan.id as id_nd FROM tai_khoan join chuc_vu on tai_khoan.id_chucvu = chuc_vu.id where tai_khoan.id=" . $idnd;
    $khachhang = pdo_query_one($sql);
    return  $khachhang;
}

function update_tt_nd($id, $user, $pass, $hoten, $ngaysinh, $diachi, $email, $sdt, $idcv)
{
    $sql = "update tai_khoan set user_name='$user',pass='$pass',ho_ten='$hoten',ngay_sinh='$ngaysinh',dia_chi='$diachi',email='$email',sdt='$sdt', id_chucvu='$idcv' where id=$id";
    pdo_execute($sql);
}

function delete_tk_nd($id)
{
    $sql = "delete from tai_khoan where id=" . $id;
    $result = pdo_execute($sql);
}

function load_sl_kh()
{
    $sql = "select count(tai_khoan.id) as sl from tai_khoan where id_chucvu = '0' ";
    $count_user = pdo_query($sql);
    return $count_user;
}

//client (giao diện người dùng)

function insert_tk($user, $pass,$fullname,$email)
{
    $sql = "insert into tai_khoan(user_name,pass,ho_ten,email) values('$user','$pass','$fullname','$email')";
    pdo_execute($sql);
}

function check_user($name, $pass)
{
      $sql = "select * from tai_khoan where user_name='".$name."' AND pass='".$pass."'";
      $result = pdo_query_one($sql);
      return $result;
}
function check_email($email)
{
      $sql = "select * from tai_khoan where email='".$email."'";
      $result = pdo_query_one($sql);
      return $result;
}

function update_mk($id,$pass){
    $sql = "update tai_khoan set pass='$pass' where id=$id";
    pdo_execute($sql);
}

