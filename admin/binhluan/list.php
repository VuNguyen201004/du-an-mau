<div class="row">
            <div class="row formtitle">
                    <h1>DANH SÁCH TÀI KHOẢN</h1>
            </div>
            <div class="row formcontent">
                <div class="row mb10 formdanhsach">
                    <table>
                        <tr>
                        <th></th>
                            <th>ID</th>
                            <th>NỘI DUNG BÌNH LUẬN</th>
                            <th>TÊN TÀI KHOẢN</th>
                            <th>BÌNH LUẬN SẢN PHẨM</th>
                            <th>NGÀY BÌNH LUẬN</th>
                            <th></th>
                        </tr>
                        <?php
                        foreach($listbinhluan as $binhluan){
                            extract($binhluan);
                            $suabl="index.php?act=suabl&id=".$id;
                            $xoabl="index.php?act=xoabl&id=".$id;
                            echo ' <tr>
                            <td><input type="checkbox"></td>
                            <td> '.$id.'</td>
                            <td>'.$noidung.'</td>
                            <td>'.$iduser.'</td>
                            <td>'.$idpro.'</td>
                            <td>'.$ngaybinhluan.'</td>
                            <td></a> <a href="'.$xoabl.'"><input type="button" value="XÓA"> </a> </td>
                        </tr>';
                        }
                        ?>
                        
                    </table>
                </div>
                
                <div class="row mb10">
                    <input type="submit" value="Chọn tất cả">
                    <input type="reset" value="Bỏ chọn tất cả">
                    <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
                </div>
            </div>
        </div>