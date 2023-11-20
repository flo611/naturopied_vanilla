<?php
require_once('../../middleware/connect.php');

try {
    $user_email = $_POST['user-email'];
    $picture_name = $_POST['picture-name'];

    $sql = "UPDATE package SET user_email = :user_email, picture_name = :picture_name WHERE package.user_email = :user_email";

    $stmt = $db_connect->prepare($sql);
    $stmt->bindParam(':user_email', $user_email, PDO::PARAM_STR);
    $stmt->bindParam(':picture_name', $picture_name, PDO::PARAM_STR);
 
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        // echo "Mise à jour réussie.";
        header("Location: http://localhost/public/naturopied_vanilla");

    } else {
        echo "Aucun résultat trouvé."; 
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
    