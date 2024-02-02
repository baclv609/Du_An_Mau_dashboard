<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div>
        <div class="boxcenter">
            <div class="row mb header">
                <h1>Siêu thị trực tuyến</h1>
            </div>
            <div class="row mb menu">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                    <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                    <li><a href="index.php?act=gopy">Góp ý</a></li>
                    <li><a href="index.php?act=hoidap">Hỏi đáp</a></li>
                </ul>
                <div class="formSearchHome" >
                    <form action="index.php?act=sanpham" method="post">
                        <input type="text" name="kyw" placeholder="Tìm kiếm sản phẩm">
                        <input type="submit" name="submit">
                    </form>
                </div>
            </div>