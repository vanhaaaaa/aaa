<div class="row mb " boxtitle>
    <div class="boxtitle" style="margin-top: 320px ;">TÀI KHOẢN</div>
    <div class="boxcontent formtaikhoan">

        <?php
        if (isset($_SESSION['ma_kh'])) {
            extract($_SESSION['ma_kh']);
            $hinhpatha=$hinhpath. $hinh;

        ?>
            <div class="row mb10">
                xin chao:  <?= $ma_kh ?><br>
                <?php echo '<img src="'.$hinhpatha.'"height="50px" width="50px" alt="">';?><br>
               
            </div>
            
                
                <li>
                    <a href="index.php?act=edit_tk">cap nhap tai khoan</a>
                </li>
                <?php if($vai_tro==1){?>
                <li>
                    <a href="admin/trang-chinh">dang nhap admin</a>
                </li>
                <?php } ?>
                <li>
                    <a href="index.php?act=thoat">dang xuat</a>
                </li>
            </div>

         
            </div>
        <?php } else { ?>
    
            
    <form action="index.php?act=dangnhap" method="post">
        <div class="row mb10">
            Tên đăng nhập<br>
            <input type="text" name="ma_kh">
        </div>
        <div class="row mb10">
            Mật khẩu<br>

            <input type="password" name="mat_khau">
        </div>
        <div class="row mb10">
            <input type="checkbox" name="ghinho"> Ghi nhớ tài khoản?
        </div>
        <div class="row mb10">
            <input type="submit" name="dangnhap" value="Đăng nhập">

        </div>

    </form>

<li>
    <a href="index.php?act=quenmk">Quên mật khẩu</a>
</li>
<li>
    <a href="index.php?act=dangky">Đăng ký thành viên</a>
</li>
</div>
</div>
<?php } ?><br>


<div class="row mb">
    <div class="boxtitle">danh MỤC</div>
    <div class="boxcontent2 menudoc">
        <ul>
            <?php
            foreach ($dmsp as $sp) {
                extract($sp);

                echo '<li>
                    <a href="index.php?act=sanpham&ma_loai=' . $ma_loai . '"">' . $ten_loai . '</a>
                </li>';
            }



            ?>
        </ul>
        

    </div>
    <div class="boxfooter searbox">
        <form action="#" method="post">
            <input type="text" name="" id="">
        </form>
    </div>
</div>

<div class="row">
    <div class="boxtitle">TOP 10 YÊU THÍCH</div>
    <div class="row boxcontent">
        <?php
        foreach ($spnew as $sp) {
            extract($sp);
            $hinhpatha = $hinhpath . $hinh;
            echo '<div class="row mb10 top10">
                    <a href="index.php?act=spct&ma_hh=' . $ma_hh . '">     <img src="' . $hinhpatha . '" alt=""></a>
                    <a href="index.php?act=spct&ma_hh=' . $ma_hh . '">' . $ten_hh . '</a>
                </div>';
        }



        ?>
      
    </div>
</div>