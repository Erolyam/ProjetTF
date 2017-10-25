<?php
require_once str_replace("//", "/", $_SERVER['DOCUMENT_ROOT']) .
    '/ProjetTF/Source/controllers/opCategorieController.php';
$a = new \controllers\opCategorieController(true);
// Appeler la fonction
$toDelete = ($_GET['idCategory']);
//echo $toDelete.' ';
$a->deleteCategoryControllers($toDelete);
