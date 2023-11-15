<?php

$sql = "SELECT user.id as user_id, user.user_email, user.user_alias, 
               picture.id as picture_id, picture.picture_name
        FROM user
        LEFT JOIN picture ON user.id = picture.user_id";


if ($result->num_rows > 0) {
    echo '<form action="process_selection.php" method="post">'; 
    
    while ($row = $result->fetch_assoc()) {
        $userId = $row['user_id'];
        $userEmail = $row['user_email'];
        $userAlias = $row['user_alias'];
        $pictureId = $row['picture_id'];
        $pictureName = $row['picture_name'];

        $userPackage = [
            'userId' => $userId,
            'userEmail' => $userEmail,
            'userAlias' => $userAlias,
            'picture' => [
                [
                    'pictureId' => $pictureId,
                    'pictureName' => $pictureName,
                ]
            ]
        ];

        echo '<input type="checkbox" name="selectedPictures[]" value="' . $pictureId . '"> ';
        echo '<label>' . $userAlias . ' - ' . $pictureName . '</label><br>';

        print_r($userPackage);
    }

    echo '<input type="submit" value="Valider la sélection">';
    echo '</form>';
} else {
    echo "0 results";
}
?>