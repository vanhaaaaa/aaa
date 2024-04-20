

<div class="row frmtitle">
    <H1>DANH SÁCH binh luan</H1>
</div>
<div class="row frmcontent">

    <div class="row mb10 frmdsloai">
    <table>
        <thead>
            <tr>
                <th>ma binh luan</th>
                <th>noi dung</th>
                <th>ma hang hoa</th>
                <th>nguoi binh luan</th>
                <th>ngay binh luan</th>
  
                <th></th>
            </tr>
            </thead>
            <tbody>
                <?php
                
                     foreach( $sql as $loai){
                        extract($loai);
                        ?>

            
                <td><?=$ma_bl?></td>
                <td><?=$noi_dung?></td>
                <td><?=$ten_hh?></td>
                <td><?=$ho_ten?></td>
                <td><?=$ngay_bl?></td>
            
                <td>

<a href="index.php?btn_delete&ma_bl=<?=$ma_bl?>">xoa</a>

                </td>

            </tbody>
          <?php }?>
           </table>
    </div>
    
</div>