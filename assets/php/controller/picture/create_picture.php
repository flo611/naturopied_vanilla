<?php

require_once('../../middleware/connect.php');

try {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!isset($_SESSION['form_submitted'])) {
            $_SESSION['form_submitted'] = true;

            $url = $_POST['url'];
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $location = $_POST['location'];

            $sql = "INSERT INTO picture (url, name, description, price, location) VALUES (:url, :name, :description, :price, :location)";
            $stmt = $db_connect->prepare($sql);

            $stmt->bindParam(':url', $url);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':location', $location);

            $result = $stmt->execute();

            if ($result) {
                $picture_id = $db_connect->lastInsertId();
                header("Location: http://localhost/public/naturopied_vanilla");
            } else {
                echo "Erreur lors de la création de la picture.";
            }
        } else {
            echo "Le formulaire a déjà été soumis. Vous ne pouvez pas soumettre le formulaire à nouveau.";
        }
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

?>