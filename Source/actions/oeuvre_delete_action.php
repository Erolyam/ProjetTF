<?php
require_once __DIR__.'../../controllers/ListingOeuvre_controller.php';
$a = new \controllers\ListingOeuvre_controller(true);
// Appeler la fonction
$toDelete = ($_GET['idArtwork']);
echo $toDelete . ' ';
$a->deleteControllers($toDelete);
