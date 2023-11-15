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
    



<h1>Liste du package</h1>

<?php
require_once('../../assets/php/middleware/connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Traitement du formulaire ici si nécessaire
    if (isset($_POST['selected_pictures']) && is_array($_POST['selected_pictures'])) {
        echo 'Images sélectionnées : <br>';
        foreach ($_POST['selected_pictures'] as $pictureUrl) {
            echo '<img src="' . $pictureUrl . '" alt="Image sélectionnée" style="max-width: 100px; max-height: 100px;">';
        }
    } else {
        echo 'Aucune image sélectionnée.';
    }
}

$query_users = $db_connect->query('SELECT * FROM user');


require_once('../../assets/php/middleware/connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['selected_pictures']) && is_array($_POST['selected_pictures'])) {
        echo 'Images sélectionnées : <br>';
        foreach ($_POST['selected_pictures'] as $pictureId) {
            // Remplacez "id" par la colonne appropriée de votre table "picture"
            $query_picture = $db_connect->prepare('SELECT * FROM picture WHERE id = :id');
            $query_picture->execute(['id' => $pictureId]);
            $picture = $query_picture->fetch();

            if ($picture) {
                echo '<img src="' . $picture['url'] . '" alt="' . $picture['name'] . '" style="max-width: 100px; max-height: 100px;">';
            } else {
                echo '<p>Image non trouvée</p>';
            }
        }
    } else {
        echo 'Aucune image sélectionnée.';
    }
}

$query_picture = $db_connect->query('SELECT * FROM picture');
?>

<form action="" method="post">
    <?php
    foreach ($query_picture as $picture) {
        echo '<div>';
        echo '<p>Name: ' . $picture['name'] . '</p>';
        echo '<img src="' . $picture['url'] . '" alt="' . $picture['name'] . '" style="max-width: 100px; max-height: 100px;">';
        echo '<input type="checkbox" name="selected_pictures[]" value="' . $picture['id'] . '"> Sélectionner';
        echo '</div>';
    }
    ?>
    <input type="submit" value="Valider la sélection">


