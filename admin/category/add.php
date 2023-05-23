<div>
    <form action="index.php?act=adddm" method="post">
        <div class="mb-3">
            <label class="form-label">Mã Loại</label>
            <input type="text" class="form-control" name="id_cate" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">tên loại</label>
            <input type="text" class="form-control" name="name">
        </div>
        <input type="submit" class="btn btn-primary" name="themmoi" value="Thêm mới">
        <input type="reset" class="btn btn-primary" value="Nhập lại">
        <a href="index.php?act=listdm"><input type="button" class="btn btn-info" value="Danh sách"></a>
        <?php
        if (isset($noti) && ($noti != "")) echo $noti;

        ?>
    </form>
</div>