<?php
require 'connect_db.php';

function get_product($id)
{
	$pdo = sql_connect();
	$sql = "SELECT * FROM items where id=?";
	$query = $pdo->prepare($sql);
	$query->execute([$id]);
	return $query->fetch();
}

function get_products_by_type($type)
{
	$pdo = sql_connect();
	$sql = "SELECT * FROM items where type_is=?";
	$query = $pdo->prepare($sql);
	$query->execute([$type]);
	return $query->fetchAll();
}
