<div>
    <h1>Thêm sản phẩm</h1>
    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Danh mục</label>
            <select class="form-control" name="id_cate" id="">
                <?php
                foreach ($listdm as $list) {
                    extract($list);
                    echo '<option value="' . $id_cate . '">' . $name_cate . '</option>';
                }
                ?>

            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" name="name_product">
        </div>
        <div class="mb-3">
            <label class="form-label">Gía sản phẩm</label>
            <input type="number" class="form-control" name="price_product">
        </div>
        <div class="mb-3">
            <label class="form-label">Ảnh sản phẩm</label>
            <input type="file" class="form-control" name="img_product">
        </div>
        <div class="mb-3">
            <label class="form-label">Mô tả sản phẩm</label>
            <textarea name="detail_product" class="form-control" id="" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" name="themmoi" value="Thêm mới">
        <input type="reset" class="btn btn-primary" value="Nhập lại">
        <a href="index.php?act=listsp"><input type="button" class="btn btn-info" value="Danh sách"></a>
        <?php
        if (isset($noti) && ($noti != "")) echo $noti;

        ?>
    </form>
</div>