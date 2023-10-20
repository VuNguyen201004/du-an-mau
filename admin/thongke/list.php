
<div class="row">
            <div class="row formtitle">
                    <h1>THỐNG KÊ</h1>
            </div>
            <div class="row formcontent">
                <div class="row mb10 formdanhsach">
                    <table>
                        <tr>
                            <th>MÃ DANH MUC</th>
                            <th>TÊN DANH MỤC</th>
                            <th>SỐ LƯỢNG </th>
                            <th>GIÁ CAO NHẤT</th>
                            <th>GIÁ THẤP NHẤT</th>
                            <th>GIÁ TRUNG BÌNH</th>
                        <?php
                        foreach($listthongke as $thongke){
                            extract($thongke);
                            echo '
                            <tr><td>'.$madm.'</td>
                            <td>'.$tendm.'</td>
                            <td>'.$countsp.'</td>
                            <td>'.$maxgia.'</td>
                            <td>'.$mingia.'</td>
                            <td>'.$avggia.'</td>
                            </tr>
                            ';
                        }
                        
                        ?>
                        
                    </table>
                </div>
                
                <div class="row mb10">
                    <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
                </div>
            </div>
        </div>