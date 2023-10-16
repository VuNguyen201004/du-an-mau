<?php
function insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm) {
    $sql = "INSERT INTO san_pham(name, gia, hinh, mota, iddm) 
            VALUES('$tensp', '$giasp', '$hinh', '$mota', '$iddm')";
    pdo_execute($sql);
}

function delete_sanpham($id) {
    $sql = "DELETE FROM san_pham WHERE id = $id";
    pdo_execute($sql);
}

function loadall_sanpham_home() {
    $sql = "SELECT * FROM san_pham ORDER BY id DESC LIMIT 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_sanpham_top10() {
    $sql = "SELECT * FROM san_pham ORDER BY luotxem DESC LIMIT 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_sanpham($kyw = "", $iddm = 0) {
    $sql = "SELECT * FROM san_pham WHERE 1";
    if ($kyw != "") {
        $sql .= " AND name LIKE '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " AND iddm ='" . $iddm . "'";
    }
    $sql .= " ORDER BY id DESC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function load_ten_dm($iddm) {
    if ($iddm > 0) {
        $sql = "SELECT * FROM danh_muc WHERE id = $iddm";
        $dm = pdo_query_one($sql);
        extract($dm);
        return $ten_danh_muc;
    } else {
        return "";
    }
}

function loadone_sanpham($id) {
    $sql = "SELECT * FROM san_pham WHERE id = $id";
    $sp = pdo_query_one($sql);
    return $sp;
}

function load_sanpham_cungloai($id, $iddm) {
    $sql = "SELECT * FROM san_pham WHERE iddm = $iddm AND id <> $id";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function update_sanpham($iddm, $id, $tensp, $giasp, $mota, $hinh) {
    if ($hinh != "") {
        $sql = "UPDATE san_pham SET iddm='$iddm', name ='$tensp', gia ='$giasp', mota ='$mota', hinh ='$hinh' WHERE id = $id";
    } else {
        $sql = "UPDATE san_pham SET iddm='$iddm', name ='$tensp', gia ='$giasp', mota ='$mota' WHERE id = $id";
    }
    pdo_execute($sql);
}
?>
