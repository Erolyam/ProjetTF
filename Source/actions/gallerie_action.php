<?php
require_once str_replace ("//", "/", $_SERVER['DOCUMENT_ROOT']).
    '/ProjetTF/Source/controllers/gallerie_controller.php';
$a = new \controllers\gallerie_controller();
// Appeler la fonction
$listArtwork=$a->getArtwork();

