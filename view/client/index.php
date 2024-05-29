<?php
session_start();
ob_start();
include "../../model/pdo.php";
include "../../model/taikhoan.php";
include "../../model/danhmuc.php";
include "../../model/sanpham.php";
include "../../model/banner.php";
include "../../model/tintuc.php";
include "../../model/binhluan.php";
include "../../model/khuyenmai.php";
include "../../model/hethong.php";
include "../../model/lienhe.php";
include "../../model/donhang.php";
if (!isset($_SESSION['mycard'])) {
    $_SESSION['mycard'] = [];
}
if (!isset($_SESSION['khuyenmai'])) {
    $_SESSION['khuyenmai'] = [];
}
$count_sp = load_sl_sp();
$all_hethong = loadall_hethong();
$all_news = loadall_tintuc();
$all_baner = loadall_banner();
$all_dm = load_list_dm();
$all_sp = load_list_sp("", 0);
$sp_noibat = load_list_sp_noibat();
include "header.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_POST['smb']) && $_POST['smb']) {
                $timkiem = $_POST['timkiem'];
            } else {
                $timkiem = "";
            }

            if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = "";
            }

            $search = price();
            $all_sp = load_list_sp($timkiem, $iddm);
            $all_dm = load_list_dm();
            include "listsanpham.php";
            break;
        case 'sanphamct':

            if (isset($_POST['binhluan']) && $_POST['binhluan']) {
                $iduser = $_SESSION['user']['id'];
                $date = date('Y-m-d');
                $idpro = $_POST['idpro'];
                $noidung = $_POST['noidung'];
                insert_cmt($idpro, $iduser, $noidung, $date);
            }
            if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                update_view($_GET['idsp']);
                $chitiet_sp = load_one_sp($_GET['idsp']);
                $sp_cungloai = load_sp_cungloai($_GET['idsp'], $chitiet_sp['dm_id']);
                $cmt = load_cmt_sp($_GET['idsp']);
            }
            include "chitietsanpham.php";
            break;

        case 'khuyenmai':
            if (!isset($_POST['guikm'])) {
                $phantramkm = 0;
                $_SESSION['khuyenmai'] = [];
            }
            if (isset($_POST['guikm'])) {
                $makm = $_POST['makm'];
                $check = check_makm($makm);
                if (is_array($check)) {
                    $mkm = $check['ma_km'];
                    $id = $check['id'];
                    $tenkm = $check['ten_km'];
                    $phantramkm = $check['phan_tram'];
                    $_SESSION['khuyenmai'] = $check;
                } else {
                    $mkm = "";
                    $id = "";
                    $tenkm = "";
                    $phantramkm = 0;
                    $thongbao_email = "Mã khuyến mại này không tồn tại !";
                }
            }
            include "giohang.php";
            break;

        //thêm giỏ hàng - thanh toán - hóa đơn -chi tiết hóa đơn
        case 'giohang':
            if ((isset($_POST['addcard']))) {
                $id = $_POST['id'];
                $tensp = $_POST['name'];
                $giasp = (float) $_POST['price'];
                $hinhsp = $_POST['img'];
                $mausp = $_POST['mau'];
                $size = $_POST['size'];
                if (isset($_POST['soluong']) && $_POST['soluong'] > 1) {
                    $soluong = (int) $_POST['soluong'];
                } else {
                    $soluong = 1;
                }


                $fl = 0; //kiem tra sp co trung trong gio hang hay ko
                for ($i = 0; $i < sizeof($_SESSION['mycard']); $i++) {
                    if ($_SESSION['mycard'][$i]['tensp'] == $tensp) {
                        $fl = 1;
                        $soluongnew = $soluong + $_SESSION['mycard'][$i]['soluong'];
                        $_SESSION['mycard'][$i]['soluong'] = $soluongnew;
                        break;
                    }
                }
                if ($fl == 0) {
                    $add_spp_card = [
                        'id' => $id,
                        'tensp' => $tensp,
                        'giasp' => $giasp,
                        'hinhsp' => $hinhsp,
                        'mausp' => $mausp,
                        'size' => $size,
                        'soluong' => $soluong
                    ];
                    array_push($_SESSION['mycard'], $add_spp_card);
                }
            }
            header('location:index.php?act=xemgiohang');
            break;
        case 'xemgiohang':
            include "giohang.php";
            break;

        case 'conggiohang':
            if (isset($_GET['idsp'])) {
                $idsp = $_GET['idsp'];
                foreach ($_SESSION['mycard'] as $card) {

                    $id = $card['id'];
                    $hinh = $card['hinhsp'];
                    $tensp = $card['tensp'];
                    $soluong = $card['soluong'];
                    $giasp = $card['giasp'];
                    $sizesp = $card['size'];
                    $mausp = $card['mausp'];
                    if ($idsp != $id) {
                        $product[] = array('id' => $id, 'tensp' => $tensp, 'hinhsp' => $hinh, 'mausp' => $mausp, 'size' => $sizesp, 'soluong' => $soluong, 'giasp' => $giasp);
                        $_SESSION['mycard'] = $product;
                    } else {
                        $soluongnew = $soluong + 1;
                        if ($card['soluong'] < 10) {
                            $product[] = array('id' => $id, 'tensp' => $tensp, 'hinhsp' => $hinh, 'mausp' => $mausp, 'size' => $sizesp, 'soluong' => $soluongnew, 'giasp' => $giasp);
                        } else {
                            $product[] = array('id' => $id, 'tensp' => $tensp, 'hinhsp' => $hinh, 'mausp' => $mausp, 'size' => $sizesp, 'soluong' => $soluong, 'giasp' => $giasp);
                        }
                        $_SESSION['mycard'] = $product;
                    }
                }
            }
            include "giohang.php";
            break;

        case 'trugiohang':
            if (isset($_GET['idsp'])) {
                $idsp = $_GET['idsp'];
                foreach ($_SESSION['mycard'] as $card) {
                    $id = $card['id'];
                    $hinh = $card['hinhsp'];
                    $tensp = $card['tensp'];
                    $soluong = $card['soluong'];
                    $giasp = $card['giasp'];
                    $sizesp = $card['size'];
                    $mausp = $card['mausp'];
                    if ($idsp != $id) {
                        $soluong = $card['soluong'];
                        $product[] = array('id' => $id, 'tensp' => $tensp, 'hinhsp' => $hinh, 'mausp' => $mausp, 'size' => $sizesp, 'soluong' => $soluong, 'giasp' => $giasp);
                        $_SESSION['mycard'] = $product;
                    } else {
                        $soluongnew = $soluong - 1;

                        if ($soluong > 1) {
                            $product[] = array('id' => $id, 'tensp' => $tensp, 'hinhsp' => $hinh, 'mausp' => $mausp, 'size' => $sizesp, 'soluong' => $soluongnew, 'giasp' => $giasp);
                        } else {
                            $product[] = array('id' => $id, 'tensp' => $tensp, 'hinhsp' => $hinh, 'mausp' => $mausp, 'size' => $sizesp, 'soluong' => $soluong, 'giasp' => $giasp);
                        }
                        $_SESSION['mycard'] = $product;
                    }
                }
            }
            include "giohang.php";
            break;

        case 'ht_donhang':
            if (isset($_POST['dathang']) && $_POST['dathang']) {
                if (isset($_SESSION['user']) && $_SESSION['user'] != "") {
                    $iduser = $_SESSION['user']['id'];
                } else {
                    $iduser = "";
                }
                $name = $_POST['name'];
                $addr = $_POST['addr'];
                $sdt = $_POST['sdt'];
                $email = $_POST['email'];
                $ghichu = $_POST['ghichu'];
                $pttt = $_POST['pttt'];
                if ($_SESSION['khuyenmai'] != []) {
                    $id_km = $_SESSION['khuyenmai']['id'];
                } else {
                    $id_km = "";
                }
                $ngaydathang = date('Y-m-d');
                $tongdonhang = tongdonhang();
                //tao hóa đơn
                $idbill = inser_bill($id_km, $iduser, $tongdonhang, $ngaydathang, $name, $addr, $sdt, $email, $ghichu, $pttt);
                // tạo chi tiết hóa đơn (with  $_SESSION['mycard'] & idbill) 
                foreach ($_SESSION['mycard'] as $card) {
                    $idsp = $card['id'];
                    $soluong = $card['soluong'];
                    $giasp = $card['giasp'];
                    $thanhtien = $card['giasp'] * $card['soluong'];
                    insert_cart($soluong, $giasp, $thanhtien, $idsp, $idbill);
                }

                //xoa $_SESSION['mycard'] sau khi tạo xong đơn hàng
                $_SESSION['mycard'] = [];
                $_SESSION['khuyenmai'] = [];
            }
            $list_hdct = load_one_hdct($idbill);
            $list_cthd = load_all_cthd($idbill);
            include "bill_xacnhan.php";
            break;

        case 'chitiet_donhang':
            if (isset($_GET['idhd']) && $_GET['idhd'] > 0) {
                $list_hdct = load_one_hdct($_GET['idhd']);
                $list_cthd = load_all_cthd($_GET['idhd']);
            }
            include "bill_xacnhan.php";
            break;

        case 'huydonhang':
            if (isset($_GET['idhd']) && $_GET['idhd'] > 0) {
                update_trangthai($_GET['idhd'], 4);
            }
            $list_donhang = loadAll_hd($_SESSION['user']['id']);
            header('location:index.php?act=edit_tk');
            include "taikhoan/taikhoan.php";
            break;

        case 'nhanhang':
            if (isset($_GET['idhd']) && $_GET['idhd'] > 0) {
                update_trangthai($_GET['idhd'], 5);
            }
            $list_donhang = loadAll_hd($_SESSION['user']['id']);
            header('location:index.php?act=edit_tk');
            include "taikhoan/taikhoan.php";
            break;

        case 'deletecard':
            if (isset($_GET['id_card'])) {
                array_splice($_SESSION['mycard'], $_GET['id_card'], 1);
            } else {
                $_SESSION['mycard'] = [];
            }
            header('location:index.php?act=xemgiohang');
            break;

        case 'thanhtoan':
            include "thanhtoan.php";
            break;

        // case liên hệ 
        case 'add_lh':
            if (isset($_POST['gui'])) {
                $idkh = $_SESSION['user']['id'];
                $nd = $_POST['noidung'];
                insertlh($nd, $idkh);
                $thongbao = "Bạn đã gửi thành công !";
            }
            include "lienhe.php";
            break;

        // case tin tức 
        case 'tintuc':
            if (isset($_POST['smb'])) {
                $timkiem = $_POST['keyw'];
            } else {
                $timkiem = "";
            }
            $list_news = load_list_news($timkiem);
            $list_date = load_list_news_byDate();
            include "tintuc.php";
            break;

        case 'chitiettintuc':
            if (isset($_GET['idnews']) && $_GET['idnews'] > 0) {
                $chitiet_news = load_one_tt($_GET['idnews']);
            }
            $list = load_list_news_byDate();
            include "chitiettintuc.php";
            break;
        //case đăng kí đăng nhâp edit tài khoản 
        case 'dangki_tk':
            if (isset($_POST['dangki'])) {
                $email = $_POST['email'];
                $full_name = $_POST['fullname'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_tk($user, $pass, $full_name, $email);
                $thongbao = "<b>Bạn đã đăng kí thành công !</b>";
            }
            include "./taikhoan/dangnhap.php";
            break;

        case 'dangnhap_tk':
            if (isset($_POST['login']) && $_POST['login']) {
                $name = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = check_user($name, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header('location:index.php', true);
                } else {
                    $thongbao1 = "Tài khoản không tồn tại hoặc sai mật khẩu !";
                }
            }
            include "./taikhoan/dangnhap.php";
            break;

        case 'edit_tk':
            if (isset($_SESSION['user']['id']) && $_SESSION['user']['id'] > 0) {
                $load_one_nd = load_one_kh($_SESSION['user']['id']);
                extract($load_one_nd);


                if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $fullname = $_POST['fullname'];
                    $date = $_POST['date'];
                    $addr = $_POST['addr'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    $id = $_SESSION['user']['id'];
                    update_tt_kh($id, $user, $pass, $fullname, $date, $addr, $email, $sdt);
                    $thongbao = "Cập nhật thành công !";
                    $_SESSION['user'] = check_user($user, $pass);
                    header('location:index.php?act=edit_tk', true);
                }
            }
            //load đơn hàng trên giỏ hàng con
            if (isset($_SESSION['user']['id']) && $_SESSION['user']['id'] > 0) {
                $iduser = $_SESSION['user']['id'];
            } else {
                $iduser = 0;
            }
            $list_donhang = loadAll_hd($iduser);
            include "./taikhoan/taikhoan.php";
            break;

        case 'quen_mk':
            if (isset($_POST['gui']) && $_POST['gui']) {
                $email = $_POST['email'];
                $check = check_email($email);
                if (is_array($check)) {
                    $mk = $check['pass'];
                    $id = $check['id'];
                } else {
                    $thongbao_email = "Email này không tồn tại !";
                }
            }
            include "./taikhoan/quen_mk.php";
            break;

        case 'change_mk':
            if (isset($_POST['capnhatmk']) && $_POST['capnhatmk']) {
                $pass = $_POST['pass'];
                $id = $_POST['idmk'];
                update_mk($id, $pass);
                $thongbao_ud = "Đổi mật khẩu thành công";
            }
            include "./taikhoan/quen_mk.php";
            break;

        case 'logout':
            session_unset();
            header('location:index.php', true);
            break;

        default:
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
