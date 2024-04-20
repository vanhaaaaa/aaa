
        <div class="row mb ">
            <div class="boxtrai mr">
           
            <div class="row mb">
           
                <div class="boxtitle">
                  quen mat khau
                </div>
                <div class="row boxcontent" style="text-align:center ;">
                <form action="index.php?act=quenmk" method="post" enctype="multipart/form-data">
                   
                 
                    
                  
                      <input type="email" name="email"placeholder=" email:"><br><br>
               
                    <input type="submit" value="gui" name="guiemail">
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
