<h1>them moi hang hoa</h1>

<form  class="row g-3" action="index.php?btn_insert" method="post" enctype="multipart/form-data">
  <div class="col-md-4">
    <label  class="form-label">ma hang hoa</label>
    <input type="text" class="form-control" name="ma_hh" value="tu dong tang" readonly>
  </div>
  <div class="col-md-4">
    <label  class="form-label">ten hang hoa</label>
    <input type="text" class="form-control" name="ten_hh">
  </div>
  <div class="col-md-4">
    <label  class="form-label">don gia</label>
    <input type="text" class="form-control" name="don_gia">
  </div>
  <div class="col-md-4">
    <label  class="form-label">giam gia</label>
    <input type="text" class="form-control" name="giam_gia">
  </div>
  <div class="col-md-4">
    <label  class="form-label">hinh anh</label>
    <input type="file" class="form-control" name="hinh">
  </div>

  <div class="col-md-4">
    <label  class="form-label">ngay nhap</label>
    <input type="text" class="form-control" name="ngay_nhap">
  </div>
  <div class="col-md-4">
    <label  class="form-label">mo ta</label>
    <input type="text" class="form-control" name="mo_ta">
  </div>
  <div class="col-md-4">
    <label  class="form-label">dac biet</label>
    <input type="text" class="form-control" name="dac_biet">
  </div>
  <div class="col-md-4">
    <label  class="form-label">so luot xem</label>
    <input type="text" class="form-control" name="so_luot_xem">
  </div>

  <div class="col-md-4">
    <label  class="form-label">ma loai</label>
    <select name="idcata" class="col-md-4">
  <?php
                     foreach($loai_hang as $item){
                        extract($item);
                        echo '<option value="'.$ma_loai.'">'.$ten_loai.'</option>';}
                        ?>
                        </select>
  </div>   



  <div class="col-12">
    <input type="submit" name="themmoi"  class="btn btn-primary"></button>
    <input type="reset" class="btn btn-primary"></button>
    <a href="index.php?btn_list"><input type="button" value="danh sach"></a>
  </div>
</form>