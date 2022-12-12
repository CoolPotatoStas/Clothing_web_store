<?php
$login = $_POST['login'];
$pas = $_POST['password'];

require_once 'check_admin.php';

$result_of_search = check($login, $pas);

if ($result_of_search) {
	session_start();
	$_SESSION['admin'] = true;
}
header("Location: /admin.php");
