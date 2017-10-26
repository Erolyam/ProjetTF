<?php
require_once __DIR__.'../../controllers/gallerie_controller.php';
$a = new \controllers\gallerie_controller(true);
// Appeler la fonction
$listArtwork = $a->getArtwork();

