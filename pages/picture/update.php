<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editer une picture</title>
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

    <h1>Editer une photo</h1>

    <form action="http://public/naturopied_vanilla/assets/php/controller/picture/update_picture.php" method="POST">
        <div>
            <label for="id">Id</label>
            <input type="int" id="id" name="id">
            <div>
                <label for="url">url</label>
                <input type="text" id="url" name="url">
            </div>
            <div>
                <label for="name">Nom</label>
                <input type="text" id="name" name="name">
            </div>
            <div>
                <label for="description">Description</label>
                <input type="text" id="description" name="description">
            </div>
            </div>
            <div>
                <label for="price">Prix</label>
                <input type="double" id="price" name="price">
            </div>
            <div>
                <label for="location">location</label>
                <input type="text" id="location" name="location">
            </div>
            <button type="submit">Envoyer</button>
    </form>

</body>
</html>