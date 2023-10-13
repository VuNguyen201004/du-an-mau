<div class="row">
            <div class="row formtitle mb">
                    <h1>Danh sach lao hang hoa</h1>
            </div>
            <form action="index.php?act=listsp" method="POST">
                        <input type="text" name="kyw">
                        <select name="iddm" id="">
                            <option value="0" selected >tat ca</option>
                        <?php
                            foreach($listdanhmuc as $danh_muc){
                                extract($danh_muc);
                                echo '<option value="'.$id.'">'.$ten_danh_muc.'</option>';
                            }
                        ?>
                        </select>
                        <input type="submit" name="listok" value="GO">
            </form>
            <div class="row formcontent">
                <div class="row mb10 formdanhsach">
                    
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ LOẠI</th>
                            <th>TÊN SẢN PHẨM</th>
                            <th>GÁI</th>
                            <th>HÌNH</th>
                            <th>LƯỢT XEM</th>
                            <th></th>
                        </tr>
                        <?php
                        foreach($listsanpham as $san_pham){
                            extract($san_pham);
                            $suasp="index.php?act=suasp&id=".$id;
                            $xoasp="index.php?act=xoasp&id=".$id;
                            $hinhpath="../upload/".$hinh;
                            if(is_file($hinhpath)){
                                $hinh="<img src='".$hinhpath."' height='80'>";
                            }else{
                                $hinh="no photo";
                            }
                            echo ' <tr>
                            <td><input type="checkbox"></td>
                            <td> '.$id.'</td>
                            <td>'.$name.'</td>
                            <td>'.$gia.'</td>
                            <td>'.$hinh.'</td>
                            <td>'.$luotxem.'</td>
                            <td><a href="'.$suasp.'"><input type="button" value="Sua"></a> <a href="'.$xoasp.'"><input type="button" value="Xoa"> </a> </td>
                        </tr>';
                        }
                        ?>
                        
                    </table>
                </div>
                
                <div class="row mb10">
                <input type="submit" value="Chọn tất cả">
                    <input type="reset" value="Bỏ chọn tất cả">
                    <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                </div>
            </div>
        </div>