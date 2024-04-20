<h1>cap nhap loai hang</h1>
<?php

?>

<form action="index.php?btn_update" method="post">
        <div class="row mb10">
          ma loai: <br> <input type="text"name="ma_loai" value="<?=$ma_loai?>"/>
        </div>
        <div class="row mb10">
          ten loai: <br> <input type="text" name="ten_loai" value="<?=$ten_loai?>" />
        </div>
        <div class="row mb20">
          <button name="btn_update"> cap nhap</button>
          <!-- <input type="submit" value="cap nhap" /> -->
          <input type="reset" value="nhap lai" />
        
        </div>
        </form>