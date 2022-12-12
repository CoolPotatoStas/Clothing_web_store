<?php
require 'connect_db.php';
$pdo = sql_connect();
$id = $_GET['id'];
// delete
	$sql = "DELETE FROM items WHERE id=?";
	$query = $pdo->prepare($sql);
	$query->execute([$id]);

header("Location: /admin.php");
