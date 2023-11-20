<?php
require_once('../../middleware/connect.php');

$picture_name = $_POST['picture-name'] ?? null;
// $id = intval($id);


$db_connect->query("DELETE FROM `package` WHERE package.picture_name = '$picture_name'");


header("Location: http://localhost/public/naturopied_vanilla");
?>