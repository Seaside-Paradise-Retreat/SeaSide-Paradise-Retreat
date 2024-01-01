<?php 
require ("./app/Databases/database.php");
?>
<?php 
    function bill($id_booking,$date,$total_price){
        global $connection;
        $query = "INSERT INTO bill (id_booking,date,total_price)  VALUE(:id_booking, :date,:total_price)";
        $statement = $connection->prepare($query);
        $statement->bindParam(':id_booking',$id_booking, PDO::PARAM_INT);
        $statement->bindValue(":date", date("Y-m-d H:i:s"));
        $statement->bindParam(':total_price',$total_price);
        $statement->execute();
        $bill = $statement->fetch(PDO::FETCH_ASSOC);
        $id_bill = $connection->lastInsertId();
        return $id_bill;
    }
?>