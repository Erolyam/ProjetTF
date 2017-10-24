<?php
require_once '../controllers/vote_controller.php';
$u = new \controllers\vote_controller(true);

if(isset($_POST['like'])){
    $u->like();
}
if(isset($_POST['dislike'])) {
    $u->dislike();
}