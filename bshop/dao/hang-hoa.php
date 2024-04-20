<?php
require_once 'pdo.php';



function hang_hoa_insert($ten_hh,$don_gia,$giam_gia,$hinh,$ngay_nhap,$mo_ta,$dac_biet,$so_luot_xem,$idcata){
    $sql="insert into hang_hoa(ten_hh,don_gia,giam_gia,hinh,ngay_nhap,mo_ta,dac_biet,so_luot_xem,idcata) 
                        values(?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql,$ten_hh,$don_gia,$giam_gia,$hinh,$ngay_nhap,$mo_ta,$dac_biet,$so_luot_xem,$idcata);
   
   }

function hang_hoa_update($ma_hh,$ten_hh,$don_gia,$giam_gia,$hinh,$ngay_nhap,$mo_ta,$dac_biet,$so_luot_xem,$idcata){
    $sql= "update hang_hoa set ten_hh=?,don_gia=?,giam_gia=?,hinh=?,ngay_nhap=?,mo_ta=?,dac_biet=?,so_luot_xem=?,idcata=? where ma_hh=?";
    pdo_execute($sql,$ten_hh,$don_gia,$giam_gia,$hinh,$ngay_nhap,$mo_ta,$dac_biet,$so_luot_xem,$idcata,$ma_hh);
}
function hang_hoa1_selectall_home(){
    $sql="select * from hang_hoa where 1 order by ma_hh desc limit 0,9";
    
    return pdo_query($sql);
}
function hang_hoa1_selectall($kyw,$iddm){
    $sql="select * from hang_hoa where 1";
    if($kyw!=""){
        $sql.=" and ten_hh like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and idcata =' ".$iddm."'";
    }
    $sql.=" order by ma_hh desc";
    return pdo_query($sql);
}
function hang_hoa_delete($ma_hh){
    $sql= "delete from hang_hoa where ma_hh=?";
    if(is_array($ma_hh)){
        foreach ($ma_hh as $ma){
            pdo_execute($sql,$ma);
        }
    }
    else{
        pdo_execute($sql,$ma_hh);
    }
}
function hang_hoa_selectall(){
    $sql="select * from hang_hoa";
    return pdo_query($sql);
}
function hang_hoa_top10_selectall(){
    $sql="select * from hang_hoa where 1 order by ma_hh desc limit 0,10";
    return pdo_query($sql);
}
function hang_hoa_select_by_id($ma_hh){
$sql = "select * from hang_hoa where ma_hh=?";
return pdo_query_one($sql,$ma_hh);

}
// function hang_hoa_exist($ma_kh){
//     $sql= "select count(*) from hang_hoa where ma_kh=?";
//     return pdo_query_value($sql, $ma_kh)>0;

// }
// function hang_hoa_select_by_role($vai_tro){
//     $sql="select * from hang_hoa where vai_tro=?";
//     return pdo_query($sql,$vai_tro);

// }


?>