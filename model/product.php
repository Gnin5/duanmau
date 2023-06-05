<?php
function add_sp($tensp, $giasp, $filename, $detailsp, $iddm)
{
    $sql = "INSERT INTO products (name_product,price_product,img_product,detail_product,id_cate	) VALUES ('$tensp','$giasp', '$filename', '$detailsp', '$iddm')";
    pdo_execute($sql);
}

function delete_sp($id)
{
    $sql = "DELETE FROM products WHERE id_product=" . $id;
    pdo_execute($sql);
}

function loadlist_sp_home()
{
    $sql = "SELECT * FROM products WHERE 1 ORDER BY id_product DESC LIMIT 0,3";
    $listsp = pdo_query($sql);
    return $listsp;
}

function loadlist_sp($key, $iddm)
{
    $sql = "SELECT * FROM products WHERE 1";
    if ($key != "") {
        $sql .= " AND name_product LIKE ' % " . $key . " % '";
    }
    if ($iddm > 0) {
        $sql .= " AND id_product = '" . $iddm . "'";
    }
    $sql .= " ORDER BY name_product";
    $listsp = pdo_query($sql);
    return $listsp;
}
function edit_sp($id)
{
    $sql = "SELECT * FROM products WHERE id_product=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_sp($id, $iddm, $tensp, $giasp, $detailsp, $filename)
{
    if ($filename != "") {
        $sql = "UPDATE products SET id_cate='" . $iddm . "', name_product='" . $tensp . "',price_product='" . $giasp . "',detail_product='" . $detailsp . "',img_product='" . $filename . "'  WHERE id_product=" . $id;
    } else {
        $sql = "UPDATE products SET id_cate='" . $iddm . "', name_product='" . $tensp . "',price_product='" . $giasp . "',detail_product='" . $detailsp . "'  WHERE id_product=" . $id;
        pdo_execute($sql);
    }
}
