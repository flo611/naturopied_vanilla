<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un utilisateur</title>
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
<h1 class="title">Supprimer un User</h1>
    <form action="../../assets/php/controller/user/delete_user.php" method="POST" class="form-size">
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
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>