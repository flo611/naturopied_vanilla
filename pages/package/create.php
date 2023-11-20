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

    <h1>Créer un Package</h1>
    <form action="../../assets/php/controller/package/create_package.php" method="POST">

        <div>
            <select name="user-email" id="user-email">
                <option value="">-- Choisir une adresse email --</option>
                <?php
                        require_once('../../assets/php/middleware/connect.php');
                        
                        $users = $db_connect->query("SELECT user.email FROM user");
                        
                        foreach($users as $user) {
                            $user_email = $user['email'];
                            
                            echo "<option value='$user_email'>$user_email</option>";
                        }
                        ?>
            </select>
        </div>

        <div>
            <select name="picture-name" id="picture-name">
                <option value="">-- Choisir une image --</option>
                <?php
                        require_once('../../assets/php/middleware/connect.php');
                        
                        $pictures = $db_connect->query("SELECT picture.name FROM picture");
                        
                        foreach($pictures as $picture) {
                            $picture_name = $picture['name'];
                            
                            echo "<option value='$picture_name'>$picture_name</option>";
                        }
                        ?>
            </select>
        </div>

        <button type="submit">Envoyer</button>
    </form>