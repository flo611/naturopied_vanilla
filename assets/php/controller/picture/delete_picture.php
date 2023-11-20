<?php 

require_once('../../middleware/connect.php');

$picture_name = $_POST['picture-name'];

$db_connect->query("DELETE FROM `picture` WHERE picture.name = '$picture_name'");

header("Location: http://localhost/public/naturopied_vanilla");

