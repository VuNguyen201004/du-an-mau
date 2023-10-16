<?php
function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
    $sql = "INSERT INTO binhluan (noidung,iduser,idpro,ngaybinhluan) VALUES('$noidung','$iduser','$idpro','$ngaybinhluan')"; // Sử dụng prepared statement để tránh SQL injection
    pdo_execute($sql);
}
function loadall_binhluan($idpro){
    $sql = "SELECT * FROM binhluan where  1";
    if($idpro>0) 
    $sql.=" AND idpro='".$idpro."'";
    $sql.=" order by id desc";
    $listbl=pdo_query($sql);
    return $listbl;
}
function loadall_binhluan2(){
    $sql = "SELECT * FROM binhluan order by id desc";
    $listbinhluan=pdo_query($sql);
    return $listbinhluan;
}
function delete_binhluan($id){
    $sql="DELETE FROM binhluan where id=".$id;
    pdo_execute($sql);
}
?>