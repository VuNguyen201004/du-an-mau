
<div class="row">
            <div class="row formtitle">
                <div class="row header"> 
                    <h1>Them moi lao hang hoa</h1>
            </div>
                <div class="row formcontent">
                    <form action="index.php?act=adddm" method="post">
                        <div class="row mb10">
                            Ma loai : <br>
                            <input type="text" name="maloai" placeholder="auto number">
                        </div>
                        <div class="row mb10">
                            Ten loai : <br>
                            <input type="text" name="tenloai">
                        </div>
                        <div class="row mb10">
                            <input type="submit" name="themmoi" value="Them moi" >
                            <input type="reset" value="Nhap lai">
                            <a href="index.php?act=lisdm"><input type="button" value="Danh sach"></a>
                        </div>
                        <?php
                        if(isset($thongbao)&&($thongbao)!="") echo $thongbao;
                        ?>
                        
                    </form>
                </div>
            </div>
            
        </div>
    </div>