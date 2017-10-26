<?php
require_once __DIR__.'../../controllers/addArtworkController.php';
$a = new \controllers\addArtworkController(true);
// Appeler la fonction
$category_data = $_POST;
$a->addArtworkController($category_data);

