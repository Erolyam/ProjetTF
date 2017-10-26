<?php
require_once __DIR__.'../../controllers/Artwork_controller1.php';

//session_start();
$u = new \controllers\Artwork_controller1(true);

if (isset($_GET['idArtwork'])) {
    $u->view($_GET['idArtwork']);
}
if (isset($_POST['AddComment'])) {
	$Comment_data = array();
        $Comment_data['idArtwork'] = $_POST['idArtwork'];
        $Comment_data['comment'] = $_POST['comment'];
        $Comment_data['idUser'] = $_SESSION['idUser'];
        //$Artwork = $_POST['idArtwork'];
    $u->AddComment($Comment_data);
}
if (isset($_POST['edit'])) {
    $u->UpdateComment();
}
if (isset($_GET['cat'])) {
    $u->getAllcategotieByid($_GET['cat']);
}
$getAllCategorie = $u->getAllcategotie();

