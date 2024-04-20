<?php
require_once 'pdo.php';



function binh_luan_insert($noi_dung,$ma_hh,$ma_kh,$ngay_bl){
    $sql="insert into binh_luan(noi_dung,ma_hh,ma_kh,ngay_bl) 
                        values(?,?,?,?)";
    pdo_execute($sql,$noi_dung,$ma_hh,$ma_kh,$ngay_bl);
   
   }

   function bl_selectall(){
    $sql="select * from binh_luan";
     return pdo_query($sql);
   
   }

   function binh_luan_selectall($ma_hh){
    $sql="select * from binh_luan where ma_hh=? order by ma_bl desc";
     return pdo_query($sql,$ma_hh);
   
   }
   function binh_luan_delete($ma_bl){
    $sql="delete from binh_luan where ma_bl=?";
    pdo_execute($sql,$ma_bl);
   
   }
//    $sql = "SELECT id, firstname, lastname FROM MyGuests";
//    $result = $conn->query($sql);

   function binh_luana_all(){
   $sql ="  SELECT binh_luan.ma_bl,binh_luan.noi_dung, hang_hoa.ten_hh,khach_hang.ho_ten,binh_luan.ngay_bl
FROM ((binh_luan
INNER JOIN khach_hang ON binh_luan.ma_kh =khach_hang.ma_kh)
INNER JOIN hang_hoa ON binh_luan.ma_hh = hang_hoa.ma_hh)";
    return pdo_query($sql);
}
?>