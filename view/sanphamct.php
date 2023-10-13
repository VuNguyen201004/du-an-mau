<div class="row mb mb">
                <div class="boxtrai mr demo">
                <div class="row mb">
                    <?php
                        extract($onesp);
                    ?>
                <div class="boxtitle"><?=$name?></div>
                    <div class="row boxcontent">
                            <?php
                            extract($onesp);
                            $hinh=$img_path.$hinh;
                            echo '<div class="row mb spct"><img src ="'.$hinh.'"></div>';
                            echo $mota;
                            ?>
                    </div>
                </div>
                <div class="row mb">
                <div class="boxtitle">Binh Luan</div>
                    <div class="row boxcontent">
                                            
                    </div>
                </div>
                <div class="row mb">
                <div class="boxtitle">San Pham cung loai</div>
                    <div class="row boxcontent">
                        <?php
                        foreach($sp_cung_loai as $sp_cung_loai ){
                            extract($sp_cung_loai);
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            echo '<li><a href=""'.$linksp.'">'.$name.'</a><li>';
                        }
                        ?>
                    </div>
                </div>
                </div>
            <div class="boxphai">
                <?php include"boxright.php"; ?>
            </div>
    </div>