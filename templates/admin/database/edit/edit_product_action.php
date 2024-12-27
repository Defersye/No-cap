<?php
include_once "../connect.php";
$id_product = $_GET['id_product'];

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$discount = $_POST['discount'];
$category_id = $_POST['category_id'];
$collection_id = $_POST['collection_id'];
$first_img = $_POST['first_img'];
$second_img = $_POST['second_img'];

$sql = "UPDATE products SET 
name = '$name', 
description = '$description', 
price = $price, 
discount = $discount,
category_id = $category_id, 
collection_id = $collection_id, 
first_img = '$first_img', 
second_img = '$second_img' 
WHERE id_product = $id_product";
$result = $conn->query($sql);

header('Location: ../admin.php?table=products');
