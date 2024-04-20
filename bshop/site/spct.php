<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row">
            <div class="banner">
                <img src="<?= $CONTENT_URL ?>/anh/banner.jpg" alt="">
            </div>
        </div>
        <div class="row mb">
            <?php
            extract($load1sp);
            ?>
            <div class="boxtitle">
                <?= $ten_hh ?>
            </div>
            <div class="row boxcontent">
                <?php

                $hinhpatha = $hinhpath . $hinh;
                echo '<div class="row img"><img src="..' . $hinhpatha . '"  alt=""></div>';
                echo '<ul>
                <li><b style="font-size:14px">ma hang hoa: </b> ' . $ma_hh . '</li>
                <li><b style="font-size:14px">ten san pham: </b> ' . $ten_hh . '</li>
                <li><b style="font-size:14px">don gia: </b> ' . $don_gia . 'vd</li>
                <li><b style="font-size:14px">giam gia: </b> ' . $giam_gia . 'vnd</li>
            </ul>
            <p>mo ta san pham:</p>';
                echo $mo_ta;
                ?>


            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function() {


                $("#binhluan").load("site/binhluan/binhluanform.php", {
                    idpro: <?= $ma_hh ?>
                });
            });
        </script>
        <div class="row mb" id="binhluan">




        </div>

    <!-- <div class="row mb">
        <div class="boxtitle">
            san pham cung loai
        </div>
        <div class="row boxcontent"></div>
    </div> -->
</div>
<div class="boxphai">
    <?php include "boxright.php"; ?>
</div>
</div>