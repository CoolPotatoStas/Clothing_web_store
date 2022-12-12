<?php

function check($login, $password){

    require 'connect_db.php';
    $pdo = sql_connect();

    $sql = "SELECT id FROM admins where login=? and password=?";
    $query = $pdo->prepare($sql);
    $query->execute([$login, $password]);
    $result = $query->fetch();
    if (!empty($result)) return true;
    return false;
}