<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un utilisateur</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <script src="../../assets/js/main.js"></script>
</head>
<body>
    <header>
        <nav class="nav nav-color">
            <ul class="container">
                <li class="nav-padding">
                    <a href="../../index.php">Accueil</a>
                </li>
                <li >
                    <a href="./show.php">Afficher</a>
                </li>
                <li class="nav-padding">
                    <a href="./create.php">Créer</a>
                </li>
                <li>
                    <a href="./update.php">Editer</a>
                </li>
                <li class="nav-padding">
                    <a href="./delete.php">Supprimer</a>
                </li>
            </ul>
        </nav>
    </header>
    <div>
        <h1 class="title">Créer un User</h1>
        <form action="http://public/naturopied_vanilla/assets/php/controller/user/create_user.php" method="POST" class="form-size">
            <div>
            <div>
                <label for="email" class="label-margin">Email</label>
                <input type="text" id="email" name="email" class="input-field">
            </div>
            <div>
                <label for="alias" class="label-margin">Pseudonyme</label>
                <input type="text" id="alias" name="alias" class="input-field">
            </div>
            <div>
                <label for="password" class="label-margin">Mot de passe</label>
                <input type="password" id="password" name="password" class="input-field">
            </div>
            </div>
            <button type="submit">Envoyer</button>
        </form>
    </div>
</body>
</html>