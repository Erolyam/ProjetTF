<?php
require_once __DIR__.'../../controllers/Admin_controller.php';
$a = new \controllers\admin_controller(true);
// Appeler la fonction
$listUsers = $a->getAllUsersControllers();
