<div class="list-category">
    <h2 class="fonttitle">Danh sách loại hàng</h2>
</div>
<table class="table">
    <thead>
        <tr>
            <th></th>
            <th scope="col">Mã Loại</th>
            <th scope="col">Tên Loại</th>
            <th scope="col">Chức năng</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($listdm as $list) {
            extract($list);
            $suadm = "index.php?act=suadm&id=$id_cate";
            $xoadm = "index.php?act=xoadm&id=$id_cate";


            echo '<tr>
                <td><input type="checkbox" name="" id=""></td>
                    <td>' . $id_cate . '</td>
                    <td>' . $name_cate . '</td>
                    <td><a href="' . $suadm . '"><input type="button" value="Sửa"></a>|<a href="' . $xoadm . '"><input type="button" value="Xóa"></a></td>
                </tr>';
        }
        ?>

    </tbody>
</table>
<div class="">
    <input type="button" value="Chọn tất cả">
    <input type="button" value="Bỏ chọn tất cả">
    <input type="button" value="Xóa các mục đã chọn">
    <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
</div>