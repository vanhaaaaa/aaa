

<h1>cap nhap user</h1>
<?php

?>
<form  class="row g-3" action="index.php" method="post" enctype="multipart/form-data">
  <div class="col-md-6">
    <label  class="form-label">ma khach hang</label>
    <input type="text" class="form-control" name="ma_kh" value="<?=$ma_kh?>">
  </div>
  <div class="col-md-6">
    <label  class="form-label">ho ten</label>
    <input type="text" class="form-control" name="ho_ten" value="<?=$ho_ten?>">
  </div>
  <div class="col-12">
    <label  class="form-label">mat khau</label>
    <input type="password" class="form-control" name="mat_khau" value="<?=$mat_khau?>">
  </div>
  <div class="col-12">
    <label  class="form-label">email</label>
    <input type="email" class="form-control" name="email" value="<?=$email?>">
  </div>
  <div class="col-md-6">
    <label  class="form-label">hinh</label>
    <input name="hinh" type="hiden" class="form-control" value="<?=$hinh?>">
    <input name="up_hinh" type="file" class="form-control">
    
  </div>
  <div class="col-md-6">
    <label class="form-label">kich hoat</label>
    
    <select id="inputCity" class="form-select" name="kich_hoat">
    <option  value="0" selected>chua kich hoat</option>
      <option  value="1" selected>kich hoat</option>
      <!-- <label ><input <?=!$kich_hoat?'checked':'chua kich hoat'?> type="radio" name="" id=""></label>
      <label ><input <?=$kich_hoat?'checked':' kich hoat'?> type="radio" name="" id=""></label> -->
    </select>
  </div>

  <div class="col-md-4">
    <label for="inputState" class="form-label" >vai tro</label>
    <select id="inputState" class="form-select"name="vai_tro">
      <option  value="<?=$vai_tro?>" selected>khach hang</option>
      <option   value="<?=!$vai_tro?>" selected>nhan vien</option>
    </select>
  </div>

  <div class="col-12">
    <button name="btn_update" class="btn btn-primary">cap nhap</button>
    <button type="reset" class="btn btn-primary">nhap lai</button>
    <a href="index.php?btn_list">danh sach</a>
  </div>
</form>