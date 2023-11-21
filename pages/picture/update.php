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

    <h1 class="title">Editer une photo</h1>

    <form action="../../assets/php/controller/picture/update_picture.php" method="POST" class="form-size">
        <div>
            <div class="">
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
            <div>
                <label class="label-margin" for="url">URL</label>
                <input type="text" id="url" name="url"  class="input-field">
            </div>
            <div>
                <label class="label-margin" for="name">Nom</label>
                <input type="text" id="name" name="name"  class="input-field">
            </div>
            <div>
                <label class="label-margin" for="description">Description</label>
                <input type="text" id="description" name="description"  class="input-field">
            </div>
            
            <div>
                <label class="label-margin" for="price">Prix</label>
                <input type="double" id="price" name="price"  class="input-field">
            </div>
            <div>
                <label class="label-margin" for="location">Location</label>
                <input type="text" id="location" name="location"  class="input-field">
            </div>
            </div>
            <button type="submit">Envoyer</button>
    </form>

</body>
</html>