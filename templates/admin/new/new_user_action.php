<?php
include_once "../connect.php";

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$avatar = $_POST['avatar'];

$sql = "INSERT INTO users (`id_user`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$avatar')";
$result = $conn->query($sql);

header('Location: ../admin.php?table=users');
