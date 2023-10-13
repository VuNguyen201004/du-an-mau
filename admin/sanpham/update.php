
<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath="../upload/".$hinh;
    if(is_file($hinhpath)){
        $hinh="<img src='".$hinhpath."' height='80'>";
    }else{
        $hinh="no photo";
    }

?>
<div class="row">
            <div class="row formtitle">
                <div class="row header"> 
                    <h1>Cap nhat loai hang hoa</h1>
            </div>
                <div class="row formcontent">
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                        <div class="row mb10">
                        <select name="iddm" id="">
                            <option value="0" selected >tat ca</option>
                            <?php
                                foreach($listdanhmuc as $danh_muc){
                                    extract($danh_muc);
                                    if($iddm==$id) $s="selected"; else $s="";
                                    echo '<option value="'.$id.'"'.$s.'>'.$ten_danh_muc.'</option>';
                                }
                            ?>
                        </select>
                        </div>
                        <div class="row mb10">
                            TÊN SẢN PHẨM : <br>
                            <input type="text" name="tensp" value="<?=$name?>">
                        </div>
                        <div class="row mb10">
                            GIÁ : <br>
                            <input type="text" name="giasp" value="<?=$gia?>">
                        </div>
                        <div class="row mb10">
                            HÌNH ẢNH : <br>
                            <input type="file" name="hinh" id="">
                            <?=$hinh?>
                        </div>
                        <div class="row mb10">
                            MÔT TẢ : <br>
                            <textarea name="mota" id="" cols="30" rows="10" value=""><?=$mota?></textarea>
                        </div>
                        
                        <div class="row mb10">
                            <input type="hidden" name="id" value="<?=$id?>">
                            <input type="submit" name="capnhat" value="Cập nhật'" >
                            <input type="reset" value="Nhập lại">
                            <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
                        </div>
                        <?php
                        if(isset($thongbao)&&($thongbao)!="") echo $thongbao;
                        ?>
                        
                    </form>
                </div>
            </div>
            
        </div>
    </div>