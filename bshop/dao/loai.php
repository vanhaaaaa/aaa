<?php

function loai_selectall(){
 $sql="select * from loai";
  return pdo_query($sql);

}
function loai_insert($ten_loai){
    $sql="insert into loai(ten_loai) values(?)";
    pdo_execute($sql,$ten_loai);
   
   }
   function loai_delete($ma_loai){
    $sql="delete from loai where ma_loai=?";
    pdo_execute($sql,$ma_loai);
   
   }
// lay thong tin
function loai_getinfo($ma_loai){
    $sql="select * from loai where ma_loai=?";
    return pdo_query_one($sql,$ma_loai);
}

// function
function loai_update($ma_loai,$ten_loai){
    $sql="update loai set ten_loai=? where ma_loai=?";
    pdo_execute($sql,$ten_loai,$ma_loai);
}

?>  