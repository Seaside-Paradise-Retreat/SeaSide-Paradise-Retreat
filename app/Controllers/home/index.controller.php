<?php
require_once ("./app/Models/home/card.model.php");
require_once ("./app/Models/home/detailroom.model.php");
$rooms= getRooms();
require "app/views/home/index.view.php";