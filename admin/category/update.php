<?php

if (is_array($dm)) {
    extract($dm);
}

?>
<div>
    <h1>Cập nhật loại hàng</h1>
    <form action="index.php?act=updatedm" method="post">
        <div class="mb-3">
            <label class="form-label">Mã Loại</label>
            <input type="text" class="form-control" name="id_cate" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">tên loại</label>
            <input type="text" class="form-control" name="name" value="<?php if (isset($name_cate) && ($name_cate != "")) echo $name_cate; ?>">
        </div>
        <input type="hidden" name="id" value="<?php if (isset($id_cate) && ($id_cate != "")) echo $id_cate; ?>">
        <input type="submit" class="btn btn-primary" name="capnhat" value="Cập nhật">
        <input type="reset" class="btn btn-primary" value="Nhập lại">
        <a href="index.php?act=listdm"><input type="button" class="btn btn-info" value="Danh sách"></a>
        <?php
        if (isset($noti) && ($noti != "")) echo $noti;

        ?>
    </form>
</div>