<?php
require_once __DIR__.'../../controllers/Artwork_controller1.php';


$u = new \controllers\Artwork_controller1(true);

if (isset($_GET['idArtwork'])) {
    $u->view($_GET['idArtwork']);
}
if (isset($_POST['AddComment'])) {
    $u->AddComment();
}
if (isset($_POST['edit'])) {
    $u->UpdateComment();
}
if (isset($_GET['cat'])) {
    $u->getAllcategotieByid($_GET['cat']);
}
$getAllCategorie = $u->getAllcategotie();

