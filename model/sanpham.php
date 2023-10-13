<?php
function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
    $sql = "INSERT INTO san_pham(name,gia,hinh,mota,iddm) 
    VALUES('$tensp','$giasp','$hinh','$mota','$iddm')"; // Sử dụng prepared statement để tránh SQL injection
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
function loadall_sanpham($kyw="",$iddm=0){
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
function load_ten_dm($iddm){
    if($iddm>0){
        $sql = "SELECT * FROM danh_muc where id=".$iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $ten_danh_muc;
    }else{
        return "";
    }
}
function loadone_sanpham($id){
    $sql = "SELECT * FROM san_pham where id=".$id;
    $sp = pdo_query_one($sql);
    return $sp;
}
//san pham cungf loai
function load_sanpham_cungloai($id,$iddm){
    $sql = "SELECT * FROM san_pham where iddm=".$iddm." AND id <> ".$id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($iddm,$id,$tensp,$giasp,$mota,$hinh){
    // if($hinh!="")
    //     $sql = "UPDATE san_pham set name ='".$tensp."',gia ='".$gia."',mota ='".$mota."',hinh ='".$hinh."' where id=".$id;
     
    // else
    $sql = "UPDATE san_pham set name ='".$tensp."',gia ='".$giasp."',mota ='".$mota."',iddm ='".$iddm."',hinh ='".$hinh."' where id=".$id;
    pdo_execute($sql);
}
?>