<?php
function add_dm($tenloai)
{
    $sql = "INSERT INTO category (name_cate) VALUES ('$tenloai')";
    pdo_execute($sql);
}

function delete_dm($id)
{
    $sql = "DELETE FROM category WHERE id_cate=" . $id;
    pdo_execute($sql);
}

function loadlist_dm()
{
    $sql = "SELECT * FROM category ORDER BY name_cate";
    $listdm = pdo_query($sql);
    return $listdm;
}
function edit_dm($id)
{
    $sql = "SELECT * FROM category WHERE id_cate=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_dm($id, $tenloai)
{
    $sql = "UPDATE category SET name_cate='" . $tenloai . "' WHERE id_cate=" . $id;
    pdo_execute($sql);
}
