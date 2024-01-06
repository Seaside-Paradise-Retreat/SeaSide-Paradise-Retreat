<?php 
require ("./app/Databases/database.php");
?>
<?php 
    function add_favourite($id_room,$id_user){
        global $connection;
        $query = "INSERT INTO favorite(id_room, id_user) VALUE(:id_room,:id_user)";
        $statement = $connection->prepare($query);
        $statement->bindParam(':id_room',$id_room,PDO::PARAM_INT);
        $statement->bindParam(':id_user',$id_user,PDO::PARAM_INT);
        $statement->execute();
        $id_favorite = $connection->lastInsertId();
        return $id_favorite;
    }

    function get_list_favorite($id_user) 
    // trong này seclect ra có phàn tử là id của phòng đã được thêm vào yêu thích
    //1 Duluxe Deluxe 50.00 1 Deluxe Rooms are luxurious and spacious hotel acco... 4
    {
    global $connection;
    $query = "SELECT r.*
    FROM favorite f
    JOIN rooms r ON f.id_room = r.id
    WHERE f.id_user = :id_user;";
    $statement = $connection->prepare($query);
    $statement->bindParam(':id_user', $id_user);
    $statement->execute();  
    $results = $statement->fetchAll();      
    return $results;
    }   

// lấy $favorite_room_id từ function trên (sử dụng hàm function getRoomId($roomId) đã được đinh nghĩa ở model detail)


    function un_favorite($id_favorite){
            global $connection;
            $statement = $connection->prepare("delete from favorite where id = :id");
            $statement->bindParam(':id',$id_favorite);
            $statement->execute();
        }       

    function isAdded($id_room, $id_user)
    {
        $isAdded = false; // if = false: phòng chưa được thêm vào yêu thích
        $favorite_rooms = get_list_favorite($id_user);
        foreach ($favorite_rooms as $favorite_room) {
            if ($favorite_room['id'] == $id_room) {
                $isAdded = true;
                break;
            }
        }
        return $isAdded;
    }
?>
