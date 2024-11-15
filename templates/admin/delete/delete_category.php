<?php
include_once "../connect.php";

$id_category = $_GET['id_category'];

$result = $conn->query("DELETE FROM categories WHERE id_category = $id_category");
header('Location: ../admin.php?table=categories');
