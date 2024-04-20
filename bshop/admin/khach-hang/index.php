<?php
require "../../global.php";
require_once "../../dao/khach-hang.php";
require_once "../../dao/pdo.php";

extract($_REQUEST);
if (exist_param("btn_list")){
    $iteam= khach_hang_selectall();
    $VIEW_NAME = "list.php";

}
elseif(exist_param("btn_insert")){
    $ma_kh= $_POST['ma_kh'];
    $mat_khau= $_POST['mat_khau'];
    $ho_ten= $_POST['ho_ten'];
    $kich_hoat=$_POST['kich_hoat'];
    $hinh= $_FILES['hinh']['name']; 
    $target_dir = "../../upload/";
$target_file = $target_dir . basename($_FILES["hinh"]["name"]);
if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    // echo "Sorry, there was an error uploading your file.";
  }
    $email= $_POST['email'];
    
    $vai_tro=$_POST['vai_tro'];
    
    khach_hang_insert($ma_kh,$ho_ten,$mat_khau,$email,$hinh,$kich_hoat,$vai_tro);
    $iteam= khach_hang_selectall();
    $VIEW_NAME = "list.php";
    
}
elseif(exist_param("btn_edit")){
    $ma_kh=$_REQUEST['ma_kh'];
    $khach_hang_info=khach_hang_select_by_id($ma_kh);
    extract($khach_hang_info);
    $iteam= khach_hang_selectall();
    $VIEW_NAME = "edit.php";
}
elseif(exist_param("btn_update")){
    $ma_kh= $_POST['ma_kh'];
    $mat_khau= $_POST['mat_khau'];
    $ho_ten= $_POST['ho_ten'];
    $kich_hoat=$_POST['kich_hoat'];
    $hinh= $_FILES['up_hinh']['name'];
    $email= $_POST['email'];
    
    $vai_tro=$_POST['vai_tro'];
    khach_hang_update($ma_kh,$mat_khau,$ho_ten,$kich_hoat,$hinh,$email,$vai_tro);    
    $iteam= khach_hang_selectall();
    $VIEW_NAME = "list.php";
}

elseif(exist_param("btn_delete")){
    $ma_kh=$_REQUEST['ma_kh'];
    khach_hang_delete($ma_kh);
    // extract($khach_hang_info);
    $iteam= khach_hang_selectall();
    $VIEW_NAME = "list.php";
}
else{
    $VIEW_NAME = "add.php";
}

require "../layout.php";
?>