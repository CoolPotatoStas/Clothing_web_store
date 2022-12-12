<?php
require 'connect_db.php';

function get_products(){
    $pdo = sql_connect();
    $products = $pdo->query('SELECT * FROM items')->fetchAll();

    return $products;
}

