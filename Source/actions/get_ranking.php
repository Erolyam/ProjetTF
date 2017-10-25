<?php
require_once __DIR__.'../../controllers/Ranking_controller.php';
require_once __DIR__.'../../controllers/opCategorieController.php';
$r = new \controllers\Ranking_controller(true);
$c = new \controllers\opCategorieController(true);
$listCategories = $c->getAllCategoriesControllers();
$rankingsList = array();
$daysList = array(7, 30, 365);
foreach ($listCategories as $category) {
    for ($i = 0; $i < count($daysList); $i++) {
        $rankingsList[$i][$category['name']] = $r->getAllRankings($category['idCategory'], $daysList[$i]);
    }
}
