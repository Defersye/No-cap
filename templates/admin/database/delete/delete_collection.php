<?php
include_once "../connect.php";

$id_collection = $_GET['id_collection'];

$result = $conn->query("DELETE FROM collections WHERE id_collection = $id_collection");
header('Location: ../admin.php?table=collections');
