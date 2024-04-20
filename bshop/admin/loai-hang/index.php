<?php
require "../../global.php";
require_once "../../dao/loai.php";
require_once "../../dao/pdo.php";
extract($_REQUEST);
if (exist_param("btn_list")){
    $iteam= loai_selectall();
    $VIEW_NAME = "list.php";

}
elseif(exist_param("btn_insert")){
    $ten_loai= $_POST['ten_loai'];
    loai_insert($ten_loai);
    $iteam= loai_selectall();
    $VIEW_NAME = "list.php";
}
elseif(exist_param("btn_edit")){
    $ma_loai=$_REQUEST['ma_loai'];
    $loai_info=loai_getinfo($ma_loai);    
    extract($loai_info);
    $iteam= loai_selectall();
    $VIEW_NAME = "edit.php";
}
elseif(exist_param("btn_update")){
    $ma_loai= $_POST['ma_loai'];
    $ten_loai= $_POST['ten_loai'];
    loai_update($ma_loai,$ten_loai);    
    $iteam= loai_selectall();
    $VIEW_NAME = "list.php";
}

elseif(exist_param("btn_delete")){
    $ma_loai=$_REQUEST['ma_loai'];
    loai_delete($ma_loai);
    
    $iteam= loai_selectall();
    $VIEW_NAME = "list.php";
}
else{
    $VIEW_NAME = "add.php";
}

require "../layout.php";
?>