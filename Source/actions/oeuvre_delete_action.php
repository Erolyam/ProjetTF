<?php
require_once str_replace ("//", "\\", $_SERVER['DOCUMENT_ROOT']).
    '\ProjetTF\Source\controllers\ListingOeuvre_controller.php';
$a = new \controllers\ListingOeuvre_controller(true);
// Appeler la fonction
$toDelete=($_GET['idArtwork']);
echo $toDelete.' ';
$a->deleteControllers($toDelete);
