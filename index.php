<?php
    include "view/header.php";
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/danhmuc.php";
    include "global.php";

    // include "view/home.php";
    // include "view/footer.php";
    $spnew = loadall_sanpham_home();
    $dsdm = loadall();
    $dstop10 = loadall_sanpham_top10();
    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
            // case 'sanphamct':
            //     if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
            //         include "view/sanphamct.php";
            //     }
            //     $onesp = loadone_sanpham($id)
            //     include "view/sanphamct.php";
            //     break;
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