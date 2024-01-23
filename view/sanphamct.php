<?php
// session_start();
?>
<div class="row">
    <div class="boxleft mr">
        <div class="row mb">
            <?php
            extract($sanPhamCt);
            ?>

            <div class="boxTitle">Chi tiết sản phẩm
                <?= $tenSanPham ?>
            </div>
            <div class="boxContent row">
                <?php
                echo '  <img src="./uploads/' . $image . '" alt="loading" style="width:300px">';
                echo '<p>' . $moTa . '</p>';
                echo 'Giá: <b>' . $price . '</b>';
                ?>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#binhluan").load("view/binhluan/binhluanForm.php", { id: <?= $id ?> });
            });
        </script>
        <div class="row" id="binhluan"> </div>

        <!-- <div class="row">
    <iframe src="view/binhluan/binhluanForm.php" frameborder="0" width="100%" height="300px"></iframe>
</div> -->

        <div class="row mb">
            <div class="boxTitle">Sản phẩm liên quan</div>
            <div class="boxContent row">
                <ul>
                    <?php
                    foreach ($Select_sanpham_cungLoai as $key => $value) {
                        echo '<li>' . $value['tenSanPham'] . '</li> ';
                    }
                    ?>
                </ul>

            </div>
        </div>
    </div>
    <div class="boxright">
        <?php include("boxRight.php"); ?>
    </div>
</div>