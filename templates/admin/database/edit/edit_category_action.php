<?php
include_once "../connect.php";
$id_category = $_GET['id_category'];

$name_category = $_POST['name_category'];

$sql = "UPDATE categories SET name_category = '$name_category' WHERE id_category = $id_category";
$result = $conn->query($sql);

header('Location: ../admin.php?table=categories');
