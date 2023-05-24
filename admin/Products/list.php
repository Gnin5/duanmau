<div class="list-category">
    <h2 class="fonttitle">Danh sách sản phẩm</h2>
</div>
<form action="index.php?act=listsp" method="post">
    <input type="text" name="key">
    <select class="form-control" name="id_cate" id="">
        <option value="0" selected>Tất cả</option>
        <?php
        foreach ($listdm as $list) {
            extract($list);
            echo '<option value="' . $id_cate . '">' . $name_cate . '</option>';
        }
        ?>
    </select>
    <input type="submit" name="listOk" id="" value="Go">
</form>
<table class="table">
    <thead>
        <tr>
            <th></th>
            <th scope="col">Mã sản phẩm</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Hình sản phẩm</th>
            <th scope="col">Gía sản phẩm</th>
            <th scope="col">Lượt xem</th>
            <th scope="col">Chức năng</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($listsp as $list) {
            extract($list);
            $suasp = "index.php?act=suasp&id=$id_product";
            $xoasp = "index.php?act=xoasp&id=$id_product";
            $imgpath = "../uploads/" . $img_product;
            if (is_file($imgpath)) {
                $img_product = "<img src=" . $imgpath . " height='80'> ";
            }

            echo '<tr>
                <td><input type="checkbox" name="" id=""></td>
                    <td>' . $id_product . '</td>
                    <td>' . $name_product . '</td>
                    <td>' . $img_product . '</td>
                    <td>' . $price_product . '</td>
                    <td>' . $view_product . '</td>
                    <td><a href="' . $suasp . '"><input type="button" value="Sửa"></a>|<a href="' . $xoasp . '"><input type="button" value="Xóa"></a></td>
                </tr>';
        }
        ?>

    </tbody>
</table>
<div class="">
    <input type="button" value="Chọn tất cả">
    <input type="button" value="Bỏ chọn tất cả">
    <input type="button" value="Xóa các mục đã chọn">
    <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
</div>