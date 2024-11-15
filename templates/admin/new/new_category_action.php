<?php
include_once "../connect.php";

$name_category = $_POST['name_category'];

$sql = "INSERT INTO categories (`id_category`, `name_category`)  VALUES (NULL, '$name_category')";
$result = $conn->query($sql);

header('Location: ../admin.php?table=categories');
