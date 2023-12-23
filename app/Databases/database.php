<?php

$hostname = "localhost";
$database = "Seaside_paradise_retreat";
$username = "root";
$password = "";

$dsn = "mysql:host=$hostname;dbname=$database;charset=utf8mb4"; //$dsn: Database source name
$db = new PDO($dsn, $username, $password);
