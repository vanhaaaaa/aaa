
        <div class="row mb ">
            <div class="boxtrai mr">
           
            <div class="row mb">
           
                <div class="boxtitle">
                  dang ky thanh vien
                </div>
                <div class="row boxcontent" style="text-align:center ;">
                <form action="index.php?act=dangky" method="post" enctype="multipart/form-data">
                   
                 <input type="text" name="ma_kh"placeholder=" ten dang nhap:"><br><br>
                    
                  <input type="password" name="password"placeholder=" password:"><br><br>
                  <input type="text" name="ho_ten"placeholder=" ho va ten:"><br><br>
                      <input type="email" name="email"placeholder=" email:"><br><br>
                      <input name="hinh" type="file"><br><br>
                    <input type="submit" name="dangky">
                    <input type="reset" name="nhap lai">

                </form>
                    <?php
                    if (isset($e)&&($e!="")) {
                        echo $e;
                    }
                    ?>
</div>
                </div>
            </div>

            <div class="boxphai" style="margin-top:-320px;">
                <?php include "site/boxright.php";?>
            </div>
        </div>
