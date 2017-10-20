<?php
require_once str_replace ("//", "/", $_SERVER['DOCUMENT_ROOT']).
    '/ProjetTF/Source/controllers/opCategorieController.php';
$a = new \controllers\opCategorieController(true);
// Appeler la fonction
$listCategories=$a->getAllCategoriesControllers();
