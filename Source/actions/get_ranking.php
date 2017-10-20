<?php
require_once str_replace ("//", "\\", $_SERVER['DOCUMENT_ROOT']).
    '\ProjetTF\Source\controllers\Ranking_controller.php';
$a = new \controllers\Ranking_controller(true);
