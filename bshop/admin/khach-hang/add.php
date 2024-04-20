<h1>them moi user</h1>
<?php

?>
<form class="row g-3" action="index.php?btn_insert" method="post" enctype="multipart/form-data">
  <div class="col-md-6">
    <label class="form-label">ma khach hang</label>
    <input type="text" class="form-control" name="ma_kh">
  </div>
  <div class="col-md-6">
    <label class="form-label">ho ten</label>
    <input type="text" class="form-control" name="ho_ten">
  </div>
  <div class="col-12">
    <label class="form-label">mat khau</label>
    <input type="password" class="form-control" name="mat_khau">
  </div>
  <div class="col-12">
    <label class="form-label">email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="col-md-6">
    <label class="form-label">hinh</label>
    <input name="hinh" type="file" class="form-control  ">
  </div>
  <div class="col-md-6">
    <label class="form-label">kich hoat</label>
  
    <select id="inputCity" class="form-select" name="kich_hoat">
      <option  value="0" selected>chua kich hoat</option>
      <option value="1" selected>kich hoat</option>
    </select>
  </div>

  <div class="col-md-4">
    <label for="inputState" class="form-label">vai tro</label>
    <select id="inputState" class="form-select" name="vai_tro">
      <option value="0" selected>nhan vien</option>
      <option  value="1" selected>khach hang</option>
    </select>
  </div>

  <div class="col-12">
    <input type="submit" value="them moi" >
    <button type="reset" class="btn btn-primary">nhap lai</button>
    <a href="index.php?btn_list">danh sach</a>
  </div>
</form>