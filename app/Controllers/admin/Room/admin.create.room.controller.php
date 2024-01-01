<?php
require(__DIR__ . '/../../../Databases/database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['name']) and !empty($_POST['type']) and !empty($_POST['price']) and !empty($_POST['availability']) and !empty($_POST['description']) and !empty($_POST['rating'])) {

        // Insert into rooms table
        $insertRoomStatement = $connection->prepare("INSERT INTO rooms (name, type, price, availability, description, rating) VALUES (:name, :type, :price, :availability, :description, :rating)");
        $insertRoomStatement->execute([
            ':name' => $_POST['name'],
            ':type' => $_POST['type'],
            ':price' => $_POST['price'],
            ':availability' => $_POST['availability'],
            ':description' => $_POST['description'],
            ':rating' => $_POST['rating'],
        ]);

        $statement = $connection->prepare("SELECT id FROM rooms ORDER BY id DESC LIMIT 1");

        $statement->execute();
        $newlyInsertedRoom = $statement->fetch(PDO::FETCH_ASSOC);
    
        if ($newlyInsertedRoom) {
            $roomId = $newlyInsertedRoom['id'];
            

            if (!empty($roomId)) {
                if (!empty($_POST['image_url']) && is_array($_POST['image_url'])) {
                    $image_urls = explode(" ",$_POST['image_url']);
                    $image_urls = array_map('trim', $image_urls);
                    
                    foreach ($image_urls as $image_url) {
                        $insertDetailStatement = $connection->prepare("INSERT INTO detail_room (id_room, image_url) VALUES (:roomId, :image_url)");
                        $insertDetailStatement->execute([
                            ':roomId' => $roomId,
                            ':image_url' => $image_url
                        ]);
                    }
                }

                if (!empty($_POST['convenient'])) {
                    $statement = $connection -> prepare("INSERT INTO convenients(id_room, convenient) VALUES (:roomId, :convenient)");
                    $statement ->execute([
                        ':roomId' => $roomId,
                        ':convenient' => $_POST['convenient']
                    ]);
                }

        // Insert into detail_room table
      

        header('location: /admin');
    } else {
        // Xử lý lỗi khi không tìm thấy bản ghi mới thêm vào
        echo "Error: Unable to retrieve newly inserted room.";
    }
} 
}
}


require(__DIR__ . "/../../../Views/admin/Room/Admin.Create.Room.php");