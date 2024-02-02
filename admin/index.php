<?php
include("../model/connect.php");
include("../model/danhmuc.php");
include("../model/sanpham.php");
include("../model/taikhoan.php");
include("../model/binhluan.php");
include("../model/cart.php");
include("header.php");

// control panel
if (isset($_GET["act"])) {
    $act = $_GET["act"];

    switch ($act) {
        // danh mục
        case 'addDm':
            // kieerm tra xem nngười dùng có click nút add hay ko 
            if (isset($_POST['themMoi'])) {
                $tenLoai = $_POST["tenLoai"];
                insert_danhmuc($tenLoai);
                $thongBao = "Thêm thành công";
            }
            include("danhMuc/add.php");
            break;
        case 'listDm':
            $listDm = list_danhmuc();
            include("danhMuc/listDm.php");
            break;

        case 'deleteDm':
            if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
                $id = $_GET["id"];
                delete_danhmuc($id);
            }
            // sau khi xóa xong thì gọi lại trang list danh sách 
            // select lại dữ liệu để trang listDm có giá trị Foreach
            $sql = "SELECT * FROM danhmuc ORDER BY tenDanhMuc";
            $listDm = pdo_query($sql);
            include("danhMuc/listDm.php");
            break;
        case 'editDm':
            if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
                $id = $_GET["id"];
                $dm = edit_danhmuc($id);
            }
            include("danhMuc/updateDm.php");
            break;
        case 'updateDm':
            if (isset($_POST['update'])) {
                $id = $_POST["id"];
                $tenLoai = $_POST["tenLoai"];
                update_danhmuc($id, $tenLoai);
                $thongBao = "Cập nhật thành công";
            }
            $listDm = list_danhmuc();
            include("danhMuc/listDm.php");
            break;

        // sản phầm
        case 'addSp':
            if (isset($_POST['submit'])) {
                $tenSanPham = $_POST["tenSanPham"];
                $price = $_POST["price"];
                $moTa = $_POST["moTa"];
                $id_danhMuc = $_POST["id_danhMuc"];
                $filename = $_FILES["image"]["name"];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);

                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    insert_sanpham($tenSanPham, $price, $moTa, $id_danhMuc, $filename);
                }
                $thongBao = "Thêm thành công";
            }
            $listDm = list_danhmuc();
            include("sanpham/add.php");
            break;
        case 'listSp':
            if (isset($_POST['submit'])) {
                $searchName = $_POST["searchName"];
                $id_danhMuc = $_POST["id_danhMuc"];
            } else {
                $searchName = "";
                $id_danhMuc = 0;
            }
            $listSp = list_sanpham($searchName, $id_danhMuc);
            $listDm = list_danhmuc();
            include("sanpham/listSp.php");
            break;

        case 'deleteSp':
            # code...
            if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
                $id = $_GET["id"];
                delete_sanpham($id);
            }
            // sau khi xóa xong thì gọi lại trang list danh sách 
            // select lại dữ liệu để trang listDm có giá trị Foreach
            $listSp = list_sanpham("", 0);
            include("sanpham/listSp.php");
            break;
        case 'editSp':
            if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
                $id = $_GET["id"];

                $listDm = list_danhmuc();
                $SP = edit_sanpham($id);
            }
            include("sanpham/updateSp.php");
            break;
        case 'updateSp':
            if (isset($_POST['submit'])) {
                $id = $_POST["id"];
                $tenSanPham = $_POST["tenSanPham"];
                $price = $_POST["price"];
                $moTa = $_POST["moTa"];
                $id_danhMuc = $_POST["id_danhMuc"];


                $hinhAnh = $_FILES["image"];
                $filename = $hinhAnh["name"];

                if ($filename) {
                    $filename = time() . $filename;
                    $dir = "../uploads/$filename";

                    if (move_uploaded_file($hinhAnh["tmp_name"], $dir)) {
                        update_sanpham_coHinhAnh($tenSanPham, $price, $filename, $moTa, $id_danhMuc, $id);
                    }
                } else {
                    update_sanpham_KhongHinhAnh($tenSanPham, $price, $moTa, $id_danhMuc, $id);
                }

                $thongBao = "Thêm thành công";
            }
            $listSp = list_sanpham("", 0);
            $listDm = list_danhmuc();

            include("sanpham/listSp.php");
            break;
        case 'dskh':
            $listTk = list_Alltaikhoan();
            include("taikhoan/listTaiKhoan.php");
            break;
        case 'deleteTk':
            if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
                $id = $_GET["id"];
                delete_taikhoan($id);
            }
            $listTk = list_Alltaikhoan();
            include("taikhoan/listTaiKhoan.php");
            break;
        case 'dsbl':
            $listBinhluan = select_binhluan();
            include("binhluan/listBinhluan.php");
            break;
        case 'deleteBl':
            if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
                $id = $_GET["id"];
                delete_binhluan($id);
            }
            $listBinhluan = select_binhluan();
            include("binhluan/listBinhluan.php");
            break;
        // bill
        case 'listBill':
            if (isset($_POST["searchDH"])) {
                $searchDH = $_POST["searchDH"];
            } else {
                $searchDH = "";
            }
            // echo $searchDH;
            // die;
            $listBill = loadall_bill($searchDH, 0);
            include("donHang/listBill.php");
            break;

        // thongKe
        case 'thongKe':
            $listthongKe = list_thongKe();
            include("thongke/listthongKe.php");
            break;
        case 'bieudo':
            $listthongKe = list_thongKe();
            // echo "<pre>";
            // var_dump([$listthongKe]);
            // die;
            include("thongke/bieudo.php");
            break;
        default:
            include("home.php");
            break;
    }
} else {
    include("home.php");
}

include("footer.php");
?>