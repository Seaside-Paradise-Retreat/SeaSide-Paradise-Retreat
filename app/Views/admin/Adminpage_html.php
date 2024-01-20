<?php
session_start();
$role = $_SESSION['role'];
if ($role == 'admin') {
    include(__DIR__ . "/../layouts/admin.navbar.php");
    include(__DIR__ . "/../../Databases/database.php");
    require(__DIR__ . "/../admin/User/Admin.ShowView.php");
}
else {
    header("Location: /");
}

