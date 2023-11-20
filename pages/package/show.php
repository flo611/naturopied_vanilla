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
        <nav>
            <ul>
                <li>
                    <a href="../../index.php">Accueil</a>
                </li>
                <li>
                    <a href="./show.php">Afficher</a>
                </li>
                <li>
                    <a href="./create.php">Créer</a>
                </li>
                <li>
                    <a href="./update.php">Editer</a>
                </li>
                <li>
                    <a href="./delete.php">Supprimer</a>
                </li>
            </ul>
        </nav>
    </header>
    



<h1>Liste des packages</h1>




<?php
    require_once('../../assets/php/middleware/connect.php');

    try {
    
        $sql = "SELECT * FROM package pk INNER JOIN user u ON u.email = pk.user_email INNER JOIN picture p ON p.name = pk.picture_name";
        
    
        $result = $db_connect->query($sql);

        if ($result->rowCount() > 0) {
    
            foreach ($result as $row) {
                
                echo "Email : " . $row["email"] . "<br>";
                echo "Nom de l'image : " . $row["name"] . "<br>";
        
            }
        } else {
            echo "Aucun résultat trouvé.";
        }
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
?>




