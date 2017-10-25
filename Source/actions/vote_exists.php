<?php
include str_replace("//", "/", $_SERVER['DOCUMENT_ROOT']) . '/ProjetTF/Source/controllers/vote_controller.php';
$u = new \controllers\vote_controller(true);

$exist = $u->existDetail();