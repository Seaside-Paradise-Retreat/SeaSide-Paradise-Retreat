<?php
require(__DIR__ . '/../../../Models/admin.model.php');
$id = $_GET['id'] ? $_GET['id'] : null;
if (isset($id))
{
    $statement = db() ->prepare("delete from rooms where id = :id");
    $statement->execute([':id' => $id]);

    header('Location: /admin');
}