<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher les packages</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <script src="../../assets/js/main.js"></script>
</head>
<body>
<header>
        <nav class="nav nav-color">
            <ul class="container">
                <li>
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
    



<h1 class="title">Liste</h1>



<div class="form-size">

<?php
    require_once('../../assets/php/middleware/connect.php');

    try {
    
        $sql = "SELECT * FROM package pk INNER JOIN user u ON u.email = pk.user_email INNER JOIN picture p ON p.name = pk.picture_name";
        
    
        $result = $db_connect->query($sql);

        if ($result->rowCount() > 0) {
    
            foreach ($result as $row) {
                echo '<div style="padding-top: 60px; ">','</div>';
                echo "Email : " . $row["email"] . "<br>";
                echo '<div style="padding-top: 10px; padding-bottom: 10px;">';
                echo "Nom de l'image : " . $row["name"] . "<br>";
                echo '</div>';
                echo '<img src="' . $row["url"] . '" alt="Image" width="150px" height="150px"><br>';
            }
        } else {
            echo "Aucun résultat trouvé.";
        }
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
?>

</div>


