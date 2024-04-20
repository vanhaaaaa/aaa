<?php
// require_once 'pdo.php';


function khach_hang_insert($ma_kh,$ho_ten,$mat_khau,$email,$hinh,$kich_hoat,$vai_tro){
    $sql="insert into khach_hang(ma_kh,ho_ten,mat_khau,email,hinh,kich_hoat,vai_tro) 
    values(?,?,?,?,?,?,?)";
    pdo_execute($sql,$ma_kh,$ho_ten,$mat_khau,$email,$hinh,$kich_hoat,$vai_tro);
   
   }
   
function khach_hang_update($ma_kh,$mat_khau,$ho_ten,$kich_hoat,$hinh,$email,$vai_tro){
    $sql= "update khach_hang set mat_khau=?,ho_ten=?,kich_hoat=?,hinh=?,email=?,vai_tro=? where ma_kh=?";
    pdo_execute($sql,$mat_khau,$ho_ten,$kich_hoat,$hinh,$email,$vai_tro,$ma_kh);
}
function khach_hang_update_home($ma_kh,$mat_khau,$ho_ten,$hinh,$email){
    $sql= "update khach_hang set mat_khau=?,ho_ten=?,hinh=?,email=? where ma_kh=?";
    pdo_execute($sql,$mat_khau,$ho_ten,$hinh,$email,$ma_kh);
}


function khach_hang_delete($ma_kh){
    $sql= "delete from khach_hang where ma_kh=?";
    if(is_array($ma_kh)){
        foreach ($ma_kh as $ma){
            pdo_execute($sql,$ma);
        }
    }
    else{
        pdo_execute($sql,$ma_kh);
    }
}
function khach_hang_selectall(){
    $sql="select * from khach_hang";
    return pdo_query($sql);
}
function khach_hang_select_by_id($ma_kh){
$sql = "select * from khach_hang where ma_kh=?";
return pdo_query_one($sql,$ma_kh);

}
// function khach_hang_exist($ma_kh){
//     $sql= "select count(*) from khach_hang where ma_kh=?";
//     return pdo_query_value($sql, $ma_kh)>0;

// }
function khach_hang_select_by_role($vai_tro){
    $sql="select * from khach_hang where vai_tro=?";
    return pdo_query($sql,$vai_tro);

}
function insert_kh($ma_kh,$ho_ten,$mat_khau,$email,$hinh){
    $sql="insert into khach_hang(ma_kh,ho_ten,mat_khau,email,hinh) 
    values(?,?,?,?,?)";
    pdo_execute($sql,$ma_kh,$ho_ten,$mat_khau,$email,$hinh);
}
function check_user($ma_kh,$mat_khau){
    $sql = "select * from khach_hang where ma_kh=? and mat_khau=?";
return pdo_query_one($sql,$ma_kh,$mat_khau);
} 
function check_email($email){
    $sql = "select * from khach_hang where email=?";
return pdo_query_one($sql,$email);
} 

?>