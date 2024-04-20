

<div class="row frmtitle">
    <H1>DANH SÁCH LOẠI HÀNG</H1>
</div>
<div class="row frmcontent">

    <div class="row mb10 frmdsloai">
    <table>
        <thead>
            <tr>
                <th></th>
                <th>MÃ LOẠI</th>
                <th>TÊN LOẠI</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                <?php
                     foreach( $iteam as $loai){
                        extract($loai);
                        ?>
            <th><input type="checkbox"></th>
            
                <td><?=$ma_loai?></td>
                <td><?=$ten_loai?></td>
                <td>
<a href="index.php?btn_edit&ma_loai=<?=$ma_loai?>">sua</a>
<a href="index.php?btn_delete&ma_loai=<?=$ma_loai?>">xoa</a>

                </td>

            </tbody>
          <?php }?>
           </table>
    </div>
    <div class="col-12">
        <input type="button" value="Chọn tất cả">
        <input type="button" value="Bỏ chọn tất cả">
        <input type="button" value="Xóa các mục đã chọn">
        <button><a href="index.php">them moi</a></button>
    </div>
</div>