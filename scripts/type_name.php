<?php

function get_name($id_name){
    $pdo = sql_connect();
    $sql = "SELECT name FROM type where id=?";
    $query = $pdo->prepare($sql);
    $query->execute([$id_name]);
    return $query->fetch()[0];
}