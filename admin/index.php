<?php
include "../model/pdo.php";
include "../model/category.php";
include "../model/product.php";
include "../model/user.php";
include "header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            // kiểm tra người dùng có bấm nút add không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['name'];
                add_dm($tenloai);
                $noti = "Thêm danh mục thành công";
            }
            include "category/add.php";
            break;
        case 'listdm':
            $listdm = loadlist_dm();
            include "category/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_dm($_GET['id']);
            }
            $sql = "SELECT * FROM category ORDER BY name_cate";
            $listdm = loadlist_dm();
            include "category/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                $dm = edit_dm($_GET['id']);
            }

            include "category/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['name'];
                $id = $_POST['id'];
                update_dm($id, $tenloai);
                $noti = "Cập nhật mục thành công";
            }
            $sql = "SELECT * FROM category ORDER BY name_cate";
            $listdm = loadlist_dm();
            include "category/list.php";
            break;
            //end category
        case 'addsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['id_cate'];
                $tensp = $_POST['name_product'];
                $giasp = $_POST['price_product'];
                $detailsp = $_POST['detail_product'];
                $filename = $_FILES['img_product']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["img_product"]["name"]);
                if (move_uploaded_file($_FILES["img_product"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["img_product"]["name"])) . " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                add_sp($tensp, $giasp, $filename, $detailsp, $iddm);
                $noti = "Thêm sản phẩm thành công";
            }
            $listdm = loadlist_dm();
            include "Products/add.php";
            break;
        case 'listsp':
            if (isset($_POST['listOk']) && ($_POST['listOk'])) {
                $key = $_POST['key'];
                $iddm = $_POST['id_cate'];
            } else {
                $key = '';
                $iddm = 0;
            }
            $listdm = loadlist_dm();
            $listsp = loadlist_sp($key, $iddm);
            include "Products/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sp($_GET['id']);
            }
            $sql = "SELECT * FROM product ORDER BY name_product";
            $listsp = loadlist_sp("", 0);
            include "Products/list.php";
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                $sp = edit_sp($_GET['id']);
            }
            $listdm = loadlist_dm();
            include "Products/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['id_cate'];
                $tensp = $_POST['name_product'];
                $giasp = $_POST['price_product'];
                $detailsp = $_POST['detail_product'];
                $filename = $_FILES['img_product']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["img_product"]["name"]);
                if (move_uploaded_file($_FILES["img_product"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["img_product"]["name"])) . " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                update_sp($id, $iddm, $tensp, $giasp, $detailsp, $filename);
                $noti = "Cập nhật sản phẩm thành công";
            }
            $sql = "SELECT * FROM product ORDER BY name_product";
            $listdm = loadlist_dm();
            $listsp = loadlist_sp("", 0);
            include "Products/list.php";
            break;
        case 'dskh':
            $listuser = load_user();
            include "user/list.php";
            break;
        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_tk($_GET['id']);
            }
            $sql = "SELECT * FROM user ORDER BY id_user";
            $listuser = load_user();
            include "user/list.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
