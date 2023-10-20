<?php
function loadall_thongke(){
    $sql = "SELECT danh_muc.id as madm, danh_muc.ten_danh_muc as tendm, count(san_pham.id) as countsp, min(san_pham.gia) as mingia, max(san_pham.gia) as maxgia, avg(san_pham.gia) as avggia ";
    $sql .= "FROM san_pham ";
    $sql .= "LEFT JOIN danh_muc ON danh_muc.id = san_pham.iddm ";
    $sql .= "GROUP BY danh_muc.id ORDER BY danh_muc.id DESC";

    $listtk = pdo_query($sql);
    return $listtk;
}
?>
