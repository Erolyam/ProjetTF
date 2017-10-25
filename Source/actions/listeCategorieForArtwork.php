<?php
require_once __DIR__.'../../controllers/addArtworkController.php';
$a = new \controllers\addArtworkController(true);
// Appeler la fonction
$listCategory = $a->getAllCategoriesController();

//foreach ($listCategory as $userDate)
//echo $userDate['idCategory'];