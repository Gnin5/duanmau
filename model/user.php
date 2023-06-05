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
