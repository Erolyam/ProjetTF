<?php
require_once __DIR__.'../../controllers/User_controller.php';
$u = new \controllers\User_controller(true);
$u->register();

