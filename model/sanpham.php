<?php
function insert_sanpham($tensp,$gia,$hinh,$mota,$iddm){
    $sql = "INSERT INTO san_pham(name,gia,hinh,mota,iddm) 
    VALUES('$tensp','$gia','$hinh','$mota','$iddm')"; // Sử dụng prepared statement để tránh SQL injection
    pdo_execute($sql);
} 
function delete_sanpham($id){
    $sql="DELETE FROM san_pham where id=".$id;
    pdo_execute($sql);
}
function loadall_sanpham_home(){
    $sql = "SELECT * FROM san_pham where 1 order by id desc limit 0,9";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_top10(){
    $sql = "SELECT * FROM san_pham where 1 order by luotxem desc limit 0,10";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($kyw,$iddm){
    $sql = "SELECT * FROM san_pham where 1";
    if($kyw!=""){
        $sql.="and name like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadone_sanpham($id){
    $sql = "SELECT * FROM san_pham where id=".$id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_sanpham($iddm,$id,$tensp,$giasp,$mota,$hinh){
    // if($hinh!="")
    //     $sql = "UPDATE san_pham set name ='".$tensp."',gia ='".$gia."',mota ='".$mota."',hinh ='".$hinh."' where id=".$id;
     
    // else
    $sql = "UPDATE san_pham set name ='".$tensp."',gia ='".$giasp."',mota ='".$mota."',iddm ='".$iddm."' where id=".$id;
    pdo_execute($sql);
}
?>