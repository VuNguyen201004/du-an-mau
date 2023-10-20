<?php
    session_start();
    include "view/header.php";
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/danhmuc.php";
    include "model/taikhoan.php";
    include "global.php";


    if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

    $spnew = loadall_sanpham_home();
    $dsdm = loadall();
    $dstop10 = loadall_sanpham_top10();
    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
            case 'sanpham':
                if(isset($POST['kyw'])&&($_POST['kyw']!="")){
                    $kyw= $_POST['kyw'];
                }else{
                    $kyw="";
                }
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm= $_GET['iddm'];
                }else{
                    $iddm=0;
                }
                $dssp = loadall_sanpham("",$iddm);
                $tendm= load_ten_dm($iddm);
                include "view/sanpham.php";
                break;
            case 'sanphamct':
                if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $id= $_GET['idsp'];
                    $onesp=loadone_sanpham($id);
                    extract($onesp);
                    $sp_cung_loai = load_sanpham_cungloai($id,$iddm);
                    include "view/sanphamct.php";
                }else{
                    include "view/home.php";
                }
                break;
            case 'dangky':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    insert_taikhoan($email,$user,$pass);
                    $thongbao= "Đã đăng ký thành công vui lòng đăng nhập để thưucj hiện chức năng bình luận và mua hàng";
                }
                include "view/taikhoan/dangky.php";
                break;
            case 'dangnhap':
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $checkuser=checkuser($user,$pass);
                    if(is_array($checkuser)){
                        $_SESSION['user']=$checkuser;
                        header('location:index.php');
                    }else{
                        $thongbao = "Tài khoản không tồn tại ! Vui lòng đăng ký tài khoản";
                    }
                }
                    include "view/taikhoan/dangky.php";
                    break;
            case 'edit_taikhoan':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $tel=$_POST['tel'];
                    $id=$_POST['id'];

                    update_taikhoan($id,$user,$pass,$email,$address,$tel);
                    $_SESSION['user']=checkuser($user,$pass);
                    $thongbao = "Cập nhật thành công !";
                    header('location:index.php?act=edit_taikhoan');
                    
                   
                }
                include "view/taikhoan/edit_taikhoan.php";
                break;
            case 'quenmk':
                if(isset($_POST['giuemail'])&&($_POST['giuemail'])){
                    $email=$_POST['email'];
                    $checkemail=checkemail($email);

                    if(is_array($checkemail)){
                        $thongbao = "Mật khẩu của bạn là :".$checkemail['pass'];
                    }else{
                        $thongbao="email này không tồn tại";
                    }
                }
                include "view/taikhoan/quenmk.php";
                break;
            case 'thoat':
                session_unset();
                header('location:index.php');
                break;
            case 'addtocart':
                if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    $hinh=$_POST['hinh'];
                    $gia=$_POST['gia'];
                    $soluong=1;
                    $ttien=$soluong*$gia;
                    $spadd=[$id,$name,$hinh,$gia,$soluong,$ttien];
                    array_push($_SESSION['mycart'],$spadd);
                }
            
                include "view/cart/viewcart.php";
                break;
            case 'gioithieu':
                
                include "view/gioithieu.php";
                break;
            
            case 'lienhe':
                # code...
                include "view/lienhe.php";
                break;
            default:
            include "view/home.php";
                # code...
                break;
        }
    }else{
        include"view/home.php";

    }
    include"view/footer.php";
?>