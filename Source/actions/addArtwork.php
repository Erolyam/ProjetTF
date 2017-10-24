<?php
require_once str_replace ("//", "/", $_SERVER['DOCUMENT_ROOT']).'/ProjetTF/Source/controllers/addArtworkController.php';
$a = new \controllers\addArtworkController(true);
// Appeler la fonction
$category_data = $_POST;
$a->addArtworkController($category_data);

