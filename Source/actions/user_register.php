<?php
require_once str_replace("//", "\\", $_SERVER['DOCUMENT_ROOT']) .
    '/ProjetTF/Source/controllers/User_controller.php';
$u = new \controllers\User_controller(true);
$u->register();

