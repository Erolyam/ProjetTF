<?php
require_once str_replace ("//", "/", $_SERVER['DOCUMENT_ROOT']).'/ProjetTF/Source/controllers/addArtworkController.php';
$a = new \controllers\addArtworkController(true);
// Appeler la fonction
$category_data = $_POST;

$a->addArtworkController($category_data);

//echo $category_data['title'].' ';
//echo date('Y-m-d').' ';
//echo $category_data['description'].' ';
//echo $category_data['category'].' ';
//echo $category_data['idUser'].' et ';
//echo $_SESSION['idUser'].' ';

