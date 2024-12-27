<?php
include_once "../connect.php";
$id_user = $_GET['id_user'];

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$avatar = $_POST['avatar'];

$sql = "UPDATE users SET full_name = '$full_name', login = '$login', email = '$email', password = '$password', avatar = '$avatar' WHERE id_user = $id_user";
$result = $conn->query($sql);

header('Location: ../admin.php?table=users');
