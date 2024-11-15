<?php
include_once "../connect.php";

$id_user = $_GET['id_user'];

$result = $conn->query("DELETE FROM users WHERE id_user = $id_user");
header('Location: ../admin.php?table=users');
