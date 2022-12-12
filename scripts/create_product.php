<?php
require 'connect_db.php';
$pdo = sql_connect();

$type = $_POST['type'];
$title = $_POST['title'];
$size = $_POST['size'];
$description = $_POST['description'];
$price = $_POST['price'];

$img = $_FILES['img']['name'];
$imgPath = "../assets/tiles/" . basename($img);

if (move_uploaded_file($_FILES['img']['tmp_name'], $imgPath)) {
	echo "success";
}

// Create
if (isset($_POST['submit'])) {
	$sql = ("INSERT INTO items (type_is, title, size, description, price, img_name) VALUES(?,?,?,?,?,?)");
	$query = $pdo->prepare($sql);
	$query->execute([$type, $title, $size, $description, $price, $img]);
} else {
	echo 'error';
}
header("Location: /admin.php");
