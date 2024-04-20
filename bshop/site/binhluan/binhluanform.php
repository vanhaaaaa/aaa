<?php
session_start();
include "../../dao/pdo.php";
include "../../dao/binhluan.php";

$idpro=$_REQUEST['idpro'];
$dsbl=binh_luan_selectall($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=$CONTENT_URL?>/css/tc.css">
    <style>

       #binhluan table td:first-child(1){
            width: 50%;
        }
       #binhluan table td:first-child(2){
            width: 20%;
        }
       #binhluan table td:first-child(3){
            width: 30%;
        }
        .text{
            text-align: center;
            border-radius: 3px;
        }
    </style>
</head>
<body>

<div class="row mb">
    <div class="boxtitle">binh luan</div>
    <div class="boxcontent2">
        <table>
            <?php

            foreach ($dsbl as $bl) {
                extract($bl);

                echo '<tr >
                <td>noidung:' .$noi_dung.'</td>';
               
                echo '<td>'.$ma_kh.'</td>';
               
                echo'<td>'.$ngay_bl.'</td>
                </tr>';
            }



            ?>
        </table>
        

    </div>
    <?php
    if (isset($_SESSION['ma_kh'])) { ?>
  <div class="boxfooter searbox">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <input type="text" name="noi_dung">
            <input  type="hidden" name="idpro" value="<?=$idpro?>">
            <input type="submit" name="guibinhluan" value="gui binh luan">
        </form>
    </div>
</div>
<?php
    }
else{
    echo '<div class="boxtitle text">
    dang nhap de binh luan
</div>';
}
?>
   
     
<?php
if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
    $noi_dung=$_POST['noi_dung'];
    $ma_hh=$_POST['idpro'];
    $ma_kh=$_SESSION['ma_kh']['ma_kh'];
    $ngay_bl=date("Y/m/d");
    binh_luan_insert($noi_dung,$ma_hh,$ma_kh,$ngay_bl);
    header("location:".$_SERVER['HTTP_REFERER']." ");
}




?>
</body>
</html>