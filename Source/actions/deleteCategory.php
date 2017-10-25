<?php
require_once __DIR__.'../../controllers/opCategorieController.php';
$a = new \controllers\opCategorieController(true);
// Appeler la fonction
$toDelete = ($_GET['idCategory']);
//echo $toDelete.' ';
$a->deleteCategoryControllers($toDelete);
