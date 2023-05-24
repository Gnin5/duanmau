<?php
include "../model/pdo.php";
include "../model/category.php";
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
            $sql = "SELECT * FROM category ORDER BY name_cate";
            $listdm = pdo_query($sql);
            include "category/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sql = "DELETE FROM category WHERE id_cate=" . $_GET['id'];
                pdo_execute($sql);
            }
            $sql = "SELECT * FROM category ORDER BY name_cate";
            $listdm = pdo_query($sql);
            include "category/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sql = "SELECT * FROM category WHERE id_cate=" . $_GET['id'];
                $dm = pdo_query_one($sql);
            }

            include "category/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['name'];
                $id = $_POST['id'];
                $sql = "UPDATE category SET name_cate='" . $tenloai . "' WHERE id_cate=" . $id;
                pdo_execute($sql);
                $noti = "Cập nhật mục thành công";
            }
            $sql = "SELECT * FROM category ORDER BY name_cate";
            $listdm = pdo_query($sql);
            include "category/list.php";
            break;

        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
