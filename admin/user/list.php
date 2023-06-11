<div class="list-category">
    <h2 class="fonttitle">Danh sách tài khoản</h2>
</div>
<table class="table">
    <thead>
        <tr>
            <th></th>
            <th scope="col">Mã tài khoản</th>
            <th scope="col">Tên tài khoản</th>
            <th scope="col">Mật khẩu</th>
            <th scope="col">Email</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Vai trò</th>
            <th scope="col">Chức năng</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($listuser as $list) {
            extract($list);
            $suatk = "index.php?act=suatk&id=$id_user";
            $xoatk = "index.php?act=xoatk&id=$id_user";


            echo '<tr>
                <td><input type="checkbox" name="" id=""></td>
                    <td>' . $id_user . '</td>
                    <td>' . $user_name . '</td>
                    <td>' . $pass . '</td>
                    <td>' . $email . '</td>
                    <td>' . $addres . '</td>
                    <td>' . $numberPhone . '</td>
                    <td>' . $role . '</td>
                    <td><a href="' . $suatk . '"><input type="button" value="Sửa"></a>|<a href="' . $xoatk . '"><input type="button" value="Xóa"></a></td>
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