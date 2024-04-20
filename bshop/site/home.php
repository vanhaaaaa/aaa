

        <div class="row mb ">
            <div class="boxtrai mr">
            <div class="row">
                    <div class="banner">
                        <img src="<?=$CONTENT_URL?>/anh/banner.jpg" alt="">
                    </div>
                </div>
     
                <div class="row">
                <?php
                foreach ($spnew as $sp){
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
            
                    <!-- <div class="boxsp mr">
                        <div class="row img"><img src="<?=$CONTENT_URL?>/anh/1.jpg" alt=""></div>
                        <p>$<span>10</span></p>
                        <a href="#">Áo thun </a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="10" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Áo thun">
                            <input type="hidden" name="gia" value="10">
                            <input type="hidden" name="hinh" value="1.jpg">
                        </form>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="<?=$CONTENT_URL?>/anh/2.jpg" alt=""></div>
                        <p>$<span>20</span></p>
                        <a href="#">quần thể thao </a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="10" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="quần thể thao">
                            <input type="hidden" name="gia" value="20">
                            <input type="hidden" name="hinh" value="2.jpg">
                        </form>
                    </div>
                    <div class="boxsp ">
                        <div class="row img"><img src="<?=$CONTENT_URL?>/anh/3.jpg" alt=""></div>
                        <p>$<span>30</span></p>
                        <a href="#">hudies</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="10" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="hudies">
                            <input type="hidden" name="gia" value="30">
                            <input type="hidden" name="hinh" value="3.jpg">
                        </form>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="<?=$CONTENT_URL?>/anh/4.jpg" alt=""></div>
                        <p>$<span>40</span></p>
                        <a href="#">Đồng hồ đen</a>
                        <input type="number" name="soluong" min="1" max="10" value="1">
                        <button>Đặt hàng</button>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="<?=$CONTENT_URL?>/anh/5.jpg" alt=""></div>
                        <p>$<span>50</span></p>
                        <a href="#">Nón</a>
                        <input type="number" name="soluong" min="1" max="10" value="1">
                        <button>Đặt hàng</button>
                    </div>
                    <div class="boxsp ">
                        <div class="row img"><img src="<?=$CONTENT_URL?>/anh/6.jpg" alt=""></div>
                        <p>$<span>60</span></p>
                        <a href="#">Vali</a>
                        <input type="number" name="soluong" min="1" max="10" value="1">
                        <button>Đặt hàng</button>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="<?=$CONTENT_URL?>/anh/7.jpg" alt=""></div>
                        <p>$<span>70</span></p>
                        <a href="#">Điện thoại</a>
                        <input type="number" name="soluong" min="1" max="10" value="1">
                        <button>Đặt hàng</button>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="<?=$CONTENT_URL?>/anh/8.jpg" alt=""></div>
                        <p>$<span>80</span></p>
                        <a href="#">Điện thoại cam</a>
                        <input type="number" name="soluong" min="1" max="10" value="1">
                        <button>Đặt hàng</button>
                    </div>
                    <div class="boxsp ">
                        <div class="row img"><img src="<?=$CONTENT_URL?>/anh/9.jpg" alt=""></div>
                        <p>$<span>90</span></p>
                        <a href="#">Đồng hồ tròn trắng</a>
                        <input type="number" name="soluong" min="1" max="10" value="1">
                        <button>Đặt hàng</button>
                    </div> -->
                </div>
            </div>
            <div class="boxphai">
           <?php include "boxright.php";?>
            </div>
        </div>
