<?php
namespace controllers;
class gallerie_controller{
    private $model;

    function __construct() {
        session_start();
        // connecting to model
        require_once str_replace ("//", "\\", $_SERVER['DOCUMENT_ROOT']).'\ProjetTF\Source\models\gallerie_model.php';

        $this->model = new \models\gallerie_model();

    }

    public function getArtwork(){
        $recent9 = $this->model->getRecent();
        $recent9 = $recent9->fetch_all(MYSQLI_ASSOC);
        return $recent9;
    }

}