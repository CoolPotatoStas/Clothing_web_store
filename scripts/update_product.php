<?php
require 'connect_db.php';
$pdo = sql_connect();

$id = $_POST['id'];
//$type = $_POST['type'];
$title = $_POST['title'];
$size = $_POST['size'];
$description = $_POST['description'];
$price = $_POST['price'];
$img_name = $_POST['img'];

if (isset($_POST['submit'])) {
	$sqll = "UPDATE items SET title=?, size=?, description=?, price=?, img_name=? WHERE id=?";
	$querys = $pdo->prepare($sqll);
	$querys->execute([$title, $size, $description, $price, $img_name, $id]);
} else {
	echo 'error';
}

header("Location: /admin.php");
