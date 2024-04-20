<?php
require "../../global.php";
require_once "../../dao/binhluan.php";
require_once "../../dao/pdo.php";
require_once "../../dao/hang-hoa.php";
require_once "../../dao/khach-hang.php";

extract($_REQUEST);




if(exist_param("btn_delete")){
    $ma_bl=$_REQUEST['ma_bl'];
    binh_luan_delete($ma_bl);
    // extract($khach_hang_info);
    $bl= bl_selectall();
    $VIEW_NAME = "list.php";
}
else{
    $iteam= hang_hoa_selectall();
    $bl= bl_selectall();
    $VIEW_NAME = "list.php";
    $sql =binh_luana_all();
}

require "../layout.php";

?>