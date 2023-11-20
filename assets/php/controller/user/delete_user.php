<?php 

require_once('../../middleware/connect.php');

$user_email = $_POST['user-email'];


$db_connect->query("DELETE FROM `user` WHERE user.email = '$user_email'");

header("Location: http://localhost/public/naturopied_vanilla");