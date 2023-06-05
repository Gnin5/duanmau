<?php
session_start();
include "model/pdo.php";
include "model/category.php";
include "model/product.php";
include "model/user.php";
include "view/header.php";
include "global.php";


$spnew = loadlist_sp_home();
$dmlist = loadlist_dm();

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'trangchu':
            include "view/trangchu.php";
            break;
        case 'shop':
            include "view/home.php";
            break;
        case 'abu':
            include "view/aboutUs.php";
            break;
        case 'detail':
            include "view/detail.php";
            break;
        case 'blog':
            include "view/blog.php";
            break;
        case 'login':
            if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                $nameuser = $_POST['name_user'];
                $pass = $_POST['pass_user'];
                $checkuser = check_user($nameuser, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header('location: index.php');
                } else {
                    $noti = "Đăng nhập thất bại, vui lòng kiểm tra lại !";
                }
            }
            include "view/login.php";
            break;
        case 'signUp':
            if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                $nameuser = $_POST['name_user'];
                $pass = $_POST['pass_user'];
                $email = $_POST['email_user'];
                $addres = $_POST['addres'];
                $numberPhone = $_POST['phone_number'];
                add_user($nameuser, $pass, $email, $addres, $numberPhone);
                $noti = "Đăng kí thành công, bạn có thể đăng nhập !";
            }
            include "view/signUp.php";
            break;
    }
} else {
    include "view/trangchu.php";
}

include "view/footer.php";
