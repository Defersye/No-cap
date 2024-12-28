<?php
include_once "../connect.php";

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$discount = $_POST['discount'];
$category_id = $_POST['category_id'];
$collection_id = $_POST['collection_id'];
$first_img = $_POST['first_img'];
$second_img = $_POST['second_img'];

$sql = "INSERT INTO products 
            (`id_product`, `name`, `description`, `price`,`discount`, `category_id`, `collection_id`, `first_img`, `second_img`) 
            VALUES (NULL, '$name', '$description', $price, $discount, $category_id, $collection_id, '$first_img', '$second_img')";
$result = $conn->query($sql);

header('Location: ../../admin_index.php?table=products');
