<?php
require_once str_replace("//", "/", $_SERVER['DOCUMENT_ROOT']) .
    '/ProjetTF/Source/controllers/Admin_controller.php';
$a = new \controllers\admin_controller(true);
// Appeler la fonction
$toDelete = ($_GET['idUser']);
//echo $toDelete.' ';
$a->deleteControllers($toDelete);
