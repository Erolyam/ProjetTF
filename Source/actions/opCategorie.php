<?php
require_once str_replace ("//", "\\", $_SERVER['DOCUMENT_ROOT']).
    '\ProjetTF\Source\controllers\opCategorieController.php';
$o = new \controllers\opCategorieController(true);
// Appeler la fonction
$o->addCategoryController();

