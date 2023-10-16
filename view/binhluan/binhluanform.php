<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";

$idpro = $_REQUEST['idpro'];
$iduser = isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : null;
$dsbl = loadall_binhluan($idpro);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['giubinhluan']) && $_POST['giubinhluan']) {
        $noidung = $_POST['noidung'];
        $idpro = $_POST['idpro'];
        $ngaybinhluan = date('h:i:sa d/m/Y');

        // Gọi hàm insert_binhluan trong phần xử lý form
        insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit(); // Chắc chắn dừng kịch bản sau khi chuyển hướng
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        .binhluan table{
            width:100%;
            margin-left:5%;
        }
        .binhluan table td:nth-child(1){
            width:50%;
        }
        .binhluan table td:nth-child(2){
            width:20%;
        }
        .binhluan table td:nth-child(3){
            width:30%;
        }
    </style>
</head>
<body>
    <div class="row mb ">
        <div class="boxtitle">BÌNH LUẬN</div>
        <div class="boxcontent2 binhluan">
            <table>
            <?php
            if (!empty($dsbl)) {
                foreach ($dsbl as $bl) {
                    echo '<tr>';
                    echo '<td>' . $bl['noidung'] . '</td>';
                    echo '<td>' . $bl['iduser'] . '</td>';
                    echo '<td>' . $bl['ngaybinhluan'] . '</td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="3">Chưa có bình luận nào.</td></tr>';
            }
            ?>
            </table>
        </div>
        <div class="boxfooter binhluanform">
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                <input type="hidden" name="idpro" value="<?=$idpro?>">
                <input type="text" name="noidung">
                <input type="submit" name="giubinhluan" value="Gửi bình luận">
            </form>
        </div>
    </div>
</body>
</html>
