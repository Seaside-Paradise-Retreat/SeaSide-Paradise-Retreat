<?php
require(__DIR__ . '/../../../Models/admin.model.php');
$id = $_GET['id'] ? $_GET['id'] : null;
if (isset($id))
{
    $statement = $connection ->prepare("UPDATE booking SET availability = 0 WHERE id = :id");
    $statement->execute([':id' => $id]);

    header('Location: /admin');
}