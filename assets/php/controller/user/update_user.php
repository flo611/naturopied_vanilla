<?php 

require_once('../../middleware/connect.php');

$user_email = $_POST['user-email'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$alias = $_POST['alias'];

$db_connect->query("UPDATE user SET email='$email', password='$password', alias='$alias' WHERE user.email = '$user_email'");

header("Location: http://localhost/public/naturopied_vanilla");
