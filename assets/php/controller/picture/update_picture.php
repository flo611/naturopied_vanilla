<?php 

require_once('../../middleware/connect.php');

$picture_name = $_POST['picture-name'];
$url = $_POST['url'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$location = $_POST['location'];

$db_connect->query("UPDATE picture SET url='$url', name='$name', description='$description', price='$price', location='$location' WHERE picture.name = '$picture_name'");

header("Location: http://localhost/public/naturopied_vanilla");
