<div class="row">
    <div class="boxleft mr">
        <div class="row mb">
            <div class="boxTitle">Chi tiết sản phẩm</div>
            <div class="boxContent row">
                <?php
                echo '  <img src="./uploads/' . $sanPhamCt["image"] . '" alt="loading" style="width:300px">';
                echo '<p>' . $sanPhamCt["moTa"] . '</p>';
                echo 'Giá: <b>' . $sanPhamCt["price"] . '</b>';
                ?>
            </div>
        </div>

        <div class="row mb">
            <div class="boxTitle">Bình luận</div>
            <div class="boxContent row">

            </div>
        </div>

        <div class="row mb">
            <div class="boxTitle">Sản phẩm liên quan</div>
            <div class="boxContent row">
                <ul>
                    <?php
                    foreach ($Select_sanpham_cungLoai as $key => $value) {
                        # code...
                        echo '<li>' . $value["tenSanPham"] . '</li> ';
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