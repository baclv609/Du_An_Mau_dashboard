<?php
session_start();
include("../../model/connect.php");
include("../../model/binhluan.php");

// var_dump($_SESSION['user']);
// if (isset($_SESSION['user']['id'])) {
$idUser = $_SESSION['user']['id'];
// lấy id từ _SESSION thông qua  $_SESSION['user']['id'];

// } else{
//     echo "0 Có _SESSION";
// }
// $idUser = $_SESSION['user']['id'];
// die();
$id = $_REQUEST['id'];
$dsbl = selectAll_binhluan($idUser);
// print_r($dsbl) ;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="row mb ">
        <div class="boxTitle">Bình luận</div>
        <div class="boxContent2">
            <table>
                <?php
                // echo 'Noi dung binh luan: ' . $id;
                foreach ($dsbl as $key => $value) {
                    extract($dsbl);
                    echo '<tr>
                                <td>' . $noiDung . '</td>
                                <td>' . $idUser . '</td>
                                <td>' . $ngayBinhLuan . '</td>
                                </tr>';
                }
                ?>

            </table>
        </div>

        <?php
        // nếu $_SESSION['user'] có dữ liệu và > 0 thì hiển thị ra form bình luận
        if (isset($_SESSION['user']) && (count($_SESSION['user']) > 0)) {
            ?>
            <div class="boxFooter searchBox">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <input type="hidden" name="idSp" value="<?= $id ?>">
                    <input type="text" name="noidung" placeholder="Bình luận">
                    <input type="submit" name="submit" value="gửi">
                </form>
            </div>
        </div>
    <?php } ?>
    <?php
    if (isset($_POST['submit'])) {
        $idSp = $_POST['idSp'];
        $noiDung = $_POST['noidung'];
        $ngayBinhLuan = date("h:i:sa d/m/y");
        insert_binhluan($idSp, $idUser, $noiDung, $ngayBinhLuan);
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
    ?>
</body>

</html>