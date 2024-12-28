<?php
include_once "../connect.php";

$name_collection = $_POST['name_collection'];

$sql = "INSERT INTO collections (`id_collection`, `name_collection`)  VALUES (NULL, '$name_collection')";
$result = $conn->query($sql);

header('Location: ../../admin_index.php?table=collections');
