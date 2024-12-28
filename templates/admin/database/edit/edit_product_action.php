<?php
include_once "../connect.php";
$id_product = $_GET['id_product'];

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$discount = $_POST['discount'];
$category_id = $_POST['category_id'];
$collection_id = $_POST['collection_id'];

for ($i = 0; $i < count($_FILES['product_img']['name']); $i++) {
   $img = $_FILES['product_img'];
   $img_name = $img['name'][$i];
   $img_path =  $_SERVER['DOCUMENT_ROOT'] . '/assets/img/database/products/' . $img_name;
   if (!move_uploaded_file($img['tmp_name'][$i], $img_path)) {
      return 'Error uploading image!';
   }
   $img_names[] = $img_name;
}

$sql = "UPDATE products SET 
name = '$name', 
description = '$description', 
price = $price, 
discount = $discount,
category_id = $category_id, 
collection_id = $collection_id, 
first_img = '$img_names[0]', 
second_img = '$img_names[1]'
WHERE id_product = $id_product";
$result = $conn->query($sql);

header('Location: ../../admin_index.php?table=products');
