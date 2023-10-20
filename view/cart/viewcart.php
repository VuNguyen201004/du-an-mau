
<div class="row mb mb">
            <div class="boxtrai mr ">
                <div class="row mb">
                
                    <div class="boxtitle">GIỎ HÀNG</div>
                        <div class="row boxcontent2 cart">
                        <table>
                            <tr>
                                <th>Tên sản phẩm </th>
                                <th>Hình </th>
                                <th>Số lượng </th>
                                <th>Đơn giá</th>
                                <th>Thành tiền</th>
                                <th>Thao tác</th>
                            </tr>

                            <?php
                            $tong=0;
                            foreach($_SESSION['mycart'] as $cart){
                                $hinh=$hinh_path.$cart[2];
                                $ttien=$cart[3]*$cart[4];
                                $tong+=$ttien;
                                echo '<tr>
                                <td>'.$cart[1].'</td>
                                <td><img src="'.$hinh.'" alt="" height="80"></td>
                                <td>'.$cart[3].'</td>
                                <td>'.$cart[4].'</td>
                                <td>'.$ttien.'</td>
                                <td><input type="button" value="Xóa" name="xoa"></td>
                            </tr>';
                            }
                            echo '<tr>
                            <td colspan="4">Tong don hang</td>
                            <td>'.$tong.'</td>
                            <td></td>
                        </tr> '

                            ?>
                            
                            <!-- <tr>
                                <td>1</td>
                                <td><img src="" alt="" height="80"></td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td><input type="button" value="Xóa"></td>
                            </tr> -->
                        </table>

                        </div>
                    </div>

                <div class="row mb bill">
                    <input type="submit" value="ĐẶT HÀNG"> <a href="index.php?act=delcart"><input type="button" value="XÓA GIỎ HÀNG"></a>
                </div>
</div>
            <div class="boxphai">

            </div>
    </div>