
<div class="row">
            <div class="row formtitle">
                <div class="row header"> 
                    <h1>THÊM MỚI LOẠI HÀNG HÓA</h1>
            </div>
                <div class="row formcontent">
                    <form action="index.php?act=adddm" method="post">
                        <div class="row mb10">
                            MÃ LOẠI : <br>
                            <input type="text" name="maloai" placeholder="auto number">
                        </div>
                        <div class="row mb10">
                            TÊN LOẠI : <br>
                            <input type="text" name="tenloai">
                        </div>
                        <div class="row mb10">
                            <input type="submit" name="themmoi" value="Thêm mới" >
                            <input type="reset" value="Nhập lại">
                            <a href="index.php?act=lisdm"><input type="button" value="Danh sách"></a>
                        </div>
                        <?php
                        if(isset($thongbao)&&($thongbao)!="") echo $thongbao;
                        ?>
                        
                    </form>
                </div>
            </div>
            
        </div>
    </div>