<div class="row frmtitle">
    <H1>DANH SÁCH hang hoa</H1>
</div>
<div class="row frmcontent">
  <div class="row mb10 frmdsloai">
    <form action="index.php?btn_listsp" method="post">
    <div class="timkiem" style="width:300px;display:flex;float:right">
      <input type="text"  name="kyw" style="margin: 0px 5px">
 
      <select name="iddm" id="">
        <option value="0">tat ca</option>
        <?php
                     foreach($loai_hang as $item){
                        extract($item);
                        echo '<option value="'.$ma_loai.'">'.$ten_loai.'</option>';}
                        ?>
                        </select>
      </select>
       <input style="margin: 0px 5px" type="submit" name="listok" value="tim kiem">
    </form>
    </div>
    <div class="row frmcontent">
      <div class="row mb10 frmdsloai">
        <table>
          <thead>
            <tr>
              <th></th>

              <th>MÃ HH</th>
              <th>ten san pham</th>
              <th>don gia</th>
              <th>so luot xem</th>
              <th>hinh</th>
              <th><img src="" height="40px" alt=""></th>
            </tr>
            </thead>
            <tbody>
          <?php
          foreach ($iteam as $item) {
            extract($item);
            $hinhpatha=$hinhpath. $hinh;
            echo '<th><input type="checkbox"></th>


<td>'. $ma_hh .'</td>
<td>'. $ten_hh .'</td>
<td>'. $don_gia .'</td>
<td>'. $so_luot_xem .'</td>
<td> <img src="'.$hinhpatha.'" height="80px" alt=""> </td>




<td>
  <a href="index.php?btn_edit&ma_hh='. $ma_hh .'">sua</a>
  <a href="index.php?btn_delete&ma_hh='. $ma_hh .'">xoa</a>

</td>';
          ?>
            
            </tbody>
          <?php } ?>
        </table>
      </div>
    </div>
    <div class="col-12">
      <button>chon tat ca</button>
      <button>bo chon tat ca</button>
      <button>xoa cac muc da chon</button>
      <button><a href="index.php">them moi</a></button>
    </div>
  </div>

</div>

