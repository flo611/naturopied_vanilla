<?php 

require_once('../../middleware/connect.php');

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
        $id = $_POST['id'];
        $url = $_POST['url'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $location = $_POST['location'];

        if (empty($url) || empty($name) || empty($description)|| empty($price)|| empty($location)) {
            echo "Tous les champs doivent être remplis.";
        } else {
            $sql = "UPDATE picture SET 
            url = :url, 
            name = :name, 
            description = :description, 
            price = :price, 
            location = :location
            WHERE id = :id";
            $stmt = $db_connect->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':url', $url);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':location', $location);
            $resultat = $stmt->execute();

            if ($resultat) {
            
                header("Location: http://localhost/public/naturopied_vanilla");
            } else {
                echo "Erreur lors de la mise à jour de la photo.";
            }
        }
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>