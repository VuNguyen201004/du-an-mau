<div class="row mb mb">
        <div class="boxtrai mr demo">
            <div class="row mb">

                <div class="boxtitle">Đăng ký thành viên</div>
                    <div class="row boxcontent formtaikhoan">
                       <form action="index.php?act=dangky" method="post">
                        <div class="row mb10">
                            Email :<br>
                            <input type="email" name="email" id="">
                        </div>
                        <div class="row mb10">
                            Tên đăng nhập :<br>
                            <input type="text" name="user" id="">
                        </div>
                        <div class="row mb10">
                            Mật khẩu :<br>
                            <input type="password" name="pass" id="">
                        </div>
                        
                            <input type="submit" value="Đăng ký" name="dangky">
                            <input type="reset" value="Nhập lại" >
                        </form> 
                        <h2 class="thongbao">
                        <?php
                        if(isset($thongbao)&&($thongbao!="")){
                            echo $thongbao;
                        }
                        ?>
                        </h2>
                    </div>
                 </div>
        </div>
        <div class="boxphai">
            <?php include"view/boxright.php"; ?>
        </div>
</div>