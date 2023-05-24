<?php
function add_dm($tenloai)
{
    $sql = "INSERT INTO category (name_cate) VALUES ('$tenloai')";
    pdo_execute($sql);
}
