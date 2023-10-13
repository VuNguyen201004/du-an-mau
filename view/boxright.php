<div class="row mb ">
                        <div class="boxtitle">Tai Khoan</div>
                        <div class="boxcontent formtaikhoan">
                            <form action="#" method="post">
                            <div class="row mb10">
                                Tên đăng nhập : <br>
                                <input type="text" name="user" id="">
                            </div>
                            <div class="row mb10">
                                Mật khẩu : <br>
                                <input type="password" name="pass" id="">
                            </div>
                            <div class="row mb10">
                                <input type="checkbox" name="" id="">Ghi nhớ tài khoản ?
                            </div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập">
                            </div>
                                
                            </form>
                            <li><a href="#">Quên mật khẩu</a></li>
                            <li><a href="#">Đăng ký thành viên</a></li>
                        </div>
                    </div>
                    <div class="row mb ">
                        <div class="boxtitle">Danh muc</div>
                        <div class="boxcontent2 menudoc">
                            <ul>
                                <?php
                                foreach($dsdm as $dm){
                                    extract($dm);
                                    $linkdm = "index.php?act=sanpham&iddm".$id;
                                    echo '<li><a href="'.$linkdm.'">'.$ten_danh_muc.'</a></li>';
                                }
                                ?>
                                <!-- <li><a href="#">Đồng hồ</a></li>
                                <li><a href="#">Dien thoai</a></li>
                                <li><a href="#">May tinh</a></li>
                                <li><a href="#">Tai nghe</a></li>
                                <li><a href="#">Phu kien</a></li>
                                <li><a href="#">Đồng hồ</a></li> -->
                            </ul>
                        </div>
                        <div class="boxfooter searbox">
                            <form action="#" method="post">
                                <input type="text" name="" id="">
                            </form>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="boxtitle">Top 10 yeu thich</div>
                        <div class="row boxcontent">
                            <?php
                            foreach ($dstop10 as $sp){
                                extract($sp);
                                $linksp="index.php?act=sanphamct&idsp=".$id;
                                $hinh=$img_path.$hinh;
                                echo '<div class="row mb10 top10">
                                        <img src="'.$hinh.'" alt="">
                                        <a href="'.$linksp.'">'.$name.'</a>
                                    </div>';
                            }
                            ?>
                            <!-- <div class="row mb10 top10">
                                <img src="./images/products/1001.jpg" alt="">
                                <a href="#">jdbajwidjkake</a>
                            </div>

                            <div class="row mb10 top10">
                                <img src="./images/products/1001.jpg" alt="">
                                <a href="#">jdbajwidjkake</a>
                            </div>

                            <div class="row mb10 top10">
                                <img src="./images/products/1001.jpg" alt="">
                                <a href="#">jdbajwidjkake</a>
                            </div>
                            <div class="row mb10 top10">
                                <img src="./images/products/1001.jpg" alt="">
                                <a href="#">jdbajwidjkake</a>
                            </div>
                            <div class="row mb10 top10">
                                <img src="./images/products/1001.jpg" alt="">
                                <a href="#">jdbajwidjkake</a>
                            </div>
                            <div class="row mb10 top10">
                                <img src="./images/products/1001.jpg" alt="">
                                <a href="#">jdbajwidjkake</a>
                            </div>
                            <div class="row mb10 top10">
                                <img src="./images/products/1001.jpg" alt="">
                                <a href="#">jdbajwidjkake</a>
                            </div> -->
                        </div>
                    </div>