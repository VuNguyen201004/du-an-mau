<?php
function insert_danhmuc($tenloai){
    $sql = "INSERT INTO danh_muc(ten_danh_muc) VALUES('$tenloai')"; // Sử dụng prepared statement để tránh SQL injection
    pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql="DELETE FROM danh_muc where id=".$id;
    pdo_execute($sql);
}
function loadall(){
    $sql = "SELECT * FROM danh_muc order by id desc";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}
function loadone($id){
    $sql = "SELECT * FROM danh_muc where id=".$id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id,$tenloai){
    $sql = "UPDATE danh_muc set ten_danh_muc ='".$tenloai."' where id=".$id;
                pdo_execute($sql);
}
?>