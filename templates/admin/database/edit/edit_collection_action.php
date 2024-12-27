<?php
include_once "../connect.php";
$id_collection = $_GET['id_collection'];

$name_collection = $_POST['name_collection'];

$sql = "UPDATE collections SET name_collection = '$name_collection' WHERE id_collection = $id_collection";
$result = $conn->query($sql);

header('Location: ../admin.php?table=collections');
