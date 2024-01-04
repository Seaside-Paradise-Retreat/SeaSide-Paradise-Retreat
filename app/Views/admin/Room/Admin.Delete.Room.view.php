<?php
require(__DIR__ . '/../../../Models/admin.model.php');
$id = $_GET['id'] ? $_GET['id'] : null;
if (isset($id))
{
    $updateStatement = $connection->prepare("UPDATE rooms SET availability = 0 WHERE id = :id");
    $updateStatement->execute([':id' => $id]);

    header('Location: /admin');
}