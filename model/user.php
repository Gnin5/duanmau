<?php
function add_user($nameuser, $pass, $email, $addres, $numberPhone)
{
    $sql = "INSERT INTO user (user_name, pass, email, addres, numberPhone) VALUES ('$nameuser','$pass', '$email', '$addres', '$numberPhone' )";
    pdo_execute($sql);
}
function check_user($nameuser, $pass)
{
    $sql = "SELECT * FROM user WHERE user_name='" . $nameuser . "' AND pass='" . $pass . "'";
    $user = pdo_query_one($sql);
    return $user;
}
function check_email($email)
{
    $sql = "SELECT * FROM user WHERE email='" . $email . "'";
    $user = pdo_query_one($sql);
    return $user;
}
function update_user($id, $user, $pass, $email, $addres, $phone)
{
    $sql = "UPDATE user SET user_name='" . $user . "', pass='" . $pass . "',email='" . $email . "',addres='" . $addres . "' ,numberPhone='" . $phone . "'  WHERE id_user=" . $id;
    pdo_execute($sql);
}
function load_user()
{
    $sql = "SELECT * FROM user ORDER BY id_user DESC";
    $listuser = pdo_query($sql);
    return $listuser;
}
function delete_tk($id)
{
    $sql = "DELETE FROM user WHERE id_user=" . $id;
    pdo_execute($sql);
}
