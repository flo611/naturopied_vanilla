<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher les pictures</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <script src="../../assets/js/main.js"></script>
</head>
<body>
<header>
        <nav class="nav nav-color">
            <ul class="container">
                <li >
                    <a href="../../index.php">Accueil</a>
                </li>
                <li class="nav-padding">
                    <a href="./show.php">Afficher</a>
                </li>
                <li>
                    <a href="./create.php">Créer</a>
                </li>
                <li class="nav-padding">
                    <a href="./update.php">Editer</a>
                </li>
                <li>
                    <a href="./delete.php">Supprimer</a>
                </li>
            </ul>
        </nav>
    </header>
    



<h1 class="title">Liste </h1>

<div class="image-container">
<?php 

require_once('../../assets/php/middleware/connect.php');

$query_picture = $db_connect->query('SELECT * FROM picture');

foreach ($query_picture as $picture) {
    $url = $picture['url'];
    $name = $picture['name'];
    echo "<img src='$url' alt='$name' width='150px' height='150px' />";
}

?>
</div>

