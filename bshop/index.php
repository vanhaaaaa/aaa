<?php
session_start();
require "./global.php";
include "./dao/hang-hoa.php";
include "./site/header.php";
include "./dao/khach-hang.php";
include "./dao/loai.php";
$spnew = hang_hoa_selectall();
$dmsp = loai_selectall();
$dstop10 = hang_hoa_top10_selectall();
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_GET['ma_loai']) && $_GET['ma_loai'] > 0) {
                $ma_hh = $_GET['ma_loai'];
                $dssp = hang_hoa1_selectall("", $ma_hh);
                include "./site/sanpham.php";
            } else {
                include "./site/home.php";
            }


            break;
        case 'spct':
            if (isset($_GET['ma_hh']) && $_GET['ma_hh'] > 0) {
                $ma_hh = $_GET['ma_hh'];
                $load1sp = hang_hoa_select_by_id($ma_hh);
                include "./site/spct.php";
            } else {
                include "./site/home.php";
            }


            break;

        case 'lienhe':
            include "./site/lienhe.php";
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && $_POST['dangky']) {
                $ma_kh = $_POST['ma_kh'];
                $ho_ten = $_POST['ho_ten'];
                $mat_khau = $_POST['password'];
                $email = $_POST['email'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }


                insert_kh($ma_kh, $ho_ten, $mat_khau, $email, $hinh);
                $e = "ban da dang ky thanh cong!";
            }
            include "./site/taikhoan/dangky.php";

            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && $_POST['dangnhap']) {
                $ma_kh = $_POST['ma_kh'];

                $mat_khau = $_POST['mat_khau'];

                $checkuser = check_user($ma_kh, $mat_khau);
                if (is_array($checkuser)) {
                    $_SESSION['ma_kh'] = $checkuser;
                    $e = "ban da dang nhap thanh cong!";
                    header('location:index.php');
                }

                $e = "tai khoan khong ton tai!";
            }
            include "./site/home.php";

            break;
        case 'edit_tk':
            if (isset($_POST['capnhap']) && $_POST['capnhap']) {
                $ma_kh = $_POST['ma_kh'];
                $mat_khau = $_POST['mat_khau'];
                $ho_ten = $_POST['ho_ten'];

                $hinh = $_FILES['up_hinh']['name'];
                $email = $_POST['email'];



                khach_hang_update_home($ma_kh, $mat_khau, $ho_ten, $hinh, $email);
                $_SESSION['ma_kh'] = check_user($ma_kh, $mat_khau);
                header('location:index.php?act=edit_tk');
              
            }

            include "./site/taikhoan/edittk.php";
            

            break;
            case 'quenmk':
                if (isset($_POST['guiemail']) && $_POST['guiemail']) {

                    $email = $_POST['email'];
                  $checkemail=  check_email($email);
                    if (is_array( $checkemail)) {
                       $e="mat khau ua ban la: ".$checkemail['mat_khau'];
                    }else{
                        $e="email nay khong ton tai";
                    }
    
    

                  
                }
    
                include "./site/taikhoan/quenmk.php";
            case 'thoat':
                session_unset();
                header('location:index.php');
                break;

        case 'hoidap':
            include "./site/hoidap.php";
            break;
            case 'gopy':
                include "./site/gopy.php";
                break;
            case 'gioithieu':
                include "./site/gioithieu.php";
                break;

        default:
            include "./site/home.php";
            break;
    }
} else {
    include "./site/home.php";
}

include "./site/footer.php";
