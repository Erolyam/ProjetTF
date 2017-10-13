<?php
require_once '../controllers/User_controller.php';
$u = new \controllers\User_controller(true);
$u->register();

