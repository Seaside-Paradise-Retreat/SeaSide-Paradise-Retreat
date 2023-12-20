<?php
require_once ("./app/Models/home/card.model.php");
require_once ("./app/Models/home/detailroom.model.php");
$rooms= getRooms();
$detail_room= detail_rooms();
require "app/views/home/index.view.php";