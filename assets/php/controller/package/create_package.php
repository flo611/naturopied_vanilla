
<?php
require_once('../../middleware/connect.php');

try {
   
    $user_email = $_POST['user-email'];
    $picture_name = $_POST['picture-name'];


    $sql = "INSERT INTO package(id, user_email, picture_name) VALUES (NULL, :user_email, :picture_name)";

  
    $stmt = $db_connect->prepare($sql);

  
    $stmt->bindParam(':user_email', $user_email, PDO::PARAM_STR);
    $stmt->bindParam(':picture_name', $picture_name, PDO::PARAM_STR);


    $stmt->execute();

    
    if ($stmt->rowCount() > 0) {
        // echo "Création réussie. Nouvel ID de package : " . $db_connect->lastInsertId();
header("Location: http://localhost/public/naturopied_vanilla");

    } else {
        echo "Échec de l'insertion.";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>