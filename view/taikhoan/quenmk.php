<div class="row mb mb">
        <div class="boxtrai mr demo">
            <div class="row mb">

                <div class="boxtitle">Quên Mật Khẩu</div>
                    <div class="row boxcontent formtaikhoan">
                       <form action="index.php?act=quenmk" method="post">
                        <div class="row mb10">
                            Email :<br>
                            <input type="email" name="email" id="">
                        </div>
                       
                        
                            <input type="submit" value="GỬI" name="giuemail">
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