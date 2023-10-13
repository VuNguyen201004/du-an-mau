
<?php
    if(is_array($dm)){
        extract($dm);
}
?>
<div class="row">
            <div class="row formtitle">
                <div class="row header"> 
                    <h1>Cap nhat loai hang hoa</h1>
            </div>
                <div class="row formcontent">
                    <form action="index.php?act=updatedm" method="post">
                        <div class="row mb10">
                            Ma loai : <br>
                            <input type="text" name="maloai" placeholder="auto number">
                        </div>
                        <div class="row mb10">
                            Ten loai : <br>
                            <input type="text" name="tenloai" value="<?php if(isset($ten_danh_muc)&&($ten_danh_muc!="")) echo $ten_danh_muc;?>">
                        </div>
                        <div class="row mb10">
                            <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
                            <input type="submit" name="capnhat" value="Cap nhat" >
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