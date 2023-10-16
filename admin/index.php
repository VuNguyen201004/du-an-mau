<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "header.php"; // Kiểm tra xem có file header.php không

if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch($act){
        case 'adddm': // Đổi ; thành :
            // Kiểm tra người dùng click vào nút add
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";
            }
            include "danhmuc/add.php";
            break;

        case 'lisdm':
            $listdanhmuc=loadall();
            include "danhmuc/list.php";
            break;
            
        case 'xoadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc=loadall();
            include "danhmuc/list.php";
            break;
        case 'suadm';
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $dm = loadone(($_GET['id']));
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm';
         if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id,$tenloai);
                $thongbao = "Cap nhat thành công";
            }
            include "danhmuc/add.php";
            break;
        
            /* Controler cua san pham */
        case 'addsp': // Đổi ; thành :
            // Kiểm tra người dùng click vào nút add
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $iddm = $_POST['iddm'];
                $hinh=$_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){
                    // echo "file". htmlspecialchars(basename($_FILES['name']))
                }else{

                }
                insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc=loadall();
            include "sanpham/add.php";
            break;

        case 'listsp':
            if(isset($_POST['listok']) && ($_POST['listok'])){
                $kyw=$_POST['kyw'];
                $iddm=$_POST['iddm'];
            }else{
                $kyw="";
                $iddm=0;
            }
            $listdanhmuc=loadall();
            $listsanpham=loadall_sanpham($kyw,$iddm);
            include "sanpham/list.php";
            break;
            
        case 'xoasp':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_sanpham($_GET['id']);
            }
            $listsanpham=loadall_sanpham("",0);
            include "sanpham/list.php";
            break;
        case 'suasp';
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $sanpham = loadone_sanpham(($_GET['id']));
            }
            $listdanhmuc=loadall(); 
            include "sanpham/update.php";
            break;
        case 'updatesp';
        if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
            $id = $_POST['id'];
            $tensp = $_POST['tensp'];
            $giasp = $_POST['giasp'];
            $mota = $_POST['mota'];
            $iddm = $_POST['iddm'];
            $hinh=$_FILES['hinh']['name'];
            $target_dir = "../upload/";
            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){
                // echo "file". htmlspecialchars(basename($_FILES['name']))
            }else{

            }
            update_sanpham($iddm,$id,$tensp,$giasp,$mota,$hinh);
                $thongbao = "Cap nhat thành công";
            }
            $listsanpham=loadall_sanpham();
            include "sanpham/add.php";
            break;
            // Khách hàng 
        case 'dskh';
            $listtaikhoan=loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'dsbl';
            $listbinhluan=loadall_binhluan(0);
            include "binhluan/list.php";
            break;
        case 'xoabl':
            if(isset($_GET['id'])&&($_GET['id']>0)){
            delete_binhluan($_GET['id']);
            }
            $listbinhluan=loadall_binhluan($id);
            include "binhluan/list.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";

?>
