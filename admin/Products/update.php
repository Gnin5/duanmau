<?php

if (is_array($sp)) {
    extract($sp);
}
$imgpath = "../uploads/" . $img_product;
if (is_file($imgpath)) {
    $img_product = "<img src=" . $imgpath . " height='80'> ";
}

?>
<div>
    <h1>Cập nhật sản phẩm</h1>
    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <select class="form-control" name="id_cate" id="">
                <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listdm as $list) {
                    extract($list);
                    if ($iddm == $id) {
                        $s = "Selected";
                    } else {
                        $s = "";
                    };

                    echo '<option value="' . $id_cate . '" ' . $s . '>' . $name_cate . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" name="name_product" value="<?php if (isset($name_product) && ($name_product != "")) echo $name_product; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Gía sản phẩm</label>
            <input type="number" class="form-control" name="price_product" value="<?php if (isset($price_product) && ($price_product != "")) echo $price_product; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Ảnh sản phẩm</label>
            <input type="file" class="form-control" name="img_product" value="">
            <?php if (isset($img_product) && ($img_product != "")) echo $img_product; ?>
        </div>
        <div class="mb-3">
            <label class="form-label">Mô tả sản phẩm</label>
            <textarea name="detail_product" id="" cols="30" rows="10" value="<?php if (isset($detail_product) && ($detail_product != "")) echo $detail_product; ?>"></textarea>
        </div>
        <input type="hidden" name="id" value="<?php if (isset($id_product) && ($id_product != "")) echo $id_product; ?>">
        <input type="submit" class="btn btn-primary" name="capnhat" value="Cập nhật">
        <input type="reset" class="btn btn-primary" value="Nhập lại">
        <a href="index.php?act=listsp"><input type="button" class="btn btn-info" value="Danh sách"></a>
        <?php
        if (isset($noti) && ($noti != "")) echo $noti;

        ?>
    </form>
</div>