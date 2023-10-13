        <div class="row mb mb">
                <div class="boxtrai mr demo">
                    <div class="row">
                        <div class="banner">
                            <!-- Slideshow container -->
                            <div class="slideshow-container">

                            <!-- Full-width images with number and caption text -->
                            <div class="mySlides fade">
                            <div class="numbertext">1 / 3</div>
                            <img src="./images/products/banner1.webp" style="width:100%">
                            <div class="text">Caption Text</div>
                            </div>

                            <div class="mySlides fade">
                            <div class="numbertext">2 / 3</div>
                            <img src="./images/products/banner2.webp" style="width:100%">
                            <div class="text">Caption Two</div>
                            </div>

                            <div class="mySlides fade">
                            <div class="numbertext">3 / 3</div>
                            <img src="./images/products/banner3.webp" style="width:100%">
                            <div class="text">Caption Three</div>
                            </div>

                            <!-- Next and previous buttons -->
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                            </div>
                            <br>

                            <!-- The dots/circles -->
                            <div style="text-align:center">
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        $i=0;
                        foreach($spnew as $sp){
                            extract($sp);
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            $hinh=$img_path.$hinh;
                            if(($i==2)||($i==5)||($i==8)){
                                $mr="mr";
                            }else{
                                $mr="";
                            }
                            echo '<div class="boxsanpham '.$mr.'">
                                <div class="row img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div>
                                <p>'.$gia.'</p>
                                <a href="'.$linksp.'">'.$name.'</a>
                        </div>';
                        $i+=1;
                        }
                        ?>
                        <!-- <div class="boxsanpham mr">
                            <div class="row img"><img src="./images/products/1001.jpg" alt=""></div>
                            <p>2000$</p>
                            <a href="">may tinh</a>
                        </div>

                        <div class="boxsanpham mr">
                            <div class="row img"><img src="./images/products/1012.jpg" alt=""></div>
                            <p>2000$</p>
                            <a href="">may tinh</a>
                        </div>

                        <div class="boxsanpham mr">
                            <div class="row img"><img src="./images/products/1010.jpg" alt=""></div>
                            <p>2000$</p>
                            <a href="">may tinh</a>
                        </div>

                        
                        <div class="boxsanpham mr">
                            <div class="row img"><img src="./images/products/1002.jpg" alt=""></div>
                            <p>2000$</p>
                            <a href="">may tinh</a>
                        </div>

                        <div class="boxsanpham mr">
                            <div class="row img"><img src="./images/products/1003.jpg" alt=""></div>
                            <p>2000$</p>
                            <a href="">may tinh</a>
                        </div>

                        <div class="boxsanpham mr">
                            <div class="row img"><img src="./images/products/1004.jpg" alt=""></div>
                            <p>2000$</p>
                            <a href="">may tinh</a>
                        </div>

                        
                        <div class="boxsanpham mr">
                            <div class="row img"><img src="./images/products/1005.jpg" alt=""></div>
                            <p>2000$</p>
                            <a href="">may tinh</a>
                        </div>

                        <div class="boxsanpham mr">
                            <div class="row img"><img src="./images/products/1006.jpg" alt=""></div>
                            <p>2000$</p>
                            <a href="">may tinh</a>
                        </div>

                        <div class="boxsanpham mr">
                            <div class="row img"><img src="./images/products/1007.jpg" alt=""></div>
                            <p>2000$</p>
                            <a href="">may tinh</a>
                        </div> -->
                    </div>
                </div>
            <div class="boxphai">
                <?php include "boxright.php"; ?>
                </div>
            </div>        