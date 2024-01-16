<?php
session_start();
include("model/connect.php");
include("model/danhmuc.php");
include("model/sanpham.php");
include("model/taikhoan.php");
include("view/header.php");
$spNew = listAll_sanpham_Home();
$dsDanhMuc = list_danhmuc();
$dsTop10 = listAll_sanpham_Top10();

if ((isset($_GET["act"])) && ($_GET["act"]) != "") {
    $act = $_GET["act"];
    switch ($act) {
        case 'gioithieu':
            # code...
            include("view/gioithieu.php");
            break;
        case 'lienhe':
            # code...
            include("view/lienhe.php");
            break;
        case 'sanphamct':
            # code...
            if ((isset($_GET["idsp"])) && ($_GET["idsp"]) > 0) {
                $id = $_GET["idsp"];
                $sanPhamCt = edit_sanpham($id);
                $Select_sanpham_cungLoai = Select_sanpham_cungLoai($id, $sanPhamCt["id_danhMuc"]);
            } else {
                include("view/home.php");
            }
            include("view/sanphamct.php");
            break;
        case 'sanpham':
            if ((isset($_POST["kyw"])) && ($_POST["kyw"]) != "") {
                $kyw = $_POST["kyw"];
            } else {
                $kyw = "";
            }
            # code...
            if ((isset($_GET["iddm"])) && ($_GET["iddm"]) > 0) {
                $iddm = $_GET["iddm"];
                // echo $iddm;
            } else {
                $iddm = 0;
            }
            $listSp = list_sanpham($kyw, $iddm);
            // echo "<pre>";
            // var_dump([$listSp]);
            include("view/sanpham.php");
            break;

        case 'dangky':
            // nếu có tồn tại và có nhấp vào nút dangky
            if ((isset($_POST["dangky"])) && ($_POST["dangky"])) {
                $email = $_POST["email"];
                $user = $_POST["user"];
                $pass = $_POST["password"];
                insert_taiKhoan($user, $pass, $email);
                $thongBao = "Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện bình luận!";
            }
            include("view/taikhoan/dangky.php");
            break;
        case 'dangnhap':
            if ((isset($_POST["dangnhap"])) && ($_POST["dangnhap"])) {
                $user = $_POST["user"];
                $pass = $_POST["password"];
                $checkuser = checkUser($user, $pass);
                if (is_array($checkuser)) { // nếu có 1 mảng thì tb bạn đã đăng nhập thành công   
                    $_SESSION['user'] = $checkuser;
                    // $thongBao = "Đã nhập thành công";   
                    header("Location: index.php");
                } else {
                    $thongBao = "Tài khoản không tồn tại";

                }
                $thongBao = "Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện bình luận!";
            }
            include("view/taikhoan/dangky.php");
            break;
        case 'edit_taikhoan':
            if ((isset($_POST["update"])) && ($_POST["update"])) {
                $id = $_POST["id"];
                $user = $_POST["user"];
                $pass = $_POST["password"];
                $email = $_POST["email"];
                $adress = $_POST["adress"];
                $tel = $_POST["tel"];
                update_taikhoan($id, $user, $pass, $email, $adress, $tel);
                header("Location: index.php?act=edit_taikhoan");
                $_SESSION['user'] = checkUser($user, $pass); // cập nhật lại $_SESSION['user']
            }
            include("view/taikhoan/edit_taikhoan.php");
            break;
        case 'quenmk':
            if ((isset($_POST["guiEmail"])) && ($_POST["guiEmail"])) {
                $email = $_POST["email"];

                $checkEmail = checkEmail($email);
                if (is_array($checkEmail)) {
                    $thongBao = "Mật khẩu của bạn là " . $checkEmail["pass"];
                } else {
                    $thongBao = "Email bạn nhập ko đúng hoặc không tồn tại";
                }
            }
            include("view/taikhoan/quenmk.php");
            break;
        case 'logout':
            session_unset();
            header("Location: index.php");
            break;

        // Khách hàng

        default:
            # code...
            include("view/home.php");

            break;
    }
} else {
    include("view/home.php");
}
include("view/footer.php");
?>