<div class="row mb">
    <div class="boxleft mr">
        <div class="row">
            <div class="banner">
                <div class="slideshow-container">

                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="https://www.white.film/wp-content/uploads/2016/12/Slider-per-video-2.jpg"
                            style="width:100%">
                        <div class="text">Caption Text</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="https://alvarotrigo.com/blog/assets/imgs/2022-07-19/what-is-website-slider.jpeg"
                            style="width:100%">
                        <div class="text">Caption Two</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="https://www.cryoutcreations.eu/wp-content/uploads/2018/11/serious-slider-1.1-1024x586.png"
                            style="width:100%">
                        <div class="text">Caption Three</div>
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>

                </div>
                <br>

                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($spNew as $key => $value) {

                echo '<div class="boxSp mr">
                        <div class="img row" >
                           <a href="index.php?act=sanphamct&idsp=' . $value["id"] . '">
                            <img src="./uploads/' . $value["image"] . '"
                                    alt="">
                       </div></a>
                            <p style="text-align: center; padding-top: 10px; color: red" >' . $value["price"] . ' VND</p>
                            <a style="text-decoration: none; color: black; padding: 12px;" href="index.php?act=sanphamct&idsp=' . $value["id"] . '">' . $value["tenSanPham"] . '</a>
                           
                            <div class="row">
                                     <form action="index.php?act=addToCard" method="post">
                                     <input type="hidden" name="id" value="' . $value["id"] . '">
                                         <input type="hidden" name="image" value="' . $value["image"] . '">
                                         <input type="hidden" name="price" value=" ' . $value["price"] . ' ">
                                         <input type="hidden" name="tenSanPham" value=" ' . $value["tenSanPham"] . ' ">

                                         <div style="text-align: center;">
                                         <input type="submit" name="submit" style="display: inline-block; margin: 12px;" value="Thêm vào giỏ hàng">
                                       </div>
                                     </form>
                            </div>
                    </div>
                    ';
            }
            ?>

        </div>
    </div>
    <div class="boxright">
        <?php include("boxRight.php"); ?>
    </div>