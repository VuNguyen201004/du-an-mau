<div class="row">
            <div class="row formtitle">
                    <h1>Danh sach lao hang hoa</h1>
            </div>
            <div class="row formcontent">
                <div class="row mb10 formdanhsach">
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ LOẠI</th>
                            <th>TÊN LOẠI</th>
                            <th></th>
                        </tr>
                        <?php
                        foreach($listdanhmuc as $danh_muc){
                            extract($danh_muc);
                            $suadm="index.php?act=suadm&id=".$id;
                            $xoadm="index.php?act=xoadm&id=".$id;
                            echo ' <tr>
                            <td><input type="checkbox"></td>
                            <td> '.$id.'</td>
                            <td>'.$ten_danh_muc.'</td>
                            <td><a href="'.$suadm.'"><input type="button" value="Sua"></a> <a href="'.$xoadm.'"><input type="button" value="Xoa"> </a> </td>
                        </tr>';
                        }
                        ?>
                        
                    </table>
                </div>
                
                <div class="row mb10">
                <input type="submit" value="Chọn tất cả">
                <input type="reset" value="Bỏ chọn tất cả">
                    <a href="index.php?act=adddm"><input type="button" value="Nhap them"></a>
                </div>
            </div>
        </div>