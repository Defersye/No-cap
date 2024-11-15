<?php
include_once "../connect.php";

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = "INSERT INTO users (`id_user`, `full_name`, `login`, `email`, `password`) VALUES (NULL, '$full_name', '$login', '$email', '$password')";
$result = $conn->query($sql);

header('Location: ../admin.php?table=users');
