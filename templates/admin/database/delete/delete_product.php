<?php
include_once "../connect.php";

$id_product = $_GET['id_product'];

$result = $conn->query("DELETE FROM products WHERE id_product = $id_product");
header('Location: ../admin.php?table=products');
