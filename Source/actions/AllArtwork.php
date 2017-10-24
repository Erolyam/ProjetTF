<?php
require_once '../controllers/Artwork_controller1.php';
$u = new \controllers\Artwork_controller1(true);

if(isset($_GET['idArtwork'])){
	$u->view($_GET['idArtwork']);
}
if(isset($_POST['AddComment'])){
	$u->AddComment();
}
if(isset($_POST['edit'])){
	$u->UpdateComment();
}


