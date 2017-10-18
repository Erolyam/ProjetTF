<?php
require_once str_replace ("//", "\\", $_SERVER['DOCUMENT_ROOT']).
    '\ProjetTF\Source\controllers\Artwork_controller.php';
$a = new \controllers\Artwork_controller(true);
// Appeler la fonction
$toGet=($_GET['idArtwork']);
$artwork = $a->getArtworkById($toGet);