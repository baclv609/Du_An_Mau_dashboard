<?php
session_start();
include("../model/connect.php");
include("../model/binhluan.php");

?>
<?php
if (isset($_GET['idSp'])) {
    echo $_GET['idSp'];
}
?>
<h1>Bình luận</h1>

<?php

// nếu $_SESSION['user'] có dữ liệu và > 0 thì hiển thị ra form bình luận
if (isset($_SESSION['user']) && (count($_SESSION['user']) > 0)) {
    ?>
    <!-- echo $_SERVER['PHP_SELF'] tự gửi file cho chính nó -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" hidden name="idUser">
        <textarea name="noidung" id="" cols="100%" rows="3"></textarea> <br>
        <button name="guiBinhLuan">Gui binh luan</button>
    </form>

    <?php
} else {
    $_SESSION['trang'] = "sanPhamCt";
    $_SESSION['idSp'] = $_GET['idSp'];

    echo "<a href='../index.php?act=login' target ='_parent'>Bạn cần đăng nhập mới có thể bình luận</a>";
}
?>