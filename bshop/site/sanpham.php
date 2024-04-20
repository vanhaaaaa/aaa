
        <div class="row mb ">
            <div class="boxtrai mr">
            <div class="row">
                    <div class="banner">
                        <img src="<?=$CONTENT_URL?>/anh/banner.jpg" alt="">
                    </div>
                </div>
            <div class="row mb">
            
                <div class="boxtitle">
                   
                </div>
                <div class="row boxcontent">
                <?php
                foreach ($dssp as $sp){
                    extract($sp);
                    $hinhpatha=$hinhpath. $hinh;
                    echo '<div class="boxsp mr">
                    <a href="index.php?act=spct&ma_hh='. $ma_hh .'">   <div class="row img"><img src="..'.$hinhpatha.'" alt=""></div></a>
                    <p>$<span>'.$don_gia.'</span></p>
                    <a href="index.php?act=spct&ma_hh='. $ma_hh .'">'.$ten_hh.'</a>
                    <input type="number" name="soluong" min="1" max="10" value="1">
                    <button>Đặt hàng</button>
                </div>';
                }



                ?>


                </div>
            </div>
            
            
            </div>
            <div class="boxphai">
                <?php include "boxright.php";?>
            </div>
        </div>
