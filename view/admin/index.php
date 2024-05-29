<?php
session_start();
if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {

    include "../../model/pdo.php";
    include "../../model/danhmuc.php";
    include "../../model/sanpham.php";
    include "../../model/donhang.php";
    include "../../model/taikhoan.php";
    include "../../model/banner.php";
    include "../../model/tintuc.php";
    include "../../model/hethong.php";
    include "../../model/binhluan.php";
    include "../../model/khuyenmai.php";
    include "../../model/lienhe.php";
    include "../../model/chuc_vu.php";
    include "hearder.php";
    $sl_sp = load_sl_sp();
    $sl_kh = load_sl_kh();
    $sl_news = load_sl_baiviet();
    $sl_order = load_sl_order();
    if (isset($_GET['act']) && ($_GET['act'] != "")) {
        $act = $_GET['act'];
        switch ($act) {
                //danhmuc
            case "add_dm":
                if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                    $tendm = $_POST['ten_dm'];
                    $mota = $_POST['mota'];
                    insertdm($tendm, $mota);
                    $thongbao = "them thanh cong !";
                }
                include "danhmuc/add_dm.php";
                break;

            case "list_dm":
                $list_dm = load_list_dm();
                include "danhmuc/list_dm.php";
                break;

            case "sua_dm":
                if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                    $danhmuc = load_one_dm($_GET['iddm']);
                }
                include "danhmuc/update_dm.php";
                break;

            case "update_dm":
                if (isset($_POST['capnhap']) && $_POST['capnhap']) {
                    $tendm = $_POST['ten_dm'];
                    $mota = $_POST['mota'];
                    $id = $_POST['id'];
                    update_dm($tendm, $id, $mota);
                    $thongbao = "cap nhat thanh cong !";
                }
                $list_dm = load_list_dm();
                include "danhmuc/list_dm.php";
                break;

            case "xoa_dm":
                if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                    delete_dm($_GET['iddm']);
                }
                $list_dm = load_list_dm();
                include "danhmuc/list_dm.php";
                break;

                //sanpham
            case "add_sp":
                if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $ngaynhap = $_POST['ngaynhap'];
                    $mota = $_POST['mota'];
                    $trangthai = $_POST['trangthai'];
                    $giasp = $_POST['giasp'];
                    $img = $_FILES['anhsp']['name'];
                    $tmp_img = $_FILES['anhsp']['tmp_name'];
                    $size = $_POST['size'];
                    $mau = $_POST['mausac'];
                    move_uploaded_file($tmp_img, "../../upload/" . $img);
                    insertsp($tensp, $img, $giasp, $size, $mau, $ngaynhap, $mota, $trangthai, $iddm);
                    $thongbao = "them thanh cong !";
                }
                $list_dm = load_list_dm();
                include "sanpham/add_sp.php";
                break;

            case "list_sp":
                if (isset($_POST['listok']) && $_POST['listok']) {
                    $keyw = $_POST['keyw'];
                    $iddm = $_POST['iddm'];
                } else {
                    $keyw = "";
                    $iddm = 0;
                }
                $listdm = load_list_dm();
                $listsp = load_list_sp($keyw, $iddm);
                include "sanpham/list_sp.php";
                break;

            case "sua_sp":
                if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                    $result = load_one_sp($_GET['idsp']);
                }
                $listdm = load_list_dm();
                include "sanpham/update_sp.php";
                break;
                //

            case "update_sp":
                if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                    $itemUpdate = [
                        'id' => $_POST['idsp'],
                        'iddm' => $_POST['iddm'],
                        'tensp' => $_POST['tensp'],
                        'ngaynhap' => $_POST['ngaynhap'],
                        'giasp' => $_POST['giasp'],
                        'mota' => $_POST['mota'],
                        'size' => $_POST['size'],
                        'mau' => $_POST['mausac'],
                    ];
                    if ($_FILES['anhsp']['name'] && $_FILES['anhsp']['tmp_name']) {
                        $itemUpdate['img'] = $_FILES['anhsp']['name'];
                        $tmp_img = $_FILES['anhsp']['tmp_name'];
                        move_uploaded_file($tmp_img, "../../upload/" . $itemUpdate['img']);
                    }
                    update_sp($itemUpdate);
                    $thongbao = "cap nhat thanh cong !";
                }
                $listdm = load_list_dm();
                $listsp = load_list_sp("", 0);
                include "sanpham/list_sp.php";
                break;

            case "xoa_sp":
                if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                    delete_sp($_GET['idsp']);
                }
                $listsp = load_list_sp("", 0);
                include "sanpham/list_sp.php";
                break;

                //bình luận
            case "list_cmt":
                $result = load_cmt();
                include "binhluan/list_cmt.php";
                break;
            case "xoa_cmt":
                if (isset($_GET['idcmt']) && $_GET['idcmt'] > 0) {
                    delete_cmt($_GET['idcmt']);
                }
                $result = load_cmt();
                include "binhluan/list_cmt.php";
                break;
                //Tin tức 
            case "add_news":
                if (isset($_POST['them_tin_tuc']) && ([$_POST['them_tin_tuc']])) {
                    $tieude = $_POST["tieu_de"];
                    $noidung = $_POST["noi_dung"];
                    //ảnh
                    $filename = $_FILES['anh_tin_tuc']['name'];
                    $target_dir = "../../upload/";
                    $target_file = $target_dir . basename($_FILES["anh_tin_tuc"]["name"]);
                    if (move_uploaded_file($_FILES["anh_tin_tuc"]["tmp_name"], $target_file)) {
                        echo "The file";
                    } else {
                    }
                    $mota = $_POST["mota"];
                    $ngaydang = $_POST["ngay_dang"];
                    inser_tintuc($tieude, $noidung, $filename, $ngaydang, $mota);
                    $thongbao = "thêm tin tuc thanh cong";
                }
                include "tintuc/add_news.php";
                break;
            case "list_news":
                $listtintuc = loadall_tintuc();
                include "tintuc/list_news.php";
                break;
            case "sua_tt":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $tintuc = load_one_tt($_GET['id']);
                }
                include "tintuc/update_news.php";
                break;
            case 'updatett':
                if (isset($_POST['capnhat_tin_tuc']) && ([$_POST['capnhat_tin_tuc']])) {
                    $id = $_POST["id"];
                    $tieude = $_POST["tieu_de"];
                    $noidung = $_POST["noi_dung"];
                    //ảnh
                    $filename = $_FILES['anh_tin_tuc']['name'];
                    $target_dir = "../../upload/";
                    $target_file = $target_dir . basename($_FILES["anh_tin_tuc"]["name"]);
                    if (move_uploaded_file($_FILES["anh_tin_tuc"]["tmp_name"], $target_file)) {
                        echo "The file";
                    } else {
                    }
                    $mota = $_POST["mota"];
                    $ngaydang = $_POST["ngay_dang"];
                    update_tintuc($tieude, $noidung, $filename, $ngaydang, $mota, $id);
                    $thongbao = "cap nhat thanh cong";
                }
                $listtintuc = loadall_tintuc();
                include "tintuc/list_news.php";
                break;
            case 'xoa_tt':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_tintuc($_GET['id']);
                }
                $listtintuc = loadall_tintuc();
                include "tintuc/list_news.php";
                break;
                //hệ thống
            case "add_hethong":
                if (isset($_POST['them_ht']) && ([$_POST['them_ht']])) {
                    $tencuahang = $_POST["ten_cuahang"];
                    $sdtcuahang = $_POST["sdt_cuahang"];
                    $email = $_POST["email_cuahang"];
                    $diachi = $_POST["diachi_cuahang"];
                    //ảnh
                    $filename = $_FILES['logo_cuahang']['name'];
                    $target_dir = "../../upload/";
                    $target_file = $target_dir . basename($_FILES["logo_cuahang"]["name"]);
                    if (move_uploaded_file($_FILES["logo_cuahang"]["tmp_name"], $target_file)) {
                        echo "The file";
                    } else {
                    }
                    $sofax = $_POST['so_fax'];
                    inser_hethong($tencuahang, $sdtcuahang, $email, $diachi, $filename, $sofax);
                    $thongbao = "thêm he thong thanh cong";
                }
                include "hethong/add_hethong.php";
                break;
            case "list_hethong":
                $listhethong = loadall_hethong();
                include "hethong/list_hethong.php";
                break;
            case "sua_ht":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $listhethong = load_one_hethong($_GET['id']);;
                }
                include "hethong/updata_hethong.php";
                break;
            case "update_hethong":
                if (isset($_POST['capnhat_ht']) && ([$_POST['capnhat_ht']])) {
                    $id = $_POST['id'];
                    $tencuahang = $_POST["ten_cuahang"];
                    $sdtcuahang = $_POST["sdt_cuahang"];
                    $email = $_POST["email_cuahang"];
                    $diachi = $_POST["diachi_cuahang"];
                    //ảnh
                    $filename = $_FILES['logo_cuahang']['name'];
                    $target_dir = "../../upload/";
                    $target_file = $target_dir . basename($_FILES["logo_cuahang"]["name"]);
                    if (move_uploaded_file($_FILES["logo_cuahang"]["tmp_name"], $target_file)) {
                        echo "The file";
                    } else {
                    }
                    $sofax = $_POST['so_fax'];
                    update_hethong($id, $tencuahang, $sdtcuahang,  $diachi, $filename, $email, $sofax);
                    $thongbao = "cap nhat thanh cong";
                }

                $listhethong = loadall_hethong();
                include "hethong/list_hethong.php";
                break;
            case "xoa_ht":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_hethong($_GET['id']);
                }
                $listhethong = loadall_hethong();

                include "hethong/list_hethong.php";
                break;
                //khuyến Mại
            case "add_khuyenmai":
                if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                    $idsp = $_POST['id_sp'];
                    $makm = $_POST['makm'];
                    $tenkm = $_POST['tenkm'];
                    $ngaybd = $_POST['ngaybd'];
                    $ngaykt = $_POST['ngaykt'];
                    $phantram = $_POST['phantram'];
                    $mota = $_POST['mota'];
                    $add_km = insert_km($makm, $tenkm, $phantram, $ngaybd, $ngaykt, $mota, $idsp);
                    $thongbao = "them thanh cong !";
                }
                $listsp = load_list_sp("", 0);
                include "khuyenmai/add_km.php";
                break;

            case "list_khuyenmai":
                if (isset($_POST['ok']) && $_POST['ok']) {
                    $keyw = $_POST['keyw'];
                } else {
                    $keyw = "";
                }
                $listkm = load_list_km($keyw);
                include "khuyenmai/list_km.php";
                break;

            case "sua_km":
                if (isset($_GET['idkm']) && $_GET['idkm'] > 0) {
                    $one_km = load_one_km($_GET['idkm']);
                }
                $listsp = load_list_sp("", 0);
                include "khuyenmai/update_km.php";
                break;

            case "update_km":
                if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                    $idsp = $_POST['id_sp'];
                    $makm = $_POST['makm'];
                    $tenkm = $_POST['tenkm'];
                    $ngaybd = $_POST['ngaybd'];
                    $ngaykt = $_POST['ngaykt'];
                    $phantram = $_POST['phantram'];
                    $mota = $_POST['mota'];
                    $id = $_POST['idkm'];
                    update_km($makm, $tenkm, $phantram, $ngaybd, $ngaykt, $mota, $idsp, $id);
                    $thongbao = "cap nhat thanh cong !";
                }
                $listkm = load_list_km("");
                include "khuyenmai/list_km.php";
                break;

            case "xoa_km":
                if (isset($_GET['idkm']) && $_GET['idkm'] > 0) {
                    delete_km($_GET['idkm']);
                }
                $listkm = load_list_km("");
                include "khuyenmai/list_km.php";
                break;
                //baner
            case "add_baner":
                if (isset($_POST['them_banner']) && ([$_POST['them_banner']])) {
                    $filename = $_FILES['hinh_anh']['name'];
                    $target_dir = "../../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh_anh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file)) {
                        echo "The file";
                    } else {
                    }
                    $ten_banner = $_POST["ten"];
                    $linkbanner = $_POST["link"];
                    $mota = $_POST["mo_ta"];
                    $trangthai = $_POST["trang_thai"];
                    inser_banner($filename, $ten_banner, $linkbanner, $mota, $trangthai);
                    $thongbao = "thêm tin tuc thanh cong";
                }
                include "baner/add_baner.php";
                break;
            case "list_baner":
                $listbanner = loadall_banner();
                include "baner/list_baner.php";
                break;
            case "sua_bn":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $banner = load_one_bn($_GET['id']);
                }
                include "baner/updata_banner.php";
                break;

            case "update_banner":
                if (isset($_POST['capnhat_banner']) && ([$_POST['capnhat_banner']])) {
                    $id = $_POST['id'];
                    $filename = $_FILES['hinh_anh']['name'];
                    $target_dir = "../../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh_anh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file)) {
                        echo "The file";
                    } else {
                    }
                    $ten_banner = $_POST["ten"];
                    $linkbanner = $_POST["link"];
                    $mota = $_POST["mo_ta"];
                    $trangthai = $_POST["trang_thai"];
                    update_banner($id, $ten_banner, $filename,  $linkbanner, $mota, $trangthai);
                    $thongbao = "cap nhat thanh cong";
                }
                $listbanner = loadall_banner();
                include "baner/list_baner.php";
                break;

            case "xoa_bn":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_banner($_GET['id']);
                }
                $listbanner = loadall_banner();
                include "baner/list_baner.php";
                break;
                //Liên hệ 
            case "list_lienhe":
                $list_lh = load_list_lh();
                include "lienhe/list_lienhe.php";
                break;
            case "sua_lh":
                if (isset($_GET['idlh']) && ($_GET['idlh'] > 0)) {
                    $load_one_lh = load_one_lh($_GET['idlh']);
                }
                include "lienhe/update_lh.php";
                break;
            case "update_lh":
                if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                    $trangthai = $_POST['trangthai'];
                    $id = $_POST['idlh'];
                    $update_tt = update_lh($trangthai, $id);
                    $thongbao = "cap nhat thanh cong !";
                }
                $list_lh = load_list_lh();
                include "lienhe/list_lienhe.php";
                break;

            case "xoa_lh":
                if (isset($_GET['idlh']) && ($_GET['idlh'] > 0)) {
                    delete_lh($_GET['idlh']);
                }
                $list_lh = load_list_lh();
                include "lienhe/list_lienhe.php";
                break;
                //Khách Hàng
            case "add_kh":
                if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $fullname = $_POST['fullname'];
                    $date = $_POST['date'];
                    $addr = $_POST['addr'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    insert_tk_kh($user, $pass, $fullname, $date, $addr, $email, $sdt);
                    $thongbao = "them thanh cong !";
                }
                $list_cv = load_list_cv();
                include "khachhang/add_kh.php";
                break;

            case "list_kh":
                if (isset($_POST['ok']) && $_POST['ok']) {
                    $keyw = $_POST['keyw'];
                } else {
                    $keyw = "";
                }

                $list_user = load_list_ttkh($keyw);
                include "khachhang/list_kh.php";
                break;

            case "sua_tt_khachhang":
                if (isset($_GET['idkh']) && $_GET['idkh'] > 0) {
                    $load_one_kh = load_one_kh($_GET['idkh']);
                }
                $list_cv = load_list_cv();
                include "khachhang/update.php";
                break;

            case "update":
                if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $fullname = $_POST['fullname'];
                    $date = $_POST['date'];
                    $addr = $_POST['addr'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    $id = $_POST['idkh'];
                    update_tt_kh($id, $user, $pass, $fullname, $date, $addr, $email, $sdt);
                    $thongbao = "cap nhat thanh cong !";
                }
                $list_cv = load_list_cv();
                $list_user = load_list_ttkh("");
                include "khachhang/list_kh.php";
                break;

            case "xoa_tt_khachhang":
                if (isset($_GET['idkh']) && $_GET['idkh'] > 0) {
                    delete_tk_kh($_GET['idkh']);
                }
                $list_user = load_list_ttkh("");
                include "khachhang/list_kh.php";
                break;

                //Người dùng
            case "add_nd":
                if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $fullname = $_POST['fullname'];
                    $date = $_POST['date'];
                    $addr = $_POST['addr'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    $idcv = $_POST['idcv'];
                    insert_tt_nd($user, $pass, $fullname, $date, $addr, $email, $sdt, $idcv);
                    $thongbao = "them thanh cong !";
                }
                $list_cv = load_list_cv();
                include "nguoidung/add_nd.php";
                break;

            case "list_nd":
                if (isset($_POST['ok']) && $_POST['ok']) {
                    $keyw = $_POST['keyw'];
                } else {
                    $keyw = "";
                }

                $list_nguoidung = load_list_ttnd($keyw);
                include "nguoidung/list_nd.php";
                break;

            case "sua_tt_nd":
                if (isset($_GET['idnd']) && $_GET['idnd'] > 0) {
                    $load_one_nd = load_one_nd($_GET['idnd']);
                }
                $list_cv = load_list_cv();
                include "nguoidung/update_nd.php";
                break;

            case "update_tt_nd":
                if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $fullname = $_POST['fullname'];
                    $date = $_POST['date'];
                    $addr = $_POST['addr'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    $id = $_POST['idnd'];
                    $idcv = $_POST['idcv'];
                    update_tt_nd($id, $user, $pass, $fullname, $date, $addr, $email, $sdt, $idcv);
                    $thongbao = "cap nhat thanh cong !";
                }
                $list_cv = load_list_cv();
                $list_nguoidung = load_list_ttnd("");
                include "nguoidung/list_nd.php";
                break;

            case "xoa_tt_nd":
                if (isset($_GET['idnd']) && $_GET['idnd'] > 0) {
                    delete_tk_nd($_GET['idnd']);
                }
                $list_nguoidung = load_list_ttnd("");
                include "nguoidung/list_nd.php";
                break;
                //Chức vụ
            case "add_cv":
                if (isset($_POST['them_chuc_vu']) && ([$_POST['them_chuc_vu']])) {
                    $tenchuvu = $_POST["ten_chucvu"];
                    $mota = $_POST["mo_ta"];
                    $trangthai = $_POST["trang_thai"];
                    inser_chucvu($tenchuvu, $mota, $trangthai);
                    $thongbao = "thêm chức vụ thanh cong";
                }
                include "chucvu/add_cv.php";
                break;

            case "list_cv":
                $listchucvu = loadall_chucvu();
                include "chucvu/list_cv.php";
                break;

            case "sua_cv":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $cv = load_one_cv($_GET['id']);
                }
                include "chucvu/update_cv.php";
                break;

            case "update_chucvu":
                if (isset($_POST['capnhat_chuc_vu']) && ([$_POST['capnhat_chuc_vu']])) {
                    $id = $_POST['id'];
                    $tenchuvu = $_POST["ten_chucvu"];
                    $mota = $_POST["mo_ta"];
                    $trangthai = $_POST["trang_thai"];
                    update_chucvu($id, $tenchuvu, $mota, $trangthai);
                    $thongbao = "cap nhat thanh cong";
                }
                $listchucvu = loadall_chucvu();
                include "chucvu/list_cv.php";
                break;


            case "xoa_cv":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_chucvu($_GET['id']);
                }
                $listchucvu = loadall_chucvu();
                include "chucvu/list_cv.php";
                break;

                //don hang
            case "list_don_hang":
                $list = load_list_hoadon();
                include "donhang/list_donhang.php";
                break;
                //chitiet
            case "chitiet_donhang";
                if (isset($_GET['idhd']) && ($_GET['idhd'] > 0)) {
                    $cthd = load_all_cthd($_GET['idhd']);
                }
                $ist_dh = load_one_hd($_GET['idhd']);
                include "donhang/chitiet_donhang.php";
                break;

            case "xoa_dh":
                if (isset($_GET['idhd']) && ($_GET['idhd'] > 0)) {
                    delete_donhang($_GET['idhd']);
                }
                $list = load_list_hoadon();
                include "donhang/list_donhang.php";
                break;

            case "sua_trangthai":
                if (isset($_GET['idhd']) && $_GET['idhd'] > 0) {
                    $result =  load_one_hdct($_GET['idhd']);
                }
                include "donhang/update_donhang.php";
                break;
            case "update_trangthai":
                if (isset($_POST['capnhap_hd']) && $_POST['capnhap_hd']) {

                    $idhd = $_POST['idhd'];
                    $trang_thai = $_POST["trangthai"];
                    update_trangthai($idhd, $trang_thai);
                    $thongbao = "cap nhat thanh cong";
                }
                header('location:index.php?act=xem_update_trangthai');
                include "donhang/list_donhang.php";
                break;
            case "xem_update_trangthai":
                $list = load_list_hoadon();
                include "donhang/list_donhang.php";
                break;


            case "thoat":
                session_unset();
                header('location:login_admin.php');
                break;
        }
    } else {
        include "home.php";
    }
    include "footer.php";
} else {
    header('location:login_admin.php');
}
