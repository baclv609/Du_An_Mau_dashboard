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
                        <div class="img row">
                            <img src="./uploads/' . $value["image"] . '"
                                    alt="">
                            </div>
                            <p>' . $value["price"] . '</p>
                            <a href="">' . $value["tenSanPham"] . '</a>
                    </div>';
            }
            ?>

           
        </div>
    </div>
    <div class="boxright">
        <?php include("boxRight.php"); ?>
    </div>