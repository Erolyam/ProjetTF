<?php
include __DIR__.'../../controllers/vote_controller.php';
$u = new \controllers\vote_controller(true);

$exist = $u->existDetail();