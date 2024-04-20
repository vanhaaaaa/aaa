

<h1>cap nhap hang hoa</h1>
<?php

?>
<form  class="row g-3" action="index.php" method="post" enctype="multipart/form-data">
  <div class="col-md-6">
    <label  class="form-label">ma hang hoa</label>
    <input type="text" class="form-control" name="ma_hh" value="<?=$ma_hh?>" readonly>
  </div>
  <div class="col-md-6">
    <label  class="form-label">ten san pham</label>
    <input type="text" class="form-control" name="ten_hh" value="<?=$ten_hh?>">
  </div>
  <div class="col-md-6">
    <label  class="form-label">don gia</label>
    <input type="text" class="form-control" name="don_gia" value="<?=$don_gia?>">
  </div>
  <div class="col-md-6">
    <label  class="form-label">giam gia</label>
    <input type="text" class="form-control" name="giam_gia" value="<?=$giam_gia?>">
  </div>
  <div class="col-md-6">
    <label  class="form-label">hinh</label>
    <input name="hinh" type="hiden" class="form-control" value="<?=$hinh?>">
    <input name="up_hinh" type="file" class="form-control">
    
  </div>
  <div class="col-md-6">
    <label  class="form-label">ngay nhap</label>
    <input name="ngay_nhap" type="text" class="form-control" value="<?=$ngay_nhap?>">

    
  </div>
  <div class="col-md-6">
    <label  class="form-label">mo ta</label>
    <input name="mo_ta" type="text" class="form-control" value="<?=$mo_ta?>">

    
  </div>
  <div class="col-md-6">
    <label  class="form-label">dac biet</label>
    <input name="dac_biet" type="text" class="form-control" value="<?=$dac_biet?>">

    
  </div>

  <div class="col-md-4">
    <label  class="form-label">so luot xem</label>
    <input name="so_luot_xem" type="text" class="form-control" value="<?=$so_luot_xem?>">

    
  </div>
  <div class="col-md-4">
    <label  class="form-label">ma loai</label>
    <select name="idcata" class="col-md-4">
  <?php
  
                     foreach($loai_hang as $item){
                        extract($item);
                        if ($ma_loai==$idcata) $s="selected"; else $s="";
                   
                        echo '<option value="'.$ma_loai .'"'.$s.'>'.$ten_loai.'</option>';}
                        ?>
                        </select>
  </div>  


 

  <div class="col-12">
    <button name="btn_update" class="btn btn-primary">cap nhap</button>
    <button type="reset" class="btn btn-primary">nhap lai</button>
    <a href="index.php?btn_list">danh sach</a>
  </div>
</form>