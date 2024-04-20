
        <div class="row mb ">
            <div class="boxtrai mr">
           
            <div class="row mb">
           
                <div class="boxtitle">
                 cap nhap tai khoan
                </div>
                <div class="row boxcontent" style="text-align:center ;">
                <?php
        if (isset($_SESSION['ma_kh'])) {
            extract($_SESSION['ma_kh']);
            $hinhpatha=$hinhpath. $hinh;
        }
        ?>


                <form action="index.php?act=edit_tk" method="post" enctype="multipart/form-data">
                   
                <div class="col-md-6">
    <label  class="form-label">ma khach hang</label>
    <input type="text" class="form-control" name="ma_kh" value="<?=$ma_kh?>"><br><br>
  </div>
  <div class="col-md-6">
    <label  class="form-label">ho ten</label>
    <input type="text" class="form-control" name="ho_ten" value="<?=$ho_ten?>">
  </div><br>
  <div class="col-12">
    <label  class="form-label">mat khau</label>
    <input type="password" class="form-control" name="mat_khau" value="<?=$mat_khau?>"><br>
  </div><br>
  <div class="col-12">
    <label  class="form-label">email</label>
    <input type="email" class="form-control" name="email" value="<?=$email?>"><br>
  </div><br>
  <div class="col-md-6">
    <label  class="form-label">hinh</label>
    <input name="hinh" type="hiden" class="form-control" value="<?=$hinh?>"><br>
    <input name="up_hinh" type="file" class="form-control">
    
  </div><br>
  <div class="col-12">
  <input type="submit" name="capnhap">
                    <input type="reset" name="nhap lai">
   
  </div>
</form>
               
                   
</div>
                </div>
            </div>

            <div class="boxphai" style="margin-top:-320px;">
                <?php include "site/boxright.php";?>
            </div>
        </div>
