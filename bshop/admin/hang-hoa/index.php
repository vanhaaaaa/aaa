<?php
require "../../global.php";
require_once "../../dao/hang-hoa.php";
require_once "../../dao/loai.php";
require_once "../../dao/pdo.php";
extract($_REQUEST);
if (exist_param("btn_list")){
    $iteam= hang_hoa_selectall();
    $VIEW_NAME = "list.php";
    $loai_hang= loai_selectall();

}
elseif(exist_param("btn_insert")){
    
    $ten_hh=$_POST['ten_hh'];
    $don_gia=$_POST['don_gia'];
    $giam_gia=$_POST['giam_gia'];
    $hinh= $_FILES['hinh']['name'];
    $target_dir = "../../upload/";
$target_file = $target_dir . basename($_FILES["hinh"]["name"]);
if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    // echo "Sorry, there was an error uploading your file.";
  }
    $ngay_nhap= $_POST['ngay_nhap'];
    $mo_ta= $_POST['mo_ta'];
    $so_luot_xem= $_POST['so_luot_xem'];
    $idcata=$_POST['idcata'];
    
    
    hang_hoa_insert($ten_hh,$don_gia,$giam_gia,$hinh,$ngay_nhap,$mo_ta,$dac_biet,$so_luot_xem,$idcata);
    $iteam= hang_hoa_selectall();
    
    $VIEW_NAME = "list.php";
}
elseif(exist_param("btn_edit")){
    $ma_hh=$_REQUEST['ma_hh'];
    $khach_hang_info=hang_hoa_select_by_id($ma_hh);
    extract($khach_hang_info);
    $iteam= hang_hoa_selectall();
    $loai_hang= loai_selectall();
    $VIEW_NAME = "edit.php";
}
elseif(exist_param("btn_update")){

    $ten_hh= $_POST['ten_hh'];
    $don_gia= $_POST['don_gia'];
    $giam_gia=$_POST['don_gia'];

    $hinh= $_FILES['up_hinh']['name'];
    $ngay_nhap=$_POST['ngay_nhap'];
    $mo_ta=$_POST['mo_ta'];
    $dac_biet=$_POST['dac_biet'];
    $so_luot_xem=$_POST['so_luot_xem'];
    $idcata=$_POST['idcata'];
    $ma_hh=$_POST['ma_hh'];
    
    hang_hoa_update($ma_hh,$ten_hh,$don_gia,$giam_gia,$hinh,$ngay_nhap,$mo_ta,$dac_biet,$so_luot_xem,$idcata);
    $iteam= hang_hoa_selectall();
    $VIEW_NAME = "list.php";
}

elseif(exist_param("btn_delete")){
    $ma_hh=$_REQUEST['ma_hh'];
    hang_hoa_delete($ma_hh);
    // extract($hang_hoa_info);
    $iteam= hang_hoa_selectall();
    $VIEW_NAME = "list.php";
}
elseif(exist_param("btn_listsp")){
    
    if (isset($_POST['listok'])&&($_POST['listok'])) {
        $kyw=$_POST['kyw'];
        $iddm=$_POST['iddm'];   
    }
    else{
        $kyw='';
        $iddm=0;
    }
    $loai_hang= loai_selectall();
    $iteam=hang_hoa1_selectall($kyw,$iddm);   
    $VIEW_NAME = "list.php"; 
}
else{
    $loai_hang= loai_selectall();           
    $VIEW_NAME = "add.php";
}

require "../layout.php";





// if(isset($_GET['btn'])){
//     $btn= $_GET['btn'];
//     switch ($btn){
//         case 'insert':
//             if(isset($_POST['themmoi'])&&($_POST['themmoi'])){

//             }
//     }
// }

















?>

