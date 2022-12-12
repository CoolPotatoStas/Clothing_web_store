<?php
require_once 'scripts/template.php';

if (isset($_GET['type'])) {
	require_once 'scripts/filters.php';
	$products = get_products_by_type($_GET['type']);
//	$productList = template('views/products.php', ['products' => $products]);
    $productList = template('views/table.php', ['products' => $products]);

} else {
	require_once 'scripts/filters.php';
    $products = get_products_by_type(1);
//	$productList = template('views/products.php', ['products' => $products]);
    $productList = template('views/table.php', ['products' => $products]);
}

$layout = template('layout.php', ['content' => $productList]);

echo ($layout);
