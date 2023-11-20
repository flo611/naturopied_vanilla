<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher les utilisateurs</title>
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
    
    <h1>Liste des utilisateurs</h1>

    <?php 
   
   require_once('../../assets/php/middleware/connect.php');

   $query_user = $db_connect->query('SELECT * FROM user');

   foreach ($query_user as $user) {
       echo $user['email'];
   }

?>

</form>

<?php
require_once('../../assets/php/middleware/connect.php');


// Récupérer les images disponibles
$query_pictures = $db_connect->query('SELECT * FROM picture');
$pictures = $query_pictures->fetchAll(PDO::FETCH_ASSOC);

// Récupérer les utilisateurs
$query_user = $db_connect->query('SELECT * FROM user');
$users = $query_user->fetchAll(PDO::FETCH_ASSOC);
?>



</body>
</html>