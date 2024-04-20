

<div class="row frmtitle">
    <H1>DANH SÁCH USER</H1>
</div>
<div class="row frmcontent "style="margin-left:10px ;">

    <div class="row mb10 frmdsloai ">
    <table>
        <thead>
            <tr>
                <th></th>
                <th>MÃ KH</th>
                <th>HO va ten</th>
                <th>email</th>
                <th>hinh anh</th>
                <th>vai tro</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                <?php
                     foreach($iteam as $item){
                        extract($item);
                        $hinhpatha=$hinhpath. $hinh;
                        echo '
                        <td><input type="checkbox"></td>
                        <td>'.$ma_kh.'</td>
                        <td>'.$ho_ten.'</td>
                        <td>'.$email.'</td>
                        <td><img src="'.$hinhpatha.'" height="80px" alt=""></td>
                        <td>'.$vai_tro.'</td>
        
                        
                        
                        
                        <td>
        <a href="index.php?btn_edit&ma_kh='.$ma_kh.'">sua</a>
        <a href="index.php?btn_delete&ma_kh='.$ma_kh.'">xoa</a>
        
                        </td>';
                     
                        ?>
            
            </tbody>
          <?php } ?>
           </table>
    </div>
    <div class="col-12">
    <button>chon tat ca</button>
    <button>bo chon tat ca</button>
    <button>xoa cac muc da chon</button>
        <button><a href="index.php">them moi</a></button>
    </div>
</div>